<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Hirutoty</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
    <link rel="icon" type="image/x-icon" href="gambart.png">
</head>
<body class="bg-light">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger shadow-sm fixed-top">
  <div class="container"> 
    <img src="gambart.png" alt="" class="gambart navbar-brand">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ms-auto gap-3">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
        <a class="nav-link" href="#about-page">About</a>
        <a class="nav-link" href="#portofolio">Projects</a>
        <a class="nav-link" href="#skill">Skill</a>
        <a class="nav-link" href="#kontak">Contact</a>
      </div>
    </div>
  </div>
</nav>
    <!-- navbar akhir -->

    <!-- home -->
      <div class="home py-5" id="home">
        <div class="container-lg">
          <div class="row min-vh-100 align-items-center align-content-center">
            <div class="col-md-6 mt-5 mt-md-5 rounded-circle">
              <div class="home-img text-center ">
                <img src="PROFIL-FIX.png" alt="gambar-profile" class="gambar1 mw-100">
              </div>
            </div>
            <div class="bungkus-home col-md-6 mt-5 mt-md-5 order-md-first">
              <div class="home-text">
                <p class="text-muted mb-1">Hello I'm</p>
                <h1 class="text-danger text-uppercase fs-1 fw-bold">Hiru Toty Riawan</h1>
                <h2 class="fs-4">High School Students</h2>
                <p class="des-home mt-3 text-muted">Teruslah mencoba untuk memunculkan ide-ide baru. Karena dunia bukanlah dunia 
                    yang statis dan dapat berubah sewaktu-waktu
                </p>
                <a onclick="window.print()" class="btn btn-danger px-3">Download CV</a>
              </div>
            </div> 
          </div>
        </div>
      </div>
    <!-- home akhir-->

    <!-- About -->
      <div class="about bg-white py-5" id="about-page">
        <div class="container-lg">
          <div class="row justify-content-center">
            <div class="col-lg-8 ">
              <h2 class="text-center fw-bold mb-4 text-danger">ABOUT ME</h2>
            </div>
            <div class="row justify-content-center">
              <p class="about-des col-8 text-center">Nama saya Hiru Toty Riawan. Orang-orang memanggil saya
                         Toty atau Hiru. Saya lahir di Tangerang, 24 Mei 2008. Saat ini saya tinggal di desa
                         Rogojati, Sukoharjo, Wonosobo. Saya saat ini berumur 
                         16 tahun. Saya saat ini bersekolah di SMKN 1 Bawang, dan mengambil jurusan PPLG</p>
            </div>
          </div>
        </div>
      </div>
    <!-- About Akhir-->
      
    <!-- Sekolah -->
      <div class="sekolah bg-white py-3" id="sekolah">
        <div class="container-lg py-4">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <div class="title text-center">
                <h2 class="fw-bold mb-5 text-danger">EDUCATIONS</h2>
              </div> 
            </div>
          </div>
          <div class="row text-center">
            <div class="sekolah-isi col-md-6 col-lg-4">
              <div class="shadow-sm bg-light rounded">
                <div class="imgs">
                  <img src="logosd.png" alt="Logo_SD" >
                </div>
                <h3 class="fs-5 py-2 pt-1">SDN KARANGANYAR</h3>
                <p class="text-muted">2014-2020</p>
              </div>
            </div>

            <div class="sekolah-isi col-md-6 col-lg-4 ">
              <div class="shadow-sm bg-light rounded">
                <div class="imgs">
                  <img src="logomts.png" alt="Logo_SMP" class="logomts pt-4">
                </div>
                <h3 class="fs-5 py-2 pt-4">MTSN 2 Banjarnegara</h3>
                <p class="text-muted pt-2">2020-2023</p>
              </div>
            </div>

            <div class="sekolah-isi col-md-6 col-lg-4 ">
              <div class="shadow-sm bg-light rounded">
                <div class="imgs">
                  <img src="logo-smk.png" alt="Logo_SMK" class="logosmk pt-4">
                </div>
                <h3 class="fs-5 py-2 pt-4">SMKN 1 BAWANG</h3>
                <p class="text-muted">2023-Now</p>
              </div>
            </div>
          </div> 
        </div>
      </div>
    <!-- Akhir Sekolah -->
     
    <!-- Skill -->
    <div class="skill bg-danger py-3 mb-1" id="skill">
        <div class="container-lg pt-5">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <div class="title text-center">
                <h2 class="fw-bold mb-5 text-white">SKILL</h2>
              </div> 
            </div>
          </div>
          <div class="row bg-danger justify-content-center align-items-center">
            <div class="col-md-6 col-lg-2 mb-5 text-center">
                <div class="">
                  <img src="logohtml.png" alt="Logo_HTML" class="logohtml">
                </div>
            </div>
            <div class="col-md-6 col-lg-2 mb-5 text-center">
            
                <div class="">
                  <img src="logo-css.png" alt="Logo_CSS" class="logocss">
                </div>
            </div>
            <div class="col-md-6 col-lg-2 mb-5 text-center">
            
                <div class="">
                  <img src="logo-js (2).png" alt="Logo_js" class="logojs">
                </div>
            </div>
            <div class="col-md-6 col-lg-2 mb-5 text-center">
            
                <div class="">
                  <img src="c-logo.png" alt="Logo_C#" class="logoc">
                </div>
            </div>

          </div> 
          <div class="row bg-danger justify-content-center align-items-center">
            <div class="col-md-6 col-lg-2 mb-5 text-center">
                <div class="">
                  <img src="logo-figma.png" alt="Logo_FIGMA" class="logofigma">
                </div>
            </div>
            <div class="col-md-6 col-lg-2 mb-5 text-center">
            
                <div class="">
                  <img src="logo-word.png" alt="Logo_WordPress" class="logowp">
                </div>
            </div>

          </div> 
        </div>
      </div>
    <!-- Skill -->

    <!-- Projek --> 
      <div class="portofolio bg-white py-5" id="portofolio">
        <div class="container-lg py-4">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <div class="judul text-center">
                <h2 class="fw-bold mb-5 text-danger">PROJECTS</h2>
              </div>
            </div>
          </div>

            <div class="row">
              <div class="col-md-6 col-lg-4 hover-zoom">
                <div class="isi-portofolio">
                  <img src="cek-kodam.PNG" alt="Web Login Wifi " class="hover-zoom w-200 img-thumbnail">
                  <h3 class="text-capitalize fs-5 my-2">Website Cek Khodam</h3>
                  <p class="mb-4"><a href="https://wifihiru.github.io/wifihirugithub.io/" class="btn btn-danger px-3 text-decoration-none">Kunjungi</a></p>
                </div>
              </div>


              <div class="col-md-6 col-lg-4">
                <div class="isi-portofolio">
                  <img src="wordpress-projek.PNG" alt="Website Wisata Wonosobo" class="w-200 img-thumbnail">
                  <h3 class="text-capitalize fs-5 my-2">Website Wisata Wonosobo</h3>
                  <p class="mb-4"><a href="https://hirutoty.wordpress.com/" class="btn btn-danger px-3 text-decoration-none">Kunjungi</a></p>
                </div>
              </div>
              
              <div class="col-md-6 col-lg-4">
                <div class="isi-portofolio">
                  <img src="desain-figma-2.PNG" alt="UI Legend Cafe " class="w-200 img-thumbnail">
                  <h3 class="text-capitalize fs-5 my-2">UI Web Legend Cafe</h3>
                  <p class="mb-4"><a href="https://www.figma.com/proto/aX8SZltnO1wrWCUx20BCYA/Legend-Web?node-id=163-56&node-type=canvas&t=8wdTwpcMqKoyZ6oj-1&scaling=scale-down&content-scaling=fixed&page-id=0%3A1&starting-point-node-id=163%3A56" class="btn btn-danger px-3 text-decoration-none">Kunjungi</a></p>
                </div>
              </div>

              <div class="col-md-6 col-lg-4">
                <div class="isi-portofolio">
                  <img src="desain-figma1.PNG" alt="UI App Dieng Culture Festival" class="w-200 img-thumbnail">
                  <h3 class="text-capitalize fs-5 my-2">UI App Dieng Culture Festival</h3>
                  <p class="mb-4"><a href="https://www.figma.com/proto/43NBmU5g1e8nT8m02WYKjW/PSAT_HIRUTOTYRIAWAN?node-id=1-9&node-type=canvas&t=Qfsf4GnW5xlkuDBD-1&scaling=scale-down&content-scaling=fixed&page-id=0%3A1&starting-point-node-id=1%3A9" class="btn btn-danger px-3 text-decoration-none">Kunjungi</a></p>
                </div>
              </div>
  
              <div id="dpgame" class="col-md-6 col-lg-4">
                <div class="isi-portofolio">
                  <img src="pr-game.PNG" alt="Game Drag & Drop master" class="w-200 img-thumbnail">
                  <h3 class="text-capitalize fs-5 my-2">Drag & Drop Game Master</h3>
                  <p class="mb-4"><a href="#dpgame" class="btn btn-danger px-3 text-decoration-none">Belum bisa dibuka</a></p>
                </div>
              </div>

              <div id="loginwifi" class="col-md-6 col-lg-4">
                <div class="isi-portofolio">
                  <img src="web-loginwifi.PNG" alt="Website Login Wifi" class="w-200 img-thumbnail">
                  <h3 class="text-capitalize fs-5 my-2">Website Login Wifi</h3>
                  <p class="mb-4"><a href="#loginwifi" class="btn btn-danger px-3 text-decoration-none">Belum bisa dibuka</a></p>
                </div>
              </div>

  
            </div>
          </div>
        </div>
      </div>

    <!-- Projek Akhir--> 


   

     <!-- Kontak -->

     <div class="portofolio bg-danger py-3" id="kontak">
        <div class="container-lg py-3">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <div class="judul text-center">
                <h2 class="fw-bold mb-4 text-white">CONTACT</h2>
              </div>
            </div>
          </div>
          <div class="justify-content-center align-items-center">
              <div class="bungkus-icon text-center">
                  <a href="mailto:hirutotiriawan@gmail.com" class="text-white mx-3"><i class="fas fa-envelope fa-2x"></i></a>
                  <a href="https://www.instagram.com/hirutoty?igsh=MXQ1ZHIxbnk0aXYzcw==" class="text-white mx-3"><i class="fab fa-instagram fa-2x"></i></a>
                  <a href="https://www.facebook.com/hiru.toty?mibextid=ZbWKwL" class="text-white mx-3"><i class="fab fa-facebook-f fa-2x"></i></a>
                  <a href="https://wa.me/qr/GWF56RJGZWQ5H1" class="text-white mx-3"><i class="fa-brands fa-whatsapp fa-2x"></i></a>
                  <a href="https://www.tiktok.com/@hirutot1?_t=8psiCR0LjYg&_r=1" class="text-white mx-3"><i class="fab fa-tiktok fa-2x"></i></a>
              </div>
            </div>
        </div>
    </div>

     <!-- Kontak Akhir-->
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>