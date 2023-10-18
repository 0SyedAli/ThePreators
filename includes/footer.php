<footer class="footer-container">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-11 col-lg-11">
                <div class="row justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-6 mb-4 mb-lg-0">
                        <div class="footer-logo">
                            <a href="index" class="img-logo">
                                <img class="img-fluid" src="images/logo.svg" alt="">
                            </a>
                            <p>Experience The Praetors’ expertise and innovative ways to elevate your business. We
                                create
                                performance-driven solutions that create new value for your business and enhance the
                                customer experience. Let’s innovate, create, and take your company to the next level!
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 mb-4 mb-lg-0 px-lg-0 px-md-0">
                        <a href="index" class=" font-weight-bold ">home</a>
                        <a href="about" class=" font-weight-bold ">about</a>
                        <a href="contact" class=" font-weight-bold ">contact us</a>
                        <a href="javascript:;" class=" font-weight-bold ">terms & condition</a>

                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 mb-4 mb-lg-0">
                        <ul class="list-unstyled contact-ul mb-0">
                            <li>
                                <a href="tel:(855) 772-6090"><img src="images/phone.png" alt="">
                                    (855) 772-6090
                                </a>
                            </li>
                            <li>
                                <a href="mailto:info@thepraetors.com"><img src="images/mail.png" alt="">
                                    info@thepraetors.com
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;"><img src="images/location.png" alt="">
                                    287 Park Avenue South, New York, NY 10010
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 mb-lg-0">
                        <h6 class="font-weight-bold follow-us">follow us</h6>
                        <ul class="social-links">
                            <li><a href="javascript:;"><img class="img-fluid" src="images/facebook.svg" alt=""></a></li>
                            <li><a href="javascript:;"><img class="img-fluid" src="images/linkedin.svg" alt=""></a></li>
                            <li><a href="javascript:;"><img class="img-fluid" src="images/instagram.svg" alt=""></a>
                            </li>
                            <li><a href="javascript:;"><img class="img-fluid" src="images/twitter.svg" alt=""></a></li>
                        </ul>
                        <!-- <h6>subscribe to newsletter</h6>
                        <div>
                            <div class="input-group mt-3">
                                <input type="email" placeholder="Enter your email address"
                                    aria-describedby="button-addon1" class="form-control border-0 shadow-0">
                                <div class="input-group-append">
                                    <button id="button-addon1" type="submit" class="btn btn-link"><i
                                            class="fa fa-paper-plane"></i></button>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Copyrights -->
    <div class="copy-right">
        <div class="container text-center">
            <p class="">© 2019 The Praetors All rights reserved.</p>
        </div>
    </div>
</footer>


<div class="contact-modal">
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                        class="fa-solid fa-xmark"></i></button>
                <div class="modal-body">
                    <form class="form-get-quote" action="javascript:;" method="POST">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <div class="title">
                                    <h2>First things first!</h2>
                                    <p>Let's start with your name</p>
                                </div>
                                <div class="row gy-4">
                                    <div class="col-lg-12">
                                        <div class="txt-box">
                                            <input type="text" name="quote[name]" required placeholder="Full Name*">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="txt-box">
                                            <input type="text" name="quote[email]" required placeholder="Email*">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="txt-box">
                                            <input type="text" id="phone" name="quote[phone]" required class="phoneNum"
                                                placeholder="Phone*">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="txt-box">
                                            <textarea name="quote[message]" placeholder="Message" id="" cols="30"
                                                rows="4"></textarea>
                                            <input type="text" name="quote[ip]" hidden value=<?php echo $_SERVER["REMOTE_ADDR"]; ?>>
                                             <input type="text" name="quote[date]" hidden value=<?php echo date("Y/m/d"); ?>>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="txt-box">
                                            <div class="btn-sub">
                                                <button class="btn">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="js/jquery-3.6.3.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="js/fancybox.min.js"></script>
<!--<script src="js/owl.carousel.min.js"></script>-->
<script src="js/jquery-ui.js"></script>
<script type="text/javascript" src="js/slick.js"></script>
<script src="js/intlTelInput.js"></script>
<script>
AOS.init({

    once: true

});
</script>
<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js" type="text/javascript">
</script>
<script src="js/custom.js"></script>
<script>
$(document).ready(function() {
    $(".navbar-toggler").click(function() {
        $(".main-haeder").toggleClass("mobile-active");
    });
});
</script>
</body>
<script>
// $(".phoneNum").inputmask({
//     "mask": "+9(999) 999-9999"
// }).on("input", function() {
//     var minLength = 11; // minimum length of the formatted phone number, including the country code
//     var phoneNumber = $(this).val().replace(/\D/g, ''); // remove non-digit characters from the input value
//     if (phoneNumber.length < minLength) {
//         this.setCustomValidity("Phone number must have a minimum length of " + minLength + " digits");
//     } else {
//         this.setCustomValidity("");
//     }
// });
</script>
<script>
// Services Page Faq Section Start //

const items = document.querySelectorAll(".accordion a");

function toggleAccordion() {
    const isActive = this.classList.contains("active");

    // Close all accordions first
    items.forEach(item => {
        item.classList.remove("active");
        item.nextElementSibling.classList.remove("active");
    });

    // If the clicked item was not active, open it
    if (!isActive) {
        this.classList.add("active");
        this.nextElementSibling.classList.add("active");
    }
}

// Open the first accordion item by default
if (items.length > 0) {
    items[0].classList.add("active");
    items[0].nextElementSibling.classList.add("active");
}

items.forEach(item => item.addEventListener("click", toggleAccordion));



// faq animation start //

const faqSection = document.getElementById('faq-row');
const faqQues = document.getElementById('activeQues');

section.addEventListener('mouseenter', () => {
    card.classList.remove('active');
});

section.addEventListener('mouseleave', () => {
    card.classList.add('active');
});
</script>
<script type="text/javascript">
jQuery(document).ready(function() {
    jQuery(".main-haeder .navbar-nav #service").hover(
        function() {
            // On hover-in, show the dropdown
            jQuery(this).find(".dropdown-cus").show();
        },
        function() {
            // On hover-out, hide the dropdown
            jQuery(this).find(".dropdown-cus").hide();
        }
    );
});
</script>

<script>
$('.form-get-quote').on('submit', function(e) {
    //$('.btn-quote').on('click' , function(e){        
    var obj = $(this);
    e.preventDefault();
    var data = $(obj).serialize();
    // alert()
    jQuery.ajax({
        url: window.location.href.substring(0, window.location.href.lastIndexOf("/") + 1) +
            "/sendmail",
        // For Demo
        //url: window.location.origin + '/lvm-track-html/v6/sendmail.php',
        // For Live
        // url: window.location.origin + '/sendmail.php',
        type: "POST",
        data: data,
        async: false, // Has to be false to be able to return response
        dataType: "json", // Has to be false to be able to return response
        success: function(response) {
            if (response.status == 1) {
                //$('#myModal').modal('hide');
                //$('#myModal').modal('show');
                //   alert('Submit Successfully.');
                window.location =
                    "/thankyou";
                obj.trigger("reset");
            } else {
                return false;
            }

        },
        beforeSend: function() {
            // Loader.show();
        }
    });

    return false;
});
</script>
<script>
    var input = document.querySelector("#phone");
    var input1 = document.querySelector("#phone2");
    window.intlTelInput(input, {
        utilsScript: "build/js/utils.js"
    });

    window.intlTelInput(input1, {
        utilsScript: "build/js/utils.js"
    });
    
</script>


</html>