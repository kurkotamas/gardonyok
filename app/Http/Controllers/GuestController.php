<?php

namespace gardony\Http\Controllers;

use gardony\About;
use gardony\Contact;
use gardony\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GuestController extends Controller
{
    //

    public function index() {
        $photos = DB::table('photos')->paginate(3);
        $about = About::first();
        $about->increment('views');
        $contact = Contact::first();
        return view('welcome', ['photos' => $photos, 'about' => $about, 'contact' => $contact]);
    }

    public function store(Request $request) {
        Message::create($request->all());
        return redirect('/');
    }
}
