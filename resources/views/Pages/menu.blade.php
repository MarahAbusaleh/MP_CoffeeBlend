@extends('Layout.master')
@section('title', 'Menu')
@section('content')

    <!----------------------------------------------- Header ----------------------------------------------->

    <section class="home-slider owl-carousel">
		<div class="slider-item" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row slider-text justify-content-center align-items-center">
					<div class="col-md-7 col-sm-12 text-center ftco-animate">
						<h1 class="mb-3 mt-5 bread">Our Menu</h1>
						<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Menu</span></p>
					</div>
				</div>
			</div>
		</div>
    </section>

	<!--///////////////////////////////////////// END Of Header //////////////////////////////////////////-->
    
	<!------------------------------------------- Drinks Section ------------------------------------------->

    <section class="ftco-section">
		<div class="container">
			<div class="row">
				<div class="col-md-6 mb-5 pb-3">
					<h3 class="mb-5 heading-pricing ftco-animate">Hot Drinks</h3>

					<!-- Hot Drinks -->
					<div class="pricing-entry d-flex ftco-animate">
						<div class="img" style="background-image: url(images/black\ coffee.jpg);"></div>
						<div class="desc pl-3">
							<div class="d-flex text align-items-center">
								<h3><span>TURKISH COFFEE</span></h3>
								<span class="price">1 JOD</span>
							</div>
							<div class="d-block">
								<p>Experience the pure and intense essence of turkish coffee...</p>
							</div>
						</div>
					</div>
					<div class="pricing-entry d-flex ftco-animate">
						<div class="img" style="background-image: url(images/espresso\ coffee.jpg);"></div>
						<div class="desc pl-3">
							<div class="d-flex text align-items-center">
								<h3><span>ESPRESSO COFFEE</span></h3>
								<span class="price">2 JOD</span>
							</div>
							<div class="d-block">
								<p>Savor the concentrated richness and velvety smoothness...</p>
							</div>
						</div>
					</div>
					<div class="pricing-entry d-flex ftco-animate">
						<div class="img" style="background-image: url(images/americano\ coffee.jpg);"></div>
						<div class="desc pl-3">
							<div class="d-flex text align-items-center">
								<h3><span>AMERICANO COFFEE</span></h3>
								<span class="price">2.5 JOD</span>
							</div>
							<div class="d-block">
								<p>Indulge in the bold and balanced flavors of our expertly...</p>
							</div>
						</div>
					</div>
					<div class="pricing-entry d-flex ftco-animate">
						<div class="img" style="background-image: url(images/cappuccino\ coffee.jpg);"></div>
						<div class="desc pl-3">
							<div class="d-flex text align-items-center">
								<h3><span>CAPPUCCINO COFFEE</span></h3>
								<span class="price">1.5 JOD</span>
							</div>
							<div class="d-block">
								<p>Cappuccinos are a popular Italian coffee drink made with...</p>
							</div>
						</div>
					</div>
					<div class="pricing-entry d-flex ftco-animate">
						<div class="img" style="background-image: url(images/latte\ coffee.jpg);"></div>
						<div class="desc pl-3">
							<div class="d-flex text align-items-center">
								<h3><span>LATTE COFFEE</span></h3>
								<span class="price">1.5 JOD</span>
							</div>
							<div class="d-block">
								<p>A latte is an espresso with steamed milk and a dollop of...</p>
							</div>
						</div>
					</div>
					<div class="pricing-entry d-flex ftco-animate">
						<div class="img" style="background-image: url(images/hot\ chocolate\ coffee.jpg);"></div>
						<div class="desc pl-3">
							<div class="d-flex text align-items-center">
								<h3><span>HOT CHOCOLATE</span></h3>
								<span class="price">1 JOD<span>
							</div>
							<div class="d-block">
								<p>Indulge in the comforting and velvety richness of our...</p>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6 mb-5 pb-3">
					<h3 class="mb-5 heading-pricing ftco-animate">&nbsp;</h3>
					<div class="pricing-entry d-flex ftco-animate">
						<div class="img" style="background-image: url(images/maccshino\ coffee.jpg);"></div>
						<div class="desc pl-3">
							<div class="d-flex text align-items-center">
								<h3><span>MAROCCHINO COFFEE</span></h3>
								<span class="price">2.5 JOD</span>
							</div>
							<div class="d-block">
								<p>Exquisite fusion of espresso, velvety cocoa, and frothy milk...</p>
							</div>
						</div>
					</div>
					<div class="pricing-entry d-flex ftco-animate">
						<div class="img" style="background-image: url(images/mocha\ coffee.png);"></div>
						<div class="desc pl-3">
							<div class="d-flex text align-items-center">
								<h3><span>MOCHA COFFEE</span></h3>
								<span class="price">2 JOD</span>
							</div>
							<div class="d-block">
								<p>Coffee and chocolate are two of the best things in the world...</p>
							</div>
						</div>
					</div>
					<div class="pricing-entry d-flex ftco-animate">
						<div class="img" style="background-image: url(images/flat\ white\ coffee.jpg);"></div>
						<div class="desc pl-3">
							<div class="d-flex text align-items-center">
								<h3><span>FLAT WHITE COFFEE</span></h3>
								<span class="price">2 JOD</span>
							</div>
							<div class="d-block">
								<p>When the espresso and milk are mixed to make this joe...</p>
							</div>
						</div>
					</div>
					<div class="pricing-entry d-flex ftco-animate">
						<div class="img" style="background-image: url(images/cafe\ au\ latte\ coffee.jpg);"></div>
						<div class="desc pl-3">
							<div class="d-flex text align-items-center">
								<h3><span>CAFE AU LAIT COFFEE</span></h3>
								<span class="price">2 JOD</span>
							</div>
							<div class="d-block">
								<p>Cafe au lait is a coffee beverage that is made with dark...</p>
							</div>
						</div>
					</div>
					<div class="pricing-entry d-flex ftco-animate">
						<div class="img" style="background-image: url(images/red\ eye\ coffee.jpg);"></div>
						<div class="desc pl-3">
							<div class="d-flex text align-items-center">
								<h3><span>RED EYE COFFEE</span></h3>
								<span class="price">2 JOD</span>
							</div>
							<div class="d-block">
								<p>Adding espresso shots to regular coffee creates this sign...</p>
							</div>
						</div>
					</div>
					<div class="pricing-entry d-flex ftco-animate">
						<div class="img" style="background-image: url(images/Ristretto\ coffee.png);"></div>
						<div class="desc pl-3">
							<div class="d-flex text align-items-center">
								<h3><span>RISTERTTO COFFEE</span></h3>
								<span class="price">1.5 JOD</span>
							</div>
							<div class="d-block">
								<p>Ristretto is an espresso shot. It uses less hot water which...</p>
							</div>
						</div>
					</div>
				</div>

				<!-- Cold Drinks -->
				<div class="col-md-6">
					<h3 class="mb-5 heading-pricing ftco-animate">Cold Drinks</h3>
					<div class="pricing-entry d-flex ftco-animate">
						<div class="img" style="background-image: url(images/iced\ coffee.jpg);"></div>
						<div class="desc pl-3">
							<div class="d-flex text align-items-center">
								<h3><span>ICED COFFEE</span></h3>
								<span class="price">1 JOD</span>
							</div>
							<div class="d-block">
								<p>Iced coffee is a type of cold coffee that is made by brew...</p>
							</div>
						</div>
					</div>
					<div class="pricing-entry d-flex ftco-animate">
						<div class="img" style="background-image: url(images/hazelnut\ iced\ latte\ coffee.jpg);"></div>
						<div class="desc pl-3">
							<div class="d-flex text align-items-center">
								<h3><span>HAZELNUT ICED LATTE COFFEE</span></h3>
								<span class="price">2 JOD</span>
							</div>
							<div class="d-block">
								<p>Savor the perfect blend of creamy hazelnut and refreshing...</p>
							</div>
						</div>
					</div>
					<div class="pricing-entry d-flex ftco-animate">
						<div class="img" style="background-image: url(images/iced\ latte\ coffee.jpeg);"></div>
						<div class="desc pl-3">
							<div class="d-flex text align-items-center">
								<h3><span>ICED LATTE COFFEE</span></h3>
								<span class="price">1.5 JOD</span>
							</div>
							<div class="d-block">
								<p>Stay cool and refreshed with our smooth and invigorating...</p>
							</div>
						</div>
					</div>
					<div class="pricing-entry d-flex ftco-animate">
						<div class="img" style="background-image: url(images/vanilla\ iced\ latte\ coffee.jpg);"></div>
						<div class="desc pl-3">
							<div class="d-flex text align-items-center">
								<h3><span>VANILLA ICED LATTE COFFEE</span></h3>
								<span class="price">2 JOD</span>
							</div>
							<div class="d-block">
								<p>Indulge in the creamy sweetness of our vanilla-infused...</p>
							</div>
						</div>
					</div>
					<div class="pricing-entry d-flex ftco-animate">
						<div class="img" style="background-image: url(images/caramel\ iced\ latte\ coffee.jpg);"></div>
						<div class="desc pl-3">
							<div class="d-flex text align-items-center">
								<h3><span>CARAMEL ICED LATTE COFFEE</span></h3>
								<span class="price">2 JOD</span>
							</div>
							<div class="d-block">
								<p>   Experience pure indulgence with our caramel-infused iced...</p>
							</div>
						</div>
					</div>
					<div class="pricing-entry d-flex ftco-animate">
						<div class="img" style="background-image: url(images/iced\ spanish\ latte\ coffee.jpg);"></div>
						<div class="desc pl-3">
							<div class="d-flex text align-items-center">
								<h3><span>ICED SPANISH LATTE COFFEE</span></h3>
								<span class="price">2 JOD</span>
							</div>
							<div class="d-block">
								<p>Transport yourself to the streets of Spain with our iced Sp...</p>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6">
					<h3 class="mb-5 heading-pricing ftco-animate">&nbsp;</h3>
					<div class="pricing-entry d-flex ftco-animate">
						<div class="img" style="background-image: url(images/Nitro\ Coffee.png);"></div>
						<div class="desc pl-3">
							<div class="d-flex text align-items-center">
								<h3><span>NITRO COFFEE</span></h3>
								<span class="price">2.5 JOD</span>
							</div>
							<div class="d-block">
								<p>Nitro coffee is a type of cold coffee that is made by infusi...</p>
							</div>
						</div>
					</div>
					<div class="pricing-entry d-flex ftco-animate">
						<div class="img" style="background-image: url(images/Cinnamon\ Caramel\ Cream\ Cold\ Brew.PNG);"></div>
						<div class="desc pl-3">
							<div class="d-flex text align-items-center">
								<h3><span>CINNAMON CARAMEL CREAM COLD</span></h3>
								<span class="price">2 JOD</span>
							</div>
							<div class="d-block">
								<p>Delight your senses with the perfect balance of cinnam...</p>
							</div>
						</div>
					</div>
					<div class="pricing-entry d-flex ftco-animate">
						<div class="img" style="background-image: url(images/Salted\ Caramel\ Cream\ Cold\ Brew.jpg);"></div>
						<div class="desc pl-3">
							<div class="d-flex text align-items-center">
								<h3><span>SALTED CARAMEL CREAM COLD BREW</span></h3>
								<span class="price">2.5 JOD</span>
							</div>
							<div class="d-block">
								<p>Indulge in the irresistible combination of smooth caramel...</p>
							</div>
						</div>
					</div>
					<div class="pricing-entry d-flex ftco-animate">
						<div class="img" style="background-image: url(images/Iced\ Caffè\ Americano.jpg);"></div>
						<div class="desc pl-3">
							<div class="d-flex text align-items-center">
								<h3><span>ICED AMERICANO COFFEE</span></h3>
								<span class="price">1.5 JOD</span>
							</div>
							<div class="d-block">
								<p>Quench your thirst and awaken your senses with the bold...</p>
							</div>
						</div>
					</div>
					<div class="pricing-entry d-flex ftco-animate">
						<div class="img" style="background-image: url(images/Iced\ Coffee\ with\ Milk.jpg);"></div>
						<div class="desc pl-3">
							<div class="d-flex text align-items-center">
								<h3><span>ICED COFFEE WITH MILK</span></h3>
								<span class="price">1.25 JOD</span>
							</div>
							<div class="d-block">
								<p>Experience the perfect balance of smoothness and refresh...</p>
							</div>
						</div>
					</div>
					<div class="pricing-entry d-flex ftco-animate">
						<div class="img" style="background-image: url(images/Iced\ Chocolate\ Almondmilk\ Shaken\ Espresso.jpg);"></div>
						<div class="desc pl-3">
							<div class="d-flex text align-items-center">
								<h3><span>ICED CHOCOLATE ALMONDMILK SHAKEN ESPRESSO</span></h3>
								<span class="price">2.5 JOD</span>
							</div>
							<div class="d-block">
								<p>Indulge in the irresistible combination of rich chocolate...</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </section>

	<!--///////////////////////////////////////// END Of Drinks///////////////////////////////////////////-->

	<hr style="border-top: 1px solid gray;">

@endsection