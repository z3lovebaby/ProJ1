@extends('layouts.admin')
 @section('title')
 <title>
    News
 </title>
 @endsection
 @section('content')
  <div class="content-wrapper">
    @include('partials.content-header',['name'=>'NEWS','key'=>'LIST'])


    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <form action="{{ route('news.storenews') }}" method="post">
                @csrf
              <div class="form-group">
                <label>TIÊU ĐỀ</label>
                <input type="text" class="form-control" name="TT_TieuDe"
                        placeholder="Nhập tiêu đề">

                <label>TÁC GIẢ</label>
                <input type="text" class="form-control" name="TT_TacGia"
                        placeholder="Nhập tên tác giả">

                <label>NGÀY</label>
                <input type="date" class="form-control" name="TT_Ngay"
                        placeholder="Nhập ngày">
                
                <label>MÔ TẢ</label>
                <input type="text" class="form-control" name="TT_MoTa"
                        placeholder="Nhập mô tả">

                <label>NỘI DUNG</label>
                <input type="text" class="form-control" name="TT_NoiDung"
                        placeholder="Nhập nội dung">
                
                <label>ẢNH</label>
                <input type="file" class="form-control" name="TT_Anh"
                        placeholder="Nhập ảnh">
                
                <label>HIỂN THỊ</label>
                <input type="number" class="form-control" name="TT_HienThi"
                        placeholder="Nhập hiển thị">

                <label>NHÓM TIN</label>
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
 
 
 
