<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        return 'hola';
        $this->validate($request, [
            'email' => 'required|email|unique:users',
            'name' => 'required|max:25|min:3',
            'password' => 'required|min:4',
            'tag' => 'required|max:25|unique:users'
        ]);

        $user = new User();

        $user->name = $request->input('name');
        $user->tag = $request->input('tag');
        $user->slug = $request->input('tag');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        /*$user->description = "I'm using my cube now!";
        $user->phone = "vacio";
        $user->age = '0';
        $user->birthdate ="00:00:00";
        $user->lenguage = "1";
        $user->theme = "1";
        $user->profile_privacy = "1";
        $user->content_privacy = "1";
        $user->friend_request_privacy = "1";*/
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
}
