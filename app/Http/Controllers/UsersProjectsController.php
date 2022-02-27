<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersProjectsController extends Controller
{
    public function index()
    {
        return view('users.projects');
    }
}
