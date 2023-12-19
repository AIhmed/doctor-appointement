<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function create()
    {
        return view('users.create');
    }

    function store(Request $request)
    {
        $data = $request->validate();
        dd($data);
        return view('users.store');
    }

}
