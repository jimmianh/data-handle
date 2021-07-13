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
<h1>About Us</h1>

{{--dùng chung file--}}
@include('view_cua_ngoc_anh.layout.footer')
{{--Link trang trong php không được link bằng tên file mà phải link bằng đường dẫn hoặc tên của router--}}
<button><a href="{{route('goodbye')}}">click vào đây</a></button>
</body>
</html>
