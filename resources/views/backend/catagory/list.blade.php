@extends('backend.master')

@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">DataTable with default features</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>SI</th>
          <th>Image</th>
          <th>Catagory Name</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($catagories as $catagory)
        <tr>
            <td>{{$loop->index+1}}</td>
            <td>
              <img src="{{asset('backend/images/catagory/'.$catagory->image)}}" alt="" height="100" width="100">
            </td>
            <td>{{$catagory->name}}</td>
            <td>
              <a href="{{url('/admin/edit-catagory/'.$catagory->id)}}" class="btn btn-primary">Edit</a>
              <a href="{{url('/admin/delete-catagory/'.$catagory->id)}}" class="btn btn-danger">Delete</a>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
@endsection
@push('js')
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
@endpush