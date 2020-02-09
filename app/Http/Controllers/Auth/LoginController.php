<?php

namespace App\Http\Controllers\Auth;
use App\model\Patient;
use App\model\Doctors;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = '/';

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

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'email'   => 'required|email',
            'password' => 'required'
        ]);
    }

    public function showLoginForm()
    {
        return view('auth.login_page');
    }

    public function login(Request $request)
    {
        $this->validator($request->all())->validate();

        if (Auth::guard('patient')->attempt(['email' => $request->email, 'password' => $request->password])) {
            $id = patient::select('id')->where('email', $request->email)->get();
            $user = patient::find($id);
            $request->session()->put('user', $user[0]->firstname." ".$user[0]->lastname);
            $request->session()->put('patientId', $id);
            $request->session()->put('userType', 'patient');
            return redirect('/dashboard/back')->with('user', $request->session()->get('user'));
        }
        else if(Auth::guard('doctor')->attempt(['email' => $request->email, 'password' => $request->password]))
        {
            // dd($request);
            $id = doctors::select('id')->where('email', $request->email)->get();
            $user = doctors::find($id);
            $request->session()->put('user', $user[0]->firstname." ".$user[0]->lastname);
            $request->session()->put('doctorId', $id);
            $request->session()->put('userType', 'doctor');
            return redirect('patients')->with('user', $request->session()->get('user'));
        }else{
            // dd(Auth::guard()->check());
            return redirect()->back()->withInput($request->only('email'));
        }
    }
}
