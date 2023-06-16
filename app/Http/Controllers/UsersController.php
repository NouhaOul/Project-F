<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $Users = User::get();
        // return view('profile.admin',compact("Users"));
        $coachUsers = User::where('role', 'coach')->get();
        $memberUsers = User::where('role', 'member')->get();
        $adminUsers = User::where('role', 'admin')->get();

        return view('profile.admin', compact('coachUsers', 'memberUsers', 'adminUsers'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        //
        $id = $request->id;
        User::destroy($id);
        return Redirect::route('profile.admin')->with('flash_message', 'User deleted!');

    }
}
