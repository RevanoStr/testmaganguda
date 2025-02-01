<?php

namespace App\Http\Controllers;

use App\Models\Staf;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function tampil() {
        return view('home.tampil');
    }

    function staf($id) {
        $data = Staf::get($id);
        return view('home.staf', compact('data'));
    }
}
