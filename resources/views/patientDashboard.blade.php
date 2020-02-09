<!DOCTYPE html>
<html lang="en">
<head>

        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <link rel='stylesheet' type='text/css' href="{{ url('css/header.css')}}"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
        <link rel='stylesheet' type='text/css' href="{{ url('css/sidebar.css')}}"/>
        <link rel='stylesheet' type='text/css' href="{{ url('css/patient_dashboard.css')}}"/>
    <title>MedSafe</title>
</head>

<body>
    <center>
        <div class="header">
            <i class="fa fa-file-medical fa-3x">MedSafe</i>
        </div>
    </center>
    <div fluid class="container">
        <div class="row">
            <div class="col-sm-2">
                @include('sidebar')
            </div>
            <div class="col-sm-10">
                <br><br><br><br>
                <div >
                    <form action="{{route('doctor.specialty')}}" method='post'>
                    @csrf
                        <div class="form-group">
                           <div class="input-group mb-2">
                              <div class="input-group-prepend">
                                 <div class="input-group-text" style="height:40px;"><i class="fa fa-search text-primary"></i></div>
                              </div>
                              <input class="form-control" style="height:40px;" type="text" id="searchBar" name='specialty' placeholder="Search" autocomplete='off'>
                              <button id="searchBtn" class="btn btn-primary" type="submit" >Search</button>
                           </div>
                        </div>
                    </form>
                    <div class="box-wrap">
                        @foreach($doctors as $doctor)
                            <!-- <input type="submit" placeholder=submit> -->
                            <div class="box">
                                <center>
                                    <h3>{{$doctor->firstname." ".$doctor->middlename}}</h3>
                                    <form action="{{ route('search.doctor', $doctor->id )}}" method="get">
                                        <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#myModal"> view profile </button><br><br>
                                    </form>
                                </center>
                            </div>
                        @endforeach 
                    </div>
                </div>
            </div>
        </div> 
    </div>
</body>
</html>