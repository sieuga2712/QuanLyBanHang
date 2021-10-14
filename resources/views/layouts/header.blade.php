<!DOCTYPE html>
<html lang="en">

<head>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="MediaCenter, Template, eCommerce">
    <meta name="robots" content="all">
    <title>Flipmart premium HTML5 & CSS3 Template</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="assets\css\bootstrap.min.css">

    <!-- Customizable CSS -->
    <link rel="stylesheet" href="assets\css\main.css">
    <link rel="stylesheet" href="assets\css\blue.css">
    <link rel="stylesheet" href="assets\css\owl.carousel.css">
    <link rel="stylesheet" href="assets\css\owl.transitions.css">
    <link rel="stylesheet" href="assets\css\animate.min.css">
    <link rel="stylesheet" href="assets\css\rateit.css">
    <link rel="stylesheet" href="assets\css\bootstrap-select.min.css">

    <!-- Icons/Glyphs -->
    <link rel="stylesheet" href="assets\css\font-awesome.css">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  </head>

<body class="cnt-home">
  <!-- ============================================== HEADER ============================================== -->
  <header class="header-style-1">

    <!-- ============================================== TOP MENU ============================================== -->
    <div class="top-bar animate-dropdown">
      <div class="container">
        <div class="header-top-inner">
          <div class="cnt-account">
            <ul class="list-unstyled">


              @guest
              <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
              </li>
              @if (Route::has('register'))
              <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
              </li>
              @endif
              @else
              <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                  </form>
                </div>
              </li>
              @endguest
            </ul>
          </div>
          <!-- /.cnt-account -->


          <!-- /.cnt-cart -->
          <div class="clearfix"></div>
        </div>
        <!-- /.header-top-inner -->
      </div>
      <!-- /.container -->
    </div>
    <!-- /.header-top -->
    <!-- ============================================== TOP MENU : END ============================================== -->
    <div class="main-header">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
            <!-- ============================================================= LOGO ============================================================= -->
            <div class="logo"> <a href="home.html"> <img width="190" height="90" src="assets/images/logo.png" alt="logo"> </a> </div>
            <!-- /.logo -->
            <!-- ============================================================= LOGO : END ============================================================= -->
          </div>
          <!-- /.logo-holder -->

          <div class="col-xs-12 col-sm-12 col-md-7 top-search-holder">
            <!-- /.contact-row -->
            <!-- ============================================================= SEARCH AREA ============================================================= -->
            <div class="search-area">
              <form>
                <div class="control-group">

                  <input class="search-field" placeholder="Search here...">
                  <a class="search-button" href="#"></a>
                </div>
              </form>
            </div>
            <!-- /.search-area -->
            <!-- ============================================================= SEARCH AREA : END ============================================================= -->
          </div>
          <!-- /.top-search-holder -->

          <div class="col-xs-12 col-sm-12 col-md-2 animate-dropdown top-cart-row">
            <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->

            <div class="dropdown dropdown-cart"> <a href="#" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
                <div class="items-cart-inner">
                  <div class="basket"> <i class="glyphicon glyphicon-shopping-cart"></i> </div>
                  <div class="basket-item-count"><span class="count">2</span></div>
                  <div class="total-price-basket"> <span class="lbl">cart -</span> <span class="total-price"> <span class="sign">$</span><span class="value">600.00</span> </span> </div>
                </div>
              </a>
              <ul class="dropdown-menu">
                <li>
                  <!--danh sách sản phẩm đã chọn-->
                  <!--
                  <div class="cart-item product-summary">
                    <div class="row">
                      <div class="col-xs-4">
                        <div class="image"> <a href="detail.html"><img src="assets\images\cart.jpg" alt=""></a> </div>
                      </div>
                      <div class="col-xs-7">
                        <h3 class="name"><a href="index.php?page-detail">Simple Product</a></h3>
                        <div class="price">$</div>
                      </div>
                      <div class="col-xs-1 action"> <a href="#"><i class="fa fa-trash"></i></a> </div>
                    </div>
                  </div>

                    -->
                  <!--end- danh sách sản phẩm đã chọn-->
                  <!-- /.cart-item -->
                  <div class="clearfix"></div>
                  <hr>
                  <div class="clearfix cart-total">
                    <div class="pull-right"> <span class="text">Sub Total :</span><span class='price'>$600.00</span> </div>
                    <div class="clearfix"></div>
                    <a href="checkout.html" class="btn btn-upper btn-primary btn-block m-t-20">Checkout</a>
                  </div>
                  <!-- /.cart-total-->

                </li>
              </ul>
              <!-- /.dropdown-menu-->
            </div>
            <!-- /.dropdown-cart -->

            <!-- ============================================================= SHOPPING CART DROPDOWN : END============================================================= -->
          </div>
          <!-- /.top-cart-row -->
        </div>
        <!-- /.row -->

      </div>
      <!-- /.container -->

    </div>
    <!-- /.main-header -->
    <!-- ============================================== NAVBAR ============================================== -->
    <div class="header-nav animate-dropdown">
      <div class="container">
        <div class="yamm navbar navbar-default" role="navigation">
          <div class="navbar-header">
            <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
              <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          </div>
          <div class="nav-bg-class">
            <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
              <div class="nav-outer">
                <ul class="nav navbar-nav">
                  <li class="active dropdown yamm-fw"> <a href="{{ route('home') }}" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">trang chủ</a> </li>
                  
                  <li class="dropdown "> <a href="{{ route('home') }}" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">điện thoại</a>
                    <ul class="dropdown-menu pages">
                      <li>
                        <div class="yamm-content ">
                          <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                              <h2 class="title">điện thoại</h2>
                              <ul class="links">
                                <li><a href="#">apple</a></li>
                                <li><a href="#">samsung </a></li>
                                <li><a href="#">xiaomi</a></li>
                                <li><a href="#">oppo</a></li>
                                <li><a href="#">nokia</a></li>

                              </ul>
                            </div>


                            <!-- /.yamm-content -->
                          </div>
                        </div>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown ">
                    <a href="category.html" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">máy tính <!-- <span class="menu-label hot-menu hidden-xs">hot</span>--> </a>
                    <ul class="dropdown-menu pages">
                      <li>
                        <div class="yamm-content">
                          <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                              <h2 class="title">máy tính</h2>
                              <ul class="links">
                                <li><a href="#">dell</a></li>
                                <li><a href="#">mac</a></li>
                                <li><a href="#">hp </a></li>
                                <li><a href="#">asus</a></li>
                                <li><a href="#">acer</a></li>
                                <li><a href="#">msi</a></li>

                              </ul>
                            </div>

                            

                          </div>
                          <!-- /.row -->
                        </div>
                        <!-- /.yamm-content -->
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown"> <a href="category.html"data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">tablet<!-- <span class="menu-label new-menu hidden-xs">new</span>--> </a>
                    <ul class="dropdown-menu pages">
                      <li>
                        <div class="yamm-content">
                          <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                              <h2 class="title">tablet</h2>
                              <ul class="links">
                                <li><a href="#">ipad pro</a></li>
                                <li><a href="#">ipad air</a></li>
                                <li><a href="#">ipad mini</a></li>
                                <li><a href="#">samsung</a></li>

                              </ul>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown "> <a href="category.html"data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">đông hồ</a>

                    <ul class="dropdown-menu pages">
                      <li>
                        <div class="yamm-content">
                          <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                              <h2 class="title">đồng hồ</h2>
                              <ul class="links">
                                <li><a href="#">apple watch </a></li>
                                <li><a href="#">samsung</a></li>
                                <li><a href="#">oppo</a></li>
                                <li><a href="#">xiaomi</a></li>

                              </ul>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown "> <a href="contact.html"data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">phụ kiện</a>
                    <ul class="dropdown-menu pages">
                      <li>
                        <div class="yamm-content">
                          <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-2 col-menu">

                              <h2 class="title">phụ kiện</h2>
                              <ul class="links">
                                <li><a href="#">tai nghe</a></li>
                                <li><a href="#">loa</a></li>
                                <li><a href="#">chuột</a></li>
                                <li><a href="#">bàn phím</a></li>
                                <li><a href="#">đế tản nhiệt</a></li>
                                <li><a href="#">ốp lưng</a></li>
                                <li><a href="#">sạc dự phòng</a></li>
                                <li><a href="#">sạc điện thoại</a></li>

                              </ul>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown "> <a href="contact.html"data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">máy ảnh</a>
                    <ul class="dropdown-menu pages">
                      <li>
                        <div class="yamm-content">
                          <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-2 col-menu">
                              <h2 class="title">máy ảnh</h2>
                              <ul class="links">
                                <li><a href="#">Accessories</a></li>
                                <li><a href="#">Binoculars</a></li>
                                <li><a href="#">Telescopes</a></li>
                                <li><a href="#">Camcorders</a></li>
                                <li><a href="#">Digital</a></li>

                              </ul>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </li>

                  
                  
                </ul>
                <!-- /.navbar-nav -->
                <div class="clearfix"></div>
              </div>
              <!-- /.nav-outer -->
            </div>
            <!-- /.navbar-collapse -->

          </div>
          <!-- /.nav-bg-class -->
        </div>
        <!-- /.navbar-default -->
      </div>
      <!-- /.container-class -->

    </div>
    <!-- /.header-nav -->
    <!-- ============================================== NAVBAR : END ============================================== -->

  </header>
</body>

<body>





  <div>
    @yield('content')

  </div>

  <div>


  </div>
  @extends('layouts.footer')



</body>

</html>