<!DOCTYPE html>
<html lang="en">
<head>
   
@include('frontend.css')
<base href="/public">
<title>Contact Us</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Colo Shop Template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{asset('home/styles/bootstrap4/bootstrap.min.css')}}">
<link href="{{asset('home/plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{asset('home/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('home/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('home/plugins/OwlCarousel2-2.2.1/animate.css')}}">
<link rel="stylesheet" href="{{asset('home/plugins/themify-icons/themify-icons.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('home/plugins/jquery-ui-1.12.1.custom/jquery-ui.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('home/styles/contact_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('home/styles/contact_responsive.css')}}">
</head>

      

<body>

<div class="super_container">

	<!-- Header -->
    <header class="header trans_300">
        @include('frontend.header')

	</header>

	<div class="fs_menu_overlay"></div>
    <br><br><br><br>
    <div class="row">
        <div class="col text-center">
            <div class="section_title new_arrivals_title">
                <h2>Contact Us</h2>
            </div>
        </div>
    </div>

    <div class="container contact_container">
		<!-- Contact Us -->

		<div class="row">

			<div class="col-lg-6 contact_col">
				<div class="contact_contents">
					<h1>Contact Us</h1>
					<p>There are many ways to contact us. You may drop us a line, give us a call or send an email, choose what suits you the most.</p>
					<div>
						<p>(800) 686-6688</p>
						<p>info.deercreative@gmail.com</p>
					</div>
					<div>
						<p>mm</p>
					</div>
					<div>
						<p>Open hours: 8.00-18.00 Mon-Fri</p>
						<p>Sunday: Closed</p>
					</div>
				</div>

				<!-- Follow Us -->

				<div class="follow_us_contents">
					<h1>Follow Us</h1>
					<ul class="social d-flex flex-row">
						<li><a href="#" style="background-color: #3a61c9"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#" style="background-color: #41a1f6"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#" style="background-color: #fb4343"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
						<li><a href="#" style="background-color: #8f6247"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					</ul>
				</div>

			</div>

			<div class="col-lg-6 get_in_touch_col">
				<div class="get_in_touch_contents">
					<h1>Get In Touch With Us!</h1>
					<p>Fill out the form below to recieve a free and confidential.</p>
					<form action="post">
						<div>
							<input id="input_name" class="form_input input_name input_ph" type="text" name="name" placeholder="Name" required="required" data-error="Name is required.">
							<input id="input_email" class="form_input input_email input_ph" type="email" name="email" placeholder="Email" required="required" data-error="Valid email is required.">
							<input id="input_website" class="form_input input_website input_ph" type="url" name="name" placeholder="Website" required="required" data-error="Name is required.">
							<textarea id="input_message" class="input_ph input_message" name="message"  placeholder="Message" rows="3" required data-error="Please, write us a message."></textarea>
						</div>
						<div>
							<button id="review_submit" type="submit" class="red_button message_submit_btn trans_300" value="Submit">send message</button>
						</div>
					</form>
				</div>
			</div>

		</div>
	</div>
   
	<!-- Newsletter -->

        @include('frontend.letter')

	<!-- Footer -->

        @include('frontend.footer')

</div>

        @include('frontend.script')

        <script src="js/jquery-3.2.1.min.js"></script>
<script src="{{asset('home/styles/bootstrap4/popper.js')}}"></script>
<script src="{{asset('home/styles/bootstrap4/bootstrap.min.j')}}s"></script>
<script src="{{asset('home/plugins/Isotope/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('home/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{asset('home/plugins/easing/easing.js')}}"></script>
<script src="{{asset('home/plugins/jquery-ui-1.12.1.custom/jquery-ui.js')}}"></script>
<script src="{{asset('home/js/contact_custom.js')}}"></script>
</body>

</html>
        