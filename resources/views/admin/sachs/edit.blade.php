@extends('layouts.admin')
@section('title')
<title>
  Them sach
</title>
@endsection
@section('css')
    <link href="{{asset('vendors/select2/select2.min.css')}}" rel="stylesheet" />
    <script src="{{asset('admins/sach/add/add.css')}}"></script>

@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
  @include('partials.content-header',['name'=>'SÁCH','key'=>'SỬA'])

   <!-- Main content -->
   <div class="content">
     <div class="container-fluid">
       <div class="row">
         <div class="col-md-6">
             <form action="{{route('sachs.update',['id' => $sachEdit->id])}}" method="POST" enctype="multipart/form-data" class="ml-5">
               @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">TÊN SÁCH</label>
              <input type="text" class="form-control" name="S_Ten"
              value="{{$sachEdit->S_Ten}}" placeholder="Nhap ten sách">
              </div>
              
              <div class="form-group">
                <label for="exampleInputEmail1">GIÁ</label>
                <input type="number" class="form-control" name="S_GiaBan"
                value="{{$sachEdit->S_GiaBan}}" placeholder="Nhap giá của sách">
                </div>

                <div class="flex flex-col mb-4">
                    <label class="mb-2 font-bold text-lg text-gray-900" for="File">FILE</label>
                    <input class="border py-2 px-3 text-grey-800" type="file" name="S_Anh"  id="file">
                </div>

                {{-- <div class="flex flex-col w-2 h-2">
                   <img class="anh w-0.5 h-2" src="{{$sachEdit->S_ViTri}}" alt="">
                </div> --}}


              <div class="form-group">
                <label >CHỌN DANH MỤC</label>
                <select class="form-control" name="S_DanhmucId">
                  <option value="">CHỌN ĐI CHỜ CHI</option>
                    {!!$htmlOption!!}
                </select>
              </div>
              <div class="form-group">
                <label for="exampleFormControlSelect1">TAG</label>
                <select class="form-control tags_select2" multiple="multiple" name="S_TuKhoa">
                    value="{{$sachEdit->S_TuKhoa}}
                <option value="" selected></option>
              </select>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">NXB</label>
                <input type="text" class="form-control" name="S_NXBId"
                placeholder="Nhap ten sách">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">TÁC GIẢ</label>
                  <input type="text" class="form-control" name="S_TacGiaId"
                  placeholder="Nhap ten sách">
                  </div>
            <div class="form-group">
              <label for="exampleInputMota">SỐ LƯỢNG</label>
              <input type="number" class="form-control" placeholder="Nhap vao số lượng" name="S_SoLuong">
            </div>

            <div class="form-group">
              <label>CHI TIẾT</label>
              <textarea name="S_Chitiet" class="form-control my-editor"  rows="3"> {{$sachEdit->S_Chitiet}}"</textarea>
            </div>
            <button type="submit" class="btn btn-primary">SUBMIT</button>
          </form>
         </div>
        

       </div>
       <!-- /.row -->
     </div><!-- /.container-fluid -->
   </div>
   
   <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->
@endsection
@section('js')

    
    <script src="{{asset('vendors/select2/select2.min.js')}}"></script>
    <script src="/path-to-your-tinymce/tinymce.min.js"></script>
    <script src="{{asset('admins/sach/add/add.js')}}"></script>
    <script src="{{asset('vendors/SweetAlert2/sweetalert2@11.js')}}"></script>
<script src="{{asset('admins/delete/delete.js')}}"></script>
@endsection


