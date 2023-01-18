<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Upload</h1>
    <form method="POST" action="/upload" enctype="multipart/form-data">
        @csrf
        <input type="file" name="uwu">
        <input type="text" name="description" placeholder="description">
        <input type="number" name="price" placeholder="price">
        <input type="submit" name="upload">
    </form>
</body>
</html>
