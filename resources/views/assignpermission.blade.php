<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <title>{{ config('app.name') }} | Dashboard 2</title>

        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="{{ URL::asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="{{ URL::asset('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ URL::asset('assets/dist/css/adminlte.min.css') }}">
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
        @include('headerjsfiles')
        @include('selecttwostyle')
    </head>
    <body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
        <div class="wrapper">
            <!-- Navbar -->
            @include('navheader')
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            @include('navsidebar')
            <!-- Content Wrapper. Contains page content -->
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1>Assign Permission</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                                    <li class="breadcrumb-item active">Assign Permission</li>
                                </ol>
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
                                <!-- general form elements -->
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h3 class="card-title">Assign Permission</h3>
                                    </div>
                                    <!-- form start -->
                                    <form role="form">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Select Role</label>
                                                <select class="form-control select2" id="role_id" name="role_id" style="width: 100%;">

                                                </select>                                            
                                            </div>

                                            <div class="form-group">
                                                <label>Select Permission</label>
                                                <select class="form-control select2" id="permission_id" name="permission_id" style="width: 100%;">

                                                </select>
                                            </div>
                                        </div>
                                        <!-- /.card-body -->

                                        <div class="card-footer">
                                            <button type="button" id="assignpermission" name="assignpermission" class="btn btn-primary">Assign Permission</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                            <!--/.col (left) -->
                        </div>
                        <!-- /.row -->
                    </div><!-- /.container-fluid -->
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <!-- /.content-wrapper -->

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->

            <!-- Main Footer -->
            @include('footer')
        </div>
        <!-- ./wrapper -->
    </body>
</html>
