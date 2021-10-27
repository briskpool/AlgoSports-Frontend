<?php

$currentPage = 'home'; // current page name....
$pageTitle = 'AlgoSports Group';
include 'header.php';
include 'send_email.php';

?>



<?php include 'navbar.php'; ?>



<section class="home-banner py-3 py-md-5 bg-dark text-light" style="padding:100px 0px !important;">

    <div class="container py-3 py-md-5 text-center text-md-left fadeIn wow animated delay-1">

        <div class="row">

            <div class="col-md-12 mt-md-4 order-last order-md-first">


                <h1>

                    A New League In Sports Trading

                </h1>



                <a href="registration.php" class="btn btn-primary px-5 mt-3">

                    Register

                </a>

            </div>

            <!-- <div class="col-md-5 order-first order-md-last">

                <img class="w-100 player-img" src="images/home/player1.png" alt="player">

            </div> -->

        </div>

    </div>

</section>

<section class="sec-b py-3 py-md-3 bg-white">

    <div class="container py-3 py-md-4">

        <div class="sec-top-pra text-center fadeIn wow animated delay-1">
            <h2>Download Our Mobile App</h2>
            <p>
                AlgoSports Group works on all major platforms, enabling seamless experience <br/>across your browser, mobile device, tablet, and computer.
            </p>

            <p class="py-3">
                <a href="https://play.google.com/store/apps/details?id=com.app.blockchainalgorithms"><img src="images/home/icon_GooglePlay.svg" alt=""></a>
            </p>

        </div>

    </div>



</section>



<section class="py-3 pt-md-2">
    <h2 class="fadeIn wow animated delay-1 animated text-center mb-3 mb-md-4" style="visibility: visible; animation-name: fadeIn;">Live Markets</h2>
    <div class="container">
        <div id="wg-api-football-fixtures" data-host="api-football-v1.p.rapidapi.com" data-refresh="60" data-date="" data-league="39" data-team="" data-season="2021" data-last="7" data-next="" data-key="2c254db3famsh3f8ef7b2d38b11ep1c40b9jsnb6f9f28d0bb3" data-theme="" data-show-errors="false" class="api_football_loader">
        </div>
        <script type="module" src="https://widgets.api-sports.io/football/1.1.8/widget.js">
        </script>
    </div>
</section>
<section class="py-3 py-md-5">
    <h2 class="fadeIn wow animated delay-1 animated text-center mb-3 mb-md-4 mt-5" style="visibility: visible; animation-name: fadeIn;">Upcoming Matches</h2>
    <div class="container">
        <div class="swiper px-0 " id="mySwiper">
            <div class="swiper-wrapper py-5">
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="row">

            <div class="col text-center fadeIn wow animated delay-1 animated" style="visibility: visible; animation-name: fadeIn;">

                <a href="all-fixtures.php" class="btn btn-primary">

                    See All Matches

                </a>

            </div>

        </div>
    </div>
</section>
<!-- <section class="py-3 py-md-5">
    <h2 class="fadeIn wow animated delay-1 animated text-center mb-3 mb-md-4 mt-5" style="visibility: visible; animation-name: fadeIn;">Standings</h2>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <table class="table" id="standing_table" style="visibility: visible; animation-name: fadeIn;">
                    Data coming from javascript (f1-ranks.js) 
</table>
</div>
</div>
</div>
</section>-->
<section class="sec-b py-3 py-md-5 bg-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 ">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/irhqocDSuVA?rel=0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>





