@include('user/user_head')
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
                    <li><a class="smoothscroll"  href="#services" title="services">Teknis</a></li>
                    <li><a class="smoothscroll"  href="#works" title="works">Media</a></li>
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
                    LINE TRACER DESIGN & CONTEST (LTDC) UM 2018 adalah Program Kerja Tahunan Workshop Elektro Universitas Negeri Malang. 
                    LTDC merupakan perlombaan adu cepat dan adu desain robot line tracer (robot penjajak garis) yang bertema Journey of The Greatest Explorer 
                    yang diikuti oleh mahasiswa, siswa SMP sederajat dan siswa SMA/SMK sederajat se-Indonesia. Jenis robot yang yang dipertandingkan pada 
                    LTDC 2019 terdiri dari dua kategori 
                    yaitu kategori analog dan kategori mikrokontroller. 
                    Pada setiap pertandingan akan mempertandingkan 4 robot sekaligus dalam satu lintasan/track. Start dimulai pada 4 sudut yang berbeda. Robot dianggap mencapai garis finish apabila salah satu bagian robot menyentuh garis finish. Waktu maksimal untuk setiap pertandingan adalah 4,5 menit dengan 30 detik untuk persiapan. Pada pertandingan LTDC 2018 ini menggunakan dua sistem. Untuk babak penyisihan menggunakan sistem ranking, sedangkan pada babak 16 besar sampai final menggunakan sistem gugur.                    
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
                            <a  href="#about" class="smoothscroll btn btn-animatedbg">
                                Daftar Sekarang                                
                            </a>
                        </div>                    
                  </div>
                  <div class="swiper-slide row">                    
                    <div class="col-five md-seven tab-full mob-full kat-img" data-aos="fade-up">                            
                            <img src="{{asset('stellar/images/mikro.png')}}">   <br>
                            <h4> <span class="fa fa-money"></span>&nbsp; 230K</h4>                         
                    </div>
        
                    <div class="col-six md-four tab-full mob-full kat-desc " data-aos="fade-up">
                            <h3>Mikrokontroller</h3>
                            Syarat dan Ketentuan :
                            1. Peserta adalah pelajar aktif dalam satu sekolah menengah (dibuktikan dengan Kartu Pelajar)<br>
                            2. Setiap tim maksimal terdiri dari 2 orang dan boleh didampingi maksimal 2 orang pendamping untuk tiap sekolah.<br>
                            3. Robot dan perlengkapan disiapkan oleh masing-masing peserta, disarankan untuk membawa perlengkapan seperlunya.<br>
                            4. Setiap individu dan robot hanya diperbolehkan terdaftar pada satu tim.<br>
                            5. Peserta menggunakan pakaian bebas, sopan dan diwajibkan untuk bersepatu dan berkaos kaki.<br>
                            6. Peserta diwajibkan menggunakan ID card, kaos perlombaan dan kaos kaki saat lomba berlangsung.<br>
                            7. <b>Jumlah peserta terbatas.</b>
                            <br>
                            <br>
                            <a  href="#about" class="smoothscroll btn btn-animatedbg">
                                Daftar Se
                                karang                                
                            </a>
                    </div>                    
                 </div>                                    
                </div>
                <br>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
              </div>    
        </div>  <!-- end about-process -->

                      
        <center><h1>Timeline</h1></center>
        <div class="steps-timeline" data-aos="fade-up"> 
          <div class="step">
            <div class="step-milestone"></div>
            <span class="step-title">
                <h1><span class="fa fa-address-card-o"></span></h1>
                Registration
            </span>
            <p class="step-description">
             16 Juli - 31 Agustus 2019
            </p>
          </div>
        
          <div class="step">
            <div class="step-milestone"></div>
            <span class="step-title">
              <h1><span class="fa fa-group"></span></h1>
              Technical Meeting
            </span>
            <p class="step-description">
               Coming Soon
            </p>
          </div>
        
          <div class="step">
            <div class="step-milestone"></div>
            <span class="step-title">
              <h1><span class="fa fa-trophy"></span></h1>
              Race
            </span>
            <p class="step-description">
               36 -37 Sepember 2019
            </p>
          </div>                               
        
        </div><!-- steps-timeline -->

    </section> <!-- end s-about -->


    <!-- services
    ================================================== -->
    <section id="services" class="s-services target-section">
        <div class="row" data-aos="fade-up">
            <div class="col-full">                
                <h1 class="display-1 display-1--light">
                Track
                </h1>
                <p class="lead">
                Silahkan download Gambar Track pada link ini :
                </p>
            </div>
        </div>

        <div class="row services-list block-1-2 block-m-1-2 block-tab-full">
            <div class="col-block item-service" data-aos="fade-up">
                <div class="box-track" style="background:url('{{asset('stellar/images/track/analog.png')}}');background-size:cover;"> 
                    <div class="block-box-track">
                        <center>
                            <h4>Preview Track Analog</h4>
                            <a href="">Download</a>
                        </center>
                    </div>                   
                </div>                                
            </div>

            <div class="col-block item-service" data-aos="fade-up">
                    <div class="box-track" style="background:url('{{asset('stellar/images/track/analog.png')}}');background-size:cover;"> 
                        <div class="block-box-track">
                            <center>
                                <h4>Preview Track Mikrokontroller</h4>
                                <a href="">Download</a>
                            </center>
                        </div>                   
                    </div>
            </div>            
        </div> <!-- end services-list -->

        <br>
        <div class="row" data-aos="fade-up">
                <div class="col-full">                
                    <h1 class="display-1 display-1--light">Galeri </h1>
                    <p class="lead">Berikut adalah beberapa foto kegiatan dari LTDC 2018 :</p>
                </div>
        </div>
        <div class="row portfolio block-1-3 block-m-1-3 block-tab-1-2 collapse">            
                <div class="col-block item-folio" data-aos="fade-up">
                        <div class="item-folio__thumb">
                            <a href="{{asset('stellar/images/galeri/1.jpg')}}" class="thumb-link" title="Lamp" data-size="1050x700">
                                <img src="{{asset('stellar/images/galeri/1.jpg')}}" 
                                     srcset="{{asset('stellar/images/galeri/1.jpg')}} 1x, {{asset('stellar/images/galeri/1.jpg')}} 2x" alt="">
                            </a>
                        </div>
        
                        <div class="item-folio__text">
                            <h3 class="item-folio__title">
                                Lamp
                            </h3>
                            <p class="item-folio__cat">
                                Web Design
                            </p>
                        </div>
        
                        <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                            Project Link
                        </a>
        
                        <div class="item-folio__caption">
                            <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                        </div>
        
                    </div> <!-- end item-folio -->
        
                    <div class="col-block item-folio" data-aos="fade-up">
        
                        <div class="item-folio__thumb">
                            <a href="{{asset('stellar/images/galeri/2.jpg')}}" class="thumb-link" title="Fuji" data-size="700x700">
                                <img src="{{asset('stellar/images/galeri/2.jpg')}}" 
                                     srcset="{{asset('stellar/images/galeri/2.jpg')}} 1x, {{asset('stellar/images/galeri/2.jpg')}} 2x" alt="">
                            </a>
                        </div>
        
                        <div class="item-folio__text">
                            <h3 class="item-folio__title">
                                Fuji
                            </h3>
                            <p class="item-folio__cat">
                                Branding
                            </p>
                        </div>
        
                        <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                            Project Link
                        </a>
        
                        <div class="item-folio__caption">
                            <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                        </div>
        
                    </div> <!-- end item-folio -->
        
                    <div class="col-block item-folio" data-aos="fade-up">
        
                        <div class="item-folio__thumb">
                            <a href="{{asset('stellar/images/galeri/3.jpg')}}" class="thumb-link" title="Woodcraft" data-size="1050x700">
                                <img src="{{asset('stellar/images/galeri/3.jpg')}}" 
                                     srcset="{{asset('stellar/images/galeri/3.jpg')}} 1x, asset('stellar/images/galeri/3.jpg')}} 2x" alt="">
                            </a>
                        </div>
        
                        <div class="item-folio__text">
                            <h3 class="item-folio__title">
                                Woodcraft
                            </h3>
                            <p class="item-folio__cat">
                                Web Design
                            </p>
                        </div>
        
                        <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                            Project Link
                        </a>
        
                        <div class="item-folio__caption">
                            <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                        </div>
        
                    </div> <!-- end item-folio -->
        
                    <div class="col-block item-folio" data-aos="fade-up">
        
                        <div class="item-folio__thumb">
                            <a href="{{asset('stellar/images/galeri/4.jpg')}}" class="thumb-link" title="Droplet" data-size="1050x700">
                                <img src="{{asset('stellar/images/galeri/4.jpg')}}" 
                                     srcset="{{asset('stellar/images/galeri/4.jpg')}} 1x, {{asset('stellar/images/galeri/4.jpg')}} 2x" alt="">
                            </a>
                        </div>
        
                        <div class="item-folio__text">
                            <h3 class="item-folio__title">
                                Droplet
                            </h3>
                            <p class="item-folio__cat">
                                Web Development
                            </p>
                        </div>
        
                        <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                            Project Link
                        </a>
        
                        <div class="item-folio__caption">
                            <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                        </div>
        
                    </div> <!-- end item-folio -->
        
                    <div class="col-block item-folio" data-aos="fade-up">
        
                        <div class="item-folio__thumb">
                            <a href="{{asset('stellar/images/galeri/5.jpg')}}" class="thumb-link" title="Shutterbug" data-size="1050x700">
                                <img src="{{asset('stellar/images/galeri/5.jpg')}}" 
                                     srcset="{{asset('stellar/images/galeri/5.jpg')}} 1x, asset('stellar/images/galeri/5.jpg')}} 2x" alt="">
                            </a>
                        </div>
        
                        <div class="item-folio__text">
                            <h3 class="item-folio__title">
                                Shutterbug
                            </h3>
                            <p class="item-folio__cat">
                                Web Design
                            </p>
                        </div>
        
                        <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                            Project Link
                        </a>
        
                        <div class="item-folio__caption">
                            <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                        </div>
        
                    </div> <!-- end item-folio -->
        
                    <div class="col-block item-folio" data-aos="fade-up">
        
                        <div class="item-folio__thumb">
                            <a href="{{asset('stellar/images/galeri/6.jpg')}}" class="thumb-link" title="Minimalismo" data-size="1050x700">
                                <img src="{{asset('stellar/images/galeri/6.jpg')}}" 
                                     srcset="{{asset('stellar/images/galeri/6.jpg')}} 1x, {{asset('stellar/images/galeri/6.jpg')}} 2x" alt="">
                            </a>
                        </div>
        
                        <div class="item-folio__text">
                            <h3 class="item-folio__title">
                                Minimalismo
                            </h3>
                            <p class="item-folio__cat">
                                UX Design
                            </p>
                        </div>
        
                        <a href="https://www.behance.net/" class="item-folio__project-link" title="Project link">
                            Project Link
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
                            <div class="swiper-slide"> <img src="{{asset('stellar/images/media_patner/1.jpg')}}" alt=""> </div>
                            <div class="swiper-slide"> <img src="{{asset('stellar/images/media_patner/2.jpg')}}" alt=""> </div>
                            <div class="swiper-slide"> <img src="{{asset('stellar/images/media_patner/3.jpg')}}" alt=""> </div>
                            <div class="swiper-slide"> <img src="{{asset('stellar/images/media_patner/4.jpg')}}" alt=""> </div>
                            <div class="swiper-slide"> <img src="{{asset('stellar/images/media_patner/5.jpg')}}" alt=""> </div>
                            <div class="swiper-slide"> <img src="{{asset('stellar/images/media_patner/6.png')}}" alt=""> </div>
                            <div class="swiper-slide"> <img src="{{asset('stellar/images/media_patner/7.png')}}" alt=""> </div>
                            <div class="swiper-slide"> <img src="{{asset('stellar/images/media_patner/8.png')}}" alt=""> </div>
                            <div class="swiper-slide"> <img src="{{asset('stellar/images/media_patner/9.png')}}" alt=""> </div>
                            <div class="swiper-slide"> <img src="{{asset('stellar/images/media_patner/10.png')}}" alt=""> </div>
                            <div class="swiper-slide"> <img src="{{asset('stellar/images/media_patner/11.png')}}" alt=""> </div>
                            <div class="swiper-slide"> <img src="{{asset('stellar/images/media_patner/12.jpg')}}" alt=""> </div>                          
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
                                    <div class="swiper-slide"> <img src="{{asset('stellar/images/sponsor/1.png')}}" alt=""> </div>
                                    <div class="swiper-slide"> <img src="{{asset('stellar/images/sponsor/2.jpg')}}" alt=""> </div>
                                    <div class="swiper-slide"> <img src="{{asset('stellar/images/sponsor/3.jpg')}}" alt=""> </div>
                                    <div class="swiper-slide"> <img src="{{asset('stellar/images/sponsor/4.jpg')}}" alt=""> </div>
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
                <h1><span class="fa fa-whatsapp"></span></h1>
                <h4>+62-822-5560-4004<br>Nanda <br>&nbsp;</h4>                
            </div>
            <div class="col-block item-client" data-aos="fade-up">
                <a href="#0">
                    <h1><span class="fa fa-whatsapp"></span></h1>
                    <h4>+62-823-3473-0875<br>Ayu <br>&nbsp;</h4>
                </a>
            </div>
            <div class="col-block item-client">
                <a href="#0">
                    <h1><span class="fa fa-whatsapp"></span></h1>
                    <h4>+62-859-0371-8188<br>Ian <br>(Track dan Teknis)</h4>
                </a>
            </div>

            <div class="col-block item-client">
                <h1><span class="fa fa-youtube"></span></h1>
                <h4>LTDC - WSE UM<br>&nbsp;</h4>                
            </div>
            <div class="col-block item-client">
                <a href="#0">
                    <h1><span class="fa fa-instagram"></span></h1>
                    <h4>@ltdc_wseum<br>&nbsp;</h4>
                </a>
            </div>
            <div class="col-block item-client">
                <a href="#0">
                    <h1><span class="fa fa-facebook"></span></h1>
                    <h4>LTDC - Line Tracer <br> Design & Contest</h4>
                </a>
            </div>            

        </div> <!-- clients-list -->

    </section> <!-- end s-clients -->
@include('user/user_script')