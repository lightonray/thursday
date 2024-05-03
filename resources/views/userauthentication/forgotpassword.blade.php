<!DOCTYPE html>
<html lang="en" class="h-100">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, shrink-to-fit=9">
		<meta name="description" content="Gambolthemes">
		<meta name="author" content="Gambolthemes">		
		<title>Thursday - Forgot Password</title>
		
		<!-- Favicon Icon -->
		<link rel="icon" type="image/png" href="assets/img/favicon.png">
		
		<!-- Stylesheets -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet'>
		<link href='vendor/unicons-2.0.1/css/unicons.css' rel='stylesheet'>
		<link href="css/style.css" rel="stylesheet">
		<link href="css/responsive.css" rel="stylesheet">
		<link href="css/dark-mode.css" rel="stylesheet">
		
		<!-- Vendor Stylesheets -->
		<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
		<link href="vendor/OwlCarousel/assets/owl.carousel.css" rel="stylesheet">
		<link href="vendor/OwlCarousel/assets/owl.theme.default.min.css" rel="stylesheet">
		<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
		
	</head>

<body class="h-100">
	<!-- Pre-loader Start-->
	<div class="loader-container">
		<div class="loader-ripple">
			<div></div>
			<div></div>
		</div>
	</div>
	<!-- Pre-loader End-->
	<!-- Enter Code Model Start-->
	<div class="modal fade" id="codeModal" tabindex="-1" aria-labelledby="codeModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="codeModalLabel">Enter Code</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="email-sent-block">
						<div class="email-icon">
							<img src="images/sent.png" alt="">
						</div>
						<p>Check your mail we have send a 6 digits code to your email.</p>
						<div class="code-block">
							<div class="row g-2">
								<div class="col-12">
									<label class="form-label">Enter Code*</label>
								</div>
								<div class="col-2">
									<input class="input-control" type="text" value="" placeholder="">
								</div>
								<div class="col-2">
									<input class="input-control" type="text" value="" placeholder="">
								</div>
								<div class="col-2">
									<input class="input-control" type="text" value="" placeholder="">
								</div>
								<div class="col-2">
									<input class="input-control" type="text" value="" placeholder="">
								</div>
								<div class="col-2">
									<input class="input-control" type="text" value="" placeholder="">
								</div>
								<div class="col-2">
									<input class="input-control" type="text" value="" placeholder="">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer justify-content-center">
					<button type="button" class="btn main-btn btn-hover h-40" data-bs-target="#resetpasswordModal" data-bs-toggle="modal" data-bs-dismiss="modal">Go</button>
				</div>
			</div>
		</div>
	</div>
	<!-- Enter Code Model End-->
	<!-- Reset Password Model Start-->
	<div class="modal fade" id="resetpasswordModal" tabindex="-1" aria-labelledby="resetpasswordModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="resetpasswordModalLabel">Reset Password</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="reset-form">
						<p>You new password must be different from previous used password.</p>
						<form>
							<div class="form-group mt_2">
								<label for="new_password" class="form-label">Password</label>
								<input class="input-control" type="password" id="new_password" value="" placeholder="">
								<p class="mb-0 mt-1 font-12">Must be at least 8 characters</p>
							</div>
							<div class="form-group mt-3s">
								<label for="confirm_password" class="form-label">Confirm Password</label>
								<input class="input-control" type="password" id="confirm_password" value="" placeholder="">
								<p class="mb-0 mt-1 font-12">Both passwords must match</p>
							</div>
						</form>
					</div>
				</div>
				<div class="modal-footer">
					<button class="btn back-btn btn-hover h-40" data-bs-target="#codeModal" data-bs-toggle="modal" data-bs-dismiss="modal">Back</button>
					<button class="btn main-btn btn-hover h-40" data-bs-dismiss="modal">Reset Password</button>
				</div>
			</div>
		</div>
	</div>
	<!-- Reset Password Model End-->
	<!-- Body Start -->
	<main class="sign-wrapper">	
		<div class="sign-section">
			<div class="container">					
				<div class="row justify-content-md-center">
					<div class="col-md-10">
						<div class="main-card">
							<div class="row g-0">
								<div class="col-lg-6">
									<div class="lg-left">
										<div class="lg-logo">
											<a href="index.html"><img src="assets/img/logo/thursdaylogo.png" alt=""></a>
										</div>
										<span class="sign-copyright"><i class="uil uil-copyright"></i> 2024 <strong>Thursday</strong>. All Rights Reserved.</span>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="lr-right">
										<div class="sign-title">
											<div class="lg-logo d-lg-none mb-5" id="logo">
												<a href="index.html"><img class="logo-main" src="images/thursdaylogo.svg" alt=""></a>
												<a href="index.html"><img class="logo-inverse" src="images/thursdaylogo.svg" alt=""></a>
											</div>
											<h2>Forgot Password</h2>
											<p>Enter the email associated with your account and we'll send an email with code to reset your password.</p>
										</div>
										<div class="login-register-form mt-30">
											<div class="form-group position-relative">									
												<input class="input-control" type="email" placeholder="Ente your email ">
											</div>												
											<button class="main-btn btn-hover w-100 h-40 mt-3" data-bs-target="#codeModal" data-bs-toggle="modal">Send Code</button>
											<a href="{{ route('user.login') }}" class="forgot-link">Back to sign in <i class="uil uil-sign-in-alt"></i></a>
										</div>
										<div class="sign-bottom-links">
											<ul class="sign_links">
												<li><a href="#">Privacy Policy</a></li>
												<li><a href="#">Terms</a></li>
												<li>
													<div class="sign-dark-mode">								
														<div class="form-check form-switch">								
															<label class="form-check-label" for="darkSwitch">Dark Mode</label>
															<input class="form-check-input" type="checkbox" id="darkSwitch">
														</div>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>							
				</div>										
									
			</div>
		</div>
	</main>

	<!-- Body End -->
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="vendor/OwlCarousel/owl.carousel.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="js/custom.js"></script>
	<script src="js/mixitup.min.js"></script>
	<script src="js/dark-mode-switch.min.js"></script>
	
</body>
</html>