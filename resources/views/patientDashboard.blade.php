<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
    <style>
    @import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";


        body {
            font-family: 'Poppins', sans-serif;
            background: #fafafa;
        }

        p {
            font-family: 'Poppins', sans-serif;
            font-size: 1.1em;
            font-weight: 300;
            line-height: 1.7em;
            color: #999;
        }

        a, a:hover, a:focus {
            color: inherit;
            text-decoration: none;
            transition: all 0.3s;
        }

        #sidebar {
            background: # b3b3b3;
            color: #fff;
            transition: all 0.3s;
        }

        #sidebar .sidebar-header {
            padding: 20px;
            background: #6d7fcc;
        }

        #sidebar ul.components {
            padding: 20px 0;
            border-bottom: 1px solid #47748b;
        }

        #sidebar ul p {
            color: #fff;
            padding: 10px;
        }

        #sidebar ul li a {
            padding: 10px;
            font-size: 1.1em;
            display: block;
        }
        #sidebar ul li a:hover {
            color: #7386D5;
            background: #fff;
        }

        #sidebar ul li.active > a, a[aria-expanded="true"] {
            color: #fff;
            background: #6d7fcc;
        }
        ul ul a {
            font-size: 0.9em !important;
            padding-left: 30px !important;
            background: #6d7fcc;
        }
                .wrapper {
            display: flex;
            width: 100%;
        }

        ul {
            list-style:none;
            margin-left:0;
            padding-left:0;
        }

        #sidebar {
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            z-index: 999;
            background: #7386D5;
            color: #fff;
            transition: all 0.3s;
        }
        h3{
/*     
       bottom: 0;
       right: 0;
       position: fixed;
       z-index: 3000; */
}
        }
    </style>
</head>

<body>
<div class="wrapper">
    <!-- Sidebar -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>REPORTS</h3><hr>
        </div>

        <ul class="list-unstyled components">
            <p>CATEGORY</p>
            <li class="active">
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li>
                        <a href="Day4_categoryCultural.php">Cultural</a>
                    </li>
                    <li>
                        <a href="Day4_categoryEnvironmental.php">Environmental</a>
                    </li>
                    <li>
                        <a href="Day4_categoryPolitical.php">Political</a>
                    </li>
                </ul>
            </li>
            <li>
                <p>SEND REPORT</p>
            </li>
            <li>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li>
                        <a href="Day4_createReport.php">create report</a>
                    </li>

                </ul>
            </li>
            <li>
                <a href="#">Settings</a>
            </li>
            <li></li>
            <li>
        <a href='Day4_logOutsession.php'>LOG OUT</a>

            </li>
        </ul>
    </nav>
    <div id="content">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">

                <button type="button" id="sidebarCollapse" class="btn btn-info">
                    <i class="fas fa-align-left"></i>
                    <span>Toggle Sidebar</span>
                </button>
            </div>
        </nav>
    </div>
    <h4 style="margin-left:200px;"></h4>
</div>
<div style="margin-left:330px;">
    <form action="{{route('doctor.specialty')}}" method='post'>
    @csrf
        <input type="text" name='specialty' placeholder='search'>
        <input type="submit" placeholder=submit>
    </form>
    @foreach($doctors as $doctor)
    <div class="container" style="border:solid black; width:300px; float:left; margin-left:10px;margin-top:10px;">
        <center>
            <h3>{{$doctor->firstname." ".$doctor->middlename}}</h3>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal"> view profile </button><br><br>
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Dr. {{$doctor->firstname}} {{$doctor->lastname}} </h4>
                        </div>
                        <div class="modal-body">
                            <img src="https://image.freepik.com/free-photo/beautiful-young-female-doctor-looking-camera-office_1301-7807.jpg" height='200px' width='auto' >
                            <p>{{$doctor->specialty}}</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </center>
    </div>
    @endforeach 
</div>
</body>
</html>