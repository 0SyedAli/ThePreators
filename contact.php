<?php
$page = 'Home';
$pageDesc = '""';
include 'includes/header.php';
$page = 'home';
?>
<style>
.lbcs-contact-us {
    margin-top: 80px;
}
</style>
<main>
    <!-- lets-build-your-product Start -->
    <section>
        <div class="lbcs-contact-us">
            <div class="container">
                <div class="content">
                    <div class="row justify-content-center">
                        <div class="col-xl-10 col-lg-10">
                            <div class="row">
                                <div class="col-xl-8 col-lg-8">
                                    <div class="lbcs-headings">
                                        <h2>let's build your product
                                            <span>Contact Us</span>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-xl-11 col-lg-11">
                                    <div class="row gy-3 lbcs-company-logo">
                                        <div class="col-xl-2 col-lg-2">
                                            <img class="img1" src="images/phone.png" alt>
                                            <a href="tel:(855) 772-6090">(855) 772-6090</a>
                                        </div>
                                        <div class="col-xl-5 col-lg-5 ">
                                            <img class="img2" src="images/location.png" alt>
                                            <p style="padding-right: 4rem;">287 Park Avenue South, New York, NY 10010
                                            </p>
                                        </div>
                                        <div class="col-xl-2 col-lg-2 ">
                                            <img class="img3" src="images/mail.png" alt>
                                            <a href="mailto:info@thepraetors.com">info@thepraetors.com</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lbcs-form-container">
                <div class="row px-0 mx-0">
                    <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-10 col-sm-12 col-12 lbcs-col-bg">
                        <form class="form-get-quote" action="javascript:;" method="POST">
                            <div class="row justify-content-end">
                                <div class="col-xxl-10 col-xl-10 col-lg-9 col-md-10 col-sm-12 col-12 ps-lg-5">
                                    <div class="step first-form active_step">
                                        <div class="progress-bar">
                                            <div class="row">
                                                <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-10 col-sm-12 col-12">
                                                    <div class="indicator indicator-1 active"></div>
                                                </div>
                                                <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-10 col-sm-12 col-12">
                                                    <div class="indicator indicator-2"></div>
                                                </div>
                                                <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-10 col-sm-12 col-12">
                                                    <h6>1/2</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <h1>First things first!</h1>
                                            <p>Let's start with your name</p>
                                            <div class="row">
                                                <div class="col-xxl-8 col-xl-8 col-lg-9 col-md-10 col-sm-12 col-12">
                                                    <input type="text" required name="quote[name]"
                                                        placeholder="what's your name?*">
                                                </div>
                                                <div class="col-xxl-8 col-xl-8 col-lg-9 col-md-10 col-sm-12 col-12">
                                                    <input type="email" required name="quote[email]"
                                                        placeholder="business email*">
                                                </div>
                                                <div class="col-xxl-8 col-xl-8 col-lg-9 col-md-10 col-sm-12 col-12">
                                                    <input type="text" class="phoneNum" id="phone2" required
                                                        name="quote[phone]" placeholder="phone number*">
                                                </div>
                                                <div
                                                    class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-12 col-12 d-flex align-items-end">
                                                    <button type="button" class="btn lbcs-form-btn next">Next</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="step second-form">
                                        <div class="progress-bar">
                                            <div class="row">
                                                <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-10 col-sm-12 col-12">
                                                    <div class="indicator indicator-1 active"></div>
                                                </div>
                                                <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-10 col-sm-12 col-12">
                                                    <div class="indicator indicator-2 active"></div>
                                                </div>
                                                <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-10 col-sm-12 col-12">
                                                    <h6>2/2</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="row">
                                                <div class="col-xxl-9 col-xl-9 col-lg-9 col-md-10 col-sm-12 col-12">
                                                    <h1>A few words about your project</h1>
                                                    <p>What is the value proposition of your product? Do you have a
                                                        wishlist
                                                        for
                                                        the
                                                        features or do you wish to build it together with us?</p>
                                                </div>
                                                <div class="row">
                                                    <div
                                                        class="col-xxl-11 col-xl-11 col-lg-9 col-md-10 col-sm-12 col-12">
                                                        <textarea name="quote[message]" id="" cols="30"
                                                            rows="6"></textarea>
                                                    </div>
                                                <input type="text" name="quote[ip]" hidden value=<?php echo $_SERVER["REMOTE_ADDR"]; ?>>
                                                 <input type="text" name="quote[date]" hidden value=<?php echo date("Y/m/d"); ?>>
                                                    <div
                                                        class="col-xxl-11 col-xl-11 col-lg-9 col-md-10 col-sm-12 col-12 d-flex justify-content-end gap-5 pt-5">
                                                        <button type="button" class="btn-back back"><span>
                                                                <img class="img-fluid" src="images/small-arrow-left.svg"
                                                                    alt="">
                                                            </span>back</button>
                                                        <button class="btn btn-next">submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="img-contact-b">
                            <img src="images/contact-b.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- lets-build-your-product End -->
</main>
<?php
include 'includes/footer.php';
$page = 'home';
?>