<!DOCTYPE html>
<html lang="en" class="h-100">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, shrink-to-fit=9">
		<meta name="description" content="Gambolthemes">
		<meta name="author" content="Gambolthemes">		
		<title>UkiyoX - Create, sell or collect digital items secured with #blockchain</title>
		
		<!-- Favicon Icon -->
		<link rel="icon" type="image/png" href="images/fav.png">
		
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
			<a href="index.html"><img src="images/footer_logo.svg" alt=""></a>
		</div>
		<div class="main_logo" id="logo">
			<a href="index.html"><img class="logo-main" src="images/logo.svg" alt=""></a>
			<a href="index.html"><img class="logo-inverse" src="images/dark_logo.svg" alt=""></a>
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
								<a class="dropdown-item text-center" href="sign_in.html">Logout</a>
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
						<a href="explore.html" class="menu--link" title="Explore">
							<i class='uil uil-compass menu--icon'></i>
							<span class="menu--label">Explore</span>
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
			<div class="container-fluid">			
				<div class="row">
					<div class="col-xl-12 col-lg-12">
						<div class="intro-banner">
							<div class="row">
								<div class="col-md-12">
									<div class="banner-headlines">
										<h2>The 1st and the best NFT Marketplace</h2>
										<p>Buy, Sell, and Discover rare Digital Items.</p>
									</div>
									<div class="banner-btns">
										<a href="create.html" class="btn main-btn btn-hover h-40 p_2 me-2">Create</a>
										<a href="explore.html" class="btn light-btn btn-hover h-40 p_2">Explore</a>
									</div>
								</div>
							</div>
						</div>						
					</div>					
				</div>				
				<div class="row">
					<div class="col-xl-12 col-lg-12">
						<div class="top-sellers-buyers-block mt-5">
							<ul class="nav nav-tabs" role="tablist">
								<li class="nav-item" role="presentation">
									<button class="nav-link active" id="sellers-tab" data-bs-toggle="tab" data-bs-target="#sellers" type="button" role="tab" aria-controls="sellers" aria-selected="true">Top Sellers</button>
								</li>
								<li class="nav-item" role="presentation">
									<button class="nav-link" id="buyers-tab" data-bs-toggle="tab" data-bs-target="#buyers" type="button" role="tab" aria-controls="buyers" aria-selected="false">Top Buyers</button>
								</li>
							</ul>
							<div class="tab-content">
								<div class="tab-pane fade show active" id="sellers" role="tabpanel" aria-labelledby="sellers-tab">									
									<div class="top-sellers-list">
										<div class="owl-carousel top-sellers-slider owl-theme">
											<div class="item">
												<a href="author_detail_view.html" class="top-author-dt main-card">
													<span class="list-number">1</span>
													<div class="top-author-img">
														<img src="images/left-imgs/img-1.jpg" alt="">
														<span class="verif-badge">
															<svg width="20" height="20" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
														</span>
													</div>
													<h6 class="author-name">Larry_39</h6>
													<span>5.40 ETH</span>
												</a>
											</div>
											<div class="item">
												<a href="author_detail_view.html" class="top-author-dt main-card">
													<span class="list-number">2</span>
													<div class="top-author-img">
														<img src="images/left-imgs/img-2.jpg" alt="">
														<span class="verif-badge">
															<svg width="20" height="20" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
														</span>
													</div>
													<h6 class="author-name">Omnom</h6>
													<span>5.38 ETH</span>
												</a>
											</div>
											<div class="item">
												<a href="author_detail_view.html" class="top-author-dt main-card">
													<span class="list-number">3</span>
													<div class="top-author-img">
														<img src="images/left-imgs/img-3.jpg" alt="">
														<span class="verif-badge">
															<svg width="20" height="20" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
														</span>
													</div>
													<h6 class="author-name">Christie</h6>
													<span>5.34 ETH</span>
												</a>
											</div>
											<div class="item">
												<a href="author_detail_view.html" class="top-author-dt main-card">
													<span class="list-number">4</span>
													<div class="top-author-img">
														<img src="images/left-imgs/img-4.jpg" alt="">
														<span class="verif-badge">
															<svg width="20" height="20" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
														</span>
													</div>
													<h6 class="author-name">User_66</h6>
													<span>5.32 ETH</span>
												</a>
											</div>
											<div class="item">
												<a href="author_detail_view.html" class="top-author-dt main-card">
													<span class="list-number">5</span>
													<div class="top-author-img">
														<img src="images/left-imgs/img-5.jpg" alt="">
														<span class="verif-badge">
															<svg width="20" height="20" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
														</span>
													</div>
													<h6 class="author-name">Trevis</h6>
													<span>5.29 ETH</span>
												</a>
											</div>
											<div class="item">
												<a href="author_detail_view.html" class="top-author-dt main-card">
													<span class="list-number">6</span>
													<div class="top-author-img">
														<img src="images/left-imgs/img-6.jpg" alt="">
														<span class="verif-badge">
															<svg width="20" height="20" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
														</span>
													</div>
													<h6 class="author-name">Lizzy Wizzy</h6>
													<span>5.22 ETH</span>
												</a>
											</div>
											<div class="item">
												<a href="author_detail_view.html" class="top-author-dt main-card">
													<span class="list-number">7</span>
													<div class="top-author-img">
														<img src="images/left-imgs/img-7.jpg" alt="">
														<span class="verif-badge">
															<svg width="20" height="20" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
														</span>
													</div>
													<h6 class="author-name">Kok_Ross</h6>
													<span>5.21 ETH</span>
												</a>
											</div>
											<div class="item">
												<a href="author_detail_view.html" class="top-author-dt main-card">
													<span class="list-number">8</span>
													<div class="top-author-img">
														<img src="images/left-imgs/img-8.jpg" alt="">
														<span class="verif-badge">
															<svg width="20" height="20" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
														</span>
													</div>
													<h6 class="author-name">Loli Art</h6>
													<span>5.19 ETH</span>
												</a>
											</div>
											<div class="item">
												<a href="author_detail_view.html" class="top-author-dt main-card">
													<span class="list-number">9</span>
													<div class="top-author-img">
														<img src="images/left-imgs/img-9.jpg" alt="">
														<span class="verif-badge">
															<svg width="20" height="20" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
														</span>
													</div>
													<h6 class="author-name">John Doe</h6>
													<span>5.13 ETH</span>
												</a>
											</div>
											<div class="item">
												<a href="author_detail_view.html" class="top-author-dt main-card">
													<span class="list-number">10</span>
													<div class="top-author-img">
														<img src="images/left-imgs/img-10.jpg" alt="">
														<span class="verif-badge">
															<svg width="20" height="20" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
														</span>
													</div>
													<h6 class="author-name">EvenRai</h6>
													<span>5.08 ETH</span>
												</a>
											</div>
											<div class="item">
												<a href="author_detail_view.html" class="top-author-dt main-card">
													<span class="list-number">11</span>
													<div class="top-author-img">
														<img src="images/left-imgs/img-11.jpg" alt="">
														<span class="verif-badge">
															<svg width="20" height="20" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
														</span>
													</div>
													<h6 class="author-name">Bored Elon</h6>
													<span>4.58 ETH</span>
												</a>
											</div>
											<div class="item">
												<a href="author_detail_view.html" class="top-author-dt main-card">
													<span class="list-number">12</span>
													<div class="top-author-img">
														<img src="images/left-imgs/img-12.jpg" alt="">
														<span class="verif-badge">
															<svg width="20" height="20" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
														</span>
													</div>
													<h6 class="author-name">Elon Wong</h6>
													<span>4.40 ETH</span>
												</a>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="buyers" role="tabpanel" aria-labelledby="buyers-tab">
									<div class="top-buyers-list">
										<div class="owl-carousel top-buyers-slider owl-theme">
											<div class="item">
												<a href="author_detail_view.html" class="top-author-dt main-card">
													<span class="list-number">1</span>
													<div class="top-author-img">
														<img src="images/left-imgs/img-1.jpg" alt="">
														<span class="verif-badge">
															<svg width="20" height="20" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
														</span>
													</div>
													<h6 class="author-name">Larry_39</h6>
													<span>5.40 ETH</span>
												</a>
											</div>
											<div class="item">
												<a href="author_detail_view.html" class="top-author-dt main-card">
													<span class="list-number">2</span>
													<div class="top-author-img">
														<img src="images/left-imgs/img-2.jpg" alt="">
														<span class="verif-badge">
															<svg width="20" height="20" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
														</span>
													</div>
													<h6 class="author-name">Omnom</h6>
													<span>5.38 ETH</span>
												</a>
											</div>
											<div class="item">
												<a href="author_detail_view.html" class="top-author-dt main-card">
													<span class="list-number">3</span>
													<div class="top-author-img">
														<img src="images/left-imgs/img-3.jpg" alt="">
														<span class="verif-badge">
															<svg width="20" height="20" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
														</span>
													</div>
													<h6 class="author-name">Christie</h6>
													<span>5.34 ETH</span>
												</a>
											</div>
											<div class="item">
												<a href="author_detail_view.html" class="top-author-dt main-card">
													<span class="list-number">4</span>
													<div class="top-author-img">
														<img src="images/left-imgs/img-4.jpg" alt="">
														<span class="verif-badge">
															<svg width="20" height="20" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
														</span>
													</div>
													<h6 class="author-name">User_66</h6>
													<span>5.32 ETH</span>
												</a>
											</div>
											<div class="item">
												<a href="author_detail_view.html" class="top-author-dt main-card">
													<span class="list-number">5</span>
													<div class="top-author-img">
														<img src="images/left-imgs/img-5.jpg" alt="">
														<span class="verif-badge">
															<svg width="20" height="20" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
														</span>
													</div>
													<h6 class="author-name">Trevis</h6>
													<span>5.29 ETH</span>
												</a>
											</div>
											<div class="item">
												<a href="author_detail_view.html" class="top-author-dt main-card">
													<span class="list-number">6</span>
													<div class="top-author-img">
														<img src="images/left-imgs/img-6.jpg" alt="">
														<span class="verif-badge">
															<svg width="20" height="20" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
														</span>
													</div>
													<h6 class="author-name">Lizzy Wizzy</h6>
													<span>5.22 ETH</span>
												</a>
											</div>
											<div class="item">
												<a href="author_detail_view.html" class="top-author-dt main-card">
													<span class="list-number">7</span>
													<div class="top-author-img">
														<img src="images/left-imgs/img-7.jpg" alt="">
														<span class="verif-badge">
															<svg width="20" height="20" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
														</span>
													</div>
													<h6 class="author-name">Kok_Ross</h6>
													<span>5.21 ETH</span>
												</a>
											</div>
											<div class="item">
												<a href="author_detail_view.html" class="top-author-dt main-card">
													<span class="list-number">8</span>
													<div class="top-author-img">
														<img src="images/left-imgs/img-8.jpg" alt="">
														<span class="verif-badge">
															<svg width="20" height="20" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
														</span>
													</div>
													<h6 class="author-name">Loli Art</h6>
													<span>5.19 ETH</span>
												</a>
											</div>
											<div class="item">
												<a href="author_detail_view.html" class="top-author-dt main-card">
													<span class="list-number">9</span>
													<div class="top-author-img">
														<img src="images/left-imgs/img-9.jpg" alt="">
														<span class="verif-badge">
															<svg width="20" height="20" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
														</span>
													</div>
													<h6 class="author-name">John Doe</h6>
													<span>5.13 ETH</span>
												</a>
											</div>
											<div class="item">
												<a href="author_detail_view.html" class="top-author-dt main-card">
													<span class="list-number">10</span>
													<div class="top-author-img">
														<img src="images/left-imgs/img-10.jpg" alt="">
														<span class="verif-badge">
															<svg width="20" height="20" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
														</span>
													</div>
													<h6 class="author-name">EvenRai</h6>
													<span>5.08 ETH</span>
												</a>
											</div>
											<div class="item">
												<a href="author_detail_view.html" class="top-author-dt main-card">
													<span class="list-number">11</span>
													<div class="top-author-img">
														<img src="images/left-imgs/img-11.jpg" alt="">
														<span class="verif-badge">
															<svg width="20" height="20" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
														</span>
													</div>
													<h6 class="author-name">Bored Elon</h6>
													<span>4.58 ETH</span>
												</a>
											</div>
											<div class="item">
												<a href="author_detail_view.html" class="top-author-dt main-card">
													<span class="list-number">12</span>
													<div class="top-author-img">
														<img src="images/left-imgs/img-12.jpg" alt="">
														<span class="verif-badge">
															<svg width="20" height="20" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
														</span>
													</div>
													<h6 class="author-name">Elon Wong</h6>
													<span>4.40 ETH</span>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-12 col-lg-12">
						<div class="title-heading mt-5">
							<div class="main-title">
								<h4>Live Auctions </h4>
								<img src="images/fire.png" alt="burn-icon">
								<a href="#" class="view-link">View All<i class="uil uil-arrow-right ms-1"></i></a>
							</div>							
						</div>
						<div class="live-auctions-list">
							<div class="owl-carousel live-auctions-slider owl-theme">
								<div class="item">
									<div class="main-card">
										<a href="live_auction_item_view.html" class="nft-img">
											<img src="images/nft-imgs/img-1.jpg" alt="">
											<div class="live-time-limit">
												<span class="hr">01h</span>
												<span class="min">21m</span>
												<span class="sec">13s</span>
												left
												<span class="time-fire">
													<img src="images/fire.png" alt="burn-icon">
												</span>
											</div>
										</a>
										<div class="item-detail-group">
											<div class="item-creators-options">
												<div class="item-creators-group">
													<a href="#" class="creator-list" data-bs-toggle="tooltip" data-bs-placement="top" title="Collection : Ukiyox">
														<div class="item-creator-img">
															<img src="images/left-imgs/img-15.jpg" alt="">
															<span class="verif-badge-1">
																<svg width="14" height="14" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
															</span>
														</div>
													</a>
													<a href="#" class="creator-list" data-bs-toggle="tooltip" data-bs-placement="top" title="Owner : Elon Wang">
														<div class="item-creator-img">
															<img src="images/left-imgs/img-2.jpg" alt="">
															<span class="verif-badge-1">
																<svg width="14" height="14" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
															</span>
														</div>
													</a>
													<a href="#" class="creator-list" data-bs-toggle="tooltip" data-bs-placement="top" title="Creator : EvenRai">
														<div class="item-creator-img">
															<img src="images/left-imgs/img-3.jpg" alt="">
															<span class="verif-badge-1">
																<svg width="14" height="14" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
															</span>
														</div>
													</a>
												</div>
												<div class="more-option-list dropdown">
													<a href="#" class="option-more-btn" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
														<i class="uil uil-ellipsis-v"></i>
													</a>
													<ul class="dropdown-menu item-dropdown dropdown-menu-end">
														<li><a class="dropdown-item" href="#" role="button" data-bs-toggle="modal" data-bs-target="#shareModal">Share</a></li>
														<li><a class="dropdown-item" href="#" role="button" data-bs-toggle="modal" data-bs-target="#reportModal">Report</a></li>													
													</ul>
												</div>
											</div>
											<div class="item-text-dt">
												<a href="live_auction_item_view.html" class="item-title">The Digital IV london</a>
												<div class="bid-count">Highest bid <span class="total-bids-count">1/1</span></div>
												<div class="item-text-bottom">
													<span class="bid-value">0.02 wETH</span>
													<span class="like-btn"><i class="uil uil-heart"></i><ins>42</ins></span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="main-card">
										<a href="live_auction_item_view.html" class="nft-img">
											<img src="images/nft-imgs/img-2.jpg" alt="">
											<div class="live-time-limit">
												<span class="hr">02h</span>
												<span class="min">15m</span>
												<span class="sec">05s</span>
												left
												<span class="time-fire">
													<img src="images/fire.png" alt="burn-icon">
												</span>
											</div>
										</a>
										<div class="item-detail-group">
											<div class="item-creators-options">
												<div class="item-creators-group">
													<a href="#" class="creator-list" data-bs-toggle="tooltip" data-bs-placement="top" title="Owner : Elon Wang">
														<div class="item-creator-img">
															<img src="images/left-imgs/img-4.jpg" alt="">
															<span class="verif-badge-1">
																<svg width="14" height="14" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
															</span>
														</div>
													</a>
													<a href="#" class="creator-list" data-bs-toggle="tooltip" data-bs-placement="top" title="Creator : EvenRai">
														<div class="item-creator-img">
															<img src="images/left-imgs/img-5.jpg" alt="">
															<span class="verif-badge-1">
																<svg width="14" height="14" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
															</span>
														</div>
													</a>
												</div>
												<div class="more-option-list dropdown">
													<a href="#" class="option-more-btn" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
														<i class="uil uil-ellipsis-v"></i>
													</a>
													<ul class="dropdown-menu item-dropdown dropdown-menu-end">
														<li><a class="dropdown-item" href="#" role="button" data-bs-toggle="modal" data-bs-target="#shareModal">Share</a></li>
														<li><a class="dropdown-item" href="#" role="button" data-bs-toggle="modal" data-bs-target="#reportModal">Report</a></li>													
													</ul>
												</div>
											</div>
											<div class="item-text-dt">
												<a href="live_auction_item_view.html" class="item-title">The Digital Fragments</a>
												<div class="bid-count">Highest bid <span class="total-bids-count">1/1</span></div>
												<div class="item-text-bottom">
													<span class="bid-value">0.02 wETH</span>
													<span class="like-btn"><i class="uil uil-heart"></i><ins>35</ins></span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="main-card">
										<a href="live_auction_item_view.html" class="nft-img">
											<img src="images/nft-imgs/img-3.jpg" alt="">
											<div class="live-time-limit">
												<span class="hr">03h</span>
												<span class="min">25m</span>
												<span class="sec">18s</span>
												left
												<span class="time-fire">
													<img src="images/fire.png" alt="burn-icon">
												</span>
											</div>
										</a>
										<div class="item-detail-group">
											<div class="item-creators-options">
												<div class="item-creators-group">
													<a href="#" class="creator-list" data-bs-toggle="tooltip" data-bs-placement="top" title="Collection : Ukiyox">
														<div class="item-creator-img">
															<img src="images/left-imgs/img-15.jpg" alt="">
															<span class="verif-badge-1">
																<svg width="14" height="14" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
															</span>
														</div>
													</a>
													<a href="#" class="creator-list" data-bs-toggle="tooltip" data-bs-placement="top" title="Owner : Elon Wang">
														<div class="item-creator-img">
															<img src="images/left-imgs/img-2.jpg" alt="">
															<span class="verif-badge-1">
																<svg width="14" height="14" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
															</span>
														</div>
													</a>
													<a href="#" class="creator-list" data-bs-toggle="tooltip" data-bs-placement="top" title="Creator : EvenRai">
														<div class="item-creator-img">
															<img src="images/left-imgs/img-3.jpg" alt="">
															<span class="verif-badge-1">
																<svg width="14" height="14" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
															</span>
														</div>
													</a>
												</div>
												<div class="more-option-list dropdown">
													<a href="#" class="option-more-btn" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
														<i class="uil uil-ellipsis-v"></i>
													</a>
													<ul class="dropdown-menu item-dropdown dropdown-menu-end">
														<li><a class="dropdown-item" href="#" role="button" data-bs-toggle="modal" data-bs-target="#shareModal">Share</a></li>
														<li><a class="dropdown-item" href="#" role="button" data-bs-toggle="modal" data-bs-target="#reportModal">Report</a></li>													
													</ul>
												</div>
											</div>
											<div class="item-text-dt">
												<a href="live_auction_item_view.html" class="item-title">Shine Bright_00</a>
												<div class="bid-count">Highest bid <span class="total-bids-count">1/1</span></div>
												<div class="item-text-bottom">
													<span class="bid-value">0.008 wETH</span>
													<span class="like-btn"><i class="uil uil-heart"></i><ins>47</ins></span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="main-card">
										<a href="live_auction_item_view.html" class="nft-img">
											<img src="images/nft-imgs/img-4.jpg" alt="">
											<div class="live-time-limit">
												<span class="hr">04h</span>
												<span class="min">45m</span>
												<span class="sec">28s</span>
												left
												<span class="time-fire">
													<img src="images/fire.png" alt="burn-icon">
												</span>
											</div>
										</a>
										<div class="item-detail-group">
											<div class="item-creators-options">
												<div class="item-creators-group">
													<a href="#" class="creator-list" data-bs-toggle="tooltip" data-bs-placement="top" title="Owner : Elon Wang">
														<div class="item-creator-img">
															<img src="images/left-imgs/img-6.jpg" alt="">
															<span class="verif-badge-1">
																<svg width="14" height="14" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
															</span>
														</div>
													</a>
													<a href="#" class="creator-list" data-bs-toggle="tooltip" data-bs-placement="top" title="Creator : EvenRai">
														<div class="item-creator-img">
															<img src="images/left-imgs/img-7.jpg" alt="">
															<span class="verif-badge-1">
																<svg width="14" height="14" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
															</span>
														</div>
													</a>
												</div>
												<div class="more-option-list dropdown">
													<a href="#" class="option-more-btn" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
														<i class="uil uil-ellipsis-v"></i>
													</a>
													<ul class="dropdown-menu item-dropdown dropdown-menu-end">
														<li><a class="dropdown-item" href="#" role="button" data-bs-toggle="modal" data-bs-target="#shareModal">Share</a></li>
														<li><a class="dropdown-item" href="#" role="button" data-bs-toggle="modal" data-bs-target="#reportModal">Report</a></li>													
													</ul>
												</div>
											</div>
											<div class="item-text-dt">
												<a href="live_auction_item_view.html" class="item-title">Abstruct Future</a>
												<div class="bid-count">Highest bid <span class="total-bids-count">1/1</span></div>
												<div class="item-text-bottom">
													<span class="bid-value">0.1 wETH</span>
													<span class="like-btn"><i class="uil uil-heart"></i><ins>77</ins></span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="main-card">
										<a href="live_auction_item_view.html" class="nft-img">
											<img src="images/nft-imgs/img-5.jpg" alt="">
											<div class="live-time-limit">
												<span class="hr">05h</span>
												<span class="min">55m</span>
												<span class="sec">10s</span>
												left
												<span class="time-fire">
													<img src="images/fire.png" alt="burn-icon">
												</span>
											</div>
										</a>
										<div class="item-detail-group">
											<div class="item-creators-options">
												<div class="item-creators-group">
													<a href="#" class="creator-list" data-bs-toggle="tooltip" data-bs-placement="top" title="Collection : Ukiyox">
														<div class="item-creator-img">
															<img src="images/left-imgs/img-15.jpg" alt="">
															<span class="verif-badge-1">
																<svg width="14" height="14" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
															</span>
														</div>
													</a>
													<a href="#" class="creator-list" data-bs-toggle="tooltip" data-bs-placement="top" title="Owner : Elon Wang">
														<div class="item-creator-img">
															<img src="images/left-imgs/img-8.jpg" alt="">
															<span class="verif-badge-1">
																<svg width="14" height="14" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
															</span>
														</div>
													</a>
													<a href="#" class="creator-list" data-bs-toggle="tooltip" data-bs-placement="top" title="Creator : EvenRai">
														<div class="item-creator-img">
															<img src="images/left-imgs/img-9.jpg" alt="">
															<span class="verif-badge-1">
																<svg width="14" height="14" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
															</span>
														</div>
													</a>
												</div>
												<div class="more-option-list dropdown">
													<a href="#" class="option-more-btn" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
														<i class="uil uil-ellipsis-v"></i>
													</a>
													<ul class="dropdown-menu item-dropdown dropdown-menu-end">
														<li><a class="dropdown-item" href="#" role="button" data-bs-toggle="modal" data-bs-target="#shareModal">Share</a></li>
														<li><a class="dropdown-item" href="#" role="button" data-bs-toggle="modal" data-bs-target="#reportModal">Report</a></li>													
													</ul>
												</div>
											</div>
											<div class="item-text-dt">
												<a href="live_auction_item_view.html" class="item-title">Suffer the Consequences</a>
												<div class="bid-count">Highest bid <span class="total-bids-count">1/1</span></div>
												<div class="item-text-bottom">
													<span class="bid-value">0.18 wETH</span>
													<span class="like-btn"><i class="uil uil-heart"></i><ins>29</ins></span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="main-card">
										<a href="live_auction_item_view.html" class="nft-img">
											<img src="images/nft-imgs/img-6.jpg" alt="">
											<div class="live-time-limit">
												<span class="hr">06h</span>
												<span class="min">35m</span>
												<span class="sec">45s</span>
												left
												<span class="time-fire">
													<img src="images/fire.png" alt="burn-icon">
												</span>
											</div>
										</a>
										<div class="item-detail-group">
											<div class="item-creators-options">
												<div class="item-creators-group">
													<a href="#" class="creator-list" data-bs-toggle="tooltip" data-bs-placement="top" title="Owner : Elon Wang">
														<div class="item-creator-img">
															<img src="images/left-imgs/img-10.jpg" alt="">
															<span class="verif-badge-1">
																<svg width="14" height="14" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
															</span>
														</div>
													</a>
													<a href="#" class="creator-list" data-bs-toggle="tooltip" data-bs-placement="top" title="Creator : EvenRai">
														<div class="item-creator-img">
															<img src="images/left-imgs/img-11.jpg" alt="">
															<span class="verif-badge-1">
																<svg width="14" height="14" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
															</span>
														</div>
													</a>
												</div>
												<div class="more-option-list dropdown">
													<a href="#" class="option-more-btn" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
														<i class="uil uil-ellipsis-v"></i>
													</a>
													<ul class="dropdown-menu item-dropdown dropdown-menu-end">
														<li><a class="dropdown-item" href="#" role="button" data-bs-toggle="modal" data-bs-target="#shareModal">Share</a></li>
														<li><a class="dropdown-item" href="#" role="button" data-bs-toggle="modal" data-bs-target="#reportModal">Report</a></li>													
													</ul>
												</div>
											</div>
											<div class="item-text-dt">
												<a href="live_auction_item_view.html" class="item-title">The Digital Decode IV london</a>
												<div class="bid-count">Highest bid <span class="total-bids-count">1/1</span></div>
												<div class="item-text-bottom">
													<span class="bid-value">0.18 wETH</span>
													<span class="like-btn"><i class="uil uil-heart"></i><ins>26</ins></span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="main-card">
										<a href="live_auction_item_view.html" class="nft-img">
											<img src="images/nft-imgs/img-7.jpg" alt="">
											<div class="live-time-limit">
												<span class="hr">8h</span>
												<span class="min">24m</span>
												<span class="sec">18s</span>
												left
												<span class="time-fire">
													<img src="images/fire.png" alt="burn-icon">
												</span>
											</div>
										</a>
										<div class="item-detail-group">
											<div class="item-creators-options">
												<div class="item-creators-group">
													<a href="#" class="creator-list" data-bs-toggle="tooltip" data-bs-placement="top" title="Collection : Ukiyox">
														<div class="item-creator-img">
															<img src="images/left-imgs/img-15.jpg" alt="">
															<span class="verif-badge-1">
																<svg width="14" height="14" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
															</span>
														</div>
													</a>
													<a href="#" class="creator-list" data-bs-toggle="tooltip" data-bs-placement="top" title="Owner : Elon Wang">
														<div class="item-creator-img">
															<img src="images/left-imgs/img-12.jpg" alt="">
															<span class="verif-badge-1">
																<svg width="14" height="14" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
															</span>
														</div>
													</a>
													<a href="#" class="creator-list" data-bs-toggle="tooltip" data-bs-placement="top" title="Creator : EvenRai">
														<div class="item-creator-img">
															<img src="images/left-imgs/img-13.jpg" alt="">
															<span class="verif-badge-1">
																<svg width="14" height="14" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
															</span>
														</div>
													</a>
												</div>
												<div class="more-option-list dropdown">
													<a href="#" class="option-more-btn" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
														<i class="uil uil-ellipsis-v"></i>
													</a>
													<ul class="dropdown-menu item-dropdown dropdown-menu-end">
														<li><a class="dropdown-item" href="#" role="button" data-bs-toggle="modal" data-bs-target="#shareModal">Share</a></li>
														<li><a class="dropdown-item" href="#" role="button" data-bs-toggle="modal" data-bs-target="#reportModal">Report</a></li>													
													</ul>
												</div>
											</div>
											<div class="item-text-dt">
												<a href="live_auction_item_view.html" class="item-title">Smash the Window</a>
												<div class="bid-count">Highest bid <span class="total-bids-count">1/1</span></div>
												<div class="item-text-bottom">
													<span class="bid-value">0.25 wETH</span>
													<span class="like-btn"><i class="uil uil-heart"></i><ins>150</ins></span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="main-card">
										<a href="live_auction_item_view.html" class="nft-img">
											<img src="images/nft-imgs/img-8.jpg" alt="">
											<div class="live-time-limit">
												<span class="hr">10h</span>
												<span class="min">25m</span>
												<span class="sec">39s</span>
												left
												<span class="time-fire">
													<img src="images/fire.png" alt="burn-icon">
												</span>
											</div>
										</a>
										<div class="item-detail-group">
											<div class="item-creators-options">
												<div class="item-creators-group">
													<a href="#" class="creator-list" data-bs-toggle="tooltip" data-bs-placement="top" title="Collection : Ukiyox">
														<div class="item-creator-img">
															<img src="images/left-imgs/img-15.jpg" alt="">
															<span class="verif-badge-1">
																<svg width="14" height="14" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
															</span>
														</div>
													</a>
													<a href="#" class="creator-list" data-bs-toggle="tooltip" data-bs-placement="top" title="Owner : Elon Wang">
														<div class="item-creator-img">
															<img src="images/left-imgs/img-14.jpg" alt="">
															<span class="verif-badge-1">
																<svg width="14" height="14" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
															</span>
														</div>
													</a>
													<a href="#" class="creator-list" data-bs-toggle="tooltip" data-bs-placement="top" title="Creator : EvenRai">
														<div class="item-creator-img">
															<img src="images/left-imgs/img-3.jpg" alt="">
															<span class="verif-badge-1">
																<svg width="14" height="14" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
															</span>
														</div>
													</a>
												</div>
												<div class="more-option-list dropdown">
													<a href="#" class="option-more-btn" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
														<i class="uil uil-ellipsis-v"></i>
													</a>
													<ul class="dropdown-menu item-dropdown dropdown-menu-end">
														<li><a class="dropdown-item" href="#" role="button" data-bs-toggle="modal" data-bs-target="#shareModal">Share</a></li>
														<li><a class="dropdown-item" href="#" role="button" data-bs-toggle="modal" data-bs-target="#reportModal">Report</a></li>													
													</ul>
												</div>
											</div>
											<div class="item-text-dt">
												<a href="live_auction_item_view.html" class="item-title">Drive in the Sun</a>
												<div class="bid-count">Highest bid <span class="total-bids-count">1/1</span></div>
												<div class="item-text-bottom">
													<span class="bid-value">0.184 wETH</span>
													<span class="like-btn"><i class="uil uil-heart"></i><ins>129</ins></span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="main-card">
										<a href="live_auction_item_view.html" class="nft-img">
											<img src="images/nft-imgs/img-9.jpg" alt="">
											<div class="live-time-limit">
												<span class="hr">11h</span>
												<span class="min">29m</span>
												<span class="sec">05s</span>
												left
												<span class="time-fire">
													<img src="images/fire.png" alt="burn-icon">
												</span>
											</div>
										</a>
										<div class="item-detail-group">
											<div class="item-creators-options">
												<div class="item-creators-group">
													<a href="#" class="creator-list" data-bs-toggle="tooltip" data-bs-placement="top" title="Owner : Elon Wang">
														<div class="item-creator-img">
															<img src="images/left-imgs/img-3.jpg" alt="">
															<span class="verif-badge-1">
																<svg width="14" height="14" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
															</span>
														</div>
													</a>
													<a href="#" class="creator-list" data-bs-toggle="tooltip" data-bs-placement="top" title="Creator : EvenRai">
														<div class="item-creator-img">
															<img src="images/left-imgs/img-5.jpg" alt="">
															<span class="verif-badge-1">
																<svg width="14" height="14" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
															</span>
														</div>
													</a>
												</div>
												<div class="more-option-list dropdown">
													<a href="#" class="option-more-btn" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
														<i class="uil uil-ellipsis-v"></i>
													</a>
													<ul class="dropdown-menu item-dropdown dropdown-menu-end">
														<li><a class="dropdown-item" href="#" role="button" data-bs-toggle="modal" data-bs-target="#shareModal">Share</a></li>
														<li><a class="dropdown-item" href="#" role="button" data-bs-toggle="modal" data-bs-target="#reportModal">Report</a></li>													
													</ul>
												</div>
											</div>
											<div class="item-text-dt">
												<a href="live_auction_item_view.html" class="item-title">Personal Collection</a>
												<div class="bid-count">Highest bid <span class="total-bids-count">1/1</span></div>
												<div class="item-text-bottom">
													<span class="bid-value">0.15 wETH</span>
													<span class="like-btn"><i class="uil uil-heart"></i><ins>45</ins></span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="main-card">
										<a href="live_auction_item_view.html" class="nft-img">
											<img src="images/nft-imgs/img-10.jpg" alt="">
											<div class="live-time-limit">
												<span class="hr">13h</span>
												<span class="min">31m</span>
												<span class="sec">48s</span>
												left
												<span class="time-fire">
													<img src="images/fire.png" alt="burn-icon">
												</span>
											</div>
										</a>
										<div class="item-detail-group">
											<div class="item-creators-options">
												<div class="item-creators-group">
													<a href="#" class="creator-list" data-bs-toggle="tooltip" data-bs-placement="top" title="Collection : Ukiyox">
														<div class="item-creator-img">
															<img src="images/left-imgs/img-15.jpg" alt="">
															<span class="verif-badge-1">
																<svg width="14" height="14" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
															</span>
														</div>
													</a>
													<a href="#" class="creator-list" data-bs-toggle="tooltip" data-bs-placement="top" title="Owner : Elon Wang">
														<div class="item-creator-img">
															<img src="images/left-imgs/img-2.jpg" alt="">
															<span class="verif-badge-1">
																<svg width="14" height="14" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
															</span>
														</div>
													</a>
													<a href="#" class="creator-list" data-bs-toggle="tooltip" data-bs-placement="top" title="Creator : EvenRai">
														<div class="item-creator-img">
															<img src="images/left-imgs/img-3.jpg" alt="">
															<span class="verif-badge-1">
																<svg width="14" height="14" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
															</span>
														</div>
													</a>
												</div>
												<div class="more-option-list dropdown">
													<a href="#" class="option-more-btn" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
														<i class="uil uil-ellipsis-v"></i>
													</a>
													<ul class="dropdown-menu item-dropdown dropdown-menu-end">
														<li><a class="dropdown-item" href="#" role="button" data-bs-toggle="modal" data-bs-target="#shareModal">Share</a></li>
														<li><a class="dropdown-item" href="#" role="button" data-bs-toggle="modal" data-bs-target="#reportModal">Report</a></li>													
													</ul>
												</div>
											</div>
											<div class="item-text-dt">
												<a href="live_auction_item_view.html" class="item-title">Abstruct Life</a>
												<div class="bid-count">Highest bid <span class="total-bids-count">1/1</span></div>
												<div class="item-text-bottom">
													<span class="bid-value">0.74 wETH</span>
													<span class="like-btn"><i class="uil uil-heart"></i><ins>59</ins></span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-12 col-lg-12">
						<div class="title-heading mt-5">
							<div class="main-title">
								<h4>Hot bids </h4>
								<img src="images/fire.png" alt="burn-icon">
								<a href="#" class="view-link">View All<i class="uil uil-arrow-right ms-1"></i></a>
							</div>							
						</div>
						<div class="Hot-bids-list">
							<div class="owl-carousel hot-bids-slider owl-theme">
								<div class="item">
									<div class="main-card">
										<a href="item_view.html" class="nft-img">
											<img src="images/nft-imgs/img-11.jpg" alt="">
										</a>
										<div class="item-detail-group">
											<div class="item-creators-options">
												<div class="item-creators-group">
													<a href="#" class="creator-list" data-bs-toggle="tooltip" data-bs-placement="top" title="Collection : Ukiyox">
														<div class="item-creator-img">
															<img src="images/left-imgs/img-15.jpg" alt="">
															<span class="verif-badge-1">
																<svg width="14" height="14" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
															</span>
														</div>
													</a>
													<a href="#" class="creator-list" data-bs-toggle="tooltip" data-bs-placement="top" title="Owner : Elon Wang">
														<div class="item-creator-img">
															<img src="images/left-imgs/img-2.jpg" alt="">
															<span class="verif-badge-1">
																<svg width="14" height="14" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
															</span>
														</div>
													</a>
													<a href="#" class="creator-list" data-bs-toggle="tooltip" data-bs-placement="top" title="Creator : EvenRai">
														<div class="item-creator-img">
															<img src="images/left-imgs/img-3.jpg" alt="">
															<span class="verif-badge-1">
																<svg width="14" height="14" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
															</span>
														</div>
													</a>
												</div>
												<div class="more-option-list dropdown">
													<a href="#" class="option-more-btn" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
														<i class="uil uil-ellipsis-v"></i>
													</a>
													<ul class="dropdown-menu item-dropdown dropdown-menu-end">
														<li><a class="dropdown-item" href="#" role="button" data-bs-toggle="modal" data-bs-target="#shareModal">Share</a></li>
														<li><a class="dropdown-item" href="#" role="button" data-bs-toggle="modal" data-bs-target="#reportModal">Report</a></li>													
													</ul>
												</div>
											</div>
											<div class="item-text-dt">
												<a href="item_view.html" class="item-title">Smoke Boy</a>
												<div class="bid-count">5 ETH <span class="total-bids-count">1/1</span></div>
												<div class="item-text-bottom">
													<span class="bid-value">Bid 2.5 wETH</span>
													<span class="like-btn"><i class="uil uil-heart"></i><ins>197</ins></span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="main-card">
										<a href="item_view.html" class="nft-img">
											<img src="images/nft-imgs/img-10.jpg" alt="">
										</a>
										<div class="item-detail-group">
											<div class="item-creators-options">
												<div class="item-creators-group">
													<a href="#" class="creator-list" data-bs-toggle="tooltip" data-bs-placement="top" title="Collection : Ukiyox">
														<div class="item-creator-img">
															<img src="images/left-imgs/img-15.jpg" alt="">
															<span class="verif-badge-1">
																<svg width="14" height="14" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
															</span>
														</div>
													</a>
													<a href="#" class="creator-list" data-bs-toggle="tooltip" data-bs-placement="top" title="Owner : Elon Wang">
														<div class="item-creator-img">
															<img src="images/left-imgs/img-2.jpg" alt="">
															<span class="verif-badge-1">
																<svg width="14" height="14" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
															</span>
														</div>
													</a>
													<a href="#" class="creator-list" data-bs-toggle="tooltip" data-bs-placement="top" title="Creator : EvenRai">
														<div class="item-creator-img">
															<img src="images/left-imgs/img-3.jpg" alt="">
															<span class="verif-badge-1">
																<svg width="14" height="14" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
															</span>
														</div>
													</a>
												</div>
												<div class="more-option-list dropdown">
													<a href="#" class="option-more-btn" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
														<i class="uil uil-ellipsis-v"></i>
													</a>
													<ul class="dropdown-menu item-dropdown dropdown-menu-end">
														<li><a class="dropdown-item" href="#" role="button" data-bs-toggle="modal" data-bs-target="#shareModal">Share</a></li>
														<li><a class="dropdown-item" href="#" role="button" data-bs-toggle="modal" data-bs-target="#reportModal">Report</a></li>													
													</ul>
												</div>
											</div>
											<div class="item-text-dt">
												<a href="item_view.html" class="item-title">Abstruct Life</a>
												<div class="bid-count">Auction <span class="total-bids-count">1/1</span></div>
												<div class="item-text-bottom">
													<span class="bid-value">Bid 0.01 wETH</span>
													<span class="like-btn"><i class="uil uil-heart"></i><ins>78</ins></span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="main-card">
										<a href="item_view.html" class="nft-img">
											<img src="images/nft-imgs/img-6.jpg" alt="">
										</a>
										<div class="item-detail-group">
											<div class="item-creators-options">
												<div class="item-creators-group">
													<a href="#" class="creator-list" data-bs-toggle="tooltip" data-bs-placement="top" title="Owner : Elon Wang">
														<div class="item-creator-img">
															<img src="images/left-imgs/img-10.jpg" alt="">
															<span class="verif-badge-1">
																<svg width="14" height="14" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
															</span>
														</div>
													</a>
													<a href="#" class="creator-list" data-bs-toggle="tooltip" data-bs-placement="top" title="Creator : EvenRai">
														<div class="item-creator-img">
															<img src="images/left-imgs/img-11.jpg" alt="">
															<span class="verif-badge-1">
																<svg width="14" height="14" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
															</span>
														</div>
													</a>
												</div>
												<div class="more-option-list dropdown">
													<a href="#" class="option-more-btn" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
														<i class="uil uil-ellipsis-v"></i>
													</a>
													<ul class="dropdown-menu item-dropdown dropdown-menu-end">
														<li><a class="dropdown-item" href="#" role="button" data-bs-toggle="modal" data-bs-target="#shareModal">Share</a></li>
														<li><a class="dropdown-item" href="#" role="button" data-bs-toggle="modal" data-bs-target="#reportModal">Report</a></li>													
													</ul>
												</div>
											</div>
											<div class="item-text-dt">
												<a href="item_view.html" class="item-title">The Digital Decode IV london</a>
												<div class="bid-count">Not for sale <span class="total-bids-count">1/1</span></div>
												<div class="item-text-bottom">
													<span class="bid-value">Bid 1.36 wETH</span>
													<span class="like-btn"><i class="uil uil-heart"></i><ins>145</ins></span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="main-card">
										<a href="item_view.html" class="nft-img">
											<img src="images/nft-imgs/img-8.jpg" alt="">
										</a>
										<div class="item-detail-group">
											<div class="item-creators-options">
												<div class="item-creators-group">
													<a href="#" class="creator-list" data-bs-toggle="tooltip" data-bs-placement="top" title="Collection : Ukiyox">
														<div class="item-creator-img">
															<img src="images/left-imgs/img-15.jpg" alt="">
															<span class="verif-badge-1">
																<svg width="14" height="14" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
															</span>
														</div>
													</a>
													<a href="#" class="creator-list" data-bs-toggle="tooltip" data-bs-placement="top" title="Owner : Elon Wang">
														<div class="item-creator-img">
															<img src="images/left-imgs/img-14.jpg" alt="">
															<span class="verif-badge-1">
																<svg width="14" height="14" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
															</span>
														</div>
													</a>
													<a href="#" class="creator-list" data-bs-toggle="tooltip" data-bs-placement="top" title="Creator : EvenRai">
														<div class="item-creator-img">
															<img src="images/left-imgs/img-3.jpg" alt="">
															<span class="verif-badge-1">
																<svg width="14" height="14" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
															</span>
														</div>
													</a>
												</div>
												<div class="more-option-list dropdown">
													<a href="#" class="option-more-btn" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
														<i class="uil uil-ellipsis-v"></i>
													</a>
													<ul class="dropdown-menu item-dropdown dropdown-menu-end">
														<li><a class="dropdown-item" href="#" role="button" data-bs-toggle="modal" data-bs-target="#shareModal">Share</a></li>
														<li><a class="dropdown-item" href="#" role="button" data-bs-toggle="modal" data-bs-target="#reportModal">Report</a></li>													
													</ul>
												</div>
											</div>
											<div class="item-text-dt">
												<a href="item_view.html" class="item-title">Drive in the Sun</a>
												<div class="bid-count">Auction <span class="total-bids-count">1/1</span></div>
												<div class="item-text-bottom">
													<span class="bid-value">Bid 1 wETH</span>
													<span class="like-btn"><i class="uil uil-heart"></i><ins>81</ins></span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="main-card">
										<a href="item_view.html" class="nft-img">
											<img src="images/nft-imgs/img-9.jpg" alt="">
										</a>
										<div class="item-detail-group">
											<div class="item-creators-options">
												<div class="item-creators-group">
													<a href="#" class="creator-list" data-bs-toggle="tooltip" data-bs-placement="top" title="Owner : Elon Wang">
														<div class="item-creator-img">
															<img src="images/left-imgs/img-3.jpg" alt="">
															<span class="verif-badge-1">
																<svg width="14" height="14" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
															</span>
														</div>
													</a>
													<a href="#" class="creator-list" data-bs-toggle="tooltip" data-bs-placement="top" title="Creator : EvenRai">
														<div class="item-creator-img">
															<img src="images/left-imgs/img-5.jpg" alt="">
															<span class="verif-badge-1">
																<svg width="14" height="14" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
															</span>
														</div>
													</a>
												</div>
												<div class="more-option-list dropdown">
													<a href="#" class="option-more-btn" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
														<i class="uil uil-ellipsis-v"></i>
													</a>
													<ul class="dropdown-menu item-dropdown dropdown-menu-end">
														<li><a class="dropdown-item" href="#" role="button" data-bs-toggle="modal" data-bs-target="#shareModal">Share</a></li>
														<li><a class="dropdown-item" href="#" role="button" data-bs-toggle="modal" data-bs-target="#reportModal">Report</a></li>													
													</ul>
												</div>
											</div>
											<div class="item-text-dt">
												<a href="item_view.html" class="item-title">Personal Collection</a>
												<div class="bid-count">From<span class="bid-rate">2.5 ETH</span> <span class="total-bids-count">1/10</span></div>
												<div class="item-text-bottom">
													<span class="bid-value">Bid 0.02 wETH</span>
													<span class="like-btn"><i class="uil uil-heart"></i><ins>45</ins></span>
												</div>
											</div>
										</div>
									</div>
								</div>																	
								<div class="item">
									<div class="main-card">
										<a href="item_view.html" class="nft-img">
											<img src="images/nft-imgs/img-4.jpg" alt="">
										</a>
										<div class="item-detail-group">
											<div class="item-creators-options">
												<div class="item-creators-group">
													<a href="#" class="creator-list" data-bs-toggle="tooltip" data-bs-placement="top" title="Owner : Elon Wang">
														<div class="item-creator-img">
															<img src="images/left-imgs/img-6.jpg" alt="">
															<span class="verif-badge-1">
																<svg width="14" height="14" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
															</span>
														</div>
													</a>
													<a href="#" class="creator-list" data-bs-toggle="tooltip" data-bs-placement="top" title="Creator : EvenRai">
														<div class="item-creator-img">
															<img src="images/left-imgs/img-7.jpg" alt="">
															<span class="verif-badge-1">
																<svg width="14" height="14" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
															</span>
														</div>
													</a>
												</div>
												<div class="more-option-list dropdown">
													<a href="#" class="option-more-btn" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
														<i class="uil uil-ellipsis-v"></i>
													</a>
													<ul class="dropdown-menu item-dropdown dropdown-menu-end">
														<li><a class="dropdown-item" href="#" role="button" data-bs-toggle="modal" data-bs-target="#shareModal">Share</a></li>
														<li><a class="dropdown-item" href="#" role="button" data-bs-toggle="modal" data-bs-target="#reportModal">Report</a></li>													
													</ul>
												</div>
											</div>
											<div class="item-text-dt">
												<a href="item_view.html" class="item-title">Abstruct Future</a>
												<div class="bid-count">From<span class="bid-rate">40 ETH</span> <span class="total-bids-count">1/15</span></div>
												<div class="item-text-bottom">
													<span class="bid-value">Bid 3 wETH</span>
													<span class="like-btn"><i class="uil uil-heart"></i><ins>158</ins></span>
												</div>
											</div>
										</div>
									</div>
								</div>															
								<div class="item">
									<div class="main-card">
										<a href="item_view.html" class="nft-img">
											<img src="images/nft-imgs/img-5.jpg" alt="">
										</a>
										<div class="item-detail-group">
											<div class="item-creators-options">
												<div class="item-creators-group">
													<a href="#" class="creator-list" data-bs-toggle="tooltip" data-bs-placement="top" title="Collection : Ukiyox">
														<div class="item-creator-img">
															<img src="images/left-imgs/img-15.jpg" alt="">
															<span class="verif-badge-1">
																<svg width="14" height="14" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
															</span>
														</div>
													</a>
													<a href="#" class="creator-list" data-bs-toggle="tooltip" data-bs-placement="top" title="Owner : Elon Wang">
														<div class="item-creator-img">
															<img src="images/left-imgs/img-8.jpg" alt="">
															<span class="verif-badge-1">
																<svg width="14" height="14" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
															</span>
														</div>
													</a>
													<a href="#" class="creator-list" data-bs-toggle="tooltip" data-bs-placement="top" title="Creator : EvenRai">
														<div class="item-creator-img">
															<img src="images/left-imgs/img-9.jpg" alt="">
															<span class="verif-badge-1">
																<svg width="14" height="14" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
															</span>
														</div>
													</a>
												</div>
												<div class="more-option-list dropdown">
													<a href="#" class="option-more-btn" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
														<i class="uil uil-ellipsis-v"></i>
													</a>
													<ul class="dropdown-menu item-dropdown dropdown-menu-end">
														<li><a class="dropdown-item" href="#" role="button" data-bs-toggle="modal" data-bs-target="#shareModal">Share</a></li>
														<li><a class="dropdown-item" href="#" role="button" data-bs-toggle="modal" data-bs-target="#reportModal">Report</a></li>													
													</ul>
												</div>
											</div>
											<div class="item-text-dt">
												<a href="item_view.html" class="item-title">Suffer the Consequences</a>
												<div class="bid-count">From<span class="bid-rate">15 ETH</span> <span class="total-bids-count">1/10</span></div>
												<div class="item-text-bottom">
													<span class="bid-value">Bid 3 wETH</span>
													<span class="like-btn"><i class="uil uil-heart"></i><ins>394</ins></span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="main-card">
										<a href="item_view.html" class="nft-img">
											<img src="images/nft-imgs/img-7.jpg" alt="">
										</a>
										<div class="item-detail-group">
											<div class="item-creators-options">
												<div class="item-creators-group">
													<a href="#" class="creator-list" data-bs-toggle="tooltip" data-bs-placement="top" title="Collection : Ukiyox">
														<div class="item-creator-img">
															<img src="images/left-imgs/img-15.jpg" alt="">
															<span class="verif-badge-1">
																<svg width="14" height="14" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
															</span>
														</div>
													</a>
													<a href="#" class="creator-list" data-bs-toggle="tooltip" data-bs-placement="top" title="Owner : Elon Wang">
														<div class="item-creator-img">
															<img src="images/left-imgs/img-12.jpg" alt="">
															<span class="verif-badge-1">
																<svg width="14" height="14" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
															</span>
														</div>
													</a>
													<a href="#" class="creator-list" data-bs-toggle="tooltip" data-bs-placement="top" title="Creator : EvenRai">
														<div class="item-creator-img">
															<img src="images/left-imgs/img-13.jpg" alt="">
															<span class="verif-badge-1">
																<svg width="14" height="14" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
															</span>
														</div>
													</a>
												</div>
												<div class="more-option-list dropdown">
													<a href="#" class="option-more-btn" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
														<i class="uil uil-ellipsis-v"></i>
													</a>
													<ul class="dropdown-menu item-dropdown dropdown-menu-end">
														<li><a class="dropdown-item" href="#" role="button" data-bs-toggle="modal" data-bs-target="#shareModal">Share</a></li>
														<li><a class="dropdown-item" href="#" role="button" data-bs-toggle="modal" data-bs-target="#reportModal">Report</a></li>													
													</ul>
												</div>
											</div>
											<div class="item-text-dt">
												<a href="item_view.html" class="item-title">Smash the Window</a>
												<div class="bid-count">From<span class="bid-rate">15 ETH</span> <span class="total-bids-count">2/10</span></div>
												<div class="item-text-bottom">
													<span class="bid-value">Bid 3 wETH</span>
													<span class="like-btn"><i class="uil uil-heart"></i><ins>286</ins></span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="main-card">
										<a href="item_view.html" class="nft-img">
											<img src="images/nft-imgs/img-2.jpg" alt="">
										</a>
										<div class="item-detail-group">
											<div class="item-creators-options">
												<div class="item-creators-group">
													<a href="#" class="creator-list" data-bs-toggle="tooltip" data-bs-placement="top" title="Owner : Elon Wang">
														<div class="item-creator-img">
															<img src="images/left-imgs/img-4.jpg" alt="">
															<span class="verif-badge-1">
																<svg width="14" height="14" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
															</span>
														</div>
													</a>
													<a href="#" class="creator-list" data-bs-toggle="tooltip" data-bs-placement="top" title="Creator : EvenRai">
														<div class="item-creator-img">
															<img src="images/left-imgs/img-5.jpg" alt="">
															<span class="verif-badge-1">
																<svg width="14" height="14" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
															</span>
														</div>
													</a>
												</div>
												<div class="more-option-list dropdown">
													<a href="#" class="option-more-btn" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
														<i class="uil uil-ellipsis-v"></i>
													</a>
													<ul class="dropdown-menu item-dropdown dropdown-menu-end">
														<li><a class="dropdown-item" href="#" role="button" data-bs-toggle="modal" data-bs-target="#shareModal">Share</a></li>
														<li><a class="dropdown-item" href="#" role="button" data-bs-toggle="modal" data-bs-target="#reportModal">Report</a></li>													
													</ul>
												</div>
											</div>
											<div class="item-text-dt">
												<a href="item_view.html" class="item-title">The Digital Fragments</a>
												<div class="bid-count">Not for sale <span class="total-bids-count">1/1</span></div>
												<div class="item-text-bottom">
													<span class="bid-value">Bid 0.025 wETH</span>
													<span class="like-btn"><i class="uil uil-heart"></i><ins>35</ins></span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="main-card">
										<a href="item_view.html" class="nft-img">
											<img src="images/nft-imgs/img-3.jpg" alt="">
										</a>
										<div class="item-detail-group">
											<div class="item-creators-options">
												<div class="item-creators-group">
													<a href="#" class="creator-list" data-bs-toggle="tooltip" data-bs-placement="top" title="Collection : Ukiyox">
														<div class="item-creator-img">
															<img src="images/left-imgs/img-15.jpg" alt="">
															<span class="verif-badge-1">
																<svg width="14" height="14" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
															</span>
														</div>
													</a>
													<a href="#" class="creator-list" data-bs-toggle="tooltip" data-bs-placement="top" title="Owner : Elon Wang">
														<div class="item-creator-img">
															<img src="images/left-imgs/img-2.jpg" alt="">
															<span class="verif-badge-1">
																<svg width="14" height="14" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
															</span>
														</div>
													</a>
													<a href="#" class="creator-list" data-bs-toggle="tooltip" data-bs-placement="top" title="Creator : EvenRai">
														<div class="item-creator-img">
															<img src="images/left-imgs/img-3.jpg" alt="">
															<span class="verif-badge-1">
																<svg width="14" height="14" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
															</span>
														</div>
													</a>
												</div>
												<div class="more-option-list dropdown">
													<a href="#" class="option-more-btn" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
														<i class="uil uil-ellipsis-v"></i>
													</a>
													<ul class="dropdown-menu item-dropdown dropdown-menu-end">
														<li><a class="dropdown-item" href="#" role="button" data-bs-toggle="modal" data-bs-target="#shareModal">Share</a></li>
														<li><a class="dropdown-item" href="#" role="button" data-bs-toggle="modal" data-bs-target="#reportModal">Report</a></li>													
													</ul>
												</div>
											</div>
											<div class="item-text-dt">
												<a href="item_view.html" class="item-title">Shine Bright_00</a>
												<div class="bid-count">From<span class="bid-rate">10 ETH</span> <span class="total-bids-count">2/10</span></div>
												<div class="item-text-bottom">
													<span class="bid-value">Bid 0.5 wETH</span>
													<span class="like-btn"><i class="uil uil-heart"></i><ins>125</ins></span>
												</div>
											</div>
										</div>
									</div>
								</div>															
							</div>
						</div>
					</div>
					<div class="col-xl-12 col-lg-12">
						<div class="title-heading mt-5">
							<div class="main-title">
								<h4>Hot Collections </h4>
								<img src="images/explosion.png" alt="explosion-icon">
								<a href="#" class="view-link">View All<i class="uil uil-arrow-right ms-1"></i></a>
							</div>							
						</div>
						<div class="Hot-bids-list">
							<div class="owl-carousel hot-collection-slider owl-theme">
								<div class="item">
									<div class="main-card p-1">
										<a href="#" class="collection-bg coll-bg-1"></a>
										<div class="item-collection-meta">
											<a href="#" class="collection-avatar">
												<img src="images/left-imgs/img-3.jpg" alt="">
											</a>
											<h4 class="item-title mb-2">Inventory</h4>
											<span class="collection-series">Erc-1155</span>
										</div>
									</div>
								</div>	
								<div class="item">
									<div class="main-card p-1">
										<a href="#" class="collection-bg coll-bg-2"></a>
										<div class="item-collection-meta">
											<a href="#" class="collection-avatar">
												<img src="images/left-imgs/img-4.jpg" alt="">
												<span class="verif-badge">
													<svg width="20" height="20" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
												</span>
											</a>
											<h4 class="item-title mb-2">Beeple Round 2 Open Edition</h4>
											<span class="collection-series">Erc-721</span>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="main-card p-1">
										<a href="#" class="collection-bg coll-bg-3"></a>
										<div class="item-collection-meta">
											<a href="#" class="collection-avatar">
												<img src="images/left-imgs/img-5.jpg" alt="">
												<span class="verif-badge">
													<svg width="20" height="20" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
												</span>
											</a>
											<h4 class="item-title mb-2">Beeple Special Edition</h4>
											<span class="collection-series">Erc-721</span>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="main-card p-1">
										<a href="#" class="collection-bg coll-bg-4"></a>
										<div class="item-collection-meta">
											<a href="#" class="collection-avatar">
												<img src="images/left-imgs/img-6.jpg" alt="">
											</a>
											<h4 class="item-title mb-2">Floyd Mayweather Jr.</h4>
											<span class="collection-series">Erc-721</span>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="main-card p-1">
										<a href="#" class="collection-bg coll-bg-5"></a>
										<div class="item-collection-meta">
											<a href="#" class="collection-avatar">
												<img src="images/left-imgs/img-7.jpg" alt="">
												<span class="verif-badge">
													<svg width="20" height="20" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
												</span>
											</a>
											<h4 class="item-title mb-2">The Meta Key</h4>
											<span class="collection-series">Erc-1155</span>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="main-card p-1">
										<a href="#" class="collection-bg coll-bg-6"></a>
										<div class="item-collection-meta">
											<a href="#" class="collection-avatar">
												<img src="images/left-imgs/img-8.jpg" alt="">
											</a>
											<h4 class="item-title mb-2">Wrapped Cryptopunks</h4>
											<span class="collection-series">Erc-721</span>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="main-card p-1">
										<a href="#" class="collection-bg coll-bg-7"></a>
										<div class="item-collection-meta">
											<a href="#" class="collection-avatar">
												<img src="images/left-imgs/img-9.jpg" alt="">
												<span class="verif-badge">
													<svg width="20" height="20" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
												</span>
											</a>
											<h4 class="item-title mb-2">The Moment by Pak x Trevor Jones</h4>
											<span class="collection-series">Erc-721</span>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="main-card p-1">
										<a href="#" class="collection-bg coll-bg-8"></a>
										<div class="item-collection-meta">
											<a href="#" class="collection-avatar">
												<img src="images/left-imgs/img-10.jpg" alt="">
											</a>
											<h4 class="item-title mb-2">BoredApeYachtClub</h4>
											<span class="collection-series">Erc-721</span>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="main-card p-1">
										<a href="#" class="collection-bg coll-bg-9"></a>
										<div class="item-collection-meta">
											<a href="#" class="collection-avatar">
												<img src="images/left-imgs/img-11.jpg" alt="">
												<span class="verif-badge">
													<svg width="20" height="20" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
												</span>
											</a>
											<h4 class="item-title mb-2">ProphecyNFT</h4>
											<span class="collection-series">Erc-1155</span>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="main-card p-1">
										<a href="#" class="collection-bg coll-bg-10"></a>
										<div class="item-collection-meta">
											<a href="#" class="collection-avatar">
												<img src="images/left-imgs/img-12.jpg" alt="">
												<span class="verif-badge">
													<svg width="20" height="20" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
												</span>
											</a>
											<h4 class="item-title mb-2">NFTheft</h4>
											<span class="collection-series">Erc-721</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>					
				</div>
				<div class="row">
					<div class="col-xl-12 col-lg-12">
						<div class="line"></div>
						<div class="title-heading mt-5">
							<div class="main-title">
								<h4>Explore </h4>
								<div class="filter-sort">
									<div class="sorting-filter-select">
										<select class="selectpicker">
											<option value="recently_added" selected>Recently added</option>
											<option value="cheapest">Cheapest</option>
											<option value="highest_price">Highest price</option>
											<option value="most_liked">Most liked</option>
											<option value="verified_only">Verified only</option>
										</select>
									</div>								
									<a href="explore.html" class="view-link">View All<i class="uil uil-arrow-right ms-1"></i></a>
								</div>
							</div>							
						</div>
						<div class="explore-list-items">
							<div class="featured-controls">
								<ul>
									<li class="active mixitup-control-active" data-filter="*">All</li>
									<li data-filter=".art" class="">Art</li>
									<li data-filter=".photography" class="">Photography</li>
									<li data-filter=".games">Games</li>
									<li data-filter=".metaverses">Metaverses</li>
									<li data-filter=".music">Music</li>
									<li data-filter=".domains">Domains</li>
									<li data-filter=".memes">Memes</li>
									<li data-filter=".sports">Sports</li>
									<li data-filter=".trading__cards">Trading Cards</li>
								</ul>
							</div>
							<div class="row featured-filter">
								<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mix art photography trading__cards">
									<div class="main-card mt-30">
										<a href="item_view.html" class="nft-img">
											<img src="images/nft-imgs/img-2.jpg" alt="">
										</a>
										<div class="item-detail-group">
											<div class="item-creators-options">
												<div class="item-creators-group">
													<a href="#" class="creator-list" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Owner : Elon Wang">
														<div class="item-creator-img">
															<img src="images/left-imgs/img-4.jpg" alt="">
															<span class="verif-badge-1">
																<svg width="14" height="14" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
															</span>
														</div>
													</a>
													<a href="#" class="creator-list" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Creator : EvenRai">
														<div class="item-creator-img">
															<img src="images/left-imgs/img-5.jpg" alt="">
															<span class="verif-badge-1">
																<svg width="14" height="14" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
															</span>
														</div>
													</a>
												</div>
												<div class="more-option-list dropdown">
													<a href="#" class="option-more-btn" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
														<i class="uil uil-ellipsis-v"></i>
													</a>
													<ul class="dropdown-menu item-dropdown dropdown-menu-end">
														<li><a class="dropdown-item" href="#" role="button" data-bs-toggle="modal" data-bs-target="#shareModal">Share</a></li>
														<li><a class="dropdown-item" href="#" role="button" data-bs-toggle="modal" data-bs-target="#reportModal">Report</a></li>													
													</ul>
												</div>
											</div>
											<div class="item-text-dt">
												<a href="item_view.html" class="item-title">The Digital Fragments</a>
												<div class="bid-count">Highest bid <span class="total-bids-count">1/1</span></div>
												<div class="item-text-bottom">
													<span class="bid-value">0.02 wETH</span>
													<span class="like-btn"><i class="uil uil-heart"></i><ins>35</ins></span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mix art photography trading__cards memes">
									<div class="main-card mt-30">
										<a href="item_view.html" class="nft-img">
											<img src="images/nft-imgs/img-1.jpg" alt="">
										</a>
										<div class="item-detail-group">
											<div class="item-creators-options">
												<div class="item-creators-group">
													<a href="#" class="creator-list" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Collection : Ukiyox">
														<div class="item-creator-img">
															<img src="images/left-imgs/img-15.jpg" alt="">
															<span class="verif-badge-1">
																<svg width="14" height="14" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
															</span>
														</div>
													</a>
													<a href="#" class="creator-list" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Owner : Elon Wang">
														<div class="item-creator-img">
															<img src="images/left-imgs/img-2.jpg" alt="">
															<span class="verif-badge-1">
																<svg width="14" height="14" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
															</span>
														</div>
													</a>
													<a href="#" class="creator-list" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Creator : EvenRai">
														<div class="item-creator-img">
															<img src="images/left-imgs/img-3.jpg" alt="">
															<span class="verif-badge-1">
																<svg width="14" height="14" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
															</span>
														</div>
													</a>
												</div>
												<div class="more-option-list dropdown">
													<a href="#" class="option-more-btn" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
														<i class="uil uil-ellipsis-v"></i>
													</a>
													<ul class="dropdown-menu item-dropdown dropdown-menu-end">
														<li><a class="dropdown-item" href="#" role="button" data-bs-toggle="modal" data-bs-target="#shareModal">Share</a></li>
														<li><a class="dropdown-item" href="#" role="button" data-bs-toggle="modal" data-bs-target="#reportModal">Report</a></li>													
													</ul>
												</div>
											</div>
											<div class="item-text-dt">
												<a href="item_view.html" class="item-title">The Digital IV london</a>
												<div class="bid-count">Highest bid <span class="total-bids-count">1/1</span></div>
												<div class="item-text-bottom">
													<span class="bid-value">0.02 wETH</span>
													<span class="like-btn"><i class="uil uil-heart"></i><ins>42</ins></span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mix metaverses games sports">
									<div class="main-card mt-30">
										<a href="item_view.html" class="nft-img">
											<img src="images/nft-imgs/img-4.jpg" alt="">
										</a>
										<div class="item-detail-group">
											<div class="item-creators-options">
												<div class="item-creators-group">
													<a href="#" class="creator-list" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Owner : Elon Wang">
														<div class="item-creator-img">
															<img src="images/left-imgs/img-6.jpg" alt="">
															<span class="verif-badge-1">
																<svg width="14" height="14" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
															</span>
														</div>
													</a>
													<a href="#" class="creator-list" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Creator : EvenRai">
														<div class="item-creator-img">
															<img src="images/left-imgs/img-7.jpg" alt="">
															<span class="verif-badge-1">
																<svg width="14" height="14" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
															</span>
														</div>
													</a>
												</div>
												<div class="more-option-list dropdown">
													<a href="#" class="option-more-btn" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
														<i class="uil uil-ellipsis-v"></i>
													</a>
													<ul class="dropdown-menu item-dropdown dropdown-menu-end">
														<li><a class="dropdown-item" href="#" role="button" data-bs-toggle="modal" data-bs-target="#shareModal">Share</a></li>
														<li><a class="dropdown-item" href="#" role="button" data-bs-toggle="modal" data-bs-target="#reportModal">Report</a></li>													
													</ul>
												</div>
											</div>
											<div class="item-text-dt">
												<a href="item_view.html" class="item-title">Abstruct Future</a>
												<div class="bid-count">From<span class="bid-rate">40 ETH</span> <span class="total-bids-count">1/15</span></div>
												<div class="item-text-bottom">
													<span class="bid-value">Bid 3 wETH</span>
													<span class="like-btn"><i class="uil uil-heart"></i><ins>158</ins></span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mix music trading-cards art memes">
									<div class="main-card mt-30">
										<a href="item_view.html" class="nft-img">
											<img src="images/nft-imgs/img-5.jpg" alt="">
										</a>
										<div class="item-detail-group">
											<div class="item-creators-options">
												<div class="item-creators-group">
													<a href="#" class="creator-list" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Collection : Ukiyox">
														<div class="item-creator-img">
															<img src="images/left-imgs/img-15.jpg" alt="">
															<span class="verif-badge-1">
																<svg width="14" height="14" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
															</span>
														</div>
													</a>
													<a href="#" class="creator-list" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Owner : Elon Wang">
														<div class="item-creator-img">
															<img src="images/left-imgs/img-8.jpg" alt="">
															<span class="verif-badge-1">
																<svg width="14" height="14" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
															</span>
														</div>
													</a>
													<a href="#" class="creator-list" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Creator : EvenRai">
														<div class="item-creator-img">
															<img src="images/left-imgs/img-9.jpg" alt="">
															<span class="verif-badge-1">
																<svg width="14" height="14" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
															</span>
														</div>
													</a>
												</div>
												<div class="more-option-list dropdown">
													<a href="#" class="option-more-btn" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
														<i class="uil uil-ellipsis-v"></i>
													</a>
													<ul class="dropdown-menu item-dropdown dropdown-menu-end">
														<li><a class="dropdown-item" href="#" role="button" data-bs-toggle="modal" data-bs-target="#shareModal">Share</a></li>
														<li><a class="dropdown-item" href="#" role="button" data-bs-toggle="modal" data-bs-target="#reportModal">Report</a></li>													
													</ul>
												</div>
											</div>
											<div class="item-text-dt">
												<a href="item_view.html" class="item-title">Suffer the Consequences</a>
												<div class="bid-count">From<span class="bid-rate">15 ETH</span> <span class="total-bids-count">1/10</span></div>
												<div class="item-text-bottom">
													<span class="bid-value">Bid 3 wETH</span>
													<span class="like-btn"><i class="uil uil-heart"></i><ins>394</ins></span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mix metaverses games music domains">
									<div class="main-card mt-30">
										<a href="item_view.html" class="nft-img">
											<img src="images/nft-imgs/img-6.jpg" alt="">
										</a>
										<div class="item-detail-group">
											<div class="item-creators-options">
												<div class="item-creators-group">
													<a href="#" class="creator-list" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Owner : Elon Wang">
														<div class="item-creator-img">
															<img src="images/left-imgs/img-10.jpg" alt="">
															<span class="verif-badge-1">
																<svg width="14" height="14" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
															</span>
														</div>
													</a>
													<a href="#" class="creator-list" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Creator : EvenRai">
														<div class="item-creator-img">
															<img src="images/left-imgs/img-11.jpg" alt="">
															<span class="verif-badge-1">
																<svg width="14" height="14" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
															</span>
														</div>
													</a>
												</div>
												<div class="more-option-list dropdown">
													<a href="#" class="option-more-btn" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
														<i class="uil uil-ellipsis-v"></i>
													</a>
													<ul class="dropdown-menu item-dropdown dropdown-menu-end">
														<li><a class="dropdown-item" href="#" role="button" data-bs-toggle="modal" data-bs-target="#shareModal">Share</a></li>
														<li><a class="dropdown-item" href="#" role="button" data-bs-toggle="modal" data-bs-target="#reportModal">Report</a></li>													
													</ul>
												</div>
											</div>
											<div class="item-text-dt">
												<a href="item_view.html" class="item-title">The Digital Decode IV london</a>
												<div class="bid-count">Not for sale <span class="total-bids-count">1/1</span></div>
												<div class="item-text-bottom">
													<span class="bid-value">Bid 1.36 wETH</span>
													<span class="like-btn"><i class="uil uil-heart"></i><ins>145</ins></span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mix art photography trading-cards" style="">
									<div class="main-card mt-30">
										<a href="item_view.html" class="nft-img">
											<img src="images/nft-imgs/img-11.jpg" alt="">
										</a>
										<div class="item-detail-group">
											<div class="item-creators-options">
												<div class="item-creators-group">
													<a href="#" class="creator-list" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Collection : Ukiyox">
														<div class="item-creator-img">
															<img src="images/left-imgs/img-15.jpg" alt="">
															<span class="verif-badge-1">
																<svg width="14" height="14" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
															</span>
														</div>
													</a>
													<a href="#" class="creator-list" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Owner : Elon Wang">
														<div class="item-creator-img">
															<img src="images/left-imgs/img-2.jpg" alt="">
															<span class="verif-badge-1">
																<svg width="14" height="14" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
															</span>
														</div>
													</a>
													<a href="#" class="creator-list" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Creator : EvenRai">
														<div class="item-creator-img">
															<img src="images/left-imgs/img-3.jpg" alt="">
															<span class="verif-badge-1">
																<svg width="14" height="14" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
															</span>
														</div>
													</a>
												</div>
												<div class="more-option-list dropdown">
													<a href="#" class="option-more-btn" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
														<i class="uil uil-ellipsis-v"></i>
													</a>
													<ul class="dropdown-menu item-dropdown dropdown-menu-end">
														<li><a class="dropdown-item" href="#" role="button" data-bs-toggle="modal" data-bs-target="#shareModal">Share</a></li>
														<li><a class="dropdown-item" href="#" role="button" data-bs-toggle="modal" data-bs-target="#reportModal">Report</a></li>													
													</ul>
												</div>
											</div>
											<div class="item-text-dt">
												<a href="item_view.html" class="item-title">Smoke Boy</a>
												<div class="bid-count">5 ETH <span class="total-bids-count">1/1</span></div>
												<div class="item-text-bottom">
													<span class="bid-value">Bid 2.5 wETH</span>
													<span class="like-btn"><i class="uil uil-heart"></i><ins>197</ins></span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mix photography sports games">
									<div class="main-card mt-30">
										<a href="item_view.html" class="nft-img">
											<img src="images/nft-imgs/img-9.jpg" alt="">
										</a>
										<div class="item-detail-group">
											<div class="item-creators-options">
												<div class="item-creators-group">
													<a href="#" class="creator-list" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Owner : Elon Wang">
														<div class="item-creator-img">
															<img src="images/left-imgs/img-3.jpg" alt="">
															<span class="verif-badge-1">
																<svg width="14" height="14" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
															</span>
														</div>
													</a>
													<a href="#" class="creator-list" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Creator : EvenRai">
														<div class="item-creator-img">
															<img src="images/left-imgs/img-5.jpg" alt="">
															<span class="verif-badge-1">
																<svg width="14" height="14" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
															</span>
														</div>
													</a>
												</div>
												<div class="more-option-list dropdown">
													<a href="#" class="option-more-btn" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
														<i class="uil uil-ellipsis-v"></i>
													</a>
													<ul class="dropdown-menu item-dropdown dropdown-menu-end">
														<li><a class="dropdown-item" href="#" role="button" data-bs-toggle="modal" data-bs-target="#shareModal">Share</a></li>
														<li><a class="dropdown-item" href="#" role="button" data-bs-toggle="modal" data-bs-target="#reportModal">Report</a></li>													
													</ul>
												</div>
											</div>
											<div class="item-text-dt">
												<a href="item_view.html" class="item-title">Personal Collection</a>
												<div class="bid-count">From<span class="bid-rate">2.5 ETH</span> <span class="total-bids-count">1/10</span></div>
												<div class="item-text-bottom">
													<span class="bid-value">Bid 0.02 wETH</span>
													<span class="like-btn"><i class="uil uil-heart"></i><ins>45</ins></span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mix art domains metaverses">
									<div class="main-card mt-30">
										<a href="item_view.html" class="nft-img">
											<img src="images/nft-imgs/img-3.jpg" alt="">
										</a>
										<div class="item-detail-group">
											<div class="item-creators-options">
												<div class="item-creators-group">
													<a href="#" class="creator-list" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Collection : Ukiyox">
														<div class="item-creator-img">
															<img src="images/left-imgs/img-15.jpg" alt="">
															<span class="verif-badge-1">
																<svg width="14" height="14" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
															</span>
														</div>
													</a>
													<a href="#" class="creator-list" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Owner : Elon Wang">
														<div class="item-creator-img">
															<img src="images/left-imgs/img-2.jpg" alt="">
															<span class="verif-badge-1">
																<svg width="14" height="14" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
															</span>
														</div>
													</a>
													<a href="#" class="creator-list" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Creator : EvenRai">
														<div class="item-creator-img">
															<img src="images/left-imgs/img-3.jpg" alt="">
															<span class="verif-badge-1">
																<svg width="14" height="14" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
															</span>
														</div>
													</a>
												</div>
												<div class="more-option-list dropdown">
													<a href="#" class="option-more-btn" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
														<i class="uil uil-ellipsis-v"></i>
													</a>
													<ul class="dropdown-menu item-dropdown dropdown-menu-end">
														<li><a class="dropdown-item" href="#" role="button" data-bs-toggle="modal" data-bs-target="#shareModal">Share</a></li>
														<li><a class="dropdown-item" href="#" role="button" data-bs-toggle="modal" data-bs-target="#reportModal">Report</a></li>													
													</ul>
												</div>
											</div>
											<div class="item-text-dt">
												<a href="item_view.html" class="item-title">Shine Bright_00</a>
												<div class="bid-count">From<span class="bid-rate">10 ETH</span> <span class="total-bids-count">2/10</span></div>
												<div class="item-text-bottom">
													<span class="bid-value">Bid 0.5 wETH</span>
													<span class="like-btn"><i class="uil uil-heart"></i><ins>125</ins></span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mix photography sports games">
									<div class="main-card mt-30">
										<a href="item_view.html" class="nft-img">
											<img src="images/nft-imgs/img-2.jpg" alt="">
										</a>
										<div class="item-detail-group">
											<div class="item-creators-options">
												<div class="item-creators-group">
													<a href="#" class="creator-list" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Owner : Elon Wang">
														<div class="item-creator-img">
															<img src="images/left-imgs/img-3.jpg" alt="">
															<span class="verif-badge-1">
																<svg width="14" height="14" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
															</span>
														</div>
													</a>
													<a href="#" class="creator-list" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Creator : EvenRai">
														<div class="item-creator-img">
															<img src="images/left-imgs/img-5.jpg" alt="">
															<span class="verif-badge-1">
																<svg width="14" height="14" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z" fill="#ffdb45"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z" fill="#111111"></path></svg>
															</span>
														</div>
													</a>
												</div>
												<div class="more-option-list dropdown">
													<a href="#" class="option-more-btn" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
														<i class="uil uil-ellipsis-v"></i>
													</a>
													<ul class="dropdown-menu item-dropdown dropdown-menu-end">
														<li><a class="dropdown-item" href="#" role="button" data-bs-toggle="modal" data-bs-target="#shareModal">Share</a></li>
														<li><a class="dropdown-item" href="#" role="button" data-bs-toggle="modal" data-bs-target="#reportModal">Report</a></li>													
													</ul>
												</div>
											</div>
											<div class="item-text-dt">
												<a href="item_view.html" class="item-title">Personal Collection</a>
												<div class="bid-count">From<span class="bid-rate">2.5 ETH</span> <span class="total-bids-count">1/10</span></div>
												<div class="item-text-bottom">
													<span class="bid-value">Bid 0.02 wETH</span>
													<span class="like-btn"><i class="uil uil-heart"></i><ins>45</ins></span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-12 text-center">
									<button class="main-btn btn-hover h-40 mt-5 mb-3">Load More</button>
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
			<div class="footer_middle">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-4 col-md-6">
							<div class="footer-content">
								<h4 class="footer-title txt-center">Get the latest Ukiyox updates</h4>
								<div class="footer-updates">
									<div class="subscribe-email-group">
										<input class="input-control" type="email" placeholder="Your e-mail">
										<button class="subscribe-btn btn-hover" type="submit">I'm in</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer_bottom">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<ul class="footer_left">
								<li>											
									<div class="footer_logo">
										<a href="index.html"><img src="images/footer_logo.svg" alt=""></a>
									</div>
								</li>
								<li>
									<p><i class="uil uil-copyright"></i> 2022 <strong>Ukiyox</strong>. All Rights Reserved.</p>
								</li>
							</ul>
						</div>
						<div class="col-md-6">
							<ul class="footer_bottom_links">
								<li>
									<a href="privacy_policy.html">Privacy Policy</a>
								</li>
								<li>
									<a href="terms.html">Terms</a>
								</li>
							</ul>
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
	
</body>
</html>