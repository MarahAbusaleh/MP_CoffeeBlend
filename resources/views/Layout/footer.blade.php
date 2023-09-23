<!----------------------------------------------- Footer ----------------------------------------------->
    <footer class="footer" id="footer" style="background-image: url(images/bg_4.jpg)">
        <div class="containerf">
            <div class="rowf">
                <div class="footer-col" style="padding-left: 0px;">
                    <h4>Our Location</h4>
                    <ul>
                        <li><a href="#">Jordan</a></li>
                        <li><a href="#">Irbid</a></li>
                        <li><a href="#">Abd-Alhamed Sharaf Street</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>get help</h4>
                    <ul>
                        <li><a href="#">Shipping</a></li>
                        <li><a href="#">Order status</a></li>
                        <li><a href="#">Payment options</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Contact Us</h4>
                    <ul>
                        <li><a href="#">marah.abusaleh12@gmail.com</a></li>
                        <li><a href="#">+962 7 9987 6142</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>follow us</h4>
                    <div class="social-links">
                        <a href="#"> <i class='bx bxl-instagram' ></i></a>
                        <a href="#"><i class='bx bxl-twitter'></i></a>
                        <a href="#"><i class='bx bxl-facebook'></i></i></a>
                        <a href="#"><i class='bx bxl-linkedin'></i></i></a>
                        <a href="#"><i class='bx bxl-github'></i></i></i></a>
                        <a href="#"><i class='bx bxl-discord'></i></i></i></a>               
                    </div>
                </div>
				<div class="footer-col">
                    <img class="imgfoot" src="./images/footerimage.png" alt="">
                </div>
            </div>
        </div>
    </footer>
    <!--///////////////////////////////////////// END Of Footer /////////////////////////////////////////-->

    <!-- loader -->
    <!-- <div id="ftco-loader" class="show fullscreen">
		<svg class="circular" width="48px" height="48px">
			<circle
				class="path-bg"
				cx="24"
				cy="24"
				r="22"
				fill="none"
				stroke-width="4"
				stroke="#eeeeee"
			/>
			<circle
			class="path"
			cx="24"
			cy="24"
			r="22"
			fill="none"
			stroke-width="4"
			stroke-miterlimit="10"
			stroke="#F96D00"
			/>
		</svg>
    </div> -->

	<!----------------------------------------------- Script ----------------------------------------------->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>
    <script>
      $(document).ready(function () {
        var quantitiy = 0;
        $(".quantity-right-plus").click(function (e) {
          // Stop acting like a button
          e.preventDefault();
          // Get the field name
          var quantity = parseInt($("#quantity").val());

          // If is not undefined

          $("#quantity").val(quantity + 1);

          // Increment
        });

        $(".quantity-left-minus").click(function (e) {
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
