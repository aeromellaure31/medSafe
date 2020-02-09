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
Auth::routes();

Route::get('/',function (){
    return view('HomePage');
});
Route::get('/register-doctor',function (){
    return view('register_doctor');
});
Route::get('/register-patient',function (){
    return view('register_patient');
});

Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login')->name('login');

Route::group(['middleware' => 'guest:doctor'], function () {
    Route::get('/register-doctor', 'Auth\RegisterController@showDoctorRegisterForm')->name('register.doctor');
    Route::post('/register-doctor', 'Auth\RegisterController@createDoctor')->name('register.doctor');
});

Route::group(['middleware' => 'guest:patient'], function () {
    Route::get('/register-patient', 'Auth\RegisterController@showPatientRegisterForm')->name('register.patient');
    Route::post('/register-patient', 'Auth\RegisterController@createPatient')->name('register.patient');
});

Route::group(['middleware' => 'auth:doctor'], function () {
    Route::post('doctor-logout', 'Auth\DoctorLogoutController@logout')->name('doctor.logout');
    Route::get('patients','patientController@requests')->name('patients');
});

Route::group(['middleware' => 'auth:patient'], function () {
    Route::post('logout', 'Auth\PatientLogoutController@logout')->name('logout');
    Route::get('/patient/dashboard','patientController@retrieveDoctor')->name('cancel');
});

Route::get('events', 'EventController@index')->name('index');
Route::post('events', 'EventController@addEvent')->name('createEvent');

Route::view('/notification', 'pusher');
Route::get('notify','pusherController@notify');
Route::get('countNotify','pusherController@count');

Route::post('/user/register','RegisterController@createUser')->name('account.create');
Route::get('/users','patientController@retrieveUser')->name('patients.all');
Route::get('/doc/{id}','patientController@search_doctor')->name('search.doctor');
// Route::get('/dashboard/back','patientController@retrieveDoctor')->name('back');
Route::get('/doctor/{doctor_id}/request','patientController@send_request')->name('request.doctor');
Route::get('/doctor/accept/{request_id}','patientController@accept_request')->name('accept.request');
Route::post('/doctor/specialty','patientController@search_doctors_by_category')->name('doctor.specialty');
// Route::post('/login/dashboard','patientController@login')->name('login');
Route::get('/create/records/{id}','insertRecords@insertRecord')->name('insert');
// Route::post('/login/dashboard','patientController@login')->name('login');
Route::get('/create/records/{id}','insertRecords@insertRecord')->name('insert');
Route::get('/requests','patientController@unaccepted_request')->name('unaccepted_requests');
Route::get('/patient/find/{id}','patientController@find_patient')->name('find.patient');
Route::get('/patient/records/{id?}','insertRecords@fetchRecord')->name('find.patient.record');
// Route::get('/patients','patientController@requests')->name('patients');
Route::get('/patient/profile/{id}','patientController@find_patient')->name('patient.profile');   
Route::get('/insertRecords', 'insertRecords@find')->name('find');
?>
