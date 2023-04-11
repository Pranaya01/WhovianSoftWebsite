<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function aboutus()
    {
        return view('user.aboutus.index');
    }
    
    public function amazon_services()
    {
        return view('user.services.amazonservices');
    }
    public function catalogmanagement()
    {
        return view('user.services.catalogmanagement');
    }
    public function itstaffing()
    {
        return view('user.services.itstaffing');
    }
    public function partnership_model() 
    {
        return view('user.aboutus.partnershipmodel');
    }
    public function ecommerce()
    {
        return view('user.services.ecommerce');
    }
    public function marketplace()
    {
        return view('user.services.marketplace');
    }
    public function webdesign()
    {
        return view('user.services.webdesign');
    }
    public function seoservice()
    {
        return view('user.services.seoservice');
    }
    
}
