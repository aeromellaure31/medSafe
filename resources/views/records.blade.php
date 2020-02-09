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
            border-width:.5px;  
            border-style:groove;
            width:300px; 
            height: 230px; 
            float: left; 
            margin-left:1.5%;
            overflow-y: auto;
            padding: 3px;
        }
        .container{
            background-color: white;
            height:520px;
            width:1000px;
            margin-left: 22.5%;
            margin-top: 1%;
            overflow-y: auto;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 4px 25px 0 rgba(0,0,0,0.2);

        }
        .input{
            border-radius: 5px;
            transition: 1s;
            font-size: 15px;
            color:dodgerblue;
            padding: 2px
        }
        #perRecord{
            border: 1px grey;
            box-shadow: 0 4px 25px 0 rgba(0,0,0,0.2);
            margin-top: 15px;
        }

    </style>

<body style="background: -webkit-linear-gradient(left, #3931af, #00c6ff);">
    <center>
        <div class="header">
            <i class="fa fa-file-medical fa-3x">MedSafe</i>
        </div><br><br><br>
    </center>
    <div class="row">
        <div class="col-sm-2">
            @include('sidebar')
        </div>
    </div> 
    <div class="container" style="">
        @forelse($records as $records)
            <div id = 'perRecord'><br>
                    <h6 >Name:<span class = 'input'>{{$records->firstname}} {{$records->lastname}}</span><span style="margin-left:550px;">  Date: <span class = 'input'> {{$records->date}}</h6></span></span>
                <center>
                    <h4>Findings</h4>
                </center>
                <h6>Illness: <span class = 'input'>{{$records->illness}}</span></h6>
                <h6> Caused by:<span class = 'input'>{{$records->causeBy}}</span></h6><br>
                <div class="design" style="margin-left:0.7%;">
                    <center>
                        <h6>Physical Exam Findings</h6>
                    </center>
                    <p class = 'input'>&nbsp;&nbsp;&nbsp;&nbsp;{{$records->physicalExam}}</p>
                </div>
                <div class="design">
                    <center>
                        <h6>Doctor's Assessment</h6>
                    </center>
                    <p class = 'input'>&nbsp;&nbsp;&nbsp;&nbsp;{{$records->assessment}}</p>
                </div>
                <div class="design">
                    <center>
                        <h6>Doctor's Recommendation</h6>
                    </center>
                    <p class = 'input'>&nbsp;&nbsp;&nbsp;&nbsp;{{$records->recommendation}}</p>
                </div>
                <center>
                    <h4 style="margin-top:26%;">{{$records->firstname}} {{$records->lastname}}</h4>
                    Doctor's Name
                </center>
                <div>
                </div>
            </div>
        @empty
            <i><h2 style="text-align : center; color:grey; margin-top: 2%;">no record!</h2></i>
        @endforelse
    </div>
    <a href="{{ URL::previous() }}"><span><i id= 'backButton'  class="fa fa-angle-double-left" ></i></span> 
</body>
</html>