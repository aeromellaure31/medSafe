<!-- add appointment modal -->
<div class="container">
        <!-- Button to Open the Modal -->
        
        <!-- The Modal -->
    <div id="addAppointment" class="modal hide" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
            <h4 class="modal-title" >Add Appointment</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            
            <!-- Modal body -->
            <div class="modal-body">
                <form action="{{route('createEvent')}}" method="POST">
                    @csrf
                    <div class="form-group"><br>
                        
                        <label>Title:</label><br>
                        <span class="error">
                            @if($errors->has('title'))
                                {{ $errors->first('title') }}
                            @endif
                        </span>
                        <input type="text" name="title" class="form form-control"  autocomplete='off'>
                    </div>
                    <div class="form-group">
                        <label for="">Time:</label><br>
                        <span class="error">
                            @if($errors->has('time'))
                                {{ $errors->first('time') }}
                            @endif
                        </span>
                        <input type="time" name="time" class="form form-control" >
                    </div>
                    <div class="form-group">
                        <label for="">Date From:</label><br>
                        <span class="error">
                            @if($errors->has('start_date'))
                                {{ $errors->first('start_date') }}
                            @endif
                        </span>
                        <input   type="date" name="start_date" class="form form-control" autocomplete='off'>
                    </div>
                    <div class="form-group">
                        <label for="">Date Until:</label><br>
                        <span class="error">
                            @if($errors->has('end_date'))
                                {{ $errors->first('end_date') }}
                            @endif
                        </span>
                        <input  type="date" name="end_date" class="form form-control" autocomplete='off'>
                    </div>
                        <span>
                            <input id = 'createButton' type= 'submit' class="button" name="submit" value = 'Create' />
                        </span>
                </form> 
            </div>
            <div class="modal-footer">
            <!-- Modal footer -->
            </div>
        </div>
        </div>
    </div>
</div>