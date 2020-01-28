<!doctype html>
<html lang="en">
<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
    <style>
        .error{
            color: red;
            font-style: italic;
        }
    </style>
</head>

<body>
    <div class="container">
        <div style="float:left;">
            <form action="{{route('createEvent')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="">Appointment</label>
                    <span class="error">
                        @if($errors->has('title'))
                            {{ $errors->first('title') }}
                        @endif
                    </span>
                    <input type="text" name="title">
                </div>
                <div class="form-group">
                    <label for="">Time</label>
                    <span class="error">
                        @if($errors->has('time'))
                            {{ $errors->first('time') }}
                        @endif
                    </span>
                    <input type="time" name="time">
                </div>
                <div class="form-group">
                    <label for="">From</label>
                    <span class="error">
                        @if($errors->has('start_date'))
                            {{ $errors->first('start_date') }}
                        @endif
                    </span>
                    <input type="date" name="start_date">
                </div>
                <div class="form-group">
                    <label for="">To</label>
                    <span class="error">
                        @if($errors->has('end_date'))
                            {{ $errors->first('end_date') }}
                        @endif
                    </span>
                    <input type="date" name="end_date">
                </div>
                <button class="btn btn-primary" name="submit">Submit</button>
            </form> 
        </div>
    </div>
</body>

</html>