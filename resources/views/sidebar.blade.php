<div class="wrapper">
    <nav id="sidebar" style="border-right:solid black 5px; background: -webkit-linear-gradient(top, #3931af, #00c6ff);">
        <div class="sidebar-header" style="margin-top:3%;">
           <center> 
                <img src="{{ URL::asset('css/images/userIcon.png') }}" style="width:80%; height:auto;"> 
                <br><br>
                <p>Hi <?php echo Session::get('user');?></p>
           </center>
        </div>
        <div>
            <ul class="list-unstyled components">
                <li>
                    <a style="color:black;" href="{{route('index')}}"><i style="color:black;" class="far fa-calendar-alt fa-2x"></i>Calendar</a>
                </li>
                <li>
                    <a><i class="fa fa-calendar-plus fa-2x"></i>Add Appointment</a>
                </li>
                <li>
                    <a><i class="fa fa-sign-out-alt fa-2x"></i>Logout</a>
                </li>
            </ul>
        </div>  
    </nav>
</div>
