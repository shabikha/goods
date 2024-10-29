<footer class="footer">
			<div class="container">
				<div class="row">
					<div class="footer-widgets">
						<div class="col-md-4 col-sm-6">
							<div class="widget widget_text">
								<h4 class="widget-title">About Us</h4>
								<div class="textwidget">
								<img src="{{ asset('frontend/images/darkimg.png') }}"style="width:330px;height:85px" alt="Lahore Goods Transport Logo" id="logo-image">
										<p>
											LGT Logistics is an independent pakistan logistics service provider, delivering a wide range of transport and customer- specific logistics services.
											</p>
			                    </div>

			                </div>
						</div><!-- /.col-md-4 col-sm-6 -->
						<div class="col-md-4 col-sm-6"style="width:360px;">
							<div class="widget widget-nav-menu">
								<h4 class="widget-title">Our Serives</h4>
								<ul class="menu-our-services">
									<li>
										<a href="#" title="">Air Freight</a>
									</li>
									<li>
										<a href="#" title="">Ocean Freight</a>
									</li>
									<li>
										<a href="#" title="">Road and Rail Freight</a>
									</li>
									<li>
										<a href="#" title="">Freight Transportation</a>
									</li>
									<li>
										<a href="#" title="">Supply Chain Solutions</a>
									</li>
									<li>
										<a href="#" title="">Freight forwarding</a>
									</li>
									<li>
										<a href="#" title="">Customs Brokerage</a>
									</li>
								</ul><!-- /.menu-our-services -->
							</div><!-- /.widget widget-nav-menu -->
						</div><!-- /.col-md-4 col-sm-6 -->
						<div class="col-md-4 col-sm-6">
							<div class="widget widget-contact">
								<h4 class="widget-title">Contact From</h4>
                                @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
								<form action="{{ url('/contact-process') }}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                                    @csrf
									<div class="form-ft">
										<div class="flat-wrap-field">
											<div class="flat-one-half">
												<input type="text" name="name" placeholder="Name" required="">
                                                @error('name')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                         @enderror
											</div>
											<div class="flat-one-half">
												<input type="email" name="email" placeholder="Email" required="">
                                                @error('email')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                         @enderror
											</div>
										</div>
										<p>
											<textarea name="message" cols="40" rows="10" placeholder="Message"></textarea>
										</p>
										<p>
											<button type="submit" class="btn-contact-ft">Send Message</button>
										</p>
									</div><!-- /.form-ft -->
								</form><!-- /form -->
							</div><!-- /.widget widget-contact -->
						</div><!-- /.col-md-4 col-sm-6 -->
					</div><!-- /.footer-widgets -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</footer><!-- /footer -->

		<section class="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="copyright">
							<p id="copyright-text">
								Copyright <i class="fa fa-copyright"></i> <span id="year"></span> LGT Logistics. All rights reserved.
							</p>
							<script>
								// Hakee nykyisen vuoden ja asettaa sen HTML-elementtiin
								document.getElementById('year').textContent = new Date().getFullYear();
							</script>
						</div><!-- /.copyright -->
						<a class="go-top">
                            <i class="fa fa-chevron-up"></i>
                        </a><!-- /.go-top -->
					</div><!-- /.col-md-12 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.footer-bottom -->

		</div>
