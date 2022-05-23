<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="admin_assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="admin_assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="admin_assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="admin_assets/vendors/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="admin_assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="admin_assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="admin_assets/images/favicon.png" />
  </head>
  <body>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        @include('layouts.admin_nav')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="d-xl-flex justify-content-between align-items-start">
              <h2 class="text-dark font-weight-bold mb-2"> Overview dashboard </h2>
              <div class="d-sm-flex justify-content-xl-between align-items-center mb-2">
             
               
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="d-sm-flex justify-content-between align-items-center transaparent-tab-border {">
                  <ul class="nav nav-tabs tab-transparent" role="tablist">
                   
                    <li class="nav-item">
                      <a class="nav-link active" id="business-tab" data-bs-toggle="tab" href="#business-1" role="tab" aria-selected="false">Overview</a>
                    </li>
                  
                  </ul>
                  <div class="d-md-block d-none">
                    <a href="#" class="text-light p-1"><i class="mdi mdi-view-dashboard"></i></a>
                    <a href="#" class="text-light p-1"><i class="mdi mdi-dots-vertical"></i></a>
                  </div>
                </div>
                <div class="tab-content tab-transparent-content">
                  <div class="tab-pane fade show active" id="business-1" role="tabpanel" aria-labelledby="business-tab">
                    <div class="row">
                      <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                        <div class="card">
                          <div class="card-body text-center">
                            <h5 class="mb-2 text-dark font-weight-normal">Projects</h5>
                            <h2 class="mb-4 text-dark font-weight-bold">{{$projects->count()}}</h2>
                            <div class="dashboard-progress dashboard-progress-1 align-items-center justify-content-center"><i class="mdi mdi-lightbulb icon-md text-dark"></i></div>
                            {{-- <p class="mt-4 mb-0">completed</p>
                            <h3 class="mb-0 font-weight-bold mt-2 text-dark">35%</h3> --}}
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                        <div class="card">
                          <div class="card-body text-center">
                            <h5 class="mb-2 text-dark font-weight-normal">Doctor</h5>
                            <h2 class="mb-4 text-dark font-weight-bold">{{$doctors->count()}}</h2>
                            <div class="dashboard-progress dashboard-progress-2 align-items-center item-parent"><i class="mdi mdi-account-circle icon-md text-dark"></i></div>
                         
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-3  col-lg-6 col-sm-6 grid-margin stretch-card">
                        <div class="card">
                          <div class="card-body text-center">
                            <h5 class="mb-2 text-dark font-weight-normal">Students</h5>
                            <h2 class="mb-4 text-dark font-weight-bold">{{$students->count()}}</h2>
                            <div class="dashboard-progress dashboard-progress-2 align-items-center justify-content-center item-parent"><i class="mdi mdi-account-circle icon-md text-dark"></i></div>
                           
                          </div>
                        </div>
                      </div>
                    
    <script src="admin_assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="admin_assets/vendors/chart.js/Chart.min.js"></script>
    <script src="admin_assets/vendors/jquery-circle-progress/js/circle-progress.min.js"></script>
    <script src="admin_assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="admin_assets/js/off-canvas.js"></script>
    <script src="admin_assets/js/hoverable-collapse.js"></script>
    <script src="admin_assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="admin_assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>