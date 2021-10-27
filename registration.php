<?php
$currentPage = 'registration'; // current page name....	$pageTitle = 'registration';
$pageTitle = 'Registration';
include 'header.php';
include 'send_email.php';
?>
<?php include 'navbar.php'; ?>

<section class="reg-form py-3 py-md-5">
    <div class="container py-3 py-md-5">
        <div class="row justify-content-center">
            <div class="col-10 col-md-8 col-lg-7">
                <div class="form-header fadeIn wow animated delay-1">
                    <h2>
                        Register Account
                    </h2>
                    <p>
                        All fields are required
                    </p>
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
                </div>

                <form action="" method="post" class="fadeIn wow animated delay-2">
                    <div class="form-group row">
                        <div class="col-md-6 mb-3 mb-md-0">
                            <label>First Name</label>
                            <input type="text" class="form-control" name="f_name" required placeholder="John">
                        </div>
                        <div class="col-md-6 mb-1 mb-md-0">
                            <label>Last Name</label>
                            <input type="text" class="form-control" name="l_name" required placeholder="Doe">
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" required placeholder="john@example.com">
                    </div>

                    <div class="form-group">
                        <label>Phone</label>
                        <input type="tel" class="form-control" name="phone" required placeholder="Your Phone Number">
                    </div>

                    <p>

                        By registering you confirm that you're 18 years of age or older and agree to the <br> <a href="terms.php">Terms Conditions</a> and
                        <a href="privacy.php">Privacy Statement.</a>

                    </p>
                    <div class="g-recaptcha" data-sitekey="6LcksvsbAAAAAFHny7xWmX475_Yp4GuAODAu7gKb"></div>

                    <div class="form-group mt-4">
                        <input type="submit" name="register" value="Register" class="btn btn-block btn-primary">
                        <!-- Register
                        </button> -->
                    </div>



                </form>

            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>