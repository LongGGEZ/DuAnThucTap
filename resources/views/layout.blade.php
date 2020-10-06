<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>CMT-Dragon</title>
  <link href="{{asset('public/frontend/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('public/frontend/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('public/frontend/css/prettyPhoto.css')}}" rel="stylesheet">
  <link href="{{asset('public/frontend/css/price-range.css')}}" rel="stylesheet">
  <link href="{{asset('public/frontend/css/animate.css')}}" rel="stylesheet">
  <link href="{{asset('public/frontend/css/main.css')}}" rel="stylesheet">
  <link href="{{asset('public/frontend/css/responsive.css')}}" rel="stylesheet">
  <link href="{{asset('public/frontend/css/user.css')}}" rel="stylesheet">
  <link href="{{asset('public/frontend/css/style.css')}}" rel="stylesheet">
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
  <link rel="shortcut icon" href="{{('public/frontend/images/cmticons.ico')}}">
  <link rel="apple-touch-icon-precomposed" sizes="144x144"
    href="{{('public/frontend/images/apple-touch-icon-144-precomposed.png')}}">
  <link rel="apple-touch-icon-precomposed" sizes="114x114"
    href="{{('public/frontend/images/apple-touch-icon-114-precomposed.png')}}">
  <link rel="apple-touch-icon-precomposed" sizes="72x72"
    href="{{('public/frontend/images/apple-touch-icon-72-precomposed.png')}}">
  <link rel="apple-touch-icon-precomposed" href="{{('public/frontend/images/apple-touch-icon-57-precomposed.png')}}">
</head>
<!--/head-->

