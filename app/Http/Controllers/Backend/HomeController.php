<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function academicSetup()
    {
        return view('backend.academic.index');
    }

    
}
