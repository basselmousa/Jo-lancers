<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostSkill;
use App\Models\ServiceCategory;
use App\Models\ServiceProvider;
use App\Models\ServiceProviderType;
use App\Models\ServiceType;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $totalPosts = Post::all()->count();
        $totalProviders = ServiceProvider::all()->count();
        $totalUsers = User::all()->count();
        $services = DB::select("select *,count(post_skills.post_id)as  numberOfuse from service_types inner join post_skills on service_types.id = post_skills.service_type_id
                                                   GROUP by post_skills.post_id
                                                   having COUNT(post_skills.service_type_id) > 1
                                                    order by COUNT(post_skills.service_type_id) desc
                                                    LIMIT 6;");

        $categories = ServiceCategory::all()->take(5);

//        $skills = ServiceType::whereIn("category_id",$categories->pluck("id"))->pluck("id")->toArray();
//        $postSkill = PostSkill::whereIn("service_type_id",$skills)->pluck("post_id")->toArray();
//

        $posts = DB::query()->select(["post_skills.*","posts.*","service_types.*","service_categories.*"])
            ->from("posts")
            ->join("post_skills","post_skills.post_id","=","posts.id")
            ->join("service_types","service_types.id","=","post_skills.service_type_id")
            ->join("service_categories","service_categories.id","=","service_types.category_id")
            ->groupBy("posts.id")
            ->whereIn("service_categories.id",$categories->pluck("id")->toArray())->get();
//dd($posts);

//        dd($categories->pluck("id")->implode(","));

        return view('welcome',compact("totalUsers",'totalPosts','totalProviders',"services",'categories','posts'));

    }


    public function categoryProviders(Request $request, ServiceCategory $category)
    {
        $types  = ServiceType::where("category_id",$category->id)->pluck("id")->toArray();
        $typesProviders = ServiceProviderType::whereIn("service_type_id",$types)->pluck("service_provider_id")->toArray();
        $providers = ServiceProvider::whereIn("id",$typesProviders)->whereNotNull("price_for_hour")->get();
//        dd($providers);
        return view("hourly_providers",compact("providers",'category'));
    }
}
