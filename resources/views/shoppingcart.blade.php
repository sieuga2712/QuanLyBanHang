@extends('layouts.header')
@section('content')

<div class="body-content outer-top-xs">
	<div class="container">
		<div class="row ">

			@if(Session::has("cart") !=null)
			<div class="shopping-cart">
				<div class="shopping-cart-table " id="shoppingcart">
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th class="cart-romove item">xóa sản phẩm</th>
									<th class="cart-description item">hình ảnh</th>
									<th class="cart-product-name item">tên sản phẩm</th>

									<th class="cart-qty item">số lượng</th>
									<th class="cart-sub-total item">đơn giá</th>
									<th class="cart-total last-item">tổng giá</th>
								</tr>
							</thead><!-- /thead -->
							<tfoot>
								<tr>
									<td colspan="7">



										<div class="pull-right outer-right-xs">
											<h3>tổng số tiền: {{Session::get('cart')->totalprice}} đ</h3>
										</div>


									</td>
								</tr>
								<tr>
									<td colspan="7">
										<div class="shopping-cart-btn">
											<span class="">

												<a href="#" class="btn btn-upper btn-primary pull-right outer-right-xs">mua hàng</a>
											</span>
										</div><!-- /.shopping-cart-btn -->
									</td>
								</tr>
							</tfoot>


							<tbody>
								@foreach(Session::get('cart')->product as $pro)
								<tr>
									<td class="romove-item">
										<div id="removeincart">

											<a href="#" title="cancel" class="icon">
												<div class="remo">
													<i class="fa fa-trash-o" data-id="{{$pro['productinfo']->mahang}}"></i>
												</div>
											</a>
										</div>

									</td>
									<td class="cart-image">
										<a class="entry-thumbnail" href="detail.html">
											<img src="{{$pro['productinfo']->image}}" alt="">
										</a>
									</td>
									<td class="cart-product-name-info">
										<h4 class='cart-product-description'><a href="detail.html">{{$pro['productinfo']->name}}</a></h4>
										<div class="row">
											<div class="col-sm-4">
												<div class="rating rateit-small"></div>
											</div>
											<div class="col-sm-8">
												<div class="reviews">
													(06 Reviews)
												</div>
											</div>
										</div><!-- /.row -->

									</td>

									<td class="cart-product-quantity">
										<div class="quant-input">
											<div class="arrows">
												<div class="arrow plus gradient">
													<span class="ir">
														<a href="#">
															<div class="arrowup">
																<i class="icon fa fa-sort-asc" data-id="{{$pro['productinfo']->mahang}}"></i>
															</div>
														</a>

													</span>
												</div>
												<div class="arrow minus gradient">
													<span class="ir">
														<a href="#">
															<div class="arrowdown">
																<i class="icon fa fa-sort-desc" data-id="{{$pro['productinfo']->mahang}}"></i>
															</div>
														</a>
													</span>

												</div>
											</div>
											<input type="text" value="{{$pro['quanty']}}">
										</div>
									</td>
									<td class="cart-product-sub-total"><span class="cart-sub-total-price">{{$pro['productinfo']->dongia}}</span></td>
									<td class="cart-product-grand-total"><span class="cart-grand-total-price">{{$pro['price']}}</span></td>
								</tr>
								@endforeach
							</tbody>




							<!-- /tbody -->
						</table><!-- /table -->
					</div>
				</div><!-- /.shopping-cart-table -->
				@else
				<div class="body-content outer-top-xs">
					bạn chưa chọn mua sản phẩm nào
				</div>
				@endif
				<!-- /.cart-shopping-total -->
			</div><!-- /.shopping-cart -->
		</div> <!-- /.row -->
		<!-- ============================================== BRANDS CAROUSEL ============================================== -->
		<!-- /.logo-slider -->
		<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
	</div><!-- /.container -->
</div><!-- /.body-content -->

<!-- ============================================================= FOOTER ============================================================= -->
@endsection