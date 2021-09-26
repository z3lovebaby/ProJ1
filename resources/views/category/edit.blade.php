@extends('layouts.admin')
@section('title')
<title>
  Trang chủ
</title>
@endsection
@section('content')

 <div class="content-wrapper">
  @include('partials.content-header',['name'=>'Category','key'=>'Edit'])


   <div class="content">
     <div class="container-fluid">
       <div class="row">
         <div class="col-md-6">
             <form action="{{route('categories.update',['id' => $category->id])}}" method="POST" class="ml-5">
               @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Tên danh mục</label>
              <input type="text" 
              class="form-control" 
              name="DMS_Tieude" 
              value="{{$category->DMS_Tieude}}" 
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
              <input type="text" class="form-control" placeholder="Nhap vao mo ta" name="DMS_Mota" value="{{$category->DMS_Mota}}"> 
            </div>

            <div class="form-group">
              <label for="exampleInputVitri">Vị trí</label>
              <input type="text" class="form-control" placeholder="Nhap vao vi tri" name="DMS_Vitri" value="{{$category->DMS_Vitri}}">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
          </form>
         </div>
        

       </div>
           </div>
   </div>
  
 </div>

@endsection



