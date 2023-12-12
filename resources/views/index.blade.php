@extends('include.main')
@section('include.main.container')
<!-- Header Close -->
<div class="banner">
	<div class="owl-four owl-carousel" itemprop="image">
		<img src="{{ asset('images/img/banner1.jpg')}}" alt="Image of Bannner">
		<img src="{{ asset('images/img/banner1.jpg')}}" alt="Image of Bannner">
		<img src="{{ asset('images/img/banner1.jpg')}}" alt="Image of Bannner">
	</div>
	<div class="container" itemprop="description">
		<h1>WELCOME TO OUR COLLEGE</h1>
		{{-- <h3>With our advance search feature you can now find the trips for you...</h3> --}}
	</div>
	 <div id="owl-four-nav" class="owl-nav"></div>
</div>
<!-- <div class="banner">
	<div class="owl-five owl-carousel owl-theme">
        <div class="item-video">
    		<iframe width="100%" height="450" src="https://www.youtube.com/embed/ENVW3uZ3a-4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
    		</iframe>
        </div>
        <div class="item-video">
        	<iframe width="100%" height="450" src="https://www.youtube.com/embed/0bfk90rWV9U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="item-video">
        	<iframe width="100%" height="450" src="https://www.youtube.com/embed/ktvTqknDobU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="item-video">
    		<iframe width="100%" height="450" src="https://www.youtube.com/embed/ENVW3uZ3a-4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
    		</iframe>
        </div>
        <div class="item-video">
        	<iframe width="100%" height="450" src="https://www.youtube.com/embed/0bfk90rWV9U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="item-video">
        	<iframe width="100%" height="450" src="https://www.youtube.com/embed/ktvTqknDobU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
  </div>
</div> -->
<!-- Banner Close -->
<div class="page-heading">
	<div class="container">
		<h2>Founder</h2>
	</div>
</div>
<!-- Popular courses End -->
<div class="learn-courses">
	<div class="container">
		<div class="courses">
			<div class="owl-one owl-carousel">
				<div class="box-wrap" itemprop="event" itemscope itemtype=" http://schema.org/Course">
					<div class="img-wrap" itemprop="image"><img src="{{ asset('images/img/m4.jpg')}}" alt="courses picture"></div>
						{{-- <a href="#" class="learn-desining-banner" itemprop="name"></a> --}}
					<div class="box-body" itemprop="description">
						<p align="center"><b>Shri 1008 Mahant Jamana Dass Ji Maharaj</b></p>
						{{-- <section itemprop="time">
							<p><span>Duration:</span> 4 Years</p>
							<p><span>Class Time:</span> 6am-12am / 11am-5pm</p>
							<p><span>Fee:</span> 4,00,000</p>
						</section> --}}
					</div>
				</div>

				<div class="box-wrap" itemprop="event" itemscope itemtype=" http://schema.org/Course">
					<div class="img-wrap"  itemprop="image"><img src="{{ asset('images/img/m3.jpg')}}" alt="courses picture"></div>
						{{-- <a href="#" class="learn-desining-banner" itemprop="name"></a> --}}
					<div class="box-body" itemprop="description">
						<p align="center"><b>Shri 1008 Mahant Hemant Dass Ji Maharaj</b></p>
					</div>
				</div>

				<div class="box-wrap" itemprop="event" itemscope itemtype=" http://schema.org/Course">
					<div class="img-wrap"  itemprop="image"><img src="{{ asset('images/img/s1.jpg')}}" alt="courses picture"></div>
						{{-- <a href="#" class="learn-desining-banner" itemprop="name"></a> --}}
					<div class="box-body" itemprop="description">
						<p align="center"><b>Malik Shadi Lal Batra (M.P., Rajya Sabha)</b></p>
						{{-- <section itemprop="time">
							<p><span>Duration:</span> 4 Years</p>
							<p><span>Class Time:</span> 6am-12am / 11am-5pm</p>
							<p><span>Fee:</span> 4,00,000</p>
						</section> --}}
					</div>
				</div>

				{{-- <div class="box-wrap" itemprop="event" itemscope itemtype=" http://schema.org/Course">
					<div class="img-wrap"  itemprop="image"><img src="{{ asset('images/course-pic.jpg')}}" alt="courses picture"></div>
						<a href="#" class="learn-desining-banner" itemprop="name">Learn Web Designing >>></a>
					<div class="box-body" itemprop="description">
						<p>Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum</p>
						<section itemprop="time">
							<p><span>Duration:</span> 4 Years</p>
							<p><span>Class Time:</span> 6am-12am / 11am-5pm</p>
							<p><span>Fee:</span> 4,00,000</p>
						</section>
					</div>
				</div> --}}
			</div>
		</div>
	</div>
