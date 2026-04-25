<!-- Start Footer 
    ============================================= -->
    <footer class="bg-dark text-light" style="background-image: url(assets/img/shape/brush-down.png); background-color: #000000 !important;">
        <div class="container">
            <div class="f-items default-padding">
                <div class="row">
                    
                    <!-- Single Itme -->
                    <div class="col-lg-4 col-md-6 item">
                        <div class="footer-item about">
                            <img class="logo" src="assets/img/Navanath-Farms-Final-Logo2-rmbg.png" alt="Logo">
                            <p>
                                Navanath Natural Farms is dedicated to bringing back the wisdom of traditional farming with 100% chemical-free, nutrient-rich produce through cow-based natural farming practices.
                            </p>
                        </div>
                    </div>
                    <!-- End Single Itme -->

                    <!-- Single Itme -->
                    <div class="col-lg-2 col-md-6 item">
                        <div class="footer-item link">
                            <h4 class="widget-title">Explore</h4>
                            <ul>
                                <li>
                                    <a href="index.php">Home</a>
                                </li>
                                <li>
                                    <a href="about.php">About Us</a>
                                </li>
                                <li>
                                    <a href="community.php">Join Community</a>
                                </li>
                                <li>
                                    <a href="process.php">Our Process</a>
                                </li>
                                <li>
                                    <a href="contact.php">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Itme -->

                    <!-- Single Itme -->
                    <div class="col-lg-3 col-md-6 item">
                        <div class="footer-item recent-post">
                            <h4 class="widget-title">Recent Posts</h4>
                            <ul>
                                <li>
                                    <div class="thumb">
                                        <a >
                                            <img src="assets/img/thumbs/3.jpg" alt="Thumb">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <div class="meta-title">
                                            <span class="post-date">12 April 2026</span>
                                        </div>
                                        <h5><a >The secret to authentic Indian spices.</a></h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb">
                                        <a >
                                            <img src="assets/img/thumbs/5.jpg" alt="Thumb">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <div class="meta-title">
                                            <span class="post-date">13 April 2026</span>
                                        </div>
                                        <h5><a>Empowering small-scale Indian farmers.</a></h5>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Itme -->

                    <!-- Single Itme -->
                    <div class="col-lg-3 col-md-6 item">
                        <div class="footer-item contact">
                            <h4 class="widget-title">Contact Info</h4>
                            <ul>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-home"></i>
                                    </div>
                                    <div class="content">
                                        <strong>Address:</strong>
                                        Plot 87, Rd No: 2, Mangapuram, Old Alwal, Hyderabad, Telangana - 500010.
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="content">
                                        <strong>Email:</strong>
                                        <a href="mailto:navanathfarms@gmail.com">navanathfarms@gmail.com</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                    <div class="content">
                                        <strong>Phone:</strong>
                                        <a href="tel:+918520826624">+91 85208 26624</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Single Itme -->
                    
                </div>
            </div>
            <!-- Start Footer Bottom -->
            <div class="footer-bottom">
                <div class="row">
                    <div class="col-lg-6">
                        <p>&copy; Copyright 2026. All Rights Reserved by <a>Navanath Natural Farms</a></p>
                    </div>
                    <div class="col-lg-6 text-end">
                        <ul>
                            <li>
                                <a>Terms</a>
                            </li>
                            <li>
                                <a>Privacy</a>
                            </li>
                            <li>
                                <a>Support</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Footer Bottom -->
        </div>
        <div class="shape-right-bottom">
            <img src="assets/img/shape/10.png" alt="Image Not Found">
        </div>
        <div class="shape-left-bottom">
            <img src="assets/img/shape/11.png" alt="Image Not Found">
        </div>
    </footer>
    <!-- End Footer -->
    
    <!-- jQuery Frameworks
    ============================================= -->
    <!-- Order Modal -->
    <div class="modal fade" id="orderModal" tabindex="-1" aria-labelledby="orderModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content overflow-hidden border-0 radius">
                <div class="modal-header bg-theme text-light border-0 py-3">
                    <h5 class="modal-title" id="orderModalLabel">Request a Quote</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <div class="form-row-wrapper">
                        <form class="b2b-form order-form-styles" id="b2bOrderForm" action="order-form.php" method="POST">
                            <input type="hidden" name="product_name" id="modal_product_name">
                            <div id="orderMessage"></div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <input type="text" name="name" class="form-control" placeholder="Full Name *" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <input type="email" name="email" class="form-control" placeholder="Email *" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <input type="tel" name="phone" class="form-control" placeholder="Phone Number *" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <input type="text" name="location" class="form-control" placeholder="City / State *" required>
                                </div>
                                <div class="col-lg-12 mb-3">
                                    <textarea name="requirements" class="form-control" rows="3" placeholder="Requirements"></textarea>
                                </div>
                                <div class="col-lg-12 text-center">
                                    <button type="submit" id="orderSubmit" class="btn btn-theme secondary btn-md radius animation">Request Quote</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        #orderModal .modal-content {
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }
        #orderModal .bg-theme {
            background-color: #c1c439 !important;
        }
        #orderModal .btn-theme.secondary {
            background-color: #aa7d39;
            color: #fff;
            border: none;
            padding: 12px 30px;
        }
        #orderModal .form-control, #orderModal .form-select {
            border-radius: 8px;
            border: 1px solid #ddd;
            padding: 12px 15px;
            font-size: 14px;
        }
        #orderModal .form-control:focus, #orderModal .form-select:focus {
            border-color: #c1c439;
            box-shadow: 0 0 0 0.25rem rgba(193, 196, 57, 0.25);
        }
    </style>

    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.appear.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/modernizr.custom.13711.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/progress-bar.min.js"></script>
    <script src="assets/js/circle-progress.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/count-to.js"></script>
    <script src="assets/js/jquery.scrolla.min.js"></script>
    <script src="assets/js/YTPlayer.min.js"></script>
    <script src="assets/js/TweenMax.min.js"></script>
    <script src="assets/js/loopcounter.js"></script>
    <script src="assets/js/navnath.js"></script>
    <script src="assets/js/main.js"></script>
    
    <script>
        $(document).ready(function() {
            var orderModal = document.getElementById('orderModal');
            if (orderModal) {
                orderModal.addEventListener('show.bs.modal', function (event) {
                    var button = event.relatedTarget;
                    var product = button.getAttribute('data-product');
                    var modalInput = orderModal.querySelector('#modal_product_name');
                    modalInput.value = product || 'General Inquiry';
                });
            }
        });
    </script>
    

</body>
</html>