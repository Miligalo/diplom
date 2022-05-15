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
										
										<div class="product-btns">
											<form   class="product-btns" action= @if(auth()->check())"{{route('favorite.store', $good->id)}}" @else "{{route('favorite.cookie.delete', $good->id)}}" @endif method="get">
												<button  class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">Убрать </span></button>
												@csrf
											<button class="quick-view"><a href="{{route('main.show',$good->id)}}"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
										</form>
											</div>
									</div>
									<div class="add-to-cart">
										<button class="add-to-cart-btn"><a href=@if(auth()->check())"{{route('cart.store', $good->id)}}" @else "{{route('cart.cookie', $good->id)}}" @endif><i class="fa fa-shopping-cart"></i> add to cart</a></button>
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


		
		@endsection
		<!-- /NEWSLETTER -->

		<!-- FOOTER -->

		<!-- /FOOTER -->

		<!-- jQuery Plugins -->


