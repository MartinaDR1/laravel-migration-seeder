<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view('home');
    }

    public function index(){
        //dd(Train::all());
        $trains = Train::orderByDesc('id')->get();
        return view('trains', compact('trains'));
    }
}
