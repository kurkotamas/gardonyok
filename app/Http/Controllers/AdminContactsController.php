<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminContactsController extends Controller
{
    //
    public function index() {
        return view('admin.contacts');
    }
}
