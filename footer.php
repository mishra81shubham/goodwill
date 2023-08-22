<!-- ----------- Header modal ---------------  -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-wrap">
                    <div class="tabs">
                        <h3 class="signup-tab"><a class="active" href="#signup-tab-content" style="  font-size: 1rem;">Corporate Login</a></h3>
                        <h3 class="login-tab"><a href="#login-tab-content" style=" font-size: 1rem;">Hospital Login</a></h3>
                    </div><!--.tabs-->

                    <div class="tabs-content">
                        <div id="signup-tab-content" class="active">
                            <form class="signup-form" action="" method="post">
                                <input type="email" class="input" id="user_email" autocomplete="off" placeholder="Email">
                                <input type="text" class="input" id="user_name" autocomplete="off" placeholder="Username">
                                <input type="password" class="input" id="user_pass" autocomplete="off" placeholder="Password">
                                <input type="submit" class="button" value="Sign Up">
                            </form><!--.login-form-->
                            <!-- <div class="help-text">
                                <p>By signing up, you agree to our</p>
                                <p><a href="#">Terms of service</a></p>
                            </div> -->
                            <!--.help-text-->
                        </div><!--.signup-tab-content-->

                        <div id="login-tab-content">
                            <form class="login-form" action="" method="post">
                                <input type="text" class="input" id="user_login" autocomplete="off" placeholder="Email or Username">
                                <input type="password" class="input" id="user_pass" autocomplete="off" placeholder="Password">
                                <input type="checkbox" class="checkbox" id="remember_me">
                                <label for="remember_me">Remember me</label>

                                <input type="submit" class="button" value="Login">
                            </form><!--.login-form-->
                            <div class="help-text">
                                <p><a href="#">Forget your password?</a></p>
                            </div><!--.help-text-->
                        </div><!--.login-tab-content-->
                    </div><!--.tabs-content-->
                </div><!--.form-wrap-->
            </div>
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div> -->
        </div>
    </div>
</div>
<!-- ----------- Header modal ---------------  -->


<!-- Footer Start -->
<div class="container-fluid footer footerColor mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-6 col-md-6">
                <img class="img-fluid footerLogoMsg me-3" src="img/GoodWillLogo.png" alt="">
                <p>Goodwill Health Insurance Management have support systems for all corporates with specialty of all kind insurance work management and credit recovery management, cash billing audit, credit bill audit, reconciliation for hospitals all types insurance work management and hospital recovery and audit management under one umbrella.</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-square me-1" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square me-1" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square me-1" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-square me-0" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">Quick Links</h5>
                <a class="btn btn-link" href="index.php">Home</a>
                <a class="btn btn-link" href="about.php">About Us</a>
                <a class="btn btn-link" href="contact.php">Contact Us</a>
                <!-- <a class="btn btn-link" href="">Terms & Condition</a> -->
                <a class="btn btn-link" href="">Privacy policy</a>
                <!-- <a class="btn btn-link" href="">Support</a> -->
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">Address</h5>
                <p><i class="fa fa-map-marker-alt me-3"></i>123 Street, UP</p>
                <p><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                <p><i class="fa fa-envelope me-3"></i>support@goodwill4u.com</p>
            </div>
        </div>
    </div>
    <div class="container-fluid copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a href="#">GoodWill</a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Designed By <a href="#">Hemant Pandey</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/counterup/counterup.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
<script>
    jQuery(document).ready(function($) {
        tab = $('.tabs h3 a');

        tab.on('click', function(event) {
            event.preventDefault();
            tab.removeClass('active');
            $(this).addClass('active');

            tab_content = $(this).attr('href');
            $('div[id$="tab-content"]').removeClass('active');
            $(tab_content).addClass('active');
        });
    });
</script>
</body>

</html>