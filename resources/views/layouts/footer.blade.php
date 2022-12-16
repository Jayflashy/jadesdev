<footer class="bg-dark text-light">
    <!-- Fixed Shape -->
    <div class="fixed-shape">
        <img src="{{static_asset('img/shape/bg-3.png')}}" alt="Shape">
    </div>
    <!-- Fixed Shape -->
    <div class="container">
        <div class="f-items default-padding">
            <div class="row">
                <div class="col-lg-4 col-md-6 item">
                    <div class="f-item about">
                        <img src="{{my_asset(get_setting('logo'))}}" alt="Logo">
                        <p>
                           {{get_setting('description')}}
                        </p>
                        <div class="social">
                            <ul>
                                <li>
                                    <a href="{{get_setting('facebook')}}">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{get_setting('twitter')}}">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{get_setting('facebook')}}">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{get_setting('instagram')}}">
                                        <i class="fab fa-github"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{get_setting('whatsapp')}}">
                                        <i class="fab fa-whatsapp"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 item">
                    <div class="f-item link">
                        <h4 class="widget-title">Company</h4>
                        <ul>
                            <li>
                                <a href="{{route('about')}}">About Us</a>
                            </li>
                            <li>
                                <a href="{{route('index')}}/#projects">Works</a>
                            </li>
                            <li>
                                <a href="#products">Products</a>
                            </li>
                            <li>
                                <a href="{{route('contact')}}">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 item">
                    <div class="f-item link">
                        <h4 class="widget-title">Solutions</h4>
                        <ul>
                            <li>
                                <a href="#">Website Development</a>
                            </li>
                            <li>
                                <a href="#">App Development</a>
                            </li>
                            <li>
                                <a href="#">Website Design</a>
                            </li>
                            <li><a href="#">Digital Marketing</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 item">
                    <div class="f-item">
                        <h4 class="widget-title">Get In Touch</h4>
                        <div class="address">
                            <ul>
                                <li>
                                    <strong>Address:</strong>
                                   {{get_setting('address')}}
                                </li>
                                <li>
                                    <strong>Phone:</strong>
                                    {{get_setting('phone')}}
                                </li>
                                <li>
                                    <strong>Email:</strong>
                                    <a href="mailto:jadesdevelopers@gmail.com">{{get_setting('email')}}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Start Footer Bottom -->
    <div class="footer-bottom text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>Copyright &copy;  2021 - 2022. Designed by <a href="https://twitter.com/jayflash01">Jay Flash</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Bottom -->
</footer>