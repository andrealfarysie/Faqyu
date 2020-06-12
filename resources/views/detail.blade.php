<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Title -->
  <title>Help Desk Inner Page | Docs - UI Kit</title>

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
        <a class="navbar-brand" href="home-page-1.html"><img src="{{asset('docs-ui-kit/assets/img/logo-light.png')}}" alt="Docs UI Kit" style="width: 150px;"></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo" aria-controls="navbarTogglerDemo" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo">
          <ul class="navbar-nav mt-2 mt-lg-0 small">
            <li class="nav-item mb-2 mb-lg-0">
              <a class="nav-link" href="index.html">Back to UI Kit</a>
            </li>
          </ul>

          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item ml-lg-6 mb-2 mb-lg-0">
              <a class="nav-link px-0" href="home-page-1.html">Home</a>
            </li>
            <li class="nav-item dropdown active ml-lg-6 mb-2 mb-lg-0">
              <a class="nav-link px-0" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Pages <i class="fas fa-angle-down small ml-1"></i>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="home-page-2.html">Home Option</a>
                <a class="dropdown-item" href="home-page-3.html">Home Dark</a>
                <a class="dropdown-item active" href="article.html">Article</a>
                <a class="dropdown-item" href="faq.html">FAQ</a>
                <a class="dropdown-item" href="contacts.html">Contacts</a>
              </div>
            </li>
            <li class="nav-item dropdown ml-lg-6 mb-2 mb-lg-0">
              <a class="nav-link px-0" href="#" id="navbarDropdown-2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Docs Layouts <i class="fas fa-angle-down small ml-1"></i>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown-2">
                <a class="dropdown-item" href="doc-1.html" target="_blank">Docs Layout 1 <i class="fa fa-external-link-square-alt text-muted small opacity-30 ml-2"></i></a>
                <a class="dropdown-item" href="doc-2.html" target="_blank">Docs Layout 2 <i class="fa fa-external-link-square-alt text-muted small opacity-30 ml-1"></i></a>
                <a class="dropdown-item" href="doc-3.html" target="_blank">Docs Layout 3 <i class="fa fa-external-link-square-alt text-muted small opacity-30 ml-1"></i></a>
                <a class="dropdown-item" href="doc-4.html" target="_blank">Docs Layout 4 <i class="fa fa-external-link-square-alt text-muted small opacity-30 ml-1"></i></a>
              </div>
            </li>
            <li class="nav-item ml-lg-6 mb-2 mb-lg-0">
              <a class="nav-link px-0" href="https://github.com/htmlstreamofficial/docs-ui-kit" target="_blank"><i class="fab fa-github mr-1"></i> Star on Github</a>
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
          <h1 class="text-white font-weight-light mb-3">{{$faq->header}}</h1>

          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-light">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Pages</a></li>
              <li class="breadcrumb-item active" aria-current="page">Article</li>
            </ol>
          </nav>
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
    <div class="container py-10">
      <div class="row">
        <div class="col-lg-8 mb-11 mb-lg-4 pr-lg-6">
          
          
          {!! $faq->text !!}
          <!-- Resolved -->
          <div class="text-center border-top mt-6 pt-6">
            <h4 class="h6 mb-4">Apa artikel ini cukup membantu?</h4>

            <button type="button" class="btn btn-sm btn-outline-primary mx-1"><i class="fa fa-thumbs-up mr-1"></i> Ya, terima kasih!</button>
            <button type="button" class="btn btn-sm btn-outline-primary mx-1"><i class="fa fa-thumbs-down mr-1"></i> Tidak terlalu</button>
          </div>
        </div>
        <!-- End Resolved -->

        <div class="col-lg-4 mb-4">
          <div class="card p-3 border-0 shadow">
            <div class="card-header pb-0">
              <h4 class="h5 mb-3">Pertanyaan Terkait</h4>
            </div>
            <div class="card-body">
              <ul class="list-line mb-0">
                <li class="mb-3"><a class="link-muted" href="#">Guarantee?</a></li>
                <li class="mb-3"><a class="link-muted" href="#">Do you have any built-in caching?</a></li>
                <li class="mb-3"><a class="link-muted" href="#">Can I add/upgrade my plan at any time?</a></li>
                <li class="mb-3"><a class="link-muted" href="#">What access comes with my hosting plan?</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- Footer -->
  <footer class="bg-dark font-weight-light text-white-55 pt-11 pb-5 overflow-hidden">
    <div class="container">
      <div class="row justify-content-md-between">
        <div class="col-md-12 col-lg-4 mb-4 mr-lg-auto">
          <img class="mb-3" src="assets/img/logo-light.png" alt="Docs UI Kit" style="width: 170px;">
          <p class="small font-weight-light mb-3">Docs UI Kit is fully responsive template with variety of documentation layouts, functional features and ready to use pages.</p>
        </div>

        <div class="col-sm-4 col-lg-2 mb-4">
          <h4 class="h6 text-white mb-3">Company</h4>

          <!-- Links -->
          <ul class="list-unstyled">
            <li class="mb-3"><a class="link-white-55" href="#">About Us</a></li>
            <li class="mb-3"><a class="link-white-55" href="#">Offers</a></li>
            <li class="mb-3"><a class="link-white-55" href="#">Contacts</a></li>
          </ul>
          <!-- End Links -->
        </div>

        <div class="col-sm-4 col-lg-2 mb-4">
          <h4 class="h6 text-white mb-3">Support</h4>

          <!-- Links -->
          <ul class="list-unstyled">
            <li class="mb-3"><a class="link-white-55" href="#">Community</a></li>
            <li class="mb-3"><a class="link-white-55" href="#">Status</a></li>
            <li class="mb-3"><a class="link-white-55" href="#">FAQ</a></li>
          </ul>
          <!-- End Links -->
        </div>

        <div class="col-sm-4 col-lg-2 mb-4">
          <h4 class="h6 text-white mb-3">Contacts</h4>

          <!-- Links -->
          <ul class="list-unstyled">
            <li class="mb-3"><a class="link-white-55" href="#">info@htmlstream.com </a></li>
            <li class="mb-3"><a class="link-white-55" href="#">1-800-643-4500</a></li>
          </ul>
          <!-- End Links -->
        </div>
      </div>

      <hr class="my-5 opacity-10">

      <div class="row">
        <div class="col-md-7">
          <p class="small font-weight-light mb-md-0">&copy; 2019 <a class="text-white" href="https://htmlstream.com/">Htmlstream</a>. Under MIT license.</p>
        </div>

        <div class="col-md-5 text-md-right">
          <ul class="list-inline mb-0">
            <li class="list-inline-item mr-1 mr-xl-2">
              <a class="link-white-55" target="_blank" href="https://github.com/htmlstreamofficial/">
                <i class="fab fa-github"></i>
              </a>
            </li>
            <li class="list-inline-item mx-1 mx-xl-2">
              <a class="link-white-55" target="_blank" href="https://www.facebook.com/htmlstream">
                <i class="fab fa-facebook"></i>
              </a>
            </li>
            <li class="list-inline-item mx-1 mx-xl-2">
              <a class="link-white-55" target="_blank" href="https://www.instagram.com/htmlstream">
                <i class="fab fa-instagram"></i>
              </a>
            </li>
            <li class="list-inline-item mx-1 mx-xl-2">
              <a class="link-white-55" target="_blank" href="https://twitter.com/htmlstream">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item ml-1 ml-xl-2">
              <a class="link-white-55" target="_blank" href="https://dribbble.com/htmlstream">
                <i class="fab fa-dribbble"></i>
              </a>
            </li>
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