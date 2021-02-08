<!DOCTYPE HTML>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<title> Edit Project</title>
</head>

<body>

<form action="/update/{{$project->project_Id}}"  method="post">
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

              

            <h1>Update Project details</h1>
            <hr>
            <div class="form-group">
                <label>Project Name</label>
                <input type="text" class="form-control" name="project_Name" value="{{ $project->project_Name }}" placeholder="Enter Project Name">
            </div>
            <div class="form-group">
                <label>Project Description</label>
                <!--<input type="textarea" class="form-control" name="project_Description" value="{{ $project->project_Description }}"placeholder="Enter Project Description">-->
                <textarea class="form-control" id="description" rows="4" name="project_Description" required> {{ $project->project_Description }}</textarea>
            </div>
            <div class="form-group">
                <label>Date</label>
                <input type="date" class="form-control" name="date" value="{{ $project->date }}" placeholder="">
            </div>
            <div>
                <input type="submit" name="submit" class="btn btn-success" value="Update Project">
            </div>
        </div>
    </div>


</form>

</body>
</html>