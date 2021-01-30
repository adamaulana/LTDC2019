<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LTDC 2019 - Pelengkapan Berkas Ditutup</title>
    
    

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('ela/css/lib/bootstrap/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
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
                             <b> LTDC 2019 - Waktu Pelengkapan Berkas Habis  </b> <br>
                            <small class="text-muted">Mohon Maaf Waktu Melengkapi Berkas Sudah Habis</small><br>
                            <small class="text-muted">Hubungi Panitia untuk Info Lebih Lanjut</small><br>
                            <small> <b>+6282255604004 (Nanda)</b></small> <br> <br>
                            </h5>                                                       
                            <a class="btn btn-warning" href="{{url('/')}}">Kembali ke Halaman Awal</a> <br> 
                            
                    </div>
                </div>
            </div>
        </div>



    <script src="{{ asset('ela/js/lib/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->    
    <script src="{{ asset('ela/js/lib/bootstrap/js/bootstrap.min.js')}}"></script>        
    </body>

</html>