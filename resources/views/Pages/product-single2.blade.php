@extends('Layout.master')
@section('title', 'Product Detail')
@section('header title', 'Product Detail')
@section('header', 'Product Detail')
@section('content')

    <!--------------------------------------- Product Detail Section --------------------------------------->

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-5 ftco-animate">
                    <a href="images/Dark Coffee.png" class="image-popup"><img src="{{ asset($product->image) }}"
                            class="img-fluid" alt="Colorlib Template"></a>
                </div>
                <div class="col-lg-6 product-details pl-md-5 ftco-animate">
                    <br><br>
                    <h3>{{ $product->name }}</h3>
                    <p class="price"><span>{{ $product->price }} JOD</span></p>
                    <p>
                        {{ $product->description }}
                    </p>
                    <div class="row mt-4">
                        @if ($product->category->name == 'Coffee Beans')
                            <div class="col-md-6">
                                <div class="form-group d-flex">
                                    <div class="select-wrap">
                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                        <select name="" id="" class="form-control">
                                            <option value="">0.25 kg</option>
                                            <option value="">0.5 kg</option>
                                            <option value="">1.0 kg</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <div class="w-100"></div>

                    </div>
                    <br>
                    <p><a href="{{ route('addProductToCart', $product->id) }}" class="btn btn-primary py-3 px-5">Add to
                            Cart</a></p>
                </div>
            </div>
        </div>
    </section>

    <!--///////////////////////////////// END Of Product Detail Section //////////////////////////////////-->
    <!-------------------------------------------- Customer Says -------------------------------------------->

    <section class="ftco-section img" id="ftco-testimony" style="background-image: url({{ asset('images/bg_1.jpg') }});"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">Coffee Blend</span>
                    <h2 class="mb-4">Customers Says</h2>
                    <p>"Like everyone else who makes the mistake of getting older, I begin each day with coffee and
                        obituaries.."</p>
                </div>
            </div>
        </div>
        <div class="container-wrap">
            <div class="row d-flex no-gutters">
                @foreach ($reviews as $key => $review)
                    <div class="col-lg align-self-sm-end">
                        <div class="{{ $key % 2 == 0 ? 'testimony overlay' : 'testimony' }}">
                            <blockquote>
                                <p>&ldquo;{{ $review->comment }}.&rdquo;</p>
                            </blockquote>
                            <div class="author d-flex mt-4">
                                <div class="image mr-3 align-self-center">
                                    <img src="{{ asset($review->user->image) }}" alt="">
                                </div>
                                <div>
                                    <div class="name align-self-center">{{ $review->user->name }}</div>
                                    <div>{!! $review->ratingStars !!}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!--/////////////////////////////////////// END Of Customer Says //////////////////////////////////////-->

    <!--------------------------------------------- Add Comment --------------------------------------------->

    @auth
        <section>
            <div class="row mt-5 pt-3 d-flex" style="justify-content: center; margin-bottom: 60px;">
                <div class="col-md-8 d-flex">
                    <div class="cart-detail cart-total ftco-bg-dark p-3 p-md-4">
                        <h3 class="billing-heading mb-4">Tell us about your experience on our site</h3>
                        <form action="{{ route('AddReview', ['user_id' => Auth::user()->id, 'product_id' => $product->id]) }}"
                            method="POST" id="reviewForm">
                            @csrf
                            <input type="hidden" name="rating" id="ratingInput" value="0" required>
                            <div class="rating_input">
                                <h5 class="rating_title">Rating:</h5>
                                <ul class="rating_stars">
                                    @for ($i = 1; $i <= 5; $i++)
                                        <a href="#" data-rating="{{ $i }}">
                                            <i class="far fa-star fa-lg" style="color: #f5ac2e;"></i>
                                        </a>
                                    @endfor
                                </ul>
                            </div>
                            <h5 class="rating_title">Your Comment:</h5>
                            <div class="form-group">
                                <textarea name="comment" id="" cols="30" rows="7" class="form-control"
                                    placeholder="Enter Your Comment..."></textarea>
                            </div>
                            <p>
                                <button type="submit" href="#" class="btn btn-primary px-4">Submit</button>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    @else
        <section>
            <div class="row mt-5 pt-3 d-flex" style="justify-content: center; margin-bottom: 60px;">
                <div class="col-md-8 d-flex">
                    <div class="cart-detail cart-total ftco-bg-dark p-3 p-md-4">
                        <h3 class="billing-heading mb-4">Please go <a href="{{ route('login') }}">Login</a> first to Add
                            Reviwe!
                        </h3>
                    </div>
                </div>
            </div>
        </section>
    @endauth

    <!--///////////////////////////////////////// END Add Comment /////////////////////////////////////////-->

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
                @foreach ($Items as $item)
                    <div class="col-lg-3 col-md-6">
                        <div class="menu-entry">
                            <a href="#" class="img"
                                style="background-image: url('{{ asset($item->image) }}');"></a>
                            <div class="text text-center pt-4">
                                <h3><a href="product-single.html">{{ $item->name }}</a></h3>
                                @if ($item->category->name == 'Coffee Beans')
                                    <p><span style="color: red;">*</span>Select</p>
                                    <div class="dropdown">
                                        <button class="btn btn-primary btn-outline-primary dropdown-toggle" type="button"
                                            id="weightDropdown" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Weight
                                        </button>
                                        <div class="dropdown-menu weigthdm" aria-labelledby="weightDropdown">
                                            <a class="dropdown-item weightdi" href="#">0.25 kg</a>
                                            <a class="dropdown-item weightdi" href="#">0.5 kg</a>
                                            <a class="dropdown-item weightdi" href="#">1 kg</a>
                                        </div>
                                    </div>
                                @endif
                                <p class="price" style="margin-top: 15px;"><span>{{ $item->price }} JOD</span></p>
                                <p><a href="{{ route('addProductToCart', $item->id) }}" class="btn btn-primary">Add to
                                        Cart</a></p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!--///////////////////////////////////// END Of Related Product /////////////////////////////////////-->

    <hr style="border-top: 1px solid gray;">

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const ratingStars = document.querySelectorAll('.rating_stars a');
            const ratingInput = document.getElementById('ratingInput');

            ratingStars.forEach(star => {
                star.addEventListener('click', function(event) {
                    event.preventDefault();
                    const selectedRating = star.getAttribute('data-rating');
                    ratingInput.value = selectedRating;

                    ratingStars.forEach(s => {
                        const starRating = s.getAttribute('data-rating');
                        if (starRating <= selectedRating) {
                            s.innerHTML =
                                '<i class="fas fa-star fa-lg" style="color: #f5ac2e;"></i>';
                        } else {
                            s.innerHTML =
                                '<i class="far fa-star fa-xl" style="color: #f5ac2e;"></i>';
                        }
                    });
                });
            });
        });
    </script>

@endsection
