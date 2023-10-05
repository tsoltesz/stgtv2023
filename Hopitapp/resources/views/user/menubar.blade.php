<header class="header" >
			<!-- Topbar -->
			<div class="topbar">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-5 col-12">
							<!-- Contact -->
							
							<!-- End Contact -->
						</div>
						<div class="col-lg-6 col-md-7 col-12">
							<!-- Top Contact -->
							<ul class="top-contact">
								<li><i class="fa fa-phone"></i>+36123456789</li>
								<li><i class="fa fa-envelope"></i><a href="mailto:info@hopitapp.com">info@hopitapp.com</a></li>
							</ul>
							<!-- End Top Contact -->
						</div>
					</div>
				</div>
			</div>
			<!-- End Topbar -->
			<!-- Header Inner -->
			<div class="header-inner">
				<div class="container">
					<div class="inner">
						<div class="row">
							<div class="col-lg-3 col-md-3 col-12">
								<!-- Start Logo -->
								<div class="logo">
                                <img src="img/logo.png" alt="#">
								</div>
								<!-- End Logo -->
								<!-- Mobile Nav -->
								<div class="mobile-nav"></div>
								<!-- End Mobile Nav -->
							</div>
							<div class="col-lg-6 col-md-9 col-12">
								<!-- Main Menu -->
								<div class="main-menu">
									<nav class="navigation">
										<ul class="nav menu">
											<li><a href="{{route('home')}}">Home </a>
												
											</li>
											<li><a href="{{route('doctors')}}">Doctors </a></li>
											
											<li><a href="{{route('services')}}">Services<i class="icofont-rounded-down"></i></a>
												<ul class="dropdown">
													<li><a href="{{route('appointment')}}">Book Appointment</a></li>
												</ul>
											</li>
									
											<li><a href="{{route('contact')}}">Contact</a></li>
										</ul>
									</nav>
								</div>
								<!--/ End Main Menu -->
							</div>

							@if (Route::has('login'))

							

							@auth


							<div class="col-lg-1 col-12">
								
							</div>
							
							<div class="col-lg-1 col-12">
								
									<x-app-layout>
    
									</x-app-layout>
                                    
								
							</div>

							

							@else

							<div class="col-lg-1 col-12">
								<div class="get-quote">
									<a href="{{ route('login') }}" class="btn">Login</a>
                                    
								</div>
							</div>

                            <div class="col-lg-1 col-12">
								<div class="get-quote">
									<a href="{{ route('register') }}" class="btn">Register</a>
                                    
								</div>
							</div>

							@endauth

							@endif

                            
						</div>
					</div>
				</div>
			</div>
			<!--/ End Header Inner -->
		</header>