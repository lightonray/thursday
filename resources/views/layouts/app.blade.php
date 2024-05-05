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
                    <button type="button" class="btn-close responsive-close-btn" data-bs-dismiss="modal"
                        aria-label="Close"><i class="uil uil-multiply"></i></button>
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
                                <label for="eth_amount" class="form-label">You Pay* <span>Max amount is 0
                                        wETH</span></label>
                                <input class="input-control" type="text" id="eth_amount" value=""
                                    placeholder="Enter Amount">
                                <span class="input-badge">ETH</span>
                            </div>
                            <div class="convert-icon text-center mt-4">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path fill="#111111"
                                        d="M18,10a1,1,0,0,0-1-1H5.41l2.3-2.29A1,1,0,0,0,6.29,5.29l-4,4a1,1,0,0,0-.21,1.09A1,1,0,0,0,3,11H17A1,1,0,0,0,18,10Zm3.92,3.62A1,1,0,0,0,21,13H7a1,1,0,0,0,0,2H18.59l-2.3,2.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l4-4A1,1,0,0,0,21.92,13.62Z" />
                                </svg>
                            </div>
                            <div class="form-group position-relative mt-4">
                                <label for="received_amount" class="form-label">You Receive*</label>
                                <input class="input-control" type="text" id="received_amount" value=""
                                    placeholder="Amount you will receive">
                                <span class="input-badge">WETH</span>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn main-btn btn-hover w-100 h-40"
                        data-bs-target="#resetpasswordModal" data-bs-toggle="modal"
                        data-bs-dismiss="modal">Convert</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Covert Model End-->
    <!-- Add Funds Model Start-->
    <div class="modal fade" id="addfundModalToggle1" aria-hidden="true" aria-labelledby="addfundModalToggleLabel1"
        tabindex="-1">
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
                                        <input type="number" name="amount" id="amount" autocomplete="off"
                                            value="0">
                                    </div>
                                    <div class="cypto-category">
                                        <span>~ETH</span>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="selection-block mt_2">
                                                <label for="weth_amount" class="form-label">Pay with*<span>30 assets
                                                        supported</span></label>
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
                                                <label for="weth_amount" class="form-label">Destination*<span>20+
                                                        assets supported</span></label>
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
                                                <input class="input-control" type="text" id="weth_amount"
                                                    value="0x00d1c07da4447aebb7b63f456444e6572c000000"
                                                    placeholder="Your ETH address">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="selection-block mt_2">
                                                <label class="form-label">Select payment method*</label>
                                                <div class="form-group">
                                                    <div class="select_payment_method">
                                                        <input type="radio" class="btn-check"
                                                            name="options-outlined" id="apple-pay-method">
                                                        <label
                                                            class="select_payment_method--btn select_payment_method_option me-3"
                                                            for="apple-pay-method">
                                                            <img src="images/apple-card.png" alt="apple-card">
                                                            Apple Pay
                                                        </label>

                                                        <input type="radio" class="btn-check"
                                                            name="options-outlined" id="payment-card-method">
                                                        <label
                                                            class="select_payment_method--btn select_payment_method_option ms-3"
                                                            for="payment-card-method">
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
                                                                Transaction fee <span class="tooltip-check ms-1"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    title="Ukiyox charges a standard transaction fee for currency exchanges. This is the only fee associated with Ukiyox, there are no other hidden fees."><i
                                                                        class="uil uil-question-circle"></i></span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="receipt-main-text">
                                                            <div class="receipt-text-left">
                                                                Network fee <span class="tooltip-check ms-1"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    title="To ensure transactions are processed on blockchain network, purchases sent to external wallet addresses are charged a mining or network fee. This fee is paid directly to the miners."><i
                                                                        class="uil uil-question-circle"></i></span>
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
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="authorizeCheck">
                                                <label class="form_check--label " for="authorizeCheck">
                                                    I authorize Wyre to debit my account indicated for the amount above
                                                    on today’s date, and I agree to <a href="#">Ukiyo's terms</a>
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
                    <button class="btn main-btn btn-hover h-40" data-bs-target="#addfundModalToggle2"
                        data-bs-toggle="modal" data-bs-dismiss="modal">Next</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="addfundModalToggle2" aria-hidden="true" aria-labelledby="addfundModalToggleLabel2"
        tabindex="-1">
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
                                                <h6>Enter your personal information as it appears on your bank account
                                                </h6>
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
                                                <input class="input-control" type="text" id="first_name"
                                                    value="" placeholder="First name">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="selection-block mt_2">
                                                <label for="last_name" class="form-label">Last Name*</label>
                                                <input class="input-control" type="text" id="last_name"
                                                    value="" placeholder="Last name">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="selection-block mt_2">
                                                <label for="card_number" class="form-label">Card Number*</label>
                                                <input class="input-control" type="text" id="card_number"
                                                    value="" placeholder="Card number">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="selection-block mt_2">
                                                <label for="card_expiration" class="form-label">Expiration**</label>
                                                <input class="input-control" type="tel" id="card_expiration"
                                                    value="" placeholder="MM/YY">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="selection-block mt_2">
                                                <label for="card_cvv" class="form-label">Cvv*</label>
                                                <input class="input-control" type="password" id="card_cvv"
                                                    value="" placeholder="Cvv">
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
                                                    <select class="selectpicker" title="Select Country"
                                                        data-size="5">
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
                                                    <input class="input-control" type="text" id="info_state"
                                                        value="" placeholder="Enter a state">
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="selection-block mt_2">
                                                    <label for="info_address" class="form-label">Address*</label>
                                                    <input class="input-control" type="text" id="info_address"
                                                        value="" placeholder="Enter an address">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="selection-block mt_2">
                                                    <label for="info_zipCode" class="form-label">Postal / ZIP
                                                        code*</label>
                                                    <input class="input-control" type="text" id="info_zipCode"
                                                        value="" placeholder="Enter zip code">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="selection-block mt_2">
                                                    <label for="info_city" class="form-label">City*</label>
                                                    <input class="input-control" type="text" id="info_city"
                                                        value="" placeholder="Enter city">
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
                                                    <label for="contact_email" class="form-label">Email
                                                        Address*</label>
                                                    <input class="input-control" type="email" id="contact_email"
                                                        value="" placeholder="Enter zip code">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="selection-block mt_2">
                                                    <label for="contact_phoneNumber" class="form-label">Phone
                                                        Number*</label>
                                                    <input class="input-control" type="tel"
                                                        id="contact_phoneNumber" value=""
                                                        placeholder="Enter phone number">
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
                    <button class="btn back-btn btn-hover h-40" data-bs-target="#addfundModalToggle1"
                        data-bs-toggle="modal" data-bs-dismiss="modal">Back</button>
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
                        <p class="reporting-text">Describe why you think this item should be removed from marketplace
                        </p>
                        <form>
                            <div class="form-group position-relative">
                                <label for="reporting_msg" class="form-label">Message*</label>
                                <textarea class="textarea-control" id="reporting_msg" placeholder="Tell us some details"></textarea>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn back-btn btn-hover h-40" data-bs-target="#reportModal" data-bs-toggle="modal"
                        data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn main-btn btn-hover h-40">Report</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Report Model End-->
    <!-- Edit Profile Model Start-->
    <div class="modal fade" id="editprofileModal" tabindex="-1" aria-labelledby="editprofileModalLabel"
        aria-hidden="true">
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
                                <input class="input-control" type="text" id="display_name" value=""
                                    placeholder="Enter your display name">
                            </div>
                            <div class="form-group position-relative mt_2">
                                <label for="custom_url" class="form-label">Custom URL*</label>
                                <input class="input-control" type="text" id="custom_url" value=""
                                    placeholder="Enter your custom URL">
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
                                    <input class="input-control" type="text" id="twitter_username" value=""
                                        placeholder="Enter your name in Twitter">
                                    <span class="percentage-badge"><i class="uil uil-at"></i></span>
                                    <div class="bottom-text">
                                        <span>Link your Twitter account to gain more trust on the marketplace</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group position-relative mt_2">
                                <label for="site" class="form-label">Personal site or portfolio*</label>
                                <input class="input-control" type="text" id="site" value=""
                                    placeholder="Enter your Personal site or portfolio">
                                <div class="bottom-text">
                                    <span>https/</span>
                                </div>
                            </div>
                            <div class="form-group mt_2">
                                <label for="email_id" class="form-label">Email*</label>
                                <div class="position-relative">
                                    <input class="input-control" type="text" id="email_id" value=""
                                        placeholder="Enter your email">
                                    <div class="percentage-badge"><a href="#">Confirm</a></div>
                                    <div class="bottom-text">
                                        <span>Your email for marketplace notifications</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt_2">
                                <div class="form-label">Verification*</div>
                                <div class="verification-content">
                                    <p>Proceed with verification process to get more visibility and gain trust on Ukiyox
                                        Marketplace. Please allow up to several weeks for the process.</p>
                                    <div class="verify-btn-area">
                                        <button class="btn verify-btn btn-hover h-40" type="button">Get
                                            Verified</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn main-btn btn-hover w-100 h-40" data-bs-toggle="modal"
                        data-bs-dismiss="modal">Update Profile</button>
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
            <a href="index.html"><img style="width: 120px" src="assets/img/logo/thursdaylogo.png"
                    alt=""></a>
        </div>
        <div class="main_logo" id="logo">
            <a href="index.html"><img style="width: 120px" class="logo-main" src="assets/img/logo/thursdaylogo.png"
                    alt=""></a>
            <a href="index.html"><img style="width: 120px" class="logo-inverse"
                    src="assets/img/logo/thursdaylogo.png" alt=""></a>
        </div>
        <div class="header_search">
            <form class="search-input">
                <input type="text" class="header-input-control"
                    placeholder="Search by creator, collectible or collection">
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
                    <a href="#" class="header_links" role="button" data-bs-toggle="dropdown"
                        data-bs-auto-close="outside" aria-expanded="false">
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
                                                <svg width="20" height="20" viewBox="0 0 12 12"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z"
                                                        fill="#ffdb45"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z"
                                                        fill="#111111"></path>
                                                </svg>
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
                                                <svg width="20" height="20" viewBox="0 0 12 12"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z"
                                                        fill="#ffdb45"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z"
                                                        fill="#111111"></path>
                                                </svg>
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
                                                <svg width="20" height="20" viewBox="0 0 12 12"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z"
                                                        fill="#ffdb45"></path>
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z"
                                                        fill="#111111"></path>
                                                </svg>
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
                    <a href="#" class="header_links" role="button" data-bs-toggle="dropdown"
                        data-bs-auto-close="outside" aria-expanded="false">
                        <i class="uil uil-bell"></i>
                        <span class="activity-badge">5</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-activity dropdown-menu-end">
                        <div class="activity-new-item">
                            <div class="activity-list-header">
                                <h6>Notifications</h6>
                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                    title="Receive Email Notification"><i class="uil uil-cog"></i>Setting</a>
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
                                            <a href="#" class="activity-title font-14">To Infinity And
                                                Beyond</a>
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
                                            <a href="#" class="activity-title font-14">Tomb of Cyrus the
                                                Great</a>
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
                                            <span class="main-badge purchased-bg"><i
                                                    class="uil uil-shopping-cart-alt"></i></span>
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
                    <a href="#" class="header-account" role="button" data-bs-toggle="dropdown"
                        data-bs-auto-close="outside" aria-expanded="false">
                        <span>0 <ins>UKI</ins></span>
                        <img src="images/left-imgs/img-10.jpg" alt="avatar">
                    </a>
                    <div class="dropdown-menu dropdown-menu-account dropdown-menu-end">
                        <div class="account_name">
                            <div class="name_dt">
                                <h4>Joginder Singh</h4>
                                <button class="copy_btn"><i class="uil uil-copy"></i></button>
                            </div>
                            <a href="#" class="set_name"><i class="uil uil-edit-alt me-2"></i>Set Display
                                Name</a>
                        </div>
                        <div class="account_balance_dt">
                            <div class="account_balance_dt_group d-flex align-items-center">
                                <div class="acount_balance_eth_dt">
                                    <div class="eth_circle">
                                        <svg viewBox="0 0 16 16" fill="none" width="20" height="20">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M3.625 8L8 10.625L12.375 8L8 1L3.625 8ZM3.625 8.875L8 11.5L12.375 8.875L8 15L3.625 8.875Z"
                                                fill="#fff"></path>
                                        </svg>
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
                                        <svg viewBox="0 0 16 16" fill="none" width="20" height="20">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M3.625 8L8 10.625L12.375 8L8 1L3.625 8ZM3.625 8.875L8 11.5L12.375 8.875L8 15L3.625 8.875Z"
                                                fill="#fff"></path>
                                        </svg>
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
                                <button class="btn convert-btn btn-hover" data-bs-toggle="modal"
                                    data-bs-target="#convertModal"><i class="uil uil-exchange"></i></button>
                            </div>
                            <div class="btn_groups">
                                <a class="btn main-btn btn-hover w-100" role="button" href="#addfundModalToggle1"
                                    data-bs-toggle="modal">Add Funds with Cards</a>
                            </div>
                        </div>
                        <ul>
                            <li><a class="dropdown-item" href="create.html">Create</a></li>
                            <li><a class="dropdown-item" href="my_profile_detail_view_created.html">My Items</a></li>
                            <li><a class="dropdown-item" href="#editprofileModal" data-bs-toggle="modal"
                                    role="button">Edit Profile</a></li>
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
                                <form action="{{ route('logout') }}" method="POST" style="display: none;"
                                    id="logout-form">
                                    @csrf
                                </form>
                                <a class="dropdown-item text-center" href="#"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
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
        <div class="left_section menu_left" id="js-menu">
            <div class="left_section">
                <ul>
                    <!-- Dashboard Section -->
                    <li class="menu--item mb-2 mt-2">
                        <a href="{{ route('user.dashboard') }}" class="menu--link active" title="Dashboard">
                            <i class='uil uil-home-alt menu--icon'></i>
                            <span class="menu--label">Dashboard</span>
                        </a>
                    </li>
            
                    <!-- Bot Settings Section -->
                    <li class="menu--item mb-2">
                        <div style="margin-left: 5px"><span style="font-size: 14px;" class="menu--label">Bot Settings</span></div>
                            <li class="menu--item mb-2">
                                <a href="{{ route('user.exchange') }}" class="menu--link" title="Exchange">
                                    <i class='uil uil-exchange menu--icon'></i>
                                    <span class="menu--label">Exchange</span>
                                </a>
                            </li>
                            <li class="menu--item mb-2">
                                <a href="bot_control.html" class="menu--link" title="Bot Control">
                                    <i class='uil uil-robot menu--icon'></i>
                                    <span class="menu--label">Bot Control</span>
                                </a>
                            </li>
                    </li>
            
                    <!-- Strategies Section -->
                    <li class="menu--item mb-2">
                        <div style="margin-left: 5px"><span style="font-size: 14px;" class="menu--label">Strategies</span></div>
                            <li class="menu--item mb-2">
                                <a href="my_strategies.html" class="menu--link" title="My Strategies">
                                    <i class='uil uil-chart-line menu--icon'></i>
                                    <span class="menu--label">My Strategies</span>
                                </a>
                            </li>
                            <li class="menu--item mb-2">
                                <a href="strategies_market.html" class="menu--link" title="Strategies Market">
                                    <i class='uil-shop menu--icon'></i>
                                    <span class="menu--label">Strategies Market</span>
                                </a>
                            </li>
                    </li>
            
                    <!-- Smart Trade Section -->
                    <li class="menu--item mb-2">
                        <div style="margin-left: 5px"><span style="font-size: 14px;" class="menu--label">Smart Trade</span></div>
                        <a href="{{ route('user.exchange') }}" class="menu--link" title="Exchange Terminal">
                            <i class='uil-bitcoin-circle menu--icon'></i>
                            <span class="menu--label">Exchange Terminal</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="left_footer mt-4">
                <ul style="margin-top: 80px" class="ms-2">
                    <li><a href="privacy_policy.html">Privacy Policy</a></li>
                    <li><a href="terms.html">Terms</a></li>
                </ul>
                <div class="left_footer_content ms-4">
                    <p><i class="uil uil-copyright ms-4"></i> 2024 <strong>Thursday</strong></p>
                </div>
            </div>
        </div>
    </nav>

    @yield('content')



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
    <script src="https://s3.tradingview.com/tv.js"></script>

    <!-- Jquery Page Js -->
    <script src="js/template.js"></script>
    <script src="js/page/exchange.js"></script>
</body>

</html>
