@extends('layouts.admin')
@section('title')
<title>
  Trang chủ
</title>
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
  @include('partials.content-header',['name'=>'Menu','key'=>'Edit'])

   <!-- Main content -->
   <div class="content">
     <div class="container-fluid">
       <div class="row">
         <div class="col-md-6">
             <form action="{{route('menus.update',['id' => $menuEdit->id])}}" method="POST" class="ml-5">
               @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Tên menu</label>
              <input type="text" class="form-control" name="name"
              value="{{$menuEdit->name}}" 
              placeholder="Nhap tên menu">
              </div>
              
              <div class="form-group">
                <label for="exampleFormControlSelect1">Chọn danh mục cha</label>
                <select class="form-control" name="parent_id">
                  <option value="0">Chọn đi chờ chi</option>
                    {!!$optionSelect!!}
                </select>
              </div>
            <button type="submit" class="btn btn-primary">UPDATE</button>
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



