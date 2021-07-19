@extends('layout.master-layout')
@section('Title','Products || Admin')
@section('page_name', 'Products')
@section('main_content')
    <div class="panel-body">
        <table class="table table-bordered table-striped mb-none" id="datatable-default">
            <thead>
            <tr>
                <th>Id</th>
                <th>Product name</th>
                <th>Thumbnail</th>
                <th>Price</th>
                <th>Description</th>
                <th style="width: 250px">Action</th>
            </tr>
            </thead>
            <tbody>
            @for($i= 0 ; $i<count($products) ; $i++)
                <tr class="gradeX">
                    <td>{{$products[$i]->id}}</td>
                    <td>{{$products[$i]->name}}</td>
                    <td><img style="height: 50px" src="{{$products[$i]->thumbnail}}" alt=""></td>
                    <td>{{$products[$i]->price}}</td>
                    <td>{{$products[$i]->description}}</td>
                    <td>

                        <a href="/admin/product/edit/{{$products[$i]->id}}"><button class="btn btn-danger">Edit</button></a>
                        <a onclick="return confirm('are you sure')" href="/admin/product/delete/{{$products[$i]->id}}"><button class="btn btn-danger">Delete</button></a>
                    </td>
                </tr>
            @endfor

            </tbody>
        </table>
    </div>
@endsection
