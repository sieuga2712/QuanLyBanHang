@extends('layouts.header')
@section('content')

<div class="body-content outer-top-xs">
    <div class="container">
        <div class="row ">
            <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder" style="padding: 0px 30px 0px 0px; border:0px 60px 0px 0px;">
                <div class="body-content outer-top-xs">



                    @if(Session::has("cart") !=null)
                    <div class="shopping-cart" style="padding: 0px 0px 0px 0px;">
                        <div class="shopping-cart-table " id="shoppingcart">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>

                                            <th class="cart-description item" style="width: 10px;">hình ảnh</th>
                                            <th class="cart-product-name item" style="width: 100px;" style="padding: 20px 0px 20px 0px; width: 250px;">tên sản phẩm</th>

                                            <th class="cart-qty item" style="width: 50px;" style="padding: 20px 0px 20px 0px;">số lượng</th>

                                            <th class="cart-total last-item" style="width: 80px;" style="padding: 20px 0px 20px 0px;">tổng giá</th>
                                        </tr>
                                    </thead><!-- /thead -->



                                    <tbody>
                                        @foreach(Session::get('cart')->product as $pro)
                                        <tr>

                                            <td class="cart-image" style="width: 10px;text-align:center; ">

                                                <img src="{{$pro['productinfo']->image}}" alt="">

                                            </td>
                                            <td class="cart-product-name-info" style="width: 100px;text-align:center;">
                                                <h4 class='cart-product-description'><a href="detail.html">{{$pro['productinfo']->name}}</a></h4>
                                                <!-- /.row -->

                                            </td>

                                            <td class="cart-product-quantity" style="width: 50px;">





                                                <span class="cart-sub-total-price">{{$pro['quanty']}}</span>

                                            </td>
                                            <td class="cart-product-grand-total" style="width: 80px;"><span class="cart-grand-total-price">{{$pro['price']}}</span></td>
                                        </tr>
                                        @endforeach
                                    </tbody>




                                    <!-- /tbody -->
                                </table><!-- /table -->
                            </div>
                        </div><!-- /.shopping-cart-table -->

                        @endif
                        <!-- /.cart-shopping-total -->
                        <!-- /.shopping-cart -->
                    </div> <!-- /.row -->
                    <!-- ============================================== BRANDS CAROUSEL ============================================== -->
                    <!-- /.logo-slider -->
                    <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
                    <!-- /.container -->
                </div><!-- /.body-content -->
            </div>

            <div class="col-xs-12 col-sm-12 col-md-3 sidebar">

                <div class="body-content outer-top-xs" style="width: 400px;">
                    <div class="sidebar-widget product-tag wow fadeInUp animated">
                        <form method="POST" action="/taodonhang">
                            {{csrf_field()}}
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>

                                        <p>nhap thong tin giao hang.</p>
                                    </th>
                                </tr>
                            </thead><!-- /thead -->
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="form-group">
                                            <label class="info-title control-label">que quan <span>*</span></label>
                                            <select class="form-control unicase-form-control selectpicker" id="quequan" name="quequan">
                                                <option value="0">--Select options--</option>
                                                <option value="hanoi">Ha Noi</option>
                                                <option value="tp.hochiminh">tp. Ho Chi Minh</option>
                                                <option value= "phutho">Phu Tho</option>
                                                <option value="laocai">Lao Cai</option>
                                                <option value="danang">Da nang</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="info-title control-label">dia chi <span>*</span></label>
                                            <textarea id="diachi" name="diachi" rows="4" cols="38">

                                            </textarea>
                                        </div>


                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        <div class="cart-sub-total">
                                            tong so tien: <span class="inner-left-md">{{Session::get('cart')->totalprice}} đ</span>
                                        </div>

                                    </th>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="cart-checkout-btn pull-right">
                                            <button type="submit" onclick="return kiemtra()"  class="btn btn-primary checkout-btn">giao hang</button>

                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

<!-- ============================================================= FOOTER ============================================================= -->
@endsection