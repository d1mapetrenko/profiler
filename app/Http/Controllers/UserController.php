<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Upload;
use Illuminate\Support\Facades\Auth;
Use Debugbar;
Use Image;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('profile/show', ['user' => Auth::user()]);
    }

    public function edit() {
        return view('profile/edit', ['user' => Auth::user()]);
    }

    public function update(Request $request) {  
        $user = User::findOrFail(Auth::user()->id);
        $user->about = $request->input('about');
        $user->bio = $request->input('bio');
        if ( !empty( $request->file('avatar') ) ) {
            $oldImage = $user->avatar;
            if ( (!empty($oldImage)) && (file_exists(public_path().$oldImage)) ) {
                unlink(public_path().$oldImage);
            }
            $image = Image::make($request->file('avatar')->getRealPath());
            $imageName = uniqid().'.'.$request->file('avatar')->getClientOriginalExtension();
            $imagePath = public_path().'/uploads/'.$imageName;
            $image->save($imagePath);
            $user->avatar = '/uploads/'.$imageName;
        } 
        $user->update();
        return back()->with('status', 'Profile updated!');
        //return view('profile/edit', ['user' => $user])->with('success', 'Updated!');
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('profile/show', ['user' => $user]);
    }
}
