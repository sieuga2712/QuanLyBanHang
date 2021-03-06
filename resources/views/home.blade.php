@extends('layouts.header')
@section('content')
@php
$che=\App\Http\Controllers\Auth\loginController::checklogin();
$listhot=\App\Models\sanpham::sanphamhot();

@endphp

<!-- ============================================== HEADER : END ============================================== -->
<div class="body-content outer-top-xs" id="top-banner-and-menu">
  <div class="container">
    <div class="row">


      <!-- ============================================== CONTENT ============================================== -->
      <div class="col-xs-12 col-sm-12 col-md-12wide-banners wow fadeInUp outer-bottom-xs animated homebanner-holder">
        <!-- ========================================== SECTION – HERO(quảng cáo) ========================================= -->

        <div id="hero">
          <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">

            <div class="item" style="background-image: url(assets/images/sliders/01.jpg);">
              <div class="container-fluid">
                <div class="caption bg-color vertical-center text-left">

                  <div class="button-holder fadeInDown-3"> <a href="index.php?page=single-product" class="btn-lg btn btn-uppercase btn-primary shop-now-button">tìm hiểu thêm</a> </div>
                </div>
                <!-- /.caption -->
              </div>
              <!-- /.container-fluid -->
            </div>

            <div class="item" style="background-image: url(assets/images/sliders/02.jpg);">
              <div class="container-fluid">
                <div class="caption bg-color vertical-center text-left">

                  <div class="button-holder fadeInDown-3"> <a href="index.php?page=single-product" class="btn-lg btn btn-uppercase btn-primary shop-now-button">tìm hiểu thêm</a> </div>
                </div>
                <!-- /.caption -->
              </div>
              <!-- /.container-fluid -->
            </div>
            <!-- /.item -->


            <!-- /.item -->

          </div>
          <!-- /.owl-carousel -->
        </div>

        <!-- ========================================= SECTION – HERO : END ========================================= -->

        <!-- ============================================== INFO BOXES(quảng cáo) ============================================== -->
        <div class="info-boxes wow fadeInUp">
          <div class="info-boxes-inner">
            <div class="row">
              <div class="col-md-6 col-sm-4 col-lg-4">
                <div class="info-box">
                  <div class="row">
                    <div class="col-xs-12">
                      <h4 class="info-box-heading green">money back</h4>
                    </div>
                  </div>
                  <h6 class="text">30 Days Money Back Guarantee</h6>
                </div>
              </div>
              <!-- .col -->

              <div class="hidden-md col-sm-4 col-lg-4">
                <div class="info-box">
                  <div class="row">
                    <div class="col-xs-12">
                      <h4 class="info-box-heading green">free shipping</h4>
                    </div>
                  </div>
                  <h6 class="text">Shipping on orders over $99</h6>
                </div>
              </div>
              <!-- .col -->

              <div class="col-md-6 col-sm-4 col-lg-4">
                <div class="info-box">
                  <div class="row">
                    <div class="col-xs-12">
                      <h4 class="info-box-heading green">Special Sale</h4>
                    </div>
                  </div>
                  <h6 class="text">Extra $5 off on all items </h6>
                </div>
              </div>
              <!-- .col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.info-boxes-inner -->

        </div>
        <div id="product-tabs-slider" class="scroll-tabs outer-top-vs wow fadeInUp">
          <div class="more-info-tab clearfix ">
            <h3 class="new-product-title pull-left">HOT</h3>
            
            <!-- /.nav-tabs -->
          </div>
          <div class="tab-content outer-top-xs">
            @php
              $s=1;
            @endphp
            

           
            <?php
            if($s==1){?>

            <div class="tab-pane in active" >
              <div class="product-slider">
                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">
                  
                  @foreach($listhot as $value)
                  <div class="item item-carousel">
                    <div class="products" >
                      <div class="product">
                        <div class="product-image" >
                          <div class="image"> <a href="/chi-tiet/{{$value->mahang}}"><img src="assets\\images\\sanpham\\{{$value->maloai}}\\{{$value->maloai}}_{{$value->manhasanxuat}}.png" style=" height: 300px; " alt=""></a> </div>
                          <!-- /.image -->

                          <div class="tag new" style="background-color: red;"><span>HOT</span></div>
                        </div>
                        <!-- /.product-image -->

                        <div class="product-info text-left">
                          <h3 class="name"><a href="/chi-tiet/{{$value->mahang}}">{{$value->mahang}}</a></h3>
                          
                          <div class="description"></div>
                          <div class="product-price"> <span class="price"> {{$value->dongia}} đồng </span> </div>
                          <!-- /.product-price -->

                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                              <a onclick="addcart('{{$value->mahang}}','{{$value->soluong}}')" href="javascript:">
                                <button data-toggle="tooltip" class="btn btn-primary icon" type="button" title="Add Cart"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">thêm vào giỏ</button>
                              </a>
                              </li>
                              </ul>
                          </div>
                          <!-- /.action -->
                        </div>
                        <!-- /.cart -->
                      </div>
                      <!-- /.product -->

                    </div>
                    <!-- /.products -->
                  </div>
                  @endforeach
                  <!-- /.item -->


                  <!-- /.item -->
                </div>
                <!-- /.home-owl-carousel -->
              </div>
              <!-- /.product-slider -->
            </div>
            <?php
            $s++;
            }
            else 
            {?>
            <div class="tab-pane" >
              <div class="product-slider">
                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">
                 
                  @foreach($listhot as $value)
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="/chi-tiet/{{$value->mahang}}"><img src="assets\\images\\sanpham\\{{$value->maloai}}\\{{$value->maloai}}_{{$value->manhasanxuat}}.png" 
                          style=" height: 300px;"
                          alt=""></a> </div>
                          <!-- /.image -->

                          <div class="tag new" style="background-color: red;" ><span>HOT</span></div>
                        </div>
                        <!-- /.product-image -->

                        <div class="product-info text-left">
                          <h3 class="name"><a href="/chi-tiet/{{$value->mahang}}">{{$value->mahang}}</a></h3>
                          
                          <div class="description"></div>
                          <div class="product-price"> <span class="price"> {{$value->dongia}} đồng </span> </div>
                          <!-- /.product-price -->

                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                              <a onclick="addcart('{{$value->mahang}}','{{$value->soluong}}')" href="javascript:">
                                <button data-toggle="tooltip" class="btn btn-primary icon" type="button" title="Add Cart"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">thêm vào giỏ</button>
                              </a>
                              </li>
                              </ul>
                          </div>
                          <!-- /.action -->
                        </div>
                        <!-- /.cart -->
                      </div>
                      <!-- /.product -->

                    </div>
                    <!-- /.products -->
                  </div>
                  @endforeach
                  <!-- /.item -->


                  <!-- /.item -->
                </div>
                <!-- /.home-owl-carousel -->
              </div>
              <!-- /.product-slider -->
            </div>


            <?php
            }
            ?>
            <!-- /.tab-pane -->
            

            <!-- /.tab-pane -->

          </div>
          <!-- /.tab-content -->
        </div>
        <!-- /.info-boxes -->
        <!-- ============================================== INFO BOXES : END ============================================== -->
        <!-- ============================================== BEST SELLER ============================================== -->

        
        <!-- ============================================== END: BEST SELLER ============================================== -->

        <!-- ============================================== SCROLL TABS ============================================== -->
