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

        .design{
            border-width:5px;  
            border-style:inset;
            width:300px; 
            height: 230px; 
            float: left; 
            margin-left:1.5%;
            overflow-y: scroll;
        }

    </style>

<body style="background: -webkit-linear-gradient(left, #3931af, #00c6ff);">
    <center>
        <div class="header">
            <i class="fa fa-file-medical fa-3x">MedSafe</i>
        </div>
    </center>
    <div class="row">
        <div class="col-sm-2">
            @include('sidebar')
        </div>
    </div> 
    <div class="container" style="background-color: white; height:550px; width:1000px; margin-left: 22.5%; margin-top: 1%; overflow-y: scroll;">
        @foreach($records as $records)
            <div style="border:solid black"><br>
                @foreach($records->patient as $patient)
                <h4>Name: {{$patient->firstname}} {{$patient->lastname}} Date: {{$records->created_at}} </h4><br>
                @endforeach
                <center>
                    <h1>Findings</h1>
                </center>
                <h5>Illness:&nbsp;&nbsp;{{$records->illness}}</h5>
                <h5> Caused by:&nbsp;&nbsp;{{$records->causeBy}}</h5><br>
                <div class="design" >
                    <center>
                        <h5>Physical Exam Findings</h5>
                    </center>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;{{$records->physicalExam}}</p>
                </div>
                <div class="design">
                    <center>
                        <h5>Doctor's Assessment</h5>
                    </center>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;{{$records->assessment}}</p>
                </div>
                <div class="design">
                    <center>
                        <h5>Doctor's Recommendation</h5>
                    </center>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;{{$records->recommendation}}</p>
                </div>
                <center
                    <h4 style="margin-top:26%;">________ewsr________</h4><br>
                    Doctor's Name
                </center>
            </div>
        @endforeach
    </div>
</body>
</html>