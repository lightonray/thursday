@extends('layouts.app')
@section('content')
    <div class="wrapper d-flex flex-column h-100">
        <div class="main-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="explore-list-items">
                            <div class="row">
                                <div class="col-xl-5 col-lg-12 col-md-12">
                                    <div class="main-card text-center p-4">
                                        <div class="item-img">
                                            <img src="{{ asset('images/bot.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="item-btns mt-30">
                                        <button id="startBotBtn" class="main-btn btn-hover h-40 w-100 mt-2 me_2" data-bs-toggle="modal"
                                            data-bs-target="#placebidModal" data-bot-id="1">Start Bot</button>
                                        <button id="stopBotBtn" class="buy-btn h-40 w-100 mt-2 ms_2" data-bs-toggle="modal"
                                            data-bs-target="#buyModal" data-bot-id="1">Stop Bot</button>
                                    </div>
                                </div>
                                <div class="col-xl-7 col-lg-12 col-md-12">
                                    <div class="item-details rrrmt-30">
                                        <div class="item-dt-top">
                                            <h3 class="view-item-title">Bot Name: {{ $bot->name }}</h3>
                                            <div class="item-more-actions">
                                                <div class="item-creators-options pb-0">
                                                    <span class="like-btn"><i class="uil uil-heart"></i><ins>42</ins></span>
                                                    <div class="more-option-list dropdown">
                                                        <a href="#" class="option-more-btn" role="button"
                                                            data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                                            aria-expanded="false">
                                                            <i class="uil uil-ellipsis-v"></i>
                                                        </a>
                                                        <ul class="dropdown-menu item-dropdown dropdown-menu-end">
                                                            <li><a class="dropdown-item" href="#" role="button"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#shareModal">Share</a></li>
                                                            <li><a class="dropdown-item" href="#" role="button"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#reportModal">Report</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="main-card mt-30 mb-3">
                                            <div class="item-tabs">
                                                <nav>
                                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link" data-bs-toggle="tab"
                                                                data-bs-target="#details" type="button" role="tab"
                                                                aria-controls="details" aria-selected="false"><i
                                                                    class="uil uil-info-circle me-2"></i>Details</button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link" data-bs-toggle="tab"
                                                                data-bs-target="#bids" type="button" role="tab"
                                                                aria-controls="bids" aria-selected="false"><i
                                                                    class="uil uil-bullseye me-2"></i>Bids</button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link" data-bs-toggle="tab"
                                                                data-bs-target="#history" type="button" role="tab"
                                                                aria-controls="history" aria-selected="false"><i
                                                                    class="uil uil-history me-2"></i>History</button>
                                                        </li>
                                                    </ul>
                                                </nav>
                                                <div class="tab-content" id="nav-tabContent">
                                                    <div class="tab-pane fade show active" id="details" role="tabpanel">
                                                        <div class="about-item">
                                                            <ul class="about-item-dt">
                                                                <li>
                                                                    <div class="about-item-dt-list">
                                                                        <h4>Exchange Name</h4>
                                                                        <span>{{ $bot->exchangeConnector->name }}</span>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="about-item-dt-list">
                                                                        <h4>Strategy</h4>
                                                                        <span>{{ $bot->strategy->name }}</span>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="about-item-dt-list">
                                                                        <h4>Exchange</h4>
                                                                        <span>{{ $bot->exchangeConnector->exchange_name }}</span>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="bids" role="tabpanel">
                                                        <div class="item-bids-list">
                                                            <div class="item-bid">
                                                                <div class="bid-item-dt">
                                                                    <div class="bid-author-img">
                                                                        <img src="images/left-imgs/img-2.jpg"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="bid-text-dt">
                                                                        <div class="bid-action font-14">
                                                                            <span class="bid-range">1 wETH</span>
                                                                            by
                                                                            <a href="#" class="bid-action-item">
                                                                                <span class="bid-action-item-text">@nft
                                                                                    aficionado</span>
                                                                            </a>
                                                                        </div>
                                                                        <div class="bid-time">
                                                                            <span>15/07/2021, 18.31</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="history" role="tabpanel">
                                                        <div class="item-bids-list">
                                                            <div class="item-bid">
                                                                <div class="bid-item-dt">
                                                                    <div class="bid-author-img">
                                                                        <img src="images/left-imgs/img-8.jpg"
                                                                            alt="">
                                                                        <span class="verif-badge">
                                                                            <svg width="20" height="20"
                                                                                viewBox="0 0 12 12" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z"
                                                                                    fill="#ffdb45"></path>
                                                                                <path fill-rule="evenodd"
                                                                                    clip-rule="evenodd"
                                                                                    d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z"
                                                                                    fill="#111111"></path>
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="bid-text-dt">
                                                                        <div class="bid-action font-14">
                                                                            Listed 17 editions for
                                                                            <span class="bid-range">0.007 ETH</span>
                                                                            each
                                                                        </div>
                                                                        <div class="bid-time">
                                                                            <span>15/07/2021, 18.38</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item-bid">
                                                                <div class="bid-item-dt">
                                                                    <div class="bid-author-img">
                                                                        <img src="images/left-imgs/img-4.jpg"
                                                                            alt="">
                                                                        <span class="verif-badge">
                                                                            <svg width="20" height="20"
                                                                                viewBox="0 0 12 12" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z"
                                                                                    fill="#ffdb45"></path>
                                                                                <path fill-rule="evenodd"
                                                                                    clip-rule="evenodd"
                                                                                    d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z"
                                                                                    fill="#111111"></path>
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="bid-text-dt">
                                                                        <div class="bid-action font-14">
                                                                            Listed 17 editions for
                                                                            <span class="bid-range">0.004 ETH</span>
                                                                            each
                                                                        </div>
                                                                        <div class="bid-time">
                                                                            <span>15/07/2021, 18.36</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item-bid">
                                                                <div class="bid-item-dt">
                                                                    <div class="bid-author-img">
                                                                        <img src="images/left-imgs/img-2.jpg"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="bid-text-dt">
                                                                        <div class="bid-action font-14">
                                                                            <span class="bid-range">1 wETH</span>
                                                                            by
                                                                            <a href="#" class="bid-action-item">
                                                                                <span class="bid-action-item-text">@nft
                                                                                    aficionado</span>
                                                                            </a>
                                                                        </div>
                                                                        <div class="bid-time">
                                                                            <span>15/07/2021, 18.32</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item-bid">
                                                                <div class="bid-item-dt">
                                                                    <div class="bid-author-img">
                                                                        <img src="images/left-imgs/img-3.jpg"
                                                                            alt="">
                                                                        <span class="verif-badge">
                                                                            <svg width="20" height="20"
                                                                                viewBox="0 0 12 12" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M4.78117 0.743103C5.29164 -0.247701 6.70826 -0.247701 7.21872 0.743103C7.52545 1.33846 8.21742 1.62509 8.8553 1.42099C9.91685 1.08134 10.9186 2.08304 10.5789 3.1446C10.3748 3.78247 10.6614 4.47445 11.2568 4.78117C12.2476 5.29164 12.2476 6.70826 11.2568 7.21872C10.6614 7.52545 10.3748 8.21742 10.5789 8.8553C10.9186 9.91685 9.91685 10.9186 8.8553 10.5789C8.21742 10.3748 7.52545 10.6614 7.21872 11.2568C6.70826 12.2476 5.29164 12.2476 4.78117 11.2568C4.47445 10.6614 3.78247 10.3748 3.1446 10.5789C2.08304 10.9186 1.08134 9.91685 1.42099 8.8553C1.62509 8.21742 1.33846 7.52545 0.743103 7.21872C-0.247701 6.70826 -0.247701 5.29164 0.743103 4.78117C1.33846 4.47445 1.62509 3.78247 1.42099 3.1446C1.08134 2.08304 2.08304 1.08134 3.1446 1.42099C3.78247 1.62509 4.47445 1.33846 4.78117 0.743103Z"
                                                                                    fill="#ffdb45"></path>
                                                                                <path fill-rule="evenodd"
                                                                                    clip-rule="evenodd"
                                                                                    d="M8.43961 4.23998C8.64623 4.43922 8.65221 4.76823 8.45297 4.97484L5.40604 8.13462L3.54703 6.20676C3.34779 6.00014 3.35377 5.67113 3.56039 5.47189C3.76701 5.27266 4.09602 5.27864 4.29526 5.48525L5.40604 6.63718L7.70475 4.25334C7.90398 4.04672 8.23299 4.04074 8.43961 4.23998Z"
                                                                                    fill="#111111"></path>
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <div class="bid-text-dt">
                                                                        <div class="bid-action font-14">
                                                                            <span class="bid-range">Minted</span>
                                                                            by
                                                                            <a href="#" class="bid-action-item">
                                                                                <span
                                                                                    class="bid-action-item-text">@EvenRai</span>
                                                                            </a>
                                                                        </div>
                                                                        <div class="bid-time">
                                                                            <span>15/07/2021, 18.30</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
