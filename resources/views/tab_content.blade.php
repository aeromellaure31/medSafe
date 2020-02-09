<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <link rel='stylesheet' type='text/css' href="{{ url('css/header.css')}}"/>
    </head>

    <body>
        @if(\Request::is('patients'))
            <div>
                <div id = 'container' style="margin-left:1%; background-color:#e3e1e1">
                    @if(count($requests) > 0)
                        @forelse($requests as $patient)
                            @foreach($patient->requestDoctor as $a)
                                @if($patient->request == 1)
                                    <div id = 'rows' style="margin-left:2.5%; background-color:#d4d4d9">
                                        <a href="/patient/profile/{{$patient->id}}">
                                            <div>
                                                <img height='170px' width='auto' src="https://cdn4.vectorstock.com/i/1000x1000/47/13/cardiology-patient-icon-vector-6244713.jpg" alt="">
                                                <b style="margin-left:3%;"> {{$a->firstname}} </b>
                                            </div>
                                        </a>
                                    </div>
                                @endif
                            @endforeach
                        @empty
                        <h1>no record</h1>
                        @endforelse
                    @else
                        <i> <h1>no patient</h1></i>
                    @endif
                </div>
                </div>
            @elseif(\Request::route()->getName() == 'find.patient.request')
                <div id = 'container'>
                    @foreach($requests as $patient)
                        {{$patient}}
                        @break
                    @endforeach
                </div>
            </div>
        @elseif(\Request::is('requests'))
            <div id = 'container'>
                <div >
                    @forelse($requests as $patient)
                        @foreach($patient->requestDoctor as $a)
                        
                            @if($patient->request == 0)
                                <div id = 'requests_rows' >
                                    @if($patient->status)
                                        <a style="color:gray" href="/patient/find/{{$patient->id}}">
                                                {{$a->firstname}} wants to have an appoiintment with you.
                                        </a>
                                    @else
                                        <a style="color:blue" href="/patient/find/{{$patient->id}}">
                                            {{$a->firstname}} wants to have an appoiintment with you.
                                        </a>
                                    @endif
                                </div>
                            @endif
                        @endforeach
                    @empty
                        <i><h5>no request</h5></i>
                    @endforelse
                </div>
            </div>
        @elseif(\Request::route()->getName() == 'find.patient')
            <div id='container'>
                @foreach($patient as $user)
                    <h4>
                        {{$user->requestDoctor[0]->firstname}}
                    </h4>
                    <span>
                        <img height='250px' width='auto' src="https://cdn4.vectorstock.com/i/1000x1000/47/13/cardiology-patient-icon-vector-6244713.jpg" alt="">
                    </span>
                    <p>
                        <b> message :</b>
                        <h5>
                            <i>
                                Hey I want you to check my lungs.
                            </i>
                        </h5>
                    </p>
                    <span>
                        <a  href="/doctor/accept/{{$user->id}}">
                            <input type="submit" value="accept request">
                        </a>
                    </span>
                    <span>
                        <a  href="{{URL::previous()}}">
                            <input class ='head' type="submit" value="back">
                        </a>
                    </span>
                @endforeach
            </div>
        @elseif((\Request::route()->getName() == 'patient.profile'))
            @foreach($patient as $user)
                <div id = 'container'>
                    <div style="float:right; width: 500px; height: 250px; margin-right: 10%; margin-top:3%; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
                    transition: 0.3s;">
                        <div style="margin-left: 20%; margin-top:7%;">
                            <h4>PhoneNo: <span style="margin-left:5%;">+63{{$user->requestDoctor[0]->phoneNum}}</span></h4>
                            <h4>Email: <span style="margin-left:15.3%;">{{$user->requestDoctor[0]->email}}</span></h4>
                            <h4>Address: <span style="margin-left:8.5%;">{{$user->requestDoctor[0]->address}}</span></h4>
                            <h4>Nationality: <span style="margin-left:3%;">{{$user->requestDoctor[0]->nationalityId}}</span></h4>
                            <h4>Gender: <span style="margin-left:11.5%;">{{$user->requestDoctor[0]->gender}}</span></h4>
                        </div>
                    </div>
                    <div class="card" style="margin-left:10%; margin-top:1%">
                        <center>
                            <h4>
                                <b>
                                    {{$user->requestDoctor[0]->firstname}} {{$user->requestDoctor[0]->middlename}} {{$user->requestDoctor[0]->lastname}}
                                </b>
                            </h4>
                            <div class="card-body">
                                <img src="https://cdn4.vectorstock.com/i/1000x1000/47/13/cardiology-patient-icon-vector-6244713.jpg" alt="Avatar" style="width:150px">
                                <div id="card"><br>
                                    <i><h6>Hubak</h6> </i>
                                </div>
                            </div>
                        </center>
                    </div>
                    <div style="float:right; margin-right: 20px;">
                        <a href="/patient/records/{{$user->id}}">
                            <input type="button" class="button button4" value="Records">
                        </a>
                        <form action="{{url('insertRecords')}}" style='float:left'>
                            <input type="hidden" name="id" value="{{$user->id}}">
                            <input type="submit" class="button button4" value="Add Record">
                        </form>
                    </div>
                    <a href="{{ URL::previous() }}"><span><i id= 'backButton'  class="fa fa-angle-double-left" ></i></span> 
                </div>
            @endforeach
        @endif
        </div>
    </body>
</html>
