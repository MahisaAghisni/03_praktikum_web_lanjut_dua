<?php

namespace App\Http\Controllers;

use App\Models\main;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $data = main::all();
        return view('layout.mains', ['call' => $data], ['title' => 'Catalog']);
    }
}
