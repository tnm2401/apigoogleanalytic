<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GOOGLE ANALYTICS DASHBOARD API</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- JQVMap -->

    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- chartjs -->
    <script type="text/javascript" src="{{route('index')}}/chartjs/chart.js"></script>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 mb-2">Google Analytics Data</h1>
                        </div><!-- /.col -->
                        
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">TRANG CHỦ</a></li>
                                <li class="breadcrumb-item active">Dashboard v1</li>
                            </ol>
                           
                        </div><!-- /.col -->

                        <div class="col-sm-2">
                            <div class="card-tools">
                                <ul class="nav nav-pills ml-auto">
                                  <li>
                                    <select class="form-control" onchange="dashboard(value);">
                                      <option value="dashboard_today">Hôm nay</option>
                                      <option value="dashboard_yesterday">Hôm qua</option>
                                      <option value="dashboard_7day">7 Ngày qua</option>
                                      <option value="dashboard_week">Tuần này</option>
                                      <option value="dashboard_30day">30 ngày qua</option>
                                      <option value="dashboard_month">Tháng này</option>
                                      <option value="dashboard_year">1 Năm </option>
                                  </select>
                                  </li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <section class="content">
               
                <div class="container-fluid">
                   
                    @include('api_google_analytics.8_col_dashboard')
                    <div class="row">
                        <!-- Left col -->
                        <section class="col-lg-7 connectedSortable">
                            @include('api_google_analytics.thongketruycap')
                            @include('api_google_analytics.thongkequocgia')
                            @include('api_google_analytics.thongkesite')
                        </section>
                        <!-- Left col -->
                        <!-- right col -->
                        <section class="col-lg-5 connectedSortable">
                            @include('api_google_analytics.thongketrinhduyet')
                            @include('api_google_analytics.thongkethietbi')
                            @include('api_google_analytics.nguonkhachhang')
                           
                        </section>
                        <!-- right col -->

                    </div>
                </div>
            </section>
        </div>
        <aside class="control-sidebar control-sidebar-dark">
        </aside>
    </div>
   
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>

    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>
    {{-- <script src="dist/js/pages/dashboard.js"></script> --}}
    @yield('jsmap')

</body>

</html>
