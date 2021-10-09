@extends('layouts.admin')
 @section('title')
 <title>
    News
 </title>
 @endsection
 @section('content')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partials.content-header',['name'=>'News','key'=>'List'])
    <!-- /.content-header -->



    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
           <a href="{{route('news.create')}}" class="btn btn-success float-left m-2">Add Newsgroup</a>
           <a href="{{route('news.create')}}" class="btn btn-success float-left m-2">Add News</a>
         </div>
          <div class="col-md-12">
            News
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
              
             </tbody>
           </table>
         </div>
        </div>
      </div>
    </div>
  </div>
 @endsection
 
 
 
