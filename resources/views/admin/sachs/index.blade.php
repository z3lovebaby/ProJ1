@extends('layouts.admin')
@section('title')
<title>
  Sách
</title>
@endsection
@section('css')
<style> .S_Anh {
    width: 150px;
    height: 100px;
}
</style>
@endsection



 
@section('content')
<!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
    @include('partials.content-header',['name'=>'Sach','key'=>'List'])
   <!-- /.content-header -->

   <!-- Main content -->
   <div class="content">
     <div class="container-fluid">
       <div class="row">
         <div class="col-md-12">
           <a href="{{route('sachs.create')}}" class="btn btn-success float-right m-2">Add</a>
         </div>
         <div class="col-md-12">
           <table class="table table-striped table-dark">
             <thead>
               <tr>
                 <th scope="col">#</th>
                 <th scope="col">Tên sách</th>
                 <th scope="col">Giá</th>
                 <th scope="col">Ảnh</th>
                 <th scope="col">Danh mục sách</th>
                 <th scope="col">Số lượng</th>
                 <th scope="col">Chi tiết</th>
                 <th scope="col">Action</th>
               </tr>
             </thead>
             <tbody>
              @foreach ($saches as $item)
               <tr>
                 <th scope="row">{{$item->id}}</th>
                 <td>{{$item->S_Ten}}</td>
                 <td>{{number_format($item->S_GiaBan)}}</td>
                 <td><img class="S_Anh  "src="{{$item->S_ViTri}}"></td>
                 <td>{{optional($item->Danhmucsachs)->DMS_Tieude}}</td>
                 <td>{{$item->S_SoLuong}}</td>
                 <td>{{$item->S_Chitiet}}</td>
                 <td>
                   <a href="{{route('sachs.edit',['id'=>$item->id])}}" class="btn btn-default">EDIT</a>
                   <a href="" data-url="{{route('sachs.delete',['id'=>$item->id])}}"
                   class="btn btn-danger action_delete">DELETE</a>
                 </td>
               </tr>
               @endforeach
             </tbody>
           </table>
         </div>
        
          <div class="col-md-12">
            {{$saches->links('pagination::bootstrap-4')}}
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
    <script src="{{asset('admins/sach/add/delete.js')}}"></script>
@endsection


