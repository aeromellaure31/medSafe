<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <link rel='stylesheet' type='text/css' href="{{ url('css/sidebar.css')}}"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
        <link rel='stylesheet' type='text/css' href="{{ url('css/header.css')}}"/>
        <link rel='stylesheet' type='text/css' href="{{ url('css/viewprofile.css')}}"/>
    </head>
<body>
    <center>
        <div class="header">
            <i class="fa fa-file-medical fa-3x">MedSafe</i>
        </div><br><br><br><br>
    </center>
    <div style="margin-left:15%;">
        <div class="row">
            <div class="col-sm-2">
                @include('sidebar')
            </div>
        </div> 
        <div id="body">
        <center>
        
            <div class="container">
                @if($doctors[0]->gender == 'female')
                <img src="{{ URL::asset('css/images/female.png') }}">
                @else
                <img src="{{URL::asset('css/images/male.png') }}">
                @endif
                <h1>Dr. {{$doctors[0]->firstname}} {{$doctors[0]->lastname}} </h1><br>
                <div class="row" style="width:650px;">
                    <div style="float:left; width:300px; margin-left:7%;">
                        <h3>Specialty: {{$doctors[0]->specialty->specialties}} </h3>
                        <h3>LicenseNo: {{$doctors[0]->licenseNum}} </h3>
                        <h3>PhoneNo: {{$doctors[0]->phoneNum}} </h3>
                    </div>
                    <div style="float:right; width:300px;">
                        <h3>Email: {{$doctors[0]->email}} </h3>
                        <h3>Address: {{$doctors[0]->address}} </h3>
                        <h3>Gender: {{$doctors[0]->gender}}</h3>
                    </div>
                </div>
            </div><br>
        </center>
        <div>
            <center>
                <form id="req_btn" method="get" 
                action="{{route('request.doctor',$doctors[0]->id)}}">
                  <button class="btn btn-primary" type="submit">Request</button>
                </form>
                <form id="back_btn" action="{{route('cancel')}}" method="get">
                    <button class="btn btn-primary" type="submit">Back</button>
                </form>
            </center>
        </div>
        </div>
    </div>
</body>
</html>