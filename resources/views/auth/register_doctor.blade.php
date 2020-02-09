<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel='stylesheet' type='text/css' href="{{ url('css/register.css')}}"/>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
	<title>Register Page</title>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div id="card-doctor" class="card">
			<div class="card-header">
                <center>
                    <h3>Sign Up</h3>
                </center>
			</div>
			<div class="card-body">
				<form method="POST" action="{{route('register.doctor')}}">
                    @csrf
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="row register-form">
                           <div class="col-md-6">
                                @if($errors->has('firstname'))
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="firstname" id="firstname" class="form-control alert alert-danger" placeholder="{{$errors->first('firstname')}}" name='firstname' autocomplete='off' />
                                </div>
                                @else
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name='firstname' placeholder="First Name" value="{{old('firstname')}}" autocomplete='off'/>
                                </div>
                                @endif

                                @if($errors->has('middlename'))
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="middlename" id="middlename" class="form-control alert alert-danger" placeholder="{{$errors->first('middlename')}}" name='middlename' autocomplete='off' />
                                </div>
                                @else
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name='middlename' placeholder="Middle Name" value="{{old('middlename')}}" autocomplete='off'/>
                                </div>
                                @endif

                                @if($errors->has('lastname'))
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="lastname" id="lastname" class="form-control alert alert-danger" placeholder="{{$errors->first('lastname')}}" name='firstname' autocomplete='off' />
                                </div>
                                @else
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name ='lastname' placeholder="Last Name" value="{{old('lastname')}}" autocomplete='off'/>
                                </div>
                                @endif

                                @if($errors->has('age'))
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input id="age" class="form-control alert alert-danger" placeholder="{{$errors->first('age')}}" name='age' autocomplete='off' />
                                </div>
                                @else
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input class="form-control" name='age' placeholder="Age" value="{{old('age')}}" autocomplete='off'/>
                                </div>
                                @endif

                                @if($errors->has('birthday'))
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                    </div>
                                    <input type="date" id="birthday" class="form-control alert alert-danger" placeholder="{{$errors->first('birthday')}}" name='birthday' autocomplete='off' />
                                </div>
                                @else
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                    </div>
                                    <input type="date" class="form-control" name='birthday' placeholder="Birthday" value="{{old('birthday')}}" autocomplete='off'/>
                                </div>
                                @endif

                                @if($errors->has('nationalityId'))
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-flag"></i></span>
                                    </div>
                                    <input type="nationalityId" id="nationalityId" class="form-control alert alert-danger" placeholder="{{$errors->first('nationalityId')}}" name='nationalityId' autocomplete='off' />
                                </div>
                                @else
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-flag"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name='nationalityId' placeholder="Nationality" value="{{old('nationalityId')}}" autocomplete='off'/>
                                </div>
                                @endif

                                @if($errors->has('gender'))
                                <div>
                                    <label style="color:red" for="address">{{$errors->first('gender')}}</label>
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
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-address-card"></i></span>
                                    </div>
                                    <input id="licenseNum" class="form-control alert alert-danger" placeholder="{{$errors->first('licenseNum')}}" name='licenseNum' autocomplete='off' />
                                </div>
                                @else
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-address-card"></i></span>
                                    </div>
                                    <input class="form-control" name="licenseNum" placeholder="License Number" value="{{old('licenseNum')}}" autocomplete='off'/>
                                </div>
                                @endif

                                @if($errors->has('specialtyId'))
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-address-card"></i></span>
                                    </div>
                                    <input type="specialtyId" id="specialtyId" class="form-control alert alert-danger" placeholder="{{$errors->first('specialtyId')}}" name='specialtyId' autocomplete='off' />
                                </div>
                                @else
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-address-card"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name='specialtyId'  placeholder="License Type" value="{{old('specialtyId')}}" autocomplete='off'/>
                                </div>
                                @endif

                                @if($errors->has('phoneNum'))
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-address-book"></i></span>
                                    </div>
                                    <input id="phoneNum" class="form-control alert alert-danger" placeholder="{{$errors->first('phoneNum')}}" name='phoneNum' autocomplete='off' />
                                </div>
                                @else
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-address-book"></i></span>
                                    </div>
                                    <input name='phoneNum' class="form-control" placeholder="Contact Number" value="{{old('phoneNum')}}" autocomplete='off'/>
                                </div>
                                @endif

                                @if($errors->has('address'))
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-address-book"></i></span>
                                    </div>
                                    <input type="address" id="address" class="form-control alert alert-danger" placeholder="{{$errors->first('address')}}" name='address' autocomplete='off' />
                                </div>
                                @else
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-address-book"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name='address' placeholder="Address" value="{{old('address')}}" autocomplete='off'/>
                                </div>
                                @endif

                                @if($errors->has('email'))
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-envelope"></i></span>
                                    </div>
                                    <input type="email" id="email" class="form-control alert alert-danger" placeholder="{{$errors->first('email')}}" name='email' autocomplete='off' />
                                </div>
                                @else
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-envelope"></i></span>
                                    </div>
                                    <input type="email" class="form-control" name='email' placeholder="Email" value="@gmail.com" autocomplete='off'/>
                                </div>
                                @endif

                                @if($errors->has('password'))
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                                    </div>
                                    <input type="password" id="password" class="form-control alert alert-danger" placeholder="{{$errors->first('password')}}" name='password' autocomplete='off' />
                                </div>
                                @else
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                                    </div>
                                    <input type="password" class="form-control" name='password' placeholder="Password" value="{{old('password')}}" autocomplete='off'/>
                                </div>
                                @endif

                                @if($errors->has('confirm_pass'))
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                                    </div>
                                    <input type="password" id="confirm_pass" class="form-control alert alert-danger" placeholder="{{$errors->first('confirm_pass')}}" name='confirm_pass' autocomplete='off' />
                                </div>
                                @else
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                                    </div>
                                    <input type="password" class="form-control" name='confirm_pass'  placeholder="Confirm Password" value="{{old('confirm_pass')}}" autocomplete='off'/>
                                </div>
                                @endif
                           </div>
                        </div>
					<div class="form-group">
						<input type="submit" value="Register" style="width:100%;" class="btn login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
                <div class="d-flex justify-content-center links">
					Already have an account?<a href="{{url('login')}}">Sign In</a>
                </div>
                <div class="d-flex justify-content-center links">
					Register as <a href="{{url('register-patient')}}">Patient</a>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>