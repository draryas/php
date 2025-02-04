<?php include "header.php" ?>
<!-- main-area -->
<main>
    <!-- search-popup -->
    <div class="modal fade bs-example-modal-lg search-bg popup1" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content search-popup">
                <div class="text-center">
                    <a href="#" class="close2" data-dismiss="modal" aria-label="Close">× close</a>
                </div>
                <div class="row search-outer">
                    <div class="col-md-11"><input type="text" placeholder="Search for products..." /></div>
                    <div class="col-md-1 text-right"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /search-popup -->
    <!-- slider-area -->
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo $url; ?>img/bnr-2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?php echo $url; ?>img/bnr-1.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- slider-area-end -->
    <!-- about-area -->
    <section class="about-area about-p pt-60 pb-120 p-relative fix">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="s-about-img p-relative  wow fadeInLeft animated" data-animation="fadeInLeft"
                        data-delay=".4s">
                        <img src="<?php echo $url; ?>img/about-us.png" alt="img">
                        <div class="about-text second-about">
                            <span>6+</span>
                            <p>Years of Experience</p>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="about-content s-about-content  wow fadeInRight  animated" data-animation="fadeInRight"
                        data-delay=".4s">
                        <div class="about-title second-title pb-25">
                            <h5>About Us</h5>
                            <h2>Dr. Arya's Multispeciality Dental Hospital</h2>
                            <h4 class="my-3">A center for Quality Treatment and Modern Dental Health Care</h4>
                        </div>
                        <p class="text-justify">Welcome to Dr. Arya’s Multispecialty Dental Hospital, where
                            exceptional dental care meets
                            affordability. Since our establishment in 2017, Aryas Dental Hospitals has been
                            dedicated to delivering top-notch dental treatments that are cost-effective and
                            accessible to all.</p>
                        <p class="text-justify">Our commitment to excellence is evident in our state-of-the-art
                            facilities, where we
                            offer high-quality dental care. Our team comprises six specialist doctors, each
                            dedicated to providing the best dental care possible. We have invested in top-notch
                            dental infrastructure to ensure that our patients receive the highest standard of
                            treatment.</p>
                        <div class="slider-btn mt-20">
                            <a href="about-us" class="btn ss-btn smoth-scroll">Read More</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- about-area-end -->
    
    <section id="counter" class="">
        <div class="call-area"
            style="background-color:#14469f !important; background-position: bottom;">
            <div class="container">
                <div class="row g-3 align-items-center">
                    <div class="col-lg-12 col-md-12 col-sm-6">
                        <div class="main_counter_content wow fadeInUp">
                            <div class="row py-4 justify-content-center">
                                <div class="col-lg-2 col-md-6 col-12">
                                    <div class="single_counter text-center">
                                        <i class="fas fa-calendar-week"></i>
                                        <h2><span class="statistic-counter text-white">10</span> <i class="fas fa-plus"></i></h2>
                                        <span></span>
                                        <p class="my-1">Years Of Experience</p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-6 col-12">
                                    <div class="single_counter text-center">
                                        <i class="fas fa-users"></i>
                                        <h2 class="statistic-counter">6</h2>
                                        <p class="my-1">Specialists </p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-12">
                                    <div class="single_counter text-center">
                                        <i class="fas fa-tooth"></i>
                                        <h2><span class="statistic-counter text-white">15000</span> <i class="fas fa-plus"></i></h2>
                                        <p class="my-1">Root Canal Test</p>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-6 col-12">
                                    <div class="single_counter text-center">
                                        <i class="fas fa-teeth"></i>
                                        <h2><span class="statistic-counter text-white">1000</span> <i class="fas fa-plus"></i></h2>
                                        <p class="my-1">Dental Implants</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-12">
                                    <div class="single_counter text-center">
                                        <i class="fas fa-handshake"></i>
                                        <h2><span class="statistic-counter text-white">10000</span> <i class="fas fa-plus"></i></h2>
                                        <p class="my-1">Happy Patients</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <div class="main_counter_area">
            <div class="overlay p-y-3">
                <div class="container">
                    <div class="row">

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Services -->
    <?php include "services-home.php" ?>
    <!-- Our Services End -->

    <!-- booking-area-end -->
    <!-- testimonial-area -->
    <!-- <section class="testimonial-area pb-115 p-relative fix" style="background-color: #f6f8fc;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center mb-50 wow fadeInDown animated" data-animation="fadeInDown"
                            data-delay=".4s">
                            <h5>Testimonials</h5>
                            <h2>
                                What Our Clients Says
                            </h2>

                        </div>

                    </div>

                    <div class="col-lg-12">
                        <div class="testimonial-active">
                            <div class="single-testimonial">
                                <div class="testi-author">
                                    <img src="<?php echo $url; ?>img/profile.jpg" alt="img">
                                </div>
                                <div class="review mb-30"><img src="<?php echo $url; ?>img/testimonial/review-icon.png" alt="img"></div>
                                <p>Got my dental treatment from Dr hemanth who is the best dentist in Dr As rao Nagar.
                                    Did My 3 root canals and 5 caps. Treatment went on very smooth and fast.</p>
                                <div class="ta-info">
                                    <h6>Padmaja Nemani</h6>
                                </div>
                                <div class="qt-img">
                                    <img src="<?php echo $url; ?>img/testimonial/qt-icon.png" alt="img">
                                </div>
                            </div>
                            <div class="single-testimonial">
                                <div class="testi-author">
                                    <img src="<?php echo $url; ?>img/profile.jpg" alt="img">
                                </div>
                                <div class="review mb-30"><img src="<?php echo $url; ?>img/testimonial/review-icon.png" alt="img"></div>
                                <p>Dr.Hemanth is a nice and experienced doctor. He listened to my problems carefully and
                                    patiently. He has removed my teeth carefully without any pain and issues. I strongly
                                    recommend him to consult, any one who has any dental issues.</p>
                                <div class="ta-info">
                                    <h6>Pradeep Dhar</h6>
                                </div>
                                <div class="qt-img">
                                    <img src="<?php echo $url; ?>img/testimonial/qt-icon.png" alt="img">
                                </div>
                            </div>
                            <div class="single-testimonial">
                                <div class="testi-author">
                                    <img src="<?php echo $url; ?>img/profile.jpg" alt="img">
                                </div>
                                <div class="review mb-30"><img src="<?php echo $url; ?>img/testimonial/review-icon.png" alt="img"></div>
                                <p> had visited Dr aryas dental hospital for my dental problem and doc had explained me
                                    all the treatment in detail; and I was totally satisfied with the treatment. Tq Dr
                                    hemanth sir for the valuable time u had spent on me .</p>
                                <div class="ta-info">
                                    <h6>Mahesh Mahee</h6>
                                </div>
                                <div class="qt-img">
                                    <img src="<?php echo $url; ?>img/testimonial/qt-icon.png" alt="img">
                                </div>
                            </div>
                            <div class="single-testimonial">
                                <div class="testi-author">
                                    <img src="<?php echo $url; ?>img/profile.jpg" alt="img">
                                </div>
                                <div class="review mb-30"><img src="<?php echo $url; ?>img/testimonial/review-icon.png" alt="img"></div>
                                <p>I am very happy with Doctor Hemanth kumar, I got my root canal and new tooth
                                    replacement at reasonable price... He is very polite and makes patient comfortable
                                    during the treatment</p>
                                <div class="ta-info">
                                    <h6>Lalitha Kasinadhuni</h6>
                                </div>
                                <div class="qt-img">
                                    <img src="<?php echo $url; ?>img/testimonial/qt-icon.png" alt="img">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section> -->
    <!-- testimonial-area-end -->

    <!-- testimonial-area -->
    <section class="google-reviews testimonial-area my-4 py-4">
        <div class="container">
            <div class="row">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="my-2 text-center">Google Reviews</h2>
                    </div>
                    <div class="col-lg-12">
                        <div class="testimonial-active">
                            <div class="single-testimonial">
                                <div class="review mb-30"><img
                                        src="https://www.draryasdental.com/img/testimonial/review-icon.png" alt="img">
                                </div>
                                <p class="text-justify">This was my second time as a patient at Dr.Arya'sDentistry and
                                    both times were fantastic! Dr.Hemanth and his staff are kind, gentle, and
                                    professional. Everything was explained clearly and left me feeling comfortable. If
                                    you’re looking for a new dentist, I highly recommend Dr. Hemanth</p>
                                <div class="ta-info">
                                    <h6>- Bhavani Bhavani</h6>
                                </div>
                            </div>
                            <div class="single-testimonial">
                                <div class="review mb-30"><img
                                        src="https://www.draryasdental.com/img/testimonial/review-icon.png" alt="img">
                                </div>
                                <p class="text-justify">We are very happy with the treatment.We went very late night to
                                    the clinic due to severe pain actually just after closing the clinic.The doctor very
                                    patiently opened the clinic back to give treatment..

                                    The checkup was very well done and advised for a root canal and the procedure went
                                    well with a very reasonable price.. well experienced doctor and also explained my
                                    condition very well and treatment is made with advanced equipment.we are happy with
                                    the painless treatment and can be recommended..
                                </p>
                                <div class="ta-info">
                                    <h6>- Devika Gandra</h6>
                                </div>
                            </div>
                            <div class="single-testimonial">
                                <div class="review mb-30"><img
                                        src="https://www.draryasdental.com/img/testimonial/review-icon.png" alt="img">
                                </div>
                                <p>Best place for any dental problem
                                    Dr.Hemanth gives Best treatments for all dental problems
                                    Exceptional dental care gentle treatments, personalized care, and a warm, welcoming
                                    atmosphere.
                                    My 4 root canals and 4 cap treatment went on very smooth and fast.
                                    Clinic is very hygienic and has all latest equipments
                                    I suggest everyone without any second thought
                                    Very reasonable fee amount for all his service.
                                    Dr Hemanth is our family doc, our whole family comes to him and get dental treatment
                                    done. He is very good and skilled doc Once again thank u Dr.Hemanth</p>
                                <div class="ta-info">
                                    <h6>- Satya Vani Polamraju Venkata</h6>
                                </div>
                            </div>
                            <div class="single-testimonial">
                                <div class="review mb-30"><img
                                        src="https://www.draryasdental.com/img/testimonial/review-icon.png" alt="img">
                                </div>
                                <p>I have removed my wisdom tooth here.
                                    Mild pain and they removed within 15 mins
                                    Go for it in as Rao nagar with in 3 days I recovered with out pain thanks to dr
                                    hemanth and team</p>
                                <div class="ta-info">
                                    <h6>- Sainath Sandu</h6>
                                </div>
                            </div>
                            <div class="single-testimonial">
                                <div class="review mb-30"><img
                                        src="https://www.draryasdental.com/img/testimonial/review-icon.png" alt="img">
                                </div>
                                <p>Got my dental treatment from Dr hemanth who is the best dentist in Dr As rao Nagar.
                                    Did My 3 root canals and 5 caps. Treatment went on very smooth and fast.</p>
                                <div class="ta-info">
                                    <h6>- Padmaja Nemani</h6>
                                </div>
                            </div>
                            <div class="single-testimonial">
                                <div class="review mb-30"><img
                                        src="https://www.draryasdental.com/img/testimonial/review-icon.png" alt="img">
                                </div>
                                <p>I got my friend to Dr aryas , Dr hemanth was very friendly and skill full and he has
                                    lot of knowledge about all the treatment he perform. He explains everything in
                                    details .</p>
                                <div class="ta-info">
                                    <h6>- Nigam Shantanu</h6>
                                </div>
                            </div>
                            <div class="single-testimonial">
                                <div class="review mb-30"><img
                                        src="https://www.draryasdental.com/img/testimonial/review-icon.png" alt="img">
                                </div>
                                <p>I'm thoroughly impressed with the level of care and attention to detail at Dr. Arya's
                                    Dental Hospitals. The treatment I received was top-notch. I recommend this dental
                                    hospital to everyone.</p>
                                <div class="ta-info">
                                    <h6>- Sandeep Maddi</h6>
                                </div>
                            </div>
                            <div class="single-testimonial">
                                <div class="review mb-30"><img
                                        src="https://www.draryasdental.com/img/testimonial/review-icon.png" alt="img">
                                </div>
                                <p>Was a little hesitant as it was my first time visiting this clinic . But dr Neha was
                                    very professional . Detail to the core . Very helpful . Kudos to hemanth kumar on
                                    prescribing the appropriate steps to take care after treatment . Thank you . Don’t
                                    disappoint hope this happiness continues . Keep up the good work</p>
                                <div class="ta-info">
                                    <h6>- Rachana Avireddi</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- testimonial-area-end -->


    <!-- Quick Enquiry -->
    <section id="booking" class="py-4 booking-area p-relative">
        <div class="container">
            <form action="#" class="contact-form" method="post">
                <div class="row">
                    <h3 class="text-white mb-4">
                        Dr. Arya's dental hospitals has been striving to provide the best dental care possible with
                        affordable & cost effective treatments
                    </h3>
                    <div class="col-lg-12">
                        <ul>
                            <li>
                                <div class="contact-field p-relative c-name">
                                    <input type="text" placeholder="Enter Name">
                                    <i class="fal fa-user"></i>
                                </div>
                            </li>
                            <li>
                                <div class="contact-field p-relative c-email">
                                    <input type="text" placeholder="Email Address...">
                                    <i class="fal fa-envelope"></i>
                                </div>
                            </li>
                            <li>
                                <div class="contact-field p-relative c-subject mb-20">
                                    <select class="custom-select" id="inputGroupSelect04"
                                        aria-label="Example select with button addon">
                                        <option selected>Select Service</option>
                                        <option value="Tooth Extraction">Tooth Extraction</option>
                                        <option value="Tooth Filling">Tooth Filling</option>
                                        <option value="Tooth Scaling">Tooth Scaling</option>
                                        <option value="Dental Implants">Dental Implants</option>
                                        <option value="Orthodontic Treatments">Orthodontic Treatments</option>
                                        <option value="Laser Treatments">Laser Treatments</option>
                                        <option value="Root Canal Treatments">Root Canal Treatments</option>
                                        <option value="Tooth Caps">Tooth Caps</option>
                                        <option value="Aesthetic Restorations">Aesthetic Restorations</option>
                                    </select>
                                    <i class="far fa-angle-down"></i>
                                </div>

                            </li>
                            <li>
                                <div class="slider-btn">
                                    <button class="bk-btn" data-animation="fadeInRight" data-delay=".8s">Submit
                                        Now</button>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>

            </form>
        </div>
    </section>


</main>
<!-- main-area-end -->
<?php include "footer.php" ?>