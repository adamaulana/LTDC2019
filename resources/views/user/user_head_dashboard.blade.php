@php
use  App\Http\Controllers\adminController;
$control = new adminController;
$maintenance = $control->maintenance();
$berkas      = $control->berkas();
@endphp
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" href="{{asset('stellar/images/popo.png')}}" type="image/x-icon">
    <title>LTDC 2019 - Dashboard User</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('ela/css/lib/bootstrap/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('ela/css/helper.css')}}" rel="stylesheet">
    <link href="{{ asset('ela/css/style.css')}}" rel="stylesheet">
    <link rel="shortcut icon" href="{{asset('stellar/images/popo.png')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('stellar/images/popo.png')}}" type="image/x-icon">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
@if($maintenance != 0)
    <script>
        window.location.href = "{{url('/maintenance')}}";
    </script>    
@endif

@if($berkas != 0)
    <script>
        window.location.href = "{{url('/berkas_tutup')}}";
    </script>    
@endif
</head>