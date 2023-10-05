<section class="services section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>We Offer Different Services To Improve Your Health</h2>
							
						</div>
					</div>
				</div>
				<div class="row">
                @foreach ($services as $service)
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
							<img src="serviceimage/{{$service->image}}" class="height: 10" alt="#">
							<h4><a>{{$service->name}}</a></h4>
							<p>{{$service->description}}</p>	
						</div>
						<!-- End Single Service -->
					</div>
                    @endforeach
					
			
				</div>
			</div>
		</section>