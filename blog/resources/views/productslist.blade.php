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
    </tr>
    @endforeach
  </tbody>
</table>
<a class="btn btn-success" href="/product/create">เพิ่มข้อมูลสินค้า</a>
<a class="btn btn-danger" href="/product/delete">ลบข้อมูลสินค้า</a>
<a class="btn btn-warning" href="/product/edit">แก้ไขข้อมูลสินค้า</a>      
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection