<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Currency;
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
        $skills = ServiceType::all();
        $currencies = Currency::all();
        $posts = Post::where("user_id","<>" ,auth("web")->id())->get();
        return view("users.posts.index",compact("posts","skills","currencies"));
    }

    public function posts()
    {
        $skills = ServiceType::all();
        $currencies = Currency::all();
        $posts = Post::where("user_id","=" ,auth("web")->id())->get();
//        dd($posts[0]->skills[0]->skill);
        return view("users.posts.index",compact("posts","skills","currencies"));
    }
    public function create(Request $request)
    {
        $request->validate([
            "title" => "required",
            "description" => "required",
            "min_bud" => "required|numeric",
            "max_bud" => "required|numeric|gt:min_bud",
            "skills" => "required",
            "currency" => "required",
            "image" => "nullable|mimes:jpg,jpeg,png|max:10000"
        ]);

        $post = Post::create([
            "title" => $request->title,
            "description" => $request->description,
            "min_bud" => $request->min_bud,
            "max_bud" => $request->max_bud,
            "user_id" => auth("web")->id(),
            "currency_id" => $request->currency,
            "image" => $this->getFilePath($request)
        ]);

        foreach ($request->skills as $skill){
            PostSkill::create([
                "post_id" => $post->id,
                "service_type_id" => $skill
            ]);

        }

        return back()->with("success","Post Created Successfully");

    }

    private function getFilePath(Request $request)
    {
        if ($request->hasFile("image"))
        {
            return $request->file("image")->store("posts");
        }
        else{
            //throw ValidationException::withMessages(["image" => "image is required"]);
            return null;
        }
    }


}
