

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