<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Add User</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="admin_assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="admin_assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="admin_assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="admin_assets/vendors/select2/select2.min.css">
    <link rel="stylesheet" href="admin_assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="admin_assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="admin_assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_navbar.html -->
      
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        @include('layouts.admin_nav')
       <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Form Add user </h3>
             
            </div>
            <div class="row">
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Doctor form</h4>
                    <form class="forms-sample"  method="POST" action="{{ route('save-user') }}">
                      @csrf
                      <div class="form-group">
                        <label for="name">name</label>
                        <input type="text" name="name" class="form-control" id="" placeholder="Name">
                      </div>
                      <div class="form-group">
                        <label for="username">username</label>
                        <input type="text" name="username" class="form-control" id="" placeholder="Username">
                      </div>
                      <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                      </div>
                      <div class="form-group">
                        <label for="phone">phone</label>
                        <input type="tel" name="phone" class="form-control" id="" placeholder="phone">
                      </div>
                      <div class="form-group">
                        <label for="pass">Password</label>
                        <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Password">
                      </div>
                      <div class="form-group">
                        <label for="pass2">Confirm Password</label>
                        <input type="password" name="pass2" class="form-control" id="exampleInputConfirmPassword1" placeholder="Password">
                      </div>
                      {{-- <div class="form-check form-check-flat form-check-primary">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input"> Remember me </label>
                      </div> --}}
                      <button type="submit" name="submit" class="btn btn-primary me-2">Submit</button>
                      {{-- <button class="btn btn-light">Cancel</button> --}}
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Student Form</h4>
                    <form class="forms-sample" method="POST" action="{{ route('save-student') }}">
                      @csrf
                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">ID</label>
                        <div class="col-sm-9">
                          <input type="number" name="id" class="form-control" id="exampleInputUsername2" placeholder="ID">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">student name</label>
                        <div class="col-sm-9">
                          <input type="text" name="name" class="form-control" id="exampleInputEmail2" placeholder="">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                          <input type="email" name="email" class="form-control" id="exampleInputEmail2" placeholder="">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Specialization</label>
                        <div class="col-sm-9">
                          <input type="text" name="dept" class="form-control" id="exampleInputUsername2" placeholder="">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">completed hours</label>
                        <div class="col-sm-9">
                          <input type="text" name="hours" class="form-control" id="exampleInputUsername2" placeholder="">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Cumulative average</label>
                        <div class="col-sm-9">
                          <input type="number" name="gpa" class="form-control" id="exampleInputUsername2" placeholder="">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">phone</label>
                        <div class="col-sm-9">
                          <input type="tel" name="phone" class="form-control" id="exampleInputUsername2" placeholder="">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">year GraduatioN</label>
                        <div class="col-sm-9">
                          <input type="number" name="grad_year" class="form-control" id="exampleInputUsername2" placeholder="">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Password</label>
                        <div class="col-sm-9">
                          <input type="password" name="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Re Password</label>
                        <div class="col-sm-9">
                          <input type="password" name="repassword" class="form-control" id="exampleInputConfirmPassword2" placeholder="Password">
                        </div>
                      </div>
                      <div class="form-check form-check-flat form-check-primary">
                       </div>
                      <button type="submit" class="btn btn-primary me-2">Submit</button>
                      {{-- <button class="btn btn-light">Cancel</button> --}}
                    </form>
                  </div>
                </div>
              </div>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="admin_assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="admin_assets/vendors/select2/select2.min.js"></script>
    <script src="admin_assets/vendors/typeahead.js/typeahead.bundle.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="admin_assets/js/off-canvas.js"></script>
    <script src="admin_assets/js/hoverable-collapse.js"></script>
    <script src="admin_assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="admin_assets/js/file-upload.js"></script>
    <script src="admin_assets/js/typeahead.js"></script>
    <script src="admin_assets/js/select2.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>