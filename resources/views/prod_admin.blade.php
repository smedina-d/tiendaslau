<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Laravel Resize Image Tutorial - ItSolutionStuff.com</h1>
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


    <div class="alert alert-success alert-block">
    </div>
    <div class="row">
        <div class="col-md-4">
            <strong>Original Image:</strong>
            <br/>
            <img src="{{ asset('productos/thumbnail/thumb_4f492ea8-732a-4e26-9966-868f9c050d9c.jpg') }}"/>
        </div>

    </div>


<form action="{{ url('save/product') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-12">
            <br/>
            <input type="file" name="file" class="image">
        </div>
        <div class="col-md-12">
            <br/>
            <button type="submit" class="btn btn-success">Upload Image</button>
        </div>
    </div>
</form>
</body>
</html>
