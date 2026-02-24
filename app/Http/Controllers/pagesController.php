<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Design;
use Illuminate\Http\Request;

class pagesController extends Controller
{
    //
    public function home(){
          $newestArrivals = Design::latest()->take(4)->get();

        return view('design.home', compact("newestArrivals"));
    }

    public function show(Design $design){
        // Eager load images to ensure they are available for the gallery
      $design->load('images');
        return view('design.show', compact('design'));
    }

    public function design(){
         $designs = Design::with('images')->get();
        return view('design.design', compact('designs'));
    }

    public function contact(){
        return view('design.contact');
    }

    public function about() {
        return view('design.about');
        
    }
}
