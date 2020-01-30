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
            margin-left:1.8%;
        }

        input{
            border-radius: 5px;
            border-style:inset;
        }

        textarea{
            height: 190px;
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
    <div class="container" style="background-color: white; height:550px; width:1000px; margin-left: 22.5%; margin-top: 1%; overlay-y: scroll;">
        <div><br>
            <form action="{{route('insert')}}" method="get">
                @csrf
                <h4>Name: <input type="text" name="name" placeholder="name..."> &nbsp;&nbsp; Date: <input name="bday" type="text" placeholder="birthdate..."></h4>
                <center>
                    <h1>Findings</h1>
                </center>
                <h5>Illness:&nbsp;&nbsp;<input name="illness" type="text" placeholder="illness..."></h5>
                <h5> Caused by:&nbsp;&nbsp;<input name="causeBy" type="text" placeholder="cause..."></h5><br>
                <div class="design">
                    <center>
                        <h5>Physical Exam Findings</h5>
                    </center>
                    <textarea name="physicalExam" class="form-control z-depth-1" placeholder="Write here..."></textarea>
                </div>
                <div class="design">
                    <center>
                        <h5>Doctor's Assessment</h5>
                    </center>
                    <textarea name="assessment" class="form-control z-depth-1" placeholder="Write here..."></textarea>
                </div>
                <div class="design">
                    <center>
                        <h5>Doctor's Recommendation</h5>
                    </center>
                    <textarea name="recommendation" class="form-control z-depth-1" placeholder="Write here..."></textarea>
                </div>
                <center
                    <h4 style="margin-top:26%;" name="doctor"><u>{{session("user")}}</u></h4><br>
                    Doctor's Name
                </center>
                <button style="float:right; margin-top:-4.3%; margin-right:5%;" type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>
</body>
</html>