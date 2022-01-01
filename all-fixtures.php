<?php 
	$currentPage = 'All Fixtures'; // current page name....
	$pageTitle = 'All Fixtures';
	$metaDescription="Watch all matches fixtures";
	include 'header.php'; ?>

<body>

<?php include 'navbar.php'; ?>


<section class="page-sec sec-banner">
	<div class="container text-center">
		<div class="row">
			<div class="col-12">
				<h1 class = "my-5">
                    All Matches
				</h1>
			</div>
		</div>
	</div>
</section>

<section class="page-sec about inner-page">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
            <div class="row" id="all_fixtures">
			</div>
		</div>
	</div>
</section>



<?php include 'footer.php'; ?>