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
{{--<h1>Index</h1>--}}
{{--<form action="{{route('viewIndex')}}" method="post">@csrf<button>clickHere</button></form>--}}

{{--Chuyền router có tham số --}}
{{--<a href="{{route('update_product', 1111)}}">clickHere</a>--}}

<form action="{{route('add_product')}}" method="post">
    @csrf
    <input type="text" placeholder="nhap ten san pham" name="product_name">
    <input type="text" placeholder="giá sản phẩm" name="price">
    <input type="text" placeholder="ảnh sản phẩm" name="thumbnail">
    <button>submit</button>

</form>
</body>
</html>
