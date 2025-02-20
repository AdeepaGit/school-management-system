@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
   @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
   @endif
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Student List</h1>
          </div>
          <div class="col-sm-6" style="text-align:right">
            <a href="{{url('admin/admin/addStudent')}}" class="btn btn-primary">Add New Student</a>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Student List</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Created at</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($getRecord as $value)
                      <tr>
                        <td>{{ $value->id}}</td>
                        <td>{{ $value->name}}</td>
                        <td>{{ $value->email}}</td>
                        <td>{{ $value->created_at}}</td>
                        <td>
                          <a href="{{ url('admin/admin/editStudent/' .$value->id) }}" class="btn btn-primary">Edit</a>
                          <a href="{{ url('admin/admin/delete/' .$value->id) }}" class="btn btn-danger">Delete</a>
                        </td>
                      </tr>  
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
       
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection