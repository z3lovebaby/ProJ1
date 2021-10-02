@extends('layouts.admin')
@section('title')
<title>
    Trang chủ
</title>
@endsection
@section('content')

<div class="content-wrapper">

    @include('partials.content-header',['name'=>'Advert','key'=>'Edit'])

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <form method="POST" action="{{route('advert.update',['id'=>$adverts->id])}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Tên Advert</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror " name="name" placeholder="Nhập tên " value="{{$adverts->name}}">
                            @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
                        </div>

                        <div class="form-group">
                            <label for="">Mô tả</label>
                            
                            <textarea name="description" class="form-control @error('description') is-invalid @enderror  " rows="4">{{$adverts->description}}</textarea>
                            @error('description')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlFile1"> Hình ảnh</label>
                            <input type="file" class="form-control-file @error('image_path') is-invalid @enderror" name="image_path">
                            @error('image_path')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
                            <div class="col-md-12">
                                <div class="row">
                                    <img src="{{$adverts->image_path}}" alt="" >
                                    
                                </div>
                            </div>
                        </div>
                        

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>


            </div>

        </div>
    </div>

</div>

@endsection