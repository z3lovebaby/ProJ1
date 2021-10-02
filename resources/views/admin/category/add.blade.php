@extends('layouts.admin')
@section('title')
<title>
  Trang chủ
</title>
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
  @include('partials.content-header',['name'=>'Category','key'=>'Add'])

   <!-- Main content -->
   <div class="content">
     <div class="container-fluid">
       <div class="row">
         <div class="col-md-6">
             <form action="{{route('categories.store')}}" method="POST" class="ml-5">
               @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Tên danh mục</label>
              <input type="text" class="form-control" name="DMS_Tieude"
              placeholder="Nhap ten danh muc">
              </div>
              
              <div class="form-group">
                <label for="exampleFormControlSelect1">Chọn danh mục</label>
                <select class="form-control" name="DMS_parentId">
                  <option value="0">Chọn đi chờ chi</option>
                    {!!$htmlOption!!}
                </select>
              </div>

            <div class="form-group">
              <label for="exampleInputMota">Mô tả</label>
              <input type="text" class="form-control" placeholder="Nhap vao mo ta" name="DMS_Mota">
            </div>

            <div class="form-group">
              <label for="exampleInputVitri">Vị trí</label>
              <input type="text" class="form-control" placeholder="Nhap vao vi tri" name="DMS_Vitri">
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



