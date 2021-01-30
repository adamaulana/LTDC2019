@php
use  App\Http\Controllers\adminController;
$control = new adminController;
$maintenance = $control->maintenance();
@endphp
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>LTDC 2019 - Line Tracer Design And Contest | Workshop Elektro | Universitas Negeri Malang</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{asset('stellar/css/base.css')}}">
    <link rel="stylesheet" href="{{asset('stellar/css/vendor.css')}}">
    <link rel="stylesheet" href="{{asset('stellar/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('stellar/css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{asset('stellar/icon/font-awesome/css/font-awesome.min.css')}}">

    <!-- script
    ================================================== -->
    <script src="{{asset('stellar/js/modernizr.js')}}"></script>
    <script src="{{asset('stellar/js/pace.min.js')}}"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="{{asset('stellar/images/popo.png')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('stellar/images/popo.png')}}" type="image/x-icon">
    @if($maintenance != 0)
        <script>
            window.location.href = "{{url('/maintenance')}}";
        </script>    
    @endif
</head>


<body id="top">
    
    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader" class="dots-jump">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>


    <!-- header
    ================================================== -->
    <header class="s-header">

        <div class="row">

            <div class="header-logo">
                <a class="site-logo" href="index.html"><img src="{{asset('stellar/images/logo.png')}}" alt="Homepage"></a>
            </div>
            
            <nav class="header-nav-wrap">
                <ul class="header-nav">
                    <li class="current"><a class="smoothscroll"  href="#home" title="home">Home</a></li>
                    <li><a class="smoothscroll"  href="#about" title="about">Tentang</a></li>
                    <li  id="nav-teknis"><a title="services" style="cursor:pointer">Teknis <span class="fa fa-angle-down"></span></a>
                        <ul class="nav-dropdown">                            
                            <li>
                                <a href="#track" class="smoothscroll">Track</a>
                            </li>
                            <li>
                                <a href="#timeline" class="smoothscroll">Timeline</a>
                            </li>
                            <li>
                                <a href="{{url('/login')}}">Masuk</a>
                            </li>
                            <li>
                                <a href="{{url('/user_register')}}">Daftar</a>
                            </li>
                        </ul>
                    </li>
                    <li id="nav-media"><a style="cursor:pointer" title="works">Media <span class="fa fa-angle-down"></span></a>
                        <ul class="nav-dropdown">                            
                            <li>
                                <a href="#galeri" class="smoothscroll">Galeri</a>
                            </li>
                            <li>
                                <a href="#sponsor">Sponsor & Media Partner</a>
                            </li>
                            <li>
                                <a href="#twibbon-area" class="smoothscroll">Twibbon</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="smoothscroll"  href="#contact" title="contact">Kontak</a></li>
                </ul>
            </nav> <!-- end header-nav-wrap -->
            
            <a class="header-menu-toggle" href="#0">
                <span class="header-menu-icon"></span>
            </a>

        </div> <!-- end row -->

    </header> <!-- end s-header -->


    <!-- home
    ================================================== -->
    <section id="home" class="s-home page-hero target-section" data-parallax="scroll" data-image-src="{{asset('stellar/images/webbackg.png')}}" data-natural-width=3000 data-natural-height=2000 data-position-y=center>

        <div class="shadow-overlay"></div>

        <div class="home-content">

            <div class="row home-content__main">

                <h1>
                LTDC 2019<br>
                <p>" The Bravest Troop On The Dangerous Zone"</p>                
                </h1>                

                <div class="home-content__button">
                    <a href="#about" class="smoothscroll btn btn-animatedbg">
                        Lihat Selengkapanya
                        <br>
                    </a>
                </div>

            </div> <!-- end home-content__main -->

            <div class="home-content__scroll">
                <a href="#about" class="scroll-link smoothscroll">
                    Scroll
                </a>
            </div>

        </div> <!-- end home-content -->



    </section> <!-- end s-home -->


    <!-- Tentang
    ================================================== -->
    <section id="about" class="s-about target-section">
        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">&nbsp;&nbsp;Tentang LTDC</h3>
                <h1 class="display-1 ltdc-title">
                LTDC 2019 (Line Tracer Design and Contest)
                </h1>
                <p class="lead">
                    LINE TRACER DESIGN & CONTEST (LTDC) UM 2019 adalah Program Kerja Tahunan Workshop Elektro Universitas Negeri Malang. 
                    LTDC merupakan perlombaan adu cepat dan adu desain robot line tracer (robot penjajak garis) yang bertema The Bravest Troop On The Dangerous Zone 
                    yang diikuti oleh mahasiswa, siswa SMP sederajat dan siswa SMA/SMK sederajat se-Indonesia. Jenis robot yang yang dipertandingkan pada 
                    LTDC 2019 terdiri dari dua kategori 
                    yaitu kategori analog dan kategori mikrokontroller. 
                    Pada setiap pertandingan akan mempertandingkan 4 robot sekaligus dalam satu lintasan/track. Start dimulai pada 4 sudut yang berbeda. Robot dianggap mencapai garis finish apabila salah satu bagian robot menyentuh garis finish. Waktu maksimal untuk setiap pertandingan adalah 4,5 menit dengan 30 detik untuk persiapan. Pada pertandingan LTDC 2019 ini menggunakan dua sistem. Untuk babak penyisihan menggunakan sistem ranking, sedangkan pada babak 16 besar sampai final menggunakan sistem gugur.                    
                    <br>
                    <br>
                </p>
            </div>
        </div>

        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead" style="margin-bottom:0px">&nbsp;&nbsp;KATEGORI LOMBA</h3>            
            </div>            
        </div>
        <div class="row about-process block-1-2 block-tab-full">            
            <div class="swiper-container" id="swiper-kat" data-aos="fade-up">
                <div class="swiper-wrapper" id="descr">
                  <div class="swiper-slide row">                    
                        <div class="col-five md-seven tab-full mob-full kat-img" data-aos="fade-up">                            
                                <img src="{{asset('stellar/images/analog.png')}}">
                                <h4> <span class="fa fa-money"></span>&nbsp; IDR 210 K </h4>                           
                        </div>
            
                        <div class="col-six md-four tab-full mob-full kat-desc " data-aos="fade-up">
                            <h3>Analog</h3>
                            Syarat dan Ketentuan :
                            1. Peserta adalah pelajar aktif dalam satu sekolah menengah (dibuktikan dengan Kartu Pelajar)<br>
                            2. Setiap tim maksimal terdiri dari 2 orang dan boleh didampingi maksimal 2 orang pendamping untuk tiap sekolah.<br>
                            3. Robot dan perlengkapan disiapkan oleh masing-masing peserta, disarankan untuk membawa perlengkapan seperlunya.<br>
                            4. Setiap individu dan robot hanya diperbolehkan terdaftar pada satu tim.<br>
                            5. Peserta menggunakan pakaian bebas, sopan dan diwajibkan untuk bersepatu dan berkaos kaki.<br>
                            6. Peserta diwajibkan menggunakan ID card, kaos perlombaan dan kaos kaki saat lomba berlangsung.<br>
                            7. <b>Jumlah peserta terbatas.</b> <br> <br>
                            <a  href="{{url('/user_register')}}" class="btn btn-animatedbg">
                                Daftar Sekarang                                
                            </a>
                        </div>                    
                  </div>
                  <div class="swiper-slide row">                    
                    <div class="col-five md-seven tab-full mob-full kat-img" data-aos="fade-up">                            
                            <img src="{{asset('stellar/images/mikro2.png')}}">   <br>
                            <h4> <span class="fa fa-money"></span>&nbsp; 230K</h4>                         
                    </div>
        
                    <div class="col-six md-four tab-full mob-full kat-desc " data-aos="fade-up">
                            <h3>Mikrokontroller</h3>
                            Syarat dan Ketentuan :
                            1. Peserta adalah pelajar aktif dalam satu instansi atau institusi (dibuktikan dengan Kartu Pelajar atau Kartu Tanda Mahasiswa)<br>
                            2. Setiap tim maksimal terdiri dari 2 orang dan boleh didampingi maksimal 2 orang pendamping untuk tiap sekolah.<br>
                            3. Robot dan perlengkapan disiapkan oleh masing-masing peserta, disarankan untuk membawa perlengkapan seperlunya.<br>
                            4. Setiap individu dan robot hanya diperbolehkan terdaftar pada satu tim.<br>
                            5. Peserta menggunakan pakaian bebas, sopan dan diwajibkan untuk bersepatu dan berkaos kaki.<br>
                            6. Peserta diwajibkan menggunakan ID card, kaos perlombaan dan kaos kaki saat lomba berlangsung.<br>
                            7. <b>Jumlah peserta terbatas.</b>
                            <br>
                            <br>
                            <a  href="{{url('/user_register')}}" class="btn btn-animatedbg">
                                Daftar Sekarang                                
                            </a>
                    </div>                    
                 </div>                                    
                </div>
                <br>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
              </div>    
        </div>  <!-- end about-process -->

                      
        <center><h1 id="timeline">Timeline</h1></center>
        <div class="steps-timeline" data-aos="fade-up"> 
          <div class="step">
            <div class="step-milestone"></div>
            <span class="step-title">
                <h1><span class="fa fa-address-card-o"></span></h1>
                Registration
            </span>
            <p class="step-description">
             23 Juli - 25 Agustus 2019
            </p>
          </div>
        
          <div class="step">
            <div class="step-milestone"></div>
            <span class="step-title">
              <h1><span class="fa fa-group"></span></h1>
              Technical Meeting
            </span>
            <p class="step-description">
               24 September 2019
            </p>
          </div>
        
          <div class="step">
            <div class="step-milestone"></div>
            <span class="step-title">
              <h1><span class="fa fa-trophy"></span></h1>
              Race
            </span>
            <p class="step-description">
               25 -26 September 2019
            </p>
          </div>                               
        
        </div><!-- steps-timeline -->
        <br><br><br>
        <div class="twibbon-area row" id="twibbon-area">                              
            <div class="col-five md-seven tab-full mob-full kat-img" data-aos="fade-up">                  
                <img src="{{asset('twibbon/twibbon.jpeg')}}" style="width:90%;float-right">      
            </div>
            <div class="col-six md-four tab-full mob-full kat-desc " data-aos="fade-up">
                <h1>Yuk Meriahkan Twibbon LTDC</h1>
                Selamat Untuk teman - teman yang telah lolos seleksi Administrasi LTDC 2019. Untuk
                memeriahkan Event Line Tracer Design and Contest ( 2019 ) pada tanggal 26 September 2018, 
                Yuk kita meriahkan sosial media kita dengan Twibbon LTDC 2019. 
                <br><br>
                <a href="https://drive.google.com/open?id=1BonogirjsJiwHWxZRmw6uMA0aQTnsWgQ" class="btn-twibbon" target="_blank"><span class="fa fa-download"></span>&nbsp;&nbsp;Download Twibbon</a>

                <a href="{{url('/twb')}}" target="_blank" class="btn-twibbon" style="background-color:#154cad !important"><span class="fa fa-photo"></span>&nbsp;&nbsp;Pasang Twibbon</a>
            </div>                    
        </div>        

    </section> <!-- end s-about -->


    <!-- services
    ================================================== -->
    <section id="track" class="s-services target-section">
        <div class="row" data-aos="fade-up">
            <div class="col-full">                
                <h1 class="display-1 display-1--light">
                Track (Preview)
                </h1>
                <p class="lead">
                Silahkan lihat Preview Track pada link ini :
                </p>
            </div>
        </div>

        <div class="row services-list block-1-2 block-m-1-2 block-tab-full">
            <div class="col-block item-service" data-aos="fade-up">
                <div class="box-track" style="background:url('{{asset('stellar/images/preview_track_analog.jpg')}}');background-size:cover;"> 
                    <div class="block-box-track">
                        <center>
                            <h4>Preview Track Analog</h4>
                            <a href="{{asset('stellar/images/preview_track_analog.jpg')}}" download>Download</a>
                        </center>
                    </div>                   
                </div>                                
            </div>

            <div class="col-block item-service" data-aos="fade-up">
                    <div class="box-track" style="background:url('{{asset('stellar/images/preview_track_mikro.jpeg')}}');background-size:cover;"> 
                        <div class="block-box-track">
                            <center>
                                <h4>Preview Track Mikrokontroller</h4>
                                <a href="{{asset('stellar/images/preview_track_mikro.jpeg')}}" download>Download</a>
                            </center>
                        </div>                   
                    </div>
            </div>            
        </div> <!-- end services-list -->

        <br>
        <div class="row" data-aos="fade-up" id="galeri">
                <div class="col-full">                
                    <h1 class="display-1 display-1--light">Galeri </h1>
                    <p class="lead">Berikut adalah beberapa foto kegiatan dari LTDC 2018 :</p>
                </div>
        </div>
        <div class="row portfolio block-1-3 block-m-1-3 block-tab-1-2 collapse">            
                <div class="col-block item-folio" data-aos="fade-up">
                        <div class="item-folio__thumb">
                            <a href="http://ltdc.um.ac.id/2019/stellar/images/galeri/1.jpg" class="thumb-link" title="Ketua Pelaksana" data-size="1050x700">
                                <img src="http://ltdc.um.ac.id/2019/stellar/images/galeri/1.jpg" 
                                     srcset="http://ltdc.um.ac.id/2019/stellar/images/galeri/1.jpg 1x,http://ltdc.um.ac.id/2019/stellar/images/galeri/1.jpg 2x" alt="">
                            </a>
                        </div>
        
                        <div class="item-folio__text">
                            <h3 class="item-folio__title">
                                Ketua Pelaksana
                            </h3>
                            <p class="item-folio__cat">                                
                            </p>
                        </div>
        
                        <a href="#" class="item-folio__project-link" title="Project link">
                            Detail
                        </a>
        
                        <div class="item-folio__caption">
                            <p></p>
                        </div>
        
                    </div> <!-- end item-folio -->
        
                    <div class="col-block item-folio" data-aos="fade-up">
        
                        <div class="item-folio__thumb">
                            <a href="http://ltdc.um.ac.id/2019/stellar/images/galeri/2.jpg" class="thumb-link" title="Panitia" data-size="1050x700">
                                <img src="http://ltdc.um.ac.id/2019/stellar/images/galeri/2.jpg" 
                                     srcset="http://ltdc.um.ac.id/2019/stellar/images/galeri/2.jpg 1x, http://ltdc.um.ac.id/2019/stellar/images/galeri/2.jpg 2x" alt="">
                            </a>
                        </div>
        
                        <div class="item-folio__text">
                            <h3 class="item-folio__title">
                                Panitia
                            </h3>
                            <p class="item-folio__cat">
                                
                            </p>
                        </div>
        
                        <a href="#" class="item-folio__project-link" title="Project link">
                            Detail
                        </a>
        
                        <div class="item-folio__caption">
                            <p></p>
                        </div>
        
                    </div> <!-- end item-folio -->
        
                    <div class="col-block item-folio" data-aos="fade-up">
        
                        <div class="item-folio__thumb">
                            <a href="http://ltdc.um.ac.id/2019/stellar/images/galeri/3.jpg" class="thumb-link" title="Pemenang Kategori Analog" data-size="1050x700">
                                <img src="http://ltdc.um.ac.id/2019/stellar/images/galeri/3.jpg" 
                                     srcset="http://ltdc.um.ac.id/2019/stellar/images/galeri/3.jpg 1x, http://ltdc.um.ac.id/2019/stellar/images/galeri/3.jpg 2x" alt="">
                            </a>
                        </div>
        
                        <div class="item-folio__text">
                            <h3 class="item-folio__title">
                                Pemenang Kategori Mikrokontroller
                            </h3>
                            <p class="item-folio__cat">
                                
                            </p>
                        </div>
        
                        <a href="#" class="item-folio__project-link" title="Project link">
                            Detail
                        </a>
        
                        <div class="item-folio__caption">
                            <p></p>
                        </div>
        
                    </div> <!-- end item-folio -->
        
                    <div class="col-block item-folio" data-aos="fade-up">
        
                        <div class="item-folio__thumb">
                            <a href="http://ltdc.um.ac.id/2019/stellar/images/galeri/4.jpg" class="thumb-link" title="Pemenang Kategori Mikrokkontroller" data-size="1050x700">
                                <img src="http://ltdc.um.ac.id/2019/stellar/images/galeri/4.jpg" 
                                     srcset="http://ltdc.um.ac.id/2019/stellar/images/galeri/4.jpg 1x, http://ltdc.um.ac.id/2019/stellar/images/galeri/4.jpg 2x" alt="">
                            </a>
                        </div>
        
                        <div class="item-folio__text">
                            <h3 class="item-folio__title">
                                Pemenang Kategori Analog
                            </h3>
                            <p class="item-folio__cat">
                                
                            </p>
                        </div>
        
                        <a href="#" class="item-folio__project-link" title="Project link">
                            Detail
                        </a>
        
                        <div class="item-folio__caption">
                            <p>.</p>
                        </div>
        
                    </div> <!-- end item-folio -->
        
                    <div class="col-block item-folio" data-aos="fade-up">
        
                        <div class="item-folio__thumb">
                            <a href="http://ltdc.um.ac.id/2019/stellar/images/galeri/5.jpg" class="thumb-link" title="Penilaian Best Design" data-size="1050x700">
                                <img src="http://ltdc.um.ac.id/2019/stellar/images/galeri/5.jpg" 
                                     srcset="http://ltdc.um.ac.id/2019/stellar/images/galeri/5.jpg 1x, http://ltdc.um.ac.id/2019/stellar/images/galeri/5.jpg 2x" alt="">
                            </a>
                        </div>
        
                        <div class="item-folio__text">
                            <h3 class="item-folio__title">
                                Penilaian Best Design
                            </h3>
                            <p class="item-folio__cat">
                                
                            </p>
                        </div>
        
                        <a href="#" class="item-folio__project-link" title="Project link">
                            Detail
                        </a>
        
                        <div class="item-folio__caption">
                            <p></p>
                        </div>
        
                    </div> <!-- end item-folio -->
        
                    <div class="col-block item-folio" data-aos="fade-up">
        
                        <div class="item-folio__thumb">
                            <a href="http://ltdc.um.ac.id/2019/stellar/images/galeri/6.jpg" class="thumb-link" title="Minimalismo" data-size="1050x700">
                                <img src="http://ltdc.um.ac.id/2019/stellar/images/galeri/6.jpg" 
                                     srcset="http://ltdc.um.ac.id/2019/stellar/images/galeri/6.jpg 1x, http://ltdc.um.ac.id/2019/stellar/images/galeri/6.jpg 2x" alt="" style="width:110%">
                            </a>
                        </div>
        
                        <div class="item-folio__text">
                            <h3 class="item-folio__title">
                                Suasana Pertandingan
                            </h3>
                            <p class="item-folio__cat">
                                
                            </p>
                        </div>
        
                        <a href="#" class="item-folio__project-link" title="Project link">
                            Detail
                        </a>
        
                        <div class="item-folio__caption">
                            <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                        </div>
        
                    </div> <!-- end item-folio -->
        
        </div>
    </section> <!-- end s-services -->


    <!-- works
    ================================================== -->
    <section id="works" class="s-works target-section">
        <div class="testimonials-wrap" data-aos="fade-up">
            <div class="row">
                <div class="col-full testimonials-header">
                    <h2>Media Partner</h2>
                </div>
            </div>
            <div class="row testimonials">
                <div class="col-full">                  
                    <div class="swiper-container" id="swiper-media">
                        <div class="swiper-wrapper">
                            @foreach($getMedpart as $medpart)
                                <div class="swiper-slide"> <img src="{{asset('Sponsor/'.$medpart->image)}}" alt="{{$medpart->keterangan}}"> </div>
                            @endforeach
                        </div>                        
                            <!-- Add Pagination -->
                            <div class="swiper-pagination"></div>
                      </div>
                </div> <!-- end testimonials__slider -->

            </div> <!-- end testimonials -->

            <div class="row">
                <div class="col-full testimonials-header">
                    <h3 class="h1">Sponsor</h3>
                </div>
            </div>

            <div class="row testimonials">
                <div class="col-full">                  
                    <div class="col-full">                  
                            <div class="swiper-container" id="swiper-sponsor">
                                <div class="swiper-wrapper">
                                    @foreach($getSponsor as $datass)
                                    <div class="swiper-slide"> <img src="{{asset('Sponsor/'.$datass->image)}}" alt="{{$datass->keterangan}}"> </div>
                                    @endforeach
                                    <!-- <div class="swiper-slide"> <img src="{{asset('stellar/images/sponsor/1.png')}}" alt=""> </div>
                                    <div class="swiper-slide"> <img src="{{asset('stellar/images/sponsor/2.jpg')}}" alt=""> </div>
                                    <div class="swiper-slide"> <img src="{{asset('stellar/images/sponsor/3.jpg')}}" alt=""> </div>
                                    <div class="swiper-slide"> <img src="{{asset('stellar/images/sponsor/4.jpg')}}" alt=""> </div> -->
                                </div>                        
                                <!-- Add Pagination -->
                                <div class="swiper-pagination"></div>
                                </div>
                        </div> <!-- end testimonials__slider -->
            </div> <!-- end testimonials -->
        </div> <!-- end testimonials-wrap -->
        

    </section> <!-- end s-works -->


    <!-- clients
    ================================================== -->
    <section id="clients" class="s-clients target-section">
        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead" style="margin-bottom:0px">&nbsp;&nbsp;KONTAK PANITIA</h3>            
                <h1 class="display-1 display-1--light">Silahkan Hubungi Kontak di bawah ini untuk informasi yang lebih lanjut</h1>
            </div>            
        </div>

        <div class="row clients-list block-1-3 block-tab-1-3 block-mob-1-2" data-aos="fade-up">
            <div class="col-block item-client" data-aos="fade-up">
                <a href="https://wa.me/6282255604004" target="_blank">
                    <h1><span class="fa fa-whatsapp"></span></h1>
                    <h4>+62-822-5560-4004<br>Nanda <br>&nbsp;</h4>
                </a>
            </div>
            <div class="col-block item-client" data-aos="fade-up">
                <a href="https://wa.me/6282334730875" target="_blank">
                    <h1><span class="fa fa-whatsapp"></span></h1>
                    <h4>+62-823-3473-0875<br>Ayu <br>&nbsp;</h4>
                </a>
            </div>
            <div class="col-block item-client">
                <a href="https://wa.me/6285903718188" target="_blank">
                    <h1><span class="fa fa-whatsapp"></span></h1>
                    <h4>+62-859-0371-8188<br>Ian <br>(Track dan Teknis)</h4>
                </a>
            </div>

            <div class="col-block item-client">
                <a href="https://www.youtube.com/channel/UCM58XXClcaPgYGVyLoynNKw" target="_blank">
                    <h1><span class="fa fa-youtube"></span></h1>
                    <h4>LTDC<br>&nbsp;</h4>
                </a>
            </div>
            <div class="col-block item-client">
                <a href="https://www.instagram.com/ltdc_wseum/" target="_blank">
                    <h1><span class="fa fa-instagram"></span></h1>
                    <h4>@ltdc_wseum<br>&nbsp;</h4>
                </a>
            </div>
            <div class="col-block item-client">
                <a href="https://www.facebook.com/LineTracerDesignandContest/" target="_blank">
                    <h1><span class="fa fa-facebook"></span></h1>
                    <h4>LTDC - Line Tracer <br> Design & Contest</h4>
                </a>
            </div>            

        </div> <!-- clients-list -->

    </section> <!-- end s-clients -->


    <!-- footer
    ================================================== -->
    <footer>
        <div class="row">
            <div class="col-full cl-copyright">
                <span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</span>
            </div>
        </div>

        <div class="cl-go-top">
            <a class="smoothscroll" title="Back to Top" href="#top"></a>
        </div>
    </footer>


    <!-- photoswipe background
    ================================================== -->
    <div aria-hidden="true" class="pswp" role="dialog" tabindex="-1">

        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">

            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div><button class="pswp__button pswp__button--close" title="Close (Esc)"></button> <button class="pswp__button pswp__button--share" title=
                    "Share"></button> <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button> <button class="pswp__button pswp__button--zoom" title=
                    "Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div><button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button> <button class="pswp__button pswp__button--arrow--right" title=
                "Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>

        </div>

    </div><!-- end photoSwipe background -->


    <!-- Java Script
    ================================================== -->
    <script src="{{asset('stellar/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('stellar/js/plugins.js')}}"></script>
    <script src="{{asset('stellar/js/main.js')}}"></script>
    <script src="{{asset('stellar/js/swiper.min.js')}}"></script>
    <!-- kategori slider -->
    <script>
        var swiper = new Swiper('#swiper-kat', {
          spaceBetween: 30,
          centeredSlides: true,
          autoplay: {
            delay: 2500,
            disableOnInteraction: false,
          },
          pagination: {
            el: '.swiper-pagination',
            clickable: true,
          },
        });
      </script>

      <!-- media partner slider -->
      <script>
        var swiper = new Swiper('#swiper-sponsor', {
          slidesPerView: 4,
          spaceBetween: 10,
          // init: false,
          pagination: {
            el: '#swiper-sponsor .swiper-pagination',
            clickable: true,
          },
          breakpoints: {
            1024: {
              slidesPerView: 4,
              spaceBetween: 40,
            },
            768: {
              slidesPerView: 3,
              spaceBetween: 30,
            },
            640: {
              slidesPerView: 2,
              spaceBetween: 20,
            },
            320: {
              slidesPerView: 1,
              spaceBetween: 10,
            }
          },
          autoplay: {
            delay: 1500,
            disableOnInteraction: false,
          }
        });
      </script>

<!-- sponsor slider -->
<script>
        var swiper = new Swiper('#swiper-media', {
            slidesPerView: 6,
            spaceBetween: 10,
            // init: false,
            pagination: {
            el: '#swiper-media .swiper-pagination',
            clickable: true,
            },
            breakpoints: {
            1024: {
                slidesPerView: 4,
                spaceBetween: 40,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
            640: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            320: {
                slidesPerView: 1,
                spaceBetween: 10,
            }
            },
            autoplay: {
            delay: 1500,
            disableOnInteraction: false,
            }
        });
        </script>
</body>
