<!----------------------------------------------- Footer ----------------------------------------------->
<footer class="footer" id="footer">
    <div class="containerf">
        <div class="row">
            <div class="footer-col col-lg-2 col-md-6 col-sm-6">
                <h4>Our Location</h4>
                <ul>
                    <li><a href="#">Jordan</a></li>
                    <li><a href="#">Irbid</a></li>
                    <li><a href="#">Abd-Alhamed Sharaf Street</a></li>
                </ul>
            </div>
            <div class="footer-col col-lg-2 col-md-6 col-sm-6">
                <h4>get help</h4>
                <ul>
                    <li><a href="#">Shipping</a></li>
                    <li><a href="#">Order status</a></li>
                    <li><a href="#">Payment options</a></li>
                </ul>
            </div>
            <div class="footer-col col-lg-3 col-md-4 col-sm-6">
                <h4>Contact Us</h4>
                <ul>
                    <li><a href="#">marah.abusaleh12@gmail.com</a></li>
                    <li><a href="#">+962 7 9987 6142</a></li>
                </ul>
            </div>
            <div class="footer-col col-lg-2 col-md-4 col-sm-6">
                <h4>follow us</h4>
                <div class="social-links">
                    <a href="#"> <i class='bx bxl-instagram'></i></a>
                    <a href="#"><i class='bx bxl-twitter'></i></a>
                    <a href="#"><i class='bx bxl-facebook'></i></i></a>
                    <a href="#"><i class='bx bxl-linkedin'></i></i></a>
                    <a href="#"><i class='bx bxl-github'></i></i></i></a>
                    <a href="#"><i class='bx bxl-discord'></i></i></i></a>
                </div>
            </div>
            <div class="footer-col col-lg-3 col-md-4 col-sm-6">
                <img class="imgfoot" src="{{ asset('./images/footerimage.png') }}" alt="">
            </div>
        </div>
    </div>
</footer>
<!--///////////////////////////////////////// END Of Footer /////////////////////////////////////////-->

<!-- loader -->
<div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
            stroke="#eeeeee" />
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
            stroke-miterlimit="10" stroke="#F96D00" />
    </svg>
</div>

<!----------------------------------------------- Script ----------------------------------------------->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/aos.js') }}"></script>
<script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>
<script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('js/jquery.timepicker.min.js') }}"></script>
<script src="{{ asset('js/scrollax.min.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&sensor=false"></script>
<script src="{{ asset('js/google-map.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>

{{-- <script src="js/jquery-3.3.1.min.js"></script>
<script src="js/main2.js"></script> --}}



<script>
    $(document).ready(function() {


        if ($('.bbb_viewed_slider').length) {
            var viewedSlider = $('.bbb_viewed_slider');

            viewedSlider.owlCarousel({
                loop: true,
                margin: 30,
                autoplay: true,
                autoplayTimeout: 6000,
                nav: false,
                dots: false,
                responsive: {
                    0: {
                        items: 1
                    },
                    575: {
                        items: 2
                    },
                    768: {
                        items: 3
                    },
                    991: {
                        items: 4
                    },
                    1199: {
                        items: 6
                    }
                }
            });

            if ($('.bbb_viewed_prev').length) {
                var prev = $('.bbb_viewed_prev');
                prev.on('click', function() {
                    viewedSlider.trigger('prev.owl.carousel');
                });
            }

            if ($('.bbb_viewed_next').length) {
                var next = $('.bbb_viewed_next');
                next.on('click', function() {
                    viewedSlider.trigger('next.owl.carousel');
                });
            }
        }


    });
</script>
<script>
    $(document).ready(function() {
        var quantitiy = 0;
        $(".quantity-right-plus").click(function(e) {
            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            var quantity = parseInt($("#quantity").val());

            // If is not undefined

            $("#quantity").val(quantity + 1);

            // Increment
        });

        $(".quantity-left-minus").click(function(e) {
            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            var quantity = parseInt($("#quantity").val());

            // If is not undefined

            // Increment
            if (quantity > 0) {
                $("#quantity").val(quantity - 1);
            }
        });
    });
</script>
</body>

</html>
