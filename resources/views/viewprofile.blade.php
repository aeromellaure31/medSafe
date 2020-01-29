<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <link rel='stylesheet' type='text/css' href="{{ url('css/sidebar.css')}}"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
        <link rel='stylesheet' type='text/css' href="{{ url('css/header.css')}}"/>
    </head>
    <style>
        h3{
            font-family: algerian;
            float: left;
        }

        h1{
            font-family: algerian;
        }

        img{
            border-radius: 50%;
        }

        body{
            overflow: hidden;
        }
    </style>

<body style="background: -webkit-linear-gradient(left, #3931af, #00c6ff);">
    <center>
        <div class="header">
            <i class="fa fa-file-medical fa-3x">MedSafe</i>
        </div>
    </center>
    <div style="margin-left:15%;">
        <div class="row">
            <div class="col-sm-2">
                @include('sidebar')
            </div>
        </div> 
        <center>
            <div class="container" style="margin-top: 1%;">
                <img src="https://image.freepik.com/free-photo/beautiful-young-female-doctor-looking-camera-office_1301-7807.jpg" height='250px' width='300px' >
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
                <form method="get" style="float:center; margin-left:7%;">
                    <button class="btn btn-primary" type="submit">Request</button>
                </form>
                <form action="{{route('cancel')}}" method="get" style="float:center; margin-right:7%;  margin-top:-3.2%;">
                    <button class="btn btn-primary" type="submit">Back</button>
                </form>
            </center>
        </div>
    </div>
</body>
</html>