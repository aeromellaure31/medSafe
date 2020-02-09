<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <link rel='stylesheet' type='text/css' href="{{ url('css/header.css')}}"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
        <link rel='stylesheet' type='text/css' href="{{ url('css/sidebar.css')}}"/>
        <script src="https://js.pusher.com/4.1/pusher.min.js"></script>
        <script>
            var pusher = new Pusher('{{env("MIX_PUSHER_APP_KEY")}}', {
              cluster: '{{env("PUSHER_APP_CLUSTER")}}',
              encrypted: true
            });
        
            var channel = pusher.subscribe('my-channel');
            channel.bind('App\\Events\\Notify', function(data) {
                document.getElementById('notify').innerText = data['count'];
            });
        </script>
    </head>

    <body>
    <center>
        <div class="header">
            <i class="fa fa-file-medical fa-3x">MedSafe</i>
        </div>
    </center>
    <div fluid class="container">
        <div class="row">
            <div class="col-sm-2">
                @include('sidebar')
            </div>
            <div id ='searchbar' class="col-sm-10" >
                <br>
                <br><br>
                <div class="column" style="position:fixed; height:50px;margin-top:-3%;z-index:1000">
                    <a href="{{route('patients')}}">
                        <input type="button" class="button button3" value="Patient's List"/>
                    </a>
                    <span id = 'line'>||</span>
                    <a href="{{route('unaccepted_requests')}}">
                        <input type="button"  id="buttonRequest" class="button button2" value="Patient's request       "/>
                        <i>
                            <span style="border-radius:100%; background-color:#b1cee0; color:red; font-size: 20px; margin-left:-4.4%;" id="notify" class="badge">
                                <?php use App\model\AppointmentRequests; use App\model\Doctors;
                                    $doctor = doctors::find(session()->get('doctorId'));
                                    $count = AppointmentRequests::with('requestDoctor')->where('doctor_id',$doctor[0]->id)->where('status', 0)->count();
                                    if($count>0){
                                        echo $count;
                                    }
                                ?>
                            </span>
                        </i>
                    </a>
                    <hr style="width:1000px;margin-top:0">
                </div>
                <div id="tab">
                    @include('tab_content')
                </div>
            </div>
        </div> 
    </div>
    </body>
</html>
    