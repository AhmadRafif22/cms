<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index()
    {
        return "Ini halaman Utama Program";
    }

    public function karir()
    {
        return "Ini halaman program/karir";
    }

    public function magang()
    {
        return "Ini halaman program/magang";
    }

    public function kunjunganIndustri()
    {
        return "Ini halaman program/kunjungan-industri";
    }
}
