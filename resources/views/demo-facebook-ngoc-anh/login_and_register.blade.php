<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{url('libs/Style/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('libs/Style/cssngocanh/csslogin.css')}}">
</head>
<body>
{{--thành công--}}
@if(session('create_account_success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Thành công!</strong> {{session('create_account_success')}}.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

{{--thất bại --}}
@if(session('login_fail'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Thất bại,</strong> {{session('login_fail')}} !
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
<div class="login col-12 d-flex justify-content-center">
    <div class="col-3">
        <h1 class="text-center">login</h1>
        <form action="{{route('ngocanhLogin')}}" method="post" name="dang_nhap">
            @csrf
            <div class="form-group">
                <input class="form-control" type="text" name="email" placeholder="nhập email">
            </div>
            <div class="form-group">
                <input class="form-control" type="password" name="password" placeholder="nhập password">
            </div>
            <div class="form-group text-center">
                <button class="form-control btn btn-danger">đăng nhập</button>
                <a class="register" href="#">Register</a>
            </div>
        </form>
    </div>
</div>

<div id="register" class=" col-12 d-none justify-content-center">
    <div class="col-4">
        <h1 class="text-center">Register</h1>
        <form action="{{route('ngocanhregister')}}" method="post">
            @csrf
            <div class="row">
                <div class="col-6 form-group">
                    <input class="form-control" type="text" name="firstName" placeholder="Tên">
                </div>
                <div class="col-6 form-group">
                    <input class="form-control" type="text" name="lastName" placeholder="Last name">
                </div>
            </div>
            <div class="row">
                <div class="col-12 form-group ">
                    <input class="form-control" type="text" name="email" placeholder="email">
                </div>
            </div>
            <div class="row">
                <div class="col-6 form-group ">
                    <input class="form-control" type="text" name="password" placeholder="password">
                </div>
                <div class="col-6 form-group ">
                    <input class="form-control" type="text" name="phoneNumber" placeholder="số điện thoại"><br>
                </div>
            </div>

            <div class="row">
                <div class="col-12 form-group ">
                    <input class="form-control" type="date" name="birthday" placeholder="Sinh nhật">
                </div>
            </div>

            <div class="row">
                <div class="col-12 form-group ">
                    <input class="form-control" type="text" name="address" placeholder="address">
                </div>
            </div>

            <div class="row">
                <div class="col-12 form-group ">
                    <input class="form-control" type="text" name="avatar" placeholder="avatar">
                </div>
            </div>

            <div class="row">
                <div class="col-12 form-group ">
                    <input class="form-control" type="text" name="coverPhoto" placeholder="cover photo">
                </div>
            </div>
            <div class="row ">
                <div class="col-12 form-group text-center">
                    <button class="form-control btn-info"> register</button>
                    <a id="login" href="#">Login</a>
                </div>
            </div>
        </form>
    </div>
</div>
<script src="{{url('libs/Script/jquery.min.js')}}"></script>
<script src="{{url('libs/Script/bootstrap.min.js')}}"></script>
<script src="{{url('libs/Script/NgocAnhjs/ngocanh.js')}}"></script>
</body>
</html>
