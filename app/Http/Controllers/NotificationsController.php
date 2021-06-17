<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificationsController extends Controller
{
    //

    public function index(){
        return  view('notification.index')->with('notifications',Auth::user()->notifications);
    }



    public function show($id){

        $notification=Auth::user()->notifications()->find($id);
        $notification->markAsRead();

        return  view('notification.show')->with(['notification'=>$notification]);
    }
}
