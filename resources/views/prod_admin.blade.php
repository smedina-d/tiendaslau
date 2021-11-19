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
<form action="{{ url('save/product') }}" method="post" enctype="multipart/form-data" >
    <div class="form-group">
        <label for="exampleInputFile">File input</label>
        <input type="file" name="file" id="exampleInputFile" accept="image/*">
        <br>
        @error('file')
        <span class="text-danger">
            Debe ser una imagen
        </span>
        @enderror
    </div>
    @csrf
    <button type="submit" class="btn btn-default">Submit</button>
</form>
</body>
</html>
