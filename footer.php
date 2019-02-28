<!-- /// FOOTER /// -->
<footer id="main-footer">
    <div id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xs-6">
                    <h5>Contact Us</h5>
                    <p>Email: contact@extradecoin.com</p>
                    <p>Office Phone: +65 6871 8863</p>
                    <p>Address: 160 Robinson Rd, #26-10, Singapore Business Federation Center, Singapore 068914</p>
                </div>
                <div class="col-md-2 col-xs-4">
                    <h5>Our Game</h5>
                    <p>Fish Hunter</p>
                    <p>Gold Miner</p>
                    <p>Radius Raid</p>
                </div>
                <div class="col-md-4 col-xs-4">
                    <h5>Social</h5>
                    <a href="#" target="__blank">
                        <p>Telegram</p>
                    </a>
                    <a href="#" target="__blank">
                        <p>Facebook</p>
                    </a>
                </div>
                <div class="col">
                    <hr class="animation-element extend in-view">
                </div>
                <div id="copyright" class="col-md-12 mt-2">
                    <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2 pt-2" style="font-size: 16px; display: inline-block; color: rgb(118, 118, 118) !important;"><span
                            class=" d-block d-md-inline-block"><b> © 2018 Token Play Game Center. All rights reserved</b></span></p>
                </div>
            </div>
        </div><!-- Container End -->
    </div>
    <a href="javascript:" id="return-to-top">
        <i class="fas fa-angle-up"></i>
    </a>
</footer><!-- Footer End -->

<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/particles.js"></script>
<script src="assets/js/app.js"></script>
<script src="assets/js/style.js"></script>

<!-- <script src="assets/js/app.js"></script> -->

<script>
    var header = document.querySelector('.navbar-dark');
    var origOffsetY = header.offsetTop;

    function onScroll(e) {
        window.scrollY >= 200 ? header.classList.add('collapse_change') :
            header.classList.remove('collapse_change');
    }

    document.addEventListener('scroll', onScroll);
    var angle = 0;
    var intervalID = window.setInterval(galleryspin, 5000);

    function galleryspin(sign) {
        spinner = document.querySelector("#spinner");
        if (!sign) {
            angle = angle + 45;
        } else {
            angle = angle - 45;
        }
        spinner.setAttribute("style", "-webkit-transform: rotateY(" + angle + "deg); -moz-transform: rotateY(" + angle +
            "deg) ;transform: rotateY(" + angle + "deg);");

    }

</script>

</body>

</html>