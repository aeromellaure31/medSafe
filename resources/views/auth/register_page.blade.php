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
               <p>Make it safe and easy!</p>
               <hr style="background-color:red">
               <!-- start edit dre -->
               <!-- <div class="card-header"> {{ isset($url) ? ucwords  ($url) : ""}} {{ __('Login') }}</div> -->
               @isset($url)
               <form method="POST" action='{{ url("login/$url") }}' aria-label="{{ __('Login') }}">
                  @else
               <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                  @endisset
                  <!-- <form action="{{route('login')}}" method="post"> -->
                  <!-- @end edit here -->
                  @csrf
                  <div style="background-color:transparent; margin-top:-5%;">
                     <div class="card-body p-3">
                        <h2>Login</h2>
                        <div class="form-group">
                           <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text" style="height:40px;"><i class="fa fa-user text-primary"></i></div>
                                </div>
                                @if($errors->has('email'))
                                <label>{{$errors->first('email')}}</label>
                                <input style="margin-top: -0%;" type="email" class="form-control alert alert-danger" id="nombre" name="email" placeholder="Email" required>
                                @else
                                <input style="margin-top: -0%;" type="email" class="form-control" id="nombre" name="email" placeholder="Email" required>
                                @endif
                            </div>
                        </div>
                        <div class="input-group mb-2" style="margin-top:10%;">
                           <div class="input-group-prepend">
                              <div class="input-group-text" style="height:40px;"><i class="fa fa-key text-primary"></i></div>
                           </div>
                            @if($errors->has('email'))
                            <label>{{$errors->first('password')}}</label>
                            <input style="margin-top: -0%;" type="password" class="form-control alert alert-danger" id="nombre" name="password" placeholder="Password" required>
                            @else
                            <input style="margin-top: -0%;" type="password" class="form-control" id="nombre" name="password" placeholder="Password" required>
                            @endif
                        </div>
                        <div class="text-center">
                           <input type="submit" value="Login" style="border-radius: 1.5rem; height: 35px; margin-top:5%;">
                        </div>
                     </div>
                     <hr style="background-color:red">
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
                    <!-- @start edit here -->
                    <!-- <div class="card-header"> {{ isset($url) ? ucwords($url) : ""}} {{ __('Register') }}</div> -->
                    @isset($url)
                    <form method="POST" action='{{ url("register/$url") }}' aria-label="{{ __('Register') }}">
                    @else
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                    @endisset
                    <!-- <form action="{{route('account.create')}}" method="post"> -->
                    <!-- @end edit here -->
                        @csrf
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="row register-form" style="float:right; margin-top: 0%; margin-right: 6%;">
                           <div class="col-md-6">
                              @if($errors->has('firstname'))
                              <div class="form-group">
                                 <input type="text" id="firstname" class="form-control alert alert-danger" placeholder="{{$errors->first('firstname')}}" name='firstname' autocomplete='off' />
                              </div>
                              @else
                              <div class="form-group">
                                 <input type="text" id="firstname" class="form-control " name='firstname' placeholder="First Name" value="{{old('firstname')}}" autocomplete='off'/>
                              </div>
                              @endif
                              @if($errors->has('middlename'))
                              <div class="form-group"> 
                                 <input type="text" id="middlename" class="form-control alert alert-danger" placeholder="{{$errors->first('middlename')}}" name='middlename' autocomplete='off' />
                              </div>
                              @else
                              <div class="form-group">
                                 <input type="text" class="form-control" name='middlename' placeholder="Middle Name" value="{{old('middlename')}}" autocomplete='off'/>
                              </div>
                              @endif
                              @if($errors->has('lastname'))
                              <div class="form-group">
                                 <input type="text" id="lastname" class="form-control alert alert-danger" placeholder="{{$errors->first('lastname')}}" name='lastname' autocomplete='off' />
                              </div>
                              @else
                              <div class="form-group">
                                 <input type="text" class="form-control" name= 'lastname' placeholder="Last Name" value="{{old('lastname')}}" autocomplete='off'/>
                              </div>
                              @endif
                              @if($errors->has('age'))
                              <div class="form-group">
                                 <input id="age" class="form-control alert alert-danger" placeholder="{{$errors->first('age')}}" name='age' autocomplete='off' />
                              </div>
                              @else
                              <div class="form-group">
                                 <input  class="form-control" name='age' placeholder="Age" value="{{old('age')}}" autocomplete='off'/>
                              </div>
                              @endif
                              @if($errors->has('birthday'))
                              <div class="form-group">
                                 <input type="date" id="birthday" class="form-control alert alert-danger" placeholder="{{$errors->first('birthday')}}" name='birthday' autocomplete='off' />
                              </div>
                              @else
                              <div class="form-group">
                                 <input type="date" class="form-control" name='birthday' placeholder="Birthday" value="{{old('birthday')}}" autocomplete='off'/>
                              </div>
                              @endif
                              @if($errors->has('gender'))
                              <div>
                                 <label style="color:red" for="address">{{$errors->first('address')}}</label>
                              </div>
                              <div class="form-group">
                                 <div class="maxl">
                                    <label class="radio inline"> 
                                    <input type="radio" name="gender" value="male" {{ old('gender') == 'male' ? 'checked' : '' }}>
                                    <span> Male </span> 
                                    </label>
                                    <label class="radio inline"> 
                                    <input type="radio" name="gender" value="female" {{ old('gender') == 'female' ? 'checked' : '' }}>
                                    <span>Female </span> 
                                    </label>
                                 </div>
                              </div>
                              @else
                              <div class="form-group">
                                 <div class="maxl">
                                    <label class="radio inline"> 
                                    <input type="radio" name="gender" value="male"  {{ old('gender') == 'male' ? 'checked' : '' }}>
                                    <span> Male </span> 
                                    </label>
                                    <label class="radio inline"> 
                                    <input type="radio" name="gender" value="female" {{ old('gender') == 'female' ? 'checked' : '' }}>
                                    <span>Female </span> 
                                    </label>
                                 </div>
                              </div>
                              @endif
                           </div>
                           <div class="col-md-6">
                              @if($errors->has('address'))
                              <div class="form-group">
                                 <input type="text" id="address" class="form-control alert alert-danger" placeholder="{{$errors->first('address')}}" name='address' autocomplete='off' />
                              </div>
                              @else
                              <div class="form-group">
                                 <input type="text" class="form-control" name='address' placeholder="Address" value="{{old('address')}}" autocomplete='off'/>
                              </div>
                              @endif
                              @if($errors->has('nationalityId'))
                              <div class="form-group">
                                 <input type="text" id="nationalityId" class="form-control alert alert-danger" placeholder="{{$errors->first('nationalityId')}}" name='nationalityId' autocomplete='off' />
                              </div>
                              @else
                              <div class="form-group">
                                 <input type="text" name='nationalityId' class="form-control" placeholder="Nationality" value="{{old('nationalityId')}}" autocomplete='off'/>
                              </div>
                              @endif
                              @if($errors->has('phoneNum'))
                              <div class="form-group">
                                 <input id="phoneNum" class="form-control alert alert-danger" placeholder="{{$errors->first('phoneNum')}}" name='phoneNum' autocomplete='off' />
                              </div>
                              @else
                              <div class="form-group">
                                 <input class="form-control" placeholder="Contact Number" name='phoneNum' value="{{old('phoneNum')}}" autocomplete='off'/>
                              </div>
                              @endif
                              @if($errors->has('email'))
                              <div class="form-group">
                                 <input type="text" id="email" class="form-control alert alert-danger" placeholder="{{$errors->first('email')}}" name='email' autocomplete='off' />
                              </div>
                              @else
                              <div class="form-group">
                                 <input type="email" class="form-control" name='email' placeholder="Email" value="{{old('email')}}" autocomplete='off'/>
                              </div>
                              @endif
                              @if($errors->has('password'))
                              <div class="form-group">
                                 <input type="password" id="password" class="form-control alert alert-danger" placeholder="{{$errors->first('password')}}" name='password' autocomplete='off' />
                              </div>
                              @else
                              <div class="form-group">
                                 <input type="password" name='password' class="form-control" placeholder="Password" value="{{old('password')}}" autocomplete='off'/>
                              </div>
                              @endif

                              @if($errors->has('confirm_pass'))
                              <div class="form-group">
                                 <input type="password" id="confirm_pass" class="form-control alert alert-danger" placeholder="{{$errors->first('confirm_pass')}}" name='confirm_pass' autocomplete='off' />
                              </div>
                              @else
                              <div class="form-group">
                                 <input type="password" class="form-control" name='confirm_pass'  placeholder="Confirm Password" value="{{old('confirm_pass')}}" autocomplete='off'/>
                              </div>
                              @endif
                           </div>
                           <input type="submit" class="btnRegister" value="Register" autocomplete='off'style="margin-left: 30%;  margin-top: 5%;"/>
                        </div>
                     </form>
                  </div>
                  <div class="tab-pane fade show" id="doctor" role="tabpanel" aria-labelledby="profile-tab">
                    <h3  class="register-heading">Register as a Doctor</h3>
                    <!-- @start edit here -->
                    <!-- <div class="card-header"> {{ isset($url) ? ucwords($url) : ""}} {{ __('Register') }}</div> -->
                    @isset($url)
                    <form method="POST" action='{{ url("register/$url") }}' aria-label="{{ __('Register') }}">
                    @else
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                    @endisset
                    <!-- <form action="{{route('account.create')}}" method="post">> -->
                    <!-- @end edit here -->
                    @csrf
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="row register-form"  style="float:right; margin-top: -2%; margin-right: 4%;">
                           <div class="col-md-6">
                                @if($errors->has('firstname'))
                                <div class="form-group">
                                    <input type="firstname" id="firstname" class="form-control alert alert-danger" placeholder="{{$errors->first('firstname')}}" name='firstname' autocomplete='off' />
                                </div>
                                @else
                                <div class="form-group">
                                    <input type="text" class="form-control" name='firstname' placeholder="First Name" value="" autocomplete='off'/>
                                </div>
                                @endif

                                @if($errors->has('middlename'))
                                <div class="form-group">
                                    <input type="middlename" id="middlename" class="form-control alert alert-danger" placeholder="{{$errors->first('middlename')}}" name='middlename' autocomplete='off' />
                                </div>
                                @else
                                <div class="form-group">
                                    <input type="text" class="form-control" name='middlename' placeholder="Middle Name" value="" autocomplete='off'/>
                                </div>
                                @endif

                                @if($errors->has('lastname'))
                                <div class="form-group">
                                    <input type="lastname" id="lastname" class="form-control alert alert-danger" placeholder="{{$errors->first('lastname')}}" name='firstname' autocomplete='off' />
                                </div>
                                @else
                                <div class="form-group">
                                    <input type="text" class="form-control" name ='lastname' placeholder="Last Name" value="" autocomplete='off'/>
                                </div>
                                @endif

                                @if($errors->has('age'))
                                <div class="form-group">
                                    <input id="age" class="form-control alert alert-danger" placeholder="{{$errors->first('age')}}" name='age' autocomplete='off' />
                                </div>
                                @else
                                <div class="form-group">
                                    <input class="form-control" name='age' placeholder="Age" value="" autocomplete='off'/>
                                </div>
                                @endif

                                @if($errors->has('birthday'))
                                <div class="form-group">
                                    <input type="date" id="birthday" class="form-control alert alert-danger" placeholder="{{$errors->first('birthday')}}" name='birthday' autocomplete='off' />
                                </div>
                                @else
                                <div class="form-group">
                                    <input type="date" class="form-control" name='birthday' placeholder="Birthday" value="" autocomplete='off'/>
                                </div>
                                @endif

                                @if($errors->has('nationalityId'))
                                <div class="form-group">
                                    <input type="nationalityId" id="nationalityId" class="form-control alert alert-danger" placeholder="{{$errors->first('nationalityId')}}" name='nationalityId' autocomplete='off' />
                                </div>
                                @else
                                <div class="form-group">
                                    <input type="text" class="form-control" name='nationalityId' placeholder="Nationality" value="" autocomplete='off'/>
                                </div>
                                @endif

                                @if($errors->has('gender'))
                                <div>
                                    <label style="color:red" for="address">{{$errors->first('address')}}</label>
                                </div>
                                <div class="form-group">
                                    <div class="maxl">
                                        <label class="radio inline"> 
                                        <input type="radio" name="gender" value="male" {{ old('gender') == 'male' ? 'checked' : '' }}>
                                        <span> Male </span> 
                                        </label>
                                        <label class="radio inline"> 
                                        <input type="radio" name="gender" value="female" {{ old('gender') == 'female' ? 'checked' : '' }}>
                                        <span>Female </span> 
                                        </label>
                                    </div>
                                </div>
                                @else
                                <div class="form-group">
                                    <div class="maxl">
                                        <label class="radio inline"> 
                                        <input type="radio" name="gender" value="male"  {{ old('gender') == 'male' ? 'checked' : '' }}>
                                        <span> Male </span> 
                                        </label>
                                        <label class="radio inline"> 
                                        <input type="radio" name="gender" value="female" {{ old('gender') == 'female' ? 'checked' : '' }}>
                                        <span>Female </span> 
                                        </label>
                                    </div>
                                </div>
                              @endif
                            </div>
                            <div class="col-md-6">
                                @if($errors->has('licenseNum'))
                                <div class="form-group">
                                    <input id="licenseNum" class="form-control alert alert-danger" placeholder="{{$errors->first('licenseNum')}}" name='firstname' autocomplete='off' />
                                </div>
                                @else
                                <div class="form-group">
                                    <input class="form-control" name="licenseNum" placeholder="License Number" value="" autocomplete='off'/>
                                </div>
                                @endif

                                @if($errors->has('specialtyId'))
                                <div class="form-group">
                                    <input type="specialtyId" id="specialtyId" class="form-control alert alert-danger" placeholder="{{$errors->first('specialtyId')}}" name='specialtyId' autocomplete='off' />
                                </div>
                                @else
                                <div class="form-group">
                                    <input type="text" class="form-control" name='specialtyId'  placeholder="License Type" value="" autocomplete='off'/>
                                </div>
                                @endif

                                @if($errors->has('phoneNum'))
                                <div class="form-group">
                                    <input id="phoneNum" class="form-control alert alert-danger" placeholder="{{$errors->first('phoneNum')}}" name='phoneNum' autocomplete='off' />
                                </div>
                                @else
                                <div class="form-group">
                                    <input name='phoneNum' class="form-control" placeholder="Contact Number" value=09 autocomplete='off'/>
                                </div>
                                @endif

                                @if($errors->has('address'))
                                <div class="form-group">
                                    <input type="address" id="address" class="form-control alert alert-danger" placeholder="{{$errors->first('address')}}" name='address' autocomplete='off' />
                                </div>
                                @else
                                <div class="form-group">
                                    <input type="text" class="form-control" name='address' placeholder="Address" value="" autocomplete='off'/>
                                </div>
                                @endif

                                @if($errors->has('email'))
                                <div class="form-group">
                                    <input type="email" id="email" class="form-control alert alert-danger" placeholder="{{$errors->first('email')}}" name='email' autocomplete='off' />
                                </div>
                                @else
                                <div class="form-group">
                                    <input type="email" class="form-control" name='email' placeholder="Email" value="@gmail.com" autocomplete='off'/>
                                </div>
                                @endif

                                @if($errors->has('password'))
                                <div class="form-group">
                                    <input type="password" id="password" class="form-control alert alert-danger" placeholder="{{$errors->first('password')}}" name='password' autocomplete='off' />
                                </div>
                                @else
                                <div class="form-group">
                                    <input type="password" class="form-control" name='password' placeholder="Password" value="{{old('password')}}" autocomplete='off'/>
                                </div>
                                @endif

                                @if($errors->has('confirm_pass'))
                                <div class="form-group">
                                    <input type="password" id="confirm_pass" class="form-control alert alert-danger" placeholder="{{$errors->first('confirm_pass')}}" name='confirm_pass' autocomplete='off' />
                                </div>
                                @else
                                <div class="form-group">
                                    <input type="password" class="form-control" name='confirm_pass'  placeholder="Confirm Password" value="{{old('confirm_pass')}}" autocomplete='off'/>
                                </div>
                                @endif
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