<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return "HI! Selamat Datang di Website Laravel (prak2,no1)";
    }

    public function about()
    {
        return "NIM  : 2041720230 </br>
                Nama : Ahmad Rafif Alaudin </br>
                Kelas: TI 2G </br>
                (prak2,no1)";
    }

    public function articles($id)
    {
        return "Ini adalah halaman Artikel dengan Id:{$id} </br>
                (prak2,no1)";
    }
}
