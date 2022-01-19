@extends('layouts.admin')

@section('content')

<section class="content-header">
    <div class="container-fluid">
       <div class="row mb-2">
          <div class="col-sm-6">
             <h1>Mahsulot qo'shish </h1>
          </div>
          <div class="col-sm-6">
             <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item "> <a href="{{ route('admin.product.index') }}">Mahsulotlarimiz</a> </li>
                <li class="breadcrumb-item active">Mahsulot qo'shish</li>
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
            <h3 class="card-title">Yangi qo'shish</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="{{route('admin.product.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label>Nomi</label>
                <input type="text" class="form-control" placeholder="Nomini yozing" name="name" required>
              </div>
              <div class="form-group">
                <label>Ta'rif</label>
                <input type="text" class="form-control" placeholder="Qisqacha ta'rifini yozing" name="description" required>
              </div>
              <div class="form-group">
                <label>Narxi</label>
                <input type="text" class="form-control" placeholder="Narxini kiriting" name="price" required>
              </div>
              <div class="form-group">
                <label for="">Rastasini tanlang</label>
                <select name="rasta_id" class="form-control" id="">
                   @foreach ($rasta as $item )

                    <option value="{{$item->id}}">{{$item->title}}</option>
                   @endforeach
                </select>
             </div>
              <div class="form-group">
                <label for="">Status</label>
                <select name="status" class="form-control" id="">
                    <option value="1">Faol</option>
                    <option value="0">Faol emas</option>
                </select>
              </div>
              <div class="form-group">
                <label for="">Muhimligi</label>
                <select name="muhim" class="form-control" id="">
                    <option value="1">Faol</option>
                    <option value="0">Faol emas</option>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleInputFile">Rasm</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="exampleInputFile" name="image" required>
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
