<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use App\Models\Configuration;
use App\Models\Services;
use App\Models\Sliders;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $sliders=Sliders::get();
        $services=Services::get();
        $blogs=Blogs::get();
        $config=Configuration::first();

        return view('home',[
            'sliders'=>$sliders,
            'services'=>$services,
            'blogs'=>$blogs,
            'config'=>$config
        ]);
    }
}
