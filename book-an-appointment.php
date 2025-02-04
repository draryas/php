<?php include "header.php" ?>
<main>

    <!-- breadcrumb-area -->
    <!--<section class="breadcrumb-area d-flex align-items-center" style="background-image:url(img/bg/bdrc-bg.png)">-->
    <!--    <div class="container">-->
    <!--        <div class="row align-items-center">-->
    <!--            <div class="col-xl-12 col-lg-12">-->
    <!--                <div class="breadcrumb-wrap text-left">-->
    <!--                    <div class="breadcrumb-title">-->
    <!--                        <h2>Book An Appointment</h2>-->
    <!--                        <div class="breadcrumb-wrap">-->

    <!--                            <nav aria-label="breadcrumb">-->
    <!--                                <ol class="breadcrumb">-->
    <!--                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>-->
    <!--                                    <li class="breadcrumb-item active" aria-current="page">Book An Appointment</li>-->
    <!--                                </ol>-->
    <!--                            </nav>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->

    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    <!-- breadcrumb-area-end -->
    <!-- about-area -->
    <section class="about-area about-p pt-50 pb-50 p-relative fix">
        <div class="container">
            <div class="row justify-content-start align-items-center">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="about-content s-about-content  wow fadeInRight  animated" data-animation="fadeInRight"
                        data-delay=".4s">
                        <div class="about-title second-title pb-25">
                            <h5>Book An Appointment</h5>
                            <h2>Book An Appointment</h2>
                        </div>

                    </div>
                    <form action="apt-form.php" method="post" class="contact-form mt-30" autocomplete="off">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="contact-field p-relative c-name mb-20">
                                        <input type="text" name="name" placeholder="Name" required="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="contact-field p-relative c-subject mb-20">
                                        <input type="text" name="email" placeholder="Email" required="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="contact-field p-relative c-subject mb-20">
                                        <input type="text" name="phone" placeholder="Phone" required="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="contact-field p-relative c-subject mb-20">
                                        <input type="text" name="subject" placeholder="Subject">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="contact-field p-relative c-subject mb-20">
                                        <input type="date" name="date">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="contact-field p-relative c-subject mb-20">
                                        <input type="time" name="time">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="contact-field p-relative c-message mb-30">
                                        <textarea name="message" cols="30" rows="10" placeholder="Message"></textarea>
                                    </div>
                                    <div class="slider-btn">
                                        <button class="btn ss-btn" type="submit" data-animation="fadeInRight" data-delay=".8s"><span>Submit Now</span></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                </div>
                <div class="col-lg-6">
                    <p><img src="img/book-appointment.png" class="img-fluid"></p>
                </div>
            </div>
        </div>
    </section>
    <!-- about-area-end -->

</main>
<!-- main-area-end -->
<?php include "footer.php" ?>