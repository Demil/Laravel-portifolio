<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Uplaod</title>
</head>
<body>
  <form action="{{url('file-upload')}}"method="post" enctype="multipart/form-data">
    @csrf
    <input type="text"placeholder="file name"name="file-name">
    <input type="file"placeholder="file name"name="file"><br><br><br>
    <input type="submit"value="Uplaod">
  </form>
</body>
</html>
