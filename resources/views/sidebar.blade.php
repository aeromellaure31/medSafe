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
                @if(session("userType") == 'doctor')
                <li>
                    <a style="color:black;" href="{{url('patients')}}"><i style="color:black;" class="fa fa-home fa-2x"></i>Home</a>
                </li>
                <li>
                    <a style="color:black;" href="{{route('index')}}"><i style="color:black;" class="far fa-calendar-alt fa-2x"></i>Calendar</a>
                </li>
                <li>
                    <a href="{{ url('doctor-logout') }}"
                        onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                        <i class="fa fa-sign-out-alt fa-2x"></i>Logout
                    </a>

                    <form id="logout-form" action="{{ route('doctor.logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
                @else
                <li>
                    <a style="color:black;" href="{{url('/patient/dashboard')}}"><i style="color:black;" class="fa fa-home fa-2x"></i>Home</a>
                </li>
                <li>
                    <a href="{{route('find.patient.record')}}"><i class="fa fa-file-medical fa-2x"></i>View Findings</a>
                </li>
                <li>
                    <a href="{{ url('logout') }}"
                        onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                        <i class="fa fa-sign-out-alt fa-2x"></i>Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
                @endif
            </ul>
        </div>  
    </nav>
</div>
