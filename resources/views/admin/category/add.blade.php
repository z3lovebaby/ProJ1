@extends('layouts.admin')
@section('title')
<title>
  Trang chủ
</title>
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
  @include('partials.content-header',['name'=>'DANH MỤC SẢN PHẨM','key'=>'ADD'])

   <!-- Main content -->
   <div class="content">
     <div class="container-fluid">
       <div class="row">
         <div class="col-md-6">
             <form action="{{route('categories.store')}}" method="POST" class="ml-5">
               @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">TÊN DANH MỤC</label>
              <input type="text" class="form-control" name="DMS_Tieude"
              placeholder="Nhap ten danh muc">
              </div>
              
              <div class="form-group">
                <label for="exampleFormControlSelect1">CHỌN DANH MỤC</label>
                <select class="form-control" name="DMS_parentId">
                  <option value="0">CHỌN NGAY ĐI</option>
                    {!!$htmlOption!!}
                </select>
              </div>

            <div class="form-group">
              <label for="exampleInputMota">MÔ TẢ</label>
              <input type="text" class="form-control" placeholder="Nhap vao mo ta" name="DMS_Mota">
            </div>

            <div class="form-group">
              <label for="exampleInputVitri">VỊ TRÍ</label>
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



