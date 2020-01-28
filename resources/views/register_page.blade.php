<!DOCTYPE html>
<html>
    <head>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <link rel='stylesheet' type='text/css' href="{{ url('css/form.css')}}"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    </head>
<body>
    <div class="container register">
            <div class="row">
                <div class="col-md-3 register-left">
                    <h3><i class="fa fa-file-medical"></i>MedSafe</h3>
                    <p>Make it safe and easy!</p><hr style="background-color:red">
                    {{-- <a href="/login" ><input type="submit" name="login" value="Login"/><br/></a> --}}
                    <form action="{{route('login')}}" method="post">
                        @csrf
                        <div style="background-color:transparent; margin-top:-5%;">
                            <div class="card-body p-3">
                                <h2>Login</h2>
                                <div class="form-group">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text" style="height:40px;"><i class="fa fa-user text-primary"></i></div>
                                        </div>
                                        <input style="margin-top: -0%;" type="email" class="form-control" id="nombre" name="email" placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="input-group mb-2" style="margin-top:10%;">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text" style="height:40px;"><i class="fa fa-key text-primary"></i></div>
                                        </div>
                                        <input style="margin-top: -0%;" type="password" class="form-control" id="nombre" name="password" placeholder="Password" required>
                                    </div>

                                <div class="text-center">
                                    <input type="submit" value="Login" style="border-radius: 1.5rem; height: 35px; margin-top:5%;">
                                </div>
                            </div><hr style="background-color:red">
                        </div>
                    </form>
                </div>
                <div class="col-md-9 register-right" style="height:570px;">
                    <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#patient" role="tab" aria-controls="patient" aria-selected="true">Patient</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#doctor" role="tab" aria-controls="doctor" aria-selected="false">Doctor</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="patient" role="tabpanel" aria-labelledby="home-tab">
                            <h3 class="register-heading">Register as a Patient</h3>
                            <form action="{{route('account.create')}}" method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="row register-form" style="float:right; margin-top: 0%; margin-right: 6%;">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name='firstname' placeholder="First Name" value="" autocomplete='off'/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name='middlename' placeholder="Middle Name" value="" autocomplete='off'/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name= 'lastname' placeholder="Last Name" value="" autocomplete='off'/>
                                        </div>
                                        <div class="form-group">
                                            <input type="number" class="form-control" name='age' placeholder="Age" value="" autocomplete='off'/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name='birthday' placeholder="Birthday" value="" autocomplete='off'/>
                                        </div>
                                        <div class="form-group">
                                            <div class="maxl">
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="male" checked>
                                                    <span> Male </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="female">
                                                    <span>Female </span> 
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        
                                        <div class="form-group">
                                            <input type="text" class="form-control" name='address' placeholder="Address" value="" autocomplete='off'/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name='nationalityId' class="form-control" placeholder="Nationality" value="" autocomplete='off'/>
                                        </div>
                                        <div class="form-group">
                                            <input type="number"    class="form-control" placeholder="Contact Number" name='phoneNum' value=09 autocomplete='off'/>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" name='email' placeholder="Email" value="@gmail.com" autocomplete='off'/>
                                        </div>

                                        <div class="form-group">
                                            <input type="password" name='password1' class="form-control" placeholder="Password" value="" autocomplete='off'/>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" name='password'  placeholder="Confirm Password" value="" autocomplete='off'/>
                                        </div>
                                    </div>
                                    <input type="submit" class="btnRegister" value="Register" autocomplete='off'style="margin-left: 30%;  margin-top: 5%;"/>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade show" id="doctor" role="tabpanel" aria-labelledby="profile-tab">
                            <h3  class="register-heading">Register as a Doctor</h3>
                            <form action="{{route('account.create')}}" method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="row register-form"  style="float:right; margin-top: -2%; margin-right: 4%;">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name='firstname' placeholder="First Name" value="" autocomplete='off'/>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name='middlename' placeholder="Middle Name" value="" autocomplete='off'/>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name ='lastname' placeholder="Last Name" value="" autocomplete='off'/>
                                    </div>
                                    <div class="form-group">
                                        <input type="number" class="form-control" name='age' placeholder="Age" value="" autocomplete='off'/>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name='birthday' placeholder="Birthday" value="" autocomplete='off'/>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name='nationalityId' placeholder="Nationality" value="" autocomplete='off'/>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="maxl">
                                            <label class="radio inline"> 
                                                <input type="radio" name="gender" value="male" checked>
                                                <span> Male </span> 
                                            </label>
                                            <label class="radio inline"> 
                                                <input type="radio" name="gender" value="female">
                                                <span>Female </span> 
                                            </label>
                                        </div>
                                    </div>    
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="License Number" value="" autocomplete='off'/>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name='specialtyId'  placeholder="License Type" value="" autocomplete='off'/>
                                    </div>
                                    <div class="form-group">
                                        <input type="number"  name='phoneNum' class="form-control" placeholder="Contact Number" value=09 autocomplete='off'/>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name='address' placeholder="Address" value="" autocomplete='off'/>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" name='email' placeholder="Email" value="@gmail.com" autocomplete='off'/>
                                    </div>
                                    
                                    <div class="form-group">
                                        <input type="password" class="form-control" name='password1' placeholder="Password" value="" autocomplete='off'/>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name= 'password' placeholder="Confirm Password" value="" autocomplete='off'/>
                                    </div>
                                </div>
                                <input type="submit" class="btnRegister" value="Register" style="margin-left: 28%;  margin-top: -1.5%; float:left"/>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </body>
</html>