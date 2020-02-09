<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

class PatientLogoutController extends Controller
{
    use AuthenticatesUsers;
    
    public function logout(Request $request)
    {
        Auth::guard('patient')->logout();
        $request->session()->flush();
        $request->session()->regenerate();
        return redirect()->guest(route( 'login' ));
    }
}
