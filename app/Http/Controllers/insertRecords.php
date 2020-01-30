<?php

namespace App\Http\Controllers;

use App\model\Records;
use App\model\Patient;

use Illuminate\Http\Request;

class insertRecords extends Controller
{
    function insertRecord(Request $request){
        $data = $request->all();
        $record = new Records($data);
        $record->patientId = 1;
        $a = $request->session()->get('doctorId');
        $record->doctorId = $a[0]->id;
        $record->save();
        return view('dashboard_doctor');
    }

    function fetchRecord($id = 1){
        $records = Records::with('patient')->where('patientId', $id)->get();
        return view('records', compact('records'));
    }
}
