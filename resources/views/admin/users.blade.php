<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Report</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="admin_assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="admin_assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="admin_assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="admin_assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="admin_assets/images/favicon.png" />
    <style>
      
* {
  box-sizing: border-box;
}

form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}
</style>
  </head>
  <body>
    <div class="container-scroller">

      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        @include('layouts.admin_nav')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> user Tables </h3>
              
            </div>
            <div class="row">
              <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Basic Table</h4>
                    </p>
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Student Name</th>
                          <th>ID</th>
                          <th>Created</th>
                          <th>delete</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($students as $item)
                        <tr>
                          <td>{{$item['name']}}</td>
                          <td>{{$item['username']}}</td>
                          <td>{{$item['created_at']}}</td>
                          <td><form method="POST" action="{{ route('delete-user',$item['id']) }}">
                            @csrf
                            @method('delete')
                            <button type="submit" class="badge badge-danger">Delete</button>
                            </form></td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Doctor Table</h4>
                    </p>
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Doctor</th>
                          <th>Email</th>
                        
                          <th>delete</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($doctors as $item)
                          <tr>
                            <td>{{$item['name']}}</td>
                            <td>{{$item['email']}}</td>
                            <td><form method="POST" action="{{ route('delete-user',$item['id']) }}">
                              @csrf
                              @method('delete')
                              <button type="submit" class="badge badge-danger">Delete</button>
                              </form></td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              
                
              </div>
            </div>
            <div class="">
              <div class="">
                <div class="page-header">
                  <h3 class="page-title"> Report </h3>
                  
                </div>
                <div class="row">
                  <div class="">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Last projects
<form class="example" action="/action_page.php" style="margin:auto;max-width:300px">
  <input type="text" placeholder="Search.." name="search2">
  <button type="submit"><i class="fa fa-search"></i></button>
</form></h4>
                        </p>
                        <table class="table">
                          <thead>
                            <tr>
                              <th>name of project</th>
                              <th>doctour</th>
                              <th>date desction</th>
                              <th>mark</th>
                              <th>Docomuntion</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td><label class="badge badge-danger">dwonlode</label></td>
                            </tr>
                            <tr>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td><label class="badge badge-danger">dwonlode</label></td>
                            </tr>    <tr>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td><label class="badge badge-danger">dwonlode</label></td>
                            </tr>    <tr>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td><label class="badge badge-danger">dwonlode</label></td>
                            </tr>    <tr>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td><label class="badge badge-danger">dwonlode</label></td>
                            </tr>    <tr>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td><label class="badge badge-danger">dwonlode</label></td>
                            </tr>
                          </tbody>
                        </table>
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
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="admin_assets/js/off-canvas.js"></script>
    <script src="admin_assets/js/hoverable-collapse.js"></script>
    <script src="admin_assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
  </body>
</html>