<!DOCTYPE html>
<html lang="en">
@if(!Session::has('id_tim') && !Session::has('verif_email'))        
    <script>        
        window.location.href = "login";
    </script>
@else
    @if(Session::get('verif_email') != 1)
    <script>
        window.location.href = "verif";
    </script>
    @endif    
@endif
@include('user/user_head_dashboard')
<style>
    td{text-align:center !important;}
    .instruksi-bayar{font-size:14px;}    
</style>
<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">
        @include('user/user_header_dashboard')
        @include('user/user_sidebar_dashboard')
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">File Lomba</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Petunjuk Registrasi</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                @foreach($datas as $data)
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-title">
                            </div>
                            <div class="card-body"> 
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>                                        
                                            <th>Nama File</th>
                                            <th>Action</th>
                                        </thead>
                                        <tbody>
                                            @foreach($rulebook as $rule)
                                            <tr>
                                            <td>{{$rule->nama_file}}</td>
                                                <td>
                                                    <a href="{{$rule->link}}" target="_blank" class="btn btn-primary">
                                                        Lihat File &nbsp;
                                                        <span class="fa fa-file"></span>
                                                    </a>
                                                </td>
                                            </tr>
                                            @endforeach
                                            
                                            @if($data->ben == 1 && $data->bukti_bayar != NULL)
                                                @foreach($lombas as $lomba)
                                                <tr>                                            
                                                    <td>{{$lomba->nama_file}}</td>
                                                    <td>
                                                        <a href="{{$lomba->link}}" target="_blank" class="btn btn-primary">
                                                            Lihat File &nbsp;
                                                            <span class="fa fa-file"></span>
                                                        </a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                                <small class="text-danger">
                                    *File - file lomba selain <b>Rulebook</b> baru dapat dilihat setelah melakukan pembayaran dan divalidasi oleh bendahara
                                </small>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                @endforeach
                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
            <!-- footer -->
            <footer class="footer"> © 2019 All rights reserved. Template designed by <a href="https://colorlib.com">AMD</a></footer>
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
            $("#myTable").DataTable();
        });
    </script>

</body>

</html>