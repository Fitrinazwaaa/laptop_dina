<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showSettings()
    {
        return view('pengaturan');
    }

    public function addUser(Request $request)
    {
        // Validate and add the user data to the database here
    }
}