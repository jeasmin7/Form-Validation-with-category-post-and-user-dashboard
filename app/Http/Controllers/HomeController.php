<?php

namespace App\Http\Controllers;
use App\Models\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    public function index()
    {
        $posts = post::with ('category')->latest()->paginate(5);
         return view('index', ['posts'=>$posts]);
    }



    function login(Request $request){
    return view('auth.login');
    }

    function register(Request $request){
        return view('auth.register');
    }

    function profile(Request $request){
        return view('home.profile');
    }

    function SingleBlog(Request $request){
        return view('home.SingleBlog');
    }

    function category(Request $request){
        return view('home.category');
    }



    //link page
    function nlp(Request $request){
        return view('home.nlp');
    }

    function MobDev(Request $request){
        return view('home.MobDev');
    }
    function macLearn(Request $request){
        return view('home.macLearn');
    }
    function fullstack(Request $request){
        return view('home.fullstack');
    }
    function frontend(Request $request){
        return view('home.frontend');
    }
    function DevOps(Request $request){
        return view('home.DevOps');
    }
    function deepLearn(Request $request){
        return view('home.deepLearn');
    }
    function cyberSe(Request $request){
        return view('home.cyberSe');
    }
    function contact(Request $request){
        return view('home.contact');
    }
    function about(Request $request){
        return view('home.about');
    }
    function backend(Request $request){
        return view('home.backend');
    }
    function article(Request $request){
        return view('home.article');
    }

    function cloudComp(Request $request){
        return view('home.cloudComp');
    }
}
