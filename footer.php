            <!-- ======= Contact Section ======= -->
            <section id="contact" class="contact">
                <div class="container" data-aos="fade-up">

                    <div class="section-header">
                        <h2>Contact</h2>
                        <p>Let's Discuss About Projects.</p>
                    </div>

                    <div class="row row-cols-1 row-cols-lg-2 g-5">
                        <div class="col px-3 p-md-5 order-2 order-lg-1" data-aos="fade-right">
                            <div class="contact-form px-3 pt-5 pb-4 p-md-5 rounded shadow">
                                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                                    <div class="mb-md-5 mb-4 text-center">
                                        <h3>Contact Form</h3>
                                    </div>
                                    <div class="form-floating mb-4">
                                        <input type="text" class="form-control" id="cname" name="cname" placeholder="Name" required>
                                        <label for="name">Name</label>
                                    </div>
                                    <div class="form-floating mb-4">
                                        <input type="email" class="form-control" id="cemail" name="cemail" placeholder="Email" required>
                                        <label for="cemail">Email address</label>
                                    </div>
                                    <div class="form-floating mb-4">
                                        <input type="tel" class="form-control" id="cmobile" pattern="[0-9]{10}" name="cmobile" placeholder="Mobile" required>
                                        <label for="mobile">Mobile</label>
                                    </div>
                                    <div class="form-floating">
                                        <select class="form-select mb-4" id="cservice" aria-label="Floating label select example" name="cservice" required>
                                            <option value="">Open this select menu</option>
                                            <option value="Website Design & Development">Website Design & Development</option>
                                            <option value="Website Management">Website Management</option>
                                            <option value="Digital Marketing">Digital Marketing</option>
                                            <option value="Search Engine Optimization">Search Engine Optimization</option>
                                            <option value="Social Media Management">Social Media Management</option>
                                            <option value="Logo & Banner Design">Logo & Banner Design</option>
                                            <option value="Video & Audio Editing">Video & Audio Editing</option>
                                        </select>
                                        <label for="select-ser">Select services</label>
                                    </div>
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Message" id="cmessage" name="cmessage" style="height: 100px"
                                            required></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                    <div class="col-12 text-center my-4 my-md-5">
                                        <button type="submit" class="btn btn-danger px-5 py-2" name="contact">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col text-center align-self-center order-1 order-lg-2" data-aos="fade-left">
                            <div class="contact-image">
                                <img src="assets/img/contact-img.webp" class="img-fluid" width="85%" alt="Contact">
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <!-- ======= End Contact Section ======= -->
        
        </main>
        <!-- ======= End Main ======= -->


        <!-- ======= Footer Section ======= -->
        <footer id="footer" class="footer">
            <div class="container">
                <div class="row row-cols-1 row-cols-md-2 g-4 text-center text-md-start">
                    <div class="col" data-aos="fade-right" data-aos-delay="200">
                        <a href="index" aria-label="Web Durga"><img src="assets/img/logo.webp" class="img-fluid" width="80px"
                                height="auto" alt="Web Durga"></a>
                    </div>
                    <div class="col align-self-center" data-aos="fade-left" data-aos-delay="200">
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                            <div class="hstack justify-content-end gap-2">
                                <input type="email" class="form-control" name="semail" id="semail"
                                placeholder="Enter your email" required>
                                <button type="submit" class="btn btn-danger" name="subscribe">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row g-5 py-5">
                    <div class="col-12 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="box box1">
                            <h3>About Us</h3>
                            <p>Web Durga is a digital marketing agency that provides a wide range of services to help businesses succeed in the online world. With a team of experienced professionals, Web Durga offers services such as web design & development, social media management, website management, logo & banner design, video & audio editing, search engine optimization (SEO), social media marketing, email marketing, content marketing, and more. The agency's goal is to help businesses increase their online visibility, attract more traffic to their websites, and ultimately generate more leads and sales. Whether it's creating a comprehensive digital marketing strategy or executing a specific campaign, Web Durga has the expertise and resources to deliver results.</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-8">
                        <div class="row row-cols-1 row-cols-md-3 g-4 ps-md-5">
                            <div class="col" data-aos="fade-up" data-aos-delay="200">
                                <div class="box box2">
                                    <h3>Important Links</h3>
                                    <ul class="nav d-block">
                                        <li class="nav-item"><a href="about-us" class="nav-link">About Us</a></li>
                                        <li class="nav-item"><a href="projects" class="nav-link">Our Work</a></li>
                                        <li class="nav-item"><a href="join-our-team" class="nav-link">Join Our Team</a></li>
                                        <li class="nav-item"><a href="help-&-faq" class="nav-link">Help & FAQ's</a></li>
                                        <li class="nav-item"><a href="contact-us" class="nav-link">Contact Us</a></li>
                                        <li class="nav-item"><a href="our-team" class="nav-link">Our Team</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col" data-aos="fade-up" data-aos-delay="300">
                                <div class="box box3">
                                    <h3>Our Service</h3>
                                    <ul class="nav d-block">
                                        <li class="nav-item"><a href="website-design-&-development" class="nav-link">Web Design
                                                & Development</a></li>
                                        <li class="nav-item"><a href="website-management" class="nav-link">Website
                                                Management</a></li>
                                        <li class="nav-item"><a href="digital-marketing" class="nav-link">Digital Marketing</a>
                                        </li>
                                        <li class="nav-item"><a href="search-engine-optimization" class="nav-link">Search Engine
                                                Optimization</a></li>
                                        <li class="nav-item"><a href="social-media-management" class="nav-link">Social Media
                                                Management</a></li>
                                        <li class="nav-item"><a href="logo-&-banner-design" class="nav-link">Logo & Banner
                                                Design</a></li>
                                        <li class="nav-item"><a href="video-&-audio-editing" class="nav-link">Video & Audio
                                                Editing</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col" data-aos="fade-up" data-aos-delay="400">
                                <div class="box box4">
                                    <h3>Contact</h3>
                                    <div class="vstack">
                                        <h4>Phone</h4>
                                        <div class="hstack">
                                            <i class="fa-solid fa-phone me-2 fs-5"></i>
                                            <a href="tel:+916397905997" target="_blank">+91-6397905997</a>
                                        </div>
                                    </div>
                                    <div class="vstack py-4">
                                        <h4>Email</h4>
                                        <div class="hstack">
                                            <i class="fa-solid fa-envelope me-2 fs-5"></i>
                                            <a href="mailto:contact@webdurga.com" target="_blank">contact@webdurga.com</a>
                                        </div>
                                    </div>
                                    <div class="vstack">
                                        <h4>Address</h4>
                                        <div class="hstack">
                                            <i class="fa-solid fa-location-pin me-2 fs-5"></i>
                                            <a href="https://goo.gl/maps/dSywtNMJvFYxoZHW8" target="_blank">Banjarawala, Dehradun,
                                                Uttarakhand 248001</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row row-cols-1 row-cols-md-2 g-0">
                    <div class="col align-self-end" data-aos="fade-right">
                        <p>Copyright @ 2023 Webdurga Technology</p>
                    </div>
                    <div class="col" data-aos="fade-left">
                        <ul class="nav">
                            <li class="nav-item"><a href="https://www.facebook.com/webdurga" target="_blank" aria-label="Facebook" rel="noopener noreferrer" class="nav-link"><i class="fa-brands fa-facebook"></i></a></li>
                            <li class="nav-item"><a href="https://www.instagram.com/webdurga/" target="_blank" aria-label="Instagram" rel="noopener noreferrer" class="nav-link"><i class="fa-brands fa-instagram"></i></a></li>
                            <li class="nav-item"><a href="https://twitter.com/WebDurga" target="_blank" aria-label="Twitter" rel="noopener noreferrer" class="nav-link"><i class="fa-brands fa-twitter"></i></a></li>
                            <li class="nav-item"><a href="https://www.linkedin.com/in/web-durga-132134261/" target="_blank" aria-label="Linkedin" rel="noopener noreferrer" class="nav-link"><i class="fa-brands fa-linkedin"></i></a></li>
                            <li class="nav-item"><a href="https://www.youtube.com/@webdurga" target="_blank" aria-label="YouTube" rel="noopener noreferrer" class="nav-link"><i class="fa-brands fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- ======= End Footer Section ======= -->
        

        <a href="https://wa.me/+916397905997" aria-label="WhatsApp" target="_blank" rel="noopener" class="whatsapp" data-aos="fade-up"  data-aos-delay="300"><i class="fa-brands fa-whatsapp"></i></a>
        <a href="tel:+916397905997" aria-label="Phone" target="_blank" rel="noopener" class="phone" data-aos="fade-up" data-aos-delay="300"><i class="fa-solid fa-phone"></i></a>
        <i class="fa-solid fa-angles-up" data-aos="fade-down" data-aos-delay="300" data-aos-offset="200" data-aos-once="false"></i>

        <div class="loader" id="preloader">
            <div class="img d-none d-lg-flex">
                <video width="15%" preload="none" autoplay loop muted playsinline>
                    <source src="assets/img/loader.webm" type="video/webm" />
                </video>
            </div>
            <div class="img d-flex d-lg-none">
                <video width="50%" preload="none" autoplay loop muted playsinline>
                    <source src="assets/img/loader.webm" type="video/webm" />
                </video>
            </div>
        </div>

        <!-- Sweat Alert -->
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

        <!-- Vendor JS Files -->
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
        <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="assets/vendor/aos/aos.js"></script>
        <script src="assets/vendor/php-email-form/validate.js"></script>

        <!-- Template Main JS File -->
        <script src="assets/js/main.js"></script>
        <script src="assets/js/active.js"></script>
        <script src="assets/js/hover.js"></script>
        <script src="assets/js/alert.js"></script>
        <script src="assets/js/loadmore.js"></script>

    </body>

</html>