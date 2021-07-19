@extends('layout.master-layout')
@section('Title','Product create || Admin')
@section('page_name','Product create ')
@section('main_content')
    <div style="width: 100%;display: flex; justify-content: center">
        <div class="col-md-5">
            <h2 class="text-info">Product form</h2>
            <form action="" method="post">
                @csrf
                <div class="form-group">
                    <input value="{{$detailProduct ? $detailProduct->name:''}}" name="name" class="form-control" type="text" placeholder="nhập tên">
                </div>
                <div class="form-group">
                    <input value="{{$detailProduct ? $detailProduct->thumbnail:''}}" name="thumbnail" class="form-control" type="text" placeholder="Nhập link ảnh">
                </div>
                <div class="form-group">
                    <input value="{{$detailProduct ? $detailProduct->price:''}}" name="price" class="form-control" type="number" placeholder="Nhập giá">
                </div>
                <div class="form-group">
                    <input value="{{$detailProduct ? $detailProduct->description:''}}" name="description" class="form-control" type="text" placeholder="Nhập mô tả">
                </div>
                <div class="form-group">
                    <button class="form-control btn btn-info">
                        Create
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
