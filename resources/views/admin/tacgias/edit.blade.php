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
    @include('partials.content-header',['name'=>'Tác giả','key'=>'Edit'])
    <!-- /.content-header -->



    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <form action="{{ route('tacgias.update', ['id' => $tacgia->id]) }}" method="post">
                @csrf
              <div class="form-group">
                <label>Tên tác giả</label>
                <input type="text" class="form-control" name="TG_HoTen"
                        value="{{ $tacgia->TG_HoTen }}"
                        placeholder="Nhập tên tác giả">
                
                <label>Mô tả</label>
                <input type="text" class="form-control" name="TG_Mota"
                        value="{{ $tacgia->TG_Mota }}"
                        placeholder="Nhập mô tả">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
 @endsection
 
 
 
