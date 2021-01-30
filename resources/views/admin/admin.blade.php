<!DOCTYPE html>
<html lang="en">
@if(!Session::has('id_admin'))
    <script type="text/javascript">
        window.location = "{{url('/login_admin')}}";//here double curly bracket
    </script>
@endif

@include('admin/admin_head')
<body class="fix-header fix-sidebar">
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
                    <h3 class="text-primary">Dashboard</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->

            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-md-3">
                        <div class="card bg-primary p-20">
                            <div class="media widget-ten">
                                <div class="media-left meida media-middle">
                                    <span><i class="ti-id-badge f-s-40"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2 class="color-white">{{$countAnalog}}</h2>
                                    <p class="m-b-0">Tim Analog</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card bg-pink p-20">
                            <div class="media widget-ten">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-trophy f-s-40"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2 class="color-white">{{$countMikro}}</h2>
                                    <p class="m-b-0">Tim Mikrokontroller</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <a href="{{url('/admin/tim_lolos/')}}">
                        <div class="card bg-success p-20">
                            <div class="media widget-ten">
                                <div class="media-left meida media-middle">
                                    <span><i class="ti-layout-tab f-s-40"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2 class="color-white">{{$countLolos}}</h2>
                                    <p class="m-b-0">Tim Lolos Administrasi</p>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-md-3">
                        <div class="card bg-danger p-20">
                            <div class="media widget-ten">
                                <div class="media-left meida media-middle">
                                    <span><i class="ti-wallet f-s-40"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2 class="color-white">{{$countDis}}</h2>
                                    <p class="m-b-0">Tim Trerdiskualifikasi</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- /# column -->
                    <div class="col-lg-6">
                        <div class="card">                        
                            <div class="card-title">
                                <h4>Tim Butuh Perhatian Sekretaris</h4>
                            </div>
                            <div class="card-body">
								<div class="table-responsive">
									<table class="table table-hover" id="tabel-sekretaris">
										<thead>
											<tr>
												<th>Nama Tim</th>												
												<th>Type</th>
                                                <th>Action</th>
											</tr>
										</thead>
										<tbody>
                                            @foreach($sek as $datas)
                                            <tr>
                                                <td>{{$datas->team_name}}</td>                                                
                                                <td>
                                                    @if($datas->team_type == 1)
                                                        <span class="label label-warning">Analog</span>
                                                    @else
                                                        <span class="label label-primary">Mikrokontroller</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{url('/admin/team/detail/'.$datas->id)}}" class="btn btn-primary"><span class="fa fa-eye" title="Lihat Tim"></span></a>                                                            
                                                </td>
                                            </tr>
                                            @endforeach
										</tbody>
									</table>
								</div>
							</div>                        
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">                        
                            <div class="card-title">
                                <h4>Tim Butuh Perhatian Bendahara</h4>
                            </div>
                            <div class="card-body">
								<div class="table-responsive">
									<table class="table table-hover" id="tabel-bendahara">
										<thead>
											<tr>
												<th>Nama Tim</th>											
												<th>Type</th>
                                                <th>Action</th>
											</tr>
										</thead>
										<tbody>
                                            @foreach($ben as $datas)
                                            <tr>
                                                <td>{{$datas->team_name}}</td>                                                
                                                <td>
                                                    @if($datas->team_type == 1)
                                                        <span class="label label-warning">Analog</span>
                                                    @else
                                                        <span class="label label-primary">Mikrokontroller</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{url('/admin/team/detail/'.$datas->id)}}" class="btn btn-primary"><span class="fa fa-eye" title="Lihat Tim"></span></a>                                                            
                                                </td>
                                            </tr>
                                            @endforeach
										</tbody>
									</table>
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
            $("#tabel-sekretaris").DataTable();
            $("#tabel-bendahara").DataTable();
        });
    </script>

</body>

</html>