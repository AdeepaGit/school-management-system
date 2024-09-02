@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1>Add Student</h1>
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
                    <label for="">Name</label>
                    <input type="text" 
                           class="form-control" 
                           id="name" 
                           name="name" 
                           placeholder="Enter Name" 
                           required>
                  </div>
                  <div style="color: red">{{ $errors->first('name') }}</div> 
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" 
                           class="form-control" 
                           id="email" 
                           name="email" 
                           placeholder="Enter email" 
                           required>
                  </div>
                  <div style="color: red">{{ $errors->first('email') }}</div> 
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" 
                           class="form-control" 
                           id="password" 
                           name="password" 
                           placeholder="Password" 
                           required>
                  </div>
                  <div style="color: red">{{ $errors->first('Password') }}</div> 
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
                           id="mobile" 
                           name="mobile" 
                           placeholder="Enter Name">
                  </div>
                  <div style="color: red">{{ $errors->first('mobile') }}</div> 
                  <div class="form-group">
                    <label for="">Address</label>
                    <input type="text" 
                           class="form-control" 
                           id="address" 
                           name="address" 
                           placeholder="Enter Name">
                  </div>
                  <div style="color: red">{{ $errors->first('address') }}</div> 
                  <div class="form-group">
                    <label for="">File input</label>
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