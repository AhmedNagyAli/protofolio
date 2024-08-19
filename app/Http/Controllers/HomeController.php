<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogImage;
use App\Models\Contact;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use function App\Helpers\get_setting;

class HomeController extends Controller
{
    public function index()
    {
        $default_user_name = get_setting('default_header_name');
        $customers_number = get_setting('customers_number');
        $solved_problems_number = get_setting('solved_problems_number');

        
        $blogs = Blog::query()->latest('created_at')->paginate(6);
        $projects = Project::query()->paginate(4);
        return view("home",compact("projects","blogs","customers_number","solved_problems_number"));
    }

    public function contact(Request $request){
        if($request->isMethod("post")){
            $request->validate([
                "email"=> "email",
                "name"=> "string",
                "phone"=>"string",
                "subject"=> "string",
                "message"=> "string",
                "image"=> "image",
            ]);
            if ($request->hasFile("image")){
                $file = $request->file("image");
                $filename = time() .".". $file->getClientOriginalExtension();
                $request->file("image")->move("storage/messages", $filename);
                Contact::create([
                    "email"=> $request->input("email"),
                    "subject"=> $request->input("subject"),
                    "name"=> $request->input("name"),
                    "phone"=> $request->input("phone"),
                    "image"=> $filename,
                    "message"=> $request->input("message"),


                ]);
                return redirect()->route("home")->with("success","تم الارسال بنجاح");
            }else{
                Contact::create([
                    "email"=> $request->input("email"),
                    "subject"=> $request->input("subject"),
                    "name"=> $request->input("name"),
                    "phone"=> $request->input("phone"),
                    "message"=> $request->input("message"),

                ]);
                return redirect()->route("home")->with("success","تم الارسال بنجاح");

            }

        }
        $user = User::query()->where('id',2)->first();

        return view("contact",compact("user"));

    }
    public function blogs(){
        $blogs = Blog::query()->get();
        return view("blog",compact("blogs"));

    }

    public function show_blug($blog){
        $blog = Blog::query()->where("id",$blog)->first();
        $blogImages = BlogImage::query()->where('blog_id', $blog->id)->get();

        return view("blogs.show",compact("blog","blogImages"));

    }

    public function projects(){
        $projects = Project::query()->get();
        return view("projects",compact("projects"));
    }
    //
}
