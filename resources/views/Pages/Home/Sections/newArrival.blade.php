<!----------------------------------------- Best Sellers ----------------------------------------->

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <span class="subheading">Coffee Blend</span>
                <h2 class="mb-4">New Flavor Arrival</h2>
            </div>
        </div>
        <div class="row">
            @php
                use Illuminate\Support\Str;
            @endphp
            @foreach ($hotItems as $Item)
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="menu-entry">
                        <a href="#" class="img" style="background-image: url({{ asset($Item->image) }})"></a>
                        <div class="text text-center pt-4">
                            <h3><a href="#">{{ Str::limit($Item->name, 15) }}</a></h3>
                            <p>
                                {{ Str::limit($Item->description, 50) }}
                            </p>

                            <p class="price"><span>{{ $Item->price }} JOD</span></p>
                            <p>
                                <a href="{{ route('addItemToCart', $Item->id) }}"
                                    class="btn btn-primary btn-outline-primary">Add to
                                    Cart</a>
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
            @foreach ($coldItems as $Item)
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="menu-entry">
                        <a href="#" class="img" style="background-image: url({{ asset($Item->image) }})"></a>
                        <div class="text text-center pt-4">
                            <h3><a href="#">{{ Str::limit($Item->name, 15) }}</a></h3>
                            <p>
                                {{ Str::limit($Item->description, 50) }}
                            </p>

                            <p class="price"><span>{{ $Item->price }} JOD</span></p>
                            <p>
                                <a href="{{ route('addItemToCart', $Item->id) }}"
                                    class="btn btn-primary btn-outline-primary">Add to
                                    Cart</a>
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!--//////////////////////////////////////// END Of Best Sellers ////////////////////////////////////////-->
