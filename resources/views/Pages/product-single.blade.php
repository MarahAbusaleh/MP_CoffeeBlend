@extends('Layout.master')
@section('title', '')
@section('content')

    <!----------------------------------------------- Header ----------------------------------------------->

    <section class="home-slider owl-carousel">
		<div class="slider-item" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
			<div class="row slider-text justify-content-center align-items-center">
				<div class="col-md-7 col-sm-12 text-center ftco-animate">
					<h1 class="mb-3 mt-5 bread">Product Detail</h1>
					<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Product Detail</span></p>
				</div>
			</div>
			</div>
		</div>
    </section>

	<!--////////////////////////////////////////// END Of Header /////////////////////////////////////////-->

	<!--------------------------------------- Product Detail Section --------------------------------------->    

	<section class="ftco-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 mb-5 ftco-animate">
					<a href="images/black coffee.jpg" class="image-popup"><img src="images/black coffee.jpg" class="img-fluid" alt="Colorlib Template"></a>
				</div>
				<div class="col-lg-6 product-details pl-md-5 ftco-animate">
					<h3>TURKISH COFFEE</h3>
					<p class="price"><span>1 JOD</span></p>
					<p>
						Experience the timeless tradition of Turkish Coffee at Coffee Blend. Our finest Arabica beans are ground to a fine powder and brewed in a special pot, preserving the rich flavor and enchanting aroma. Indulge in the velvety texture and full-bodied taste, and let Coffee Blend transport you to the streets of Istanbul with each mesmerizing cup. Discover the art of Turkish Coffee with us.
					</p>
					<div class="row mt-4">
						<!-- <div class="col-md-6">
							<div class="form-group d-flex">
								<div class="select-wrap">
									<div class="icon"><span class="ion-ios-arrow-down"></span></div>
									<select name="" id="" class="form-control">
										<option value="">Small</option>
										<option value="">Medium</option>
										<option value="">Large</option>
										<option value="">Extra Large</option>
									</select>
								</div>
							</div>
						</div> -->
						<div class="w-100"></div>
						<div class="input-group col-md-6 d-flex mb-3">
							<span class="input-group-btn mr-2">
								<button type="button" class="quantity-left-minus btn"  data-type="minus" data-field="">
									<i class="icon-minus"></i>
								</button>
							</span>
							<input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100">
							<span class="input-group-btn ml-2">
								<button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
									<i class="icon-plus"></i>
								</button>
							</span>
						</div>
					</div>
					<div class="form-check mt-2">
						<input type="checkbox" class="form-check-input" id="writeNameOnCup">
						<label class="form-check-label" for="writeNameOnCup">Write my name on the cup</label>
					</div>
					<br>
					<p><a href="cart.html" class="btn btn-primary py-3 px-5">Add to Cart</a></p>
				</div>
			</div>
		</div>
    </section>
    
	<!--////////////////////////////////// END Of Product Detail Section /////////////////////////////////-->

	<!------------------------------------------ Related Product ------------------------------------------->

    <section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-3">
				<div class="col-md-7 heading-section ftco-animate text-center">
					<span class="subheading">Coffee Blend</span>
					<h2 class="mb-4">Related Products</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<div class="menu-entry">
						<a href="#" class="img" style="background-image: url(images/americano\ coffee.jpg)"></a>
						<div class="text text-center pt-4">
							<h3><a href="#">AMERICANO COFFEE</a></h3>
							<p>
								Indulge in the bold and balanced flavors of our expertly crafted Americano coffee.
							</p>
								<p class="price"><span>1 JOD</span></p>
							<p>
								<a href="#" class="btn btn-primary btn-outline-primary">Add to Cart</a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="menu-entry">
						<a href="#" class="img" style="background-image: url(images/black\ coffee.jpg)"></a>
						<div class="text text-center pt-4">
							<h3><a href="#">TURKISH COFFEE</a></h3>
							<p>
								Experience the pure and intense essence of turkish coffee, brewed to perfection.
							</p>
								<p class="price"><span>2 JOD</span></p>
							<p>
								<a href="#" class="btn btn-primary btn-outline-primary">Add to Cart</a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="menu-entry">
						<a href="#" class="img" style="background-image: url(images/espresso\ coffee.jpg)"></a>
						<div class="text text-center pt-4">
							<h3><a href="#">ESPRESSO COFFEE</a></h3>
							<p>
								Savor the concentrated richness and velvety smoothness of our artisanal espresso coffee.
							</p>
								<p class="price"><span>2 JOD</span></p>
							<p>
								<a href="#" class="btn btn-primary btn-outline-primary">Add to Cart</a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="menu-entry">
						<a href="#" class="img" style="background-image: url(images/maccshino\ coffee.jpg)"></a>
						<div class="text text-center pt-4">
							<h3><a href="#">MAROCCHINO COFFEE</a></h3>
							<p>
								Exquisite fusion of espresso, velvety cocoa, and frothy milk in Marocchino coffee.
							</p>
								<p class="price"><span>2.5 JOD</span></p>
							<p>
								<a href="#" class="btn btn-primary btn-outline-primary">Add to Cart</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
    </section>

	<!--///////////////////////////////////// END Of Related Product /////////////////////////////////////-->
    
	<hr style="border-top: 1px solid gray;">

@endsection