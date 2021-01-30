<html lang="en">  
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style type="text/css">
        .verif-box{
            padding: 10px 40px;
            font-size: 23px;
            background-color: #ededed;
            color:#000;
            border-radius:20px;
        }
    </style>
    <body>

        <center>
            <br><br>
            <img src="http://ltdc.um.ac.id/2019/stellar/images/popo.png" width="160px">
            <h2>Halo Tim {{$nama}}</h2>        
            <p>Terimakasih telah mendaftar pada LTDC 2019, dibawah ini adalah kode untuk memverifikasi email, ketikkan kode ini pada form verifikasi email</p>
            <br>
            <!-- <h3 class="alert alert-success"></h3> -->
            <span class="verif-box">
                {{$keyverif}}
            </span>
        </center>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>