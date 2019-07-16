<?php

namespace gardony\Http\Controllers;

use gardony\Message;
use Illuminate\Http\Request;

class AdminMessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $messages = Message::all();
        $message_count = 0;
        return view('admin.messages.index', compact('messages', 'message_count'));
    }

    public function destroy(Message $message)
    {
        //
        $message->delete();
        return $this->index();
    }
}
