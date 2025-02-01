<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function tampil() {
        return view('dashboard.tampil');
    }
}
