<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <link rel='stylesheet' type='text/css' href="{{ url('css/header.css')}}"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
        <link rel='stylesheet' type='text/css' href="{{ url('css/sidebar.css')}}"/>
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
                <br>
                <i class="fa fa-search fa-2x">
                    <input style="width:300%" type="text" class="form-control" placeholder="Search"/>
                </i>
                <br><br>
                <div id="tab">
                    @include('tab_content')
                </div>
            </div>
        </div> 
    </div>
    </body>

</html>
