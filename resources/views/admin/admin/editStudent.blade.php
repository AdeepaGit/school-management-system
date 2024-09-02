@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1>Edit User</h1>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
              <!-- form start -->
              <form method="POST" action=""> 
                @method('PUT')
                {{ csrf_field() }}
                <div class="card-body">
                <div class="row">
                 <div class="col-sm-6">
                  <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" 
                           id="name" 
                           name="name" 
                           placeholder="Enter Name" 
                           value="{{$getRecord->name}}" 
                           required>
                  </div>
                  <div style="color: red">{{ $errors->first('name') }}</div> 
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" 
                           id="exampleInputEmail1" 
                           name="email" 
                           placeholder="Enter email" 
                           value="{{$getRecord->email}}"
                           required>
                  </div>
                  <div style="color: red">{{ $errors->first('email') }}</div> 
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="text" class="form-control" 
                          id="password" 
                          name="password" 
                          placeholder="Password">
                          <p>if you want to change password please enter new pssword</p>
                  </div>
                  <div style="color: red">{{ $errors->first('password') }}</div> 
                  <div class="form-group">
                     <label for="exampleInputFile">Gender</label>
                        <div class="form-check">
                          <input class="form-check-input" 
                                 type="radio" 
                                 name="gender" 
                                 value="Male"
                                 {{$getRecord->gender == 'Male' ? 'checked' : ''}}
                                 >
                          <label class="form-check-label">Male</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" 
                                type="radio" 
                                name="gender" 
                                value="Female"
                                {{$getRecord->gender == 'Female' ? 'checked' : ''}}
                                 >
                          <label class="form-check-label">Female</label>
                        </div>
                  </div>
                 </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="">Mobile</label>
                    <input class="form-control" 
                          type="text" 
                          id="mobile" 
                          name="mobile" 
                          value="{{$getRecord->mobile}}"
                          >
                  </div>
                  <div style="color: red">{{ $errors->first('mobile') }}</div> 
                  <div class="form-group">
                    <label for="">Address</label>
                    <input class="form-control"
                           type="text"  
                           id="address" 
                           name="address"
                           value="{{$getRecord->address}}"
                           >
                  </div>
                  <div style="color: red">{{ $errors->first('address') }}</div> 
                  <div class="form-group">
                    <label for="">File input</label>
                    <div class="input-group">
                     <div>
                      <input class="form-control" 
                             id="formFileLg" 
                             name="profile_image" 
                             type="file"
                             value="{{$getRecord->profile_image}}"
                             >
                      <img src="{{ asset('uploads/'.$getRecord->profile_image) }}" class="img-circle elevation-2" style="width: 50px; height: 50px;" alt="User Image">

                      </div>
                    </div>
                  </div>
                </div>
                </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
           </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection