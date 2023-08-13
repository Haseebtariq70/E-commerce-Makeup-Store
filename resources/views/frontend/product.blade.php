@php
$products = App\Models\Product::all();

@endphp

<!DOCTYPE html>
<html lang="en">
<head>
   
@include('frontend.css')
</head>

<body>

<div class="super_container">

	<!-- Header -->

	@include('frontend.header')

<div class="new_arrivals">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title new_arrivals_title">
						<h2>New Arrivals</h2>
					</div>
				</div>
			</div>
			<div class="row align-items-center">
				<div class="col text-center">
					<div class="new_arrivals_sorting">
						<ul class="arrivals_grid_sorting clearfix button-group filters-button-group">
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center active is-checked" data-filter="*">all</li>
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".women">Lipstick</li>
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".accessories">Maskara</li>
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".men">Eye Liner</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				
				@foreach ($products as $products)
				<div class="product-item men">
					<div class="product discount product_filter">
						<div class="product_image">
							<img src="/product/{{$products->image}}" alt="">
						</div>
						<div class="favorite favorite_left"></div>
						<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span></span></div>
						<div class="product_info">
							<h6 class="product_name">{{$products->title}}</h6>
							@if($products->discount_price!=null)
								<h6 style="color: red;">
									${{$products->discount_price}}
								</h6>

								<h6 style="text-decoration:line-through; color:blue;">
									${{$products->price}}
								</h6>																
						   @else
									<h6 style="color: blue;">								
										${{$products->price}}
									</h6>									
									
							@endif	
						</div>
					</div>
					
					                        
					<div class="red_button add_to_cart_button"><a href="{{url('/detail',$products->id)}}">Details / Order Now</a></div>

				</div>
					
				@endforeach

			</div>
		</div>
	</div>

	

</div>

        @include('frontend.script')
</body>

</html>
        