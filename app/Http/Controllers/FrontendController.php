<?php

namespace App\Http\Controllers;

use App\Models\DestinasiCamping;

class FrontendController extends Controller
{
    public function index() {
        $destinasi = DestinasiCamping::all();
        return view('welcome', compact('destinasi'));
    }
}
