@extends('layouts.main')

@section('content')
	

		
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- ASIDE -->
					<form method="get" action="{{route('main.filter')}}">
						@csrf
					<div id="aside" class="col-md-3">
						
						<!-- aside Widget -->
						<div class="aside">
							<h3 class="aside-title">Categories</h3>
							<div class="checkbox-filter">
								@foreach ($categories as $category)
								<div class="input-checkbox">
									<input  type="checkbox" id="category_{{$category->id}}" value="{{$category->id}}" name="category[]">
									<label for="category_{{$category->id}}">
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
									<input id="price-min" type="number" name="price_min">
									<span class="qty-up">+</span>
									<span class="qty-down">-</span>
								</div>
								<span>-</span>
								<div class="input-number price-max">
									<input id="price-max" type="number" name="price_max">
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
									<input type="checkbox" name="brand[]" value="{{$brand->id}}" id="brand_{{$brand->id}}">
									<label for="brand_{{$brand->id}}">
										<span></span>
										{{$brand->title}}
										<small>(578)</small>
									</label>
								</div>
								@endforeach
							</div>
						</div>

						<button class="filter-btn" type="submit"  >Filter</button>
					</div>
				</form>

					<div id="store" class="col-md-9">
						<!-- store top filter -->
						<div class="store-filter clearfix">
							<div class="store-sort">					
							</div>
							
						</div>
						<!-- /store top filter -->

						<!-- store products -->
						<div class="row">
							<!-- product -->
							@foreach($goods as $good)
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<div class="product-img">
										<img src="{{asset('storage/' . $good->preview_image)}}" width="240" height="240" alt="">
										<div class="product-label">

										</div>
									</div>
									<div class="product-body">
										<p class="product-category">{{$good->category->title}}</p>
										<h3 class="product-name"><a href="#">{{$good->title}}</a></h3>
										<h4 class="product-price">{{$good->price}} <del class="product-old-price">{{$good->offer_price}}</del></h4>
										
										<div class="product-btns normal-btns">
												<form   class="product-btns" action=@if(auth()->check())"{{route('favorite.store', $good->id)}}" @else "{{route('favorite.cookie', $good->id)}}" @endif method="get">
												<button  class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">@if(in_array($good->id,$favoriteIds))Удалить из избранного @else Добавить в избранное @endif</span></button>
												@csrf
											</form>
											<button class="quick-view"><a href="{{route('main.show',$good->id)}}"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></a></button>
											</div>
									</div>
									<div class="add-to-cart">
										<button class="add-to-cart-btn"><a href="{{route('cart.store',$good->id)}}"><i class="fa fa-shopping-cart"></i> add to cart</button>
									</div>
								</div>
							</div>
							@endforeach
						
							<!-- /product -->
						</div>
						<!-- /store products -->

						<!-- store bottom filter -->
						<div class="store-filter clearfix" >

							<ul class="store-pagination">
								
									{{$goods->links()}}
									
								
							</ul>
						</div>
						
						<!-- /store bottom filter -->
					
					</div>
				</div>
			</div>
		</div>
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