</div>
<!-- Learn courses End -->
<section class="whyUs-section">
	<div class="container">
		<div class="featured-points">
			<ul>
				<li><i class="fas fa-book"></i> Name of Course - B.Ed.</li>
				<li><i class="fas fa-money-check-alt"></i>Total Intake - 100 (Hundred)</li>
				<li><i class="fas fa-chalkboard-teacher"></i><a href="{{ asset('vacant_seat_2022_2024.pdf') }}" target="_blank" style="color:red">Vacant Seat Status</a></li>
				<li><i class="fas fa-book"></i><a href="{{ route('front.Recogination.Letter') }}" style="color:red">Recognition Letter</a></li>
				<li><i class="fas fa-book"></i><a href="{{ asset('sjk_rec.pdf') }}" target="_blank" style="color:red">Recognition Letter 2015</a></li>
				<li><i class="fas fa-book"></i> <a href="{{ asset('ssr.pdf') }}" target="_blank" style="color:red">SSR</a></li>
				<li><i class="fas fa-book"></i><a href="{{ asset('staff.pdf') }}" target="_blank" style="color:red">Format for Particulars of staff to be submitted to the NRC, NCTE, JAIPUR</a></li>
				<li><i class="fas fa-book"></i><a href="{{ asset('DocScanner_Oct_13_2023_12_11_PM.pdf') }}" target="_blank" style="color:red">List of The Admitted Student Through Physical Counseling Session 2023-2025</a></li>
			</ul>
		</div>
		<div class="whyus-wrap" style="">
			{{-- <h1>why us?</h1> --}}
			<p itemprop="description" align="justify">It is acknowledged that quality of life of a society depends upon the quality of education which in return depends on the quality of its teachers. It is only education which is an instrument of minimizing the gap between the haves and have nots which again depends on the quality of teachers in a particular nation.</p>
			<p itemprop="description" align="justify">"Teaching is human engineering and soul doctoring."</p>
			<p itemprop="description" align="justify">The Quote suggests that teaching is both technical and noble. The words 'Human engineering' mean modifying and constructing human behavior in a desired manner and at the same time it implies technical procedures. The term 'soul doctoring' suggests that as a doctor prevents or cures any desirable bodily ailments similarly teaching deals with the inner spirit of an individual to ensure its nurturing. Let us say that human personality can be 'engineered' and through proper doctoring it can be maintained healthy.</p>

			{{-- <a href="#" class="read-more-btn">read more</a> --}}
		</div>
	</div>
