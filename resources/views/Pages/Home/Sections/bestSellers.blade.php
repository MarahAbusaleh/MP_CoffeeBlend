<!----------------------------------------- Best Sellers ----------------------------------------->

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <span class="subheading">Coffee Blend</span>
                <h2 class="mb-4">Best Coffee Sellers</h2>
            </div>
        </div>
        <div class="row">
            @foreach ($Items as $Item)
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="menu-entry">
                        <a href="#" class="img" style="background-image: url({{ asset($Item->image) }})"></a>
                        <div class="text text-center pt-4">
                            <h3><a href="#">{{ $Item->name }}</a></h3>
                            <p>
                                {{ $Item->description }}
                            </p>
                            <p class="price"><span>{{ $Item->price }} JOD</span></p>
                            <p>
                                <a href="#" class="btn btn-primary btn-outline-primary">Add to Cart</a>
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!--//////////////////////////////////////// END Of Best Sellers ////////////////////////////////////////-->
