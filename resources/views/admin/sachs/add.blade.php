@extends('layouts.admin')
@section('title')
<title>
  Them sach
</title>
@endsection
@section('css')

    <link href="{{asset('vendors/select2/select2.min.css')}}" rel="stylesheet" />

@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
  @include('partials.content-header',['name'=>'Sach','key'=>'Add'])

   <!-- Main content -->
   <div class="content">
     <div class="container-fluid">
       <div class="row">
         <div class="col-md-6">
             <form action="" method="POST" enctype="multipart/form-data" class="ml-5">
               @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Tên sách</label>
              <input type="text" class="form-control" name="S_Ten"
              placeholder="Nhap ten sách">
              </div>
              
              <div class="form-group">
                <label for="exampleInputEmail1">Giá</label>
                <input type="number" class="form-control" name="S_GiaBan"
                placeholder="Nhap giá của sách">
                </div>

                <div class="flex flex-col mb-4">
                    <label class="mb-2 font-bold text-lg text-gray-900" for="File">File</label>
                    <input class="border py-2 px-3 text-grey-800" type="file" name="S_Anh" id="file">
                </div>


              <div class="form-group">
                <label >Chọn danh mục</label>
                <select class="form-control" name="DMS_parentId">
                  <option value="0">Chọn đi chờ chi</option>
                    {!!$htmlOption!!}
                </select>
              </div>
              <div class="form-group">
                <label for="exampleFormControlSelect1">The Tag</label>
                <select class="form-control tags_select2" multiple="multiple">
                
              </select>
              </div>
              
            <div class="form-group">
              <label for="exampleInputMota">Số lượng</label>
              <input type="number" class="form-control" placeholder="Nhap vao số lượng" name="S_SoLuong">
            </div>

            <div class="form-group">
              <label for="exampleInputVitri">Chi tiết</label>
              <input type="text" class="form-control" placeholder="Nhap vao mô tả" name="S_Chitiet">
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
    <script src="{{asset('admins/sach/add/add.css')}}"></script>
    <script>
        $(function () {
            $(".tags_select2").select2({
    tags: true,
    tokenSeparators: [',', ' ']
})
        })
    </script>

@endsection


