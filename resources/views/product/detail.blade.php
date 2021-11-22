@extends('layouts.header')
@section('content')
<div class='row single-product'>

	<div class='col-md-12'>
		<div class="detail-block">
			<div class="row  wow fadeInUp">

				<div class="col-xs-12 col-sm-6 col-md-5 gallery-holder">
					<div class="product-item-holder size-big single-product-gallery small-gallery">

						<div id="owl-single-product">
							<div class="single-product-gallery-item" id="slide1">

								<img class="img-responsive" alt="" src="http://localhost:8000/{{$sanpham[0]->image}}">

							</div><!-- /.single-product-gallery-item -->

							<!-- /.single-product-gallery-item -->

						</div><!-- /.single-product-slider -->

					</div><!-- /.single-product-gallery -->
				</div><!-- /.gallery-holder -->
				<div class='col-sm-6 col-md-7 product-info-block'>
					<div class="product-info">
						<h1 class="name">{{$sanpham[0]->name}}</h1>

						<div class="rating-reviews m-t-20">
							<div class="row">
								<div class="col-sm-3">
									
								</div>
								<div class="col-sm-8">
									
								</div>
							</div><!-- /.row -->
						</div><!-- /.rating-reviews -->

						<div class="stock-container info-container m-t-10">
							<div class="row">
								<div class="col-sm-2">
									<div class="stock-box">
										<span class="label">tình trạng :</span>
									</div>
								</div>
								<div class="col-sm-9">
									<div class="stock-box">
										@if($sanpham[0]->soluong>0)
										<span class="value">còn hàng</span>
										@else
										<span class="value">hết hàng</span>
										@endif
									</div>
								</div>
							</div><!-- /.row -->
						</div><!-- /.stock-container -->

						<div class="description-container m-t-20">
						</div><!-- /.description-container -->

						<div class="price-container info-container m-t-20">
							<div class="row">


								<div class="col-sm-6">
									<div class="price-box">
										<span class="price">{{$sanpham[0]->dongia}} đồng</span>

									</div>
								</div>

								<div class="col-sm-6">
									
								</div>

							</div><!-- /.row -->
						</div><!-- /.price-container -->

						<div class="quantity-container info-container">
							<div class="row">

								<div class="col-sm-2">
									<span class="label">Số lượng :</span>
								</div>

								<div class="col-sm-2">
									<div class="cart-quantity">
										<div class="quant-input">
											<div class="arrows">
												<div class="arrow plus gradient"><span class="ir"><i class="icon fa fa-sort-asc"></i></span></div>
												<div class="arrow minus gradient"><span class="ir"><i class="icon fa fa-sort-desc"></i></span></div>
											</div>
											<input type="text" value="1">
										</div>
									</div>
								</div>

								<div class="col-sm-7">

									<a onclick="addcart('{{$sanpham[0]->mahang}}','{{$sanpham[0]->soluong}}')" href="javascript:" class="btn btn-primary">
										<i class="fa fa-shopping-cart inner-right-vs"></i> ADD TO CART
									</a>

								</div>


							</div><!-- /.row -->
						</div><!-- /.quantity-container -->






					</div><!-- /.product-info -->
				</div><!-- /.col-sm-7 -->
			</div><!-- /.row -->
		</div>

		<div class="product-tabs inner-bottom-xs  wow fadeInUp">
			<div class="row">
				<div class="col-sm-3">
					<ul id="product-tabs" class="nav nav-tabs nav-tab-cell">
						<li class="active"><a data-toggle="tab" href="#description">DESCRIPTION</a></li>
						

					</ul><!-- /.nav-tabs #product-tabs -->
				</div>
				<div class="col-sm-9">

					<div class="tab-content">

						<div id="description" class="tab-pane in active">
							<div class="product-tab">
								<p class="text">{{$sanpham[0]->mota}}</p>
							</div>
						</div><!-- /.tab-pane -->

						<!-- /.tab-pane -->



					</div><!-- /.tab-content -->
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.product-tabs -->

		<!-- ============================================== UPSELL PRODUCTS ============================================== -->
		<section class="section featured-product wow fadeInUp">
			<h3 class="section-title">upsell products</h3>
			<div class="owl-carousel home-owl-carousel upsell-product custom-carousel owl-theme outer-top-xs">
				@foreach($ListRelatedProduct as $value)
				<div class="item item-carousel" style="width:125px;">
					<div class="products">

						<div class="product">
							<div class="product-image">
								<div class="image">
									<a href="/chi-tiet/{{$value->mahang}}"><img src="http://localhost:8000/{{$value->image}}" alt=""></a>
								</div><!-- /.image -->
								
							</div><!-- /.product-image -->
							<div class="product-info text-left">
								<h3 class="name"><a href="/chi-tiet/{{$value->mahang}}">{{$value->name}}</a></h3>
								
								<div class="description"></div>

								<div class="product-price">
									<span class="price">{{$value->dongia}} đồng</span>
									
								</div><!-- /.product-price -->

							</div><!-- /.product-info -->

							<div class="cart clearfix animate-effect">
								<div class="action">
									<ul class="list-unstyled">
										<li class="add-cart-button btn-group">
											<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
												<i class="fa fa-shopping-cart"></i>
											</button>
											<button class="btn btn-primary cart-btn" type="button">Add to cart</button>

										</li>

										
									</ul>
								</div><!-- /.action -->
							</div><!-- /.cart -->
						</div><!-- /.product -->
					</div><!-- /.products -->
				</div><!-- /.item -->
				@endforeach

			</div><!-- /.home-owl-carousel -->
		</section><!-- /.section -->
		<!-- ============================================== UPSELL PRODUCTS : END ============================================== -->

	</div><!-- /.col -->
	<div class="clearfix"></div>
</div>
@endsection