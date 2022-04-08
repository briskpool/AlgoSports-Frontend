<?php 
	$currentPage = 'AlgoSports Group'; // current page name....
	$pageTitle = 'AlgoSports Group';
	$metaDescription = "To meet today's challenges, we have created a unique fund management system";
	include 'header.php'; ?>



<body>
	<!-- <section>
		<div class="row">
		<div class="alert text-center fw-bold text-light" style="font-size:14px; background-color:#0C2C3B;" role="alert">
			<img src="images/f1_logo.svg" style="width:80px;"> Fund 
			<a href="mailto:info@algosportsgroup.com?subject=AlgoSports F1 Fund" class="btn btn-primary mx-2 px-2 py-1">Apply Today</a>
			<span style="font-size: 14px; font-weight: 500; color:#ffffff;" id="demo"></span>
		</div>
		
			
	</section> -->

<?php include 'navbar.php'; ?>

<section class="home-banner banner-area">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-7 mb-3 mb-md-0 order-last order-md-first">
				<h1>
					A NEW LEAGUE IN
					<br>
					<span>
						SPORTS TRADING
					</span>
				</h1>
				<p class = "mb-5">
					Consistent Dividend Payments Every Month
				</p>
				<a href="register.php" class="btn btn-primary me-md-3">
					Register Today
				</a>
				<!-- <a href="#" class="google-ply-btn">
					<img src="images/googlePlay.png" alt="google-ply-btn">
				</a> -->
			</div>
			<div class="col-md-5 order-first order-md-last mb-3 mb-md-0 text-center">
				<!-- <img class = "banner-img" src="images/banner-main.png" alt="banner-img"> -->
				<div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="2000">
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="images/banner-main1.png" class="d-block w-100" alt="AlgoSports Group">
					</div>
					<div class="carousel-item">
						<img src="images/banner-main2.png" class="d-block w-100" alt="AlgoSports Group">
					</div>
					<div class="carousel-item">
						<img src="images/banner-main3.png" class="d-block w-100" alt="AlgoSports Group">
					</div>
  				</div>
			</div>


			</div>

			


		</div>
	</div>
</section>


<section class="py-3 py-md-3 bg-white">

    <div class="container py-3 py-md-4">
		<div class="row justify-content-center">
				<div class="sec-top-pra text-center fadeIn wow animated delay-1 animated" style="visibility: visible; animation-name: fadeIn;">
					<h2>Download Our Mobile App</h2>
					<p>AlgoSports Group works on all major platforms, enabling seamless experience <br>across your browser, mobile device, tablet, and computer.</p>

					<p class="py-3">
						<a href="https://play.google.com/store/apps/details?id=com.algo.algosportsgroup" target="_blank"><img src="images/icon_GooglePlay.svg" alt=""></a>
					</p>

				</div>
				<div class="col-9">
					<div class="ratio ratio-16x9 border">
						<iframe src="https://www.youtube.com/embed/gIFNu4qPPDU" title="YouTube video" allowfullscreen></iframe>
					</div>
				</div>
		</div>
		
	</div>

</section>



