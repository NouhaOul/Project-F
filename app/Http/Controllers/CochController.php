<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Notifications\ContactNotification;
use Illuminate\Support\Facades\Notification;
use Illuminate\Http\Request;

class CochController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('coach.Coach1');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Request $request)
    {

        $messsage = new Message();
        $messsage->fname = $request->fname;
        $messsage->lname = $request->lname;
        $messsage->subject = $request->subject;
        $messsage->email = $request->email;
        $messsage->message = $request->message;
        $messsage->save();
        
        $user = $request->email;
        Notification::route('mail', $user)->notify(new ContactNotification($user));
        return redirect('/coaches/');
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
