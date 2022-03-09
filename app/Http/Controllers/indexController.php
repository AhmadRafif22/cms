<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\features;

class indexController extends Controller
{
    public function index()
    {
        return view('index', ['features' => features::index()]);
    }
}
