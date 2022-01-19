@extends('layouts.admin')

@section('content')

<section class="content-header">
    <div class="container-fluid">
       <div class="row mb-2">
          <div class="col-sm-6">
             <h1>Ma'lumotlarni ko'rish</h1>
          </div>
          <div class="col-sm-6">
             <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item "> <a href="{{ route('admin.announ.index') }}">E'lonlar</a> </li>
                <li class="breadcrumb-item active">Barcha ma'lumotlarni ko'rish</li>
             </ol>
          </div>
       </div>
    </div>
    <!-- /.container-fluid -->
</section>
<div class="col-md-12 mt-3">
    <!-- Default box -->
    <div class="card">
        <div class="card-body row">
            <div class="col-12">
                <div class="form-group">
                    <label for="inputName">Sarlovha</label>
                    <p class="form-text">{{ $item->title }}</p>
                </div>
                <hr>
                <div class="form-group">
                    <label for="inputEmail">Ta'rif</label>
                    <p class="form-text">{{ $item->description }}</p>
                </div>
                <hr>
                <div class="form-group">
                    <label for="inputEmail">Batafsil</label>
                    <p class="form-text">{{ $item->body }}</p>
                </div>
                <hr>
                <div class="form-group">
                    <label for="inputSubject">Rasm</label>
                    <img src="/admin/images/announ/{{$item->image}}" class="form-text" width="400px">
                </div>
                <hr>
                <div class="form-group">
                    <label for="inputName">Yaratilgan vaqti</label>
                    <p class="form-text">{{ $item->created_at }}</p>
                </div>
                <hr>

                <div class="form-group">
                    <a href="{{ route('admin.announ.index') }}" class="btn btn-primary">Orqaga qaytish</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

