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
                    <h3 class="text-primary">Pendaftaran</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Pendaftaran</li>
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
                            @if(session('manual_berhasil'))
                                <div class="alert alert-danger">
                                {{session('manual_berhasil')}}    
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>                            
                            @endif
                        </div>
                        <div class="card-body">
                            <form action="{{url('/peserta/tambah_manual')}}" method="post">                     
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-2"></div>
                                        </div>
                                    </div>                            
                                    <div class="col-md-6 col-lg-6">
                                        <h2> <span class="fa fa-group"></span>&nbsp;Identitas Tim</h2>
                                        <br>
                                        <div class="form-group">
                                            <label for="team_name">Nama Tim <small class="text-danger">*</small></label>
                                            <input type="text" class="form-control" name="team_name" id="team_name" required="required">                                
                                        </div>


                                        <div class="form-group">
                                            <label for="team_kategori">Kategori Lomba <small class="text-danger">*</small></label>
                                            <select id="team_kategori" name="team_kategori" class="form-control">
                                                <option value="1">Analog</option>
                                                <option value="2">Mikrokontroller</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="team_instation">Nama Instansi <small class="text-danger">*</small></label>
                                            <input type="text" class="form-control" id="team_instation" name="team_instation" required="required">                                
                                        </div>


                                        <div class="form-group">
                                            <label for="team_isntagram">Username Instagram <small class="text-danger">*</small></label>
                                            <input type="text" class="form-control" id="team_instagram" name="team_instagram" required="required">                                
                                        </div>                            


                                        <h2> <span class="fa fa-user"></span>&nbsp;Identitas Ketua</h2>
                                        <br>
                                        
                                        <div class="form-group">
                                            <label for="team_ketua">Nama Ketua Tim <small class="text-danger">*</small></label>
                                            <input type="text" class="form-control" id="team_ketua" name="team_ketua" required="required">                                
                                        </div>

                                        <div class="form-group">
                                            <label for="team_jenis_kelamin">Jenis Kelamin <small class="text-danger">*</small> </label>
                                            <select name="team_jenis_kelamin" id="team_jenis_kelamin" class="form-control" required="required">
                                                <option value="1">Laki - Laki</option>
                                                <option value="2">Perempuan</option>
                                            </select>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="team_email_ketua">Email Ketua Tim <small class="text-danger">*</small></label>
                                            <input type="email" class="form-control" id="team_email_ketua" name="team_email_ketua" required="required">                                
                                            <small class="text-info form-text">Email ketua yang nantinya digunakan untuk login akun tim pada website</small>
                                        </div>

                                        <div class="form-group">
                                            <label for="team_ketua_password">Password <small class="text-danger">*</small></label>
                                            <input type="password" class="form-control" id="team_ketua_password" name="team_ketua_password" required="required">                                
                                        </div>

                                        <div class="form-group">
                                            <label for="team_ketua_notelpon">Nomor Telepon Ketua <small class="text-danger">*</small></label>
                                            <input type="number" class="form-control" id="team_ketua_notelpon" name="team_ketua_notelpon" required="required">                                
                                        </div>                            
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <h2>Identitas Anggota</h2>
                                        <br>
                                        <div class="form-group">
                                            <label for="team_anggota">Nama Anggota <small class="text-danger">*</small></label>
                                            <input type="text" class="form-control" id="team_anggota" name="team_anggota" required="required">                                
                                        </div>

                                        <div class="form-group">
                                            <label for="team_jenis_kelamin_anggota">Jenis Kelamin <small class="text-danger">*</small></label>
                                            <select name="team_jenis_kelamin_anggota" id="team_jenis_kelamin" class="form-control" required="required">
                                                <option value="1">Laki - Laki</option>
                                                <option value="2">Perempuan</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="team_notelpon_anggota">Nomor Telepon Anggota <small class="text-danger">*</small></label>
                                            <input type="text" class="form-control" id="team_notelpon_anggota" name="team_notelpon_anggota" required="required">                                
                                        </div>

                                        <div class="alert alert-danger">
                                            <b>Pembimbing</b><br>
                                            Wajib untuk lomba kategori Analog dan
                                            Tidak Wajib untuk kategori Microcontroller
                                        </div>

                                        <h2>Identitas Pembimbing</h2>
                                        <br>

                                        <div class="form-group">
                                            <label for="team_pembimbing">Nama Lengkap Pembimbing </label>
                                            <input type="text" class="form-control" id="team_pembimbing" name="team_pembimbing">                                
                                        </div>

                                        <div class="form-group">
                                            <label for="team_jenis_kelamin_pembimbing">Jenis Kelamin</label>
                                            <select name="team_jenis_kelamin_pembimbing" id="team_jenis_kelamin_pembimbing" class="form-control">
                                                <option value="1">Laki - Laki</option>
                                                <option value="2">Perempuan</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="team_anggota">Nomor Induk Pegawai (Optional)</label>
                                            <input type="text" class="form-control" id="team_nip_pembimbing" name="team_nip_pembimbing">                                
                                        </div>

                                        <div class="form-group">
                                            <label for="team_notelpon_pembimbing">Nomor Telepon Pebimbing </label>
                                            <input type="text" class="form-control" id="team_notelpon_pembimbing" name="team_notelpon_pembimbing">                                
                                        </div>

                                        <div class="form-group">
                                            <label for="team_alamat_pembimbing">Alamat Pembimbing </label>
                                            <textarea class="form-control" style="height:139px;" id="team_alamat_pembimbing" name="team_alamat_pembimbing"></textarea>                                
                                        </div>

                                    </div>

                                    <div class="col-md-12">
                                        <button class="btn btn-primary" type="submit" style="width:100%;">Daftar</button>
                                        <br>                                
                                    </div>                            
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <!-- End PAge Content -->
        </div>
        <!-- End Container fluid  -->
            <!-- footer -->

                               
               
            <!-- footer -->
            <footer class="footer"> © 2018 All rights reserved. Template edited by <a href="https://colorlib.com">WSE</a></footer>
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
        <!-- <script>
        $(document).ready(function(){
            $('#team_kategori').change(function(){
                var tipe = $("#team_kategori").val();
                if(tipe == 2){
                    $("#team_pembimbing").attr('disabled','disabled');
                    $("#team_jenis_kelamin_pembimbing").attr('disabled','disabled');
                    $("#team_nip_pembimbing").attr('disabled','disabled');
                    $("#team_notelpon_pembimbing").attr('disabled','disabled');    
                    $("#team_alamat_pembimbing").attr('disabled','disabled');                                        
                }else{
                    $("#team_pembimbing").removeAttr('disabled');
                    $("#team_jenis_kelamin_pembimbing").removeAttr('disabled');
                    $("#team_nip_pembimbing").removeAttr('disabled');
                    $("#team_notelpon_pembimbing").removeAttr('disabled');
                    $("#team_alamat_pembimbing").removeAttr('disabled');                                        
                }
            });
        });
    </script> -->
</body>

</html>