@extends('layouts.admin')

@section('css')
    <!-- DataTables -->
  <link rel="stylesheet" href="/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

@endsection

@section('content')
<section class="content-header">
    <div class="container-fluid">
       <div class="row mb-2">
          <div class="col-sm-6">
             <h1>Hamma Mahsulotlar </h1>
          </div>
          <div class="col-sm-6">
             <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Mahsulotlar</li>
             </ol>
          </div>
       </div>
    </div>
    <!-- /.container-fluid -->
</section>
<div class="col-12">
    <div class="card">
        <div class="card-body">
            @if (Session::has('success'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                    <h5><i class="icon fas fa-check"></i></h5>
                    {{session('success')}}
                </div>
            @endif
            @if (Session::has('warning'))
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                    {{session('warning')}}
                </div>
            @endif
           <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
              <div class="row">
                 <div class="col-sm-12 col-md-12">
                    <table id="example2" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
                       <thead>
                          <tr role="row">
                             <th width="4%" class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column ascending">№</th>
                             <th width="18%" class="sorting sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column descending" aria-sort="ascending">Nomi</th>
                             <th width="30%" class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Ta'rif</th>
                             <th width="30%" class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Rasta nomi</th>
                             <th width="20%" class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Rasm</th>

                             <th width="10%"> Amallar </th>
                          </tr>
                       </thead>
                       <tbody>

                           @foreach ($items as $item)
                          <tr class="odd">
                             <th class="dtr-control" tabindex="0">{{$loop->iteration}}</th>
                             <td class="sorting_1">{{$item->name}}</td>
                             <td class="sorting_1">{{$item->description}}</td>
                             <td class="sorting_1">{{$item->Rasta->title}}</td>

                             <td class=""><img src="/admin/images/product/{{$item->image}}" width="100%" alt="" srcset=""></td>
                             <td class="project-actions text-center dtr-control" >
                                <a class="btn btn-primary btn-sm col-md-10" href="{{route('admin.product.show', $item->id)}}" style="margin-bottom: 10px">
                                    <i class="fas fa-folder" >
                                    </i>
                                    Barchasi
                                </a> <br>
                                <a class="btn btn-info btn-sm col-md-10" href="{{route('admin.product.edit', $item->id)}}" style="margin-bottom: 10px">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Tahrirlash
                                </a><br>
                                <form action="{{route('admin.product.destroy', $item->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm col-md-10 ">
                                        <i class="fas fa-trash"></i>
                                        O'chirish
                                    </button>
                                </form>
                            </td>
                          </tr>
                          @endforeach
                       </tbody>
                    </table>
                 </div>
              </div>
           </div>
        </div>
        <!-- /.card-body -->
     </div>
</div>
@endsection

@section('scripts')

    <!-- DataTables  & Plugins -->
    <script src="/admin/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="/admin/plugins/jszip/jszip.min.js"></script>
    <script src="/admin/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="/admin/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="/admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="/admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="/admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

    <script>
        $(function () {
          $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
          }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
          $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
          });
        });
      </script>
@endsection
