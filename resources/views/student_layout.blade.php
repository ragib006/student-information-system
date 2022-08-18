<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.urbanui.com/salt/jquery/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Dec 2017 12:31:57 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Salt Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('/node_modules/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="{{asset('/node_modules/rickshaw/rickshaw.min.css')}}" />
  <link rel="stylesheet" href="{{asset('/bower_components/chartist/dist/chartist.min.css')}}" />
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('/css/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('/images/favicon.html')}}" />
</head>



<body class="sidebar-dark">
  <!-- partial:partials/_settings-panel.html -->





  <div class="settings-panel">
    <ul class="nav nav-tabs" id="setting-panel" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="layouts-tab" data-toggle="tab" href="#layouts-section" role="tab" aria-controls="layouts-section" aria-expanded="true"><i class="mdi mdi-settings"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section"><i class="mdi mdi-account"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="close-button" href="#"><i class="mdi mdi-window-close"></i></a>
      </li>
    </ul>




  </div>
  <!-- partial     images/salt_logo.svg-->
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar navbar-light col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper">
        <a class="navbar-brand brand-logo" href="{{URL::to('student_dashboard')}}"><img style="width:247px; height:65px;" src="/image/5Gre0fqPVZP64aByutVg.png" alt="Logo"></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <button class="navbar-toggler navbar-toggler align-self-center mr-2" type="button" data-toggle="minimize">
          <span class="navbar-toggler-icon"></span>
        </button>









        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>







<?php

//$student_id=Session::get('student_phone');
//
        //      ->where('student_phone',$student_id)
        //      ->first();
        $student=Session::get('student_email');
         $student_profile=DB::table('student_tb1')

                      ->where('student_email',$student)
                      ->first();





?>

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="row row-offcanvas row-offcanvas-right">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
     
          <ul class="nav">
            <!--main pages start
            <li class="nav-item nav-category">
              <span class="nav-link">Main</span>
            </li>
          -->
		  
		  
		  
		    <li class="nav-item">
              <a class="nav-link" href="{{URL::to('/profile')}}">
                 <img class="rounded-circle" src="{{URL::to($student_profile->student_image)}}" style="width:80px;margin-top:20px;margin-bottom:20px;margin-right:20px" alt="">
                <span class="menu-title">{{$student_profile->student_name}}</span>

              </a>
            </li>



            <li class="nav-item">
              <a class="nav-link" href="{{URL::to('/profile')}}">
                <i class="mdi mdi-puzzle menu-icon"></i>
                <span class="menu-title">Profile</span>

              </a>
            </li>

          

            <!---
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#layoutsSubmenu" aria-expanded="false" aria-controls="layoutsSubmenu">
                <i class="mdi mdi-arrow-expand-all menu-icon"></i>
                <span class="menu-title">Student Information</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="layoutsSubmenu">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('/tutionfee')}}">Tution Fee</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pages/layout/rtl-layout.html">Res

-->
<li class="nav-item">
  <a class="nav-link" href="{{URL::to('/student_show_all_teacher')}}">
    <i class="mdi mdi-gauge menu-icon"></i>
    <span class="menu-title">All-Teacher</span>
  </a>
</li>


  <li class="nav-item">
              <a class="nav-link" href="{{URL::to('/student__setting')}}">
                <i class="mdi mdi-gauge menu-icon"></i>
                <span class="menu-title">Setting</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{URL::to('/student_logout')}}">
                <i class="mdi mdi-gauge menu-icon"></i>
                <span class="menu-title">Log-Out</span>
              </a>
            </li>



          </ul>
        </nav>







        <!-- partial -->
        <div class="content-wrapper">
          <div class="row">


	@yield('content')



          </div>










        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_foote
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="float-right">
                <a href="#">Salt Admin</a> &copy; 2017
            </span>
          </div>
        </footer>
        -->
      </div>
      <!-- row-offcanvas ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{asset('/node_modules/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('/node_modules/popper.js/dist/umd/popper.min.js')}}"></script>
  <script src="{{asset('/node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('/node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="{{asset('/node_modules/flot/jquery.flot.js')}}"></script>
  <script src="{{asset('/node_modules/flot/jquery.flot.resize.js')}}"></script>
  <script src="{{asset('/node_modules/flot/jquery.flot.categories.js')}}"></script>
  <script src="{{asset('/node_modules/flot/jquery.flot.pie.js')}}"></script>
  <script src="{{asset('/node_modules/rickshaw/vendor/d3.v3.js')}}"></script>
  <script src="{{asset('/node_modules/rickshaw/rickshaw.min.js')}}"></script>
  <script src="{{asset('/bower_components/chartist/dist/chartist.min.js')}}"></script>
  <script src="{{asset('/node_modules/chartist-plugin-legend/chartist-plugin-legend.js')}}"></script>
  <script src="{{asset('/node_modules/chart.js/dist/Chart.min.js')}}"></script>
  <script src="{{asset('/node_modules/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
  <!-- End plugin js for this page-->

  <script src="{{asset('/node_modules/datatables.net/js/jquery.dataTables.js')}}"></script>
  <script src="{{asset('/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.js')}}"></script>
   <script src="{{asset('/js/data-table.js')}}"></script>

  <!-- inject:js -->
  <script src="{{asset('/js/off-canvas.js')}}"></script>
  <script src="{{asset('/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('/js/misc.js')}}"></script>
  <script src="{{asset('/js/settings.js')}}"></script>
  <!-- endinject -->

  <script src="{{asset('/js/bootbox.min.js')}}"></script>
  <!-- Custom js for this page-->
  <script src="{{asset('/js/dashboard_1.js')}}"></script>
  <script src="{{asset('/bootbox.min.js')}}"></script>
  <!-- End custom js for this page-->

<script>

  $(document).on("click","#delate", function(e){

   e.preventDefault();
   var link = $(this).attr("href");
   bootbox.confirm("Are You Want To Delate",function(confirmed){

   if(confirmed) {
   window.location.href = link;
  };

  });


});





</script>


</body>


<!-- Mirrored from www.urbanui.com/salt/jquery/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Dec 2017 12:32:50 GMT -->
</html>
