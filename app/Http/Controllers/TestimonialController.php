<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;

class TestimonialController extends Controller
{
    public function artikel () {
        return view('admin/dashboard.testimonial.testimonial');
    }
    public function show () {
        $data = Testimonial::all();
        return view('admin/dashboard.testimonial.testimonial', compact(['data']));
    }
    public function update () {
        
    }
    public function delete () {
        
    }
}
