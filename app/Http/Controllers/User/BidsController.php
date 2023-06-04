<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\OrderBid;
use App\Models\Post;
use Illuminate\Http\Request;

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
}