@php

$info=\App\Models\sanpham::get_loaihang();
$list=\App\Models\sanpham::get_hang();

@endphp
        @foreach($info as $loaihang)
        <div id="product-tabs-slider" class="scroll-tabs outer-top-vs wow fadeInUp">
          <div class="more-info-tab clearfix ">
            <h3 class="new-product-title pull-left">{{$loaihang->tenloaihang}}</h3>
            <ul class="nav nav-tabs nav-tab-line pull-right" id="new-products-1">
             
              <li class="active">
                @foreach($list[$loaihang->maloaihang] as $hang)
                <a data-transition-type="backSlide" href="#{{$hang.$loaihang->maloaihang}}" data-toggle="tab">{{$hang}}</a>
              </li>
              <li>
                @endforeach
              </li>
            </ul>
            <!-- /.nav-tabs -->
          </div>
          <div class="tab-content outer-top-xs">
            @php
              $s=1;
            @endphp
            @foreach($list[$loaihang->maloaihang] as $hang)

           
            <?php
            if($s==1){?>

            <div class="tab-pane in active" id="{{$hang.$loaihang->maloaihang}}">
              <div class="product-slider">
                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">
                  @php
                  $dsapple=\App\Models\sanpham::listsanpham($hang,"$loaihang->maloaihang");
                  @endphp
                  @foreach($dsapple as $value)
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="/chi-tiet/{{$value->mahang}}"><img src="assets\\images\\sanpham\\{{$value->maloai}}\\{{$value->maloai}}_{{$value->manhasanxuat}}.png" style="height: 300px;" alt=""></a> </div>
                          <!-- /.image -->

                          <div class="tag new"><span>new</span></div>
                        </div>
                        <!-- /.product-image -->

                        <div class="product-info text-left">
                          <h3 class="name"><a href="/chi-tiet/{{$value->mahang}}">{{$value->mahang}}</a></h3>
                          
                          <div class="description"></div>
                          <div class="product-price"> <span class="price"> {{$value->dongia}} đồng </span> </div>
                          <!-- /.product-price -->

                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                              <a onclick="addcart('{{$value->mahang}}','{{$value->soluong}}')" href="javascript:">
                                <button data-toggle="tooltip" class="btn btn-primary icon" type="button" title="Add Cart"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">thêm vào giỏ</button>
                              </a>
                              </li>
                              </ul>
                          </div>
                          <!-- /.action -->
                        </div>
                        <!-- /.cart -->
                      </div>
                      <!-- /.product -->

                    </div>
                    <!-- /.products -->
                  </div>
                  @endforeach
                  <!-- /.item -->


                  <!-- /.item -->
                </div>
                <!-- /.home-owl-carousel -->
              </div>
              <!-- /.product-slider -->
            </div>
            <?php
            $s++;
            }
            else 
            {?>
            <div class="tab-pane" id="{{$hang.$loaihang->maloaihang}}">
              <div class="product-slider">
                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">
                  @php
                  $dsapple=\App\Models\sanpham::listsanpham($hang,$loaihang->maloaihang);
                  @endphp
                  @foreach($dsapple as $value)
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="/chi-tiet/{{$value->mahang}}"><img src="assets\\images\\sanpham\\{{$value->maloai}}\\{{$value->maloai}}_{{$value->manhasanxuat}}.png" style="height: 300px;" alt=""></a> </div>
                          <!-- /.image -->

                          <div class="tag new"><span>new</span></div>
                        </div>
                        <!-- /.product-image -->

                        <div class="product-info text-left">
                          <h3 class="name"><a href="/chi-tiet/{{$value->mahang}}">{{$value->mahang}}</a></h3>
                          
                          <div class="description"></div>
                          <div class="product-price"> <span class="price"> {{$value->dongia}} đồng </span> </div>
                          <!-- /.product-price -->

                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              <li class="add-cart-button btn-group">
                              <a onclick="addcart('{{$value->mahang}}','{{$value->soluong}}')" href="javascript:">
                                <button data-toggle="tooltip" class="btn btn-primary icon" type="button" title="Add Cart"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">thêm vào giỏ</button>
                              </a>
                              </li>
                              </ul>
                          </div>
                          <!-- /.action -->
                        </div>
                        <!-- /.cart -->
                      </div>
                      <!-- /.product -->

                    </div>
                    <!-- /.products -->
                  </div>
                  @endforeach
                  <!-- /.item -->


                  <!-- /.item -->
                </div>
                <!-- /.home-owl-carousel -->
              </div>
              <!-- /.product-slider -->
            </div>


            <?php
            }
            ?>
            <!-- /.tab-pane -->
            @endforeach

            <!-- /.tab-pane -->

          </div>
          <!-- /.tab-content -->
        </div>
        @endforeach
        <!-- /.scroll-tabs -->
        <!-- ============================================== SCROLL TABS : END ============================================== -->

        
        
      

      </div>
      <!-- /.homebanner-holder -->
      <!-- ============================================== CONTENT : END ============================================== -->
    </div>
    <!-- /.row -->
    <!-- ============================================== BRANDS CAROUSEL ============================================== -->

    <!-- /.logo-slider -->
    <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
  </div>
  <!-- /.container -->
</div>
<!-- /#top-banner-and-menu -->

@endsection