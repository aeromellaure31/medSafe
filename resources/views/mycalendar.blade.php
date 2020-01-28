<!doctype html>
<html lang="en">
<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
    <link rel='stylesheet' type='text/css' href="{{ url('css/sidebar.css')}}"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel='stylesheet' type='text/css' href="{{ url('css/header.css')}}"/>
    <style>
        .error{
            color: red;
            font-style: italic;
        }
    </style>
</head>
<body>
    <center>
        <div class="header">
            <i class="fa fa-file-medical fa-3x">MedSafe</i>
        </div>
    </center>
    <div class="container">
        <div class="wrapper">
            <nav id="sidebar">
                <div class="sidebar-header">
                    <center> 
                        <img src="{{ URL::asset('css/images/userIcon.png') }}" style="width:80%; height:auto;"> 
                        <br><br>
                        <p>Hi [User's Name]</p>
                    </center>
                </div>
                <div>
                    <ul class="list-unstyled components">
                        <li>
                            <a href="events" ><i class="far fa-calendar-alt fa-2x"></i>Calendar</a>
                        </li>
                        <li>
                            <a><i class="fa fa-calendar-plus fa-2x"></i>Add Appointment</a>
                        </li>
                    </ul>
                </div>  
            </nav>
        </div>                
        <div class="panel panel-primary" style="width:600px; margin-left: 30%; margin-right: 25%; margin-top: 1.5%; overflow: hidden">
            <div class="panel-heading">
                My Calender    
            </div>
            <div class="panel-body">
                {!!$calendar->calendar() !!}
                {!!$calendar->script() !!}
            </div>
        </div>
    </div>
</body>

</html>