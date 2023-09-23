@extends('Layout.master')
@section('title', 'About Coffee Blend')
@section('content')


	<!----------------------------------------------- Header ----------------------------------------------->
    <section class="home-slider owl-carousel">
		<div class="slider-item" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row slider-text justify-content-center align-items-center">
					<div class="col-md-7 col-sm-12 text-center ftco-animate">
						<h1 class="mb-3 mt-5 bread">About Us</h1>
						<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>About</span></p>
					</div>
				</div>
			</div>
		</div>
    </section>
	<!--////////////////////////////////////////// END Of Header //////////////////////////////////////////-->
    

    <!---------------------------------------------- Our Story ---------------------------------------------->
	
    @include('Pages.Home.Sections.ourStory')

	<!--///////////////////////////////////////// END Of Our Story ////////////////////////////////////////-->

    <!-------------------------------------------- Customer Says -------------------------------------------->

    <section class="ftco-section img" id="ftco-testimony" style="background-image: url(images/bg_1.jpg);"  data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row justify-content-center mb-5">
				<div class="col-md-7 heading-section text-center ftco-animate">
					<span class="subheading">Coffee Blend</span>
					<h2 class="mb-4">Customers Says</h2>
					<p>"Like everyone else who makes the mistake of getting older, I begin each day with coffee and obituaries.."</p>
				</div>
			</div>
		</div>
		<div class="container-wrap">
			<div class="row d-flex no-gutters">
				<div class="col-lg align-self-sm-end">
					<div class="testimony">
						<blockquote>
							<p>&ldquo;A wonderful website that contains a lot of things.&rdquo;</p>
						</blockquote>
						<div class="author d-flex mt-4">
							<div class="image mr-3 align-self-center">
								<img src="images/rama.jpg" alt="">
							</div>
							<div class="name align-self-center">Rama Ababneh</div>
						</div>
					</div>
				</div>
				<div class="col-lg align-self-sm-end">
					<div class="testimony overlay">
						<blockquote>
							<p>&ldquo;A beautiful website has become, I can only start my day with coffee from here, the coffee tastes very delicious.&rdquo;</p>
						</blockquote>
						<div class="author d-flex mt-4">
							<div class="image mr-3 align-self-center">
								<img src="images/razan.jpg" alt="">
							</div>
							<div class="name align-self-center">Razan Al-Rjoub</div>
						</div>
					</div>
				</div>
				<div class="col-lg align-self-sm-end">
					<div class="testimony">
						<blockquote>
							<p>&ldquo;A website full of amazing stuff. There are absolutely amazing accessories.&rdquo;</p>
						</blockquote>
						<div class="author d-flex mt-4">
							<div class="image mr-3 align-self-center">
								<img src="images/leena.jpg" alt="">
							</div>
							<div class="name align-self-center">Leena Al-Rababeh</div>
						</div>
					</div>
				</div>
				<div class="col-lg align-self-sm-end">
					<div class="testimony overlay">
						<blockquote>
							<p>&ldquo;A wonderful website that contains a lot of things.&rdquo;</p>
						</blockquote>
						<div class="author d-flex mt-4">
							<div class="image mr-3 align-self-center">
								<img src="images/rania.jpg" alt="">
							</div>
							<div class="name align-self-center">Rania Taha</div>
						</div>
					</div>
				</div>
				<div class="col-lg align-self-sm-end">
					<div class="testimony">
						<blockquote>
							<p>&ldquo;I bought a mug with my name engraved on it from here, it's very cool and well done. &rdquo;</p>
						</blockquote>
						<div class="author d-flex mt-4">
						<div class="image mr-3 align-self-center">
							<img src="images/salam.jpg" alt="">
						</div>
							<div class="name align-self-center">Salam Al-Tamimi</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!--/////////////////////////////////////// END Of Customer Says //////////////////////////////////////-->

	<!--------------------------------------------- Add Comment --------------------------------------------->
	
    <section>
		<div class="row mt-5 pt-3 d-flex" style="justify-content: center; margin-bottom: 60px;">
            <div class="col-md-8 d-flex">
                <div class="cart-detail cart-total ftco-bg-dark p-3 p-md-4">
					<h3 class="billing-heading mb-4">Tell us about your experience on our site</h3>
					<div class="form-group">
						<textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
					</div>
					<p>
						<a href="#" class="btn btn-primary py-3 px-4">Submit</a>
					</p>
                </div>
            </div>
        </div>
	</section>

	<!--///////////////////////////////////////// END Add Comment /////////////////////////////////////////-->

    <!------------------------------------------- Calculations -------------------------------------------->
	
    @include('Pages.Home.Sections.calculations')

	<!--/////////////////////////////////////// END Of Calculations //////////////////////////////////////-->
	

@endsection