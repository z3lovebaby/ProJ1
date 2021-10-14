@extends('layouts.admin')
 @section('title')
 <title>
    News
 </title>
 @endsection
 @section('content')
  <div class="content-wrapper">
    @include('partials.content-header',['name'=>'News','key'=>'lish'])


    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <form action="{{ route('news.store') }}" method="post" enctype="multipart/form-data">
                @csrf
              <div class="form-group">
                <label>Tiêu đề</label>
                <input type="text" class="form-control" name="TT_TieuDe"
                        placeholder="Nhập tiêu đề">

                <label>Tác giả</label>
                <input type="text" class="form-control" name="TT_TacGia"
                        placeholder="Nhập tên tác giả">

                <label>Ngày</label>
                <input type="datetime-local" class="form-control" name="TT_Ngay"
                        placeholder="Nhập ngày">
                
                <label>Mô tả</label>
                <input type="text" class="form-control" name="TT_MoTa"
                        placeholder="Nhập mô tả">

                <label>Nội dung</label>
                <input type="text" class="form-control" name="TT_NoiDung"
                        placeholder="Nhập nội dung">
                
                <label>Ảnh</label>
                <input type="file" class="form-control" name="TT_Anh">
                
                <label>Hiển thị</label>
                <input type="number" class="form-control" name="TT_HienThi"
                        placeholder="Nhập hiển thị">

                <label>Nhóm tin</label>
                <select class="form-control" name="TT_NhomTin">
                  <option value="0">Chọn nhóm tin</option>
                  {!!$htmOption!!}
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
 
 
 
