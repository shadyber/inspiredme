<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificationsController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth')->except('store');
    }

    public function index(){
        if(!Auth::user()->hasRole('admin')){
            return  view('notification.user_index')->with('notifications',Auth::user()->notifications);
        }

        return  view('notification.index')->with('notifications',Auth::user()->notifications);
    }



    public function show($id){

        $notification=Auth::user()->notifications()->find($id);
        $notification->markAsRead();

        if(!Auth::user()->hasRole('admin')){
            return  view('notification.user_show')->with(['notification'=>$notification]);
        }
        return  view('notification.show')->with(['notification'=>$notification]);
    }
}
