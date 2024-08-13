@extends('admin.layout')
@section("customCss")
<link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endsection
@section('content')

<div class="content-wrapper">

<section class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-6">
<h1>FeeHead List</h1>
</div>
<div class="col-sm-6">
<ol class="breadcrumb float-sm-right">
<li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Fee Head</a></li>
<li class="breadcrumb-item active"> Fee Head List</li>
</ol>
</div>
</div>
</div>
</section>

<section class="content">
<div class="container-fluid">
<div class="row">
<div class="col-12">


<div class="card">
    @if (Session::has('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}
    </div>
        
    @endif
<div class="card-header">
<h3 class="card-title">DataTable with default features</h3>
</div>

<div class="card-body">
<table id="example1" class="table table-bordered table-striped">
<thead>
<tr>
<th>ID</th>
<th>Name</th>
<th>Created Time</th>
<th>Edit</th>
<th>Delete</th>
</tr>
</thead>
<tbody>
@foreach($fee as $item)
<tr>
<td>{{$item->id}}</td>
<td>{{$item->name}}</td>$i
<td>{{$item->created_at}}</td>
<td><a href="" class="btn btn-primary"> Edit</a></td>
<td><a href="{{route('fee-head.edit',->$item->id)}}" onclick="returnconfirm('are you sure want to edit?')" class="btn btn-danger"> edit</a></td>
<td><a href="{{route('fee-head.delete',->$item->id)}}" onclick="returnconfirm('are you sure want to delete?')" class="btn btn-danger"> Delete</a></td>

</tr>

@endforeach

<tr>
<td>Misc</td>
<td>IE Mobile</td>
<td>Windows Mobile 6</td>
<td>-</td>
<td>C</td>
</tr>
<tr>
<td>Misc</td>
<td>PSP browser</td>
<td>PSP</td>
<td>-</td>
<td>C</td>
</tr>
<tr>
<td>Other browsers</td>
<td>All others</td>
<td>-</td>
<td>-</td>
<td>U</td>
</tr>
</tbody>
<tfoot>
<tr>
<th>Rendering engine</th>
<th>Browser</th>
<th>Platform(s)</th>
<th>Engine version</th>
<th>CSS grade</th>
</tr>
</tfoot>
</table>
</div>

</div>

</div>

</div>

</div>

</section>

</div>

@endsection
@section('customJs')



<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<script src="dist/js/adminlte.min2167.js?v=3.2.0"></script>

<script src="dist/js/demo.js"></script>

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