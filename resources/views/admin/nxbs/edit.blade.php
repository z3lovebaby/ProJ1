@extends('layouts.admin')
 @section('title')
 <title>
    Nhà xuất bản
 </title>
 @endsection
 @section('content')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partials.content-header',['name'=>'NXB','key'=>'Edit'])
    <!-- /.content-header -->



    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <form action="{{ route('nxbs.update', ['id' => $nxb->id]) }}" method="post">
                @csrf
              <div class="form-group">
                <label>Tên NXB</label>
                <input type="text" class="form-control" name="NXB_Ten"
                        value="{{ $nxb->NXB_Ten }}"
                        placeholder="Nhập tên NXB">
                
                <label>Mô tả</label>
                <input type="text" class="form-control" name="NXB_Mota"
                        value="{{ $nxb->NXB_Mota }}"
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
 
 
 
