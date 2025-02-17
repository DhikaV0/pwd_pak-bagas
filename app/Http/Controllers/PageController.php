<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $homeContent = "Selamat datang di halaman Home!";

        $aboutContent =
                        "Ini adalah halaman About, tempat informasi tentang kami.";

        $contactContent = "Ini adalah halaman Content, tempat berbagai artikel dan berita.";


        return view('index', compact('homeContent', 'aboutContent', 'contactContent'));
    }
}
