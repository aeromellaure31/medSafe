<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\model\Doctors;
use App\model\Patient;
use App\model\Nationalities;
use App\model\Specialties;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Auth;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */
    use ValidatesRequests;
    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:doctor')->except('logout');
        $this->middleware('guest:patient')->except('logout');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validatorDoctor(array $data)
    {
        return Validator::make($data, [
            'firstname' => 'required',
            'middlename' => 'required',
            'lastname' => 'required',
            'age' => 'required|numeric|min:20',
            'gender' => 'required',
            'phoneNum' => 'required|numeric|min:11',
            'address' =>'required',
            'email' => 'required|email',
            'birthday' => 'required',
            'nationalityId' => 'required',
            'password' => 'required',
            'specialtyId' => 'required',
            'licenseNum' => 'required|numeric',
        ]);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */

    protected function validatorPatient(array $data)
    {
        return Validator::make($data, [
            'firstname' => 'required',
            'middlename' => 'required',
            'lastname' => 'required',
            'age' => 'required|numeric|min:1',
            'gender' => 'required',
            'phoneNum' => 'required|numeric|min:11',
            'address' =>'required',
            'email' => 'required|email',
            'birthday' => 'required',
            'nationalityId' => 'required',
            'password' => 'required',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
 
    public function showDoctorRegisterForm()
    {
        return view('auth.register_doctor');
    }

    public function showPatientRegisterForm()
    {
        return view('auth.register_patient');
    }

    public function nationality_specialty($j, $x)
    {
        $id = 0;
        $nationality_specialty;
        if ($j == 'nationalities') {
            $nationality_specialty = new Nationalities();
        } else if ($j == 'specialties') {
            $nationality_specialty = new Specialties();
        }
        $result = $nationality_specialty->get(['id', $j])->where($j, $x);
        $id = 1;
        if (count($result) >= 1) {
            foreach ($result as $a) {
                $id = $a['id'];
            }
        } else {
            $nationality_specialty::create([$j => $x]);
            $result = $nationality_specialty->get(['id', $j])->where($j, $x);
            foreach ($result as $a) {
                $id = $a['id'];
            }
        }
        return $id;
    }

    protected function createDoctor(Request $request)
    {
        dd($request);
        $id_nationality = $this->nationality_specialty('nationalities', $request->nationalityId);
        $id_specialty = $this->nationality_specialty('specialties', $request->specialtyId);
        $this->validatorDoctor($request->all())->validate();
        $doctor = Doctors::create([
            'firstname' => $request['firstname'],
            'middlename' => $request['middlename'],
            'lastname' => $request['lastname'],
            'age' => $request['age'],
            'gender' => $request['gender'],
            'phoneNum' => $request['phoneNum'],
            'address' => $request['address'],
            'email' => $request['email'],
            'birthday' => $request['birthday'],
            'nationalityId' => $id_nationality,
            'password' => Hash::make($request['password']),
            'specialtyId' => $id_specialty,
            'licenseNum' => $request['licenseNum'],
        ]);
        return redirect('/login');
    }

    protected function createPatient(Request $request)
    {
        $id_nationality = $this->nationality_specialty('nationalities', $request->nationalityId);
        $this->validatorPatient($request->all())->validate();
        $patients = Patient::create([
            'firstname' => $request['firstname'],
            'middlename' => $request['middlename'],
            'lastname' => $request['lastname'],
            'age' => $request['age'],
            'gender' => $request['gender'],
            'phoneNum' => $request['phoneNum'],
            'address' => $request['address'],
            'email' => $request['email'],
            'birthday' => $request['birthday'],
            'nationalityId' => $id_nationality,
            'password' => Hash::make($request['password']),
        ]);
        return redirect('/login');
    }
}
