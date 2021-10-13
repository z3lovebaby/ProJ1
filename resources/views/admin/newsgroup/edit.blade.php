@extends('layouts.admin')
 @section('title')
 <title>
    News
 </title>
 @endsection
 @section('content')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partials.content-header',['name'=>'Newsgroup','key'=>'Edit'])
    <!-- /.content-header -->



    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <form action="{{ route('news.update', ['id' => $nhomtin->id]) }}" method="post">
                @csrf
              <div class="form-group">
                <label>Tên nhóm tin</label>
                <input type="text" class="form-control" name="NT_Ten"
                        value="{{ $nhomtin->NT_Ten }}"
                        placeholder="Nhập nhóm tin">
                
                <label>Mô tả</label>
                <input type="text" class="form-control" name="NT_MoTa"
                        value="{{ $nhomtin->NT_MoTa }}"
                        placeholder="Nhập mô tả">
                
                <label>Vị trí</label>
                <select class="form-control" name="NT_ViTri">
                  <option value="0">Chọn vị trí</option>
                  {!!$htmlOption!!}
                </select>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
 @endsection
 
 
 
