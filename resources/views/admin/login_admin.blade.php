<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LTDC 2019 - Login Admin</title>
    @if(Session::has('id_admin'))
        <script>
            window.location.href = "{{url('/admin')}}";
        </script>
    @endif
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('ela/css/lib/bootstrap/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="shortcut icon" href="{{asset('stellar/images/popo.png')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('stellar/images/popo.png')}}" type="image/x-icon">
    <link href="{{ asset('ela/css/helper.css')}}" rel="stylesheet">
    <link href="{{ asset('ela/css/style.css')}}" rel="stylesheet">
    <style>
        body{
            width:100%;
            height:100%;          
            background-color:#ededed;  
            background-size:cover;
        }
        
        .container-fluid{
            min-height:100vh;            
        }
        .flat-card{
            border:1px solid #ededed;
            padding:30px 20px;
            text-align:center;
            background-color:#fff;
            margin-top:36%
        }

        .btn{
            width:100%;
        }

        img{
            width:200px;
            margin-top:-120px;
        }
    </style>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4 col-xs-12">
                    <div class="flat-card">
                        <img src="{{asset('stellar/images/popo.png')}}" alt="">
                        <br><br>
                        <form action="{{url('/admin/login')}}" method="post">
                             <b> LTDC 2019 - Login Administrator </b> <br>
                            <small class="text-muted">Selamat Datang Admin, Silahakan Login</small>
                            </h5>                                                        
                            @if(session('login_admin_gagal'))
                            <div class="alert alert-danger">
                            {{session('login_admin_gagal')}}    
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>                            
                            @endif                            
                            {{csrf_field()}}                            
                            <input type="email" name="email" class="form-control" placeholder="Username Admin">
                            <input type="password" name="pass" class="form-control" placeholder="Password">
                            <br>
                            <button type="submit" class="btn btn-warning">Login</button> <br> <br>
                            <!-- <small class="text-muted">Belum mempunyai akun ? <a href="{{url('/user_register')}}"> Daftar </a< </small> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>



    <script src="{{ asset('ela/js/lib/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->    
    <script src="{{ asset('ela/js/lib/bootstrap/js/bootstrap.min.js')}}"></script>        
    </body>

</html>