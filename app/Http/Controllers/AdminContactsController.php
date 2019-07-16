<?php

namespace gardony\Http\Controllers;

use gardony\Contact;
use Illuminate\Http\Request;

class AdminContactsController extends Controller
{
    //
    public function index() {
        $contact = Contact::first();
        return view('admin.contacts.index', compact('contact'));
    }

    public function update(Request $request, $id) {

        Contact::findOrFail($id)->update($request->all());
        return redirect('admin/contacts');
    }


}