</section>
<!-- Closed WhyUs section -->
{{-- <section class="page-heading">
	<div class="container">
		<h2>gallery</h2>
	</div>
</section>
<section class="gallery-images-section" itemprop="image" itemscope itemtype=" http://schema.org/ImageGallery">
	<div class="gallery-img-wrap">
		<a href="images/gallery-img1.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
			<img src="images/gallery-img1.jpg" alt="gallery-images">
		</a>
	</div>
	<div class="gallery-img-wrap">
		<a href="images/gallery-img2.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
			<img src="images/gallery-img2.jpg" alt="gallery-images">
		</a>
	</div>
	<div class="gallery-img-wrap">
		<a href="images/gallery-img3.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
			<img src="images/gallery-img3.jpg" alt="gallery-images">
		</a>
	</div>
	<div class="gallery-img-wrap">
		<a href="images/gallery-img4.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
			<img src="images/gallery-img4.jpg" alt="gallery-images">
		</a>
	</div>
	<div class="gallery-img-wrap">
		<a href="images/gallery-img5.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
			<img src="images/gallery-img5.jpg" alt="gallery-images">
		</a>
	</div>
	<div class="gallery-img-wrap">
		<a href="images/gallery-img6.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
			<img src="images/gallery-img6.jpg" alt="gallery-images">
		</a>
	</div>
	<div class="gallery-img-wrap">
		<a href="images/gallery-img7.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
			<img src="images/gallery-img7.jpg" alt="gallery-images">
		</a>
	</div>
	<div class="gallery-img-wrap">
		<a href="images/gallery-img8.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
			<img src="images/gallery-img8.jpg" alt="gallery-images">
		</a>
	</div>
	<div class="gallery-img-wrap">
		<a href="images/gallery-img9.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
			<img src="images/gallery-img9.jpg" alt="gallery-images">
		</a>
	</div>
	<div class="gallery-img-wrap">
		<a href="images/gallery-img10.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
			<img src="images/gallery-img10.jpg" alt="gallery-images">
		</a>
	</div>
	<div class="gallery-img-wrap">
		<a href="images/gallery-img11.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
			<img src="images/gallery-img11.jpg" alt="gallery-images">
		</a>
	</div>
	<div class="gallery-img-wrap">
		<a href="images/gallery-img12.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
			<img src="images/gallery-img12.jpg" alt="gallery-images">
		</a>
	</div>
</section> --}}
<!-- End of gallery Images -->
{{-- <section class="page-heading">
	<div class="container">
		<h2>upcomming events</h2>
	</div>
</section>
<section class="events-section" itemprop="event" itemscope itemtype=" http://schema.org/Event">
	<div class="container">
		<div class="event-wrap">
			<div class="img-wrap" itemprop="image">
				<img src="images/events.jpg" alt="event images">
			</div>
			<div class="details">
				<a href=""><h3 itemprop="name">Orientation Programme for new Students.</h3></a>
				<p itemprop="description">Orientation Programme for new sffs Students. Orientation Programme for new sffs Students. Orientation Programme for new sffs Students.</p>

				<h5 itemprop="startDate"><i class="far fa-clock"></i> Dec 30,2018 | 11am</h5>
				<h5 itemprop="location"><i class="fas fa-map-marker-alt"></i> Hotel Malla, Lainchaur</h5>
			</div>
		</div>

		<div class="event-wrap">
			<div class="img-wrap" itemprop="image">
				<img src="images/events.jpg" alt="event images">
			</div>
			<div class="details">
				<a href=""><h3 itemprop="name">Orientation Programme for new Students.</h3></a>
				<p itemprop="description">Orientation Programme for new sffs Students. Orientation Programme for new sffs Students. Orientation Programme for new sffs Students.</p>

				<h5 itemprop="startDate"><i class="far fa-clock"></i> Dec 30,2018 | 11am</h5>
				<h5 itemprop="location"><i class="fas fa-map-marker-alt"></i> Hotel Malla, Lainchaur</h5>
			</div>
		</div>
	</div>
</section> --}}
<!-- End of Events section -->
{{-- <section class="what-other-say">
	<div class="container">
		<div class="wrap-others-say" itemprop="review" itemscope itemtype="http://schema.org/ReviewAction">
			<h1>what other say about us</h1>
			<div id="carousel" class="flexslider">
				<ul class="slides">
					<li class="img-wrap">
						<figure itemprop="image">
							<img src="images/review-big-img.jpg" alt="Person Image">
							<figcaption class="hidden">
								<h3>Sagar Sapkota</h3>
								<h4>UI Designer</h4>
							</figcaption>
						</figure>
					</li>
					<li class="img-wrap">
						<figure itemprop="image">
							<img src="images/review-big-img.jpg" alt="Person Image">
							<figcaption class="hidden">
								<h3>Sagar Sapkota</h3>
								<h4>UI Designer</h4>
							</figcaption>
						</figure>
					</li>
					<li class="img-wrap">
						<figure itemprop="image">
							<img src="images/review-big-img.jpg" alt="Person Image">
							<figcaption class="hidden">
								<h3>Sagar Sapkota</h3>
								<h4>UI Designer</h4>
							</figcaption>
						</figure>
					</li>
					<li class="img-wrap">
						<figure itemprop="image">
							<img src="images/review-big-img.jpg" alt="Person Image">
							<figcaption class="hidden">
								<h3>Sagar Sapkota</h3>
								<h4>UI Designer</h4>
							</figcaption>
						</figure>
					</li>
					<li class="img-wrap">
						<figure itemprop="image">
							<img src="images/review-big-img.jpg" alt="Person Image">
							<figcaption class="hidden">
								<h3>Sagar Sapkota</h3>
								<h4>UI Designer</h4>
							</figcaption>
						</figure>
					</li>
					<li class="img-wrap">
						<figure itemprop="image">
							<img src="images/review-big-img.jpg" alt="Person Image">
							<figcaption class="hidden">
								<h3>Sagar Sapkota</h3>
								<h4>UI Designer</h4>
							</figcaption>
						</figure>
					</li>
					<li class="img-wrap">
						<figure itemprop="image">
							<img src="images/review-big-img.jpg" alt="Person Image">
							<figcaption class="hidden">
								<h3>Sagar Sapkota</h3>
								<h4>UI Designer</h4>
							</figcaption>
						</figure>
					</li>
					<li class="img-wrap">
						<figure itemprop="image">
							<img src="images/review-big-img.jpg" alt="Person Image">
							<figcaption class="fig">
								<h3 class="hidden">Sagar Sapkota</h3>
								<h4 class="hidden">UI Designer</h4>
							</figcaption>
						</figure>
					</li>
				</ul>
			</div>

			<div id="slider" class="flexslider">
					<ul class="slides">
				    <li>
				    	<div class="testimonial-holder" itemprop="description">
				    		<strong class="title">Amazing service and amazing team. Thank you!</strong>
				    		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tristique fer-<br/>mentum mauris, non tincidunt arcu venenatis vel. Nam et vehicula turpis. Ut nunc purus, mattis eu odio a, egestas facilisis nibh. Mauris magna diam, iaculis vitae sapien non, pharetra congue purus. Phasellus in odio purus.</p>
				    		<div class="rateYo"></div>
				    	</div>
				    </li>
				    <li>
				    	<div class="testimonial-holder" itemprop="description">
				    		<strong class="title">Very Satisfaied with their service</strong>
				    		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tristique fer-<br/>mentum mauris, non tincidunt arcu venenatis vel. Nam et vehicula turpis. Ut nunc purus, mattis eu odio a, egestas facilisis nibh. Mauris magna diam, iaculis vitae sapien non, pharetra congue purus. Phasellus in odio purus.</p>
				    		<div class="rateYo"></div>
				    	</div>
				    </li>
				    <li>
				    	<div class="testimonial-holder" itemprop="description">
				    		<strong class="title">Quick, efficient and meets your expectations</strong>
				    		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tristique fer-<br/>mentum mauris, non tincidunt arcu venenatis vel. Nam et vehicula turpis. Ut nunc purus, mattis eu odio a, egestas facilisis nibh. Mauris magna diam, iaculis vitae sapien non, pharetra congue purus. Phasellus in odio purus.</p>
				    		<div class="rateYo"></div>
				    	</div>
				    </li>
				    <li>
				    	<div class="testimonial-holder" itemprop="description">
				    		<strong class="title">The website was according our imagination</strong>
				    		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tristique fer-<br/>mentum mauris, non tincidunt arcu venenatis vel. Nam et vehicula turpis. Ut nunc purus, mattis eu odio a, egestas facilisis nibh. Mauris magna diam, iaculis vitae sapien non, pharetra congue purus. Phasellus in odio purus.</p>
				    		<div class="rateYo"></div>
				    	</div>
				    </li>
				    <li>
				    	<div class="testimonial-holder" itemprop="description">
				    		<strong class="title">Amazing service and amazing team. Thank you!</strong>
				    		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tristique fer-<br/>mentum mauris, non tincidunt arcu venenatis vel. Nam et vehicula turpis. Ut nunc purus, mattis eu odio a, egestas facilisis nibh. Mauris magna diam, iaculis vitae sapien non, pharetra congue purus. Phasellus in odio purus.</p>
				    		<div class="rateYo"></div>
				    	</div>
				    </li>
				    <li>
				    	<div class="testimonial-holder" itemprop="description">
				    		<strong class="title">Very Satisfaied with their service</strong>
				    		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tristique fer-<br/>mentum mauris, non tincidunt arcu venenatis vel. Nam et vehicula turpis. Ut nunc purus, mattis eu odio a, egestas facilisis nibh. Mauris magna diam, iaculis vitae sapien non, pharetra congue purus. Phasellus in odio purus.</p>
				    		<div class="rateYo"></div>
				    	</div>
				    </li>
				    <li>
				    	<div class="testimonial-holder" itemprop="description">
				    		<strong class="title">Quick, efficient and meets your expectations</strong>
				    		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tristique fer-<br/>mentum mauris, non tincidunt arcu venenatis vel. Nam et vehicula turpis. Ut nunc purus, mattis eu odio a, egestas facilisis nibh. Mauris magna diam, iaculis vitae sapien non, pharetra congue purus. Phasellus in odio purus.</p>
				    		<div class="rateYo"></div>
				    	</div>
				    </li>
				    <li>
				    	<div class="testimonial-holder" itemprop="description">
				    		<strong class="title">The website was according our imagination</strong>
				    		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tristique fer-<br/>mentum mauris, non tincidunt arcu venenatis vel. Nam et vehicula turpis. Ut nunc purus, mattis eu odio a, egestas facilisis nibh. Mauris magna diam, iaculis vitae sapien non, pharetra congue purus. Phasellus in odio purus.</p>
				    		<div class="rateYo"></div>
				    	</div>
				    </li>
					</ul>
			</div>
		</div>
	</div>
	<div class="container">
		<h4 class="article-subtitle">Get to Know</h4>
		<h2 class="head">what our customer say</h2>
		<div class="three owl-carousel owl-theme">
			<div class="customer-item" itemscope itemtype="http://schema.org/Rating">
				<div class="border">
					<div class="customer">
						<figure>
							<img class="customer-img" src="images/customer-img.jpg" alt="Person image">
							<figcaption>
								<span itemprop="author">SAGAR KUMAR SAPKOTA</span>
								<div class="rateYo" itemprop="ratingValue"></div>
							</figcaption>
						</figure>
					</div>
					<div class="customer-review">
						<p itemprop="description">
							"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non"
						</p>
					</div>
				</div>
			</div>
			<div class="customer-item" itemscope itemtype="http://schema.org/Rating">
				<div class="border">
					<div class="customer">
						<figure>
							<img class="customer-img" src="images/customer-img.jpg" alt="Person image">
							<figcaption>
								<span itemprop="author">SAGAR KUMAR SAPKOTA</span>
								<div class="rateYo" itemprop="ratingValue"></div>
							</figcaption>
						</figure>
					</div>
					<div class="customer-review">
						<p itemprop="description">
							"22222Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non"
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> --}}
<!-- End of Others talk -->
{{-- <section class="page-heading">
	<div class="container">
		<h2>latest news</h2>
	</div>
</section>
<section class="latest-news">
	<div class="container" itemprop="event" itemscope itemtype=" http://schema.org/Event">
		<div class="owl-two owl-carousel">
			<div class="news-wrap" itemprop="event">
				<div class="news-img-wrap" itemprop="image">
					<img src="images/latest-new-img.jpg" alt="Latest News Images">
				</div>
				<div class="news-detail" itemprop="description">
					<a href=""><h1>Orientation Programme for new Students.</h1></a>
					<h2 itemprop="startDate">By Admin | 20 Dec. 2018</h2>

					<p>Orientation Programme for new sffs Students. Orientatin Programmes for new Students.. Orientatin Programmes for new Students</p>
				</div>
			</div>

			<div class="news-wrap" itemprop="event">
				<div class="news-img-wrap" itemprop="image">
					<img src="images/latest-new-img.jpg" alt="Latest News Images">
				</div>
				<div class="news-detail" itemprop="description">
					<a href=""><h1>Orientation Programme for new Students.</h1></a>
					<h2 itemprop="startDate">By Admin | 20 Dec. 2018</h2>

					<p>Orientation Programme for new sffs Students. Orientatin Programmes for new Students.. Orientatin Programmes for new Students</p>
				</div>
			</div>

			<div class="news-wrap" itemprop="event">
				<div class="news-img-wrap" itemprop="image">
					<img src="images/latest-new-img.jpg" alt="Latest News Images">
				</div>
				<div class="news-detail" itemprop="description">
					<a href=""><h1>Orientation Programme for new Students.</h1></a>
					<h2 itemprop="startDate">By Admin | 20 Dec. 2018</h2>

					<p>Orientation Programme for new sffs Students. Orientatin Programmes for new Students.. Orientatin Programmes for new Students</p>
				</div>
			</div>
		</div>
	</div>
</section> --}}
@endsection
