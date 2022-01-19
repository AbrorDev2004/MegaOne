@extends('layouts.admin')

@section('content')

<section class="content-header">
    <div class="container-fluid">
       <div class="row mb-2">
          <div class="col-sm-6">
             <h1>Ma'lumotni to'liq ko'rish</h1>
          </div>
          <div class="col-sm-6">
             <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item "> <a href="{{ route('admin.product.index') }}">Mahsulot</a> </li>
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
                    <label for="inputName">Mahsulot nomi</label>
                    <p class="form-text">{{ $item->name }}</p>
                </div>
                <hr>
                <div class="form-group">
                    <label for="inputEmail">Ta'rif</label>
                    <p class="form-text">{{ $item->description }}</p>
                </div>
                <hr>
                <div class="form-group">
                    <label for="inputEmail">Narx</label>
                    <p class="form-text">{{ $item->price }}</p>
                </div>
                <hr>
                <div class="form-group">
                    <label for="inputEmail">Faol holati</label>
                    <p class="form-text">{{ $item->status==1 ? 'Faol' : 'Faol emas' }}</p>
                </div>
                <hr>
                <div class="form-group">
                    <label for="inputSubject">Rasm</label>
                    <img src="/admin/images/product/{{$item->image}}" class="form-text" width="400px">
                </div>
                <hr>
                <div class="form-group">
                    <label for="inputName">Yaratilgan vaqti</label>
                    <p class="form-text">{{ $item->created_at }}</p>
                </div>
                <hr>

                <div class="form-group">
                    <a href="{{ route('admin.product.index') }}" class="btn btn-primary">Orqaga qaytish</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