<section class="sec-b py-3 py-md-5 bg-white">

    <div class="container py-3 py-md-4">

        <div class="sec-top-pra pb-3 text-center fadeIn wow animated delay-1">
            <h2>About Us</h2>

            <p>

                AlgoSports Group has developed its own trading algorithm (“Algo442”), based upon artificial intelligence (“AI”) which constantly refines and innovates the underlying assumptions and strategy. The trading system continuously evolves, and the self-learning algorithm develops with each trade. The system has been back-tested on 5 years of historical data and has been privately traded for 2 years successfully at AlgoSports Group.

            </p>

        </div>

        <div class="row justify-content-center">

            <div class="col-lg-4 mb-3 mb-lg-0">

                <div class="card h-100 fadeIn wow animated delay-1">

                    <div class="card-body">

                        <p class="card-img">

                            <img src="images/icons/trend1.svg" alt="icons-card">

                        </p>

                        <p class="card-title">

                            Trading

                        </p>

                        <p class="card-pra">

                            The management team we have in place is comprised not just of experienced financial services professionals, traders, data analysts, eminent mathematicians and statisticians, but also former professional football players, managers, and sports media personalities.

                        </p>

                    </div>

                </div>

            </div>



            <div class="col-lg-4 mb-3 mb-lg-0">

                <div class="card h-100 fadeIn wow animated delay-1">

                    <div class="card-body">

                        <p class="card-img">

                            <img src="images/icons/technology-icon.svg" alt="icons-card">

                        </p>

                        <p class="card-title">

                            Technology

                        </p>

                        <p class="card-pra">

                            AlgoSports Group has developed its own trading algorithm code named Algor 442, based upon artificial intelligence (“AI”) which constantly refines and innovates the underlying assumptions and strategy.

                        </p>

                    </div>

                </div>

            </div>



            <div class="col-lg-4 mb-3 mb-lg-0">

                <div class="card h-100 fadeIn wow animated delay-1">

                    <div class="card-body">

                        <p class="card-img">

                            <img src="images/icons/integrity-icon.svg" alt="icons-card">

                        </p>

                        <p class="card-title">

                            Integrity

                        </p>

                        <p class="card-pra">

                            Our team remains deeply embedded in both the sports and financial markets meaning they are able to provide our clients with the peace of mind that all the staff at AlgoSports Group are experienced experts in their fields

                        </p>

                    </div>

                </div>

            </div>

        </div>



        <div class="row py-3 mt-4">

            <div class="col btn-col text-center fadeIn wow animated delay-1">

                <a href="registration.php" class="btn btn-primary">

                    Account Opening

                </a>

            </div>

        </div>

    </div>



    <div class="container py-3 py-md-4 blockchain-agl">

        <div class="row">

            <div class="col-12 mb-3 mb-md-4 mt-5 text-center fadeIn wow animated delay-1">

                <h2>

                    AlgoSports Group

                </h2>

                <p>

                    To meet today's challenges, we have created a unique fund management system

                </p>

            </div>

        </div>



        <div class="row">

            <div class="col-12">

                <ul class="nav justify-content-center text-center fadeIn wow animated delay-1">

                    <li class="nav-item px-3 mb-3 mb-md-0">

                        <div class="circle-icon">

                            <img src="images/icons/efficiency.svg" alt="icons">

                        </div>

                        Efficiency

                    </li>

                    <li class="nav-item px-3 mb-3 mb-md-0">

                        <div class="circle-icon">

                            <img src="images/icons/experience.svg" alt="icons">

                        </div>

                        Experience

                    </li>

                    <li class="nav-item px-3 mb-3 mb-md-0">

                        <div class="circle-icon">

                            <img class="rsi" src="images/icons/security.svg" alt="icons">

                        </div>

                        Security

                    </li>

                    <li class="nav-item px-3 mb-3 mb-md-0">

                        <div class="circle-icon">

                            <img src="images/icons/eye-ic.svg" alt="icons">

                        </div>

                        Transparency

                    </li>

                    <li class="nav-item px-3 mb-3 mb-md-0">

                        <div class="circle-icon">

                            <img src="images/icons/reliable.svg" alt="icons">

                        </div>

                        Reliable

                    </li>

                    <li class="nav-item px-3 mb-3 mb-md-0">

                        <div class="circle-icon">

                            <img class="rsi" src="images/icons/complience.svg" alt="icons">

                        </div>

                        Compliance

                    </li>

                </ul>

            </div>

        </div>

    </div>



</section>



<section class="middle-banner py-4 py-md-5 bg-dark text-center text-white">

    <div class="container py-3 py-md-5">

        <div class="row mb-4">

            <div class="col fadeIn wow animated delay-1">

                <h2 class="mb-0">

                    Experience The Future of

                    Sports Trading

                </h2>

            </div>

        </div>



        <div class="row">

            <div class="col fadeIn wow animated delay-1">

                <a href="registration.php" class="btn btn-primary">

                    Start Trading Today!

                </a>

            </div>

        </div>

    </div>

</section>



<div class="sec-c py-3 py-md-5">

    <div class="container py-3 py-md-5 text-center">

        <h2 class="fadeIn wow animated delay-1">

            A Sports Trading Experience Like You

            Have Never Seen Before

        </h2>

        <div class="row mt-3 justify-content-center">



            <div class="col-lg-4 mb-3 mb-lg-0">

                <div class="card h-100 fadeIn wow animated delay-1">

                    <div class="card-body py-5">

                        <h3 class="card-hd">

                            812,500

                        </h3>

                        <p>

                            Registered Users

                        </p>

                    </div>

                </div>

            </div>



            <div class="col-lg-4 mb-3 mb-lg-0">

                <div class="card h-100 fadeIn wow animated delay-1">

                    <div class="card-body py-5">

                        <h3 class="card-hd">

                            12

                        </h3>

                        <p>

                            Countries Supported

                        </p>

                    </div>

                </div>

            </div>



            <div class="col-lg-4 mb-3 mb-lg-0">

                <div class="card h-100 fadeIn wow animated delay-1">

                    <div class="card-body py-5">

                        <h3 class="card-hd">

                            £2.1m

                        </h3>

                        <p>

                            Withdrawn Each Month

                        </p>

                    </div>

                </div>

            </div>



        </div>



        <div class="row mt-4">

            <div class="col pt-md-4 fadeIn wow animated delay-1">

                <a href="registration.php" class="btn btn-secondary">

                    Start Investing

                </a>

            </div>

        </div>



    </div>

