<?php

namespace App\Http\Controllers;

use App\School;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserSettings extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schools = School::get();
        return view('user-settings')->with('schools',$schools)->with("success","")->with("passwordsuccess","");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function changePassword(Request $request) {
        $schools = School::get();
        // check if a user is logged in
        if (!auth()->check()) {
            // Return a 403
            return view('user-settings')->with('schools',$schools)->with("success","")->with("passwordsuccess","Please Log in to your account to change password");
        }

        // Validate the inputs
//        $this->validate($request, [
//            'current_password' => 'required',
//            'new_password' => 'required|string|min:6|confirmed',
//        ]);

        // Check if the current password is correct
        if (!Auth::attempt(['email' => auth()->user()->email, 'password' => $request->input('current_password')])) {
            return view('user-settings')->with('schools',$schools)->with("success","")->with("passwordsuccess","Error! Incorrect Data");

        }

//        // Change the password
        $user = auth()->user();
        $user->password = Hash::make($request->input('new_password'));
        $user->save();

        return view('user-settings')->with('schools',$schools)->with("success","")->with("passwordsuccess","You have Successfully changed your password");

    }
}
