@extends('layouts.admin')
 @section('title')
 <title>
    Newsgroup
 </title>
 @endsection
 @section('content')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partials.content-header',['name'=>'Newsgroup','key'=>'lish'])
    <!-- /.content-header -->



    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <form action="{{ route('newsgroup.store') }}" method="post">
                @csrf
              <div class="form-group">
                <label>Tên nhóm tin</label>
                <input type="text" class="form-control" name="NT_Ten"
                        placeholder="Nhập nhóm tin">
                
                <label>Mô tả</label>
                <input type="text" class="form-control" name="NT_MoTa"
                        placeholder="Nhập mô tả">
                
                <label>Vị trí</label>
                <select class="form-control" name="NT_ViTri">
                  <option value="0">Chọn vị trí cao nhất</option>
                  {!!$htmlOption!!}
                </select>
              </div>
              <button type="submit" class="btn btn-primary">SUBMIT</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
 @endsection
 
 
 
