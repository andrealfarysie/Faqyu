<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Title -->
  <title>SiMotor FAQ | {{$kategori->description}}</title>

  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Favicon -->
  <link rel="shortcut icon" href="{{asset('docs-ui-kit/favicon.png')}}">

  

  <!-- Google Fonts -->
  <link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="{{asset('docs-ui-kit/assets/vendor/font-awesome/css/fontawesome-all.min.css')}}">
  <link rel="stylesheet" href="{{asset('docs-ui-kit/assets/vendor/prism/prism.css')}}">

  <!-- CSS Template -->
  <link rel="stylesheet" href="{{asset('docs-ui-kit/assets/css/theme.css')}}">
</head>
<body>
  <!-- Header -->
  <header class="duik-header">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary position-absolute left-0 right-0 flex-nowrap z-index-3">
      <div class="container">
        <a class="navbar-brand" href="/"><img src="{{asset('docs-ui-kit/assets/img/logo-light.png')}}" alt="Docs UI Kit" style="width: 150px;"></a>

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
  <section class="duik-promo bg-primary">
    <div class="container duik-promo-container">
      <div class="d-flex position-relative mh-25rem pt-11 py-6">
        <div class="align-self-center">
          <h1 class="text-white font-weight-light mb-3">{{$kategori->description}}</h1>

          <h4 class="h6 text-white mb-3">Cari motor bekas berkualitas terbaik di SiMotor!</h4>

           <form class="input-group mb-3">
            <input class="form-control border-0" type="search" placeholder="Cari isu...">
            <span class="input-group-append p-0">
              <button class="btn text-muted" type="submit"><i class="fas fa-search"></i></button>
            </span>
          </form>
        </div>
      </div>
    </div>

    <!-- SVG BG -->
    <svg class="position-absolute bottom-0 left-0" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 323" enable-background="new 0 0 1920 323" xml:space="preserve">
      <polygon fill="#ffffff" style="fill-opacity: .05;" points="-0.5,322.5 -0.5,121.5 658.3,212.3 "></polygon>
      <polygon fill="#ffffff" style="fill-opacity: .1;" points="-2,323 1920,323 1920,-1 "></polygon>
    </svg>
    <!-- End SVG BG -->
  </section>
  <!-- End Promo Section -->

  <main>
     <section class="py-11">
      <div class="container">
        @foreach($faq as $post)
 <a class="row border rounded align-items-center justify-content-between py-4 px-3 link-dark link-hover-dark bg-hover-light mx-sm-0 mb-2" href="{{url('detail/'.$post->id)}}">
          <div class="col-sm">
            {{$post ->header}}
          </div>

          <div class="col-sm-3 small text-lh-1">
            <div class="media align-items-center">
              <!-- <div class="rounded-circle mr-2">
                <img class="img-fluid rounded-circle" src="{{asset('docs-ui-kit/assets/img-temp/100x100/img1.jpg')}}" alt="Image Description" width="33">
              </div> -->

              <div class="h6 media-body">{{$kategori->description}}</div>
            </div>
          </div>

          <div class="col-sm-2 text-sm-right text-muted small">
            {{date('d F Y', strtotime($post->created_at))}}
          </div>
        </a>
@endforeach
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

  <!-- JS Implementing Plugins -->
  <script src="{{asset('docs-ui-kit/assets/vendor/prism/prism.js')}}"></script>

  <!-- JS -->
  <script src="{{asset('docs-ui-kit/assets/js/main.js')}}"></script>
</body>
</html>