<?php

namespace App\Http\Controllers\Sliders;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class sliderController extends Controller
{
    public function roomindex()
    {
        return view('slider.3d-room-slider');
    }

    public function sliceindex()
    {
        return view('slider.slice-slider');
    }
    public function verticalindex()
    {
        return view('slider.vertical-parallax-slider');
    }

    public function veloindex()
    {
        return view('slider.velo-slider');
    }
    public function synchronizedindex()
    {
        return view('slider.synchronized-carousel-slider');
    }

    public function splitindex()
    {
        return view('slider.split-carousel-slider');
    }

}
