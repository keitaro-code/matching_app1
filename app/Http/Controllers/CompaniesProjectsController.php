<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompaniesProjectsController extends Controller
{
    public function index()
    {
        return view('companies.auth.register');
    }
}
