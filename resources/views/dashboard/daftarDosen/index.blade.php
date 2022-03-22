<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/adminlte/images/favicon.ico" type="image/ico" />

    <title>Sistem Absensi</title>

    <!-- Bootstrap -->
    <link href="/adminlte/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/adminlte/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="/adminlte/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="/adminlte/vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="/adminlte/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="/adminlte/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet" />
    <!-- bootstrap-daterangepicker -->
    <link href="/adminlte/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="/adminlte/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="{{ url('dashboard') }}" class="site_title"><i class="fa fa-paw"></i> <span>Sistem Absensi</span></a>
                    </div>
                    <div class="clearfix"></div>
                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3>Dashboard</h3>
                            <ul class="nav side-menu">
                                <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="{{ url('mata-kuliah') }}">Penjadwalan</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-home"></i> History <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="{{ url('history') }}">History</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-home"></i> Master Data <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="{{ url('kelas') }}">Kelas</a></li>
                                        <li><a href="{{ url('namaMatakuliah') }}">Matakuliah</a></li>
                                        <li><a href="{{ url('fakultas') }}">Fakultas</a></li>
                                        <li><a href="{{ url('hari') }}">Hari</a></li>
                                        <li><a href="{{ url('ruangan') }}">Ruangan</a></li>
                                        <li><a href="{{ url('dosen') }}">Dosen</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>
                    <nav class="nav navbar-nav">
                        <ul class=" navbar-right">
                            <li class="nav-item dropdown open" style="padding-left: 15px;">
                                <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                                    Logout
                                </a>
                                <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="javascript:;"> Profile</a>
                                    <a class="dropdown-item" href="{{ url('logout') }}"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->

            <!-- page content -->
            <div class="conateiner">
                <div class="right_col" role="main">
                    <!-- top tiles -->
                    <div class="row" style="display: inline-block;">
                        @include('sweetalert::alert')
                        <div class="card">
                            <div class="card-header">
                                <a href="{{ url('addDosen/'.$id) }}" class="btn btn-sm btn-primary ">Tambah Dosen</a>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nama Dosen</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                        $i = 1
                                        @endphp
                                        @if (is_array($mata_kuliahs) || is_object($mata_kuliahs))
                                        @foreach($mata_kuliahs as $key => $mata_kuliah)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $mata_kuliah }}</td>
                                            <td><a href="{{ url('editDosen/'.$key) }}/{{ $id }}" class="btn btn-sm btn-success">Edit</a></td>
                                            <td><a href="{{ url('destroyDosen/'.$key) }}/{{ $id }}" class="btn btn-sm btn-danger">Delete</a></td>
                                        </tr>
                                        @endforeach
                                        @else
                                        <tr>
                                            <td colspan="?">No Record Found</td>
                                        </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /page content -->
            <!-- footer content -->
            <footer>
                <div class="pull-right">
                    <a href="https://colorlib.com">Irwandi Hosain</a>
                </div>
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
        </div>
    </div>

    @include('sweetalert::alert')

    <!-- jQuery -->
    <script src="/adminlte/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="/adminlte/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="/adminlte/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="/adminlte/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="/adminlte/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="/adminlte/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="/adminlte/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="/adminlte/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="/adminlte/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="/adminlte/vendors/Flot/jquery.flot.js"></script>
    <script src="/adminlte/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="/adminlte/vendors/Flot/jquery.flot.time.js"></script>
    <script src="/adminlte/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="/adminlte/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="/adminlte/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="/adminlte/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="/adminlte/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="/adminlte/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="/adminlte/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="/adminlte/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="/adminlte/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="/adminlte/vendors/moment/min/moment.min.js"></script>
    <script src="/adminlte/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="/adminlte/build/js/custom.min.js"></script>

</body>

</html>