<section class="page-sec px-3">
	<div class="container how-it-work">
		<div class="row">
			<div class="col-12">
				<div class="step-sec">
					<h1>
						How it Works?
					</h1>
					<div class="row mx-0">
						<div class="col-md-4 mb-3 mb-md-0">
							<h2>
								<div class="num-mark">1</div>
								
							</h2>
							<p>
							Open Your Account And Deposit A Minimum Of £1,000 
							</p>
						</div>
						<div class="col-md-4 mb-3 mb-md-0">
							<h2>
								<div class="num-mark">2</div>
								
							</h2>
							<p>
								Let Us Manage Your Sportfolio
							</p>
						</div>
						<div class="col-md-4 mb-3 mb-md-0">
							<h2>
								<div class="num-mark">3</div>
								
							</h2>
							<p>
								Get Consistent Dividend Payments Every Month
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="page-sec up-coming-matches pt-2">
	<div class="container">
		<div class="row p-4 align-items-center">

			<div class="col-md-8 mb-3 mb-md-0 ps-md-0">
				<h1>
					Premier League
				</h1>
			</div>
			<div class="col-md-4 text-end pe-md-0 d-none d-md-block">
				<a href="register.php" class="btn btn-primary">
					Open Account
				</a>
			</div>

		</div>
		<div class="row">
			<div class="col-12">
				<div class="matche-navbar p-3 mb-2">
					<ul class="nav" id="tabs">
						<li class="nav-item current">
							<a href="#upcoming_matches" class="nav-link">
								Upcoming Matches
							</a>
						</li>
						<li class="nav-item">
							<a href="#tab-standings" class="nav-link">
								Standings
							</a>
						</li>
						<li class="nav-item">
							<a href="#tab-fixtures" class="nav-link">
								Fixtures
							</a>
						</li>
						<!-- <li class="nav-item">
							<a href="#formula-1" class="nav-link">
								Formula 1
							</a>
						</li>
						<li class="nav-item">
							<a href="#rugby" class="nav-link">
								UFC
							</a>
						</li> -->
					</ul>
				</div>
			</div>
			
			<div class="col-12">
				<div class="matche-content p-4 p-lg-5" id="content">
					<div id="tab-standings" class = "content-wrapper animated">
						<div class="container">
							<div id="wg-api-football-standings"
								data-host="api-football-v1.p.rapidapi.com"
								data-league="39"
								data-team=""
								data-season="2021"
								data-key="5a064d629amsh0e00769af305bdap180755jsnb03e3a7f19f0"
								data-theme=""
								data-show-errors="false"
								class="api_football_loader">
							</div>
							<script type="module" src="https://widgets.api-sports.io/football/1.1.8/widget.js">
							</script>
											
						</div>
					</div>
					<div id="tab-fixtures" class = " content-wrapper animated">
						<div class="container">
							<div id="wg-api-football-fixtures" data-host="api-football-v1.p.rapidapi.com" data-theme="dark" data-refresh="60" data-date="" data-league="39" data-team="" data-season="2021" data-last="20" data-next="" data-key="5a064d629amsh0e00769af305bdap180755jsnb03e3a7f19f0" data-theme="" data-show-errors="false" class="api_football_loader">
									</div>
							<script type="module" src="https://widgets.api-sports.io/football/1.1.8/widget.js">
							</script>
											
						</div>
					</div>
					<div id = "upcoming_matches" class = "current content-wrapper animated">
						
						<div class="swiper px-0 " id="mySwiper">
							<div class="swiper-wrapper py-5">
							</div>
							<div class="swiper-pagination"></div>
						</div>

						<div class="row mt-2">
							<div class="col text-center">
								<a href="all-fixtures.php">
									SEE ALL MATCHES
								</a>
							</div>
						</div>

					</div>

					<!-- <div id="rugby" class = "content-wrapper animated">
						<p class = "text-light">
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam omnis cum 
							iure eos deleniti, explicabo fuga nihil minima corporis reiciendis at dolorum 
							perspiciatis ratione eveniet, veritatis enim, nobis minus numquam.
						</p>
					</div>
					<div id="formula-1" class = "content-wrapper animated">
						<p class = "text-light" >
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam omnis cum 
							iure eos deleniti, explicabo fuga nihil minima corporis reiciendis at dolorum 
							perspiciatis ratione eveniet, veritatis enim, nobis minus numquam.
						</p>
					</div>
					<div id="ufc" class = "content-wrapper">
						<p class = "text-light">
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam omnis cum 
							iure eos deleniti, explicabo fuga nihil minima corporis reiciendis at dolorum 
							perspiciatis ratione eveniet, veritatis enim, nobis minus numquam.
						</p>
					</div> -->

				</div>
				
			</div>

			<div class="col-md-4 text-center d-md-none mt-4 d-grid">
				<a href="register.php" class="btn btn-primary">
					Open Account
				</a>
			</div>

		</div>
	</div>
</section>

