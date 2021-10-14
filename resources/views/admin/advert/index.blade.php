@extends('layouts.admin')
@section('title')
<title>
  Advertisement
</title>
@endsection
@section('css')
<style>
  .img_advert {
    width: 150px;
    height: 100px;
}
</style>
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
   <!-- Content Header (Page header) -->@include('partials.content-header',['name'=>'Advertisement','key'=>'List'])
    
   <!-- /.content-header -->

   <!-- Main content -->
   <div class="content">
     <div class="container-fluid">
       <div class="row">
         <div class="col-md-12">
           <a href="{{route('advert.create')}}" class="btn btn-success float-right m-2">Add</a>
         </div>
         <div class="col-md-12">
           <table class="table table-striped table-dark">
             <thead>
               <tr>
                                <th scope="col">#</th>
                                <th scope="col">Advertisement</th>
                                <th scope="col">Description</th>
                                <th scope="col">Hình ảnh</th>

                                <th scope="col">Option</th>
               </tr>
             </thead>
             <tbody>
              
             @foreach($adverts as $a)
              <tr>
                                <th scope="row">{{$a->id}}</th>
                                <td>{{$a->name}}</td>
                                <td>{{$a->description}}</td>
                                <td>
                                    <img class="img_advert "src="{{$a->image_path}}">
                                </td>

                                <td>
                                    <a href="{{route('advert.edit',['id'=>$a->id])}}" class="btn btn-default">Sửa</a>
                                    <a href=""data-url="{{ route('advert.delete',['id'=>$a->id])}}" class="btn btn-danger action_delete">xóa</a>
                                </td>
              </tr>

              @endforeach
              

             </tbody>
           </table>
           {{ $adverts->links('pagination::bootstrap-4') }}
         </div>
        
          <div class="col-md-12">
           
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
<script src="{{asset('vendors/SweetAlert2/sweetalert2@11.js')}}"></script>
<script src="{{asset('admins/sach/add/delete.js')}}"></script>
@endsection



