<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\Member;
use App\User;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = Member::all();
        return view('admin.members.index')->with('members',$members);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        return view('admin.members.create')->with('user',$user);
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
            'name' => 'required|max:50',
            'position' => 'required|max:50',
            'photo' => 'required|image',
            'description' => 'required' 
        ]);

        $photo = $request->photo;
        $featured_new_name = time().$photo->getClientOriginalName();
        $photo->move('admin/uploads/images',$featured_new_name);

        $post = Member::create([
            'name' => $request->name,
            'position' => $request->position,
            'photo' => 'admin/uploads/images/'.$featured_new_name,
            'description' => $request->description,
            'facebook' => $request->facebook,
            'linkedin' => $request->linkedin,
            'twitter' => $request->twitter,
            'user_id' => $request->user_id
        ]);

        Session::flash('success','You have created member succesfully');

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
        $member = Member::find($id);
        $user = Auth::user();
        return view('admin.members.edit')->with('user',$user)
                                         ->with('member',$member);
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
        $member = Member::find($id);

        $this->validate($request,[
            'name' => 'required|max:50',
            'position' => 'required|max:50',
            'description' => 'required' 
        ]);

        if($request->hasFile('photo'))
        {
            $featured = $request ->photo;
            $image_new_name = time().$featured->getClientOriginalName();
            $featured->move('admin/uploads/images/',$image_new_name);

            $member->photo = 'admin/uploads/images/'.$image_new_name;
        }

        $member->name = $request->name;
        $member->position = $request->position;
        $member->facebook = $request->facebook;
        $member->linkedin = $request->linkedin;
        $member->twitter = $request->twitter;
        $member->description = $request->description;
        $member->user_id = $request->user_id;

        $member->save();

        return redirect()->route('member.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $member = Member::find($id);
        $member->delete();

        return redirect()->back();
    }
}
