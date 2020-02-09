<?php

namespace App\Http\Controllers;
use Pusher\Pusher;
use App\model\Doctors;
use App\model\AppointmentRequests;
use Illuminate\Http\Request;

class pusherController extends Controller
{
    // fire new pusher event
    public function notify(Request $request)
    {
        // $notifications = new Notifications();
        // // $notifications->status = 0;
        // $notifications->save();
        $options = array(
                        'cluster' => "ap1",
                        'encrypted' => true
                        );
        $pusher = new Pusher(
                            env('PUSHER_APP_KEY'),
                            env('PUSHER_APP_SECRET'),
                            env('PUSHER_APP_ID'), 
                            $options
                        );
        $data['count'] = "*";
        $pusher->trigger('my-channel', 'App\\Events\\Notify', $data);
        return redirect('patient/dashboard');
    }
}
