<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\Page;
use App\User;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::all();
        return view('admin.pages.index')->with('pages',$pages);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $user = Auth::user();
        return view('admin.pages.create')->with('user',$user);
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
            'user_id' => 'required',
            'content' => 'required'
        ]);

        $post = Page::create([
            'title' => $request->title,
            'content' => $request ->content,
            'keyword' => $request->keyword,
            'short_desc' => $request->short_desc,
            'user_id' => $request->user_id,
        ]);

        Session::flash('success','You have created Page succesfully');

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
        $page = Page::find($id);
        $user = Auth::user();

        return view('Admin.pages.edit') ->with('page',$page)
                                        ->with('user',$user);
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
        $page = Page::find($id);
        $this->validate($request,[
            'title' => 'required|max:255',
            'user_id' => 'required',
            'content' => 'required'
        ]);

        $page ->title = $request->title;
        $page ->content = $request->content;
        $page ->user_id = $request->user_id;
        $page ->keyword = $request->keyword;
        $page ->short_desc = $request->short_desc;

        $page->save();

        // Session::flask('success','Page updated succesfully.');

        return redirect()->route('page.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $page = Page::find($id);

        $page->delete();

        return redirect()->back();
    }
}
