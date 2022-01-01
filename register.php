<?php 
	$currentPage = 'register'; // current page name....
    $pageTitle = 'Register';
    $metaDescription ="A New League in Sports Trading"
	include 'header.php'; ?>

<body>

<?php include 'navbar.php'; ?>


<div class="section registor-form border-bottom">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="form-section position-relative">
                    <h1>
                        Register Account
                    </h1>
                    <h2>
                        All Fields are required
                    </h2>
                    <form method="post">
                        <div class="row g-4">
                            <div class="col-md-6 mb-3">
                                <label for="fname">First Name</label>
                                <input type="text" name="f_name" class="form-control mb-0">
                                <div class="text-danger fname-error">  
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="lname">Last Name</label>
                                <input type="text" name="l_name" class="form-control mb-0">
                                <div class="text-danger lname-error">  
                                </div>
                            </div>
                        </div>

                        <div class="row g-4">
                            <div class="col-md-12 mb-3">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control mb-0">
                                <div class="text-danger email-error">  
                                </div>
                            </div>
                        </div>

                        <div class="row g-4">
                            <div class="col-md-12 mb-3">
                                <label for="phone">Phone Number</label>
                                <input type="tel" name="phone" class="form-control mb-0">
                                <div class="text-danger phone-error">  
                                </div>
                            </div>
                        </div>
                        <div class="row g-4">
                            <div class="col-md-12 mb-3">
                                <div class="g-recaptcha" data-sitekey="6LcInm8dAAAAAFekp-XWRFvYsYYtR_Dx6CIZqrqQ"></div>
                                <div class="text-danger captcha-error">  
                                    
                                </div>
                            </div>
                        </div>

                        <div class="row g-4">
                            <div class="col-md-12">
                                <p>
                                    By registering you confirm that you're 18 years of age or 
                                    older and agree to the <a href="terms.php">Terms Conditions</a> and <a href="privacy.php">Privacy Statement.</a>
                                </p>
                            </div>
                        </div>

                        <div class="row g-4">
                            <div class="col-md-12 d-grid">
                                <a href="#!" id = "register-form" class="btn btn-secondary">
                                    REGISTER ACCOUNT
                                    <span class="spinner-border spinner-border-sm ms-2"></span>
                                </a>
                            </div>
                        </div>
                    </form>
                    <div class="form-submit-msg" id="success-msg">
						<div class="message-content text-center">
							<p>
								<img class = "mb-3" src="images/ic_success.svg" 
								alt="success-icon">
							</p>
							<h4>
								Thank You!
							</h4>
							<p>
									We have received your submission.
							</p>
							<p>
								Our Team will get back to you very soon
							</p>
						</div>
					</div>
                    <div class="form-submit-msg" id="fail-msg">
						<div class="message-content text-center">
							<p>
								<img class = "mb-3" src="images/ic_success.svg" 
								alt="success-icon">
							</p>
							<h4>
								Sorry!
							</h4>
							<p>
									Something went wrong.
							</p>
							<p>
								Please try again
							</p>
						</div>
					</div>

                </div>
            </div>  
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>