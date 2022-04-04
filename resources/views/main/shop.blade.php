@extends('layouts.main')

@section('content')
	

		
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- ASIDE -->
					<div id="aside" class="col-md-3">
						<!-- aside Widget -->
						<div class="aside">
							<h3 class="aside-title">Categories</h3>
							<div class="checkbox-filter">
								@foreach ($categories as $category)
								<div class="input-checkbox">
									<input type="checkbox" id="category-1">
									<label for="category-1">
										<span></span>
										{{$category->title}}
										<small>(120)</small>
									</label>
								</div>								
								@endforeach

							</div>
						</div>
						<!-- /aside Widget -->

						<!-- aside Widget -->
						<div class="aside">
							<h3 class="aside-title">Price</h3>
							<div class="price-filter">
								<div id="price-slider"></div>
								<div class="input-number price-min">
									<input id="price-min" type="number">
									<span class="qty-up">+</span>
									<span class="qty-down">-</span>
								</div>
								<span>-</span>
								<div class="input-number price-max">
									<input id="price-max" type="number">
									<span class="qty-up">+</span>
									<span class="qty-down">-</span>
								</div>
							</div>
						</div>
						<!-- /aside Widget -->

						<!-- aside Widget -->
						<div class="aside">
							<h3 class="aside-title">Brand</h3>
							<div class="checkbox-filter">
								@foreach($brands as $brand)
								<div class="input-checkbox">
									<input type="checkbox" id="brand-1">
									<label for="brand-1">
										<span></span>
										{{$brand->title}}
										<small>(578)</small>
									</label>
								</div>
								@endforeach
							</div>
						</div>

					</div>
					<!-- /ASIDE -->

					<!-- STORE -->
					<div id="store" class="col-md-9">
						<!-- store top filter -->
						<div class="store-filter clearfix">
							<div class="store-sort">
								<label>
									Sort By:
									<select class="input-select">
										<option value="0">Popular</option>
										<option value="1">Position</option>
									</select>
								</label>

								<label>
									Show:
									<select class="input-select">
										<option value="0">20</option>
										<option value="1">50</option>
									</select>
								</label>
							</div>
							
						</div>
						<!-- /store top filter -->

						<!-- store products -->
						<div class="row">
							<!-- product -->
							<div class="col-md-12">
								<div class="row">
									<div class="products-tabs">
										<!-- tab -->
										<div id="tab1" class="tab-pane active">
											<div class="products-slick" data-nav="#slick-nav-1">
												<!-- product -->
												@foreach ($goods as $good)
												<div class="product">
													<div class="product-img">
														<img src="  {{asset('storage/' . $good->preview_image)}}"  alt="">
														<div class="product-label">
															<span class="sale">-30%</span>
															<span class="new">NEW</span>
														</div>
													</div>
													<div class="product-body">
														<p class="product-category">{{$good->category->title}}</p>
														<h3 class="product-name"><a href="#">{{$good->title}}</a></h3>
														<h4 class="product-price">{{$good->price}} <del class="product-old-price">{{$good->offer_price}}</del></h4>
														<div class="product-rating">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
														</div>
														<div class="product-btns">
															<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
															<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
															<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
														</div>
													</div>
													<div class="add-to-cart">
														<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
													</div>
												</div>
												@endforeach
												<!-- /product -->
		
											</div>
							<!-- /product -->

						</div><!-- product -->
						</div>
							<!-- /product -->
						</div>
						<!-- /store products -->

						<!-- store bottom filter -->
						
							<ul class="store-pagination">
								<li class="active">1</li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
							</ul>
						</div>
						<!-- /store bottom filter -->
					</div>
					<!-- /STORE -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- NEWSLETTER -->
		<div id="newsletter" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="newsletter">
							<p>Sign Up for the <strong>NEWSLETTER</strong></p>
							<form>
								<input class="input" type="email" placeholder="Enter Your Email">
								<button class="newsletter-btn"><i class="fa fa-envelope"></i> Subscribe</button>
							</form>
							<ul class="newsletter-follow">
								<li>
									<a href="#"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-instagram"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-pinterest"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>

		@endsection
		<!-- /NEWSLETTER -->

		<!-- FOOTER -->

		<!-- /FOOTER -->

		<!-- jQuery Plugins -->


