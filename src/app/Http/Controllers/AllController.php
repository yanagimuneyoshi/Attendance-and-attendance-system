<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AllController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function attendance()
    {
        return view('attendance');
    }

    public function leavingwork()
    {
        return view('leavingwork');
    }

    public function admin()
    {
        return view('admin');
    }
}
