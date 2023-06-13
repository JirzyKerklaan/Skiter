<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function store(Message $message)
    {
        $message->likes()->create(['user_id' => auth()->id(),'message_id'=>$message->id]);
        return to_route('message.home');
    }

    public function destroy(Message $message)
    {
        $message->likes()->where('user_id', auth()->id())->delete();
        return to_route('message.home');
    }
}
