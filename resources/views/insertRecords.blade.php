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
            margin-left:1.8%;
            
        }

        input{
            border-radius: .5px;
            border-style:groove
            ;
        }

        textarea{
            height: 190px;
        }
        .input{
            width: 200px;
            border-radius: 5px;
            transition: 1s;
            font-size: 15px;
            color:dodgerblue;
            font-style: italic;
        }
        .textarea{
            width: 300px;
        }
        .container{
            background-color: white;
            height:520px; 
            width:1000px; 
            margin-left: 22.5%;
            margin-top: 7%;
            overlay-y: scroll;
            border-radius: 10px;
            box-shadow: 0 4px 25px 0 rgba(0,0,0,0.2);
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
    <div class="container" >
        <div><br>
            <form action="{{route('insert', $patient->id)}}" method="get">
                @csrf
                <span><h6>Name: {{$patient->firstname}} {{$patient->lastname}}</span><input type="text"  name="date" style="margin-left:600px; float:right; margin-top:-2%;" value="Date: <?php echo date("Y-m-d")?>" readonly></h6>
                <center>
                    <h4>Findings</h4>
                </center>
                <h6>Illness:&nbsp;&nbsp;<input class= 'input'  name="illness" type="text" autocomplete="off"></h6>
                <h6> Caused by:&nbsp;&nbsp;<input class= 'input' name="causeBy" type="text" autocomplete="off" ></h6><br>
                <div class="design">
                    <center>
                        <h6>Physical Exam Findings</h6>
                    </center>
                    <textarea class = 'input textarea' name="physicalExam" class="form-control z-depth-1" ></textarea>
                </div>
                <div class="design">
                    <center>
                        <h6>Assessment</h6>
                    </center>
                    <textarea class = 'input textarea' name="assessment" class="form-control z-depth-1" ></textarea>
                </div>
                <div class="design">
                    <center>
                        <h6>Recommendation</h6>
                    </center>
                    <textarea class = 'input textarea' name="recommendation" class="form-control z-depth-1" ></textarea>
                </div>
                <center>
                    <h5 style="margin-top:26%;" name="doctor"><u>{{$patient->docId}}</u></h5><br>
                    Doctor's Name
                </center>
                <button style="float:right; margin-top:-4.3%; margin-right:5%;" type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>
    <a href="{{ URL::previous() }}"><span><i id= 'backButton' style="margin-top:-1%;" class="fa fa-angle-double-left" ></i></span> 
</body>
</html>