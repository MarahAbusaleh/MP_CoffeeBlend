<!----------------------------------------- Our Category ----------------------------------------->

<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="bbb_main_container">
                    <div class="row justify-content-center mb-5 pb-3">
                        <div class="col-md-7 heading-section ftco-animate text-center">
                            <span class="subheading">Coffee Blend</span>
                            <h2 class="mb-4">Our Category</h2>
                        </div>
                    </div>
                    <div>
                        <div class="row" style=" margin-right: 0px;">
                            @foreach ($categories as $category)
                                <div class="col-lg-3 col-md-6 col-sm-12" style="border: 1px solid gray; margin: 0px;">
                                    <div class="">
                                        <div class="text text-center pt-4">
                                            <div>
                                                <img src="{{ asset($category->image1) }}" height="360px" width="100%">
                                            </div>
                                            {{-- <div class="contimg">
                                                <div class="containerimg2">
                                                    <img src="{{ asset($category->image1) }}" alt="Image 1"
                                                        class="shopimg2">
                                                    <img src="{{ asset($category->image2) }}" alt="Image 2"
                                                        class="shopimg2">
                                                    <img src="{{ asset($category->image3) }}" alt="Image 3"
                                                        class="shopimg2">
                                                </div>
                                            </div> --}}
                                            <p style="margin-top: 65px;"><a
                                                    href="{{ route('showProducts', $category->id) }}"
                                                    class="btn btn-primary"
                                                    style="height: fit-content; width: fit-content; font-size: 15px;">{{ $category->name }}</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--//////////////////////////////////////// END Of Our Category ////////////////////////////////////////-->