</div>
<div class="py-3 py-md-5 bg-light">

    <div class="container py-3 py-md-5 text-center">

        <h2 class="fadeIn wow animated delay-1">

        Featured In

        </h2>

        <div class="row mt-3 justify-content-center">



            <div class="col-lg-4 mb-3 mb-lg-0">
                <div class="card-body py-2">
                    <div class="card h-100 fadeIn wow animated delay-1">
                        <img src="images/home/sunday.jpg" alt="The Sunday Times">
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-3 mb-lg-0">
                <div class="card-body py-2">
                    <div class="card h-100 fadeIn wow animated delay-1">
                        <img src="images/home/sun.jpg" alt="The Sun">
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-3 mb-lg-0">
                <div class="card-body py-2">
                    <div class="card h-100 fadeIn wow animated delay-1">
                        <img src="images/home/times.jpg" alt="The Times">
                    </div>
                </div>
            </div>



            <!-- <div class="col-lg-4 mb-3 mb-lg-0">

                <div class="card h-100 fadeIn wow animated delay-1">
                    <img src="images/home/sunday.jpg" alt="The Sunday Times">
                </div>

            </div>



            <div class="col-lg-4 mb-3 mb-lg-0">

                <div class="card h-100 fadeIn wow animated delay-1">
                    <img src="images/home/times.jpg" alt="The Times">
                </div>

            </div> -->



        </div>



    </div>

</div>



<section class="contact-us py-3 py-md-5" id="contact-us">

    <div class="container py-3 py-md-5">

        <div class="row">

            <div class="col-lg-6 text-center text-md-left fadeIn wow animated delay-1">

                <h2 class="mb-0">

                    Have A Question?

                </h2>


                <div class="contact-details mt-5">

                    <ul class="nav contact-list">

                        <li class="nav-list pr-2 img-li">

                            <span class="icon-box email">

                                <img src="images/icons/email.svg" alt="icon">

                            </span>

                        </li>

                        <li class="nav-list pl-2">

                            <div class="c-title">

                                Email Us

                            </div>

                            <p>

                                info@algosportsglobal.com

                            </p>

                        </li>

                    </ul>



                    <ul class="nav contact-list">

                        <li class="nav-list pr-2 img-li">

                            <span class="icon-box call">

                                <img src="images/icons/phone.svg" alt="icon">

                            </span>

                        </li>

                        <li class="nav-list pl-2">

                            <div class="c-title">

                                Call Us

                            </div>

                            <p>

                                0800 0622 952

                            </p>

                        </li>

                    </ul>



                    <ul class="nav contact-list">

                        <li class="nav-list pr-2 img-li">

                            <span class="icon-box loc">

                                <img src="images/icons/marker.svg" alt="icon">

                            </span>

                        </li>

                        <li class="nav-list pl-2">

                            <div class="c-title">

                                Visit Us

                            </div>

                            <p>

                                Kemp House 160 City Road London <br />EC1V 2NX

                            </p>

                        </li>

                    </ul>

                </div>

            </div>



            <div class="col-lg-6 fadeIn wow animated delay-2">

                <div class="contact-form">

                    <div class="card bg-secondary text-white">

                        <div class="card-body">

                            <h3 class="text-center">

                                We would love to hear from you at AlgoSports Group

                            </h3>



                            <form action="" method="POST">



                                <div class="form-group">

                                    <label for="name">

                                        Your Name

                                    </label>

                                    <input type="text" required name="f_name" class="form-control">

                                </div>



                                <div class="form-group">

                                    <label for="name">

                                        Your Email

                                    </label>

                                    <input type="email" required name="email" class="form-control">

                                </div>



                                <div class="form-group">

                                    <label for="name">

                                        Subject

                                    </label>

                                    <input type="text" required name="subject" class="form-control">

                                </div>



                                <div class="form-group">

                                    <label for="name">

                                        Message

                                    </label>


                                    <textarea required name="msg" class="form-control" rows="3"></textarea>


                                </div>
                                <div class="g-recaptcha" data-sitekey="6LcksvsbAAAAAFHny7xWmX475_Yp4GuAODAu7gKb"></div>



                                <div class="form-group text-center mt-3 mb-0">


                                    <input type="submit" name="sendmsg" class="btn btn-primary" value="Send Message">


                                </div>
                                <?php
                                if (isset($_SESSION['fail'])) {
                                ?>
                                    <div class="alert alert-danger mt-3">
                                        <?php echo $_SESSION['fail']; ?>
                                    </div>
                                <?php
                                    unset($_SESSION['fail']);
                                }
                                ?>
                                <?php
                                if (isset($_SESSION['success'])) {
                                ?>
                                    <div class="alert alert-success mt-3">
                                        <?php echo $_SESSION['success']; ?>
                                    </div>
                                <?php
                                    unset($_SESSION['success']);
                                }
                                ?>





                            </form>

                        </div>

                    </div>

                </div>

            </div>



        </div>

    </div>

</section>



<?php include 'footer.php'; ?>