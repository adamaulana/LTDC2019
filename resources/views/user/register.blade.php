<!DOCTYPE html>
<html lang="en">

<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('ela/images/favicon.png')}}">
    <title>Ela - Bootstrap Admin Dashboard Template</title>
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
</head>

<style>
    .login-form{
        padding:0px;
    }

    .regis-logo{
        width:40%;
        margin:0px;
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
                <div class="row justify-content-center">
                <div class="col-lg-6 col-xs-12">
                        <div class="card">
                            <div class="login-form">
                                <center>
                                <h3>Pendaftaran Peserta LTDC UM 2019
                                    <br><br>                                
                                    <img src="{{ asset('ela/images/popo.png')}}" alt="popo" class="regis-logo">                                
                                </h3>
                                </center>
                                <form action="{{url('/peserta/tambah')}}" method="post">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label>Identitas Tim</label>
                                        <input type="text" class="form-control" placeholder="Nama Tim" name="tim_nama">                                        
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Nama Instansi" name="tim_instansi">                                        
                                    </div>
                                    <div class="form-group">                                        
                                        <input type="text" class="form-control" placeholder="Username Instagram" name="tim_ig">
                                    </div>
                                    <br>

                                    <div class="form-group">
                                        <label>Ketua Tim</label>
                                        <input type="text" class="form-control" placeholder="Nama Lengkap Ketua" name="ketua_nama">                                        
                                    </div>

                                    <div class="form-group">
                                        <select name="" id="" class="form-control">
                                            <option>-- Pilih Jenis Kelamin --</option>
                                            <option value="1">Laki - Laki</option>
                                            <option value="2">Perempuan</option>
                                        </select>
                                    </div>

                                    <div class="form-group">                                        
                                        <input type="email" class="form-control" placeholder="Email Ketua">
                                    </div>

                                    <div class="form-group">                                        
                                        <input type="password" class="form-control" placeholder="Password">
                                    </div>

                                    <div class="form-group">                                        
                                        <input type="number" class="form-control" placeholder="Nomor Telepon Ketua">
                                    </div>

                                    <div class="form-group">                                        
                                        <label>Pembimbing Tim</label>
                                        <input type="number" class="form-control" placeholder="Nama Lengkap Pembimbing">
                                    </div>

                                    <div class="form-group">                                        
                                        <select name="pembimbing_jk" id="" class="form-control">
                                            <option>-- Pilih Jenis Kelamin --</option>
                                            <option value="1">Laki - Laki</option>
                                            <option value="2">Perempuan</option>
                                        </select>
                                    </div>

                                    <div class="form-group">                                        
                                        <input type="text" name="pembimbing_nip" class="form-control" placeholder="Nomor Induk Pegawai">
                                    </div>

                                    <div class="form-group">                                        
                                        <input type="text" name="pembimbing_telepon" class="form-control" placeholder="Nomor Telepon Pembimbing">
                                    </div>
                                    
                                    <div class="form-group">                                        
                                        <input type="text" name="pembimbing_alamat" class="form-control" placeholder="Alamat Pembimbing">
                                    </div>



                                    </div>
                                    <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Daftar</button>
                                    <div class="register-link m-t-15 text-center">
                                        <p>Already have account ? <a href="#"> Sign in</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
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

</body>

</html>