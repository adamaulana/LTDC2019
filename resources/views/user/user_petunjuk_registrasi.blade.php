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
                    <h3 class="text-primary">Petunjuk Registrasi</h3> </div>
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
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-title">
                            </div>
                            <div class="card-body"> 
                                <ul class="list-group">                                
					<li class="list-group-item">1. <strong>Lengkapi data</strong> identitas tim dengan data yang <strong>valid</strong>.</li>
          <li class="list-group-item">2. Ketua Tim harus <strong>mendaftarkan anggota</strong> timnya <strong>maksimal 2 orang</strong> (terdiri dari <strong>Ketua dan Anggota</strong>).</li>
          <li class="list-group-item">3. Ketua Tim <strong>mendaftarkan Username Instagram salah satu anggota tim</strong> dan <strong>follow akun Instagram</strong> LTDC 2019 : <strong><a href="https://www.instagram.com/ltdc_wseum" target="_blank">@ltdc_wseum</strong></a> (<strong class="text-danger">akan diperiksa oleh admin</strong>).</li>
          <li class="list-group-item">4. Bila mengikutsertakan pembimbing, lengkapi identitas dengan benar. <strong>Pembimbing</strong> hanya untuk lomba kategori <strong>analog</strong></li>
          <li class="list-group-item">5. <strong>Lakukan transaksi pembayaran</strong> dan <strong>upload foto bukti</strong> transaksi pembayaran melalui menu yang telah disediakan.</li>
          <li class="list-group-item">6. <strong>Periksa dan Teliti</strong> terlebih dahulu data tim/peserta <strong>dengan baik</strong>, <strong>pastikan</strong> data yang ada sudah <strong>benar dan memenuhi persyaratan yang telah ditentukan</strong>.</li>
          <li class="list-group-item">7. Bila dirasa <strong>data sudah benar</strong>, segera lakukan validasi data dengan memilih menu <button class="btn btn-primary" disabled><span class="fa fa-key"></span> Kunci Data</button> yang terletak pada <strong>bagian kanan atas Data Tim</strong> <span class="text-danger">*data tidak bisa divalidasi oleh admin apabila tidak dikunci terlebih dahulu</span></li>
          <li class="list-group-item">8. Data yang <strong>sudah dikunci/divalidasi tidak dapat diubah kembali</strong>.<br /><strong class="text-danger">(* Dapat diubah dengan persetujuan Ketua Pelaksana)</strong></li>
          <li class="list-group-item">9. Bila administrasi sudah lengkap namun belum diberi tindakan oleh admin selama lebih dari 24 jam, segera <strong>hubungi admin</strong>.</li>
          <li class="list-group-item">10. <button class="alert alert-primary"><span class="fa fa-user"></span><strong> Menunggu Proses Validasi</strong></button> berarti data anda masih <strong>dalam proses validasi</strong> oleh admin. </li>
          <li class="list-group-item">11. Bila sudah divalidasi, akan berubah menjadi  <button class="alert alert-success"><span class="fa fa-check"></span><strong> Selamat Anda Lolos Seleksi</strong> </button>yang berarti tim anda <strong>lolos seleksi administrasi</strong> sedangkan <button class="alert alert-warning"><span class="fa fa-close"></span><strong> Maaf Anda Tidak Lolos</strong> </button>  yang berarti <strong>tidak lolos seleksi administrasi</strong>.</li>
          <li class="list-group-item">12. <strong class="text-danger">Registrasi dapat ditutup sewaktu-waktu tanpa pemberitahuan jika kuota atau batas waktu pendaftaran sudah terpenuhi.</strong></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>

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

            $("#tabel-edit-ketua").hide();
            $("#editKetua").click(function(){
                $("#tabel-ketua").hide();
                $("#tabel-edit-ketua").show();
                $
            });
            $("#cancel_ketua").click(function(){
                $("#tabel-ketua").show();
                $("#tabel-edit-ketua").hide();
                $
            });


            $("#tabel-edit-anggota").hide();
            $("#editAnggota").click(function(){
                $("#tabel-anggota").hide();
                $("#tabel-edit-anggota").show();
                $
            });
            $("#cancel_anggota").click(function(){
                $("#tabel-anggota").show();
                $("#tabel-edit-anggota").hide();
                $
            });

            $("#tabel-edit-pembimbing").hide();
            $("#editPembimbing").click(function(){
                $("#tabel-pembimbing").hide();
                $("#tabel-edit-pembimbing").show();
                
            });
            $("#cancel_pembimbing").click(function(){
                $("#tabel-pembimbing").show();
                $("#tabel-edit-pembimbing").hide();
                $
            });

            $("#bukti-bayar-area").hide();
            $("#edit-pembayaran").click(function(){
                $("#bukti-bayar-area").show();
                $(this).hide();
            });
            $("#cancel-pembayaran").click(function(){
                $("#bukti-bayar-area").hide();
                $("#edit-pembayaran").show();
            });
        });
    </script>

</body>

</html>