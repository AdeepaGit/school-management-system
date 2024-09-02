@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1>Add Admin</h1>
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
              <form method="POST" action="" enctype="multipart/form-data"> 
                {{ csrf_field() }}
                <div class="card-body">
                <div class="row">
                 <div class="col-sm-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" 
                           class="form-control" 
                           id="exampleInputEmail1" 
                           name="name" 
                           placeholder="Enter Name"
                           value="{{old('name')}}" required>
                  </div>
                  <div style="color: red">{{ $errors->first('name') }}</div> 
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" 
                           class="form-control" 
                           id="exampleInputEmail1" 
                           name="email" 
                           placeholder="Enter email" 
                           value="{{old('email')}}"
                           required>
                    <div style="color: red">{{ $errors->first('email') }}</div> 
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" 
                           class="form-control" 
                           id="exampleInputPassword1" 
                           name="password" 
                           placeholder="Password" 
                           required>
                  </div>
                  <div style="color: red">{{ $errors->first('password') }}</div> 
                  <div class="form-group">
                     <label for="exampleInputFile">Gender</label>
                        <div class="form-check">
                          <input class="form-check-input" 
                                 type="radio" 
                                 name="gender" 
                                 value="Male">
                          <label class="form-check-label">Male</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" 
                                 type="radio" 
                                 name="gender" 
                                 value="Female" >
                          <label class="form-check-label">Female</label>
                        </div>
                  </div>
                 </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Mobile</label>
                    <input type="text" 
                           class="form-control" 
                           id="exampleInputEmail1" 
                           name="mobile" 
                           value="{{old('mobile')}}"
                           placeholder="Enter Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" 
                           class="form-control" 
                           id="exampleInputEmail1" 
                           name="address" 
                           value="{{old('address')}}"
                           placeholder="Enter Name">
                  </div>
                  <div style="color: red">{{ $errors->first('address') }}</div> 
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                     <div>
                      <input type="file" 
                             class="form-control" 
                             id="profile_image" 
                             accept="image/*" 
                             name="profile_image" 
                             >
                     </div>
                     <div style="color: red">{{ $errors->first('profile_image') }}</div> 
                    </div>
                  </div>
                </div>
                </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
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