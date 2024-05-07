@extends('layouts.app')
@section('content')
    <div class="wrapper d-flex flex-column h-100">
        <div class="main-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="row g-3 mb-3">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row g-3 align-items-center">
                                            <div class="col-md-6 col-lg-6 col-xl-3">
                                                <div class="d-flex">
                                                    <!-- Default avatar image if user profile image is not set -->
                                                    <img class="avatar rounded-circle"
                                                        src="{{ $user->profile_image ?? 'assets/images/profile_av.svg' }}"
                                                        alt="profile">
                                                    <div class="flex-fill ms-3">
                                                        <p class="mb-0"><span
                                                                class="font-weight-bold">{{ $user->name }}</span></p>
                                                        <small>{{ $user->email }}</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6 col-xl-3">
                                                <div class="d-flex flex-column">
                                                    <span class="text-muted mb-1">User ID: {{ $user->id }}</span>
                                                    <span class="small text-muted">Last login time:
                                                        {{ $user->last_login_at ?? 'Not available' }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-3 mb-3 row-cols-1 row-cols-md-2 row-cols-lg-4">
                            <div class="col">
                                <div class="card">
                                    <div class="card-body d-flex align-items-center">
                                        <div class="flex-fill text-truncate">
                                            <span class="text-muted small text-uppercase">Account Deribit Balance</span>
                                            <div class="d-flex flex-column">
                                                <div class="price-block">
                                                    <span id="account_balance2"
                                                        class="fs-6 fw-bold color-price-up">418</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="apexspark1" style="min-height: 30px;">
                                        <div id="apexchartswv5o4zws"
                                            class="apexcharts-canvas apexchartswv5o4zws apexcharts-theme-light"
                                            style="width: 271px; height: 30px;"><svg id="SvgjsSvg1799" width="271"
                                                height="30" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                                class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                style="background: transparent;">
                                                <foreignObject x="0" y="0" width="271" height="30">
                                                    <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml"
                                                        style="max-height: 15px;"></div>
                                                </foreignObject>
                                                <rect id="SvgjsRect1803" width="0" height="0" x="0" y="0"
                                                    rx="0" ry="0" opacity="1" stroke-width="0"
                                                    stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                                <g id="SvgjsG1848" class="apexcharts-yaxis" rel="0"
                                                    transform="translate(-18, 0)"></g>
                                                <g id="SvgjsG1801" class="apexcharts-inner apexcharts-graphical"
                                                    transform="translate(0, 0.5)">
                                                    <defs id="SvgjsDefs1800">
                                                        <clipPath id="gridRectMaskwv5o4zws">
                                                            <rect id="SvgjsRect1805" width="276" height="37" x="-3"
                                                                y="-4" rx="0" ry="0" opacity="1"
                                                                stroke-width="0" stroke="none" stroke-dasharray="0"
                                                                fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="forecastMaskwv5o4zws"></clipPath>
                                                        <clipPath id="nonForecastMaskwv5o4zws"></clipPath>
                                                        <clipPath id="gridRectMarkerMaskwv5o4zws">
                                                            <rect id="SvgjsRect1806" width="275" height="33" x="-2"
                                                                y="-2" rx="0" ry="0" opacity="1"
                                                                stroke-width="0" stroke="none" stroke-dasharray="0"
                                                                fill="#fff"></rect>
                                                        </clipPath>
                                                        <linearGradient id="SvgjsLinearGradient1811" x1="0"
                                                            y1="0" x2="0" y2="1">
                                                            <stop id="SvgjsStop1812" stop-opacity="0.65"
                                                                stop-color="rgba(248,146,26,0.65)" offset="0"></stop>
                                                            <stop id="SvgjsStop1813" stop-opacity="0.5"
                                                                stop-color="rgba(252,201,141,0.5)" offset="1"></stop>
                                                            <stop id="SvgjsStop1814" stop-opacity="0.5"
                                                                stop-color="rgba(252,201,141,0.5)" offset="1"></stop>
                                                        </linearGradient>
                                                    </defs>
                                                    <line id="SvgjsLine1804" x1="0" y1="0"
                                                        x2="0" y2="29" stroke="#b6b6b6"
                                                        stroke-dasharray="3" stroke-linecap="butt"
                                                        class="apexcharts-xcrosshairs" x="0" y="0" width="1"
                                                        height="29" fill="#b1b9c4" filter="none" fill-opacity="0.9"
                                                        stroke-width="1"></line>
                                                    <g id="SvgjsG1817" class="apexcharts-grid">
                                                        <g id="SvgjsG1818" class="apexcharts-gridlines-horizontal"
                                                            style="display: none;">
                                                            <line id="SvgjsLine1821" x1="0" y1="0"
                                                                x2="271" y2="0" stroke="#e0e0e0"
                                                                stroke-dasharray="0" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1822" x1="0" y1="5.8"
                                                                x2="271" y2="5.8" stroke="#e0e0e0"
                                                                stroke-dasharray="0" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1823" x1="0" y1="11.6"
                                                                x2="271" y2="11.6" stroke="#e0e0e0"
                                                                stroke-dasharray="0" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1824" x1="0" y1="17.4"
                                                                x2="271" y2="17.4" stroke="#e0e0e0"
                                                                stroke-dasharray="0" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1825" x1="0" y1="23.2"
                                                                x2="271" y2="23.2" stroke="#e0e0e0"
                                                                stroke-dasharray="0" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1826" x1="0" y1="29"
                                                                x2="271" y2="29" stroke="#e0e0e0"
                                                                stroke-dasharray="0" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                        </g>
                                                        <g id="SvgjsG1819" class="apexcharts-gridlines-vertical"
                                                            style="display: none;"></g>
                                                        <line id="SvgjsLine1828" x1="0" y1="29"
                                                            x2="271" y2="29" stroke="transparent"
                                                            stroke-dasharray="0" stroke-linecap="butt"></line>
                                                        <line id="SvgjsLine1827" x1="0" y1="1"
                                                            x2="0" y2="29" stroke="transparent"
                                                            stroke-dasharray="0" stroke-linecap="butt"></line>
                                                    </g>
                                                    <g id="SvgjsG1820" class="apexcharts-grid-borders"
                                                        style="display: none;"></g>
                                                    <g id="SvgjsG1807"
                                                        class="apexcharts-area-series apexcharts-plot-series">
                                                        <g id="SvgjsG1808" class="apexcharts-series" zIndex="0"
                                                            seriesName="series-1" data:longestSeries="true"
                                                            rel="1" data:realIndex="0">
                                                            <path id="SvgjsPath1815"
                                                                d="M 0 29 L 0 9.280000000000001C3.21464620154763, 9.08735847116925, 12.974952562906129, 7.450694287224323, 19.357142857142858, 8.119999999999997Q32.384451654466055, 12.45926082495468, 38.714285714285715, 13.34Q51.70160145766648, 15.225157692905169, 58.07142857142857, 14.5Q71.09140145337295, 8.974465649054434, 77.42857142857143, 8.119999999999997Q90.33333333333333, 9.280000000000001, 96.78571428571428, 9.280000000000001Q109.7606668486204, 7.450694287224323, 116.14285714285714, 8.119999999999997Q129.84140292472756, 11.22063615077434, 135.5, 13.34Q148.84217502416425, 24.24204372411099, 154.85714285714286, 22.62Q168.03379434036617, 4.1963067516368495, 174.21428571428572, 2.8999999999999986Q188.02634401685987, 12.257003066893647, 193.57142857142856, 14.5Q206.47619047619045, 18.56, 212.92857142857142, 18.56Q225.83333333333331, 18.56, 232.28571428571428, 18.56Q245.19047619047618, 18.56, 251.64285714285714, 18.56Q268.25656217756983, 25.529173388731138, 271, 26.68 L 271 29 L 0 29M 0 9.280000000000001z"
                                                                fill="url(#SvgjsLinearGradient1811)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                                stroke-dasharray="0" class="apexcharts-area"
                                                                index="0" clip-path="url(#gridRectMaskwv5o4zws)"
                                                                pathTo="M 0 29 L 0 9.280000000000001C3.21464620154763, 9.08735847116925, 12.974952562906129, 7.450694287224323, 19.357142857142858, 8.119999999999997Q32.384451654466055, 12.45926082495468, 38.714285714285715, 13.34Q51.70160145766648, 15.225157692905169, 58.07142857142857, 14.5Q71.09140145337295, 8.974465649054434, 77.42857142857143, 8.119999999999997Q90.33333333333333, 9.280000000000001, 96.78571428571428, 9.280000000000001Q109.7606668486204, 7.450694287224323, 116.14285714285714, 8.119999999999997Q129.84140292472756, 11.22063615077434, 135.5, 13.34Q148.84217502416425, 24.24204372411099, 154.85714285714286, 22.62Q168.03379434036617, 4.1963067516368495, 174.21428571428572, 2.8999999999999986Q188.02634401685987, 12.257003066893647, 193.57142857142856, 14.5Q206.47619047619045, 18.56, 212.92857142857142, 18.56Q225.83333333333331, 18.56, 232.28571428571428, 18.56Q245.19047619047618, 18.56, 251.64285714285714, 18.56Q268.25656217756983, 25.529173388731138, 271, 26.68 L 271 29 L 0 29M 0 9.280000000000001z"
                                                                pathFrom="M -1 40.6 L -1 40.6 L 19.357142857142858 40.6 L 38.714285714285715 40.6 L 58.07142857142857 40.6 L 77.42857142857143 40.6 L 96.78571428571428 40.6 L 116.14285714285714 40.6 L 135.5 40.6 L 154.85714285714286 40.6 L 174.21428571428572 40.6 L 193.57142857142856 40.6 L 212.92857142857142 40.6 L 232.28571428571428 40.6 L 251.64285714285714 40.6 L 271 40.6">
                                                            </path>
                                                            <path id="SvgjsPath1816"
                                                                d="M 0 9.280000000000001C3.21464620154763, 9.08735847116925, 12.974952562906129, 7.450694287224323, 19.357142857142858, 8.119999999999997Q32.384451654466055, 12.45926082495468, 38.714285714285715, 13.34Q51.70160145766648, 15.225157692905169, 58.07142857142857, 14.5Q71.09140145337295, 8.974465649054434, 77.42857142857143, 8.119999999999997Q90.33333333333333, 9.280000000000001, 96.78571428571428, 9.280000000000001Q109.7606668486204, 7.450694287224323, 116.14285714285714, 8.119999999999997Q129.84140292472756, 11.22063615077434, 135.5, 13.34Q148.84217502416425, 24.24204372411099, 154.85714285714286, 22.62Q168.03379434036617, 4.1963067516368495, 174.21428571428572, 2.8999999999999986Q188.02634401685987, 12.257003066893647, 193.57142857142856, 14.5Q206.47619047619045, 18.56, 212.92857142857142, 18.56Q225.83333333333331, 18.56, 232.28571428571428, 18.56Q245.19047619047618, 18.56, 251.64285714285714, 18.56Q268.25656217756983, 25.529173388731138, 271, 26.68"
                                                                fill="none" fill-opacity="1" stroke="#f8921a"
                                                                stroke-opacity="1" stroke-linecap="butt" stroke-width="1"
                                                                stroke-dasharray="0" class="apexcharts-area"
                                                                index="0" clip-path="url(#gridRectMaskwv5o4zws)"
                                                                pathTo="M 0 9.280000000000001C3.21464620154763, 9.08735847116925, 12.974952562906129, 7.450694287224323, 19.357142857142858, 8.119999999999997Q32.384451654466055, 12.45926082495468, 38.714285714285715, 13.34Q51.70160145766648, 15.225157692905169, 58.07142857142857, 14.5Q71.09140145337295, 8.974465649054434, 77.42857142857143, 8.119999999999997Q90.33333333333333, 9.280000000000001, 96.78571428571428, 9.280000000000001Q109.7606668486204, 7.450694287224323, 116.14285714285714, 8.119999999999997Q129.84140292472756, 11.22063615077434, 135.5, 13.34Q148.84217502416425, 24.24204372411099, 154.85714285714286, 22.62Q168.03379434036617, 4.1963067516368495, 174.21428571428572, 2.8999999999999986Q188.02634401685987, 12.257003066893647, 193.57142857142856, 14.5Q206.47619047619045, 18.56, 212.92857142857142, 18.56Q225.83333333333331, 18.56, 232.28571428571428, 18.56Q245.19047619047618, 18.56, 251.64285714285714, 18.56Q268.25656217756983, 25.529173388731138, 271, 26.68"
                                                                pathFrom="M -1 40.6 L -1 40.6 L 19.357142857142858 40.6 L 38.714285714285715 40.6 L 58.07142857142857 40.6 L 77.42857142857143 40.6 L 96.78571428571428 40.6 L 116.14285714285714 40.6 L 135.5 40.6 L 154.85714285714286 40.6 L 174.21428571428572 40.6 L 193.57142857142856 40.6 L 212.92857142857142 40.6 L 232.28571428571428 40.6 L 251.64285714285714 40.6 L 271 40.6"
                                                                fill-rule="evenodd"></path>
                                                            <g id="SvgjsG1809"
                                                                class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                                data:realIndex="0">
                                                                <g class="apexcharts-series-markers">
                                                                    <circle id="SvgjsCircle1852" r="0" cx="0"
                                                                        cy="0"
                                                                        class="apexcharts-marker wgn499pgd no-pointer-events"
                                                                        stroke="#ffffff" fill="#f8921a" fill-opacity="1"
                                                                        stroke-width="2" stroke-opacity="0.9"
                                                                        default-marker-size="0"></circle>
                                                                </g>
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG1810" class="apexcharts-datalabels"
                                                            data:realIndex="0"></g>
                                                    </g>
                                                    <line id="SvgjsLine1829" x1="0" y1="0"
                                                        x2="271" y2="0" stroke="#b6b6b6"
                                                        stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                        class="apexcharts-ycrosshairs"></line>
                                                    <line id="SvgjsLine1830" x1="0" y1="0"
                                                        x2="271" y2="0" stroke-dasharray="0"
                                                        stroke-width="0" stroke-linecap="butt"
                                                        class="apexcharts-ycrosshairs-hidden"></line>
                                                    <g id="SvgjsG1831" class="apexcharts-xaxis"
                                                        transform="translate(0, 0)">
                                                        <g id="SvgjsG1832" class="apexcharts-xaxis-texts-g"
                                                            transform="translate(0, -4)"></g>
                                                    </g>
                                                    <g id="SvgjsG1849" class="apexcharts-yaxis-annotations"></g>
                                                    <g id="SvgjsG1850" class="apexcharts-xaxis-annotations"></g>
                                                    <g id="SvgjsG1851" class="apexcharts-point-annotations"></g>
                                                </g>
                                            </svg>
                                            <div class="apexcharts-tooltip apexcharts-theme-light">
                                                <div class="apexcharts-tooltip-title"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                </div>
                                                <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                        class="apexcharts-tooltip-marker"
                                                        style="background-color: rgb(248, 146, 26);"></span>
                                                    <div class="apexcharts-tooltip-text"
                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                        <div class="apexcharts-tooltip-y-group"><span
                                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                                        <div class="apexcharts-tooltip-goals-group"><span
                                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                                class="apexcharts-tooltip-text-goals-value"></span></div>
                                                        <div class="apexcharts-tooltip-z-group"><span
                                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                <div class="apexcharts-yaxistooltip-text"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card">
                                    <div class="card-body d-flex align-items-center">
                                        <div class="flex-fill text-truncate">
                                            <span class="text-muted small text-uppercase">Total bots added</span>
                                            <div class="d-flex flex-column">
                                                <div class="price-block">
                                                    <span class="fs-6 fw-bold">{{ $totalBots }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="apexspark2" style="min-height: 30px;">
                                        <div id="apexchartsad3bnqs3"
                                            class="apexcharts-canvas apexchartsad3bnqs3 apexcharts-theme-light"
                                            style="width: 271px; height: 30px;"><svg id="SvgjsSvg1854" width="271"
                                                height="30" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                                class="apexcharts-svg" xmlns:data="ApexChartsNS"
                                                transform="translate(0, 0)" style="background: transparent;">
                                                <foreignObject x="0" y="0" width="271" height="30">
                                                    <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml"
                                                        style="max-height: 15px;"></div>
                                                </foreignObject>
                                                <rect id="SvgjsRect1858" width="0" height="0" x="0" y="0"
                                                    rx="0" ry="0" opacity="1" stroke-width="0"
                                                    stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                                <g id="SvgjsG1903" class="apexcharts-yaxis" rel="0"
                                                    transform="translate(-18, 0)"></g>
                                                <g id="SvgjsG1856" class="apexcharts-inner apexcharts-graphical"
                                                    transform="translate(0, 0.5)">
                                                    <defs id="SvgjsDefs1855">
                                                        <clipPath id="gridRectMaskad3bnqs3">
                                                            <rect id="SvgjsRect1860" width="276" height="37" x="-3"
                                                                y="-4" rx="0" ry="0" opacity="1"
                                                                stroke-width="0" stroke="none" stroke-dasharray="0"
                                                                fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="forecastMaskad3bnqs3"></clipPath>
                                                        <clipPath id="nonForecastMaskad3bnqs3"></clipPath>
                                                        <clipPath id="gridRectMarkerMaskad3bnqs3">
                                                            <rect id="SvgjsRect1861" width="275" height="33" x="-2"
                                                                y="-2" rx="0" ry="0" opacity="1"
                                                                stroke-width="0" stroke="none" stroke-dasharray="0"
                                                                fill="#fff"></rect>
                                                        </clipPath>
                                                        <linearGradient id="SvgjsLinearGradient1866" x1="0"
                                                            y1="0" x2="0" y2="1">
                                                            <stop id="SvgjsStop1867" stop-opacity="0.65"
                                                                stop-color="rgba(0,119,175,0.65)" offset="0"></stop>
                                                            <stop id="SvgjsStop1868" stop-opacity="0.5"
                                                                stop-color="rgba(128,187,215,0.5)" offset="1"></stop>
                                                            <stop id="SvgjsStop1869" stop-opacity="0.5"
                                                                stop-color="rgba(128,187,215,0.5)" offset="1"></stop>
                                                        </linearGradient>
                                                    </defs>
                                                    <line id="SvgjsLine1859" x1="0" y1="0"
                                                        x2="0" y2="29" stroke="#b6b6b6"
                                                        stroke-dasharray="3" stroke-linecap="butt"
                                                        class="apexcharts-xcrosshairs" x="0" y="0" width="1"
                                                        height="29" fill="#b1b9c4" filter="none" fill-opacity="0.9"
                                                        stroke-width="1"></line>
                                                    <g id="SvgjsG1872" class="apexcharts-grid">
                                                        <g id="SvgjsG1873" class="apexcharts-gridlines-horizontal"
                                                            style="display: none;">
                                                            <line id="SvgjsLine1876" x1="0" y1="0"
                                                                x2="271" y2="0" stroke="#e0e0e0"
                                                                stroke-dasharray="0" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1877" x1="0" y1="5.8"
                                                                x2="271" y2="5.8" stroke="#e0e0e0"
                                                                stroke-dasharray="0" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1878" x1="0" y1="11.6"
                                                                x2="271" y2="11.6" stroke="#e0e0e0"
                                                                stroke-dasharray="0" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1879" x1="0" y1="17.4"
                                                                x2="271" y2="17.4" stroke="#e0e0e0"
                                                                stroke-dasharray="0" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1880" x1="0" y1="23.2"
                                                                x2="271" y2="23.2" stroke="#e0e0e0"
                                                                stroke-dasharray="0" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1881" x1="0" y1="29"
                                                                x2="271" y2="29" stroke="#e0e0e0"
                                                                stroke-dasharray="0" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                        </g>
                                                        <g id="SvgjsG1874" class="apexcharts-gridlines-vertical"
                                                            style="display: none;"></g>
                                                        <line id="SvgjsLine1883" x1="0" y1="29"
                                                            x2="271" y2="29" stroke="transparent"
                                                            stroke-dasharray="0" stroke-linecap="butt"></line>
                                                        <line id="SvgjsLine1882" x1="0" y1="1"
                                                            x2="0" y2="29" stroke="transparent"
                                                            stroke-dasharray="0" stroke-linecap="butt"></line>
                                                    </g>
                                                    <g id="SvgjsG1875" class="apexcharts-grid-borders"
                                                        style="display: none;"></g>
                                                    <g id="SvgjsG1862"
                                                        class="apexcharts-area-series apexcharts-plot-series">
                                                        <g id="SvgjsG1863" class="apexcharts-series" zIndex="0"
                                                            seriesName="series-1" data:longestSeries="true"
                                                            rel="1" data:realIndex="0">
                                                            <path id="SvgjsPath1870"
                                                                d="M 0 29 L 0 14.5C3.0074839164893117, 13.688978137944506, 12.904761904761905, 9.280000000000001, 19.357142857142858, 9.280000000000001Q32.261904761904766, 9.280000000000001, 38.714285714285715, 9.280000000000001Q51.62483528887958, 13.533159916805527, 58.07142857142857, 13.34Q70.98197814602244, 7.926840083194469, 77.42857142857143, 8.119999999999997Q90.77074645273565, 12.877956275889012, 96.78571428571428, 14.5Q109.69626386030815, 18.753159916805526, 116.14285714285714, 18.56Q129.4850321670214, 14.962043724110988, 135.5, 13.34Q148.4047619047619, 8.119999999999997, 154.85714285714286, 8.119999999999997Q167.76190476190476, 8.119999999999997, 174.21428571428572, 8.119999999999997Q187.55646073844994, 20.99795627588901, 193.57142857142856, 22.62Q206.47619047619045, 18.56, 212.92857142857142, 18.56Q225.83333333333331, 18.56, 232.28571428571428, 18.56Q245.4623657689376, 1.6036932483631445, 251.64285714285714, 2.8999999999999986Q269.7142453667882, 25.100467038786437, 271, 26.68 L 271 29 L 0 29M 0 14.5z"
                                                                fill="url(#SvgjsLinearGradient1866)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                                stroke-dasharray="0" class="apexcharts-area"
                                                                index="0" clip-path="url(#gridRectMaskad3bnqs3)"
                                                                pathTo="M 0 29 L 0 14.5C3.0074839164893117, 13.688978137944506, 12.904761904761905, 9.280000000000001, 19.357142857142858, 9.280000000000001Q32.261904761904766, 9.280000000000001, 38.714285714285715, 9.280000000000001Q51.62483528887958, 13.533159916805527, 58.07142857142857, 13.34Q70.98197814602244, 7.926840083194469, 77.42857142857143, 8.119999999999997Q90.77074645273565, 12.877956275889012, 96.78571428571428, 14.5Q109.69626386030815, 18.753159916805526, 116.14285714285714, 18.56Q129.4850321670214, 14.962043724110988, 135.5, 13.34Q148.4047619047619, 8.119999999999997, 154.85714285714286, 8.119999999999997Q167.76190476190476, 8.119999999999997, 174.21428571428572, 8.119999999999997Q187.55646073844994, 20.99795627588901, 193.57142857142856, 22.62Q206.47619047619045, 18.56, 212.92857142857142, 18.56Q225.83333333333331, 18.56, 232.28571428571428, 18.56Q245.4623657689376, 1.6036932483631445, 251.64285714285714, 2.8999999999999986Q269.7142453667882, 25.100467038786437, 271, 26.68 L 271 29 L 0 29M 0 14.5z"
                                                                pathFrom="M -1 40.6 L -1 40.6 L 19.357142857142858 40.6 L 38.714285714285715 40.6 L 58.07142857142857 40.6 L 77.42857142857143 40.6 L 96.78571428571428 40.6 L 116.14285714285714 40.6 L 135.5 40.6 L 154.85714285714286 40.6 L 174.21428571428572 40.6 L 193.57142857142856 40.6 L 212.92857142857142 40.6 L 232.28571428571428 40.6 L 251.64285714285714 40.6 L 271 40.6">
                                                            </path>
                                                            <path id="SvgjsPath1871"
                                                                d="M 0 14.5C3.0074839164893117, 13.688978137944506, 12.904761904761905, 9.280000000000001, 19.357142857142858, 9.280000000000001Q32.261904761904766, 9.280000000000001, 38.714285714285715, 9.280000000000001Q51.62483528887958, 13.533159916805527, 58.07142857142857, 13.34Q70.98197814602244, 7.926840083194469, 77.42857142857143, 8.119999999999997Q90.77074645273565, 12.877956275889012, 96.78571428571428, 14.5Q109.69626386030815, 18.753159916805526, 116.14285714285714, 18.56Q129.4850321670214, 14.962043724110988, 135.5, 13.34Q148.4047619047619, 8.119999999999997, 154.85714285714286, 8.119999999999997Q167.76190476190476, 8.119999999999997, 174.21428571428572, 8.119999999999997Q187.55646073844994, 20.99795627588901, 193.57142857142856, 22.62Q206.47619047619045, 18.56, 212.92857142857142, 18.56Q225.83333333333331, 18.56, 232.28571428571428, 18.56Q245.4623657689376, 1.6036932483631445, 251.64285714285714, 2.8999999999999986Q269.7142453667882, 25.100467038786437, 271, 26.68"
                                                                fill="none" fill-opacity="1" stroke="#0077af"
                                                                stroke-opacity="1" stroke-linecap="butt" stroke-width="1"
                                                                stroke-dasharray="0" class="apexcharts-area"
                                                                index="0" clip-path="url(#gridRectMaskad3bnqs3)"
                                                                pathTo="M 0 14.5C3.0074839164893117, 13.688978137944506, 12.904761904761905, 9.280000000000001, 19.357142857142858, 9.280000000000001Q32.261904761904766, 9.280000000000001, 38.714285714285715, 9.280000000000001Q51.62483528887958, 13.533159916805527, 58.07142857142857, 13.34Q70.98197814602244, 7.926840083194469, 77.42857142857143, 8.119999999999997Q90.77074645273565, 12.877956275889012, 96.78571428571428, 14.5Q109.69626386030815, 18.753159916805526, 116.14285714285714, 18.56Q129.4850321670214, 14.962043724110988, 135.5, 13.34Q148.4047619047619, 8.119999999999997, 154.85714285714286, 8.119999999999997Q167.76190476190476, 8.119999999999997, 174.21428571428572, 8.119999999999997Q187.55646073844994, 20.99795627588901, 193.57142857142856, 22.62Q206.47619047619045, 18.56, 212.92857142857142, 18.56Q225.83333333333331, 18.56, 232.28571428571428, 18.56Q245.4623657689376, 1.6036932483631445, 251.64285714285714, 2.8999999999999986Q269.7142453667882, 25.100467038786437, 271, 26.68"
                                                                pathFrom="M -1 40.6 L -1 40.6 L 19.357142857142858 40.6 L 38.714285714285715 40.6 L 58.07142857142857 40.6 L 77.42857142857143 40.6 L 96.78571428571428 40.6 L 116.14285714285714 40.6 L 135.5 40.6 L 154.85714285714286 40.6 L 174.21428571428572 40.6 L 193.57142857142856 40.6 L 212.92857142857142 40.6 L 232.28571428571428 40.6 L 251.64285714285714 40.6 L 271 40.6"
                                                                fill-rule="evenodd"></path>
                                                            <g id="SvgjsG1864"
                                                                class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                                data:realIndex="0">
                                                                <g class="apexcharts-series-markers">
                                                                    <circle id="SvgjsCircle1907" r="0" cx="0"
                                                                        cy="0"
                                                                        class="apexcharts-marker w1ex4n8efj no-pointer-events"
                                                                        stroke="#ffffff" fill="#0077af" fill-opacity="1"
                                                                        stroke-width="2" stroke-opacity="0.9"
                                                                        default-marker-size="0"></circle>
                                                                </g>
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG1865" class="apexcharts-datalabels"
                                                            data:realIndex="0"></g>
                                                    </g>
                                                    <line id="SvgjsLine1884" x1="0" y1="0"
                                                        x2="271" y2="0" stroke="#b6b6b6"
                                                        stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                        class="apexcharts-ycrosshairs"></line>
                                                    <line id="SvgjsLine1885" x1="0" y1="0"
                                                        x2="271" y2="0" stroke-dasharray="0"
                                                        stroke-width="0" stroke-linecap="butt"
                                                        class="apexcharts-ycrosshairs-hidden"></line>
                                                    <g id="SvgjsG1886" class="apexcharts-xaxis"
                                                        transform="translate(0, 0)">
                                                        <g id="SvgjsG1887" class="apexcharts-xaxis-texts-g"
                                                            transform="translate(0, -4)"></g>
                                                    </g>
                                                    <g id="SvgjsG1904" class="apexcharts-yaxis-annotations"></g>
                                                    <g id="SvgjsG1905" class="apexcharts-xaxis-annotations"></g>
                                                    <g id="SvgjsG1906" class="apexcharts-point-annotations"></g>
                                                </g>
                                            </svg>
                                            <div class="apexcharts-tooltip apexcharts-theme-light">
                                                <div class="apexcharts-tooltip-title"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                </div>
                                                <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                        class="apexcharts-tooltip-marker"
                                                        style="background-color: rgb(0, 119, 175);"></span>
                                                    <div class="apexcharts-tooltip-text"
                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                        <div class="apexcharts-tooltip-y-group"><span
                                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                                        <div class="apexcharts-tooltip-goals-group"><span
                                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                                class="apexcharts-tooltip-text-goals-value"></span></div>
                                                        <div class="apexcharts-tooltip-z-group"><span
                                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                <div class="apexcharts-yaxistooltip-text"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="title-heading mt-5">
                            <div class="main-title">
                                <h4>Hot Strategies</h4>
                                <a href="#" class="view-link">View All<i class="uil uil-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                        <div class="Hot-bids-list">
                            <div class="owl-carousel hot-bids-slider owl-theme">
                                <!-- Strategy 1 -->
                                <div class="item">
                                    <div class="main-card">
                                        <a href="" class="strategy-img">
                                            <img src="{{ asset('images/btcprepstrategy.jpg') }}" alt="">
                                        </a>
                                        <div class="item-detail-group">
                                            <div class="item-text-dt">
                                                <a href="" class="item-title">BTC-PERPETUAL Default Strategy</a>
                                                <div class="strategy-info">High Risk <span class="total-followers-count">1
                                                        Follower</span></div>
                                                <div class="item-text-bottom">
                                                    <span class="like-btn"><i
                                                            class="uil uil-thumbs-up"></i><ins>150</ins></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Strategy 2 -->
                                <div class="item">
                                    <div class="main-card">
                                        <a href="" class="strategy-img">
                                            <img src="{{ asset('images/btcprepstrategy.jpg') }}" alt="">
                                        </a>
                                        <div class="item-detail-group">
                                            <div class="item-text-dt">
                                                <a href="strategy_view.html" class="item-title">Mean Reversion</a>
                                                <div class="strategy-info">Medium Risk <span
                                                        class="total-followers-count">0 followers</span></div>
                                                <div class="item-text-bottom">
                                                    <span class="like-btn"><i
                                                            class="uil uil-thumbs-up"></i><ins>85</ins></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Strategy 3 -->
                                <div class="item">
                                    <div class="main-card">
                                        <a href="" class="strategy-img">
                                            <img src="{{ asset('images/btcprepstrategy.jpg') }}" alt="">
                                        </a>
                                        <div class="item-detail-group">
                                            <div class="item-text-dt">
                                                <a href="strategy_view.html" class="item-title">Scalping Strategy</a>
                                                <div class="strategy-info">Low Risk <span class="total-followers-count">0
                                                        followers</span></div>
                                                <div class="item-text-bottom">
                                                    <span class="like-btn"><i
                                                            class="uil uil-thumbs-up"></i><ins>300</ins></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Strategy 4 -->
                                <div class="item">
                                    <div class="main-card">
                                        <a href="" class="strategy-img">
                                            <img src="{{ asset('images/btcprepstrategy.jpg') }}" alt="">
                                        </a>
                                        <div class="item-detail-group">
                                            <div class="item-text-dt">
                                                <a href="strategy_view.html" class="item-title">Day Trading</a>
                                                <div class="strategy-info">High Risk <span class="total-followers-count">0
                                                        followers</span></div>
                                                <div class="item-text-bottom">
                                                    <span class="like-btn"><i
                                                            class="uil uil-thumbs-up"></i><ins>250</ins></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Strategy 5 -->
                                <div class="item">
                                    <div class="main-card">
                                        <a href="" class="strategy-img">
                                            <img src="{{ asset('images/btcprepstrategy.jpg') }}" alt="">
                                        </a>
                                        <div class="item-detail-group">
                                            <div class="item-text-dt">
                                                <a href="strategy_view.html" class="item-title">Algorithmic Trading</a>
                                                <div class="strategy-info">Moderate Risk <span
                                                        class="total-followers-count">0 followers</span></div>
                                                <div class="item-text-bottom">
                                                    <span class="like-btn"><i
                                                            class="uil uil-thumbs-up"></i><ins>180</ins></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12">
                            <div class="title-heading mt-5">
                                <div class="main-title">
                                    <h4>Your Bots</h4>
                                    <a href="#" class="view-link">View All<i
                                            class="uil uil-arrow-right ms-1"></i></a>
                                </div>
                            </div>
                            <div class="Hot-bids-list">
                                <div class="owl-carousel hot-bids-slider owl-theme">
                                    <!-- Bot 1 -->
                                    <div class="item">
                                        <div class="main-card">
                                            <a href="" class="strategy-img">
                                                <img src="{{ asset('images/bot.png') }}" alt="Bot Image">
                                            </a>
                                            <div class="item-detail-group">
                                                <div class="item-text-dt">
                                                    <a href="" class="item-title">Test Bot</a>
                                                    <div class="bot-info">Status: Running <span
                                                            class="total-trades-count">Trades: 150</span></div>
                                                    <div class="item-text-bottom">
                                                        <span class="like-btn"><i
                                                                class="uil uil-thumbs-up"></i><ins>75</ins></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Bot 2 -->
                                    <div class="item">
                                        <div class="main-card">
                                            <a href="" class="strategy-img">
                                                <img src="{{ asset('images/bot.png') }}" alt="Bot Image">
                                            </a>
                                            <div class="item-detail-group">
                                                <div class="item-text-dt">
                                                    <a href="" class="item-title">Mean Reversion Master</a>
                                                    <div class="bot-info">Status: Stopped <span
                                                            class="total-trades-count">Trades: 120</span></div>
                                                    <div class="item-text-bottom">
                                                        <span class="like-btn"><i
                                                                class="uil uil-thumbs-up"></i><ins>60</ins></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Bot 3 -->
                                    <div class="item">
                                        <div class="main-card">
                                            <a href="" class="strategy-img">
                                                <img src="{{ asset('images/bot.png') }}" alt="Bot Image">
                                            </a>
                                            <div class="item-detail-group">
                                                <div class="item-text-dt">
                                                    <a href="" class="item-title">Scalping Pro</a>
                                                    <div class="bot-info">Status: Running <span
                                                            class="total-trades-count">Trades: 200</span></div>
                                                    <div class="item-text-bottom">
                                                        <span class="like-btn"><i
                                                                class="uil uil-thumbs-up"></i><ins>130</ins></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Bot 4 -->
                                    <div class="item">
                                        <div class="main-card">
                                            <a href="" class="strategy-img">
                                                <img src="{{ asset('images/bot.png') }}" alt="Bot Image">
                                            </a>
                                            <div class="item-detail-group">
                                                <div class="item-text-dt">
                                                    <a href="" class="item-title">Day Trading Bot</a>
                                                    <div class="bot-info">Status: Configuring <span
                                                            class="total-trades-count">Trades: 85</span></div>
                                                    <div class="item-text-bottom">
                                                        <span class="like-btn"><i
                                                                class="uil uil-thumbs-up"></i><ins>50</ins></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Bot 5 -->
                                    <div class="item">
                                        <div class="main-card">
                                            <a href="" class="strategy-img">
                                                <img src="{{ asset('images/bot.png') }}" alt="Bot Image">
                                            </a>
                                            <div class="item-detail-group">
                                                <div class="item-text-dt">
                                                    <a href="" class="item-title">Algorithmic Arbitrage</a>
                                                    <div class="bot-info">Status: Running <span
                                                            class="total-trades-count">Trades: 300</span></div>
                                                    <div class="item-text-bottom">
                                                        <span class="like-btn"><i
                                                                class="uil uil-thumbs-up"></i><ins>250</ins></span>
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
