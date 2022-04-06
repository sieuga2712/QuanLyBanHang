@extends('layouts.header')
@section('content')
<div class='container'>
  <div class='row'>
      <div class='col-md-3 sidebar'> 
        <!-- ================================== TOP NAVIGATION ================================== -->
        <div class="side-menu animate-dropdown outer-bottom-xs">
          <div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Categories</div>
          <nav class="yamm megamenu-horizontal">
            <ul class="nav">

              @php 
              $info=\App\Models\sanpham::get_loaihang();
              $list=\App\Models\sanpham::get_hang();
              @endphp

              @foreach($info as $value)
              <li class="dropdown menu-item">
                 <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="text-transform: uppercase;">
                    <i class="icon fa fa-shopping-bag" aria-hidden="true"></i> {{$value->tenloaihang}}</a>
                <ul class="dropdown-menu mega-menu" style="min-width:100%">
                  <li class="yamm-content">
                    <div class="row" >
                    <div class="col-sm-12 col-md-3">
                    @foreach($list[$value->maloaihang] as $loai)   
                      
                        <ul class="links list-unstyled">                
                          <li><a href="/{{$value->maloaihang}}/{{$loai}}" style="text-transform: uppercase;">{{$loai}}</a></li>                                                                                
                        </ul>
                      
                    @endforeach  
                    </div>
                      <!-- /.col -->                 
                    </div>
                    <!-- /.row --> 
                  </li>
                  <!-- /.yamm-content -->
                </ul>
                <!-- /.dropdown-menu --> </li>
              <!-- /.menu-item -->
              @endforeach
            </ul>
            <!-- /.nav --> 
          </nav>
          <!-- /.megamenu-horizontal --> 
        </div>
        <!-- /.side-menu --> 
        <!-- ================================== TOP NAVIGATION : END ================================== -->
        <div class="sidebar-module-container">
          <div class="sidebar-filter">           <!-- ============================================== PRICE SILDER============================================== -->
            <div class="sidebar-widget wow fadeInUp">
              <div class="widget-header">
                <h4 class="widget-title">Price Slider</h4>
              </div>
              <div class="sidebar-widget-body m-t-10">
                <div class="price-range-holder"> 
                  <span class="min-max"> 
     

                    <span class="pull-left" id ="min">0</span>
                    <span  class="pull-right" id ="max">{{$max_price[0]-> max_price}}</span> 
                  </span>
                  <input type="text" id="amount" style="border:0; color:#666666; font-weight:bold;text-align:center;">
                  <input type="text" class="price-slider"  id = "price" value="">
                </div>
                <!-- /.price-range-holder --> 
                <a href="javascript:" id ="show" class="lnk btn btn-primary">Show Now</a> </div>
              <!-- /.sidebar-widget-body --> 
            </div>
            <!-- /.sidebar-widget --> 
            <!-- ============================================== PRICE SILDER : END ============================================== --> 
            <!-- ============================================== MANUFACTURES============================================== -->
            <div class="sidebar-widget wow fadeInUp">
              
              <div class="sidebar-widget-body">
                <ul class="list">
                  @foreach($brand as $br)                
                    <li><a href="/{{$br->maloai}}/{{$br->manhasanxuat}}">{{$br->TenNhaSanXuat}}</a></li>    
                   @endforeach                
                </ul>
                <!--<a href="#" class="lnk btn btn-primary">Show Now</a>--> 
              </div>
              <!-- /.sidebar-widget-body --> 
            </div>
            <!-- /.sidebar-widget --> 
            <!-- ============================================== MANUFACTURES: END ============================================== --> 
            <!-- ============================================== COMPARE============================================== -->
            
            <!-- /.sidebar-widget --> 
            <!-- ============================================== COMPARE: END ============================================== -->           
            
          </div>
          <!-- /.sidebar-filter --> 
        </div>
        <!-- /.sidebar-module-container --> 
      </div>
      <!-- /.sidebar -->
      <div class='col-md-9'> 
        <!-- ========================================== SECTION – HERO ========================================= -->
        <div class="clearfix filters-container m-t-10">
          <div class="row">
            <div class="col col-sm-6 col-md-2">
              <div class="filter-tabs">
                <ul id="filter-tabs" class="nav nav-tabs nav-tab-box nav-tab-fa-icon">
                   </ul>
              </div>
              <!-- /.filter-tabs --> 
            </div>
            <!-- /.col -->
            <div class="col col-sm-12 col-md-6">
              <div class="col col-sm-3 col-md-6 no-padding">
               
                <!-- /.lbl-cnt --> 
              </div>
              <!-- /.col -->
              <div class="col col-sm-3 col-md-6 no-padding">
               
                <!-- /.lbl-cnt --> 
              </div>
              <!-- /.col --> 
            </div>
            <!-- /.col -->
            <div class="col col-sm-6 col-md-4 text-right">
             
              <!-- /.pagination-container --> </div>
            <!-- /.col --> 
          </div>
          <!-- /.row --> 
        </div>
        <div class="search-result-container ">
          <div id="myTabContent" class="tab-content category-list">
            <div class="tab-pane active " id="grid-container">
              <div class="category-product">
                <div class="row"  id ="result">
                @foreach($sanpham as $value)
                  <div class="col-sm-6 col-md-4 wow fadeInUp">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          
                          <div class="image"> <a href="/chi-tiet/{{$value->mahang}}"><img src="http://localhost:8000/{{$value->image}}" style="height: 300px;" alt=""></a> </div>
                          <!-- /.image -->
                          
                          
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="/chi-tiet/{{$value->mahang}}">{{$value->name}}</a></h3>
                          
                          <div class="description"></div>
                          <div class="product-price"> <span class="price"> {{$value->dongia}}</span> đồng </div>
                          <!-- /.product-price --> 
                          
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                          <div class="action">
                            <ul class="list-unstyled">
                              
                              <li class="add-cart-button btn-group">
                                <a onclick="addcart('{{$value->mahang}}','{{$value->soluong}}')" href="javascript:">
                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
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
                  <!-- /.item -->
                @endforeach
                </div>
                <!-- /.row --> 
              </div>
              <!-- /.category-product -->              
            </div>
            <!-- /.tab-pane -->       
            
            <!-- /.tab-pane #list-container --> 
          </div>
          <!-- /.tab-content -->
          <div class="clearfix filters-container">
            <div class="text-right">
            {{$sanpham->links("pagination::bootstrap-4")}}
              <!-- /.pagination-container --> 
            </div>
            <!-- /.text-right --> 
            
          </div>
          <!-- /.filters-container --> 
          
        </div>
        <!-- /.search-result-container --> 
        
      </div>
      <!-- /.col --> 
    </div>
    </div>
@endsection