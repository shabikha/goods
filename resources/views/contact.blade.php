<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
	<!-- Basic Page Needs -->
	<meta charset="UTF-8">
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<title>Lahore Goods Transporte</title>

	<meta name="author" content="themsflat.com">

	<!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Boostrap style -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">

	<!-- Theme style -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

	<!-- Ionicons style -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/ionicons.min.css') }}">

	<!-- Reponsive -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">

	<!-- Colors -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/color1.css') }}" id="colors">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">


	<!-- Favicon -->

</head>

	<body class="header_sticky">

		<div class="boxed">

		<!-- Preloader -->
		<div class="preloader">
			<div class="clear-loading loading-effect-2">
				<span></span>
			</div>
		</div><!-- /.preloader -->
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
		@include('layouts.header')
		@include('layouts.header2')
		<section class="page-title style1">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="breadcrumbs">
							<h1 class="page-title-heading">Contact</h1>

						</div><!-- /.breadcrumbs -->
					</div><!-- /.col-md-12 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.page-title style1 -->

		<section class="flat-row flat-contact">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="contact-info">
							<div class="contact-item">
								<h4>Address</h4>
								<p>Sundar Industrial Estate Gate No:1 Rawinid Road Lahore</p>
							</div>
							<div class="height35"></div>
							<div class="contact-item">
								<h4>Phone number</h4>
								<p>Call us: +92 300 4264 279</p>
							</div>
							<div class="height35"></div>
							<div class="contact-item">
								<h4>E-mail address</h4>
								<p>aftab@lahoregoods.com</p>
							</div>
						</div><!-- /.contact-info -->
					</div><!-- /.col-md-4 -->
					<div class="col-sm-8">

						<div class="contact-form">




							<form method="post" action="{{ url('/contact-process') }}" enctype="multipart/form-data">
                                @csrf
								<div class="flat-one-half">
									<div class="input-name">
										<input type="text" value="" tabindex="1" placeholder="Name" name="name" id="name" required="">
                                        @error('name')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                         @enderror
									</div>
									<div class="input-email">
										<input type="email" value="" tabindex="2" placeholder="Email" name="email" id="email" required="">
                                        @error('email')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                         @enderror
									</div>
									<div class="input-subject">
										<input type="text" placeholder="Subject" name="subject" id="subject" required="" />
                                        @error('subject')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                         @enderror
									</div>
									<div class="input-submit">
										<button type="submit" class="btn-contact-form">Send Message</button>
									</div>
								</div>
								<div class="flat-one-half">
									<textarea name="message" id="message" placeholder="Message" required=""></textarea>
								</div>
								<div class="clearfix"></div>
							</form><!-- /form -->
						</div><!-- /.contact-form -->
					</div><!-- /.col-md-8 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.flat-contact -->

		<section>
            <div>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27272.034045632045!2d74.1351083108398!3d31.30362750000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39185564052240e9%3A0x5907bdba1fbfe801!2sGate%201%20Office%20Sunder%20Industrial%20Estate!5e0!3m2!1sen!2s!4v1725619771948!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section><!-- /#flat-map-2 -->

		@include('layouts.footer')

		<!-- Javascript -->
	    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
	    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
	    <script type="text/javascript" src="{{ asset('js/easing.js') }}"></script>
	    <script type="text/javascript" src="{{ asset('js/waypoints.min.js') }}"></script>
	    <script type="text/javascript" src="{{ asset('js/parallax.js') }}"></script>
	    <script type="text/javascript" src="{{ asset('js/jquery.flexslider-min.js') }}"></script>
    	<script type="text/javascript" src="{{ asset('js/owl.carousel.js') }}"></script>
    	<script type="text/javascript" src="{{ asset('js/jquery-countTo.js') }}"></script>
    	<script type="text/javascript" src="{{ asset('js/jquery-validate.js') }}"></script>
    	<script type="text/javascript" src="{{ asset('js/jquery.cookie.js') }}"></script>


    	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtRmXKclfDp20TvfQnpgXSDPjut14x5wk&region=GB"></script>
   		<script type="text/javascript" src="{{ asset('js/gmap3.min.js') }}"></script>


	    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>

	</body>
</html>
