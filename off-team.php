<?php
$currentPage = 'Our Team'; // current page name....
$pageTitle = 'Our Team';
include 'header.php';
include 'send_email.php';
?>

<?php include 'navbar.php'; ?>


<section class="our-team reg-form py-3 py-md-5 text-center">
    <div class="container py-3 py-md-5 fadeIn wow animated delay-1">
        <h2>
            <span>Meet The</span> <br>
            Blockchain Algorithms Team
        </h2>
        <div class="team-gallery w-100">
            <div class="row justify-content-center">

                <div class="col-6 col-lg-4 mb-4">
                    <div class="card bg-transparent border-0 text-center">
                        <img class="w-100 mb-3" src="images/team-gallery/evans.png" alt="team-member">
                        <h3>
                            Evens Fletcher
                        </h3>
                        <p>
                            Director of Football
                        </p>
                    </div>
                </div>

                <div class="col-6 col-lg-4 mb-4">
                    <div class="card bg-transparent border-0 text-center">
                        <img class="w-100 mb-3" src="images/team-gallery/david.png" alt="team-member">
                        <h3>
                            David Sinfield
                        </h3>
                        <p>
                            Head of Customer Service
                        </p>
                    </div>
                </div>

                <div class="col-6 col-lg-4 mb-4">
                    <div class="card bg-transparent border-0 text-center">
                        <img class="w-100 mb-3" src="images/team-gallery/Chris.png" alt="team-member">
                        <h3>
                            Chris Brown
                        </h3>
                        <p>
                            Financial Operations Director
                        </p>
                    </div>
                </div>

                <div class="col-6 col-lg-4 mb-4">
                    <div class="card bg-transparent border-0 text-center">
                        <img class="w-100 mb-3" src="images/team-gallery/alan.png" alt="team-member">
                        <h3>
                            Alan Hughes
                        </h3>
                        <p>
                            Relations Manager
                        </p>
                    </div>
                </div>

                <!-- <div class="col-6 col-lg-4 mb-4">
                    <div class="card bg-transparent border-0 text-center">
                        <img class="w-100 mb-3" src="images/team-gallery/henry.png" alt="team-member">
                        <h3>
                            Henry Morris
                        </h3>
                        <p>
                            Quantitative Analyst
                        </p>
                    </div>
                </div> -->

                <div class="col-6 col-lg-4 mb-4">
                    <div class="card bg-transparent border-0 text-center">
                        <img class="w-100 mb-3" src="images/team-gallery/george.png" alt="team-member">
                        <h3>
                            George Hill
                        </h3>
                        <p>
                            Sports Analyst
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="contact-us py-3 py-md-5" id="contact-us">

    <div class="container py-3 py-md-5">

        <div class="row">

            <div class="col-md-7 col-lg-6 text-center text-md-left fadeIn wow animated delay-1">

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

                                info@blockchainalgorithms.co

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

                                We would love to hear from you at Blockchain Algorithms

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



                                <div class="form-group text-center mb-0 mt-4">


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