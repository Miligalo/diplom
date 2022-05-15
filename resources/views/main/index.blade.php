@extends('layouts.main')

@section('content')
		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="{{asset('assets/img/shop01.png')}}" alt="">
							</div>
							<div class="shop-body">
								<h3>Лучшие<br>Ноутбуки</h3>
								<a href="{{route('main.shop')}}" class="cta-btn">Купить<i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="{{asset('assets/img/shop03.png')}}" alt="">
							</div>
							<div class="shop-body">
								<h3>Лучшие<br>Наушники</h3>
								<a href="{{route('main.shop')}}" class="cta-btn">Купить <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="{{asset('assets/img/shop02.png')}}" alt="">
							</div>
							<div class="shop-body">
								<h3>Новейшие<br>Камеры</h3>
								<a href="{{route('main.shop')}}" class="cta-btn">Купить <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Новый товар</h3>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="#tab1">Laptops</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
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
												<img src="{{asset('storage/' . $good->preview_image)}}" width="200" height="200"  alt="">
												<div class="product-label">
													<span class="new">NEW</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">{{$good->category->title}}</p>
												<h3 class="product-name"><a href="#">{{$good->title}}</a></h3>
												<h4 class="product-price">{{$good->price}} <del class="product-old-price">{{$good->offer_price}}</del></h4>
												<div class="product-rating">
												</div>
												<div class="product-btns normal-btns">
													<form   class="product-btns" action=@if(auth()->check())"{{route('favorite.store', $good->id)}}" @else @if(in_array($good->id,$favoriteIds)) "{{route('favorite.cookie.delete', $good->id)}}" @else "{{route('favorite.cookie', $good->id)}}" @endif @endif method="get">
														<button  class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">@if(in_array($good->id,$favoriteIds))Удалить из избранного @else Добавить в избранное @endif</span></button>
														@csrf
													</form>
													<button class="quick-view"><a href="{{route('main.show',$good->id)}}"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></a></button>
													</div>
											</div>
											<div class="add-to-cart">
												<form   class="product-btns" action=@if(auth()->check())"{{route('cart.store', $good->id)}}" @else @if(in_array($good->id,$cartIds)) "{{route('cart.cookie.delete', $good->id)}}" @else "{{route('cart.cookie', $good->id)}}" @endif @endif method="get">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>@if(in_array($good->id,$cartIds))Удалить из корзины @else Добавить в корзину @endif</a></button>
												</form>
											</div>
										</div>

										@endforeach
										<!-- /product -->
										
									</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->



		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Лучшие товары</h3>
							
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab2" class="tab-pane fade in active">
									<div class="products-slick" data-nav="#slick-nav-2">
										<!-- product -->
										@foreach ($items as $item)
										<div class="product">
											<div class="product-img">
												<img src="{{asset('storage/' . $item->preview_image)}}" width="200" height="200"  alt="">
												<div class="product-label">
													<span class="new">NEW</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">{{$item->category->title}}</p>
												<h3 class="product-name"><a href="#">{{$item->title}}</a></h3>
												<h4 class="product-price">{{$item->price}} <del class="product-old-price">{{$item->offer_price}}</del></h4>
												<div class="product-rating">
												</div>
												<div class="product-btns normal-btns">
													<form   class="product-btns" action=@if(auth()->check())"{{route('favorite.store', $item->id)}}" @else @if(in_array($item->id,$favoriteIds)) "{{route('favorite.cookie.delete', $item->id)}}" @else "{{route('favorite.cookie', $item->id)}}" @endif @endif method="get">
														<button  class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">@if(in_array($item->id,$favoriteIds))Удалить из избранного @else Добавить в избранное @endif</span></button>
														@csrf
													</form>
													<button class="quick-view"><a href="{{route('main.show',$item->id)}}"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></a></button>
													</div>
											</div>
											<div class="add-to-cart">
												<form   class="product-btns" action=@if(auth()->check())"{{route('cart.store', $item->id)}}" @else @if(in_array($item->id,$cartIds)) "{{route('cart.cookie.delete', $item->id)}}" @else "{{route('cart.cookie', $item->id)}}" @endif @endif method="get">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>@if(in_array($item->id,$cartIds))Удалить из корзины @else Добавить в корзину @endif</a></button>
												</form>
											</div>
										</div>

										@endforeach
										<!-- /product -->


										<!-- /product -->
									</div>
									<div id="slick-nav-2" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- /Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		
		<!-- /SECTION -->

		<!-- NEWSLETTER -->
		
@endsection

