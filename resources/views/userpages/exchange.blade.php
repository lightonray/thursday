<!DOCTYPE html>
<html lang="en" class="h-100">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, shrink-to-fit=9">
		<meta name="description" content="Gambolthemes">
		<meta name="author" content="Gambolthemes">		
		<title>Thursday - Dashboard</title>
		
		<!-- Favicon Icon -->
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
		<!-- Stylesheets -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet'>
		<link href='vendor/unicons-2.0.1/css/unicons.css' rel='stylesheet'>
		<link href="css/vertical-responsive-menu.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<link href="css/responsive.css" rel="stylesheet">
		<link href="css/dark-mode.css" rel="stylesheet">
		
		<!-- Vendor Stylesheets -->
		<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
		<link href="vendor/OwlCarousel/assets/owl.carousel.css" rel="stylesheet">
		<link href="vendor/OwlCarousel/assets/owl.theme.default.min.css" rel="stylesheet">
		<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">		
		
        <!-- plugin css file  -->
        <link rel="stylesheet" href="assets/plugin/datatables/responsive.dataTables.min.css">
        <link rel="stylesheet" href="assets/plugin/datatables/dataTables.bootstrap5.min.css">
        
        <!-- project css file  -->
        <link rel="stylesheet" href="assets/css/cryptoon.style.min.css">
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
	<!-- Responsive Search Model Start-->
	<div class="modal fade responsive-search-model" id="searchModel" tabindex="-1" aria-hidden="true">
		<div class="modal-dialog search-area">
			<div class="search-inner">
				<div class="modal-header">
					<button type="button" class="btn-close responsive-close-btn" data-bs-dismiss="modal" aria-label="Close"><i class="uil uil-multiply"></i></button>
				</div>
				<div class="modal-content search-modal-content">
					<div class="search-popup">
						<div class="search-input-content">
							<input class="input-control" type="text" placeholder="Search">
							<button class="search-btn btn-hover" type="submit"><i class="uil uil-search"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Responsive Search Model End-->
	<!-- Covert Model Start-->
	<div class="modal fade" id="convertModal" tabindex="-1" aria-labelledby="convertModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="convertModalLabel">Convert</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="convert-form">
						<form>
							<div class="form-group position-relative">
								<label for="eth_amount" class="form-label">You Pay* <span>Max amount is 0 wETH</span></label>
								<input class="input-control" type="text" id="eth_amount" value="" placeholder="Enter Amount">
								<span class="input-badge">ETH</span>
							</div>
							<div class="convert-icon text-center mt-4">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
									<path fill="#111111" d="M18,10a1,1,0,0,0-1-1H5.41l2.3-2.29A1,1,0,0,0,6.29,5.29l-4,4a1,1,0,0,0-.21,1.09A1,1,0,0,0,3,11H17A1,1,0,0,0,18,10Zm3.92,3.62A1,1,0,0,0,21,13H7a1,1,0,0,0,0,2H18.59l-2.3,2.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l4-4A1,1,0,0,0,21.92,13.62Z"/>
								</svg>
							</div>
							<div class="form-group position-relative mt-4">
								<label for="received_amount" class="form-label">You Receive*</label>
								<input class="input-control" type="text" id="received_amount" value="" placeholder="Amount you will receive">
								<span class="input-badge">WETH</span>
							</div>
						</form>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn main-btn btn-hover w-100 h-40" data-bs-target="#resetpasswordModal" data-bs-toggle="modal" data-bs-dismiss="modal">Convert</button>
				</div>
			</div>
		</div>
	</div>
	<!-- Covert Model End-->
	<!-- Add Funds Model Start-->
	<div class="modal fade" id="addfundModalToggle1" aria-hidden="true" aria-labelledby="addfundModalToggleLabel1" tabindex="-1">
		<div class="modal-dialog modal-fullscreen">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title ms-auto" id="addfundModalToggleLabel1">Add Funds</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="row justify-content-center">
						<div class="col-xl-5 col-lg-7 col-md-10">
							<div class="form_first_step">
								<div class="main-from">
									<div class="autoresizeInput mt-3">
										<label for="amount">$</label>
										<input type="number" name="amount" id="amount" autocomplete="off" value="0">
									</div>
									<div class="cypto-category">
										<span>~ETH</span>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="selection-block mt_2">
												<label for="weth_amount" class="form-label">Pay with*<span>30 assets supported</span></label>
												<select class="selectpicker" data-size="5">
													<option value="USD" selected>United States Dollar</option>
													<option value="EUR">Euro</option>
													<option value="GBP">British Pound Sterling</option>
													<option value="AUD">Australian Dollar</option>
													<option value="CAD">Canadian Dollar</option>
													<option value="NZD">New Zealand Dollar</option>
													<option value="ARS">Argentine Peso</option>
													<option value="BRL">Brazilian Real</option>
													<option value="CHF">Swiss Franc</option>
													<option value="CLP">Chilean Peso</option>
													<option value="COP">Colombian Peso</option>
													<option value="CZK">Czech Koruna</option>
													<option value="DKK">Danish Krone</option>
													<option value="HKD">Hong Kong Dollar</option>
													<option value="ILS">Israeli New Shekel</option>
													<option value="INR">Indian Rupee</option>
													<option value="ISK">Icelandic Króna</option>
													<option value="JPY">Japanese Yen</option>
													<option value="KRW">South Korean Won</option>
													<option value="MYR">Malaysian Ringgit</option>
													<option value="MXN">Mexican Peso</option>
													<option value="NOK">Norwegian Krone</option>
													<option value="PHP">Philippine Peso</option>
													<option value="PLN">Polish Złoty</option>
													<option value="SEK">Swedish Krona</option>
													<option value="SGD">Singapore Dollar</option>
													<option value="THB">Thai Baht</option>
													<option value="TRY">Turkish Lira</option>
													<option value="VND">Vietnamese Đồng</option>
													<option value="ZAR">South African Rand</option>
												</select>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="selection-block mt_2">
												<label for="weth_amount" class="form-label">Destination*<span>20+ assets supported</span></label>
												<select class="selectpicker" data-size="5">
													<option value="BTC">Bitcoin</option>
													<option value="ETH" selected>Ethereum</option>
													<option value="USDC">USD Coin</option>
													<option value="DAI">DAIAAVE</option>
													<option value="AAVE">Aave</option>
													<option value="BUSD">Binance USD</option>
													<option value="COMP">Compound</option>
													<option value="CRV">Curve</option>
													<option value="GUSD">Gemini Dollar</option>
													<option value="LINK">Chainlink</option>
													<option value="MKR">Maker</option>
													<option value="PAX">Paxos Standard</option>
													<option value="SNX">Synthetix</option>
													<option value="UMA">UMA</option>
													<option value="UNI">Uniswap</option>
													<option value="USDS">Stably Dollar</option>
													<option value="USDT">Tether</option>
													<option value="ZUSD">ZUSD</option>
													<option value="GYEN">GMO JPY</option>
													<option value="WBTC">Wrapped Bitcoin</option>
													<option value="YFI">Yearn.Finance</option>
													<option value="XLM">Stellar</option>
													<option value="AVAX">Avalanche</option>
												</select>
											</div>
										</div>
										<div class="col-sm-12">
											<div class="selection-block mt_2">
												<label for="weth_amount" class="form-label">Your ETH address*</label>
												<input class="input-control" type="text" id="weth_amount" value="0x00d1c07da4447aebb7b63f456444e6572c000000" placeholder="Your ETH address">
											</div>
										</div>
										<div class="col-sm-12">
											<div class="selection-block mt_2">
												<label class="form-label">Select payment method*</label>
												<div class="form-group">
													<div class="select_payment_method">
														<input type="radio" class="btn-check" name="options-outlined" id="apple-pay-method">
														<label class="select_payment_method--btn select_payment_method_option me-3" for="apple-pay-method">
															<img src="images/apple-card.png" alt="apple-card">
															Apple Pay
														</label>

														<input type="radio" class="btn-check" name="options-outlined" id="payment-card-method">
														<label class="select_payment_method--btn select_payment_method_option ms-3" for="payment-card-method">
															<img src="images/credit-card.png" alt="apple-card">
															Card Payments
														</label>
													</div>
												</div>
											</div>
										</div>
										<div class="col-sm-12">
											<div class="receipt mt_2">
												<ul class="main-receipt">
													<li>
														<div class="receipt-main-text">
															<div class="receipt-text-left">
																Exchange Rate
															</div>
														</div>
													</li>
													<li>
														<div class="receipt-main-text receipt-main-line"></div>
													</li>
													<li>
														<div class="receipt-main-text">
															<div class="receipt-text-left">
																Transaction fee <span class="tooltip-check ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Ukiyox charges a standard transaction fee for currency exchanges. This is the only fee associated with Ukiyox, there are no other hidden fees."><i class="uil uil-question-circle"></i></span>
															</div>
														</div>
													</li>
													<li>
														<div class="receipt-main-text">
															<div class="receipt-text-left">
																Network fee <span class="tooltip-check ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title="To ensure transactions are processed on blockchain network, purchases sent to external wallet addresses are charged a mining or network fee. This fee is paid directly to the miners."><i class="uil uil-question-circle"></i></span>
															</div>
														</div>
													</li>
													<li>
														<div class="receipt-main-text receipt-main-line"></div>
													</li>
													<li>
														<div class="receipt-main-text mb-0">
															<div class="receipt-text-left">
																Purchase Total
															</div>
														</div>
													</li>
												</ul>
											</div>
										</div>
										<div class="col-sm-12">
											<div class="form-check text-left mt_2">
												<input class="form-check-input" type="checkbox" value="" id="authorizeCheck">
												<label class="form_check--label " for="authorizeCheck">
													I authorize Wyre to debit my account indicated for the amount above on today’s date, and I agree to <a href="#">Ukiyo's terms</a>
												</label>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer justify-content-center">
					<button class="btn main-btn btn-hover h-40" data-bs-target="#addfundModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Next</button>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="addfundModalToggle2" aria-hidden="true" aria-labelledby="addfundModalToggleLabel2" tabindex="-1">
		<div class="modal-dialog modal-fullscreen">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title ms-auto" id="addfundModalToggleLabel2">Enter payment information</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="row justify-content-center">
						<div class="col-xl-5 col-lg-7 col-md-10">
							<div class="form_first_step">
								<div class="main-from">
									<div class="row">
										<div class="col-sm-12">
											<div class="personel-info-title">
												<h6>Enter your personal information as it appears on your bank account</h6>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<div class="info-title border_bottom">
												<h4>Card info</h4>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="selection-block mt_2">
												<label for="first_name" class="form-label">First Name*</label>
												<input class="input-control" type="text" id="first_name" value="" placeholder="First name">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="selection-block mt_2">
												<label for="last_name" class="form-label">Last Name*</label>
												<input class="input-control" type="text" id="last_name" value="" placeholder="Last name">
											</div>
										</div>
										<div class="col-sm-12">
											<div class="selection-block mt_2">
												<label for="card_number" class="form-label">Card Number*</label>
												<input class="input-control" type="text" id="card_number" value="" placeholder="Card number">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="selection-block mt_2">
												<label for="card_expiration" class="form-label">Expiration**</label>
												<input class="input-control" type="tel" id="card_expiration" value="" placeholder="MM/YY">
											</div>
										</div>
										<div class="col-sm-6">
											<div class="selection-block mt_2">
												<label for="card_cvv" class="form-label">Cvv*</label>
												<input class="input-control" type="password" id="card_cvv" value="" placeholder="Cvv">
											</div>
										</div>
										<div class="row">
											<div class="col-sm-12">
												<div class="info-title mt_2 border_bottom">
													<h4>Billing Address</h4>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="selection-block mt_2">
													<label for="weth_amount" class="form-label">Country*</label>
													<select class="selectpicker" title="Select Country" data-size="5">
														<option value="1">Algeria</option>
														<option value="2">Argentina</option>
														<option value="3">Australia</option>
														<option value="4">Austria (Österreich)</option>
														<option value="5">Belgium (België)</option>
														<option value="6">Bolivia</option>
														<option value="7">Brazil</option>
														<option value="8">Canada</option>
														<option value="9">Chile</option>
														<option value="10">Colombia</option>
														<option value="11">Costa Rica</option>
														<option value="12">Cyprus</option>
														<option value="13">Czech Republic</option>
														<option value="14">Denmark</option>
														<option value="15">Dominican Republic</option>
														<option value="16">Estonia</option>
														<option value="17">Finland</option>
														<option value="18">France</option>
														<option value="19">Germany</option>
														<option value="20">Greece</option>
														<option value="21">Hong Kong</option>
														<option value="22">Iceland</option>
														<option value="23">India</option>
														<option value="24">Indonesia</option>
														<option value="25">Ireland</option>
														<option value="26">Israel</option>
														<option value="27">Italy</option>
														<option value="28">Japan</option>
														<option value="29">Latvia</option>
														<option value="30">Lithuania</option>
														<option value="31">Luxembourg</option>
														<option value="32">Malaysia</option>
														<option value="33">Mexico</option>
														<option value="34">Nepal</option>
														<option value="35">Netherlands</option>
														<option value="36">New Zealand</option>
														<option value="37">Norway</option>
														<option value="38">Paraguay</option>
														<option value="39">Peru</option>
														<option value="40">Philippines</option>
														<option value="41">Poland</option>
														<option value="42">Portugal</option>
														<option value="43">Singapore</option>
														<option value="44">Slovakia</option>
														<option value="45">Slovenia</option>
														<option value="46">South Africa</option>
														<option value="47">South Korea</option>
														<option value="48">Spain</option>
														<option value="49">Sweden</option>
														<option value="50">Switzerland</option>
														<option value="51">Tanzania</option>
														<option value="52">Thailand</option>
														<option value="53">Turkey</option>
														<option value="54">United Kingdom</option>
														<option value="55">United States</option>
														<option value="56">Vietnam</option>													
													</select>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="selection-block mt_2">
													<label for="info_state" class="form-label">State*</label>
													<input class="input-control" type="text" id="info_state" value="" placeholder="Enter a state">
												</div>
											</div>
											<div class="col-sm-12">
												<div class="selection-block mt_2">
													<label for="info_address" class="form-label">Address*</label>
													<input class="input-control" type="text" id="info_address" value="" placeholder="Enter an address">
												</div>
											</div>
											<div class="col-sm-6">
												<div class="selection-block mt_2">
													<label for="info_zipCode" class="form-label">Postal / ZIP code*</label>
													<input class="input-control" type="text" id="info_zipCode" value="" placeholder="Enter zip code">
												</div>
											</div>
											<div class="col-sm-6">
												<div class="selection-block mt_2">
													<label for="info_city" class="form-label">City*</label>
													<input class="input-control" type="text" id="info_city" value="" placeholder="Enter city">
												</div>
											</div>
										</div>
										<div class="row mb-4">
											<div class="col-sm-12">
												<div class="info-title mt_2 border_bottom">
													<h4>Contact Info</h4>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="selection-block mt_2">
													<label for="contact_email" class="form-label">Email Address*</label>
													<input class="input-control" type="email" id="contact_email" value="" placeholder="Enter zip code">
												</div>
											</div>
											<div class="col-sm-6">
												<div class="selection-block mt_2">
													<label for="contact_phoneNumber" class="form-label">Phone Number*</label>
													<input class="input-control" type="tel" id="contact_phoneNumber" value="" placeholder="Enter phone number">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer justify-content-center">
					<button class="btn back-btn btn-hover h-40" data-bs-target="#addfundModalToggle1" data-bs-toggle="modal" data-bs-dismiss="modal">Back</button>
					<button class="btn main-btn btn-hover h-40" data-bs-dismiss="modal">Submit</button>
				</div>
			</div>
		</div>
	</div>
	<!-- Add Funds Model End-->
	<!-- Share Model Start-->
	<div class="modal fade" id="shareModal" tabindex="-1" aria-labelledby="shareModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="shareModalLabel">Share this NFT</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="share-link-list">
					<ul>	
						<li>
							<div class="share-link">								
								<a href="#" class="social-icon"><i class="uil uil-facebook-f"></i></a>
								<span>Facebook</span>
							</div>
						</li>
						<li>
							<div class="share-link">								
								<a href="#" class="social-icon"><i class="uil uil-twitter"></i></a>
								<span>Twitter</span>
							</div>
						</li>
						<li>
							<div class="share-link">								
								<a href="#" class="social-icon"><i class="uil uil-telegram"></i></a>
								<span>Telegram</span>
							</div>
						</li>
						<li>
							<div class="share-link">								
								<a href="#" class="social-icon"><i class="uil uil-envelope"></i></a>
								<span>E-mail</span>
							</div>
						</li>
					</ul>	
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Share Model End-->
	<!-- Report Model Start-->
	<div class="modal fade" id="reportModal" tabindex="-1" aria-labelledby="reportModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="reportModalLabel">Why are you reporting?</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="reporting-form">
						<p class="reporting-text">Describe why you think this item should be removed from marketplace</p>
						<form>
							<div class="form-group position-relative">
								<label for="reporting_msg" class="form-label">Message*</label>
								<textarea class="textarea-control" id="reporting_msg" placeholder="Tell us some details"></textarea>
							</div>
						</form>
					</div>
				</div>
				<div class="modal-footer">
					<button class="btn back-btn btn-hover h-40" data-bs-target="#reportModal" data-bs-toggle="modal" data-bs-dismiss="modal">Cancel</button>
					<button type="button" class="btn main-btn btn-hover h-40">Report</button>
				</div>
			</div>
		</div>
	</div>
	<!-- Report Model End-->
	<!-- Edit Profile Model Start-->
	<div class="modal fade" id="editprofileModal" tabindex="-1" aria-labelledby="editprofileModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="editprofileModalLabel">Edit Profile</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="convert-form">
						<form>
							<div class="form-group position-relative">	
								<div class="choose-img-block">
									<div class="choose-img">
										<img src="images/left-imgs/img-16.jpg" alt="">
									</div>
									<div class="choose-item-dts">
										<p>We recommend an image of at least 300x300. Gifs work too. Max 5mb.</p>
										<div class="upload-btn-wrapper">												
											<input class="uploadBtn-main-input" type="file" id="add_avatar">
											<label for="add_avatar" title="img">Choose File</label>
										</div>
										
									</div>
								</div>								
							</div>
							<div class="form-group position-relative mt_2">	
								<label for="display_name" class="form-label">Display name*</label>
								<input class="input-control" type="text" id="display_name" value="" placeholder="Enter your display name">
							</div>
							<div class="form-group position-relative mt_2">
								<label for="custom_url" class="form-label">Custom URL*</label>
								<input class="input-control" type="text" id="custom_url" value="" placeholder="Enter your custom URL">
								<div class="bottom-text">
									<span>Ukiyox.com/</span>
								</div>
							</div>
							<div class="form-group position-relative mt_2">
								<label for="bio" class="form-label">Bio*</label>
								<textarea class="textarea-control" id="bio" placeholder="Tell about yourself in a few words"></textarea>
							</div>
							<div class="form-group mt_2">
								<label for="twitter_username" class="form-label">Twitter Username*</label>
								<div class="position-relative">
									<input class="input-control" type="text" id="twitter_username" value="" placeholder="Enter your name in Twitter">
									<span class="percentage-badge"><i class="uil uil-at"></i></span>
									<div class="bottom-text">
										<span>Link your Twitter account to gain more trust on the marketplace</span>
									</div>													
								</div>													
							</div>
							<div class="form-group position-relative mt_2">
								<label for="site" class="form-label">Personal site or portfolio*</label>
								<input class="input-control" type="text" id="site" value="" placeholder="Enter your Personal site or portfolio">
								<div class="bottom-text">
									<span>https/</span>
								</div>
							</div>
							<div class="form-group mt_2">
								<label for="email_id" class="form-label">Email*</label>
								<div class="position-relative">
									<input class="input-control" type="text" id="email_id" value="" placeholder="Enter your email">
									<div class="percentage-badge"><a href="#">Confirm</a></div>
									<div class="bottom-text">
										<span>Your email for marketplace notifications</span>
									</div>													
								</div>													
							</div>
							<div class="form-group mt_2">
								<div class="form-label">Verification*</div>
								<div class="verification-content">
									<p>Proceed with verification process to get more visibility and gain trust on Ukiyox Marketplace. Please allow up to several weeks for the process.</p>												
									<div class="verify-btn-area">
										<button class="btn verify-btn btn-hover h-40" type="button">Get Verified</button>
									</div>													
								</div>													
							</div>
						</form>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn main-btn btn-hover w-100 h-40" data-bs-toggle="modal" data-bs-dismiss="modal">Update Profile</button>
				</div>
			</div>
		</div>
	</div>
	<!-- Edit Profile Model End-->
	<!-- Header Start -->
	<header class="header clearfix">
		<button type="button" id="toggleMenu" class="toggle_menu">
			<i class='uil uil-bars'></i>
		</button>
		<button id="collapse_menu" class="collapse_menu">
			<i class="uil uil-bars collapse_menu--icon "></i>
			<span class="collapse_menu--label"></span>
		</button>
		<div class="res_main_logo">
			<a href="index.html"><img style="width: 120px" src="assets/img/logo/thursdaylogo.png" alt=""></a>
		</div>
		<div class="main_logo" id="logo">
			<a href="index.html"><img style="width: 120px" class="logo-main" src="assets/img/logo/thursdaylogo.png" alt=""></a>
			<a href="index.html"><img style="width: 120px" class="logo-inverse" src="assets/img/logo/thursdaylogo.png" alt=""></a>
		</div>
		<div class="header_search">
			<form class="search-input">				
				<input type="text" class="header-input-control" placeholder="Search by creator, collectible or collection">
				<span class="header-search-icon"><i class="uil uil-search icon"></i></span>
			</form>
		</div>
		<div class="header_right ms-auto">
			<ul>
				<li>
					<a href="create.html" class="btn main-btn btn-hover me-3">Create</a>
				</li>
				<li>
					<a href="#searchModel" class="header_links" data-bs-toggle="modal">
						<i class="uil uil-search"></i>
					</a>
				</li>
				<li class="dropdown">
					<a href="#" class="header_links" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
						<i class="uil uil-envelope-alt"></i>
						<span class="activity-badge">4</span>
					</a>
					<div class="dropdown-menu dropdown-menu-activity dropdown-menu-end">
						<div class="activity-new-item">
							<div class="activity-list-header">
								<h6>Messages</h6>
							</div>
							<div class="activity-empty">
								<div class="activity-empty-item">
									<div class="activity-empty-text">
										<div class="activity-empty-icon">
											<span><i class="uil uil-envelope-alt"></i></span>
										</div>
										No new messages
									</div>
								</div>
							</div>
							<ul class="activity-list force-scroll">																
								<li class="activity-item activity-item-padding">
									<div class="activity-item-dt">
										<div class="activity-user-img">
											<img src="images/left-imgs/img-2.jpg" alt="">
											<span class="verif-badge">
												<svg width="20" height="20" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
											</span>
										</div>
										<div class="activity-text-dt">
											<a href="#" class="activity-title font-14">Jassica William</a>
											<div class="activity-action font-13">
												Hi, How are you joginder										
											</div>
											<div class="activity-time">
												<span>10/06/2021, 18.31</span>
											</div>
										</div>
									</div>
								</li>
								<li class="activity-item activity-item-padding">
									<div class="activity-item-dt">
										<div class="activity-user-img">
											<img src="images/left-imgs/img-3.jpg" alt="">
											<span class="verif-badge">
												<svg width="20" height="20" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
											</span>
										</div>
										<div class="activity-text-dt">
											<a href="#" class="activity-title font-14">Amritpal Singh</a>
											<div class="activity-action font-13">
												I joginder, pls shamre some tips										
											</div>
											<div class="activity-time">
												<span>10/06/2021, 18.10</span>
											</div>
										</div>
									</div>
								</li>
								<li class="activity-item activity-item-padding">
									<div class="activity-item-dt">
										<div class="activity-user-img">
											<img src="images/left-imgs/img-4.jpg" alt="">
										</div>
										<div class="activity-text-dt">
											<a href="#" class="activity-title font-14">Zoeona Singh</a>
											<div class="activity-action font-13">
												Hi, How are you joginder										
											</div>
											<div class="activity-time">
												<span>10/06/2021, 17.10</span>
											</div>
										</div>
									</div>
								</li>
								<li class="activity-item activity-item-padding">
									<div class="activity-item-dt">
										<div class="activity-user-img">
											<img src="images/left-imgs/img-5.jpg" alt="">
											<span class="verif-badge">
												<svg width="20" height="20" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
											</span>
										</div>
										<div class="activity-text-dt">
											<a href="#" class="activity-title font-14">johnson doe</a>
											<div class="activity-action font-13">
												Check my latest collection										
											</div>
											<div class="activity-time">
												<span>09/06/2021, 16.28</span>
											</div>
										</div>
									</div>
								</li>
								<li class="activity-item activity-item-padding">
									<div class="activity-item-dt">
										<div class="activity-user-img">
											<img src="images/left-imgs/img-6.jpg" alt="">
										</div>
										<div class="activity-text-dt">
											<a href="#" class="activity-title font-14">Poonam Verma</a>
											<div class="activity-action font-13">
												Hi, i purchased 0.0004 ETH from painting art								
											</div>
											<div class="activity-time">
												<span>08/06/2021, 12.00</span>
											</div>
										</div>
									</div>
								</li>
							</ul>
							<div class="activity-list-footer">
								<a href="messages.html" class="btn main-btn btn-hover w-100">See All Messages</a>
							</div>
						</div>						
					</div>
				</li>
				<li class="dropdown">
					<a href="#" class="header_links" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
						<i class="uil uil-bell"></i>
						<span class="activity-badge">5</span>
					</a> 
					<div class="dropdown-menu dropdown-menu-activity dropdown-menu-end">
						<div class="activity-new-item">
							<div class="activity-list-header">
								<h6>Notifications</h6>
								<a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Receive Email Notification"><i class="uil uil-cog"></i>Setting</a>
							</div>
							<div class="activity-empty">
								<div class="activity-empty-item">
									<div class="activity-empty-text">
										<div class="activity-empty-icon">
											<span><i class="uil uil-bell"></i></span>
										</div>
										No new notifications
									</div>
								</div>
							</div>
							<ul class="activity-list force-scroll">								
								<li class="activity-item activity-item-padding">
									<div class="activity-item-dt">
										<div class="activity-item-img">
											<img src="images/nft-imgs/img-1.jpg" alt="">
											<span class="main-badge liked-bg"><i class="uil uil-heart"></i></span>
										</div>
										<div class="activity-text-dt">
											<a href="#" class="activity-title font-14">To Infinity And Beyond</a>
											<div class="activity-action font-13">
												Liked by
												<a href="#" class="activity-action-item">														
													<span class="activity-action-item-text">@You</span>														
												</a>
											</div>
											<div class="activity-time">
												<span>10/06/2021, 18.35</span>
											</div>
										</div>
									</div>
								</li>
								<li class="activity-item activity-item-padding">
									<div class="activity-item-dt">
										<div class="activity-item-img">
											<img src="images/nft-imgs/img-2.jpg" alt="">
											<span class="main-badge listed-bg "><i class="uil uil-plus"></i></span>
										</div>
										<div class="activity-text-dt">
											<a href="#" class="activity-title font-14">Tomb of Cyrus the Great</a>
											<div class="activity-action font-13">
												Minted by
												<a href="#" class="activity-action-item">
													<span class="activity-action-item-text">@You</span>														
												</a>												
											</div>
											<div class="activity-time">
												<span>10/06/2021, 18.34</span>
											</div>
										</div>
									</div>
								</li>
								<li class="activity-item activity-item-padding">
									<div class="activity-item-dt">
										<div class="activity-item-img">
											<img src="images/nft-imgs/img-3.jpg" alt="">
											<span class="main-badge listed-bg "><i class="uil uil-plus"></i></span>
										</div>
										<div class="activity-text-dt">
											<a href="#" class="activity-title font-14">Smiling Tower (2021)</a>
											<div class="activity-action font-13">
												Listed by
												<a href="#" class="activity-action-item">
													<span class="activity-action-item-text">@You</span>														
												</a>
												for
												<a href="#" class="activity-action-item">
													<span class="activity-action-item-text">1 ETH</span>
												</a>												
											</div>
											<div class="activity-time">
												<span>10/06/2021, 18.33</span>
											</div>
										</div>
									</div>
								</li>
								<li class="activity-item activity-item-padding">
									<div class="activity-item-dt">
										<div class="activity-item-img activity-noti-user-img">
											<img src="images/left-imgs/img-2.jpg" alt="">
											<span class="main-badge following-bg"><i class="uil uil-check"></i></span>
										</div>
										<div class="activity-text-dt">
											<a href="#" class="activity-title font-14">Jassica William</a>
											<div class="activity-action font-13">
												Following by
												<a href="#" class="activity-action-item">
													<span class="activity-action-item-text">@You</span>														
												</a>												
											</div>
											<div class="activity-time">
												<span>10/06/2021, 18.31</span>
											</div>
										</div>
									</div>
								</li>
								<li class="activity-item activity-item-padding">
									<div class="activity-item-dt">
										<div class="activity-item-img">
											<img src="images/nft-imgs/img-4.jpg" alt="">
											<span class="main-badge purchased-bg"><i class="uil uil-shopping-cart-alt"></i></span>
										</div>
										<div class="activity-text-dt">
											<a href="#" class="activity-title font-14">Painting Art</a>
											<div class="activity-action font-13">
												Purchased by
												<a href="#" class="activity-action-item">
													<span class="activity-action-item-text">@You</span>														
												</a>
												for
												<a href="#" class="activity-action-item">
													<span class="activity-action-item-text">0.0009 ETH</span>
												</a>
												from
												<a href="#" class="activity-action-item">
													<span class="activity-action-item-text">ProjectArts</span>
												</a>												
											</div>
											<div class="activity-time">
												<span>10/06/2021, 18.25</span>
											</div>
										</div>
									</div>
								</li>
							</ul>
							<div class="activity-list-footer">
								<a href="activity.html" class="btn main-btn btn-hover w-100">See All Notifications</a>
							</div>
						</div>						
					</div>
				</li>
				<li class="dropdown">
					<a href="#" class="header-account" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
						<span>0 <ins>UKI</ins></span>
						<img src="images/left-imgs/img-10.jpg" alt="avatar">
					</a>
					<div class="dropdown-menu dropdown-menu-account dropdown-menu-end">
						<div class="account_name">
							<div class="name_dt">
								<h4>Joginder Singh</h4>
								<button class="copy_btn"><i class="uil uil-copy"></i></button>
							</div>
							<a href="#" class="set_name"><i class="uil uil-edit-alt me-2"></i>Set Display Name</a>
						</div>
						<div class="account_balance_dt">
							<div class="account_balance_dt_group d-flex align-items-center">
								<div class="acount_balance_eth_dt">
									<div class="eth_circle">
										<svg viewBox="0 0 16 16" fill="none" width="20" height="20"><path fill-rule="evenodd" clip-rule="evenodd" d="M3.625 8L8 10.625L12.375 8L8 1L3.625 8ZM3.625 8.875L8 11.5L12.375 8.875L8 15L3.625 8.875Z" fill="#fff"></path></svg>
									</div>
								</div>
								<div class="balance_dt">
									<div class="eth_bl_title">
										<span class="eth_bl_title">Balance</span>
									</div>
									<div class="eth_count_dt">
										<span class="eth_count">0 ETH</span>
										<span class="eth_count_right ms-1">0</span>
									</div>
								</div>
							</div>
							<div class="account_balance_dt_group d-flex align-items-center mt-3">
								<div class="acount_balance_eth_dt">
									<div class="weth_circle">
										<svg viewBox="0 0 16 16" fill="none" width="20" height="20"><path fill-rule="evenodd" clip-rule="evenodd" d="M3.625 8L8 10.625L12.375 8L8 1L3.625 8ZM3.625 8.875L8 11.5L12.375 8.875L8 15L3.625 8.875Z" fill="#fff"></path></svg>
									</div>
								</div>
								<div class="balance_dt">
									<div class="eth_bl_title">
										<span class="eth_bl_title">Bidding Balance</span>
									</div>
									<div class="eth_count_dt">
										<span class="eth_count">0 wETH</span>
										<span class="eth_count_right ms-1">0</span>
									</div>
								</div>
								<button class="btn convert-btn btn-hover" data-bs-toggle="modal" data-bs-target="#convertModal"><i class="uil uil-exchange"></i></button>
							</div>
							<div class="btn_groups">
								<a class="btn main-btn btn-hover w-100" role="button" href="#addfundModalToggle1" data-bs-toggle="modal">Add Funds with Cards</a>
							</div>
						</div>
						<ul>
							<li><a class="dropdown-item" href="create.html">Create</a></li>
							<li><a class="dropdown-item" href="my_profile_detail_view_created.html">My Items</a></li>
							<li><a class="dropdown-item" href="#editprofileModal" data-bs-toggle="modal" role="button">Edit Profile</a></li>
							<li>
								<div class="form-check form-switch">								
									<label class="form-check-label" for="autoplay">Autoplay</label>
									<input class="form-check-input" type="checkbox" id="autoplay" checked>
								</div>
							</li>
							<li>
								<div class="form-check form-switch">								
									<label class="form-check-label" for="darkSwitch">Dark Mode</label>
									<input class="form-check-input" type="checkbox" id="darkSwitch">
								</div>
							</li>
							<li class="dropdown-menu-footer">
								<form action="{{ route('logout') }}" method="POST" style="display: none;" id="logout-form">
									@csrf
								</form>
								<a class="dropdown-item text-center" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
									Logout
								</a>
							</li>
						</ul>
					</div>
				</li>
			</ul>		
		</div>
		
	</header>
	<!-- Header End -->
	<!-- Left Sidebar Start -->
	<nav class="vertical_nav">
		<div class="left_section menu_left" id="js-menu" >
			<div class="left_section">
				<ul>
					<li class="menu--item">
						<a href="index.html" class="menu--link active" title="Home">
							<i class='uil uil-home-alt menu--icon'></i>
							<span class="menu--label">Home</span>
						</a>
					</li>					
					<li class="menu--item">
						<a href="{{ route('user.exchange') }}" class="menu--link" title="Explore">
							<i class='uil uil-compass menu--icon'></i>
							<span class="menu--label">Smart Trade Exchange</span>
						</a>
					</li>
					<li class="menu--item">
						<a href="following.html" class="menu--link" title="Following">
							<i class='uil uil-users-alt menu--icon'></i>
							<span class="menu--label">Following</span>
						</a>
					</li>
					<li class="menu--item">
						<a href="activity.html" class="menu--link" title="Activity">
							<i class='uil uil-list-ui-alt menu--icon'></i>
							<span class="menu--label">Activity</span>
						</a>
					</li>
					<li class="menu--item menu--item__has_sub_menu">
						<label class="menu--link" title="Pages">
							<i class='uil uil-file menu--icon'></i>
							<span class="menu--label">Pages</span>
						</label>
						<ul class="sub_menu">
							<li class="sub_menu--item">
								<a href="about.html" class="sub_menu--link">About</a>
							</li>
							<li class="sub_menu--item">
								<a href="sign_in.html" class="sub_menu--link">Sign In</a>
							</li>
							<li class="sub_menu--item">
								<a href="forgot_password.html" class="sub_menu--link">Forgot Password</a>
							</li>
							<li class="sub_menu--item">
								<a href="connect_wallet.html" class="sub_menu--link">Connect Wallet</a>
							</li>
							<li class="sub_menu--item">
								<a href="coming_soon.html" class="sub_menu--link">coming_soon</a>
							</li>
							<li class="sub_menu--item">
								<a href="error_404.html" class="sub_menu--link">Error 404</a>
							</li>	
							<li class="sub_menu--item">
								<a href="messages.html" class="sub_menu--link">Messenger</a>
							</li>	
							<li class="sub_menu--item">
								<a href="submit_request.html" class="sub_menu--link">submit_request</a>
							</li>	
							<li class="sub_menu--item">
								<a href="item_view.html" class="sub_menu--link">Item View</a>
							</li>	
							<li class="sub_menu--item">
								<a href="live_auction_item_view.html" class="sub_menu--link">Live Auction View</a>
							</li>	
							<li class="sub_menu--item">
								<a href="create_single_item.html" class="sub_menu--link">Create Single Item</a>
							</li>	
							<li class="sub_menu--item">
								<a href="create_multiples_item.html" class="sub_menu--link">Create Multiples Item</a>
							</li>
							<li class="sub_menu--item">
								<a href="blogs.html" class="sub_menu--link">Our Blog</a>
							</li>
							<li class="sub_menu--item">
								<a href="blog_detail_view.html" class="sub_menu--link">Blog Detail View</a>
							</li>
							<li class="sub_menu--item">
								<a href="Career.html" class="sub_menu--link">Careers</a>
							</li>
							<li class="sub_menu--item">
								<a href="job_openings.html" class="sub_menu--link">Job Openings</a>
							</li>
							<li class="sub_menu--item">
								<a href="job_detail_view.html" class="sub_menu--link">Job Detail View</a>
							</li>
							<li class="sub_menu--item">
								<a href="suggest_features.html" class="sub_menu--link">Suggest Features</a>
							</li>
							<li class="sub_menu--item">
								<a href="suggestion_openings.html" class="sub_menu--link">Suggestion Openings</a>
							</li>
							<li class="sub_menu--item">
								<a href="suggestion_post_view.html" class="sub_menu--link">Suggestion Post View</a>
							</li>
						</ul>
					</li>				
				</ul>
			</div>
			<div class="left_section pt-2">
				<ul>
					<li class="menu--item">
						<a href="how_it_works.html" class="menu--link" title="How it Works">
							<i class='uil uil-info-circle menu--icon'></i>
							<span class="menu--label">How it Works</span>
						</a>
					</li>
					<li class="menu--item">
						<a href="help_center.html" class="menu--link" title="Help Center">
							<i class='uil uil-life-ring menu--icon'></i>
							<span class="menu--label">Help Center</span>
						</a>
					</li>
					<li class="menu--item_community">
						<h4>Community</h4>
					</li>
					<li class="menu--item">
						<a href="uki_token.html" class="menu--link" title="UKI Token">
							<i class='uil uil-question-circle menu--icon'></i>
							<span class="menu--label">UKI Token</span>
						</a>
					</li>
					<li class="menu--item">
						<a href="blogs.html" class="menu--link" title="Blog">
							<i class='uil uil-rss menu--icon'></i>
							<span class="menu--label">Blog</span>
						</a>
					</li>
					<li class="menu--item">
						<a href="voting.html" class="menu--link" title="Voting">
							<i class='uil uil-thumbs-up menu--icon'></i>
							<span class="menu--label">Voting</span>
						</a>
					</li>
					<li class="menu--item">
						<a href="suggest_features.html" class="menu--link" title="Suggest feature">
							<i class='uil uil-asterisk menu--icon'></i>
							<span class="menu--label">Suggest feature</span>
						</a>
					</li>
					<li class="menu--item">
						<a href="subscribe.html" class="menu--link" title="Subscribe">
							<i class='uil uil-envelope-alt menu--icon'></i>
							<span class="menu--label">Subscribe</span>
						</a>
					</li>
				</ul>
			</div>
			<div class="left_footer">
				<ul>
					<li><a href="about.html">About</a></li>
					<li><a href="career.html">Career</a></li>
					<li><a href="privacy_policy.html">Privacy Policy</a></li>
					<li><a href="terms.html">Terms</a></li>
				</ul>
				<div class="left_footer_content">
					<p><i class="uil uil-copyright"></i> 2022 <strong>Ukiyox</strong>. All Rights Reserved.</p>
				</div>
			</div>
		</div>
	</nav>
	<!-- Left Sidebar End -->
	<!-- Body Start -->
	<div class="wrapper d-flex flex-column h-100">
		<div class="main-wrapper">
			<div id="cryptoon-layout" class="theme-orange m-2">
                <!-- main body area -->
                <div class="main px-lg-4 px-md-4">
                
                    <!-- Body: Titel Header -->
                    <div class="body-header border-bottom d-flex py-3">
                        <div class="container-xxl">
                            <div class="row align-items-center g-2">
                                <div class="col">
                                    <!-- Pretitle -->
                                    <h1 class="h4 mt-1">Exchange</h1>
                                </div>
                            </div> <!-- Row end  -->
                        </div>
                    </div>
        
                    <!-- Body: Body -->
                    <div class="body d-flex py-3">
                        <div class="container-xxl">
        
                            <div class="row g-3 mb-3">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <!-- TradingView Widget BEGIN -->
                                            <div class="tradingview-widget-container">
                                                <div id="tradingview_e05b7" style="height: 610px;"></div>
                                            </div>
                                            <!-- TradingView Widget END -->
                                        </div>
                                    </div>
                                </div>
                            </div><!-- Row End -->
        
                            <div class="row g-3 mb-3">
                                <div class="col-xxl-5">
                                    <div class="card">
                                        <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                            <h6 class="mb-0 fw-bold ">BTC/USDT Order Book</h6> 
                                        </div>
                                        <div class="card-body">
                                            <ul class="nav nav-tabs tab-body-header rounded d-inline-flex" role="tablist">
                                                <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#Both" role="tab">Both</a></li>
                                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#Long" role="tab">Long</a></li>
                                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#Short" role="tab">Short</a></li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane fade show active" id="Both">
                                                    <table id="priceTableup" class="priceTable table table-hover custom-table-2 table-bordered align-middle mb-0" style="width:100%">
                                                        <thead>
                                                            <tr>
                                                                <th>Price(USDT)</th>
                                                                <th>Amount(BTC)</th>
                                                                <th>Total</th> 
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td><span class="color-price-up">43978.43</span></td>
                                                                <td>0.11228</td>
                                                                <td>6,938.88312</td>
                                                            </tr>
                                                            <tr>
                                                                <td><span class="color-price-up">43925.73</span></td>
                                                                <td>0.08752</td>
                                                                <td>5,022.51319</td>
                                                            </tr>
                                                            <tr>
                                                                <td><span class="color-price-up">43928.23</span></td>
                                                                <td>0.08881</td>
                                                                <td>1,677.76807</td>
                                                            </tr>
                                                            <tr>
                                                                <td><span class="color-price-up">43978.90</span></td>
                                                                <td>0.00062</td>
                                                                <td>1,151.15971</td>
                                                            </tr>
                                                            <tr>
                                                                <td><span class="color-price-up">43979.43</span></td>
                                                                <td>0.03855</td>
                                                                <td>10,978.37750</td>
                                                            </tr>
                                                            <tr>
                                                                <td><span class="color-price-up">44279.20</span></td>
                                                                <td>0.17214</td>
                                                                <td>76,053.29043</td>
                                                            </tr>
                                                            <tr>
                                                                <td><span class="color-price-up">42978.43</span></td>
                                                                <td>0.11228</td>
                                                                <td>6,938.88312</td>
                                                            </tr>
                                                            <tr>
                                                                <td><span class="color-price-up">42925.73</span></td>
                                                                <td>0.08752</td>
                                                                <td>5,022.51319</td>
                                                            </tr>
                                                            <tr>
                                                                <td><span class="color-price-up">42928.23</span></td>
                                                                <td>0.08881</td>
                                                                <td>1,677.76807</td>
                                                            </tr>
                                                            <tr>
                                                                <td><span class="color-price-up">42978.90</span></td>
                                                                <td>0.00062</td>
                                                                <td>1,151.15971</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    
                                                    <table id="priceTabledown" class="priceTable table table-hover custom-table-2 table-bordered align-middle mb-0" style="width:100%">
                                                        <thead>
                                                            <tr>
                                                                <th>Price(USDT)</th>
                                                                <th>Amount(BTC)</th>
                                                                <th>Total</th> 
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td><span class="color-price-down">43978.43</span></td>
                                                                <td>0.11228</td>
                                                                <td>6,938.88312</td>
                                                            </tr>
                                                            <tr>
                                                                <td><span class="color-price-down">43925.73</span></td>
                                                                <td>0.08752</td>
                                                                <td>5,022.51319</td>
                                                            </tr>
                                                            <tr>
                                                                <td><span class="color-price-down">43928.23</span></td>
                                                                <td>0.08881</td>
                                                                <td>1,677.76807</td>
                                                            </tr>
                                                            <tr>
                                                                <td><span class="color-price-down">43978.90</span></td>
                                                                <td>0.00062</td>
                                                                <td>1,151.15971</td>
                                                            </tr>
                                                            <tr>
                                                                <td><span class="color-price-down">43979.43</span></td>
                                                                <td>0.03855</td>
                                                                <td>10,978.37750</td>
                                                            </tr>
                                                            <tr>
                                                                <td><span class="color-price-down">44279.20</span></td>
                                                                <td>0.17214</td>
                                                                <td>76,053.29043</td>
                                                            </tr>
                                                            <tr>
                                                                <td><span class="color-price-down">42978.43</span></td>
                                                                <td>0.11228</td>
                                                                <td>6,938.88312</td>
                                                            </tr>
                                                            <tr>
                                                                <td><span class="color-price-down">42925.73</span></td>
                                                                <td>0.08752</td>
                                                                <td>5,022.51319</td>
                                                            </tr>
                                                            <tr>
                                                                <td><span class="color-price-down">42928.23</span></td>
                                                                <td>0.08881</td>
                                                                <td>1,677.76807</td>
                                                            </tr>
                                                            <tr>
                                                                <td><span class="color-price-down">42978.90</span></td>
                                                                <td>0.00062</td>
                                                                <td>1,151.15971</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="tab-pane fade" id="Long">
                                                   
                                                    <table id="priceTableuponly" class="priceTable table table-hover custom-table-2 table-bordered align-middle mb-0" style="width:100%">
                                                        <thead>
                                                            <tr>
                                                                <th>Price(USDT)</th>
                                                                <th>Amount(BTC)</th>
                                                                <th>Total</th> 
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td><span class="color-price-up">43978.43</span></td>
                                                                <td>0.11228</td>
                                                                <td>6,938.88312</td>
                                                            </tr>
                                                            <tr>
                                                                <td><span class="color-price-up">43925.73</span></td>
                                                                <td>0.08752</td>
                                                                <td>5,022.51319</td>
                                                            </tr>
                                                            <tr>
                                                                <td><span class="color-price-up">43928.23</span></td>
                                                                <td>0.08881</td>
                                                                <td>1,677.76807</td>
                                                            </tr>
                                                            <tr>
                                                                <td><span class="color-price-up">43978.90</span></td>
                                                                <td>0.00062</td>
                                                                <td>1,151.15971</td>
                                                            </tr>
                                                            <tr>
                                                                <td><span class="color-price-up">43979.43</span></td>
                                                                <td>0.03855</td>
                                                                <td>10,978.37750</td>
                                                            </tr>
                                                            <tr>
                                                                <td><span class="color-price-up">44279.20</span></td>
                                                                <td>0.17214</td>
                                                                <td>76,053.29043</td>
                                                            </tr>
                                                            <tr>
                                                                <td><span class="color-price-up">42978.43</span></td>
                                                                <td>0.11228</td>
                                                                <td>6,938.88312</td>
                                                            </tr>
                                                            <tr>
                                                                <td><span class="color-price-up">42825.73</span></td>
                                                                <td>0.08752</td>
                                                                <td>5,022.51319</td>
                                                            </tr>
                                                            <tr>
                                                                <td><span class="color-price-up">42628.23</span></td>
                                                                <td>0.08881</td>
                                                                <td>1,677.76807</td>
                                                            </tr>
                                                            <tr>
                                                                <td><span class="color-price-up">42978.70</span></td>
                                                                <td>0.00062</td>
                                                                <td>1,151.15971</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="tab-pane fade" id="Short">
                                                    
                                                    <table id="priceTabledownonly" class="priceTable table table-hover custom-table-2 table-bordered align-middle mb-0" style="width:100%">
                                                        <thead>
                                                            <tr>
                                                                <th>Price(USDT)</th>
                                                                <th>Amount(BTC)</th>
                                                                <th>Total</th> 
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td><span class="color-price-down">43978.43</span></td>
                                                                <td>0.11228</td>
                                                                <td>6,938.88312</td>
                                                            </tr>
                                                            <tr>
                                                                <td><span class="color-price-down">43925.73</span></td>
                                                                <td>0.08752</td>
                                                                <td>5,022.51319</td>
                                                            </tr>
                                                            <tr>
                                                                <td><span class="color-price-down">43928.23</span></td>
                                                                <td>0.08881</td>
                                                                <td>1,677.76807</td>
                                                            </tr>
                                                            <tr>
                                                                <td><span class="color-price-down">43978.90</span></td>
                                                                <td>0.00062</td>
                                                                <td>1,151.15971</td>
                                                            </tr>
                                                            <tr>
                                                                <td><span class="color-price-down">43979.43</span></td>
                                                                <td>0.03855</td>
                                                                <td>10,978.37750</td>
                                                            </tr>
                                                            <tr>
                                                                <td><span class="color-price-down">44279.20</span></td>
                                                                <td>0.17214</td>
                                                                <td>76,053.29043</td>
                                                            </tr>
                                                            <tr>
                                                                <td><span class="color-price-down">42978.43</span></td>
                                                                <td>0.11228</td>
                                                                <td>6,938.88312</td>
                                                            </tr>
                                                            <tr>
                                                                <td><span class="color-price-down">42825.73</span></td>
                                                                <td>0.08752</td>
                                                                <td>5,022.51319</td>
                                                            </tr>
                                                            <tr>
                                                                <td><span class="color-price-down">42628.23</span></td>
                                                                <td>0.08881</td>
                                                                <td>1,677.76807</td>
                                                            </tr>
                                                            <tr>
                                                                <td><span class="color-price-down">42978.70</span></td>
                                                                <td>0.00062</td>
                                                                <td>1,151.15971</td>
                                                            </tr>
                                                            
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-7">
                                    <div class="card mb-3">
                                        <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                            <h6 class="mb-0 fw-bold ">Spot</h6> 
                                        </div>
                                        <div class="card-body">
                                            <ul class="nav nav-tabs tab-body-header rounded d-inline-flex" role="tablist">
                                                <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#Limit" role="tab">Limit</a></li>
                                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#Market" role="tab">Market</a></li>
                                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#Stoplimit" role="tab">Stop Limit</a></li>
                                            </ul>
                                            <div class="tab-content">
        
                                                <div class="tab-pane fade show active" id="Limit">
                                                    <div class="row g-3">
                                                        <div class="col-lg-6">
                                                            <div class="d-flex align-items-center justify-content-between my-3">
                                                                <span class="small text-muted">Avbl</span>
                                                                <span class="">310.800000 USDT</span>
                                                            </div>
                                                            <form>
                                                                <div class="input-group mb-3">
                                                                    <span class="input-group-text">Price</span>
                                                                    <input type="text" class="form-control">
                                                                    <span class="input-group-text">USDT</span>
                                                                </div>
                                                                <div class="input-group mb-3">
                                                                    <span class="input-group-text">Amount</span>
                                                                    <input type="text" class="form-control">
                                                                    <span class="input-group-text">BTC</span>
                                                                </div>
                                                                <div class="input-group mb-3">
                                                                    <div class="mb-2 d-flex justify-content-between align-items-center w-100">
                                                                        <span class="text-muted">0%</span>
                                                                        <span class="text-muted px-2">25%</span>
                                                                        <span class="text-muted px-1">50%</span>
                                                                        <span class="text-muted px-1">75%</span>
                                                                        <span class="text-muted">100%</span>
                                                                    </div>
                                                                    <input type="range" class="form-range" min='1' max='5' value='1' step='1'>
                                                                </div>
                                                                <div class="input-group mb-3">
                                                                    <span class="input-group-text">Total</span>
                                                                    <input type="text" class="form-control">
                                                                    <span class="input-group-text">USDT</span>
                                                                </div>
                                                                <button type="submit" class="btn flex-fill btn-light-success py-2 fs-5 text-uppercase px-5 w-100">BUY BTC</button>
                                                            </form>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="d-flex align-items-center justify-content-between my-3">
                                                                <span class="small text-muted">Avbl</span>
                                                                <span class="">0.0000000 BTC</span>
                                                            </div>
                                                            <form>
                                                                <div class="input-group mb-3">
                                                                    <span class="input-group-text">Price</span>
                                                                    <input type="text" class="form-control">
                                                                    <span class="input-group-text">USDT</span>
                                                                </div>
                                                                <div class="input-group mb-3">
                                                                    <span class="input-group-text">Amount</span>
                                                                    <input type="text" class="form-control">
                                                                    <span class="input-group-text">BTC</span>
                                                                </div>
                                                                <div class="input-group mb-3">
                                                                    <div class="mb-2 d-flex justify-content-between align-items-center w-100">
                                                                        <span class="text-muted">0%</span>
                                                                        <span class="text-muted px-2">25%</span>
                                                                        <span class="text-muted px-1">50%</span>
                                                                        <span class="text-muted px-1">75%</span>
                                                                        <span class="text-muted">100%</span>
                                                                    </div>
                                                                    <input type="range" class="form-range" min='1' max='5' value='1' step='1'>
                                                                </div>
                                                                <div class="input-group mb-3">
                                                                    <span class="input-group-text">Total</span>
                                                                    <input type="text" class="form-control">
                                                                    <span class="input-group-text">USDT</span>
                                                                </div>
                                                                <button type="submit" class="btn flex-fill btn-light-danger py-2 fs-5 text-uppercase px-5 w-100">SELL BTC</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div><!-- Limit Tab End -->
        
                                                <div class="tab-pane fade" id="Market">
                                                    <div class="row g-3">
                                                        <div class="col-lg-6">
                                                            <div class="d-flex align-items-center justify-content-between my-3">
                                                                <span class="small text-muted">Avbl</span>
                                                                <span class="">310.800000 USDT</span>
                                                            </div>
                                                            <form>
                                                                <div class="input-group mb-3">
                                                                    <span class="input-group-text">Price</span>
                                                                    <input type="text" class="form-control"  placeholder="Market">
                                                                    <span class="input-group-text">USDT</span>
                                                                </div>
                                                                <div class="input-group mb-3">
                                                                    <button type="button" class="btn btn-outline-secondary">Amount</button>
                                                                    <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                                                      <span class="visually-hidden">Toggle Dropdown</span>
                                                                    </button>
                                                                    <ul class="dropdown-menu">
                                                                      <li><a class="dropdown-item" href="#">Amount</a></li>
                                                                      <li><a class="dropdown-item" href="#">Total</a></li>
                                                                    </ul>
                                                                    <input type="text" class="form-control">
                                                                    <span class="input-group-text">BTC</span>
                                                                </div>
                                                                <div class="input-group mb-3">
                                                                    <div class="mb-2 d-flex justify-content-between align-items-center w-100">
                                                                        <span class="text-muted">0%</span>
                                                                        <span class="text-muted px-2">25%</span>
                                                                        <span class="text-muted px-1">50%</span>
                                                                        <span class="text-muted px-1">75%</span>
                                                                        <span class="text-muted">100%</span>
                                                                    </div>
                                                                    <input type="range" class="form-range" min='1' max='5' value='1' step='1'>
                                                                </div>
                                                                <button type="submit" class="btn flex-fill btn-light-success py-2 fs-5 text-uppercase px-5 w-100">BUY BTC</button>
                                                            </form>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="d-flex align-items-center justify-content-between my-3">
                                                                <span class="small text-muted">Avbl</span>
                                                                <span class="">0.0000000 BTC</span>
                                                            </div>
                                                            <form>
                                                                <div class="input-group mb-3">
                                                                    <span class="input-group-text">Price</span>
                                                                    <input type="text" class="form-control" placeholder="Market">
                                                                    <span class="input-group-text">USDT</span>
                                                                </div>
                                                                <div class="input-group mb-3">
                                                                    <button type="button" class="btn btn-outline-secondary">Amount</button>
                                                                    <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                                                      <span class="visually-hidden">Toggle Dropdown</span>
                                                                    </button>
                                                                    <ul class="dropdown-menu">
                                                                      <li><a class="dropdown-item" href="#">Amount</a></li>
                                                                      <li><a class="dropdown-item" href="#">Total</a></li>
                                                                    </ul>
                                                                    <input type="text" class="form-control">
                                                                    <span class="input-group-text">BTC</span>
                                                                </div>
                                                                <div class="input-group mb-3">
                                                                    <div class="mb-2 d-flex justify-content-between align-items-center w-100">
                                                                        <span class="text-muted">0%</span>
                                                                        <span class="text-muted px-2">25%</span>
                                                                        <span class="text-muted px-1">50%</span>
                                                                        <span class="text-muted px-1">75%</span>
                                                                        <span class="text-muted">100%</span>
                                                                    </div>
                                                                    <input type="range" class="form-range" min='1' max='5' value='1' step='1'>
                                                                </div>
                                                                <button type="submit" class="btn flex-fill btn-light-danger py-2 fs-5 text-uppercase px-5 w-100">SELL BTC</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div><!-- Market Tab End -->
        
                                                <div class="tab-pane fade" id="Stoplimit">
                                                    <div class="row g-3">
                                                        <div class="col-lg-6">
                                                            <div class="d-flex align-items-center justify-content-between my-3">
                                                                <span class="small text-muted">Avbl</span>
                                                                <span class="">310.800000 USDT</span>
                                                            </div>
                                                            <form>
                                                                <div class="input-group mb-3">
                                                                    <span class="input-group-text">Stop</span>
                                                                    <input type="text" class="form-control">
                                                                    <span class="input-group-text">USDT</span>
                                                                </div>
                                                                <div class="input-group mb-3">
                                                                    <span class="input-group-text">Limit</span>
                                                                    <input type="text" class="form-control">
                                                                    <span class="input-group-text">USDT</span>
                                                                </div>
                                                                <div class="input-group mb-3">
                                                                    <span class="input-group-text">Amount</span>
                                                                    <input type="text" class="form-control">
                                                                    <span class="input-group-text">BTC</span>
                                                                </div>
                                                                <div class="input-group mb-3">
                                                                    <div class="mb-2 d-flex justify-content-between align-items-center w-100">
                                                                        <span class="text-muted">0%</span>
                                                                        <span class="text-muted px-2">25%</span>
                                                                        <span class="text-muted px-1">50%</span>
                                                                        <span class="text-muted px-1">75%</span>
                                                                        <span class="text-muted">100%</span>
                                                                    </div>
                                                                    <input type="range" class="form-range" min='1' max='5' value='1' step='1'>
                                                                </div>
                                                                <div class="input-group mb-3">
                                                                    <span class="input-group-text">Total</span>
                                                                    <input type="text" class="form-control">
                                                                    <span class="input-group-text">USDT</span>
                                                                </div>
                                                                <button type="submit" class="btn flex-fill btn-light-success py-2 fs-5 text-uppercase px-5 w-100">BUY BTC</button>
                                                            </form>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="d-flex align-items-center justify-content-between my-3">
                                                                <span class="small text-muted">Avbl</span>
                                                                <span class="">0.0000000 BTC</span>
                                                            </div>
                                                            <form>
                                                                <div class="input-group mb-3">
                                                                    <span class="input-group-text">Stop</span>
                                                                    <input type="text" class="form-control">
                                                                    <span class="input-group-text">USDT</span>
                                                                </div>
                                                                <div class="input-group mb-3">
                                                                    <span class="input-group-text">Limit</span>
                                                                    <input type="text" class="form-control">
                                                                    <span class="input-group-text">USDT</span>
                                                                </div>
                                                                <div class="input-group mb-3">
                                                                    <span class="input-group-text">Amount</span>
                                                                    <input type="text" class="form-control">
                                                                    <span class="input-group-text">BTC</span>
                                                                </div>
                                                                <div class="input-group mb-3">
                                                                    <div class="mb-2 d-flex justify-content-between align-items-center w-100">
                                                                        <span class="text-muted">0%</span>
                                                                        <span class="text-muted px-2">25%</span>
                                                                        <span class="text-muted px-1">50%</span>
                                                                        <span class="text-muted px-1">75%</span>
                                                                        <span class="text-muted">100%</span>
                                                                    </div>
                                                                    <input type="range" class="form-range" min='1' max='5' value='1' step='1'>
                                                                </div>
                                                                <div class="input-group mb-3">
                                                                    <span class="input-group-text">Total</span>
                                                                    <input type="text" class="form-control">
                                                                    <span class="input-group-text">USDT</span>
                                                                </div>
                                                                <button type="submit" class="btn flex-fill btn-light-danger py-2 fs-5 text-uppercase px-5 w-100">SELL BTC</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div><!-- Stoplimit Tab End -->
        
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                            <h6 class="mb-0 fw-bold ">Spot trade Status</h6> 
                                        </div>
                                        <div class="card-body">
                                            <ul class="nav nav-tabs tab-body-header rounded d-inline-flex mb-3" role="tablist">
                                                <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#OpenOrder" role="tab">Open Order(7)</a></li>
                                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#OrderHistory" role="tab">Order History</a></li>
                                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#TradeHistory" role="tab">Trade History</a></li>
                                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#Funds" role="tab">Funds</a></li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane fade show active" id="OpenOrder">
                                                    <table id="ordertabone" class="priceTable table table-hover custom-table-2 table-bordered align-middle mb-0" style="width:100%">
                                                        <thead>
                                                            <tr>
                                                                <th>Date</th>
                                                                <th>Pair</th>
                                                                <th>Type</th> 
                                                                <th>Side</th>
                                                                <th>Price</th>
                                                                <th>Amount</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>09-18 17:32:15</td>
                                                                <td><img src="assets/images/coin/ETH.png" alt="" class="img-fluid avatar mx-1">ETH/USDT</td>
                                                                <td>Limit</td>
                                                                <td><span class="color-price-up">Buy</span></td>
                                                                <td>2774.00</td>
                                                                <td>0.000378</td>
                                                                <td>
                                                                    <div class="btn-group" role="group">
                                                                        <button type="button" class="btn btn-outline-secondary"><i class="icofont-edit text-success"></i></button>
                                                                        <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>09-20 18:38:15</td>
                                                                <td><img src="assets/images/coin/SOL.png" alt="" class="img-fluid avatar mx-1">SOL/USDT</td>
                                                                <td>Limit</td>
                                                                <td><span class="color-price-up">Buy</span></td>
                                                                <td>125.00</td>
                                                                <td>0.005378</td>
                                                                <td>
                                                                    <div class="btn-group" role="group">
                                                                        <button type="button" class="btn btn-outline-secondary"><i class="icofont-edit text-success"></i></button>
                                                                        <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>09-18 17:32:15</td>
                                                                <td><img src="assets/images/coin/DGD.png" alt="" class="img-fluid avatar mx-1">DGD/USDT</td>
                                                                <td>Limit</td>
                                                                <td><span class="color-price-down">Sell</span></td>
                                                                <td>35.00</td>
                                                                <td>0.000005</td>
                                                                <td>
                                                                    <div class="btn-group" role="group">
                                                                        <button type="button" class="btn btn-outline-secondary"><i class="icofont-edit text-success"></i></button>
                                                                        <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>09-21 13:32:15</td>
                                                                <td><img src="assets/images/coin/ADA.png" alt="" class="img-fluid avatar mx-1">ADA/USDT</td>
                                                                <td>Limit</td>
                                                                <td><span class="color-price-down">Sell</span></td>
                                                                <td>3.500</td>
                                                                <td>0.000001</td>
                                                                <td>
                                                                    <div class="btn-group" role="group">
                                                                        <button type="button" class="btn btn-outline-secondary"><i class="icofont-edit text-success"></i></button>
                                                                        <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>09-21 13:32:15</td>
                                                                <td><img src="assets/images/coin/BNB.png" alt="" class="img-fluid avatar mx-1">BNB/USDT</td>
                                                                <td>Limit</td>
                                                                <td><span class="color-price-down">Sell</span></td>
                                                                <td>415.00</td>
                                                                <td>0.000041</td>
                                                                <td>
                                                                    <div class="btn-group" role="group">
                                                                        <button type="button" class="btn btn-outline-secondary"><i class="icofont-edit text-success"></i></button>
                                                                        <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>09-20 13:32:15</td>
                                                                <td><img src="assets/images/coin/DOGE.png" alt="" class="img-fluid avatar mx-1">DOGE/USDT</td>
                                                                <td>Limit</td>
                                                                <td><span class="color-price-down">Sell</span></td>
                                                                <td>0.2040</td>
                                                                <td>0.203900</td>
                                                                <td>
                                                                    <div class="btn-group" role="group">
                                                                        <button type="button" class="btn btn-outline-secondary"><i class="icofont-edit text-success"></i></button>
                                                                        <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>09-22 16:32:15</td>
                                                                <td><img src="assets/images/coin/ADX.png" alt="" class="img-fluid avatar mx-1">ADX/USDT</td>
                                                                <td>Limit</td>
                                                                <td><span class="color-price-up">Buy</span></td>
                                                                <td>2.134</td>
                                                                <td>2.13</td>
                                                                <td>
                                                                    <div class="btn-group" role="group">
                                                                        <button type="button" class="btn btn-outline-secondary"><i class="icofont-edit text-success"></i></button>
                                                                        <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div><!-- OpenOrdertab End -->
                                                <div class="tab-pane fade" id="OrderHistory">
                                                    <table id="ordertabtwo" class="priceTable table table-hover custom-table-2 table-bordered align-middle mb-0" style="width:100%">
                                                        <thead>
                                                            <tr>
                                                                <th>Date</th>
                                                                <th>Pair</th>
                                                                <th>Type</th> 
                                                                <th>Side</th>
                                                                <th>Average</th>
                                                                <th>Price</th>
                                                                <th>Executed</th>
                                                                <th>Amount</th>
                                                                <th>Total</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>09-18 17:32:15</td>
                                                                <td><img src="assets/images/coin/ETH.png" alt="" class="img-fluid avatar mx-1">ETH/USDT</td>
                                                                <td>Market</td>
                                                                <td><span class="color-price-down">Sell</span></td>
                                                                <td>3,487.50</td>
                                                                <td>Market</td>
                                                                <td>0.0110</td>
                                                                <td>0.0110</td>
                                                                <td>38.36</td>
                                                            </tr>
                                                            <tr>
                                                                <td>09-18 17:31:11</td>
                                                                <td><img src="assets/images/coin/SOL.png" alt="" class="img-fluid avatar mx-1">SOL/USDT</td>
                                                                <td>Market</td>
                                                                <td><span class="color-price-down">Sell</span></td>
                                                                <td>160.33</td>
                                                                <td>Market</td>
                                                                <td>0.75</td>
                                                                <td>0.75</td>
                                                                <td>120.25</td>
                                                            </tr>
                                                            <tr>
                                                                <td>09-18 08:52:04</td>
                                                                <td><img src="assets/images/coin/ETH.png" alt="" class="img-fluid avatar mx-1">ETH/USDT</td>
                                                                <td>Market</td>
                                                                <td><span class="color-price-up">Buy</span></td>
                                                                <td>3,439.20</td>
                                                                <td>Market</td>
                                                                <td>0.0111</td>
                                                                <td>0.0111</td>
                                                                <td>38.18</td>
                                                            </tr>
                                                            <tr>
                                                                <td>09-17 08:34:14</td>
                                                                <td><img src="assets/images/coin/SOL.png" alt="" class="img-fluid avatar mx-1">SOL/USDT</td>
                                                                <td>Market</td>
                                                                <td><span class="color-price-up">Buy</span></td>
                                                                <td>147.04</td>
                                                                <td>Market</td>
                                                                <td>0.76</td>
                                                                <td>0.71</td>
                                                                <td>111.75</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div><!-- OrderHistorytab End -->
                                                <div class="tab-pane fade" id="TradeHistory">
                                                    <table id="ordertabthree" class="priceTable table table-hover custom-table-2 table-bordered align-middle mb-0" style="width:100%">
                                                        <thead>
                                                            <tr>
                                                                <th>Date</th>
                                                                <th>Pair</th>
                                                                <th>Side</th>
                                                                <th>Price</th>
                                                                <th>Executed</th>
                                                                <th>Fee</th>
                                                                <th>Total</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>09-18 17:32:15</td>
                                                                <td><img src="assets/images/coin/ETH.png" alt="" class="img-fluid avatar mx-1">ETH/USDT</td>
                                                                <td><span class="color-price-down">Sell</span></td>
                                                                <td>3,487.50</td>
                                                                <td>0.0110</td>
                                                                <td>0.03836250 USDT</td>
                                                                <td>38.36250000 USDT</td>
                                                            </tr>
                                                            <tr>
                                                                <td>09-18 17:31:11</td>
                                                                <td><img src="assets/images/coin/SOL.png" alt="" class="img-fluid avatar mx-1">SOL/USDT</td>
                                                                <td><span class="color-price-down">Sell</span></td>
                                                                <td>160.33</td>
                                                                <td>0.75</td>
                                                                <td>0.12024750 USDT</td>
                                                                <td>120.24750000 USDT</td>
                                                            </tr>
                                                            <tr>
                                                                <td>09-18 08:52:04</td>
                                                                <td><img src="assets/images/coin/ETH.png" alt="" class="img-fluid avatar mx-1">ETH/USDT</td>
                                                                <td><span class="color-price-up">Buy</span></td>
                                                                <td>3,439.20</td>
                                                                <td>0.0111</td>
                                                                <td>0.00001110 ETH</td>
                                                                <td>38.17512000 USDT</td>
                                                            </tr>
                                                            <tr>
                                                                <td>09-17 08:34:14</td>
                                                                <td><img src="assets/images/coin/SOL.png" alt="" class="img-fluid avatar mx-1">SOL/USDT</td>
                                                                <td><span class="color-price-up">Buy</span></td>
                                                                <td>147.04</td>
                                                                <td>0.76</td>
                                                                <td>0.00076000 SOL</td>
                                                                <td>111.75040000 USDT</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div><!-- TradeHistorytab End -->
                                                <div class="tab-pane fade" id="Funds">
                                                    <table id="ordertabfour" class="priceTable table table-hover custom-table-2 table-bordered align-middle mb-0" style="width:100%">
                                                        <thead>
                                                            <tr>
                                                                <th>Coin</th>
                                                                <th>Total Balance</th>
                                                                <th>Available Balance</th>
                                                                <th>In Order</th>
                                                                <th>BTC Value</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td><img src="assets/images/coin/ICN.png" alt="" class="img-fluid avatar mx-1">1INCH</td>
                                                                <td>10.00000000</td>
                                                                <td>10.00000000</td>
                                                                <td>08.00000000</td>
                                                                <td>0.00000080 BTC</td>
                                                            </tr>
                                                            <tr>
                                                                <td><img src="assets/images/coin/EDG.png" alt="" class="img-fluid avatar mx-1">EDG</td>
                                                                <td>11.00000000</td>
                                                                <td>11.00000000</td>
                                                                <td>10.00000010</td>
                                                                <td>0.000000010 BTC</td>
                                                            </tr>
                                                            <tr>
                                                                <td><img src="assets/images/coin/ADA.png" alt="" class="img-fluid avatar mx-1">ADA</td>
                                                                <td>112.00000000</td>
                                                                <td>112.00000000</td>
                                                                <td>098.00000098</td>
                                                                <td>0.0000000009 BTC</td>
                                                            </tr>
                                                            <tr>
                                                                <td><img src="assets/images/coin/ARK.png" alt="" class="img-fluid avatar mx-1">ARK</td>
                                                                <td>113.00000000</td>
                                                                <td>113.00000000</td>
                                                                <td>097.00000097</td>
                                                                <td>0.0000000009 BTC</td>
                                                            </tr>
                                                            <tr>
                                                                <td><img src="assets/images/coin/FUN.png" alt="" class="img-fluid avatar mx-1">Fun</td>
                                                                <td>218.00000000</td>
                                                                <td>218.00000000</td>
                                                                <td>095.00000095</td>
                                                                <td>0.0000000008 BTC</td>
                                                            </tr>
                                                            <tr>
                                                                <td><img src="assets/images/coin/BNB.png" alt="" class="img-fluid avatar mx-1">BNB</td>
                                                                <td>0.00431435</td>
                                                                <td>0.00431435</td>
                                                                <td>0.00000000</td>
                                                                <td>0.00003445 BTC</td>
                                                            </tr>
                                                            <tr>
                                                                <td><img src="assets/images/coin/ETH.png" alt="" class="img-fluid avatar mx-1">ETH</td>
                                                                <td>0.05431435</td>
                                                                <td>0.05431435</td>
                                                                <td>0.00000000</td>
                                                                <td>0.00543445 BTC</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div><!-- Fundstab End -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- Row End -->
        
                        </div>
                    </div>
                
                    <!-- Modal Custom Settings-->
                    <div class="modal fade right" id="Settingmodal" tabindex="-1"  aria-hidden="true">
                        <div class="modal-dialog  modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Custome Settings</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body custom_setting">
                                    <!-- Settings: Color -->
                                    <div class="setting-theme pb-3">
                                        <h6 class="card-title mb-2 fs-6 d-flex align-items-center"><i class="icofont-color-bucket fs-4 me-2 text-primary"></i>Template Color Settings</h6>
                                        <ul class="list-unstyled row row-cols-3 g-2 choose-skin mb-2 mt-2">
                                            <li data-theme="indigo"><div class="indigo"></div></li>
                                            <li data-theme="tradewind"><div class="tradewind"></div></li>
                                            <li data-theme="monalisa"><div class="monalisa"></div></li>
                                            <li data-theme="blue"><div class="blue"></div></li>
                                            <li data-theme="cyan"><div class="cyan"></div></li>
                                            <li data-theme="green"><div class="green"></div></li>
                                            <li data-theme="orange" class="active"><div class="orange"></div></li>
                                            <li data-theme="blush"><div class="blush"></div></li>
                                            <li data-theme="red"><div class="red"></div></li>
                                        </ul>
                                    </div>
                                    <!-- Settings: Template dynamics -->
                                    <div class="dynamic-block py-3">
                                        <ul class="list-unstyled choose-skin mb-2 mt-1">
                                            <li data-theme="dynamic"><div class="dynamic"><i class="icofont-paint me-2"></i> Click to Dyanmic Setting</div></li>
                                        </ul>
                                        <div class="dt-setting">
                                            <ul class="list-group list-unstyled mt-1">
                                                <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                                    <label>Primary Color</label>
                                                    <button id="primaryColorPicker" class="btn bg-primary avatar xs border-0 rounded-0"></button>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                                    <label>Secondary Color</label>
                                                    <button id="secondaryColorPicker" class="btn bg-secondary avatar xs border-0 rounded-0"></button>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                                    <label class="text-muted">Chart Color 1</label>
                                                    <button id="chartColorPicker1" class="btn chart-color1 avatar xs border-0 rounded-0"></button>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                                    <label class="text-muted">Chart Color 2</label>
                                                    <button id="chartColorPicker2" class="btn chart-color2 avatar xs border-0 rounded-0"></button>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                                    <label class="text-muted">Chart Color 3</label>
                                                    <button id="chartColorPicker3" class="btn chart-color3 avatar xs border-0 rounded-0"></button>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                                    <label class="text-muted">Chart Color 4</label>
                                                    <button id="chartColorPicker4" class="btn chart-color4 avatar xs border-0 rounded-0"></button>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                                    <label class="text-muted">Chart Color 5</label>
                                                    <button id="chartColorPicker5" class="btn chart-color5 avatar xs border-0 rounded-0"></button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Settings: Font -->
                                    <div class="setting-font py-3">
                                        <h6 class="card-title mb-2 fs-6 d-flex align-items-center"><i class="icofont-font fs-4 me-2 text-primary"></i> Font Settings</h6>
                                        <ul class="list-group font_setting mt-1">
                                            <li class="list-group-item py-1 px-2">
                                                <div class="form-check mb-0">
                                                    <input class="form-check-input" type="radio" name="font" id="font-poppins" value="font-poppins">
                                                    <label class="form-check-label" for="font-poppins">
                                                        Poppins Google Font
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="list-group-item py-1 px-2">
                                                <div class="form-check mb-0">
                                                    <input class="form-check-input" type="radio" name="font" id="font-opensans" value="font-opensans">
                                                    <label class="form-check-label" for="font-opensans">
                                                        Open Sans Google Font
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="list-group-item py-1 px-2">
                                                <div class="form-check mb-0">
                                                    <input class="form-check-input" type="radio" name="font" id="font-montserrat" value="font-montserrat">
                                                    <label class="form-check-label" for="font-montserrat">
                                                        Montserrat Google Font
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="list-group-item py-1 px-2">
                                                <div class="form-check mb-0">
                                                    <input class="form-check-input" type="radio" name="font" id="font-Plex" value="font-Plex" checked="">
                                                    <label class="form-check-label" for="font-Plex">
                                                        Plex Google Font
                                                    </label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Settings: Light/dark -->
                                    <div class="setting-mode py-3">
                                        <h6 class="card-title mb-2 fs-6 d-flex align-items-center"><i class="icofont-layout fs-4 me-2 text-primary"></i>Contrast Layout</h6>
                                        <ul class="list-group list-unstyled mb-0 mt-1">
                                            <li class="list-group-item d-flex align-items-center py-1 px-2">
                                                <div class="form-check form-switch theme-switch mb-0">
                                                    <input class="form-check-input" type="checkbox" id="theme-switch">
                                                    <label class="form-check-label" for="theme-switch">Enable Dark Mode!</label>
                                                </div>
                                            </li>
                                            <li class="list-group-item d-flex align-items-center py-1 px-2">
                                                <div class="form-check form-switch theme-high-contrast mb-0">
                                                    <input class="form-check-input" type="checkbox" id="theme-high-contrast">
                                                    <label class="form-check-label" for="theme-high-contrast">Enable High Contrast</label>
                                                </div>
                                            </li>
                                            <li class="list-group-item d-flex align-items-center py-1 px-2">
                                                <div class="form-check form-switch theme-rtl mb-0">
                                                    <input class="form-check-input" type="checkbox" id="theme-rtl">
                                                    <label class="form-check-label" for="theme-rtl">Enable RTL Mode!</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="modal-footer justify-content-start">
                                    <button type="button" class="btn btn-white border lift" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary lift">Save Changes</button>
                                </div>
                            </div>
                        </div>
                    </div> 
                    
                </div>
            
            </div>
		</div>
		<footer class="footer mt-auto footer-mt">
			<div class="footer_top">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-6">
							<div class="footer-content">
								<h4 class="footer-title">Ukiyox</h4>
								<ul class="footer-content-links">
									<li><a href="explore.html" class="footer-link">Explore</a></li>
									<li><a href="about.html" class="footer-link">About</a></li>
									<li><a href="help_center.html" class="footer-link">Help Center</a></li>
									<li><a href="career.html" class="footer-link">Careers</a></li>
									<li><a href="how_it_works.html" class="footer-link">How It Works</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="footer-content">
								<h4 class="footer-title">Community</h4>
								<ul class="footer-content-links">
									<li><a href="blogs.html" class="footer-link">Blog</a></li>
									<li><a href="uki_token.html" class="footer-link">Uki Token</a></li>
									<li><a href="suggest_features.html" class="footer-link">Suggest Features</a></li>
									<li><a href="subscribe.html" class="footer-link">Subscribe</a></li>
									<li><a href="voting.html" class="footer-link">Voting</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="footer-content">
								<h4 class="footer-title">Join Ukiyox Community</h4>
								<div class="footer-social-links">
									<a href="#" class="social-link"><i class="fa-brands fa-facebook"></i></a>
									<a href="#" class="social-link"><i class="fa-brands fa-twitter"></i></a>
									<a href="#" class="social-link"><i class="fa-brands fa-instagram"></i></a>
									<a href="#" class="social-link"><i class="fa-brands fa-discord"></i></a>
									<a href="#" class="social-link"><i class="fa-brands fa-telegram"></i></a>
									<a href="#" class="social-link"><i class="fa-brands fa-youtube"></i></a>
									<a href="#" class="social-link"><i class="fa-brands fa-reddit"></i></a>
									<a href="#" class="social-link"><i class="fa-brands fa-vk"></i></a>
									<a href="#" class="social-link"><i class="fa-brands fa-tumblr-square"></i></a>
									<a href="#" class="social-link"><i class="fa-brands fa-medium"></i></a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="footer-content">
								<h4 class="footer-title">Download the Ukiyox app</h4>
								<div class="footer-download-links">
									<a href="#" class="download-btn">
										<img src="images/career/app-store.png" alt="">
									</a>
									<a href="#" class="download-btn">
										<img src="images/career/google-play.png" alt="">
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>
	<!-- Body End -->

	<script src="js/vertical-responsive-menu.min.js"></script>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="vendor/OwlCarousel/owl.carousel.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>	
	<script src="js/custom.js"></script>
	<script src="js/mixitup.min.js"></script>
	<script src="js/dark-mode-switch.min.js"></script>
	
     <!-- Plugin Js -->
     <script src="assets/bundles/dataTables.bundle.js"></script>  
     <script  src="https://s3.tradingview.com/tv.js"></script>
 
     <!-- Jquery Page Js -->  
     <script src="js/template.js"></script>
     <script  src="js/page/exchange.js"></script>
</body>
</html>