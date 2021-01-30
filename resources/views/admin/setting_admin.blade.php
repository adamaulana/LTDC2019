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
                    <h3 class="text-primary">Pengaturan</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Pengaturam</li>
                    </ol>
                </div>
            </div>
          <!-- Container fluid  -->
          <div class="container-fluid">
            <!-- Start Page Content -->
            <div class="row">
                <div class="col-lg-12">
                <div class="card">  
                    @foreach($result as $pengaturan)                      
                            <div class="card-title">
                                <p>Pengaturan Web  :
                                <button class="btn-sm btn-warning" id="atur-button">
                                    <span class="fa fa-gear"></span>&nbsp;
                                    Atur
                                </button>
                                </p>
                            </div>
                            
                            <div class="card-body row">
                            <form action="{{url('/admin/atur_web')}}" method="post">
                                {{csrf_field()}}
                                <div class="col-lg-12 row" id="pengaturan-area">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="">Tanggal Registrasi Dibuka</label>
                                            <input type="date" class="form-control" value="{{$pengaturan->tgl_buka}}" name="regis_buka" required>
                                        </div>                                
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="">Tanggal Registrasi Ditutup</label>
                                            <input type="date"  class="form-control" value="{{$pengaturan->tgl_tutup}}" name="regis_tutup" required>
                                        </div>                                
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="">Kuota Analog</label>
                                            <input type="number" class="form-control" value="{{$pengaturan->kuota_analog}}" name="kuota_analog" required>
                                        </div>                                
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="">Kuota Mikrokontroller</label>
                                            <input type="number" class="form-control" value="{{$pengaturan->kuota_mikro}}" name="kuota_mikro" required>
                                        </div>                                
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="">Status Maintenance</label>
                                            <select name="maintenance" class="form-control" required>
                                                <option value="1" @if($pengaturan->maintenance == 1) selected @endif>Aktif</option>
                                                <option value="0" @if($pengaturan->maintenance == 0) selected @endif>Nonaktif</option> 
                                            </select>
                                        </div>                                
                                    </div>

                                                                                                                    <div class="col-lg-6">
                                        <div class="form-group">
                                                <label for="">Batas Pengumpulan Berkas</label>                                                
                                                <input type="date"  class="form-control" value="{{$pengaturan->batas_berkas}}" name="batas_berkas" required>
                                            </div>                                
                                        </div>

                                    <div class="col-lg-12">
                                        <button class="btn btn-warning" type="submit"><span class="fa fa-save"></span>&nbsp;Simpan Pengaturan</button>
                                        <button class="btn btn-success" type="reset"><span class="fa fa-undo"></span>&nbsp;Reset</button>
                                        <br><br>
                                    </div>
                                </div>
                            </form>
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Kuota Analog</th>
                                                    <th>Kuota Mikro</th>
                                                    <th>Register Dibuka</th>												
                                                    <th>Register Ditutup</th>
                                                    <th>Batas Melengkapi Berkas</th>
                                                    <th>Maintenance</th>
                                                </tr>
                                            </thead>
                                            <tbody>                                                
                                                <tr>
                                                    <td>{{$pengaturan->kuota_analog}} Tim</td>
                                                    <td>{{$pengaturan->kuota_mikro}} Tim</td>
                                                    <td>{{$pengaturan->tgl_buka}}</td>
                                                    <td>{{$pengaturan->tgl_tutup}}</td>                                                
                                                    <td>{{$pengaturan->batas_berkas}}</td>                                                
                                                    <td>
                                                        @if($pengaturan->maintenance == 0)
                                                        <span class="label label-success">Nonaktif</span>
                                                        @else
                                                        <span class="label label-danger">Aktif</span>
                                                        @endif
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

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">                                            
                                <div class="card-title">
                                    <p>Admin :
                                    <button class="btn-sm btn-warning" id="atur-admin">
                                        <span class="fa fa-plus"></span>&nbsp;
                                        Tambah Admin
                                    </button>
                                    </p>
                                </div>
                                
                                <div class="card-body row">
                                <div class="col-lg-12" id="admin-area">
                                    <form action="{{url('/admin/tambah_admin')}}" method="post">
                                        {{csrf_field()}}
                                        <div class="col-lg-12 row" id="pengaturan-area">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Username Admin</label>
                                                    <input type="email" class="form-control" name="username_admin" required>
                                                </div>                                
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Password Admin</label>
                                                    <input type="text"  class="form-control" name="pwd_admin" required>
                                                </div>                                
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Nama Admin</label>
                                                    <input type="text" class="form-control" name="nama_admin" required>
                                                </div>                                
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Jabatan</label>
                                                    <select name="jabatan_admin" class="form-control">
                                                        <option value="1">Super User</option>
                                                        <option value="2">Sekretaris</option>
                                                        <option value="3">Bendahara</option>
                                                        <option value="4">Sponsor</option>
                                                        <option value="5">Teknisi</option>
                                                        <option value="6">Humas</option>
                                                    </select>
                                                </div>                                
                                            </div>


                                            <div class="col-lg-12">
                                                <button class="btn btn-warning" type="submit"><span class="fa fa-save"></span>&nbsp;Simpan Pengaturan</button>
                                                <button class="btn btn-success" type="reset"><span class="fa fa-undo"></span>&nbsp;Reset</button>
                                                <br><br>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                    <div class="col-lg-12">
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Username</th>
                                                        <th>Jabatan</th>												
                                                        <th>Nama</th>  
                                                        <th>Action</th>                                                      
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php
                                                        $no = 1 
                                                    @endphp 
                                                    @foreach($dataz as $admins)                                                   
                                                    <tr>
                                                        <td>{{$no++}}</td>
                                                        <td>{{$admins->username}}</td>
                                                        <td>
                                                            @if($admins->tipe == 1)
                                                               Superuser     
                                                            @elseif($admins->tipe == 2)
                                                                Sekretaris
                                                            @elseif($admins->tipe == 3)
                                                                Bendahara
                                                            @elseif($admins->tipe == 4)
                                                                Sponsor
                                                            @elseif($admins->tipe == 5)
                                                                Teknisi
                                                            @endif    
                                                        </td>
                                                        <td>{{$admins->nama_admin}}</td>                                                        
                                                        <td>
                                                            <a href="{{url('/admin/hapus/'.$admins->id)}}" class="btn btn-danger"><span class="fa fa-trash"></span></a>
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
            $("#tabel-sekretaris").DataTable();
            $("#tabel-bendahara").DataTable();

            $("#pengaturan-area").hide();
            $("#atur-button").click(function(){
                $("#pengaturan-area").slideToggle();
            });

            $("#admin-area").hide();
            $("#atur-admin").click(function(){
                $("#admin-area").slideToggle();
            });
        });
    </script>

</body>

</html>