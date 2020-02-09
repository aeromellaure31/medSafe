<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use Auth;
use Validator;
use App\Event;
use Calendar;

class EventController extends Controller
{
    public function index()
    {
        $events = [];
        $data = Event::all();
        if ($data->count()) {
            foreach ($data as $key => $value) {
                $events[] = Calendar::event(
                    $value->title,
                    true,
                    new \DateTime($value->start_date),
                    new \DateTime($value->end_date . ' +1 day')
                );
            }
        }
        $calendar = \Calendar::addEvents($events)
        ->setOptions([
            'firstDay' => 0,
            'editable'    => true,
        ])
        ->setCallbacks([
            'eventClick' => 'function(event){
                $("#modal").show();
                $("#title").text(event.title);
                console.log("You clicked on an event!");
            }',
        ]);
        return view('mycalendar', compact('calendar'));
    }

    public function addEvent(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'time' => 'required',
            'start_date' => 'required',
            'end_date' => 'nullable'
        ]);
 
        if ($validator->fails()) {
            \Session::flash('warnning','Please enter the valid details');
            
            return Redirect::to('/events')->withInput()->withErrors($validator);
        }
        // dd(date('Y-m-d'));
        if(strtotime($request['start_date']) >= strtotime(date('Y-m-d'))){
            $event = new Event;
            $event->title = $request['title']." ".$request['time'];
            $event->start_date = $request['start_date'];
            $event->end_date = $request['end_date'];
            $event->save();
     
            \Session::flash('success','Event added successfully.');
            return Redirect::to('/events');
        }else{
            // return redirect()->back() ->with('alert', 'Updated!');
        }
 
    }
}
