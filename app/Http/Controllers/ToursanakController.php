<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;
use App\Tag;
use App\Category;
use App\Member;

class ToursanakController extends Controller
{
    public function index()
    {	
        $posts = Tag::find(5)->posts()->orderBy('created_at','desc')->limit(3)->get();
        $popular_post = Tag::find(5)->find(4)->posts()->orderBy('created_at','desc')->limit(3)->get();
        $upcoming = Tag::find(4)->posts()->orderBy('created_at','desc')->limit(3)->get();
    	return view('toursanak.index')->with('posts',$posts)
                                      ->with('popular_post', $popular_post)
                                      ->with('upcoming',$upcoming);
    }
    public function single($slug)
    {
    	$post = Post::where('slug',$slug)->first();
        dd($post);
    	return view('toursanak.single')->with('post',$post);
    }

    public function about()
    {
        $about = DB::table('pages')->where('title','About')->first();
        $member = Member::all();
        return view('toursanak.about')->with('about',$about)
                                      ->with('members',$member);
    }
    public function blog()
    {
        $blog = Category::find(3)->posts()->orderBy('created_at','desc')->limit(3)->get();
        return view('toursanak.blog')->with('blogs',$blog);
    }
    public function contact()
    {
        return view('toursanak.contact');
    }
    public function faq()
    {
        return view('toursanak.faq');
    }
    public function careers()
    {
        return view('toursanak.careers');
    }
}
