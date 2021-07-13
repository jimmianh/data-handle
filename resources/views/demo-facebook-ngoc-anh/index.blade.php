<!doctype html>
<html lang="en">
<head>
    @include('.demo-facebook-ngoc-anh.layout.head')
    <title>Document</title>
    <link rel="stylesheet" href="{{url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css')}}">
    <style>
        .header > a > img {
            object-fit: cover;
            width: 50px;
            height: 50px;
            border: dodgerblue 2px solid;
            border-radius: 50%;
        }

        .header > h1 {
            color: dodgerblue;
        }

        .border > img {
            width: 100%;

        }

        .interactive span {
            padding-left: 1px;
            padding-right: 1px;
        }

        .interactive > div {
            padding: 0;
        }

        .interactive {
            text-align: center;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="col-12 header row">
        <a href="{{route('ngocanhProfile')}}" class="ml-3"><img
                src="{{$user->avatar}}"
                alt=""></a>
        <h1>Facebook</h1>
    </div>
    <div class="col-12 d-flex justify-content-center">
        <div class="col-6 border">
            @for($i=sizeof($articles)-1;$i>=0;$i--)
                <div class="col-12 row top-profile">
                    <img class="avatar-mini"
                         src="https://scontent-hkg4-1.xx.fbcdn.net/v/t1.6435-9/197617556_1178016082714339_417680565459927733_n.jpg?_nc_cat=102&ccb=1-3&_nc_sid=09cbfe&_nc_ohc=gtv1TiQf9tAAX-0a5BX&_nc_ht=scontent-hkg4-1.xx&oh=e76d3e69dbf5101884169a5605bd066c&oe=60EE873F"
                         alt="avatar">
                    <p>{{$articles[$i]->user->firstName}} {{$articles[$i]->user->lastName}}<br><span>{{$articles[$i]->created_at}}</span></p>
                </div>
                <p>{{$articles[$i]->content}}</p>
                <img
                    src="{{$articles[$i]->images}}"
                    alt="">
                {{--            react--}}
                <br>
                <br>
                <div class="row col-12 interactive">
                    <div class="col-4 react">
                            <i class="far fa-thumbs-up"></i>
                            <span class="col-12">Thích</span>
                    </div>
                    <div class="col-4">
                            <i class="far fa-comment-alt"></i>
                            <span class="col-12">Bình luận</span>
                    </div>
                    <div class="col-4">
                            <i class="far fa-share-square"></i>
                            <span class="col-12">Chia sẻ</span>
                    </div>
                </div>
                <br>
                <br>
            @endfor
        </div>
    </div>
</div>

@include('demo-facebook-ngoc-anh.layout.script')
</body>
</html>
