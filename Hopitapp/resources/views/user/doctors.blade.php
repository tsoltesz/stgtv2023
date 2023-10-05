<section class="blog section" id="blog">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title">
							<h2>Our Doctors</h2>
							
				<div class="row">
					<div class="col-lg-2">

                        <p><img src="img/section-img.png" alt="#"></p>
                    </div>

                    <div class="col-lg-10">

                        <p> They are always calm because have a lot of patients</p>
                    </div> 

                    </div> 
                </div>
							
						
					</div>
				</div>

                
                
				<div class="row">
                @foreach ($doctors as $doctor)
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Blog -->
						<div class="single-news">
							<div class="news-head">
								<img src="doctorimage/{{$doctor->image}}" alt="#">
							</div>
							<div class="news-body">
								<div class="news-content">
									<div class="date">{{$doctor->speciality}}</div>
									<h2>{{$doctor->name}}</h2>
									<div class="text">{{$doctor->email}}</div>
								</div>
							</div>
						</div>
						<!-- End Single Blog -->
					</div>
                @endforeach
					
				</div>
                


                </div>

			</div>
		</section>