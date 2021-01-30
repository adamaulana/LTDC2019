@php
use  App\Http\Controllers\adminController;
$control = new adminController;
$atur = $control->settingRegis();
$buka = $control->bukaRegis();
$maintenance = $control->maintenance();
@endphp
<!DOCTYPE html>
<html lang="en">

<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="shortcut icon" href="{{asset('stellar/images/popo.png')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('stellar/images/popo.png')}}" type="image/x-icon">
    <title>LTDC 2019 - Pendaftaran</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('ela/css/lib/bootstrap/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('ela/css/helper.css')}}" rel="stylesheet">
    <link href="{{ asset('ela/css/style.css')}}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    @if($atur != 1)
        <script>
            window.location.href = "{{url('/pendaftaran_ditutup')}}";
        </script>    
    @endif
    @if($buka != 1)
        <script>
            window.location.href = "{{url('/pendaftaran_belumbuka')}}";
        </script>        
    @endif
    @if($maintenance != 0)
        <script>
            window.location.href = "{{url('/maintenance')}}";
        </script>    
    @endif
</head>

<style>

    body{        
        background:url('{{asset('stellar/images/webbackg.png')}}');
        background-size:cover;
    }
    #main-wrapper{
        background-color:rgba(0, 0, 0, 0.1);
        min-height:100vh;
    }
    .login-form{
        padding:0px;
    }

    .regis-logo{
        width:100%;
        margin:0px;
    }

    .card{
        padding-left:10%;
        padding-right:10%;
    }
</style>

<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">

        <div class="unix-login">
            <div class="container-fluid">
                <div class="row">                     
                <div class="col-lg-12 col-xs-12">                                                              
                    <div class="card">   
                        <form action="{{url('/peserta/tambah')}}" method="post">                     
                            {{csrf_field()}}
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-2"></div>
                                        <div class="col-md-8">
                                            <!-- <img src="{{asset('stellar/images/popo.png')}}" alt="" class="regis-logo"> -->
                                            <center>
                                            <br>
                                            <br>
                                            <h1>
                                                <b>Line Tracer Design & Contest 2019</b><br>
                                                <small>Form Registrasi Tim</small>
                                            </h1>
                                            <br>
                                            <br>
                                            </center>
                                        </div>
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

                                    <div class="alert alert-info" role="alert">
                                        Masukkan Username Instagram salah satu anggota dan follow akun Instagram LTDC 2018 : @ltdc_wseum
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
                                    <a class="btn btn-warning" href="{{url('/')}}" style="width:100%;">Kembali</a> <br>
                                </div>                            
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

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
    <script>
        // $(document).ready(function(){
        //     $('#team_kategori').change(function(){
        //         var tipe = $("#team_kategori").val();
        //         if(tipe == 2){
        //             $("#team_pembimbing").attr('disabled','disabled');
        //             $("#team_jenis_kelamin_pembimbing").attr('disabled','disabled');
        //             $("#team_nip_pembimbing").attr('disabled','disabled');
        //             $("#team_notelpon_pembimbing").attr('disabled','disabled');    
        //             $("#team_alamat_pembimbing").attr('disabled','disabled');                                        
        //         }else{
        //             $("#team_pembimbing").removeAttr('disabled');
        //             $("#team_jenis_kelamin_pembimbing").removeAttr('disabled');
        //             $("#team_nip_pembimbing").removeAttr('disabled');
        //             $("#team_notelpon_pembimbing").removeAttr('disabled');
        //             $("#team_alamat_pembimbing").removeAttr('disabled');                                        
        //         }
        //     });
        // });
    </script>

</body>

</html>