@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">ข้อมูลนักศึกษา</div>

                <div class="card-body">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Lastname</th>
      <th scope="col">Email</th>
      <th scope="col">delete</th>
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
      <td>
        <form method="POST" action="{{action('ProductsController@destroy',$row->id)}}">
        @csrf
        <input type = "hidden" name = "_method" value = "DELETE" /> 
        <button type="submit" class="btn btn-danger">ลบข้อมูล</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<a href="/productslist" >กลับหน้าแรก</a>            
                </div>
            </div>
        </div>
    </div>
</div>

@endsection