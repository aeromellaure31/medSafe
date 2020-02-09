<?php

namespace App\Http\Controllers;

use App\model\Records;
use App\model\Patient;
use App\model\Doctors;
use DB;

use Illuminate\Http\Request;

class insertRecords extends Controller
{
    function insertRecord(Request $request){
        $data = $request->all();
        $record = new Records($data);
        $record->patientId = $request->id;
        $a = $request->session()->get('doctorId');
        $record->doctorId = $a[0]->id;
        $record->save();
        return redirect('patient/profile/'.$request->id); // Will redirect 2 links back
    }

    function fetchRecord(Request $request){
        if($request->id){
            $records = Records::with('patient')->leftjoin('doctors', 'doctors.id', '=', 'records.doctorId')->where('patientId', $request->id)->orderBy('records.created_at', 'DESC')->get();
            return view('records', ['records'=> $records]);
        }else{
            $id = $request->session()->get('patientId');
            $records = Records::with('patient')->leftjoin('doctors', 'doctors.id', '=', 'records.doctorId')->where('patientId', $id[0]->id)->orderBy('records.created_at', 'DESC')->get();
            return view('records', ['records'=> $records]);
        }
    }

    function find(Request $request){
        $patient = patient::find($request->id);
        $doctors = doctors::find($request->session()->get('doctorId'));
        $patient->docId = $doctors[0]->firstname ." ". $doctors[0]->lastname;
        $links = session()->has('links') ? session('links') : []; //checking if the session link is already set, it will automatically set if not.
        $currentLink = request()->path(); // Getting current URL 
        array_unshift($links, $currentLink); // Putting it in the beginning of links array
        session(['links' => $links]); // Saving links array to the session
        return view('insertRecords', ['patient'=> $patient])->with("user" , $request->session()->get('user'));
    }
}
