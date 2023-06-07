<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Message;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Message $message, Request $request)
    {
        $parameters = $request->validate([
            'text' => 'required|max:12000|min:1',
        ]);

        $data = Comment::create([
            'text' => $parameters['text'],
            'user_id' => auth()->user()->id,
            'message_id' => $message->id,

        ]);

        return redirect()->route('message.show', $message);
    }

}
