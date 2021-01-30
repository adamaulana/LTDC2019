<html>
	<head>
		<meta charset="UTF-8">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE-edge">    <!-- mobile specific metas
    ================================================== -->

		<title>Twibbon LTDC 2018</title>
		<link rel="shortcut icon" href="{{asset('stellar/images/popo.png')}}" type="image/x-icon">
		<link rel="icon" href="{{asset('stellar/images/popo.png')}}" type="image/x-icon">
		
		<link rel="stylesheet" href="{{asset('twibbon/css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{asset('twibbon/css/croppie.css')}}">
		<link rel="stylesheet" href="{{asset('stellar/icon/font-awesome/css/font-awesome.min.css')}}">
		<style>

		.container-fluid{
			min-height:1vh;
			background-color:#f5f5f5;
		}
		.overlay{
			position: absolute;
			top: 0;
			bottom: 0;
			left: 0;
			right: 0;
			margin:0 auto;
			height: 100%;
			width: 100%;	
			z-index: 2;
			background-image:url({{asset('twibbon/Twibbon.png')}});background-repeat:no-repeat;background-size: cover;
			pointer-events: none;
		}

		#twibbon{
			background-repeat:no-repeat;background-size:cover;background-image: url({{asset('twibbon/placeholder-user.png')}});width: 500px !important;height: 500px !important;position: relative;margin:0 auto;
		}

		#image{
			margin: 0 auto;position: absolute;top: 0;bottom: 0;left: 0;right: 0;z-index:1;
		}
		.whitenight{
			position:fixed;
			width:100%;
			height:100%;
			background-color:#fff;
			z-index:99999;
			display:none;
		}

		@media only screen and (max-width:831px){
			.whitenight{
				display:block;
			}
		}
		</style>
	</head>
	<body style="background-color: #C3C3C3;">		
		<div class="whitenight">
			<center>
				<br><br><br><br>
				<img src="{{asset('stellar/images/popo.png')}}" alt="" style="width:20%;margin-top:15%;">
				<h3 style="margin-right:10%;margin-left:10%">Maaf Fitur Twibbon Hanya dapat diakses menggunakan Perangkat Komputer</h3>
				<a href="https://drive.google.com/open?id=1BonogirjsJiwHWxZRmw6uMA0aQTnsWgQ" class="btn btn-danger"><span class="fa fa-download"></span>&nbsp;Download Twibbon</a>
			</center>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-5 col-xs-12">
					<br><br>
					<div id="twibbon" class="img-responsive">	
						<div class="overlay"></div>
						<div id="image"></div>
					</div>

					<br><br>

					<div class="input-group-btn text-center">
							<label class="custom-file-label btn btn-primary" for="fileinput"><span class="fa fa-photo"></span> Cari Foto</label>
							<button id="proses" class="btn btn-success generatetwibbon" data-loading-text="Loading..."><span class="fa fa-refresh"></span> Proses</button>
							<a href="" class="btn btn-warning" id="lihat" data-toggle="modal" data-target="#preview" disabled><span class="fa fa-eye"></span> Preview</a>
							<!-- <a class="btn btn-primary" id="lihat" ><span class="fa fa-eye"> Lihat Preview</a> -->
					  <!-- <div class="custom-file"> -->
					    <input type="file" class="hidden custom-file-input" id="fileinput" accept="image/gif, image/jpeg, image/png" />
					  <!-- </div> -->					    			    
					</div>
			</div>

			<div class="col-md-7 col-xs-12">
					<br><br>
					<div class="panel panel-dafault">
						<!-- <div class="panel-header">Tata Cara Pemasangan Twibbon LTDC</div> -->
						<div class="panel-body">
							<h4>Cara Pemasangan Twibbon LTDC 2019</h4>
							<ol>
								<li>Klik tombol <button class="btn btn-primary"><span class="fa fa-photo"></span>&nbsp;Cari Foto</button> untuk mencari foto yang diinginkan</li>
								<li>Geser Slider atau Drag cursor untuk mengatur dan menyesuaikan posisi foto sesuai keinginan</li>
								<li>Setelah dirasa posisi sudah tepat, klik tombol <a href="#" class="btn btn-success"><span class="fa fa-refresh"></span>&nbsp;Proses</a> untuk menggabungkan Twibbon dengan foto</li>
								<li>Setelah loading proses selesai, klik tombol  <a href="#" class="btn btn-warning"><span class="fa fa-eye"></span>&nbsp;Preview</a> untuk melihat foto yang telah tergabung dengan Twibbon</li>
								<li>Klik tombol <button class="btn btn-success"><span class="fa fa-download"></span>&nbsp;Download</button> pada bagian kanan bawah panel untuk mengunduh foto yang sudah tergabung dengan Twibbon</li>
								<li>Kamu bisa mengunggah foto hasil twibbon ke media sosialmu</li>
								<li><b>Selesai</b></li>
							</ol>
						</div>
					</div>
					<div class="panel panel-dafault">
						<!-- <div class="panel-header">Tata Cara Pemasangan Twibbon LTDC</div> -->
						<div class="panel-body">
							<h4>Caption Twibbon LTDC 2019</h4>
							<p style="padding:10px; background-color:#ededed;">
							<b>“Victory is not always winning the battle, but rising every time you fall.”<br>
								-Napoleon Bonaparte-<br>
								.<br>
								Hi! My Name is ... and I am ready to fight on LTDC 2019<br>
								.<br>
								Are you ready for LTDC 2019 on 25th-26th September??<br>
								Let your battle begins!!<br>
								.<br>
								#LTDC2019 #GoPopoRanger #WSEUM #WSE #GOKIPROK #LineTracer #komunitasrobotmalang #komunitasrobotindonesia #tingkatnasional
							</b>
							</p>

							NB :<br>
							<small class="text-danger">
								- Ganti tanda "...." dengan nama kamu<br>
								- Jangan lupa tag Instagram @ltdc_wseum dan @workshop_elektroum
							</small>
						</div>
					</div>
			</div>
		</div>


			<!-- Modal -->
			<div class="modal fade" id="preview" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
			    <div class="modal-content">
			      <div class="modal-header">			        
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			      	<div class="row text-center">
			      		<div class="col-md-2"></div>
			      		<div class="col-md-8">
					        <div id="hasil" style="float:left;">
										<img class="img-responsive" id="hasilgambar" src="" alt="Hasil">
									</div>
								</div>
								<div class="col-md-2"></div>
							</div>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
			        <a href="{{asset('croppie/twibbon.png')}}" class="btn btn-success" id="hasillink"><span class="fa fa-download"></span>&nbsp;Download</a>
			      </div>
			    </div>
			  </div>
			</div>
			<br>
			<div class="text-center">
        <p>Copyright 2019 - Workshop Elektro Universitas Negeri Malang</p><strong>
      </div>
		</div>

        <script src="{{asset('twibbon/js/jquery-3.2.1.slim.min.js')}}"></script>
        <script src="{{asset('twibbon/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('twibbon/js/croppie.min.js')}}"></script>
        <script src="{{asset('twibbon/js/html2canvas.js')}}"></script>
        <script src="{{asset('twibbon/js/popper.min.js')}}"></script>
        
				<script>
					$(document).ready(function(){
						// Initialized Croppie
						var croppie_div = $("#image").croppie({
							viewport: {
								width: 500,
								height: 500,
								boundary: { width: 500, height: 500 }
							}
						});
						// Sets the image from the url # Doesnt Work
						
						function readURL(input) {
						if (input.files && input.files[0]){
								var reader = new FileReader();
								reader.onload = function(e) {
									croppie_div.croppie('bind', {
										url: e.target.result
									});
								}
								reader.readAsDataURL(input.files[0]);
							}
						}

						$("#fileinput").change(function(){
							readURL(this);
						});

						
						$("#proses").click(function(){
							var $btn 	= $(this);
							$btn.button('loading');
							setTimeout(function(){
								$btn.button('reset')
								$("#lihat").removeAttr("disabled");
							},2000);
						});

						// $("#proses").on('click', function(e){
							
							
						// });

						$("#lihat").on('click', function(e){
							setTimeout(function(){
								$("#lihat").attr( "disabled", "disabled" );
							}, 500);
						});

						$('.generatetwibbon').on('click', function(e){
							setTimeout(function(){
								var elements = document.getElementById('twibbon');
								let opt = { async: true, imageTimeout: 50000,foreignObjectRendering:true};
								html2canvas(elements,opt).then(canvas => {	
									//document.getElementById('hasil').appendChild(canvas);
									var image = canvas.toDataURL("image/png").replace(/^data:image\/[^;]+/, 'data:application/octet-stream');;
									var link = document.getElementById('hasillink');
									var gambar = document.getElementById('hasilgambar');
									gambar.src=image;
									link.download = "Twibbon_LTDC.png";
									link.href = image;
								});
							}, 1000);
						});
					});
					</script>
	</body>
</html>