<section class="page-sec sec-b">
	<div class="container">
		<div class="row g-3">
			<div class="col-md-4">
				<div class="card h-100">
					<div class="card-body text-center">
						<div class="ic-div mb-3">
							<img src="images/icons/trade_ic.svg" alt="icon-trade">
						</div>
						<h1>Trade</h1>
						<p>
							The management team we have in place is comprised not just of experienced 
							financial services professionals, traders, data analysts, eminent mathematicians 
							and statisticians, but also former professional football players, managers, and 
							sports media personalities.
						</p>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="card h-100">
					<div class="card-body text-center">
						<div class="ic-div mb-3">
							<img src="images/icons/technology_ic.svg" alt="icon-technology">
						</div>
						<h1>Technology</h1>
						<p>
						AlgoSports Group has developed its own trading algorithm code named Algo66, based upon artificial intelligence (“AI”) which constantly refines and innovates the underlying assumptions and strategy.
						</p>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="card h-100">
					<div class="card-body text-center">
						<div class="ic-div mb-3">
							<img src="images/icons/integrity_ic.svg" alt="icon-integrity">
						</div>
						<h1>Integrity</h1>
						<p>
						Our team remains deeply embedded in both the sports and financial markets meaning they are able to provide our clients with the peace of mind that all the staff at AlgoSports Group are experienced experts in their fields.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="page-sec about">
	<div class="container">
		<div class="row g-5">
			<div class="col-md-4">
				<img src="images/about-us.png" alt="about-img">
			</div>
			<div class="col-md-8 ps-md-5">
				<div class="about-content">
					<h1>
						<span>About</span> AlgoSports
					</h1>

					<p>
					AlgoSports has developed its own trading algorithm (“Algo66”), based upon artificial intelligence (“AI”) which constantly refines and innovates the underlying assumptions and strategy. The trading system continuously evolves, and the self-learning algorithm develops with each trade. The system has been back-tested on 4 years of historical data and has been privately traded for 2 years successfully at AlgoSports Group.
					</p>

				</div>
			</div>
		</div>
	</div>
</section>

<section class="page-sec algo-sec">
	<div class="container text-center">
		<h1>
			AlgoSports
		</h1>
		<p>
			To meet today's challenges, we have created a unique fund management system
		</p>
		<div class="row justify-content-center">

			<div class="col-lg-2 col-md-3 col-6 mb-3 mb-lg-0">
				<div class="card h-100">
					<div class="card-body">
						<img class = "mb-3" src="images/icons/efficiency.png" alt="card-ic">
						Efficiency
					</div>
				</div>
			</div>

			<div class="col-lg-2 col-md-3 col-6 mb-3 mb-lg-0">
				<div class="card text-center h-100">
					<div class="card-body">
						<img class = "mb-3" src="images/icons/experience.png" alt="card-ic">
						Experience
					</div>
				</div>
			</div>

			<div class="col-lg-2 col-md-3 col-6 mb-3 mb-lg-0">
				<div class="card text-center h-100">
					<div class="card-body">
						<img class = "mb-3" src="images/icons/security.png" alt="card-ic">
						Security
					</div>
				</div>
			</div>

			<div class="col-lg-2 col-md-3 col-6 mb-3 mb-lg-0">
				<div class="card text-center h-100">
					<div class="card-body">
						<img class = "mb-3" src="images/icons/eye-ic.png" alt="card-ic">
						Transparency
					</div>
				</div>
			</div>

			<div class="col-lg-2 col-md-3 col-6 mb-3 mb-lg-0">
				<div class="card text-center h-100">
					<div class="card-body">
						<img class = "mb-3" src="images/icons/reliable.png" alt="card-ic">
						Reliable
					</div>
				</div>
			</div>

			<div class="col-lg-2 col-md-3 col-6 mb-3 mb-lg-0">
				<div class="card text-center h-100">
					<div class="card-body">
						<img class = "mb-3" src="images/icons/complience.png" alt="card-ic">
						Compliance
					</div>
				</div>
			</div>

			<div class="col-12 mt-3 mt-md-5">
				<a href="register.php" class="btn btn-white">
					open account
				</a>
			</div>

		</div>
	</div>
</section>

