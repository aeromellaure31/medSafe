<!doctype html>
<html lang="en">
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
@include('modal.scripts')
    <style>
        .error{
            color: red;
            font-style: italic;
        }
        #addButton{
            height: 50px;
            width: 50px;
            background-color: #e4eef0;
            border-radius: 50%;
            color: #008CBA ; 
            font-size:50px;
            margin-left:400px;
            padding:10px;
        }
        .panel-primary{
            width:600px; 
            margin-left:55%; 
            margin-right: 25%; 
            margin-top: 1%;
        }
        #addButton:hover{
            padding: 20px;
            border-radius: 40px;
            color:#e1a5e6 ;
            -webkit-transition: border-radius 2s;
        }
 
        .blurred-background {
            position: fixed;
            box-sizing: border-box;
            width: 100%;
            height: 100%;
            z-index: 1;
            top: 0;
            left: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            text-align: center;
            background: rgb(54, 54, 54, .7);

        }
        .alert-box {
            background: white;
            display: inline-block;
            margin-top: 180px;
            font-weight: lighter;
            border-radius: 3px;
            font-size: 30px;
            padding: 20px;
            transition: .2s;
        }

        .btn {
            padding: 10px 15px;
            border: none;
            border-radius: 3px;
            background: dodgerblue;
            color: white;
        }
    
    </style>
</head>
<body>
    <center>
        <div class="header" style="padding: 18px 10px;">
            <i class="fa fa-file-medical fa-3x">MedSafe</i>
        </div>
    </center>
    <div class="container">
            <div class="wrapper">
                    <nav id="sidebar">
                        <div class="sidebar-header" style="margin-top:3%;">
                           <center> 
                                <img src="{{ URL::asset('css/images/userIcon.png') }}" style="width:80%; height:auto;">
                                <br><br>
                                <p>Hi {{session("user")}}</p>
                           </center>
                        </div>
                        <div>
                            <ul class="list-unstyled components">
                                <li>
                                    <a style="color:black; font-size:18px;" href="{{url('patients')}}"><i style="color:black;" class="fa fa-home fa-2x"></i>Home</a>
                                </li>
                                <li>
                                    <a style="color:black; font-size:18px;" href="{{route('index')}}"><i style="color:black;" class="far fa-calendar-alt fa-2x"></i>Calendar</a>
                                </li>
                                <li>
                                    <a style="font-size:18px;" href="{{ url('doctor-logout') }}"
                                        onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        <i class="fa fa-sign-out-alt fa-2x"></i>Logout
                                    </a>
                                    <form id="logout-form" action="{{ route('doctor.logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </div>  
                    </nav>
                </div><br><br><br><br>
        <table>
            <tr>
                <td>
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            My Calender    
                        </div>
                        <div class="panel-body">
                            {!!$calendar->calendar() !!}
                            {!!$calendar->script() !!}
                        </div>
                    </div>
                </td>
                <td>
                    <a data-toggle="modal" href = '#addAppointment' data-target="#addAppointment">
                       <span id = 'addButton' >+</span>
                    </a>
                </td>
            </tr>
        </table>
    </div>
    @include('modal.addAppointment')
        <div id="modal" class="blurred-background" style='display:none;'>
            <div class="alert-box">
                <p id = 'title'></p>
                <button style='margin-top: 10px;' class="btn" onclick="hide()">OK</button>
            </div>
        </div>

    
</body>
<script>
  function hide() {
    $("#modal").hide()
  }
</script>
</html>
