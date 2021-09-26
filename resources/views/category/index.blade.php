@extends('layouts.admin')
@section('title')
<title>
  Danh mục sản phẩm
</title>
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
    @include('partials.content-header',['name'=>'Category','key'=>'List'])
   <!-- /.content-header -->

   <!-- Main content -->
   <div class="content">
     <div class="container-fluid">
       <div class="row">
         <div class="col-md-12">
           <a href="{{route('categories.create')}}" class="btn btn-success float-right m-2">Q.add</a>
         </div>
         <div class="col-md-12">
           <table class="table table-striped table-dark">
             <thead>
               <tr>
                 <th scope="col">#</th>
                 <th scope="col">Tên danh mục</th>
                 <th scope="col">Action</th>
               </tr>
             </thead>
             <tbody>
              @foreach ($categories as $danhmucsach)
               <tr>
                 <th scope="row">{{$danhmucsach->id}}</th>
                 <td>{{$danhmucsach->DMS_Tieude}}</td>
                 <td>
                   <a href="{{route('categories.edit',['id'=>$danhmucsach->id])}}" class="btn btn-default">Edit</a>
                   <a href="{{route('categories.delete',['id'=>$danhmucsach->id])}}" class="btn btn-danger">Delete</a>
                 </td>
               </tr>
               @endforeach
             </tbody>
           </table>
         </div>
        
          <div class="col-md-12">
            {{$categories->links('pagination::bootstrap-4')}}
          </div>

       </div>
       <!-- /.row -->
     </div><!-- /.container-fluid -->
   </div>
   <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->
@endsection



