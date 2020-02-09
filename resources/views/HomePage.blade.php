<!DOCTYPE html>
<html>
    <head>
        <title>MedSafe</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <link rel='stylesheet' type='text/css' href="{{ url('css/homepage.css')}}"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    </head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <!--  -->
            </div>
            <div class="col-sm-4">
                <center>
                    <img src="{{ URL::asset('css/images/logo.png') }}">
                    <p>Safety Begins With Us</p>
                    <button href="{{url('login')}}" class="btn btn-primary">Get Started</button>
                </center>
            </div>
            <div class="col-sm-4">
                <!--  -->
            </div>
        </div>
    </div>
</body>
</html>
