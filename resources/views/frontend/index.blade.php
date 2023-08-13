<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/public">
@include('frontend.css')
</head>

<body>

<div class="super_container">

	<!-- Header -->

	@include('frontend.header')

	<div class="fs_menu_overlay"></div>
	<div class="hamburger_menu">
		<div class="hamburger_close">
			<i class="fa fa-times" aria-hidden="true"></i>

		</div>

	</div>

	<!-- Slider -->

	@include('frontend.slider')

	<!-- Banner -->

	@include('frontend.banner')

	<!-- ALL PRODUCTS ARE HERE START -->
	@include('frontend.product')

	<!-- ALL PRODUCTS ARE HERE START -->
	



	<!-- Deal of the week -->

	@include('frontend.deal')

	<!-- Best Sellers -->

	
	<!-- Benefit -->

	@include('frontend.benifit')

	<!-- Blogs -->

        @include('frontend.blog')

	<!-- Newsletter -->

        @include('frontend.letter')

	<!-- Footer -->

        @include('frontend.footer')

</div>

        @include('frontend.script')
</body>

</html>
        