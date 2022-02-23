<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        return "Ini halaman Utama News";
    }

    public function newsParam($judul)
    {
        return "Ini adalah halaman news/$judul";
    }
}
