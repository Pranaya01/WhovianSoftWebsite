<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index()
    {
        return view('user.aboutus.index');
    }
    
    // public function boardofdirectors()
    // {
    //     $bod_details= Board::all();
    //     return view('user.aboutus.boardofdirector', compact('bod_details'));
    // }
    // public function bod_details()
    // {
    //     $bod_details= Board::all();
    //     return view('user.aboutus.bod_details', compact('bod_details'));
    // }
    public function faq()
    {
        return view('user.faq.index');
    }
    public function services()
    {
        return view('user.services.index');
    }
    
    
}
