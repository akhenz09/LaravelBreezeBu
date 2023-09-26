<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>AMC PODCLASS</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-lugx-gaming.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 589 lugx gaming

https://templatemo.com/tm-589-lugx-gaming

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                        <h1><img src="assets/images/AMCLogo.png" alt="" style="width: 50px; height: auto;">&nbsp;AMC PODCLASS</h1>
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="/">Home</a></li>
                      <li><a href="/shop" class="active">About</a></li>
                      <li><a href="/product" >Programs</a></li>
                      <li><a href="/contact">Contact Us</a></li>
                      @if (Route::has('login'))
                      @auth
                      <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                      @else
                      <li><a href="{{ route('login') }}">Log in</a></li>
                      <li>
                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                    @endif
                    @endauth
                </li>
                @endif
                  </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3>About us</h3>
          <span class="breadcrumb"><a href="/">Home</a> > About</span>
        </div>
      </div>
    </div>
  </div>

  <div class="section trending">
    <div class="container">
      <ul class="trending-filter">
        <li>
          <a class="is_active" href="#!" data-filter="*">Show All</a>
        </li>
        <li>
          <a href="#!" data-filter=".adv">OUR TUTORS</a>
        </li>
        <li>
          <a href="#!" data-filter=".str">TEAM</a>
        </li>
        {{--<li>
          <a href="#!" data-filter=".rac">Racing</a>
        </li>--}}
      </ul>
      <div class="row trending-box">
        <div class="col-lg-3 col-md-6 align-self-center mb-30 trending-items adv">
          <div class="item">
            <div class="thumb">
              <a href="product-details.html"><img src="assets/images/trending-01.jpg" alt=""></a>
              {{--<span class="price"><em>$30</em>$20</span>--}}
            </div>
            <div class="down-content">
              <span class="category">Hospital</span>
              <h4>Tutor Name</h4>
              <a href="product-details.html"><i class="fa fa-shopping-bag"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 align-self-center mb-30 trending-items str">
          <div class="item">
            <div class="thumb">
              <a href="product-details.html"><img src="assets/images/trending-02.jpg" alt=""></a>
               {{--<span class="price"><em>$30</em>$20</span>--}}
            </div>
            <div class="down-content">
              <span class="category">Hospital</span>
              <h4>Tutor Name</h4>
              <a href="product-details.html"><i class="fa fa-shopping-bag"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 align-self-center mb-30 trending-items adv rac">
          <div class="item">
            <div class="thumb">
              <a href="product-details.html"><img src="assets/images/trending-03.jpg" alt=""></a>
               {{--<span class="price"><em>$30</em>$20</span>--}}
            </div>
            <div class="down-content">
              <span class="category">Hospital</span>
              <h4>Tutor Name</h4>
              <a href="product-details.html"><i class="fa fa-shopping-bag"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 align-self-center mb-30 trending-items str">
          <div class="item">
            <div class="thumb">
              <a href="product-details.html"><img src="assets/images/trending-04.jpg" alt=""></a>
              {{--<span class="price"><em>$30</em>$20</span>--}}
            </div>
            <div class="down-content">
              <span class="category">Hospital</span>
              <h4>Tutor Name</h4>
              <a href="product-details.html"><i class="fa fa-shopping-bag"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 align-self-center mb-30 trending-items rac str">
          <div class="item">
            <div class="thumb">
              <a href="product-details.html"><img src="assets/images/trending-05.jpg" alt=""></a>
               {{--<span class="price"><em>$30</em>$20</span>--}}
            </div>
            <div class="down-content">
              <span class="category">Hospital</span>
              <h4>Tutor Name</h4>
              <a href="product-details.html"><i class="fa fa-shopping-bag"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 align-self-center mb-30 trending-items rac adv">
          <div class="item">
            <div class="thumb">
              <a href="product-details.html"><img src="assets/images/trending-06.jpg" alt=""></a>
              {{--<span class="price"><em>$30</em>$20</span>--}}
            </div>
            <div class="down-content">
              <span class="category">Hospital</span>
              <h4>Tutor Name</h4>
              <a href="product-details.html"><i class="fa fa-shopping-bag"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 align-self-center mb-30 trending-items rac str">
          <div class="item">
            <div class="thumb">
              <a href="product-details.html"><img src="assets/images/trending-07.jpg" alt=""></a>
              {{--<span class="price"><em>$30</em>$20</span>--}}
            </div>
            <div class="down-content">
              <span class="category">Hospital</span>
              <h4>Tutor Name</h4>
              <a href="product-details.html"><i class="fa fa-shopping-bag"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 align-self-center mb-30 trending-items rac adv">
          <div class="item">
            <div class="thumb">
              <a href="product-details.html"><img src="assets/images/trending-08.jpg" alt=""></a>
              {{--<span class="price"><em>$30</em>$20</span>--}}
            </div>
            <div class="down-content">
              <span class="category">Hospital</span>
              <h4>Tutor Name</h4>
              <a href="product-details.html"><i class="fa fa-shopping-bag"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 align-self-center mb-30 trending-items adv rac">
          <div class="item">
            <div class="thumb">
              <a href="product-details.html"><img src="assets/images/trending-01.jpg" alt=""></a>
              {{--<span class="price"><em>$30</em>$20</span>--}}
            </div>
            <div class="down-content">
              <span class="category">Hospital</span>
              <h4>Tutor Name</h4>
              <a href="product-details.html"><i class="fa fa-shopping-bag"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 align-self-center mb-30 trending-items str">
          <div class="item">
            <div class="thumb">
              <a href="product-details.html"><img src="assets/images/trending-02.jpg" alt=""></a>
              {{--<span class="price"><em>$30</em>$20</span>--}}
            </div>
            <div class="down-content">
              <span class="category">Hospital</span>
              <h4>Tutor Name</h4>
              <a href="product-details.html"><i class="fa fa-shopping-bag"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 align-self-center mb-30 trending-items adv">
          <div class="item">
            <div class="thumb">
              <a href="product-details.html"><img src="assets/images/trending-03.jpg" alt=""></a>
              {{--<span class="price"><em>$30</em>$20</span>--}}
            </div>
            <div class="down-content">
              <span class="category">Hospital</span>
              <h4>Tutor Name</h4>
              <a href="product-details.html"><i class="fa fa-shopping-bag"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 align-self-center mb-30 trending-items str">
          <div class="item">
            <div class="thumb">
              <a href="product-details.html"><img src="assets/images/trending-04.jpg" alt=""></a>
              {{--<span class="price"><em>$30</em>$20</span>--}}
            </div>
            <div class="down-content">
              <span class="category">Hospital</span>
              <h4>Tutor Name</h4>
              <a href="product-details.html"><i class="fa fa-shopping-bag"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <ul class="pagination">
          <li><a href="#"> &lt; </a></li>
            <li><a href="#">1</a></li>
            <li><a class="is_active" href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#"> &gt; </a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="col-lg-12">
        <p>Copyright © 2048 LUGX Gaming Company. All rights reserved. &nbsp;&nbsp; <a rel="nofollow" href="https://templatemo.com" target="_blank">Design: TemplateMo</a></p>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/counter.js"></script>
  <script src="assets/js/custom.js"></script>

  </body>
</html>
