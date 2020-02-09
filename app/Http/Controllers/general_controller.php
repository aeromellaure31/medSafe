<?php

namespace App\Http\Controllers;

use App\Models\Patients;
use Illuminate\Http\Request;

class general_controller extends Controller
{

    public function register()
    {
        return view('register_page');
    }
}
    