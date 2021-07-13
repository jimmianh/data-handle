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



<div class="login">
    <h1>login</h1>
    <form  method="post" name="dang_nhap">
        @csrf
        <input type="text" name="email">
        <input type="password" name="password">
        <button>login</button>

    </form>
</div>
<br><br>
<div id="register">
    <h1>register</h1>
    <form action="{{route('register')}}" method="post">
        @csrf
        <input type="text" name="firstName" placeholder="firstName"><br>
        <input type="text" name="lastName" placeholder="lastName"><br>
        <input type="text" name="email" placeholder="email"><br>
        <input type="password" name="password" placeholder="password"><br>
        <input type="text" name="phoneNumber" placeholder="phoneNumber"><br>
        <input type="date" name="birthday" placeholder="birthday"><br>
        <input type="text" name="address" placeholder="address"><br>
        <input type="text" name="avatar" placeholder="avatar"><br>
        <input type="text" name="coverPhoto" placeholder="cover photo"><br>
        <button>register</button>
    </form>
</div>
</body>
</html>
