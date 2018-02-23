<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Post;
use App\Category;
use Session;
use App\Tag;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.posts.index')->with('posts',Post::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        if ($categories->count() == 0) {
            
            Session::flash('info','You must some categories before attempting to create a post.');
            return redirect() ->route('category.create');
        }

        $user = Auth::user();
        $tag = Tag::all();
        return view('admin.posts.create')->with('user',$user)
                                         ->with('categories',Category::all())
                                         ->with('tags',$tag);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required|max:255',
            'featured' => "required|image",
            'content' => 'required',
            'user_id' => 'required',
            'category_id' => 'required',
            'keyword' => 'max:255',
            'short_desc' => 'max:500',
            'price' => 'integer'
        ]);

        // dd($request->all());

        $featured = $request->featured;
        $featured_new_name = time().$featured->getClientOriginalName();
        $featured->move('admin/uploads/images',$featured_new_name);

        $post = Post::create([
            'title' => $request->title,
            'content' => $request ->content,
            'keyword' => $request->keyword,
            'short_desc' => $request->short_desc,
            'featured' => 'admin/uploads/images/'.$featured_new_name,
            'slug' => str_slug($request->title),
            'user_id' => $request->user_id,
            'category_id' => $request ->category_id,
            'tour_date' => $request->tour_date,
            'price' => $request->price,
        ]);

        $post->tags()->attach($request->tags);

        Session::flash('success','You have created Post succesfully');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $post = Post::find($id);
        $user = Auth::user();
        $tag = Tag::all();
        return view('Admin.posts.edit')->with('post',$post)
                                    ->with('categories', Category::all())
                                    ->with('user',$user)
                                    ->with('tags',$tag);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $this->validate($request,[
            'title' => 'required|max:255',
            'content' => 'required',
            'user_id' => 'required',
            'category_id' => 'required',
            'keyword' => 'max:255',
            'short_desc' => 'max:500',
            'price' => 'integer'
        ]);

        if($request->hasFile('featured'))
        {
            $featured = $request ->featured;
            $image_new_name = time().$featured->getClientOriginalName();
            $featured->move('admin/uploads/images/',$image_new_name);

            $post->featured = 'admin/uploads/images/'.$image_new_name;
        }

        $post->title = $request->title;
        $post->keyword = $request->keyword;
        $post->short_desc = $request->short_desc;
        $post->content = $request->content;
        $post->category_id = $request->category_id;
        $post->slug = str_slug($request->title);
        $post->tags()->attach($request->tags);

        $post->save();

        Session::flask('success','Post updated succesfully.');

        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post ->delete();

        Session::flash('success','You have Delete Post succesfully');
        return redirect()->back();
    }
}
