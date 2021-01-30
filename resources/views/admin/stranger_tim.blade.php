<!DOCTYPE html>
<html lang="en">
@include('admin/admin_head')
<body class="fix-header fix-sidebar">
    <style>
        .tabel-all-area{            
            visibility:hidden;
            height:0px;
            width:0px;
            overflow:hidden;            
        }
    </style>
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">
        @include('admin/admin_header')
        @include('admin/admin_sidebar')
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Data Tim</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Data Tim</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->

            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->

                <div class="row">
                    <!-- /# column -->
                    <div class="col-lg-12">
                        <div class="card">          
                            <div class="card-body">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs profile-tab" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#all" role="tab">Semua Tim</a> </li>
                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#analog" role="tab">Analog</a> </li>
                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#mikro" role="tab">Mikrokontroller</a> </li>                                    
                                </ul>	

                                <div class="tab-content">

                                    <!-- tab panel all -->
                                    <div class="tab-pane active" id="all" role="tabpanel">
                                        <div class="table-responsive">
                                            <div id="tableActions"></div>
                                            <table class="table table-hover" id="tabel-all-extend">
                                                <thead>
                                                    <tr>
                                                        <th>Nama Tim</th>												
                                                        <th>Kategori</th>
                                                        <th>Instansi</th>
                                                        <th>Verif Email</th>
                                                        <th>Kode Verifikasi</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($all as $datas)
                                                    <tr>
                                                        <td>{{$datas->team_name}}</td>                                                
                                                        <td>
                                                            @if($datas->team_type == 1)
                                                                <span class="label label-warning">Anal og</span>
                                                            @else
                                                                <span class="label label-primary">Mikrokontroller</span>
                                                            @endif
                                                        </td>
                                                        <td>{{$datas->team_instansi}}</td>
                                                        <td>{{$datas->verif_email}}</td>
                                                        <td>{{$datas->kode_verif}}</td>
                                                        <td>
                                                        <div class="btn-group">
                                                            <a href="{{url('/admin/team/detail/'.$datas->id)}}" class="btn btn-primary"><span class="fa fa-eye" title="Lihat Tim"></span></a>

                                                            <a href="{{url('/admin/hapus_strangetim/'.$datas->id)}}" class="btn btn-danger"><span class="fa fa-trash" title="Hapus Tim"></span></a>
                                                        </div>

                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            <div class="tabel-all-area">                                    
                                                <table class="table table-hover" id="tabel-all">
                                                    <thead>
                                                        <tr>
                                                            <th>Nama Tim</th>												
                                                            <th>Kategori</th>
                                                            <th>Instansi</th>
                                                            <th>Nama Ketua</th>                                                    
                                                            <th>Email Ketua</th>  
                                                            <th>No. Telpon Ketua</th>                                                  
                                                            <th>Nama Anggota</th>
                                                            <th>No. Telpon Anggota</th>
                                                            <th>Nama Pembimbing</th>
                                                            <th>NIP Pembimbing</th>
                                                            <th>No. Telpon Pembimbing</th>
                                                            <th>Alamat Pembimbing</th>
                                                            <th>Instagram</th>


                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($all as $datas)
                                                        <tr>
                                                            <td>{{$datas->team_name}}</td>                                                
                                                            <td>
                                                                @if($datas->team_type == 1)
                                                                    <span class="label label-warning">Analog</span>
                                                                @else
                                                                    <span class="label label-primary">Mikrokontroller</span>
                                                                @endif
                                                            </td>
                                                            <td>{{$datas->team_instansi}}</td>
                                                            <td>{{$datas->team_nama_ketua}}</td>
                                                            <td>{{$datas->team_email_ketua}}</td>
                                                            <td>{{$datas->team_notel_ketua}}</td>
                                                            <td>{{$datas->team_nama_anggota}}</td>
                                                            <td>{{$datas->team_notel_anggota}}</td>
                                                            <td>{{$datas->team_nama_pembimbing}}</td>
                                                            <td>{{$datas->team_nip_pembimbing}}</td>
                                                            <td>{{$datas->team_notel_pembimbing}}</td>                                                    
                                                            <td>{{$datas->team_alamat_pembimbing}}</td>
                                                            <td>{{$datas->team_instagram}}</td>                                                    
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>                                
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end of tabpanel all -->

                                    <!-- tabpanel analog -->
                                    <div class="tab-pane" id="analog" role="tabpanel">
                                        <div class="table-responsive">
                                            <div id="tableAnalogActions"></div>
                                            <table class="table table-hover" id="tabel-analog-extend">
                                                <thead>
                                                    <tr>
                                                        <th>Nama Tim</th>												
                                                        <th>Kategori</th>
                                                        <th>Instansi</th>
                                                        <th>Verif Email</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($analog as $datas)
                                                    <tr>
                                                        <td>{{$datas->team_name}}</td>                                                
                                                        <td>
                                                            @if($datas->team_type == 1)
                                                                <span class="label label-warning">Anal og</span>
                                                            @else
                                                                <span class="label label-primary">Mikrokontroller</span>
                                                            @endif
                                                        </td>
                                                        <td>{{$datas->team_instansi}}</td>
                                                        <td>{{$datas->verif_email}}</td>
                                                        <td>
                                                        <div class="btn-group">
                                                            <a href="{{url('/admin/team/detail/'.$datas->id)}}" class="btn btn-primary"><span class="fa fa-eye" title="Lihat Tim"></span></a>                                                            
                                                        </div>

                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            <div class="tabel-all-area">                                    
                                                <table class="table table-hover" id="tabel-analog">
                                                    <thead>
                                                        <tr>
                                                            <th>Nama Tim</th>												
                                                            <th>Kategori</th>
                                                            <th>Instansi</th>
                                                            <th>Nama Ketua</th>                                                    
                                                            <th>Email Ketua</th>  
                                                            <th>No. Telpon Ketua</th>                                                  
                                                            <th>Nama Anggota</th>
                                                            <th>No. Telpon Anggota</th>
                                                            <th>Nama Pembimbing</th>
                                                            <th>NIP Pembimbing</th>
                                                            <th>No. Telpon Pembimbing</th>
                                                            <th>Alamat Pembimbing</th>
                                                            <th>Instagram</th>


                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($all as $datas)
                                                        <tr>
                                                            <td>{{$datas->team_name}}</td>                                                
                                                            <td>
                                                                @if($datas->team_type == 1)
                                                                    <span class="label label-warning">Analog</span>
                                                                @else
                                                                    <span class="label label-primary">Mikrokontroller</span>
                                                                @endif
                                                            </td>
                                                            <td>{{$datas->team_instansi}}</td>
                                                            <td>{{$datas->team_nama_ketua}}</td>
                                                            <td>{{$datas->team_email_ketua}}</td>
                                                            <td>{{$datas->team_notel_ketua}}</td>
                                                            <td>{{$datas->team_nama_anggota}}</td>
                                                            <td>{{$datas->team_notel_anggota}}</td>
                                                            <td>{{$datas->team_nama_pembimbing}}</td>
                                                            <td>{{$datas->team_nip_pembimbing}}</td>
                                                            <td>{{$datas->team_notel_pembimbing}}</td>                                                    
                                                            <td>{{$datas->team_alamat_pembimbing}}</td>
                                                            <td>{{$datas->team_instagram}}</td>                                                    
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>                                
                                            </div>
                                        </div>
                                    </div>
                                    <!-- endof tabpanel analog -->

                                    <!-- tabpanel mikro -->
                                    <div class="tab-pane" id="mikro" role="tabpanel">
                                        <div class="table-responsive">
                                            <div id="tableMikroActions"></div>
                                            <table class="table table-hover" id="tabel-mikro-extend">
                                                <thead>
                                                    <tr>
                                                        <th>Nama Tim</th>												
                                                        <th>Kategori</th>
                                                        <th>Instansi</th>
                                                        <th>Verif Email</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($mikro as $datas)
                                                    <tr>
                                                        <td>{{$datas->team_name}}</td>                                                
                                                        <td>
                                                            @if($datas->team_type == 1)
                                                                <span class="label label-warning">Anal og</span>
                                                            @else
                                                                <span class="label label-primary">Mikrokontroller</span>
                                                            @endif
                                                        </td>
                                                        <td>{{$datas->team_instansi}}</td>
                                                        <td>{{$datas->verif_email}}</td>
                                                        <td>
                                                        <div class="btn-group">
                                                            <a href="{{url('/admin/team/detail/'.$datas->id)}}" class="btn btn-primary"><span class="fa fa-eye" title="Lihat Tim"></span></a>                                                            
                                                        </div>

                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            <div class="tabel-all-area">                                    
                                                <table class="table table-hover" id="tabel-mikro">
                                                    <thead>
                                                        <tr>
                                                            <th>Nama Tim</th>												
                                                            <th>Kategori</th>
                                                            <th>Instansi</th>
                                                            <th>Nama Ketua</th>                                                    
                                                            <th>Email Ketua</th>  
                                                            <th>No. Telpon Ketua</th>                                                  
                                                            <th>Nama Anggota</th>
                                                            <th>No. Telpon Anggota</th>
                                                            <th>Nama Pembimbing</th>
                                                            <th>NIP Pembimbing</th>
                                                            <th>No. Telpon Pembimbing</th>
                                                            <th>Alamat Pembimbing</th>
                                                            <th>Instagram</th>


                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($mikro as $datas)
                                                        <tr>
                                                            <td>{{$datas->team_name}}</td>                                                
                                                            <td>
                                                                @if($datas->team_type == 1)
                                                                    <span class="label label-warning">Analog</span>
                                                                @else
                                                                    <span class="label label-primary">Mikrokontroller</span>
                                                                @endif
                                                            </td>
                                                            <td>{{$datas->team_instansi}}</td>
                                                            <td>{{$datas->team_nama_ketua}}</td>
                                                            <td>{{$datas->team_email_ketua}}</td>
                                                            <td>{{$datas->team_notel_ketua}}</td>
                                                            <td>{{$datas->team_nama_anggota}}</td>
                                                            <td>{{$datas->team_notel_anggota}}</td>
                                                            <td>{{$datas->team_nama_pembimbing}}</td>
                                                            <td>{{$datas->team_nip_pembimbing}}</td>
                                                            <td>{{$datas->team_notel_pembimbing}}</td>                                                    
                                                            <td>{{$datas->team_alamat_pembimbing}}</td>
                                                            <td>{{$datas->team_instagram}}</td>                                                    
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>                                
                                            </div>
                                        </div>
                                    </div>
                                    <!-- endof tabpanel mikro -->                                    

                                </div>
                            </div>                        
                        </div>
                    </div>
                </div>


                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
                               
               
            <!-- footer -->
            <footer class="footer"> © 2018 All rights reserved. Template designed by <a href="https://colorlib.com">Colorlib</a></footer>
            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="{{ asset('ela/js/lib/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('ela/js/lib/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{ asset('ela/js/lib/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset('ela/js/jquery.slimscroll.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('ela/js/sidebarmenu.js')}}"></script>
    <!--stickey kit -->
    <script src="{{ asset('ela/js/lib/sticky-kit-master/dist/sticky-kit.min.js')}}"></script>
    <!--Custom JavaScript -->

    <script src="{{ asset('ela/js/custom.min.js')}}"></script>

    <script src="{{asset('ela/js/lib/datatables/datatables.min.js')}}"></script>

    <script src="{{ asset('ela/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js') }}"></script>    
    <script src="{{ asset('ela/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('ela/js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js')}}"></script>
    <script src="{{ asset('ela/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js')}}"></script>
    <script src="{{ asset('ela/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js')}}"></script>
    <script src="{{ asset('ela/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js')}}"></script>
    <script src="{{ asset('ela/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js')}}"></script>
    <script>
        $(document).ready(function(){   
            //semua tim
            $("#tabel-all-extend").DataTable();

            codeListTable = $("#tabel-all").DataTable();
            new $.fn.dataTable.Buttons( codeListTable, {
                buttons: [
                    {
                    extend      : 'copy',
                    title       : 'LTDC 2019 - Data Tim Semua Kategori',
                    text        : '<i class="fa fa-files-o"></i> Copy',
                    titleAttr: 'Copy',
                    className: 'btn btn-default btn-sm'
                    },
                    {
                    extend:    'csv',
                    title       : 'LTDC 2019 - Data Tim Semua Kategori',
                    text:      '<i class="fa fa-files-o"></i> CSV',
                    titleAttr: 'CSV',
                    className: 'btn btn-default btn-sm',
                    exportOptions: {
                        columns: ':visible'
                    }
                    },
                    {
                    extend:    'excel',
                    title       : 'LTDC 2019 - Data Tim Semua Kategori',
                    text:      '<i class="fa fa-files-o"></i> Excel',
                    titleAttr: 'Excel',
                    className: 'btn btn-default btn-sm',
                    exportOptions: {
                        columns: ':visible'
                    }
                    },
                    {
                    extend:    'pdf',
                    title       : 'LTDC 2019 - Data Tim Semua Kategori',
                    text:      '<i class="fa fa-file-pdf-o"></i> PDF',
                    titleAttr: 'PDF',
                    className: 'btn btn-default btn-sm',
                    exportOptions: {
                        columns: ':visible'
                    }
                    },               
                    {
                    extend:    'print',
                    title       : 'LTDC 2019 - Data Tim Semua Kategori',
                    text:      '<i class="fa fa-print"></i> Print',
                    titleAttr: 'Print',
                    className: 'btn btn-default btn-sm',
                    exportOptions: {
                        columns: ':visible'
                    }
                    },  
                ]
            } );
            codeListTable.buttons().container().appendTo('#tableActions');

            $("#tabel-analog-extend").DataTable();
            AnalogTable = $("#tabel-analog").DataTable();
            new $.fn.dataTable.Buttons( AnalogTable, {
                buttons: [
                    {
                    extend      : 'copy',
                    title       : 'LTDC 2019 - Data Tim Analog',
                    text        : '<i class="fa fa-files-o"></i> Copy',
                    titleAttr: 'Copy',
                    className: 'btn btn-default btn-sm'
                    },
                    {
                    extend:    'csv',
                    title       : 'LTDC 2019 - Data Tim Analog',
                    text:      '<i class="fa fa-files-o"></i> CSV',
                    titleAttr: 'CSV',
                    className: 'btn btn-default btn-sm',
                    exportOptions: {
                        columns: ':visible'
                    }
                    },
                    {
                    extend:    'excel',
                    title       : 'LTDC 2019 - Data Tim Analog',
                    text:      '<i class="fa fa-files-o"></i> Excel',
                    titleAttr: 'Excel',
                    className: 'btn btn-default btn-sm',
                    exportOptions: {
                        columns: ':visible'
                    }
                    },
                    {
                    extend:    'pdf',
                    title       : 'LTDC 2019 - Data Tim Analog',
                    text:      '<i class="fa fa-file-pdf-o"></i> PDF',
                    titleAttr: 'PDF',
                    className: 'btn btn-default btn-sm',
                    exportOptions: {
                        columns: ':visible'
                    }
                    },               
                    {
                    extend:    'print',
                    title       : 'LTDC 2019 - Data Tim Analog',
                    text:      '<i class="fa fa-print"></i> Print',
                    titleAttr: 'Print',
                    className: 'btn btn-default btn-sm',
                    exportOptions: {
                        columns: ':visible'
                    }
                    },  
                ]
            } );
            AnalogTable.buttons().container().appendTo('#tableAnalogActions');

            $("#tabel-mikro-extend").DataTable();
            MikrokontrollerTable = $("#tabel-mikro").DataTable();
            new $.fn.dataTable.Buttons( MikrokontrollerTable, {
                buttons: [
                    {
                    extend      : 'copy',
                    title       : 'LTDC 2019 - Data Tim Mikrokontroller',
                    text        : '<i class="fa fa-files-o"></i> Copy',
                    titleAttr: 'Copy',
                    className: 'btn btn-default btn-sm'
                    },
                    {
                    extend:    'csv',
                    title       : 'LTDC 2019 - Data Tim Mikrokontroller',
                    text:      '<i class="fa fa-files-o"></i> CSV',
                    titleAttr: 'CSV',
                    className: 'btn btn-default btn-sm',
                    exportOptions: {
                        columns: ':visible'
                    }
                    },
                    {
                    extend:    'excel',
                    title       : 'LTDC 2019 - Data Tim Mikrokontroller',
                    text:      '<i class="fa fa-files-o"></i> Excel',
                    titleAttr: 'Excel',
                    className: 'btn btn-default btn-sm',
                    exportOptions: {
                        columns: ':visible'
                    }
                    },
                    {
                    extend:    'pdf',
                    title       : 'LTDC 2019 - Data Tim Mikrokontroller',
                    text:      '<i class="fa fa-file-pdf-o"></i> PDF',
                    titleAttr: 'PDF',
                    className: 'btn btn-default btn-sm',
                    exportOptions: {
                        columns: ':visible'
                    }
                    },               
                    {
                    extend:    'print',
                    title       : 'LTDC 2019 - Data Tim Mikrokontroller',
                    text:      '<i class="fa fa-print"></i> Print',
                    titleAttr: 'Print',
                    className: 'btn btn-default btn-sm',
                    exportOptions: {
                        columns: ':visible'
                    }
                    },  
                ]
            } );
            MikrokontrollerTable.buttons().container().appendTo('#tableMikroActions');
        
        });
    </script>

</body>

</html>