@extends('layouts.admin')
 @section('title')
 <title>
    Nhà xuất bản
 </title>
 @endsection

 @section('content')
  <div class="content-wrapper">
    @include('partials.content-header',['name'=>'NXB','key'=>'List'])

    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <a href="{{route('nxbs.create')}}" class="btn btn-success float-left m-2">Add NXB</a>
          </div>
          
          <div class="col-md-12">
            <table class="table table-striped table-dark">
             <thead>
               <tr>
                 <th scope="col">#</th>
                 <th scope="col">Tên NXB</th>
                 <th scope="col">Mô tả</th>
                 <th scope="col">Action</th>
               </tr>
             </thead>
             <tbody>
               @foreach($nxbs as $nxb)
                <tr>
                  <th scope="row">{{ $nxb->id }}</th>
                  <td>{{ $nxb->NXB_Ten }}</td>
                  <td>{{ $nxb->NXB_Mota }}</td>
                  <td>
                    <a href="{{ route('nxbs.edit', ['id' => $nxb->id]) }}" class="btn btn-default">EDIT</a>
                    <a href=""data-url="{{ route('nxbs.delete', ['id' => $nxb->id]) }}" class="btn btn-danger action_delete">DELETE</a>
                  </td>
                </tr>
               @endforeach
             </tbody>
            </table>
            <div class="col-md-12">
              {{$nxbs->links('pagination::bootstrap-4')}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 @endsection
 @section('js')
    <script src="{{asset('vendors/SweetAlert2/sweetalert2@11.js')}}"></script>
    <script src="{{asset('admins/sach/add/delete.js')}}"></script>
@endsection
 
 
