@extends('layouts.app')
@section('content')
    
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">ข้อมูลสินค้า</div>

                <div class="card-body">
 <form method="POST" action="{{action('ProductsController@update', $id)}}">
 @csrf
 <div class="mb-3">
    <label class="form-label">ชื่อ</label>
    <input type="text" class="form-control" name="name" id="name" value = "{{$products->name}}">
  </div>
  <div class="mb-3">
    <label class="form-label">รายละเอียด</label>
    <input type="text" class="form-control" name="detail" id="detail" value = "{{$products->detail}}">
  </div>
  <div class="mb-3">
    <label class="form-label">ราคา</label>
    <input type="text" class="form-control" name="price" id="price" value = "{{$products->price}}">
  </div>
  <div class="mb-3">
    <label class="form-label">จำนวน</label>
    <input type="text" class="form-control" name="unit" id="unit" value = "{{$products->unit}}">
  </div>
  <button type="submit" class="btn btn-warning">แก้ไขข้อมูล</button>
  <input type = "hidden" name = "_method" value = "PATCH" />
 </form>                
                </div>
                <a class = "mx-2" href="/productslist">กลับหน้าแรก</a>    
            </div>
        </div>
    </div>
</div>
@endsection