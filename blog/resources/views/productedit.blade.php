@extends('layouts.app')
@section('content')
    
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">ข้อมูลสินค้า</div>

                <div class="card-body">
<table class="table">
  <thead>
    <tr>
    <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">detail</th>
      <th scope="col">price</th>
      <th scope="col">unit</th>
      <th scope="col">edit</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    @foreach($products as $row)
    <tr>
    <th scope="row">{{$row->id}}</th>
      <td>{{$row->name}}</td>
      <td>{{$row->detail}}</td>
      <td>{{$row->price}}</td>
      <td>{{$row->unit}}</td>
      <td><a href="{{action('ProductsController@edit',$row->id)}}" class="btn btn-warning">แก้ไขข้อมูล</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
<a href="/productslist">กลับหน้าแรก</a>            
                </div>
            </div>
        </div>
    </div>
</div>

@endsection