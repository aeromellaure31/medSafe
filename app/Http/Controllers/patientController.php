<?php

namespace App\Http\Controllers;

use App\model\AppointmentRequests;
use App\model\Doctors;
use App\model\Nationalities;
use App\model\Patient;
use App\model\Records;
use App\model\Specialties;
use Illuminate\Http\Request;

class patientController extends Controller
{
    public $user_email ='';
    // joining two tables nationality/specialty and patient table to create nationality_id.
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

// creating new user (Register page) could be patient or doctor;
    public function createUser(Request $request)
    {
        $id_nationality = $this->nationality_specialty('nationalities', $request->nationalityId);
        $data = $request->all();
        if ($request->specialtyId) {
            $id_specialty = $this->nationality_specialty('specialties', $request->specialtyId);
            $user = new Doctors($data);
            $user->specialtyId = $id_specialty;
            $user->nationalityId = $id_nationality;
            $user->save();
            return redirect('/doctor/dashboard');
        } else {
            $user = new patient($data);
            $user->nationalityId = $id_nationality;
            $doctors = doctors::all();
            $user->save();
            return view('patientDashboard', compact('doctors'));
        }
    }

    public function retrieveUser()
    {

        $n = new Patient();
        $users = Patient::with('nationality')->get();
        print_r($users . "<br><br>");
    }

    public function search_doctor(Request $request)
    {
        $doctor = doctors::find($request->id);
        echo $doctor;
    }

    // search doctors by patient in the search bar (specialty).
    // show all doctors
    public function search_doctors_by_category(Request $request)
    {
        $specialty_doctors = Specialties::select('id')->where('specialties', $request->specialty)->get();
        if (count($specialty_doctors) >= 1) {
            $result = doctors::get()->where('specialtyId', $specialty_doctors[0]->id);
            $doctors = doctors::all();
            $all = array();
            foreach ($result as $a) {
                array_push($all, $a);
            }
            foreach ($doctors as $doctor) {
                foreach ($result as $a) {
                    if ($a['email'] == $doctor['email']) {
                        continue;
                    } else {
                        array_push($all, $doctor);
                    }
                }
            }
            $doctors = $all;
            return view('patientDashboard', compact('doctors'));
        } else {
            $doctors = doctors::all();
            return view('patientDashboard', compact('doctors'));
        }
    }

    // show all patients
    public function retrieve_all_patients()
    {
        return patients::all();
    }

    // make appointment send request to doctor
    public function send_request(Request $request)
    {
        $request = new AppointmentRequests(['patient_id' => $request->patient_id, 'doctor_id' => $request->doctor_id]);
        $request->message = 'hai';
        $request->save();
    }

    // ang request id iyang dawaton gikan sa front-end
    public function accept_request(Request $request)
    {
        $acceptRequest = AppointmentRequests::find($request->request_id);
        foreach ($acceptRequest as $a) {
            $acceptRequest->request = 1;
            $acceptRequest->save();
        }
    }
    // make a record for a specific patient
    public function add_record(Request $request)
    {
        $record = new Records($request->all());
        $record->patient_id = $request->patient_id;
        $record->save();
    }

    // authenticate login
    public function login(Request $request)
    {
        session_start();
        $validate_email = patient::select('password')->where('email', $request->email)->get();
        if (count($validate_email) < 1) {
            $validate_email = doctors::select('password')->where('email', $request->email)->get();
            if (count($validate_email) >= 1) {
                if ($validate_email[0]->password == $request->password) {
                    $this->user_email = $request->email;
                    return view('dashboard_doctor', compact('doctors'));
                    $_SESSION['login'] = true;
                } else {
                    $_SESSION['login'] = false;
                    return redirect('/');
                }
            } else {
                $_SESSION['login'] = false;
                return redirect('/');
            }
        } else {
            if ($validate_email[0]->password == $request->password) {
                $doctors = doctors::all();
                $this->user_email = $request->email;
                return view('patientDashboard', compact('doctors'));
                $_SESSION['login'] = true;
            } else {
                $_SESSION['login'] = false;
                return redirect('/');
            }
        }
    }
}