<section class="page-sec sec-c">
	<div class="container text-center">
		<h1>
			A Sports Trading Experience Like You Have Never Seen Before
		</h1>
		<div class="row" id="counter">
			<div class="col-md-4 mb-3 mb-md-0">
				<div class="card h-100">
					<div class="card-body">
						<h2 class="counter" data-counter-time="2000" data-counter-delay="10">
							<span>119,000</span>
						</h2>
						<p class="mb-0">
							REGISTERED USERS
						</p>
					</div>
				</div>
			</div>

			<div class="col-md-4 mb-3 mb-md-0">
				<div class="card h-100">
					<div class="card-body">
						<h2 class="counter" data-counter-time="2000" data-counter-delay="10">	
						<span>3</span>
						</h2>
						<p class="mb-0">
							COUNTRIES
						</p>
					</div>
				</div>
			</div>
				
			<div class="col-md-4 mb-3 mb-md-0">
				<div class="card h-100">
					<div class="card-body">
						<h2 >
							£ <span class="counter" data-counter-time="2000" data-counter-delay="10">1.1</span>M
						</h2>
						<p class="mb-0">
							WITHDRAWN EACH MONTH
						</p>
					</div>
				</div>
			</div>

			<div class="col-12 mt-4 mt-md-5">
				<a href="register.php" class="btn btn-secondary">
					START TRADING TODAY!
				</a>
			</div>

		</div>
	</div>
</section>


<section class="page-sec sec-banner">
	<div class="container text-center">
		<div class="row">
			<div class="col-12">
				<h1>
					<span>A NEW LEAGUE IN </span> SPORTS TRADING
				</h1>
			</div>
			<div class="col-12 mt-4 mt-md-5">
				<a href="register.php" class="btn btn-primary">
					START TRADING TODAY!
				</a>
			</div>
		</div>
	</div>
</section>

<section class="page-sec contact-details" id = "contact-us">
	<div class="container">
		<h1>
			We would love to hear from you at AlgoSports Group
		</h1>
		<div class="row g-5">

			<div class="col-md-8">
				<div class="form-content">
					<h2>
						Contact Us
					</h2>
					<form action="">
						<div class="form-group">
							<label for="name">
								Your Name
							</label>
							<input type="text" name="fname" class="form-control">
							<div class="text-danger fname-error">  
                            </div>
						</div>

						<div class="form-group">
							<label for="email">
								Email
							</label>
							<input type="text" name="email" class="form-control">
							<div class="text-danger email-error">  
                            </div>
						</div>

						<div class="form-group">
							<label for="subject">
								Subject
							</label>
							<input type="text" name="subject" class="form-control">
							<div class="text-danger subject-error">  
                            </div>
						</div>

						<div class="form-group">
							<label for="message">
								Message
							</label>
							<textarea class = "form-control" name="message" cols="30" rows="5"></textarea>
							<div class="text-danger message-error">  
                            </div>
						</div>
						<div class="form-group">
							<div class="g-recaptcha" data-sitekey="6LcInm8dAAAAAFekp-XWRFvYsYYtR_Dx6CIZqrqQ"></div>
							<div class="text-danger captcha-error">  
								
							</div>
						</div>

						<div class="form-group d-grid">
							<a href="#!" id = "submit-form" class="btn btn-secondary">
								SEND MESSAGE
								<span class="spinner-border spinner-border-sm ms-2"></span>
							</a>
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

			<div class="col-md-4">
				<div class="contact-info text-center mb-3">
					<div class="icon-div">
						<i class="bi bi-envelope-fill"></i>
					</div>
					<div class="info-text">
						info@algosportsgroup.com
					</div>
				</div>

				<div class="contact-info text-center mb-3">
					<div class="icon-div">
						<i class="bi bi-telephone-fill"></i>
					</div>
					<div class="info-text">
						0800 915 3215 <br>+350 2000 8270
					</div>
				</div>

				<div class="contact-info text-center mb-3">
					<div class="icon-div">
						<i class="bi bi-geo-alt-fill"></i>
					</div>
					<div class="info-text">
						World Trade Center 6 Bayside Road Gibraltar GX11 1AA
					</div>
				</div>
			</div>

		</div>
	</div>
</section>




<?php include 'footer.php'; ?>