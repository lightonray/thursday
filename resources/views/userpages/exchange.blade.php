@extends('layouts.app')
@section('content')
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
                                        <div
                                            class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                            <h6 class="mb-0 fw-bold ">BTC/USDT Order Book</h6>
                                        </div>
                                        <div class="card-body">
                                            <ul class="nav nav-tabs tab-body-header rounded d-inline-flex" role="tablist">
                                                <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab"
                                                        href="#Both" role="tab">Both</a></li>
                                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#Long"
                                                        role="tab">Long</a></li>
                                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#Short"
                                                        role="tab">Short</a></li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane fade show active" id="Both">
                                                    <table id="priceTableup"
                                                        class="priceTable table table-hover custom-table-2 table-bordered align-middle mb-0"
                                                        style="width:100%">
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

                                                    <table id="priceTabledown"
                                                        class="priceTable table table-hover custom-table-2 table-bordered align-middle mb-0"
                                                        style="width:100%">
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

                                                    <table id="priceTableuponly"
                                                        class="priceTable table table-hover custom-table-2 table-bordered align-middle mb-0"
                                                        style="width:100%">
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

                                                    <table id="priceTabledownonly"
                                                        class="priceTable table table-hover custom-table-2 table-bordered align-middle mb-0"
                                                        style="width:100%">
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
                                        <div
                                            class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                            <h6 class="mb-0 fw-bold ">Spot</h6>
                                        </div>
                                        <div class="card-body">
                                            <ul class="nav nav-tabs tab-body-header rounded d-inline-flex" role="tablist">
                                                <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab"
                                                        href="#Limit" role="tab">Limit</a></li>
                                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab"
                                                        href="#Market" role="tab">Market</a></li>
                                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab"
                                                        href="#Stoplimit" role="tab">Stop Limit</a></li>
                                            </ul>
                                            <div class="tab-content">

                                                <div class="tab-pane fade show active" id="Limit">
                                                    <div class="row g-3">
                                                        <div class="col-lg-6">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between my-3">
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
                                                                    <div
                                                                        class="mb-2 d-flex justify-content-between align-items-center w-100">
                                                                        <span class="text-muted">0%</span>
                                                                        <span class="text-muted px-2">25%</span>
                                                                        <span class="text-muted px-1">50%</span>
                                                                        <span class="text-muted px-1">75%</span>
                                                                        <span class="text-muted">100%</span>
                                                                    </div>
                                                                    <input type="range" class="form-range"
                                                                        min='1' max='5' value='1'
                                                                        step='1'>
                                                                </div>
                                                                <div class="input-group mb-3">
                                                                    <span class="input-group-text">Total</span>
                                                                    <input type="text" class="form-control">
                                                                    <span class="input-group-text">USDT</span>
                                                                </div>
                                                                <button type="submit"
                                                                    class="btn flex-fill btn-light-success py-2 fs-5 text-uppercase px-5 w-100">BUY
                                                                    BTC</button>
                                                            </form>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between my-3">
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
                                                                    <div
                                                                        class="mb-2 d-flex justify-content-between align-items-center w-100">
                                                                        <span class="text-muted">0%</span>
                                                                        <span class="text-muted px-2">25%</span>
                                                                        <span class="text-muted px-1">50%</span>
                                                                        <span class="text-muted px-1">75%</span>
                                                                        <span class="text-muted">100%</span>
                                                                    </div>
                                                                    <input type="range" class="form-range"
                                                                        min='1' max='5' value='1'
                                                                        step='1'>
                                                                </div>
                                                                <div class="input-group mb-3">
                                                                    <span class="input-group-text">Total</span>
                                                                    <input type="text" class="form-control">
                                                                    <span class="input-group-text">USDT</span>
                                                                </div>
                                                                <button type="submit"
                                                                    class="btn flex-fill btn-light-danger py-2 fs-5 text-uppercase px-5 w-100">SELL
                                                                    BTC</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div><!-- Limit Tab End -->

                                                <div class="tab-pane fade" id="Market">
                                                    <div class="row g-3">
                                                        <div class="col-lg-6">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between my-3">
                                                                <span class="small text-muted">Avbl</span>
                                                                <span class="">310.800000 USDT</span>
                                                            </div>
                                                            <form>
                                                                <div class="input-group mb-3">
                                                                    <span class="input-group-text">Price</span>
                                                                    <input type="text" class="form-control"
                                                                        placeholder="Market">
                                                                    <span class="input-group-text">USDT</span>
                                                                </div>
                                                                <div class="input-group mb-3">
                                                                    <button type="button"
                                                                        class="btn btn-outline-secondary">Amount</button>
                                                                    <button type="button"
                                                                        class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split"
                                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                                        <span class="visually-hidden">Toggle
                                                                            Dropdown</span>
                                                                    </button>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item"
                                                                                href="#">Amount</a></li>
                                                                        <li><a class="dropdown-item"
                                                                                href="#">Total</a></li>
                                                                    </ul>
                                                                    <input type="text" class="form-control">
                                                                    <span class="input-group-text">BTC</span>
                                                                </div>
                                                                <div class="input-group mb-3">
                                                                    <div
                                                                        class="mb-2 d-flex justify-content-between align-items-center w-100">
                                                                        <span class="text-muted">0%</span>
                                                                        <span class="text-muted px-2">25%</span>
                                                                        <span class="text-muted px-1">50%</span>
                                                                        <span class="text-muted px-1">75%</span>
                                                                        <span class="text-muted">100%</span>
                                                                    </div>
                                                                    <input type="range" class="form-range"
                                                                        min='1' max='5' value='1'
                                                                        step='1'>
                                                                </div>
                                                                <button type="submit"
                                                                    class="btn flex-fill btn-light-success py-2 fs-5 text-uppercase px-5 w-100">BUY
                                                                    BTC</button>
                                                            </form>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between my-3">
                                                                <span class="small text-muted">Avbl</span>
                                                                <span class="">0.0000000 BTC</span>
                                                            </div>
                                                            <form>
                                                                <div class="input-group mb-3">
                                                                    <span class="input-group-text">Price</span>
                                                                    <input type="text" class="form-control"
                                                                        placeholder="Market">
                                                                    <span class="input-group-text">USDT</span>
                                                                </div>
                                                                <div class="input-group mb-3">
                                                                    <button type="button"
                                                                        class="btn btn-outline-secondary">Amount</button>
                                                                    <button type="button"
                                                                        class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split"
                                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                                        <span class="visually-hidden">Toggle
                                                                            Dropdown</span>
                                                                    </button>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item"
                                                                                href="#">Amount</a></li>
                                                                        <li><a class="dropdown-item"
                                                                                href="#">Total</a></li>
                                                                    </ul>
                                                                    <input type="text" class="form-control">
                                                                    <span class="input-group-text">BTC</span>
                                                                </div>
                                                                <div class="input-group mb-3">
                                                                    <div
                                                                        class="mb-2 d-flex justify-content-between align-items-center w-100">
                                                                        <span class="text-muted">0%</span>
                                                                        <span class="text-muted px-2">25%</span>
                                                                        <span class="text-muted px-1">50%</span>
                                                                        <span class="text-muted px-1">75%</span>
                                                                        <span class="text-muted">100%</span>
                                                                    </div>
                                                                    <input type="range" class="form-range"
                                                                        min='1' max='5' value='1'
                                                                        step='1'>
                                                                </div>
                                                                <button type="submit"
                                                                    class="btn flex-fill btn-light-danger py-2 fs-5 text-uppercase px-5 w-100">SELL
                                                                    BTC</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div><!-- Market Tab End -->

                                                <div class="tab-pane fade" id="Stoplimit">
                                                    <div class="row g-3">
                                                        <div class="col-lg-6">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between my-3">
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
                                                                    <div
                                                                        class="mb-2 d-flex justify-content-between align-items-center w-100">
                                                                        <span class="text-muted">0%</span>
                                                                        <span class="text-muted px-2">25%</span>
                                                                        <span class="text-muted px-1">50%</span>
                                                                        <span class="text-muted px-1">75%</span>
                                                                        <span class="text-muted">100%</span>
                                                                    </div>
                                                                    <input type="range" class="form-range"
                                                                        min='1' max='5' value='1'
                                                                        step='1'>
                                                                </div>
                                                                <div class="input-group mb-3">
                                                                    <span class="input-group-text">Total</span>
                                                                    <input type="text" class="form-control">
                                                                    <span class="input-group-text">USDT</span>
                                                                </div>
                                                                <button type="submit"
                                                                    class="btn flex-fill btn-light-success py-2 fs-5 text-uppercase px-5 w-100">BUY
                                                                    BTC</button>
                                                            </form>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div
                                                                class="d-flex align-items-center justify-content-between my-3">
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
                                                                    <div
                                                                        class="mb-2 d-flex justify-content-between align-items-center w-100">
                                                                        <span class="text-muted">0%</span>
                                                                        <span class="text-muted px-2">25%</span>
                                                                        <span class="text-muted px-1">50%</span>
                                                                        <span class="text-muted px-1">75%</span>
                                                                        <span class="text-muted">100%</span>
                                                                    </div>
                                                                    <input type="range" class="form-range"
                                                                        min='1' max='5' value='1'
                                                                        step='1'>
                                                                </div>
                                                                <div class="input-group mb-3">
                                                                    <span class="input-group-text">Total</span>
                                                                    <input type="text" class="form-control">
                                                                    <span class="input-group-text">USDT</span>
                                                                </div>
                                                                <button type="submit"
                                                                    class="btn flex-fill btn-light-danger py-2 fs-5 text-uppercase px-5 w-100">SELL
                                                                    BTC</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div><!-- Stoplimit Tab End -->

                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div
                                            class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                            <h6 class="mb-0 fw-bold ">Spot trade Status</h6>
                                        </div>
                                        <div class="card-body">
                                            <ul class="nav nav-tabs tab-body-header rounded d-inline-flex mb-3"
                                                role="tablist">
                                                <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab"
                                                        href="#OpenOrder" role="tab">Open Order(7)</a></li>
                                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab"
                                                        href="#OrderHistory" role="tab">Order History</a></li>
                                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab"
                                                        href="#TradeHistory" role="tab">Trade History</a></li>
                                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab"
                                                        href="#Funds" role="tab">Funds</a></li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane fade show active" id="OpenOrder">
                                                    <table id="ordertabone"
                                                        class="priceTable table table-hover custom-table-2 table-bordered align-middle mb-0"
                                                        style="width:100%">
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
                                                                <td><img src="assets/images/coin/ETH.png" alt=""
                                                                        class="img-fluid avatar mx-1">ETH/USDT</td>
                                                                <td>Limit</td>
                                                                <td><span class="color-price-up">Buy</span></td>
                                                                <td>2774.00</td>
                                                                <td>0.000378</td>
                                                                <td>
                                                                    <div class="btn-group" role="group">
                                                                        <button type="button"
                                                                            class="btn btn-outline-secondary"><i
                                                                                class="icofont-edit text-success"></i></button>
                                                                        <button type="button"
                                                                            class="btn btn-outline-secondary deleterow"><i
                                                                                class="icofont-ui-delete text-danger"></i></button>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>09-20 18:38:15</td>
                                                                <td><img src="assets/images/coin/SOL.png" alt=""
                                                                        class="img-fluid avatar mx-1">SOL/USDT</td>
                                                                <td>Limit</td>
                                                                <td><span class="color-price-up">Buy</span></td>
                                                                <td>125.00</td>
                                                                <td>0.005378</td>
                                                                <td>
                                                                    <div class="btn-group" role="group">
                                                                        <button type="button"
                                                                            class="btn btn-outline-secondary"><i
                                                                                class="icofont-edit text-success"></i></button>
                                                                        <button type="button"
                                                                            class="btn btn-outline-secondary deleterow"><i
                                                                                class="icofont-ui-delete text-danger"></i></button>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>09-18 17:32:15</td>
                                                                <td><img src="assets/images/coin/DGD.png" alt=""
                                                                        class="img-fluid avatar mx-1">DGD/USDT</td>
                                                                <td>Limit</td>
                                                                <td><span class="color-price-down">Sell</span></td>
                                                                <td>35.00</td>
                                                                <td>0.000005</td>
                                                                <td>
                                                                    <div class="btn-group" role="group">
                                                                        <button type="button"
                                                                            class="btn btn-outline-secondary"><i
                                                                                class="icofont-edit text-success"></i></button>
                                                                        <button type="button"
                                                                            class="btn btn-outline-secondary deleterow"><i
                                                                                class="icofont-ui-delete text-danger"></i></button>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>09-21 13:32:15</td>
                                                                <td><img src="assets/images/coin/ADA.png" alt=""
                                                                        class="img-fluid avatar mx-1">ADA/USDT</td>
                                                                <td>Limit</td>
                                                                <td><span class="color-price-down">Sell</span></td>
                                                                <td>3.500</td>
                                                                <td>0.000001</td>
                                                                <td>
                                                                    <div class="btn-group" role="group">
                                                                        <button type="button"
                                                                            class="btn btn-outline-secondary"><i
                                                                                class="icofont-edit text-success"></i></button>
                                                                        <button type="button"
                                                                            class="btn btn-outline-secondary deleterow"><i
                                                                                class="icofont-ui-delete text-danger"></i></button>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>09-21 13:32:15</td>
                                                                <td><img src="assets/images/coin/BNB.png" alt=""
                                                                        class="img-fluid avatar mx-1">BNB/USDT</td>
                                                                <td>Limit</td>
                                                                <td><span class="color-price-down">Sell</span></td>
                                                                <td>415.00</td>
                                                                <td>0.000041</td>
                                                                <td>
                                                                    <div class="btn-group" role="group">
                                                                        <button type="button"
                                                                            class="btn btn-outline-secondary"><i
                                                                                class="icofont-edit text-success"></i></button>
                                                                        <button type="button"
                                                                            class="btn btn-outline-secondary deleterow"><i
                                                                                class="icofont-ui-delete text-danger"></i></button>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>09-20 13:32:15</td>
                                                                <td><img src="assets/images/coin/DOGE.png" alt=""
                                                                        class="img-fluid avatar mx-1">DOGE/USDT</td>
                                                                <td>Limit</td>
                                                                <td><span class="color-price-down">Sell</span></td>
                                                                <td>0.2040</td>
                                                                <td>0.203900</td>
                                                                <td>
                                                                    <div class="btn-group" role="group">
                                                                        <button type="button"
                                                                            class="btn btn-outline-secondary"><i
                                                                                class="icofont-edit text-success"></i></button>
                                                                        <button type="button"
                                                                            class="btn btn-outline-secondary deleterow"><i
                                                                                class="icofont-ui-delete text-danger"></i></button>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>09-22 16:32:15</td>
                                                                <td><img src="assets/images/coin/ADX.png" alt=""
                                                                        class="img-fluid avatar mx-1">ADX/USDT</td>
                                                                <td>Limit</td>
                                                                <td><span class="color-price-up">Buy</span></td>
                                                                <td>2.134</td>
                                                                <td>2.13</td>
                                                                <td>
                                                                    <div class="btn-group" role="group">
                                                                        <button type="button"
                                                                            class="btn btn-outline-secondary"><i
                                                                                class="icofont-edit text-success"></i></button>
                                                                        <button type="button"
                                                                            class="btn btn-outline-secondary deleterow"><i
                                                                                class="icofont-ui-delete text-danger"></i></button>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div><!-- OpenOrdertab End -->
                                                <div class="tab-pane fade" id="OrderHistory">
                                                    <table id="ordertabtwo"
                                                        class="priceTable table table-hover custom-table-2 table-bordered align-middle mb-0"
                                                        style="width:100%">
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
                                                                <td><img src="assets/images/coin/ETH.png" alt=""
                                                                        class="img-fluid avatar mx-1">ETH/USDT</td>
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
                                                                <td><img src="assets/images/coin/SOL.png" alt=""
                                                                        class="img-fluid avatar mx-1">SOL/USDT</td>
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
                                                                <td><img src="assets/images/coin/ETH.png" alt=""
                                                                        class="img-fluid avatar mx-1">ETH/USDT</td>
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
                                                                <td><img src="assets/images/coin/SOL.png" alt=""
                                                                        class="img-fluid avatar mx-1">SOL/USDT</td>
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
                                                    <table id="ordertabthree"
                                                        class="priceTable table table-hover custom-table-2 table-bordered align-middle mb-0"
                                                        style="width:100%">
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
                                                                <td><img src="assets/images/coin/ETH.png" alt=""
                                                                        class="img-fluid avatar mx-1">ETH/USDT</td>
                                                                <td><span class="color-price-down">Sell</span></td>
                                                                <td>3,487.50</td>
                                                                <td>0.0110</td>
                                                                <td>0.03836250 USDT</td>
                                                                <td>38.36250000 USDT</td>
                                                            </tr>
                                                            <tr>
                                                                <td>09-18 17:31:11</td>
                                                                <td><img src="assets/images/coin/SOL.png" alt=""
                                                                        class="img-fluid avatar mx-1">SOL/USDT</td>
                                                                <td><span class="color-price-down">Sell</span></td>
                                                                <td>160.33</td>
                                                                <td>0.75</td>
                                                                <td>0.12024750 USDT</td>
                                                                <td>120.24750000 USDT</td>
                                                            </tr>
                                                            <tr>
                                                                <td>09-18 08:52:04</td>
                                                                <td><img src="assets/images/coin/ETH.png" alt=""
                                                                        class="img-fluid avatar mx-1">ETH/USDT</td>
                                                                <td><span class="color-price-up">Buy</span></td>
                                                                <td>3,439.20</td>
                                                                <td>0.0111</td>
                                                                <td>0.00001110 ETH</td>
                                                                <td>38.17512000 USDT</td>
                                                            </tr>
                                                            <tr>
                                                                <td>09-17 08:34:14</td>
                                                                <td><img src="assets/images/coin/SOL.png" alt=""
                                                                        class="img-fluid avatar mx-1">SOL/USDT</td>
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
                                                    <table id="ordertabfour"
                                                        class="priceTable table table-hover custom-table-2 table-bordered align-middle mb-0"
                                                        style="width:100%">
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
                                                                <td><img src="assets/images/coin/ICN.png" alt=""
                                                                        class="img-fluid avatar mx-1">1INCH</td>
                                                                <td>10.00000000</td>
                                                                <td>10.00000000</td>
                                                                <td>08.00000000</td>
                                                                <td>0.00000080 BTC</td>
                                                            </tr>
                                                            <tr>
                                                                <td><img src="assets/images/coin/EDG.png" alt=""
                                                                        class="img-fluid avatar mx-1">EDG</td>
                                                                <td>11.00000000</td>
                                                                <td>11.00000000</td>
                                                                <td>10.00000010</td>
                                                                <td>0.000000010 BTC</td>
                                                            </tr>
                                                            <tr>
                                                                <td><img src="assets/images/coin/ADA.png" alt=""
                                                                        class="img-fluid avatar mx-1">ADA</td>
                                                                <td>112.00000000</td>
                                                                <td>112.00000000</td>
                                                                <td>098.00000098</td>
                                                                <td>0.0000000009 BTC</td>
                                                            </tr>
                                                            <tr>
                                                                <td><img src="assets/images/coin/ARK.png" alt=""
                                                                        class="img-fluid avatar mx-1">ARK</td>
                                                                <td>113.00000000</td>
                                                                <td>113.00000000</td>
                                                                <td>097.00000097</td>
                                                                <td>0.0000000009 BTC</td>
                                                            </tr>
                                                            <tr>
                                                                <td><img src="assets/images/coin/FUN.png" alt=""
                                                                        class="img-fluid avatar mx-1">Fun</td>
                                                                <td>218.00000000</td>
                                                                <td>218.00000000</td>
                                                                <td>095.00000095</td>
                                                                <td>0.0000000008 BTC</td>
                                                            </tr>
                                                            <tr>
                                                                <td><img src="assets/images/coin/BNB.png" alt=""
                                                                        class="img-fluid avatar mx-1">BNB</td>
                                                                <td>0.00431435</td>
                                                                <td>0.00431435</td>
                                                                <td>0.00000000</td>
                                                                <td>0.00003445 BTC</td>
                                                            </tr>
                                                            <tr>
                                                                <td><img src="assets/images/coin/ETH.png" alt=""
                                                                        class="img-fluid avatar mx-1">ETH</td>
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
                    <div class="modal fade right" id="Settingmodal" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog  modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Custome Settings</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body custom_setting">
                                    <!-- Settings: Color -->
                                    <div class="setting-theme pb-3">
                                        <h6 class="card-title mb-2 fs-6 d-flex align-items-center"><i
                                                class="icofont-color-bucket fs-4 me-2 text-primary"></i>Template Color
                                            Settings</h6>
                                        <ul class="list-unstyled row row-cols-3 g-2 choose-skin mb-2 mt-2">
                                            <li data-theme="indigo">
                                                <div class="indigo"></div>
                                            </li>
                                            <li data-theme="tradewind">
                                                <div class="tradewind"></div>
                                            </li>
                                            <li data-theme="monalisa">
                                                <div class="monalisa"></div>
                                            </li>
                                            <li data-theme="blue">
                                                <div class="blue"></div>
                                            </li>
                                            <li data-theme="cyan">
                                                <div class="cyan"></div>
                                            </li>
                                            <li data-theme="green">
                                                <div class="green"></div>
                                            </li>
                                            <li data-theme="orange" class="active">
                                                <div class="orange"></div>
                                            </li>
                                            <li data-theme="blush">
                                                <div class="blush"></div>
                                            </li>
                                            <li data-theme="red">
                                                <div class="red"></div>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Settings: Template dynamics -->
                                    <div class="dynamic-block py-3">
                                        <ul class="list-unstyled choose-skin mb-2 mt-1">
                                            <li data-theme="dynamic">
                                                <div class="dynamic"><i class="icofont-paint me-2"></i> Click to Dyanmic
                                                    Setting</div>
                                            </li>
                                        </ul>
                                        <div class="dt-setting">
                                            <ul class="list-group list-unstyled mt-1">
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                                    <label>Primary Color</label>
                                                    <button id="primaryColorPicker"
                                                        class="btn bg-primary avatar xs border-0 rounded-0"></button>
                                                </li>
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                                    <label>Secondary Color</label>
                                                    <button id="secondaryColorPicker"
                                                        class="btn bg-secondary avatar xs border-0 rounded-0"></button>
                                                </li>
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                                    <label class="text-muted">Chart Color 1</label>
                                                    <button id="chartColorPicker1"
                                                        class="btn chart-color1 avatar xs border-0 rounded-0"></button>
                                                </li>
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                                    <label class="text-muted">Chart Color 2</label>
                                                    <button id="chartColorPicker2"
                                                        class="btn chart-color2 avatar xs border-0 rounded-0"></button>
                                                </li>
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                                    <label class="text-muted">Chart Color 3</label>
                                                    <button id="chartColorPicker3"
                                                        class="btn chart-color3 avatar xs border-0 rounded-0"></button>
                                                </li>
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                                    <label class="text-muted">Chart Color 4</label>
                                                    <button id="chartColorPicker4"
                                                        class="btn chart-color4 avatar xs border-0 rounded-0"></button>
                                                </li>
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                                    <label class="text-muted">Chart Color 5</label>
                                                    <button id="chartColorPicker5"
                                                        class="btn chart-color5 avatar xs border-0 rounded-0"></button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Settings: Font -->
                                    <div class="setting-font py-3">
                                        <h6 class="card-title mb-2 fs-6 d-flex align-items-center"><i
                                                class="icofont-font fs-4 me-2 text-primary"></i> Font Settings</h6>
                                        <ul class="list-group font_setting mt-1">
                                            <li class="list-group-item py-1 px-2">
                                                <div class="form-check mb-0">
                                                    <input class="form-check-input" type="radio" name="font"
                                                        id="font-poppins" value="font-poppins">
                                                    <label class="form-check-label" for="font-poppins">
                                                        Poppins Google Font
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="list-group-item py-1 px-2">
                                                <div class="form-check mb-0">
                                                    <input class="form-check-input" type="radio" name="font"
                                                        id="font-opensans" value="font-opensans">
                                                    <label class="form-check-label" for="font-opensans">
                                                        Open Sans Google Font
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="list-group-item py-1 px-2">
                                                <div class="form-check mb-0">
                                                    <input class="form-check-input" type="radio" name="font"
                                                        id="font-montserrat" value="font-montserrat">
                                                    <label class="form-check-label" for="font-montserrat">
                                                        Montserrat Google Font
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="list-group-item py-1 px-2">
                                                <div class="form-check mb-0">
                                                    <input class="form-check-input" type="radio" name="font"
                                                        id="font-Plex" value="font-Plex" checked="">
                                                    <label class="form-check-label" for="font-Plex">
                                                        Plex Google Font
                                                    </label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Settings: Light/dark -->
                                    <div class="setting-mode py-3">
                                        <h6 class="card-title mb-2 fs-6 d-flex align-items-center"><i
                                                class="icofont-layout fs-4 me-2 text-primary"></i>Contrast Layout</h6>
                                        <ul class="list-group list-unstyled mb-0 mt-1">
                                            <li class="list-group-item d-flex align-items-center py-1 px-2">
                                                <div class="form-check form-switch theme-switch mb-0">
                                                    <input class="form-check-input" type="checkbox" id="theme-switch">
                                                    <label class="form-check-label" for="theme-switch">Enable Dark
                                                        Mode!</label>
                                                </div>
                                            </li>
                                            <li class="list-group-item d-flex align-items-center py-1 px-2">
                                                <div class="form-check form-switch theme-high-contrast mb-0">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="theme-high-contrast">
                                                    <label class="form-check-label" for="theme-high-contrast">Enable High
                                                        Contrast</label>
                                                </div>
                                            </li>
                                            <li class="list-group-item d-flex align-items-center py-1 px-2">
                                                <div class="form-check form-switch theme-rtl mb-0">
                                                    <input class="form-check-input" type="checkbox" id="theme-rtl">
                                                    <label class="form-check-label" for="theme-rtl">Enable RTL
                                                        Mode!</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="modal-footer justify-content-start">
                                    <button type="button" class="btn btn-white border lift"
                                        data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary lift">Save Changes</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
