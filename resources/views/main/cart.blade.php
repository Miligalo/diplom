@extends('layouts.main')

@section('content')
	

		
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
					<div id="store" class="col-md-9">
						<!-- store top filter -->
						<div class="store-filter clearfix">
							<div class="store-sort">					
							</div>
							
						</div>
						<!-- /store top filter -->
					
						<button class="buttoncheckout"><a href="{{route('main.checkout')}}"><i class="fa fa-envelope"></i>Оформить заказ</a></button>
					
						<!-- store products -->
						<div class="row">
							
							<!-- product -->
							@if($goods)
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
							</div>
							@endforeach
							@endif
						
							<!-- /product -->
						</div>
						<!-- /store products -->

						<!-- store bottom filter -->
						<div class="store-filter clearfix" >

							<ul class="store-pagination">						
								
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


