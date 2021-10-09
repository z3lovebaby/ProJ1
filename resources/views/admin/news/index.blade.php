@extends('layouts.admin')
 @section('title')
 <title>
    News
 </title>
 @endsection

 @section('content')
  <div class="content-wrapper">
    @include('partials.content-header',['name'=>'News','key'=>'List'])

    <div class="content">
      <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
           <a href="{{route('news.create')}}" class="btn btn-success float-left m-2">Add Newsgroup</a>
           <a href="{{route('news.createnews')}}" class="btn btn-success float-left m-2">Add News</a>
         </div>
          <div class="col-md-12">
           <table class="table table-striped table-dark">
             <thead>
               <tr>
                 <th scope="col">#</th>
                 <th scope="col">Tên danh mục</th>
                 <th scope="col">Mô tả</th>
                 <th scope="col">Action</th>
               </tr>
             </thead>
             <tbody>
               @foreach($nhomtins as $nhomtin)
                <tr>
                  <th scope="row">{{ $nhomtin->id }}</th>
                  <td>{{ $nhomtin->NT_Ten }}</td>
                  <td>{{ $nhomtin->NT_MoTa }}</td>
                  <td>
                    <a href="{{ route('news.edit', ['id' => $nhomtin->id]) }}" class="btn btn-default">Edit</a>
                    <a href="{{ route('news.delete', ['id' => $nhomtin->id]) }}" class="btn btn-danger">Delete</a>
                  </td>
                </tr>
               @endforeach
             </tbody>
            </table>
            <div class="col-md-12">
              {{$nhomtins->links('pagination::bootstrap-4')}}
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
 @endsection
 
 
 
