@extends('layouts.admin')
@section('title')
<title>
    Trang chủ
</title>
@endsection
@section('content')

<div class="content-wrapper">

    
    @include('partials.content-header',['name'=>'Advert','key'=>'Add'])

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <form method="POST" action="{{route('advert.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Tên advert</label>
                            <input type="text" class="form-control" name="name" placeholder="Nhập tên " value="">
                            
    
                        </div>

                        <div class="form-group">
                            <label for="">Mô tả</label>
                            
                            <textarea name="description" class="form-control " rows="4"></textarea>
                           
                        </div>

                        <div class="form-group">
                            <label for="">Hình ảnh</label>
                            <input type="file" class="form-control-file " name="image_path">
                            
                        </div>
                        

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>


            </div>

        </div>
    </div>

</div>


@endsection