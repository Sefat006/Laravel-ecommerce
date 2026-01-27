    <!-- footer area start here -->
    <footer class="footer-area">
        <div class="footer-widget-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-4">
                        <div class="single-widget about-widget">
                            <a href="http://127.0.0.1:8000" class="footer-brand-logo mb-25"><img
                                    src="{{ asset('front/assets/images/logo.png') }}" alt="footer-logo" /></a>
                            <p class="address-text">
                                House 24, Road 17 <br />
                                Banani, <br />
                                Dhaka
                            </p>
                            <div class="block-content mb-30">
                                <p class="contact">Call us: +123 2587 4521</p>
                                <p class="contact">Email: support@fashionwave.com</p>
                            </div>
                            <ul class="social-media">
                                <li class="social-media-item">
                                    <a target="_blank" class="social-media-link" href="www.facebook.com">
                                        <i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li class="social-media-item">
                                    <a target="_blank" class="social-media-link" href="www.twitter.com">
                                        <i class="fab fa-twitter"></i></a>
                                </li>
                                <li class="social-media-item">
                                    <a target="_blank" class="social-media-link" href="www.linkedin.com">
                                        <i class="fab fa-linkedin-in"></i></a>
                                </li>
                                <li class="social-media-item">
                                    <a target="_blank" class="social-media-link" href="www.instagram.com">
                                        <i class="fab fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-8 col-md-8 col-sm-8">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="single-widget">
                                    <h3 class="widget-title">Categories</h3>
                                    <ul class="widget-menu show">
                                        <li class="menu-item"><a class="menu-link" href="#">Health Category</a>
                                        </li>
                                        <li class="menu-item"><a class="menu-link" href="#">Women Fashion</a>
                                        </li>
                                        <li class="menu-item"><a class="menu-link" href="#">Men Fashion</a>
                                        </li>
                                        <li class="menu-item"><a class="menu-link" href="#">Electronic</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="single-widget">
                                    <h3 class="widget-title">Brands</h3>
                                    <ul class="widget-menu">
                                        <li class="menu-item"><a class="menu-link" href="#">Circle</a>
                                        </li>
                                        <li class="menu-item"><a class="menu-link" href="#">CodeLab</a>
                                        </li>
                                        <li class="menu-item"><a class="menu-link" href="#">HEXLAB</a>
                                        </li>
                                        <li class="menu-item"><a class="menu-link" href="#">Kanba</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="single-widget">
                                    <h3 class="widget-title">Quick Links</h3>
                                    <ul class="widget-menu">
                                        <li class="menu-item">
                                            <a class="menu-link" href="{{ route('faq') }}">Help &amp; FAQ</a>
                                        </li>
                                        <li class="menu-item">
                                            <a class="menu-link" href="{{ route('terms.conditions') }}">Terms of Conditions</a>
                                        </li>
                                        <li class="menu-item">
                                            <a class="menu-link" href="{{ route('privacy.policy') }}">Privacy Policy</a>
                                        </li>
                                        <li class="menu-item">
                                            <a class="menu-link" href="{{ route('contact.us') }}">Contact Us</a>
                                        </li>
                                        <li class="menu-item">
                                            <a class="menu-link" href="{{ route('about.us') }}">About Us</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="single-widget newsletter-widget">
                            <h3 class="widget-title">Subscribe for Newsletter</h3>
                            <p class="newsletter-text">
                                Receive our latest updates about our <br> products and promotions.
                            </p>
                            <div class="newsletter-form mb-40">
                                <form id="subscribe_form" name="subscribe_form" method="POST">
                                    <input type="hidden" name="_token" value="z8IzV1IjwBDBzh2xk5mWIRncryxtnW1G2NyKj67x">
                                    <div class="form-group">
                                        <input type="email" class="form-control subscribe" id="subscribe"
                                            name="subscribe" placeholder="Email" required />
                                        <button type="button" class="subscribe-btn subscribe_btn">Subscribe</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container-fluid">
                <div class="footer-bottom-wrap">
                    Designed &amp; Developed By liveprojectacademy.com
                </div>
            </div>
        </div>
    </footer>
    <!-- footer area end here -->
    <!-- footer area end here -->
    <div id="DoNotSubscribe" data-url="/do_not_subscribe"></div>
    <div id="SubscribeStore" data-url="/subscribe/store"></div>
    <div class="modal fade common-modal" id="trackOrderModal" tabindex="-1" aria-labelledby="trackOrderModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLabel">Track Order</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="public-order-track.html" method="POST">
                        <input type="hidden" name="_token" value="z8IzV1IjwBDBzh2xk5mWIRncryxtnW1G2NyKj67x">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Order Number</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="order_number"
                                placeholder="Enter order number">
                        </div>
                        <div class="modal-btn-wrap text-end">
                            <button type="submit" class="primary-btn">Track</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade common-modal" id="trackOrderModal" tabindex="-1" aria-labelledby="trackOrderModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLabel">Track Order</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="public-order-track.html" method="POST">
                        <input type="hidden" name="_token" value="z8IzV1IjwBDBzh2xk5mWIRncryxtnW1G2NyKj67x">
                        <div class="mb-3">
                            <label for="exampleFormControlInput2" class="form-label">Order Number</label>
                            <input type="text" class="form-control" id="exampleFormControlInput2" name="order_number"
                                placeholder="Enter order number">
                        </div>
                        <div class="modal-btn-wrap text-end">
                            <button type="submit" class="primary-btn">Track</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade common-modal" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="">Login</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/user/login-modal" method="POST">
                        <input type="hidden" name="_token" value="z8IzV1IjwBDBzh2xk5mWIRncryxtnW1G2NyKj67x">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="Password">
                        </div>

                        <div class="modal-btn-wrap text-end">
                            <button type="submit" class="primary-btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id="DoNotSubscribe" data-url="/do_not_subscribe"></div>
    <div id="SubscribeStore" data-url="/subscribe/store"></div>

    <!-- Js file  -->
    <script src="{{ asset('front/assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/plugins.js') }}"></script>
    <script src="{{ asset('front/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/main.js') }}"></script>
    <script src="{{ asset('front/assets/js/front/custom.js') }}"></script>
    <script src="{{ asset('front/assets/js/front/extra.js') }}"></script>
    <script src="{{ asset('front/assets/js/front/sweat_aleart.js') }}"></script>
    <script src="{{ asset('front/assets/js/common.js') }}"></script>


    <script src="{{ asset('front/admin/js/toastr.min.js') }}"></script>

    <script>
        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-bottom-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };
    </script>

    <script>
        (function(window, document) {
            var loader = function() {
                var script = document.createElement("script"),
                    tag = document.getElementsByTagName("script")[0];
                script.src = "https://seamless-epay.sslcommerz.com/embed.min.js?" + Math.random().toString(36)
                    .substring(7);
                tag.parentNode.insertBefore(script, tag);
            };
            window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload",
                loader);
        })(window, document);
    </script>
    <script src="{{ asset('front/assets/js/pages/home.js')}}"></script>
    <script src="{{ asset('front/assets/js/pages/cart.js')}}"></script>