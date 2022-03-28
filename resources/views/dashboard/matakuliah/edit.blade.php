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
     <!-- Bootstrap CSS -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/adminlte/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    
    <!-- Custom Theme Style -->
    <link href="/adminlte/build/css/custom.min.css" rel="stylesheet">
    
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css" type="text/css"/>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#example-optionClass').multiselect({
                includeSelectAllOption: true, // add select all option as usual
                optionClass: function(element) {
                    var value = $(element).val();
    
                    if (value%2 == 0) {
                        return 'even';
                    }
                    else {
                        return 'odd';
                    }
                }
            });
        });
    </script>
    <style type="text/css">
        #example-optionClass-container .multiselect-container li.odd {
            background: #eeeeee;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#example-optionClass-irwandi').multiselect({
                includeSelectAllOption: true, // add select all option as usual
                optionClass: function(element) {
                    var value = $(element).val();
    
                    if (value%2 == 0) {
                        return 'even';
                    }
                    else {
                        return 'odd';
                    }
                }
            });
        });
    </script>
    <style type="text/css">
        #example-optionClass-container-irwandi .multiselect-container li.odd {
            background: #eeeeee;
        }
    </style>

</head>

<body class="nav-md">
    <style>
        .mul-select{
            width: 100%;
        }
    </style>
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
                                    <a class="dropdown-item" href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->

            <!-- page content -->

            <div class="right_col" role="main">
                <!-- top tiles -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Edit Jadwal
                                    </h4>
                                </div>
                                <div class="card-body">
                                    <form action="{{ url('update-matakuliah/'.$editdata->uuid) }}" method="post" autocomplete="off">
                                        @csrf
                                        <label for="dosen">Nama Dosen</label>    
                                            <div id="example-optionClass-container">
                                                <select name='dosen[]' id="example-optionClass" multiple="multiple">
                                                    @foreach( $dosens as $dosen )
                                                <option value="{{ $dosen['id'] }}">{{ $dosen['nama'] }}</option>
                                                @endforeach
                                            </select>
                                            </div>
                                            <br>
                                        <div class="mb-3">
                                            <label for="namaMatakuliah" class="form-label">Nama Matakuliah</label>
                                            <select class="form-select" name="namaMatakuliah">
                                                @foreach( $namaMatakuliahh as $namaMatakuliah )
                                                @if($editdata['namaMatakuliah'] == $namaMatakuliah['nama'])
                                                <option value="{{ $namaMatakuliah['nama'] }}" selected>{{ $editdata['namaMatakuliah'] }}</option>
                                                @else
                                                <option value="{{ $namaMatakuliah['nama'] }}">{{ $namaMatakuliah['nama'] }}</option>
                                                @endif
                                                @endforeach
                                            </select>
                                        </div>               
                                        <div class="mb-3">
                                            <label for="ruangan" class="form-label">Ruangan</label>
                                            <select class="form-select" name="ruangan">
                                                @foreach( $ruangans as $ruangan )
                                                @if($editdata['nama'] == $ruangan['nama'])
                                                <option value="{{ $ruangan['nama'] }}" selected>{{ $editdata['nama'] }}</option>
                                                @else
                                                <option value="{{ $ruangan['nama'] }}">{{ $ruangan['nama'] }}</option>
                                                @endif
                                                @endforeach
                                            </select>
                                        </div> 
                                        <div class="mb-3">
                                            <label for="kelas" class="form-label">Kelas</label>
                                            <select class="form-select" name="kelas">
                                                @foreach( $kelass as $kelas )
                                                @if($editdata['nama'] == $kelas['nama'])
                                                <option value="{{ $kelas['nama'] }}" selected>{{ $editdata['nama'] }}</option>
                                                @else
                                                <option value="{{ $kelas['nama'] }}">{{ $kelas['nama'] }}</option>
                                                @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="kelas" class="form-label">Hari</label>
                                            <select class="form-select" name="hari">
                                                @foreach( $haris as $hari )
                                                @if($editdata['nama'] == $hari['nama'])
                                                <option value="{{ $hari['nama'] }}" selected>{{ $editdata['nama'] }}</option>
                                                @else
                                                <option value="{{ $hari['nama'] }}">{{ $hari['nama'] }}</option>
                                                @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label>Jam</label>
                                            <input type="time" name="jam" class="form-control" value="{{ $editdata['jam'] }}">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label>Tanggal Mulai</label>
                                            <input type="date" name="tanggalMulai" class="form-control" value="{{ $editdata['tanggalMulai'] }}">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label>Tanggal Selesai</label>
                                            <input type="date" name="tanggalSelesai" class="form-control" value="{{ $editdata['tanggalSelesai'] }}">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label>Jumlah Pertemuan</label>
                                            <input type="text" name="jumlahPertemuan" class="form-control" value="{{ $editdata['jumlahPertemuan'] }}">
                                        </div>
                                        <div class="form-group mb-3">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
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
    
    <!-- jQuery -->
    {{-- <script src="/adminlte/vendors/jquery/dist/jquery.min.js"></script> --}}
    <!-- Bootstrap -->
    <script src="/adminlte/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
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
   
    <script>
        $(document).ready(function(){
            $(".irwandi").select2({
                placeholder: "Pilih Dosen", //placeholder
                maximumSelectionLength: 3
            });
        })
    </script>
</body>



</html>