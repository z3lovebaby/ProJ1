@extends('layouts.admin')
 @section('title')
 <title>
    Tác giả
 </title>
 @endsection
 @section('content')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partials.content-header',['name'=>'Tác giả','key'=>'lish'])
    <!-- /.content-header -->



    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <form action="{{ route('tacgias.store') }}" method="post">
                @csrf
              <div class="form-group">
                <label>Tên tác giả</label>
                <input type="text" class="form-control" name="TG_HoTen"
                        placeholder="Nhập tên tác giả">
                
                <label>Mô tả</label>
                <input type="text" class="form-control" name="TG_Mota"
                        placeholder="Nhập mô tả">
              </div>
              <button type="submit" class="btn btn-primary">SUBMIT</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
 @endsection
 
 
 
