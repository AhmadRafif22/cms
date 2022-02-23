<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        return "Ini halaman Utama products";
    }

    public function marbelEduGames()
    {
        return "Ini halaman products/marbel-edu-games";
    }

    public function marbelAndFriendsKidsGames()
    {
        return "Ini halaman products/marbel-and-friend-kids-games";
    }

    public function ririStoryBooks()
    {
        return "Ini halaman products/riri-Story-Books";
    }

    public function kolakKidsSongs()
    {
        return "Ini halaman products/kolak-kids-songs";
    }
}