<body>
  <header id="header">
    <!--header-->
    <div class="header_top">
      <!--header_top-->
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <div class="contactinfo">
              <ul class="nav nav-pills">
                <li><a href="#"><i class="fa fa-phone"></i> +84 35 78 41 922</a></li>
                <li><a href="#"><i class="fa fa-envelope">&ensp;</i>info.danang@qntdata.com</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="social-icons pull-right">
              <ul class="nav navbar-nav">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/header_top-->

    <div class="header-middle">
      <!--header-middle-->
      <div class="container">
        <div class="row">
          <div class="col-sm-4">
            <div class="logo pull-left">
              <a href="index.html"><img src="{{('public/frontend/images/cmtlogo.png')}}" alt="" /></a>
            </div>
            <div class="btn-group pull-right">
              <div class="btn-group">
                <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                  USA
                  <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                  <li><a href="#">Canada</a></li>
                  <li><a href="#">UK</a></li>
                  <li><a href="#">Vietnam</a></li>
                </ul>
              </div>

              <div class="btn-group">
                <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                  DOLLAR
                  <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                  <li><a href="#">Canadian Dollar</a></li>
                  <li><a href="#">Pound</a></li>
                  <li><a href="#">Vnd</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-8">
            <div class="shop-menu pull-right">
              <ul class="nav navbar-nav">
                <li><a href="#"><i class="fa fa-user"></i> Account</a></li>
                <li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>
                <li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                <li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                <li><a href="login.html"><i class="fa fa-lock"></i> Login</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/header-middle-->

    <div class="header-bottom">
      <!--header-bottom-->
      <div class="container">
        <div class="row">
          <div class="col-sm-9">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <div class="mainmenu pull-left">
              <ul class="nav navbar-nav collapse navbar-collapse">
                <li><a href="{{URL::to('/trang-chu')}}" class="active">Home</a></li>
                <li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                  <ul role="menu" class="sub-menu">
                    <li><a href="shop.html">Products</a></li>
                    <li><a href="product-details.html">Product Details</a></li>
                    <li><a href="checkout.html">Checkout</a></li>
                    <li><a href="cart.html">Cart</a></li>
                    <li><a href="login.html">Login</a></li>
                  </ul>
                </li>
                <li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                  <ul role="menu" class="sub-menu">
                    <li><a href="blog.html">Blog List</a></li>
                    <li><a href="blog-single.html">Blog Single</a></li>
                  </ul>
                </li>
                <li><a href="404.html">Service</a></li>
                <li><a href="contact-us.html">Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="search_box pull-right">
              <input type="text" placeholder="Search" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/header-bottom-->
  </header>
  <!--/header-->


          @yield('content')

  <footer id="footer">
    <!--Footer-->
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-sm-2">
            <div class="companyinfo">
              <h2><span>CMT</span>-Dragon</h2>
              <p>CMT-Dragon là công ty chuyên về phân tích và xử lý dữ liệu bằng cách phát triển các mô hình Machine
                Learning, Artificial Intelligence algorithms, blockchains/DLT và software solutions.</p>
            </div>
          </div>
          <div class="col-sm-7">
            <div class="col-sm-3">
              <div class="video-gallery text-center">
                <a href="#">
                  <div class="iframe-img">
                    <img src="{{('public/frontend/images/QTData/footer1.jpg')}}" alt="" />
                  </div>
                  <div class="overlay-icon">
                    <i class="fa fa-play-circle-o"></i>
                  </div>
                </a>
                <p>State of AI in HR</p>
                <h2>February 12, 2020</h2>
              </div>
            </div>

            <div class="col-sm-3">
              <div class="video-gallery text-center">
                <a href="#">
                  <div class="iframe-img">
                    <img src="{{('public/frontend/images/QTData/footer2.jpg')}}" alt="" />
                  </div>
                  <div class="overlay-icon">
                    <i class="fa fa-play-circle-o"></i>
                  </div>
                </a>
                <p>Overview of blockchain and bitcoin (Part 4)</p>
                <h2>September 8, 2019</h2>
              </div>
            </div>

            <div class="col-sm-3">
              <div class="video-gallery text-center">
                <a href="#">
                  <div class="iframe-img">
                    <img src="{{('public/frontend/images/QTData/footer3.jpg')}}" alt="" />
                  </div>
                  <div class="overlay-icon">
                    <i class="fa fa-play-circle-o"></i>
                  </div>
                </a>
                <p>Overview of blockchain and bitcoin (Part 3)</p>
                <h2>September 8, 2019</h2>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="address">
              <img src="{{('public/frontend/images/QTData/logoQT.png')}}" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-widget">
      <div class="container">
        <div class="row">
          <div class="col-sm-2">
            <div class="single-widget">
              <h2>CANADA</h2>
              <ul class="nav nav-pills nav-stacked">
                <li>Saskatchewan Office</li>
                <li>Phone: +1 306 491 8799</li>
                <li>E-mail: info@qntdata.com</li>
                <p></p>
                <li>British Columbia Office</li>
                <li>E-mail: info.canada@qntdata.com</li>
              </ul>
            </div>
          </div>
          <div class="col-sm-2">
            <div class="single-widget">
              <h2>US</h2>
              <ul class="nav nav-pills nav-stacked">
                <li>US Office</li>
                <li>Phone: +1 858 258 3151</li>
                <li>E-mail: info.us@qntdata.com</li>
              </ul>
            </div>
          </div>
          <div class="col-sm-2">
            <div class="single-widget">
              <h2>VIETNAM</h2>
              <ul class="nav nav-pills nav-stacked">
                <li>Ho Chi Minh Office</li>
                <li>Phone: +84 904 917 075</li>
                <li>E-mail: info.vietnam@qntdata.com</li>
              </ul>
              <p></p>
              <ul class="nav nav-pills nav-stacked">
                <li>Da Nang Office</li>
                <li>Phone: +84 904 917 075</li>
                <li>E-mail: info.danang@qntdata.com</li>
              </ul>
            </div>
          </div>
          <div class="col-sm-2">
            <div class="single-widget">
              <h2>QUICK LINKS</h2>
              <ul class="nav nav-pills nav-stacked">
                <li><a href="#">About Us</a></li>
                <li><a href="#">Our Team</a></li>
                <li><a href="#">Careers</a></li>
                <li><a href="#">Partnerships</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-3 col-sm-offset-1">
            <div class="single-widget">
              <h2>About CMT-Dragon</h2>
              <form action="#" class="searchform">
                <input type="text" placeholder="Your email address" />
                <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
                <p>Get the most recent updates from <br />our site and be updated your self...</p>
              </form>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <p class="pull-left">Copyright © 2020 <a href="">QT-Data Inc</a>. All rights reserved.</p>
          <p class="pull-right">Designed by <span><a target="_blank"
                href="https://www.facebook.com/tran.kelvinh/">VinhTran</a></span></p>
        </div>
      </div>
    </div>

  </footer>
  <!--/Footer-->



  <script src="{{asset('/frontend/js/jquery.js')}}"></script>
  <script src="{{asset('/frontend/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('/frontend/js/jquery.scrollUp.min.js')}}"></script>
  <script src="{{asset('/frontend/js/price-range.js')}}"></script>
  <script src="{{asset('/frontend/js/jquery.prettyPhoto.js')}}"></script>
  <script src="{{asset('/frontend/js/main.js')}}"></script>
</body>

</html>
