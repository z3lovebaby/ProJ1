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
    @include('partials.content-header',['name'=>'News','key'=>'Edit'])
    <!-- /.content-header -->



    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <form action="{{ route('news.updatenews', ['id' => $tintuc->id]) }}" method="post">
                @csrf
              <div class="form-group">
                <label>Tiêu đề</label>
                <input type="text" class="form-control" name="TT_TieuDe"
                        value="{{ $tintuc->TT_TieuDe }}"
                        placeholder="Nhập tiêu đề">
                
                <label>Tác giả</label>
                <input type="text" class="form-control" name="TT_TacGia"
                        value="{{ $tintuc->TT_TacGia }}"
                        placeholder="Nhập tác giả">
                
                <label>Ngày</label>
                <input type="datetime-local" class="form-control" name="TT_Ngay"
                        value="{{ $tintuc->TT_Ngay }}"
                        placeholder="Nhập ngày">

                <label>Mô Tả</label>
                <input type="text" class="form-control" name="TT_MoTa"
                        value="{{ $tintuc->TT_MoTa }}"
                        placeholder="Nhập mô tả">
                
                <label>Nội dung</label>
                <input type="text" class="form-control" name="TT_NoiDung"
                        value="{{ $tintuc->TT_NoiDung }}"
                        placeholder="Nhập nội dung">

                <label>Ảnh</label>
                <input type="file" class="form-control" name="TT_Anh"
                        value="{{ $tintuc->TT_Anh }}"
                        placeholder="Chọn ảnh">
                
                <label>Hiển thị</label>
                <input type="number" class="form-control" name="TT_HienThi"
                        value="{{ $tintuc->TT_HienThi }}"
                        placeholder="Hiển thị">
                
                <label>Nhóm tin</label>
                <select class="form-control" name="TT_NhomTin">
                  <option value="0">Chọn nhóm tin</option>
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
 
 
 
