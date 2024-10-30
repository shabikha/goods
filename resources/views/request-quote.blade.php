<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
	<!-- Basic Page Needs -->
	<meta charset="UTF-8">
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<title>Request Quote - Logistics Transportation</title>

	<meta name="author" content="themsflat.com">

	<!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


	<!-- Boostrap style -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">


	<!-- Theme style -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

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
							<h1 class="page-title-heading">Request Quote</h1>

						</div><!-- /.breadcrumbs -->
					</div><!-- /.col-md-12 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.page-title style1 -->

		<section class="main-about page-wrap">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="content-area">
							<div class="post-wrap">
								<article class="about-post style4">
									<div class="entry-content">

										<form action="{{ url('/contact-process') }}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
											@csrf
                                            <div class="flat-form-quote style1">
												<div class="title-quote">
													Quotation request
												</div>
												<div>
													<label>
														Your name *
														<span>
															<input type="text" name=" name" placeholder="You Name">
                                                            @error('name')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                         @enderror
														</span>
													</label>
													<label>
														Company name *
														<span>
															<input type="text" name="Company_name" placeholder="Company name">
                                                            @error('Company_name')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                         @enderror
														</span>
													</label>
													<label>
														Phone number *
														<span>
															<input type="text" name="phone" placeholder="123-456-7890">
                                                            @error('phone')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                         @enderror
														</span>
													</label>
													<label>
														Your email *
														<span>
															<input type="text" name="email" placeholder="You email">
                                                            @error('email')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                         @enderror
														</span>
													</label>
													<label>
														Pick-up address information
														<span>Country, City, Postal code *</span>
														<span>
															<input type="text" name="country_code" placeholder="Country">
                                                            @error('country_code')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                         @enderror
														</span>
													</label>
													<label>
														Delivery address information
														<span>Country, City, Postal code *</span>
														<span>
															<input type="text" name="country" placeholder="Country">
                                                            @error('country')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                         @enderror
														</span>
													</label>
													<label>
														What mode of transport do you require?
														<span>
															<select name="Select_quote">
																<option value="Air Freight">Air Freight</option>
																<option value="Road and Rail Freight">Road and Rail Freight</option>
																<option value="Ocean Freight">Ocean Freight</option>
															</select>
														</span>
													</label>
												</p>
												<div class="title-form">Description of the goods</div>
												<p>
													Please supply us with information about the goods you want to ship. Number of pallets / packages, dimensions, weight. Also if possible information on the desired loading and unloading date and time or any other requests which we need to take into account.
												</p>
												<div class="title-form">Goods information *</div>
												<p>
													<span>
														<textarea name="message" cols="40" rows="10"></textarea>
													</span>

												</p>

											</div><!-- /.flat-form-qoute style1 -->
                                            <button type="submit" class="button-form-quote">Send Reuqest</button>
										</form><!-- /form -->
									</div><!-- /.entry-content -->
								</article><!-- /.about-post style4 -->
							</div><!-- /.post-wrap -->
						</div><!-- /.content-area -->

						<div class="widget-area">
							<div class="sidebar">
								<div class="widget widget-nav-menu">
									<ul class="menu-our-company">
										<li>
											<a href="#" title="">Company Overview</a>
										</li>
										<li>
											<a href="#" title="">Company History</a>
										</li>
										<li>
											<a href="#" title="">FAQ</a>
										</li>
										<li>
											<a href="#" title="">Our Partner</a>
										</li>
										<li>
											<a href="#" title="">Our Team</a>
										</li>
										<li>
											<a href="#" title="">Recruitment</a>
										</li>
									</ul><!-- /.menu-our-company -->
								</div><!-- /.widget widdget-nav-menu -->
								<div class="widget widget-text">
									<h4 class="widget-title">Need our help ?</h4>
									<div class="textwidget">
										<p>Donec at cursus sem. Duis condimentum posuere purus.</p>
										<a href="#" title="">Contact Us</a>
									</div>
								</div><!-- /.widget widget-text -->
								<div class="widget widget-text">
									<ul class="download">
										<li>
											<a href="#" title="">Download Brochures.doc</a>
										</li>
										<li>
											<a href="#" title="">Download Brochures.pdf</a>
										</li>
									</ul><!-- /.download -->
								</div>
							</div><!-- /.sidebar -->
						</div><!-- /.widget-area -->
					</div><!-- /.col-md-12 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.main-about -->
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

            <script type="text/javascript" src="{{ asset('js/jquery.cookie.js') }}"></script>


            <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>

	</body>
</html>
