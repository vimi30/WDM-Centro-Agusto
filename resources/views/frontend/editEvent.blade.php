<!DOCTYPE HTML>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<title> Edit Event</title>
</head>

<body>

<form action="/updateEvent/{{ $event->event_id }}"  method="post">
    {{ csrf_field() }}
    <div class="container">
    @if(count($errors)>0)
               <div class= "alert alert-danger"></div>
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
               @endif
        <div class="jumbotron" style="margintop:5%;">
            <h1>Update Event details</h1>
            <hr>
            <div class="form-group">
                <label>Event Name</label>
                <input type="text" class="form-control" name="event_type" value="{{ $event->event_type }}" placeholder="Enter Project Name">
            </div>
            <div class="form-group">
                <label>Evnet Description</label>
                <!--<input type="text" class="form-control"  value="{{ $event->event_description }}" placeholder="Enter Project Description">-->
                <textarea class="form-control" name="event_description" id="description" rows="4" name="project_Description" value="" required>{{ $event->event_description }}</textarea>
            </div>
            <div class="form-group">
                <label>Date</label>
                <input type="date" class="form-control" name="date" value="{{ $event->date }}" placeholder="">
            </div>
            <div>
                <input type="submit" name="submit" class="btn btn-success" value="Update Event">
            </div>
        </div>
    </div>


</form>

</body>
</html>