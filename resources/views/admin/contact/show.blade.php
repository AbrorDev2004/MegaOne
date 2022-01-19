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
                <li class="breadcrumb-item "> <a href="{{ route('admin.contact.index') }}">Aloqa bo'limi</a> </li>
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
                    <label for="inputName">Ism</label>
                    <p class="form-text">{{ $item->name }}</p>
                </div>
                <hr>
                <div class="form-group">
                    <label for="inputEmail">Email</label>
                    <p class="form-text">{{ $item->email }}</p>
                </div>
                <hr>
                <div class="form-group">
                    <label for="inputEmail">Raqami</label>
                    <p class="form-text">{{ $item->phone }}</p>
                </div>
                <hr>
                <div class="form-group">
                    <label for="inputEmail">Xabari</label>
                    <p class="form-text">{{ $item->message }}</p>
                </div>
                <hr>

                <div class="form-group">
                    <label for="inputName">Yaratilgan vaqti</label>
                    <p class="form-text">{{ $item->created_at }}</p>
                </div>
                <hr>

                <div class="form-group">
                    <a href="{{ route('admin.contact.index') }}" class="btn btn-primary">Orqaga qaytish</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

