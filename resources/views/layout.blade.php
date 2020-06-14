<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Title -->
  <title>SiMotor FAQ | Home</title>

  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Favicon -->
  <link rel="shortcut icon" href="{{asset('docs-ui-kit/favicon.png')}}">

  <!-- Google Fonts -->
  <link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="{{asset('docs-ui-kit/assets/vendor/font-awesome/css/fontawesome-all.min.css')}}">

  <!-- CSS Template -->
  <link rel="stylesheet" href="{{asset('docs-ui-kit/assets/css/theme.css')}}">
</head>
<body>
  <!-- Header -->
  <header class="duik-header">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark gradient-primary position-absolute left-0 right-0 flex-nowrap z-index-3">
      <div class="container">
        <a class="navbar-brand" href=""><img src="{{asset('docs-ui-kit/assets/img/logo-light.png')}}" alt="Docs UI Kit" style="width: 150px;"></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo" aria-controls="navbarTogglerDemo" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo">
          <ul class="navbar-nav mt-2 mt-lg-0 small">
            <li class="nav-item mb-2 mb-lg-0">
              <a class="nav-link">Pusat Bantuan</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
  </header>
  <!-- End Header -->

  <!-- Promo Section -->
  <section class="duik-promo gradient-primary text-center">
    <div class="container duik-promo-container">
      <div class="d-flex justify-content-center position-relative mh-35rem pt-11 py-6">
        <div class="w-md-75 w-lg-50 mt-10">
          <h1 class="h2 text-white mb-3">Butuh Bantuan?</h1>

          <form method='get' action='{{url("search")}}' class="input-group mb-3">
            <input class="form-control border-0" type="search" name="q" placeholder="Cari isu...">
            <span class="input-group-append p-0">
              <button class="btn text-muted" type="submit"><i class="fas fa-search"></i></button>
            </span>
          </form>

          <p class="font-weight-light small text-left">
            <span class="mr-2">Kategori Populer:</span> 
           @yield("category2")
          </p>
        </div>
      </div>
    </div>

    <!-- SVG BG -->
    <svg class="position-absolute bottom-0 left-0" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 323" enable-background="new 0 0 1920 323" xml:space="preserve">
      <polygon fill="#ffffff" style="fill-opacity: .05;" points="-0.5,322.5 -0.5,121.5 658.3,212.3 "></polygon>
      <polygon fill="#ffffff" style="fill-opacity: .1;" points="-2,323 1920,323 1920,-1 "></polygon>
    </svg>
    <!-- End SVG BG -->

    <!-- SVG BG Separator -->
    <svg class="position-absolute bottom-0 left-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 300">
      <path id="Path_1" fill="#fff" data-name="Path 1" d="M0,1081.586H1920v-300Z" transform="translate(0 -781.586)"/>
    </svg>
    <!-- SVG BG Separator -->
  </section>
  <!-- End Promo Section -->

  <main>

    <section class="py-11">
      <div class="container">
        <div class="w-md-75 w-lg-50 mx-auto text-center mb-5">
          <h2 class="h3 text-center">Isu Paling Dicari</h2>
          <p>Siapa tau apa yang Anda cari ada disini.</p>
        </div>

        @yield("container")

       

      <!--   <div class="text-center mt-5">
          <a class="btn btn-sm btn-outline-primary" href="#">View All Articles<i class="fas fa-angle-right ml-2"></i></a>
        </div> -->
      </div>
    </section>

    <section class="bg-light pt-5 pb-11">
      <div class="container">
        <div class="w-md-75 w-lg-50 mx-auto text-center mb-5">
          <h2 class="h3 text-center">Cari Kategori</h2>
          <p>Temukan isu berdasarkan kategori yang sudah kami sediakan. Selamat datang di komunitas SiMotor!</p>
        </div>

        <div class="row">
          @yield("category")
        </div>

   
      </div>
    </section>

    <section class="py-11 text-center">
      <div class="container">
        <i class="fas fa-headset fa-4x text-primary mb-4"></i>
        <h2 class="h3 mb-3">Tidak menemukan apa yang Anda cari?</h2>
        <div class="lead mb-5">Biarkan kami membantu Anda!</div>
        <a class="btn px-5 btn-primary" href="{{url('kontak')}}">Ajukan Pertanyaan</a>
      </div>
    </section>

  </main>

  <!-- Footer -->
  <footer class="bg-dark font-weight-light text-white-55 pt-11 pb-5 overflow-hidden">
    <div class="container">
      <div class="row justify-content-md-between">
        <div class="col-md-12 col-lg-4 mb-4 mr-lg-auto">
          <img class="mb-3" src="{{asset('docs-ui-kit/assets/img/logo-light.png')}}" alt="Docs UI Kit" style="width: 170px;">
          <p class="small font-weight-light mb-3">SiMotor adalah platform daring yang berfokus pada sepeda motor, dikembangkan dan dikelola oleh Digital Network Asia. Aplikasi ini gratis dan bisa digunakan oleh siapa saja. </p>
        </div>

        <div class="col-sm-4 col-lg-2 mb-4">
          <h4 class="h6 text-white mb-3">SiMotor</h4>

          <!-- Links -->
          <ul class="list-unstyled">
            <li class="mb-3"><a class="link-white-55" href="http://simotor.id/#/tentang">Tentang Kami</a></li>
            <li class="mb-3"><a class="link-white-55" href="http://simotor.id/#/features">Layanan</a></li>
            <li class="mb-3"><a class="link-white-55" href="{{url('kontak')}}">Kontak Kami</a></li>
          </ul>
          <!-- End Links -->
        </div>

        <div class="col-sm-4 col-lg-2 mb-4">
          <h4 class="h6 text-white mb-3">Pusat Bantuan</h4>

          <!-- Links -->
          <ul class="list-unstyled">
            <li class="mb-3"><a class="link-white-55" href="http://simotor.id/#/syaratketentuan">Syarat dan Ketentuan</a></li>
            <li class="mb-3"><a class="link-white-55" href="http://simotor.id/#/kebijakan">Kebijakan Privasi</a></li>
          </ul>
          <!-- End Links -->
        </div>

        <div class="col-sm-4 col-lg-2 mb-4">
          <h4 class="h6 text-white mb-3">Unduh</h4>

          <!-- Links -->
          <ul class="list-unstyled">
            <li class="mb-3"><a href='https://play.google.com/store/apps/details?id=com.digitalnetworkasia.simotorbeta' target="_blank"><img alt='Get it on Google Play' src='http://www.faveohelpdesk.com/wp-content/uploads/2016/12/google-1.png'  width="200px"/></a></li>
          </ul>
          <!-- End Links -->
        </div>
      </div>

      <hr class="my-5 opacity-10">

      <div class="row">
        <div class="col-md-7">
          <p class="small font-weight-light mb-md-0">&copy; 2020 <a class="text-white" href="http://simotor.id/">Digital Network Asia.</a></p>
        </div>

        <div class="col-md-5 text-md-right">
          <ul class="list-inline mb-0">
            <li class="list-inline-item mr-1 mr-xl-2">
              <a class="link-white-55" target="_blank" href="https://github.com/digitalnetworkasia/">
                <i class="fab fa-github"></i>
              </a>
            </li>
            <li class="list-inline-item mx-1 mx-xl-2">
              <a class="link-white-55" target="_blank" href="https://www.youtube.com/channel/UCBExlB0xnMoTDT8LwVKg9oA">
                <i class="fab fa-youtube"></i>
              </a>
            </li>
            <li class="list-inline-item mx-1 mx-xl-2">
              <a class="link-white-55" target="_blank" href="https://www.instagram.com/simotor">
                <i class="fab fa-instagram"></i>
              </a>
            </li>
           <!--  <li class="list-inline-item mx-1 mx-xl-2">
              <a class="link-white-55" target="_blank" href="https://twitter.com/htmlstream">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item ml-1 ml-xl-2">
              <a class="link-white-55" target="_blank" href="https://dribbble.com/htmlstream">
                <i class="fab fa-dribbble"></i>
              </a>
            </li> -->
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <!-- Go to Top -->
  <a class="js-go-to duik-go-to" href="javascript:;">
    <span class="fa fa-arrow-up duik-go-to__inner"></span>
  </a>
  <!-- End Go to Top -->

  <!-- JS Global Compulsory -->
  <script src="{{asset('docs-ui-kit/assets/vendor/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('docs-ui-kit/assets/vendor/jquery-migrate/dist/jquery-migrate.min.js')}}"></script>
  <script src="{{asset('docs-ui-kit/assets/vendor/popper.js/dist/umd/popper.min.js')}}"></script>
  <script src="{{asset('docs-ui-kit/assets/vendor/bootstrap/dist/js/bootstrap.min.js')}}"></script>

  <!-- JS -->
  <script src="{{asset('docs-ui-kit/assets/js/main.js')}}"></script>
</body>
</html>