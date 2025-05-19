<!DOCTYPE html>
<html lang="en">

<head>
  @if(!session()->has('loginid'))
    <script>
    window.location.href = "{{ route('login_page') }}";
    </script>
  @endif

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>FarmFresh Admin</title>
  <!-- base:css -->
  <link rel="stylesheet" href="{{asset('Admin/template/vendors/typicons.font/font/typicons.css')}}">
  <link rel="stylesheet" href="{{asset('Admin/template/vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('Admin/template/css/vertical-layout-light/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('Admin/template/images/favicon.png')}}" />
</head>

<body>
  <div class="row" id="proBanner">
    <div class="col-12">

    </div>
  </div>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="index.html"><img src="{{asset('Admin/template/images/logo.svg')}}"
            alt="logo" /></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img
            src="{{asset('Admin/template/images/logo-mini.svg')}}" alt="logo" /></a>
        <button class="navbar-toggler navbar-toggler align-self-center d-none d-lg-flex" type="button"
          data-toggle="minimize">
          <span class="typcn typcn-th-menu"></span>
        </button>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">

        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item d-none d-lg-flex  mr-2">

          </li>




          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle  pl-0 pr-0" href="#" data-toggle="dropdown" id="profileDropdown">
              <i class="typcn typcn-user-outline mr-0"></i>
              <span class="nav-profile-name"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item" href="{{ route('logout') }}">
                <i class="typcn typcn-power text-primary"></i>
                Logout
              </a>
            </div>

      </div>
      </li>
      </ul>
      <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
        data-toggle="offcanvas">
        <span class="typcn typcn-th-menu"></span>
      </button>
  </div>
  </nav>
  <!-- partial -->
  <div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_settings-panel.html -->
    <div class="theme-setting-wrapper">
      <div id="settings-trigger"><i class="typcn typcn-cog-outline"></i></div>
      <div id="theme-settings" class="settings-panel">
        <i class="settings-close typcn typcn-delete-outline"></i>
        <p class="settings-heading">SIDEBAR SKINS</p>
        <div class="sidebar-bg-options" id="sidebar-light-theme">
          <div class="img-ss rounded-circle bg-light border mr-3"></div>
          Light
        </div>
        <div class="sidebar-bg-options selected" id="sidebar-dark-theme">
          <div class="img-ss rounded-circle bg-dark border mr-3"></div>
          Dark
        </div>
        <p class="settings-heading mt-2">HEADER SKINS</p>
        <div class="color-tiles mx-0 px-4">
          <div class="tiles success"></div>
          <div class="tiles warning"></div>
          <div class="tiles danger"></div>
          <div class="tiles primary"></div>
          <div class="tiles info"></div>
          <div class="tiles dark"></div>
          <div class="tiles default border"></div>
        </div>
      </div>
    </div>
    <!-- partial -->
    <!-- partial:partials/_sidebar.html -->

    <nav class="sidebar sidebar-offcanvas" style="background-color: #014b19f0" ; id="sidebar">
      <ul class="nav">
        <li class="nav-item">
          <div class="d-flex sidebar-profile">
            <div class="sidebar-profile-image">
              <img src="{{asset('Admin/template/images/faces/face29.png')}}" alt="image">
              <span class="sidebar-status-indicator"></span>
            </div>
            <div class="sidebar-profile-name">
              <p class="sidebar-name">
                Admin
              </p>
              <p class="sidebar-designation">
                Welcome
              </p>
            </div>
          </div>

          <p class="sidebar-menu-title"></p>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('adminhome')}}">
            <i class="typcn typcn-device-desktop menu-icon"></i>
            <span class="menu-title">Dashboard <span class="badge badge-primary ml-3">New</span></span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
            <i class="typcn typcn-briefcase menu-icon"></i>
            <span class="menu-title">REGISTRATIONS</span>
            <i class="typcn typcn-chevron-right menu-arrow"></i>
          </a>
          <div class="collapse" id="ui-basic">
            <ul class="nav flex-column sub-menu" style="font-weight: bold; color: #000000;">
              <li class="nav-item"> <a class="nav-link" href="{{route('location')}}">Location</a></li>
              <li class="nav-item"> <a class="nav-link" href="{{route('category')}}">Category</a></li>
              <li class="nav-item"> <a class="nav-link" href="{{route('product')}}">Product</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
            <i class="typcn typcn-film menu-icon"></i>
            <span class="menu-title">Activities</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="charts">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="{{route('viewdistrict')}}">View District</a></li>
              <li class="nav-item"> <a class="nav-link" href="{{route('viewlocation')}}">View Location</a></li>
              <li class="nav-item"> <a class="nav-link" href="{{route('viewcategory')}}">View Category</a></li>
              <li class="nav-item"> <a class="nav-link" href="{{route('viewproduct')}}">View Product</a></li>
              <li class="nav-item"> <a class="nav-link" href="{{route('viewcustomer')}}">View Customers</a></li>
              <li class="nav-item"> <a class="nav-link" href="{{route('bookingdetailsview')}}">Request View</a></li>
              <li class="nav-item"> <a class="nav-link" href="{{route('paymentdetailsview')}}">Payment Details</a></li>
              <li class="nav-item"> <a class="nav-link" href="{{route('Bookingcountchart')}}">Pie Chart</a></li>
              <li class="nav-item"> <a class="nav-link" href="{{route('ReportDate')}}">Date Chart</a></li>
              <li class="nav-item"> <a class="nav-link" href="{{route('monthlySalesChart')}}">Brandsale Chart</a></li>
              <li class="nav-item"> <a class="nav-link" href="{{route('showPaymentDetails')}}">BarChart</a></li>
            </ul>
          </div>




        </li>
        <!-- <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
              <i class="typcn typcn-chart-pie-outline menu-icon"></i>
              <span class="menu-title">Charts</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/charts/chartjs.html">ChartJs</a></li>
              </ul>
            </div>
          </li> -->

        <li class="nav-item">

        <li class="nav-item">


        </li>
        <li class="nav-item">


        <li class="nav-item">

        </li>
      </ul>
      <ul class="sidebar-legend">

      </ul>
    </nav>
    <!-- partial -->
    <div class="main-panel">
      @yield('content')

      <!-- content-wrapper ends -->
      <!-- partial:partials/_footer.html -->
      <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
          <span class="text-center text-sm-left d-block d-sm-inline-block">Copyright © <a
              href="https://www.bootstrapdash.com/" target="_blank">bootstrapdash.com</a> 2020</span>
          <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Free <a
              href="https://www.bootstrapdash.com/" target="_blank">Bootstrap dashboard </a>templates from
            Bootstrapdash.com</span>
        </div>
      </footer>
      <div class="main-panel">
      </div>
      <!-- partial -->
    </div>
    <!-- main-panel ends -->
  </div>
  <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="{{asset('Admin/template/vendors/js/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{asset('Admin/template/js/off-canvas.js')}}"></script>
  <script src="{{asset('Admin/template/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('Admin/template/js/template.js')}}"></script>
  <script src="{{asset('Admin/template/js/settings.js')}}"></script>
  <script src="{{asset('Admin/template/js/todolist.js')}}"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <script src="{{asset('Admin/template/vendors/progressbar.js/progressbar.min.js')}}"></script>
  <script src="{{asset('Admin/template/vendors/chart.js/Chart.min.js')}}"></script>
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="{{asset('Admin/template/js/dashboard.js')}}"></script>
  <!-- End custom js for this page-->
  @yield('scripts')
</body>

</html>
