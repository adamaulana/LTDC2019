<!DOCTYPE html>
<html lang="en">
@if(!Session::has('id_admin'))
    <script type="text/javascript">
        window.location = "{{url('/login_admin')}}";//here double curly bracket
    </script>
@endif

@include('admin/admin_head')
<body class="fix-header fix-sidebar">
    <style>
        table{
            text-align:center;
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
                    <h3 class="text-primary">File Info</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">File Info</li>
                    </ol>
                </div>
            </div>
          <!-- Container fluid  -->
          <div class="container-fluid">
            <!-- Start Page Content -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">                                            
                                <div class="card-title">
                                    <p>File Info :
                                    <button class="btn-sm btn-warning" id="atur-admin">
                                        <span class="fa fa-plus"></span>&nbsp;
                                        Tambah File
                                    </button>
                                    </p>
                                </div>
                                
                                <div class="card-body row">
                                <div class="col-lg-12" id="admin-area">
                                    <form action="{{url('/admin/tambah_info')}}" method="post" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        <div class="col-lg-12 row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Nama File</label>
                                                    <input type="text" class="form-control" name="nama_file" required>
                                                </div>                                
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Ditujukan Pada Kategori</label>
                                                    <select name="tipe" class="form-control">
                                                        <option value="1">Analog</option>
                                                        <option value="2">Mikrokontroller</option>
                                                        <option value="3">Semua Kategori</option>
                                                    </select>
                                                </div>                                
                                            </div>

                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="">Link File</label>
                                                    <input type="text" class="form-control" name="link_file" required>
                                                </div>                                
                                            </div>                                            

                                            
                                            <div class="col-lg-12">
                                                <button class="btn btn-warning" type="submit"><span class="fa fa-save"></span>&nbsp;Simpan</button>
                                                <button class="btn btn-success" type="reset"><span class="fa fa-undo"></span>&nbsp;Reset</button>
                                                <br><br>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                    <div class="col-lg-12">                                        
                                        <div class="table-responsive">
                                            <table class="table table-bordered" id="tabel-sponsor">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nama File</th>                                                        
                                                        <th>Tujuan</th>  
                                                        <th>Action</th>                                                      
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php
                                                        $no = 1;                                                    
                                                    @endphp
                                                    @foreach($getInfo as $dats)
                                                        <tr>
                                                            <td>{{$no++}}</td>
                                                            <td>{{$dats->nama_file}}</td>
                                                            <td>
                                                                @if($dats->kategori == 1)
                                                                    Analog
                                                                @elseif($dats->kategori == 2)
                                                                    Mikrokontroller
                                                                @else
                                                                    Semua Kategori Tim   
                                                                @endif
                                                            </td>
                                                            <td>
                                                                <div class="btn-group">
                                                                <a href="{{$dats->link}}" target="_blank" class="btn btn-success"><span class="fa fa-eye"></span> </a>
                                                                <a href="{{url('/admin/hapus_info/'.$dats->id)}}" class="btn btn-danger"><span class="fa fa-trash"></span> </a>
                                                                </div>
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
                </div>
            </div>
            <!-- End PAge Content -->
        </div>
        <!-- End Container fluid  -->
            <!-- footer -->

                               
               
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
            $("#tabel-sponsor").DataTable();
            

            $("#admin-area").hide();
            $("#atur-admin").click(function(){
                $("#admin-area").slideToggle();
            });
        });
    </script>

</body>

</html>