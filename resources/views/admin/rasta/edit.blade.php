@extends('layouts.admin')

@section('content')

<section class="content-header">
    <div class="container-fluid">
       <div class="row mb-2">
          <div class="col-sm-6">
             <h1>Rastani tahrirlash </h1>
          </div>
          <div class="col-sm-6">
             <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item "> <a href="{{ route('admin.rasta.index') }}">Rastalar</a> </li>
                <li class="breadcrumb-item active">Rastani tahrirlash</li>
             </ol>
          </div>
       </div>
    </div>
    <!-- /.container-fluid -->
</section>

    <div class="col-md-9">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Tahrirlash</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="{{route('admin.rasta.update', $item->id)}}" method="post" enctype="multipart/form-data">
            @method('patch')
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label>Sarlovha</label>
                <input type="text" class="form-control" placeholder="Sarlovha nomini yozing"  value="{{ $item->title }}" name="title" >
              </div>
              <div class="form-group">
                <label>Ta'rif</label>
                <input type="text" class="form-control" placeholder="Qisqacha ta'rifini yozing" value="{{ $item->description }}" name="description" >
              </div>
            
              <div class="form-group">
                <label for="exampleInputFile">Rasm</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="exampleInputFile" name="image" >
                    <label class="custom-file-label" for="exampleInputFile">Rasm tanlang</label>
                  </div>
                  <div class="input-group-append">
                    <span class="input-group-text">Yuklash</span>
                  </div>
                </div>
              </div>
              
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Tasdiqlash</button>
            </div>
          </form>
        </div>
        <!-- /.card -->


      </div>
@endsection
{{-- @section('js')
<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'postBody' );
</script>

@endsection --}}
{{-- bu tepadagi ckeditor uchun, widgetga aylantirib beruvchi narsa! Laravelni oxirgi versiyasini hali padderjka qilmadi 24.10.2021 Agar ishlasa
    shuni composerga yoz: composer require unisharp/laravel-ckeditor --}}

