<?php

namespace App\Http\Controllers;

use App\Artikel;
use App\Kategori;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $artikels = Artikel::orderBy('created_at', 'desc')->get();
        return view('index', compact('artikels'));
    }

    public function blog()
    {
        $artikels = Artikel::orderBy('created_at', 'desc')->get();
        return view('blog', compact('artikels'));
    }

    public function detail(Artikel $artikels)
    {
        $previous = Artikel::where('id', '<', $artikels->id)->orderBy('id', 'desc')->first();
        $next = Artikel::where('id', '>', $artikels->id)->orderBy('id')->first();
    
        return view('singleblog',compact('artikels', 'previous', 'next'));
    }
}
