<!doctype html>
<html lang="en">
<head>
    @include('.demo-facebook-ngoc-anh.layout.head')
    <title>Document</title>
</head>
<body>

<div class="container-fluid row d-flex justify-content-center">
    <div class="col-8">
        <div class="col-12">
            <img class="showCoverPhoto" src="{{$user->coverPhoto}}">
        </div>
        <div class="col-12 d-flex justify-content-center ">
            <img class="showAvatar" src="{{$user->avatar}}">
        </div>
        <div class="col-12 d-flex justify-content-center properties">
            <h2 class="name">{{$user->firstName}} {{$user->lastName}}</h2>
        </div>
        <div class="col-12 d-flex justify-content-center properties">
            <p class="story">bbi🍭</p>
        </div>
        <div class="col-12 row">
            <div class="information col-6">
                <div class="col-12 properties">
                    <p class="email"><strong>Email:</strong>{{$user->email}}</p>
                </div>
                <div class="col-12  properties ">
                    <p class="address"><strong>Địa chỉ:</strong>{{$user->address}}</p>
                </div>
                <div class="col-12  properties">
                    <p class="birthday"><strong>Sinh nhật:</strong>{{$user->birthday}}</p>
                </div>
                <div class="col-12 properties">
                    <p class="phoneNumber"><strong>Số điện thoại:</strong>{{$user->phoneNumber}}</p>
                </div>
            </div>
            <button data-toggle="modal" data-target="#exampleModalCenter" class="btn btn-danger add-stt">Bạn đang nghĩ
                gì
            </button>
            <a href="{{route('home')}}">
                <button class="newFeed btn btn-info">
                    newFeed
                </button>
            </a>
            <a href="{{route('logout')}}">
                <button class="newFeed btn btn-info">
                    Đăng xuất
                </button>
            </a>
        </div>
    </div>
</div>
<div class="col-12 d-flex justify-content-center">
    <div class="col-5 content">
        @for($i = sizeof($user->articles)-1;$i>=0;$i--)
            <div class="col-12">
                <div class="col-12 row top-profile">
                    <img class="avatar-mini"
                         src="{{$user->avatar}}"
                         alt="avatar">
                    <p>{{$user->firstName}} {{$user->lastName}}<br><span>{{$user->articles[$i]->created_at}}</span></p>
                </div>
                <div class="content-area col-12">
                    <p>{{$user->articles[$i]->content}}</p>
                    <img class="img-content"
                         src="{{$user->articles[$i]->images}}"
                         alt="">
                </div>
            </div>
        @endfor
    </div>
</div>

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('addStatus')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <textarea name="content" class="form-control" placeholder="Nhập nội dung bài viết"></textarea>
                    </div>
                    <div class="form-group">
                        <input name="images" class="form-control" type="text" placeholder="Nhập ảnh">
                    </div>
                    <div class="form-group">
                        <button class="form-control btn btn-info">Submit</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                <button type="button" class="btn btn-primary d-none">Đăng bài</button>
            </div>
        </div>
    </div>
</div>

@include('demo-facebook-ngoc-anh.layout.script')
</body>
</html>
