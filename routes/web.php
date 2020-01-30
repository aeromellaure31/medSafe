<?php

use App\Events\formSubmitted;
use Illuminate\Http\Request;
use App\Http\Requests;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('events', 'EventController@index')->name('index');
Route::post('events', 'EventController@addEvent')->name('createEvent');


Route::get('/', function () {
    return view('register_page');
});
Route::get('/patient/dashboard',function (){
    return view('patientDashboard');
});
Route::get('/doctor/dashboard',function (){
    return view('dashboard_doctor');
});
Route::get('/pusher',function (){
    return view('pusher');
});
Route::get('/sender',function (){
    return view('sender');
});

Route::post('/sender',function (){
    $text = request()->text;
    event(new formSubmitted($text));
});

Route::get('/dashboard', function () {
    return view('dashboard_doctor');
});

Route::get('/addevent', function () {
    return view('addEvent');
});

Route::get('/content', function () {
    return view('tab_content');
});

Route::get('/patient', function () {
    return view('PatientReg');
});
// create users.
Route::post('/user/register','patientController@createUser')->name('account.create');

Route::get('/users','patientController@retrieveUser')->name('patients.all');
Route::get('/doc/{id}','patientController@search_doctor')->name('search.doctor');
Route::get('/dashboard/back','patientController@retrieveDoctor')->name('cancel');
Route::get('/doctor/{doctor_id}/request','patientController@send_request')->name('request.doctor');
Route::get('/doctor/accept/{request_id}','patientController@accept_request')->name('accept.request');
Route::post('/doctor/specialty','patientController@search_doctors_by_category')->name('doctor.specialty');
Route::post('/login/dashboard','patientController@login')->name('login');
Route::get('/create/records','insertRecords@insertRecord')->name('insert');
Route::get('/fetch/rec','insertRecords@fetchRecord')->name('fetch');

Route::get('/sidebar', function () {
    return view('sidebar');
});

// Route::get('/patient/records', function () {
//     return view('records');
// });

Route::get('/insertRecords', function (Request $request) {
    return view('insertRecords')->with("user" , $request->session()->get('user'));
});


// Route::get('/doctor-register', 'general_controller@doctor_reg')->name('Doctor.Register');
Route::get('/register', 'general_controller@register')->name('register');
?>