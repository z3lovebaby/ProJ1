@extends('layouts.admin')
 @section('title')
 <title>
    NHÀ XUẤT BẢN
 </title>
 @endsection
 @section('content')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partials.content-header',['name'=>'NXB','key'=>'lish'])
    <!-- /.content-header -->



    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <form action="{{ route('nxbs.store') }}" method="post">
                @csrf
              <div class="form-group">
                <label>TÊN NHÀ XUẤT BẢN</label>
                <input type="text" class="form-control" name="NXB_Ten"
                        placeholder="Nhập tên NXB">
                
                <label>MÔ TẢ</label>
                <input type="text" class="form-control" name="NXB_Mota"
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
 
 
 
