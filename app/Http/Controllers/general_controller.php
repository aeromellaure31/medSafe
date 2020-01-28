<?php

namespace App\Http\Controllers;

use App\Models\Patients;
use Illuminate\Http\Request;

class general_controller extends Controller
{
    // public function doctor_reg(){
    //     return view('Doctor_Register_page');
    // }

    // public function register(Request $request){

    //     $request->validate([
    //         'first_name' => 'required',
    //         'middle_name' => 'required',
    //         'last_name' => 'required',
    //         'age' => 'required|numeric',
    //         'gender' => 'required',
    //         'contact_number' => 'required|numeric',
    //         'address' => 'required',
    //         'birthday' => 'required',
    //         'nationality' => 'required',
    //         'email' => ['required', 'email'],
    //         'password' => 'required'
    //     ]);

    //     $data = new Patients();
    //     $data->first_name = request('first_name');
    //     $data->middle_name = request('middle_name');
    //     $data->last_name = request('last_name');
    //     $data->age = request('age');
    //     $data->gender = request('gender');
    //     $data->age = request('contact_number');
    //     $data->address = request('address');
    //     $data->age = request('birthday');
    //     $data->address = request('nationality');
    //     $data->email = request('email');
    //     $data->password = request('password');
        
        

    //     $data->save();
    //     return redirect('/view-humans');
    // }

    public function login(Request $request)
    {
        
    }
}
    