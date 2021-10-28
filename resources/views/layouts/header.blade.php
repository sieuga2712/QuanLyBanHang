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
    <link rel="stylesheet" href="http://localhost:8000/assets\css\bootstrap.min.css">

    <!-- Customizable CSS -->
    <link rel="stylesheet" href="http://localhost:8000/assets\css\main.css">
    <link rel="stylesheet" href="http://localhost:8000/assets\css\blue.css">
    <link rel="stylesheet" href="http://localhost:8000/assets\css\owl.carousel.css">
    <link rel="stylesheet" href="http://localhost:8000/assets\css\owl.transitions.css">
    <link rel="stylesheet" href="http://localhost:8000/assets\css\animate.min.css">
    <link rel="stylesheet" href="http://localhost:8000/assets\css\rateit.css">
    <link rel="stylesheet" href="http://localhost:8000/assets\css\bootstrap-select.min.css">
    
    <!-- Icons/Glyphs -->
    <link rel="stylesheet" href="http://localhost:8000/assets\css\font-awesome.css">

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
                logout
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
            <div class="logo"> <a href="/"> <img width="190" height="90" src="http://localhost:8000/assets/images/logo.png" alt="logo"> </a> </div>
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
            

<div id="changcart">

@if(Session::has("cart") !=null)



<div class="dropdown dropdown-cart"> <a href="#" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
                <div class="items-cart-inner">
                  <div class="basket"> <i class="glyphicon glyphicon-shopping-cart"></i> </div>
                  <div class="basket-item-count"><span class="count">{{Session::get('cart')->totalpro}}</span></div>
                  <div class="total-price-basket"> <span class="lbl">cart -</span> <span class="total-price"> <span class="sign">Đ{{Session::get('cart')->totalprice}}</span><span class="value"></span> </span> </div>
                </div>
              </a>
              <ul class="dropdown-menu">
                
                <li>

                  <div class="cart-item product-summary">
                    @foreach(Session::get('cart')->product as $pro)
                    <div class="row">
                      <div class="col-xs-4">
                        <div class="image"> <a href="detail.html"><img src="http://localhost:8000/{{$pro['productinfo']->image}}" alt=""></a> </div>
                      </div>
                      <div class="col-xs-7">
                        <h3 class="name"><a href="index.php?page-detail"></a>{{$pro['productinfo']->mahang}}</h3>
                        <div class="price">đ {{$pro['productinfo']->dongia}} x {{$pro['quanty']}}</div>
                      </div>
                      <div class="col-xs-1 action"> 
                      
                        
                      <a href="#">
                      <div class="delete_product">
                        <i class="fa fa-trash" data-id="{{$pro['productinfo']->mahang}}"></i>
                      </div></a> 
                      
                    </div>
                    </div>
                    @endforeach
                  </div>
                 
                    
                  <!-- /.cart-item -->
                  <div class="clearfix"></div>
                  <hr>
                  <div class="clearfix cart-total">
                    <div class="pull-right"> <span class="text">Sub Total :</span><span class='price'>đ {{Session::get('cart')->totalprice}}</span> </div>
                    <div class="clearfix"></div>
                    <a href="/listcart" class="btn btn-upper btn-primary btn-block m-t-20">Checkout</a>
                  </div>
                  <!-- /.cart-total-->

                </li>
                
              </ul>
              <!-- /.dropdown-menu-->
            </div>
@else

<div class="dropdown dropdown-cart"> <a href="#" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
                <div class="items-cart-inner">
                  <div class="basket"> <i class="glyphicon glyphicon-shopping-cart"></i> </div>
                  <div class="basket-item-count"><span class="count">0</span></div>
                  <div class="total-price-basket"> <span class="lbl">cart -</span> <span class="total-price"> <span class="sign"></span><span class="value"></span> </span> </div>
                </div>
              </a>
              <ul class="dropdown-menu">
                
                <li>

                  <div class="cart-item product-summary">
                    <div>
                      bạn chưa chọn món đồ nào
                    </div>
                  </div>
                 
                    
                  <!-- /.cart-item -->
                  <div class="clearfix"></div>
                  <hr>
                  <div class="clearfix cart-total">
                    <div class="pull-right"> <span class="text">Sub Total :</span><span class='price'>đ 0</span> </div>
                    <div class="clearfix"></div>
                    <a href="/listcart" class="btn btn-upper btn-primary btn-block m-t-20">Checkout</a>
                  </div>
                  <!-- /.cart-total-->

                </li>
                
              </ul>
              <!-- /.dropdown-menu-->
            </div>




@endif


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
                  
                  @php 

                  $info=\App\Models\sanpham::get_loaihang();
                  $list=\App\Models\sanpham::get_hang();
                  @endphp
                  @foreach($info as $value)
                  <li class="dropdown "> <a href="{{ route('home') }}" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">{{$value->tenloaihang}}</a>
                    <ul class="dropdown-menu pages">
                      <li>
                        <div class="yamm-content ">
                          <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                              
                              <ul class="links">
                                @foreach($list[$value->maloaihang] as $loai)

                                <li><a href="#">{{$loai}}</a></li>
                                
                                @endforeach
                              </ul>
                            </div>


                            
                          </div>
                        </div>
                      </li>
                    </ul>
                  </li>
                  @endforeach
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