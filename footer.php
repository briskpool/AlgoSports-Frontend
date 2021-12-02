
<section class="footer-main">
    <div class="container">
        <div class="row g-3">

            <div class="col-md-6">
                <ul class="nav mt-1">
                    <li class="nav-item">
                        <a href="terms.php" class="nav-link">
                            Terms Of Use
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="privacy.php" class="nav-link">
                            Privacy Statement
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-md-6">
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a href="https://twitter.com/AlgoSportsGroup" target="_blank" class="nav-link social-icon">
                            <i class="bi bi-twitter"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.instagram.com/algosportsgroup/" target="_blank" class="nav-link social-icon">
                            <i class="bi bi-instagram"></i>
                        </a>
                    </li>
                </ul>
            </div>
            
        </div>
    </div>
</section>

<section class="copyright py-3">
    <div class="container py-3 text-center">
        <div class="row">
            <div class="col">
                <h1>
                    Copyright © 2016 All Rights Reserved
                </h1>
                <P class = "mb-0">
                    © 2016 AlgoSports Group (UK) Limited. The information provided on this 
                    website is for information purposes only. The website and its content 
                    are not, and should not be deemed to be an offer of, or invitation to 
                    engage in any investment activity. The website should not be construed 
                    as advice or a personal recommendation by AlgoSports Group (UK) Limited 
                    or any of its partners. AlgoSports Group (UK) Limited is not authorised 
                    and regulated by the Financial Conduct Authority (FCA). The content of this
                     promotion is not authorised under the Financial Services and Markets Act 
                     2000 (FSMA). Reliance on the promotion for the purpose of engaging in any 
                     investment activity may expose an individual to a significant risk of 
                     losing all of the investment. UK residents wishing to participate in this 
                     promotion must fall into the category of sophisticated investor or high 
                     net worth individual as outlined by the Financial Conduct Authority (FCA).
                </P>
            </div>
        </div>
    </div>
</section>




<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
<script src="js/jquery.countup.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src='https://www.google.com/recaptcha/api.js' async defer></script>
<script src='js/matches.js'></script>
<script src='js/all-fixture.js'></script>
<!-- Cookies Alert Start Here -->
<div class="wrapper-hidden" id="cookies-alert">
    <div class="content">
      <header>Cookies Consent</header>
      <p>We use cookies to manage user login sessions, enhance user experience, perform essential site operations and tailor advertising and other content to reflect your specific interests. By clicking <span style="color:#fff;">"I Accept"</span> you consent to the use of cookies and similar technologies for the purposes we outline in our <a href="privacy.php" target="_blank">Privacy Policy</a>.</p> 
      <div class="buttons">
        <button class="btn btn-primary">I Accept</button>
      </div>
    </div>
  </div>
  <div class="back-to-top">Top</div>


  <script src="js/cookies.js"></script>
<!-- Cookies Alert Ending -->
<script>

$(document).ready(function () {
    $("#tabs li a").on("click", function (e) {
        $("#tabs li, #content .current").removeClass("current").removeClass("fadeInUp");
        $(this).parent().addClass("current");
        var currentTab = $(this).attr("href");
        $(currentTab).addClass("current fadeInUp");
        e.preventDefault();
    });
});

$(document).ready(function (){
    $('.carousel-control-prev').hide();
        $('.carousel-control-next').click(function(){
            $('.carousel-control-prev').show();
        })
});
$(".spinner-border").hide();
$('#submit-form').click(function(){
    const fname=$('input[name="fname"]').val();
    const email=$('input[name="email"]').val();
    const subject=$('input[name="subject"]').val();
    const message=$('textarea[name="message"]').val();
    const mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    
    if(fname==''){
        $('.fname-error').text('This field is required');
        return false;
    }else{
        $('.fname-error').text('');
    }


    if(email==''){
        $('.email-error').text('This field is required');
        return false;
    }
    if(!email.match(mailformat)){
        $('.email-error').text('Invalid email address');
        return false;
    }else{
        $('.email-error').text('');
    }

    
    if(subject==''){
        $('.subject-error').text('This field is required');
        return false;
    }else{
        $('.subject-error').text('');
    }

    if(message==''){
        $('.message-error').text('This field is required');
        return false;
    }
    
    else{
        $('.message-error').text('');
    }

    $(".spinner-border").addClass('show');

    $.post("send_email.php",
    {
        form: "contact",
        f_name: fname,
        email: email,
        subject: subject,
        msg: message,
        g_recaptcha_response: grecaptcha.getResponse(),
    },
    
    function(data, status){
        // console.log(data);
        if(data=='success'){
            $("#success-msg").fadeIn(300).delay(3000).fadeOut(200);
            $("input").val('');
            $("textarea").val('');
        }
        else if(data=='captcha-error'){
           $('.captcha-error').text('Captcha is required');
        }else{
            $("#fail-msg").fadeIn(300).delay(3000).fadeOut(200);
        }
    });

    $(document).ajaxComplete(function(){
        $(".spinner-border").addClass('show').fadeOut();
    });

});
$('#register-form').click(function(){
	
    const fname=$('input[name="f_name"]').val();
    const lname=$('input[name="l_name"]').val();
    const email=$('input[name="email"]').val();
    const phone=$('input[name="phone"]').val();
    const mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(fname==''){
        $('.fname-error').text('This field is required');
        return false;
    }else{
        $('.fname-error').text('');
    }

    if(lname==''){
        $('.lname-error').text('This field is required');
        return false;
    }else{
        $('.lname-error').text('');
    }

    if(email==''){
        $('.email-error').text('This field is required');
        return false;
    }
    if(!email.match(mailformat)){
        $('.email-error').text('Invalid email address');
        return false;
    }else{
        $('.email-error').text('');
    }

    if(phone==''){
        $('.phone-error').text('This field is required');
        return false;
    }
    if(isNaN(phone)){
        $('.phone-error').text('Invalid phone number');
        return false;
    }
    else{
        $('.phone-error').text('');
    }

    $(".spinner-border").show();

    $.post("send_email.php",
    {
        form: "register",
        f_name: fname,
        l_name: lname,
        email: email,
        phone: phone,
        g_recaptcha_response: grecaptcha.getResponse(),
    },
    
    function(data, status){
        if(data=='success'){
            $("#success-msg").fadeIn(300).delay(3000).fadeOut(200);
            $("input").val('');
        }
        else if(data=='captcha-error'){
           $('.captcha-error').text('Captcha is required');
        }else{
            $("#fail-msg").fadeIn(300).delay(3000).fadeOut(200);
        }
    });

    $(document).ajaxComplete(function(){
        $(".spinner-border").fadeOut();
    });
});
$('#open-menu').click(function(){
    $('.side-mobile-nav').fadeIn();
    $('body').addClass('modal-open')
});

$('#close-menu').click(function(){
    $('.side-mobile-nav').fadeOut();
    $('body').removeClass('modal-open')
});

$('.side-mobile-nav .nav li a').click(function(){
    $('.side-mobile-nav').fadeOut();
    $('body').removeClass('modal-open')
});

jQuery(document).ready(function($) {
    $('.counter').countUp({
        'time': 2000,
        'delay': 10
    });
});

// Scroll up btn
jQuery(window).on("scroll", function () {
	if ($(this).scrollTop() > 800) {
		$(".back-to-top").addClass("show-back-to-top");
	} else {
		$(".back-to-top").removeClass("show-back-to-top");
	}
});
$(".back-to-top").on("click", function () {
	$("html, body").animate({ scrollTop: "0" }, 500);
});

</script>