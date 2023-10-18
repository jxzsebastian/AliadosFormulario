<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function markAllNotifications(){
        auth()->user()->unreadNotifications->markAsRead();
        return redirect()->back();
    }

    public function markOneNotification($notification_id){
        Auth()->user()->unreadNotifications->when($notification_id, function($query) use ($notification_id){
            return $query->where('id', $notification_id);
        })->markAsRead();

        return redirect()->route('usuario.remitidos');
    }
}
