<section class="navbar-top">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img class="mr-3" src="images/logo.svg" alt="comp-logo">
            </a>

            <button class="navbar-toggler" type="button" id="open-menu">
                <img src="images/icons/menu.svg" alt="menu-icon">
            </button>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

                    <li class="nav-item <?php if ($currentPage == 'About') {
                                            echo 'active';
                                        } ?>">
                        <a class="nav-link" href="about.php">
                            About Us
                        </a>
                    </li>

                    <!-- <li class="nav-item <?php /* if ($currentPage == 'Our Team') {
                                            echo 'active';
                                        }*/ ?>">
                        <a class="nav-link" href="team.php">
                            Our Team
                        </a>
                    </li> -->
                    <li class="nav-item <?php if ($currentPage == 'Blockchain Algorithms Press Releases') {
                                            echo 'active';
                                        } ?>">
                        <a class="nav-link" href="press.php">
                            Press
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="index.php#contact-us">
                            Contact
                        </a>
                    </li>


                </ul>

                <!-- TrustBox widget - Micro Review Count -->
                <div class="trustpilot-widget" data-locale="en-GB" data-template-id="5419b6a8b0d04a076446a9ad" data-businessunit-id="60dc2ef898991100017988f1" data-style-height="24px" data-style-width="100%" data-theme="light">
                    <a href="https://uk.trustpilot.com/review/blockchainalgorithms.co" target="_blank" rel="noopener">Trustpilot</a>
                </div>
                <!-- End TrustBox widget -->


                <a class="nav-link login d-none d-lg-block" href="https://accounts.blockchainalgorithms.co/login">
                    Login
                </a>
                <a class="btn btn-primary d-none d-lg-block" href="registration.php">
                    Register Account
                </a>
            </div>
        </div>
    </nav>

    <div class="side-mobile-nav">
        <div class="side-nav-header">
            <img id="close-menu" src="images/icons/cross.svg" alt="cross-icon">

        </div>
        <div class="side-list pb-4">
            <ul class="nav flex-column text-center">
                <li class="nav-item">
                    <a href="https://accounts.blockchainalgorithms.co/login" class="nav-link">
                        Login
                    </a>
                </li>
                <li class="nav-item <?php if ($currentPage == 'About') {
                                        echo 'active';
                                    } ?>"> <a href="about.php" class="nav-link"> About Us </a> </li>
                <!-- <li class="nav-item <?php /*if ($currentPage == 'Our Team') {
                                        echo 'active';
                                    }*/ ?>">
                    <a href="team.php" class="nav-link">
                        Our Team
                    </a>
                </li> -->
                <li class="nav-item <?php if ($currentPage == 'Blockchain Algorithms Press Releases') {
                                        echo 'active';
                                    } ?>">
                    <a class="nav-link" href="press.php">
                        Press
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index.php#contact-us" class="nav-link">
                        Contact
                    </a>
                </li>

                <li class="nav-item">
                    <a href="registration.php" class="nav-link btn-primary">
                        Register Account
                    </a>
                </li>
                <li class="nav-item bg-light mt-5">
                    <!-- TrustBox widget - Micro Review Count -->
                    <div class="trustpilot-widget " data-locale="en-GB" data-template-id="5419b6a8b0d04a076446a9ad" data-businessunit-id="60dc2ef898991100017988f1" data-style-height="24px" data-style-width="100%" data-theme="light">
                        <a href="https://uk.trustpilot.com/review/blockchainalgorithms.co" target="_blank" rel="noopener">Trustpilot</a>
                    </div>
                    <!-- End TrustBox widget ---->
                </li>

            </ul>
        </div>
    </div>

</section>