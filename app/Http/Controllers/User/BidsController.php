<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\OrderBid;
use App\Models\Post;
use App\Models\Rate;
use App\Models\ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class BidsController extends Controller
{
    //

    public function index(Request $request, Post $post)
    {
        $bids = OrderBid::with(["provider"])->where("post_id",$post->id)->get();
        return view("users.posts.postBids",compact("bids"));
    }

    public function accept(Request $request, OrderBid $bid)
    {

        $post = Post::where("id",$bid->post_id)->first();
        $post->update([
            "order_bid_id" => $bid->id
        ]);


        return redirect()->route("user.post.my-posts")->with("success","Bid Accepted Successfully");
    }

    public function acceptedBidPosts()
    {
        $posts = Post::where("user_id","=" ,auth("web")->id())->whereNotNull("order_bid_id")->get();
        return view("users.posts.accepted-bids",compact("posts"));

    }

    public function showProviderProfile(Request $request,ServiceProvider $provider)
    {
        //
//        $provider = ServiceProvider::with(["works","skill"])->find($bid->service_provider_id);
        $rate =Rate::with(["provider.skill.skill"])//->join("service_providers","service_providers.id" ,"=","rates.service_provider_id")
        ->select([DB::raw("ROUND(avg(rate)) as rate")])
            ->groupBy("rates.service_provider_id")
            ->first();
        $rates = Rate::with("user")->where("service_provider_id",$provider->id)->get();
//        dd($provider);
//        dd($rates);

        return view("users.posts.provider-profile",compact("provider",'rate','rates'));
    }

    public function download_cv(Request $request,ServiceProvider $provider)
    {
        return Storage::download($provider->cv,$provider->full_name .".". pathinfo(asset("storage/".$provider->cv),PATHINFO_EXTENSION));

    }
}
