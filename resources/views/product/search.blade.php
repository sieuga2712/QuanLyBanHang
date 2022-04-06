@extends('layouts.header') 
@section('content')
<div class='container'>
  <div class='row'>

      <div class='col-md-12'> 
        <!-- ========================================== SECTION – HERO ========================================= -->
        
        
        
     
        <div class="clearfix filters-container m-t-10">
          <div class="row">
            
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
                <div class="row">
                @foreach($sanpham as $value)
                  <div class="col-sm-6 col-md-3 wow fadeInUp">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> <a href="/chi-tiet/{{$value->mahang}}"><img src="http://localhost:8000/{{$value->image}}" style=" height: 500px;" alt=""></a> </div>
                          <!-- /.image -->
                          
                         
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="/chi-tiet/{{$value->mahang}}">{{$value->name}}</a></h3>
                          
                          <div class="description"></div>
                          <div class="product-price"> <span class="price"> {{$value->dongia}} đồng</span>  </div>
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
                              <li class="lnk wishlist"> <a class="add-to-cart" href="{{$value->mahang . '-' . $value->id}}" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                              <li class="lnk"> <a class="add-to-cart" href="{{$value->mahang . '-' . $value->id}}" title="Compare"> <i class="fa fa-signal"></i> </a> </li>
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
              <!-- /.pagination-container --> </div>
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