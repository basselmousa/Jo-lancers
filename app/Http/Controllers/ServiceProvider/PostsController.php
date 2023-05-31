<?php

namespace App\Http\Controllers\ServiceProvider;

use App\Http\Controllers\Controller;
use App\Models\Currency;
use App\Models\OrderBid;
use App\Models\Post;
use App\Models\PostSkill;
use App\Models\ServiceType;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class PostsController extends Controller
{
    //

    public function index()
    {
        $posts = Post::all();
        return view("service-provider.posts.index",compact("posts",));
    }

    public function myBids()
    {

        $posts = OrderBid::where("service_provider_id",auth("provider")->id())->get();
//        dd($posts[0]->skills[0]->skill);
        return view("users.posts.bids",compact("posts"));
    }
    public function createBid(Request $request,Post $post)
    {
        $request->validate([
            "bid" => "required|numeric",
            "proposal" => "required",
            "deliver_in_days" => "required|numeric",

        ]);
        if ($request->bid > $post->max_bud){
            throw ValidationException::withMessages(["bid"=>"Bid Must Be Less Or Equal To " . $post->max_bud]);
        }
         OrderBid::create([
            "bid" => $request->bid,
            "proposal" => $request->proposal,
            "deliver_in_days" => $request->deliver_in_days,
            "post_id" => $post->id,
            "service_provider_id" => auth("provider")->id()
        ]);
        return back()->with("success","Bid Created Successfully");

    }
}
