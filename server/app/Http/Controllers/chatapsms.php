<?php

namespace App\Http\Controllers;

use App\Events\UpdateChat;
use Illuminate\Http\Request;

class chatapsms extends Controller
{
    public function sendSMS(Request $request){
        broadcast(new UpdateChat('admin', $request->sms));
        // broadcast(new UpdateChat('admin', $request->sms))->toOthers();
        
        return ['status' => 'Zen vió ;]'];
    }
}
