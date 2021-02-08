<!DOCTYPE HTML>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<title> Edit Project View</title>
</head>

<body>

    @if(\Session::has('success'))
    <div class="alert">
        <h4>{{ \Session::get('success') }}</h4>
    </div>

    @endif
<br>
<form action="/addContact"  method="post">
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
            <h1>Enter the details of the Contact</h1>
            <hr>
            <div class="form-group">
                <label>Contact  Name</label>
                <input type="text" class="form-control" name="contact_Name" placeholder="Enter Contact Name" required>
            </div>
            <div class="form-group">
                <label>Contact Description</label>
                <!--<input type="text" class="form-control" name="contact_Description" placeholder="Enter Contact Description" required>-->
                <textarea class="form-control" name="contact_Description" id="description" rows="4" placeholder="Enter contact Description" required></textarea>
            </div>
            <div class="form-group">
                <label>Contact Number</label>
                <input type="text" class="form-control" name="contact_Number" placeholder="Enter Contact Number" required>
            </div>
            <div>
                <input type="submit" name="submit" class="btn btn-success" value="Add Contact">
            </div>
        </div>
    </div>


</form>

</body>
</html>