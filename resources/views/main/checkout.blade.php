
@extends('layouts.main')

@section('content')
		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
				@if(count($goods) > 0)
				<form action="{{route('main.checkout.store')}}" method="POST" class="w-25">
						@csrf
					<div class="col-md-7">
						<!-- Billing Details -->
						<div class="billing-details">
							<div class="section-title">
								<h3 class="title">Billing address</h3>
							</div>
							<div class="form-group">
								<input class="input" type="text" required name="first_name" placeholder="First Name">
							</div>
							<div class="form-group">
								<input class="input" type="text" required name="last_name" placeholder="Last Name">
							</div>
							<div class="form-group">
								<input class="input" type="email" required name="mail" placeholder="Email">
							</div>
							<div class="form-group">
								<input class="input" type="text" required name="adress" placeholder="Address">
							</div>
							<div class="form-group">
								<input class="input" type="text" required name="city" placeholder="City">
							</div>
							<div class="form-group">
								<input class="input" type="text" required name="country" placeholder="Country">
							</div>
							<div class="form-group">
								<input class="input" type="tel" required name="phone" placeholder="Telephone">
							</div>
							<div class="form-group">
								<div class="input-checkbox">
									<input type="checkbox" id="create-account">

									<div class="caption">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
										<input class="input" type="password" name="password" placeholder="Enter Your Password">
									</div>
								</div>
							</div>
						</div>
						<!-- /Billing Details -->

						<!-- Shiping Details -->
						
						<!-- /Shiping Details -->

						<!-- Order notes -->
						
						<!-- /Order notes -->
					</div>

					<!-- Order Details -->
					<div class="col-md-5 order-details">
						<div class="section-title text-center">
							<h3 class="title">Your Order</h3>
						</div>
						<div class="order-summary">
							<div class="order-col">
								<div><strong>PRODUCT</strong></div>
								<div><strong>TOTAL</strong></div>
							</div>
							@foreach ($goods as $good)				
							<div class="order-products">
								<div class="order-col">
									<div>{{$good->title}}</div>
									<div>{{$good->price}}</div>
								</div>
							</div>
							@endforeach
							<div class="order-col">
								<div>Shiping</div>
								<div><strong>FREE</strong></div>
							</div>
							<div class="order-col">
								<div><strong>TOTAL</strong></div>
								<div><strong class="order-total">{{$countSum}}</strong></div>
							</div>
						</div>
						<div class="payment-method">
							<div class="input-radio">
								<input type="radio" name="payment" id="payment-1">
							</div>
						</div>
						<button type="submit" class="primary-btn order-submit">Создать заказ</button>  
					</div>
				</form>
				@else 
				<h1>У вас нет товара в корзине</h1>
				@endif
					<!-- /Order Details -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->


		<!-- /NEWSLETTER -->

		@endsection


