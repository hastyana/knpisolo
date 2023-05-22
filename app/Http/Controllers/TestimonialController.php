<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Models\Contact; 

class TestimonialController extends Controller
{
    public function testimonial () {
        return view('admin/dashboard.testimonial.testimonial');
    }
    public function index () {
        $data = Testimonial::paginate(10);
        return view('admin/dashboard.testimonial.testimonial', ['data' => $data]);
    }
    public function delete () {
        
    }
}
