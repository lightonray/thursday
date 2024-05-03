<!DOCTYPE html>
<html lang="en" class="h-100">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, shrink-to-fit=9">
		<meta name="description" content="">
		<meta name="author" content="">		
		<title>Thursday - Login</title>
		
		<!-- Favicon Icon -->
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
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
											<a href="{{ route('landing.page') }}"><img src="assets/img/logo/thursdaylogo.png" alt=""></a>
										</div>
										<span class="sign-copyright"><i class="uil uil-copyright"></i> 2024 <strong>Thursday</strong>. All Rights Reserved.</span>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="lr-right">
										<div class="sign-title">
											<div class="lg-logo d-lg-none mb-5" id="logo">
												<a href="index.html"><img class="logo-main" src="images/logo.svg" alt=""></a>
												<a href="index.html"><img class="logo-inverse" src="images/dark_logo.svg" alt=""></a>
											</div>
											<h2>Sign in</h2>
										</div>
										<div class="social-logins">
											<div class="row g-2">
												<div class="col-12">
													<button class="sign-social-btn sign-g-btn"><i class="fab fa-google"></i>Continue with Google</button>
												</div>
												<div class="col-3">
													<button class="sign-social-btn sign-f-btn"><i class="fab fa-facebook"></i></button>
												</div>
												<div class="col-3">
													<button class="sign-social-btn sign-t-btn"><i class="fab fa-twitter"></i></button>
												</div>
												<div class="col-3">
													<button class="sign-social-btn sign-a-btn"><i class="fab fa-linkedin-in"></i></button>
												</div>
												<div class="col-3">
													<button class="sign-social-btn sign-l-btn"><i class="fab fa-apple"></i></button>
												</div>
											</div>
										</div>
										<div class="divider-line d-flex align-center">
											<span class="v-divider line-color"></span>
											<div class="or"><span>Or</span></div>
											<span class="v-divider line-color"></span>
										</div>
										<div class="login-register-form">
											<form method="POST" action="{{ route('user.authenticate') }}">
												@csrf
												<div class="form-group position-relative mb-2">
													<input name="email" class="input-control" type="email" placeholder="Enter your email" required>
													@error('email')
														<div class="alert alert-danger mt-2">Required</div>
													@enderror
												</div>
												<div class="form-group position-relative">
													<input name="password" class="input-control" type="password" placeholder="Enter your password" required>
													@error('password')
														<div class="alert alert-danger mt-2">Required</div>
													@enderror
												</div>
												@if($errors->has('login_error'))
													<div class="alert alert-danger mt-2">
														{{ $errors->first('login_error') }}
													</div>
												@endif
												<button class="main-btn btn-hover w-100 h-40 mt-3" type="submit">Login</button>
											</form>
                                            <a href="{{ route('user.register') }}" class="forgot-link">Don't have an account? Register here</a>
											<a href="{{ route('user.forgotpassword') }}" class="forgot-link">Forgot Password?</a>
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