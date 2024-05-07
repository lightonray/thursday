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
													<img class="avatar rounded-circle" src="{{ $user->profile_image ?? 'assets/images/profile_av.svg' }}" alt="profile">
													<div class="flex-fill ms-3">
														<p class="mb-0"><span class="font-weight-bold">{{ $user->name }}</span></p>
														<small>{{ $user->email }}</small>
													</div>
												</div>
											</div>
											<div class="col-md-6 col-lg-6 col-xl-3">
												<div class="d-flex flex-column">
													<span class="text-muted mb-1">User ID: {{ $user->id }}</span>
													<span class="small text-muted">Last login time: {{ $user->last_login_at ?? 'Not available' }}</span>
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
													<span id="account_balance2" class="fs-6 fw-bold color-price-up">418</span>
												</div>
											</div>
										</div>
									</div>
									<div id="apexspark1" style="min-height: 30px;"><div id="apexchartswv5o4zws" class="apexcharts-canvas apexchartswv5o4zws apexcharts-theme-light" style="width: 271px; height: 30px;"><svg id="SvgjsSvg1799" width="271" height="30" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="271" height="30"><div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 15px;"></div></foreignObject><rect id="SvgjsRect1803" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1848" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG1801" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0.5)"><defs id="SvgjsDefs1800"><clipPath id="gridRectMaskwv5o4zws"><rect id="SvgjsRect1805" width="276" height="37" x="-3" y="-4" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskwv5o4zws"></clipPath><clipPath id="nonForecastMaskwv5o4zws"></clipPath><clipPath id="gridRectMarkerMaskwv5o4zws"><rect id="SvgjsRect1806" width="275" height="33" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient1811" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1812" stop-opacity="0.65" stop-color="rgba(248,146,26,0.65)" offset="0"></stop><stop id="SvgjsStop1813" stop-opacity="0.5" stop-color="rgba(252,201,141,0.5)" offset="1"></stop><stop id="SvgjsStop1814" stop-opacity="0.5" stop-color="rgba(252,201,141,0.5)" offset="1"></stop></linearGradient></defs><line id="SvgjsLine1804" x1="0" y1="0" x2="0" y2="29" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="29" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1817" class="apexcharts-grid"><g id="SvgjsG1818" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1821" x1="0" y1="0" x2="271" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1822" x1="0" y1="5.8" x2="271" y2="5.8" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1823" x1="0" y1="11.6" x2="271" y2="11.6" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1824" x1="0" y1="17.4" x2="271" y2="17.4" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1825" x1="0" y1="23.2" x2="271" y2="23.2" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1826" x1="0" y1="29" x2="271" y2="29" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1819" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1828" x1="0" y1="29" x2="271" y2="29" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1827" x1="0" y1="1" x2="0" y2="29" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1820" class="apexcharts-grid-borders" style="display: none;"></g><g id="SvgjsG1807" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1808" class="apexcharts-series" zIndex="0" seriesName="series-1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1815" d="M 0 29 L 0 9.280000000000001C3.21464620154763, 9.08735847116925, 12.974952562906129, 7.450694287224323, 19.357142857142858, 8.119999999999997Q32.384451654466055, 12.45926082495468, 38.714285714285715, 13.34Q51.70160145766648, 15.225157692905169, 58.07142857142857, 14.5Q71.09140145337295, 8.974465649054434, 77.42857142857143, 8.119999999999997Q90.33333333333333, 9.280000000000001, 96.78571428571428, 9.280000000000001Q109.7606668486204, 7.450694287224323, 116.14285714285714, 8.119999999999997Q129.84140292472756, 11.22063615077434, 135.5, 13.34Q148.84217502416425, 24.24204372411099, 154.85714285714286, 22.62Q168.03379434036617, 4.1963067516368495, 174.21428571428572, 2.8999999999999986Q188.02634401685987, 12.257003066893647, 193.57142857142856, 14.5Q206.47619047619045, 18.56, 212.92857142857142, 18.56Q225.83333333333331, 18.56, 232.28571428571428, 18.56Q245.19047619047618, 18.56, 251.64285714285714, 18.56Q268.25656217756983, 25.529173388731138, 271, 26.68 L 271 29 L 0 29M 0 9.280000000000001z" fill="url(#SvgjsLinearGradient1811)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskwv5o4zws)" pathTo="M 0 29 L 0 9.280000000000001C3.21464620154763, 9.08735847116925, 12.974952562906129, 7.450694287224323, 19.357142857142858, 8.119999999999997Q32.384451654466055, 12.45926082495468, 38.714285714285715, 13.34Q51.70160145766648, 15.225157692905169, 58.07142857142857, 14.5Q71.09140145337295, 8.974465649054434, 77.42857142857143, 8.119999999999997Q90.33333333333333, 9.280000000000001, 96.78571428571428, 9.280000000000001Q109.7606668486204, 7.450694287224323, 116.14285714285714, 8.119999999999997Q129.84140292472756, 11.22063615077434, 135.5, 13.34Q148.84217502416425, 24.24204372411099, 154.85714285714286, 22.62Q168.03379434036617, 4.1963067516368495, 174.21428571428572, 2.8999999999999986Q188.02634401685987, 12.257003066893647, 193.57142857142856, 14.5Q206.47619047619045, 18.56, 212.92857142857142, 18.56Q225.83333333333331, 18.56, 232.28571428571428, 18.56Q245.19047619047618, 18.56, 251.64285714285714, 18.56Q268.25656217756983, 25.529173388731138, 271, 26.68 L 271 29 L 0 29M 0 9.280000000000001z" pathFrom="M -1 40.6 L -1 40.6 L 19.357142857142858 40.6 L 38.714285714285715 40.6 L 58.07142857142857 40.6 L 77.42857142857143 40.6 L 96.78571428571428 40.6 L 116.14285714285714 40.6 L 135.5 40.6 L 154.85714285714286 40.6 L 174.21428571428572 40.6 L 193.57142857142856 40.6 L 212.92857142857142 40.6 L 232.28571428571428 40.6 L 251.64285714285714 40.6 L 271 40.6"></path><path id="SvgjsPath1816" d="M 0 9.280000000000001C3.21464620154763, 9.08735847116925, 12.974952562906129, 7.450694287224323, 19.357142857142858, 8.119999999999997Q32.384451654466055, 12.45926082495468, 38.714285714285715, 13.34Q51.70160145766648, 15.225157692905169, 58.07142857142857, 14.5Q71.09140145337295, 8.974465649054434, 77.42857142857143, 8.119999999999997Q90.33333333333333, 9.280000000000001, 96.78571428571428, 9.280000000000001Q109.7606668486204, 7.450694287224323, 116.14285714285714, 8.119999999999997Q129.84140292472756, 11.22063615077434, 135.5, 13.34Q148.84217502416425, 24.24204372411099, 154.85714285714286, 22.62Q168.03379434036617, 4.1963067516368495, 174.21428571428572, 2.8999999999999986Q188.02634401685987, 12.257003066893647, 193.57142857142856, 14.5Q206.47619047619045, 18.56, 212.92857142857142, 18.56Q225.83333333333331, 18.56, 232.28571428571428, 18.56Q245.19047619047618, 18.56, 251.64285714285714, 18.56Q268.25656217756983, 25.529173388731138, 271, 26.68" fill="none" fill-opacity="1" stroke="#f8921a" stroke-opacity="1" stroke-linecap="butt" stroke-width="1" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskwv5o4zws)" pathTo="M 0 9.280000000000001C3.21464620154763, 9.08735847116925, 12.974952562906129, 7.450694287224323, 19.357142857142858, 8.119999999999997Q32.384451654466055, 12.45926082495468, 38.714285714285715, 13.34Q51.70160145766648, 15.225157692905169, 58.07142857142857, 14.5Q71.09140145337295, 8.974465649054434, 77.42857142857143, 8.119999999999997Q90.33333333333333, 9.280000000000001, 96.78571428571428, 9.280000000000001Q109.7606668486204, 7.450694287224323, 116.14285714285714, 8.119999999999997Q129.84140292472756, 11.22063615077434, 135.5, 13.34Q148.84217502416425, 24.24204372411099, 154.85714285714286, 22.62Q168.03379434036617, 4.1963067516368495, 174.21428571428572, 2.8999999999999986Q188.02634401685987, 12.257003066893647, 193.57142857142856, 14.5Q206.47619047619045, 18.56, 212.92857142857142, 18.56Q225.83333333333331, 18.56, 232.28571428571428, 18.56Q245.19047619047618, 18.56, 251.64285714285714, 18.56Q268.25656217756983, 25.529173388731138, 271, 26.68" pathFrom="M -1 40.6 L -1 40.6 L 19.357142857142858 40.6 L 38.714285714285715 40.6 L 58.07142857142857 40.6 L 77.42857142857143 40.6 L 96.78571428571428 40.6 L 116.14285714285714 40.6 L 135.5 40.6 L 154.85714285714286 40.6 L 174.21428571428572 40.6 L 193.57142857142856 40.6 L 212.92857142857142 40.6 L 232.28571428571428 40.6 L 251.64285714285714 40.6 L 271 40.6" fill-rule="evenodd"></path><g id="SvgjsG1809" class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1852" r="0" cx="0" cy="0" class="apexcharts-marker wgn499pgd no-pointer-events" stroke="#ffffff" fill="#f8921a" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1810" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1829" x1="0" y1="0" x2="271" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1830" x1="0" y1="0" x2="271" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1831" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1832" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1849" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1850" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1851" class="apexcharts-point-annotations"></g></g></svg><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(248, 146, 26);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
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
									<div id="apexspark2" style="min-height: 30px;"><div id="apexchartsad3bnqs3" class="apexcharts-canvas apexchartsad3bnqs3 apexcharts-theme-light" style="width: 271px; height: 30px;"><svg id="SvgjsSvg1854" width="271" height="30" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="271" height="30"><div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 15px;"></div></foreignObject><rect id="SvgjsRect1858" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1903" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG1856" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0.5)"><defs id="SvgjsDefs1855"><clipPath id="gridRectMaskad3bnqs3"><rect id="SvgjsRect1860" width="276" height="37" x="-3" y="-4" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskad3bnqs3"></clipPath><clipPath id="nonForecastMaskad3bnqs3"></clipPath><clipPath id="gridRectMarkerMaskad3bnqs3"><rect id="SvgjsRect1861" width="275" height="33" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient1866" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1867" stop-opacity="0.65" stop-color="rgba(0,119,175,0.65)" offset="0"></stop><stop id="SvgjsStop1868" stop-opacity="0.5" stop-color="rgba(128,187,215,0.5)" offset="1"></stop><stop id="SvgjsStop1869" stop-opacity="0.5" stop-color="rgba(128,187,215,0.5)" offset="1"></stop></linearGradient></defs><line id="SvgjsLine1859" x1="0" y1="0" x2="0" y2="29" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="29" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1872" class="apexcharts-grid"><g id="SvgjsG1873" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1876" x1="0" y1="0" x2="271" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1877" x1="0" y1="5.8" x2="271" y2="5.8" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1878" x1="0" y1="11.6" x2="271" y2="11.6" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1879" x1="0" y1="17.4" x2="271" y2="17.4" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1880" x1="0" y1="23.2" x2="271" y2="23.2" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1881" x1="0" y1="29" x2="271" y2="29" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1874" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1883" x1="0" y1="29" x2="271" y2="29" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1882" x1="0" y1="1" x2="0" y2="29" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1875" class="apexcharts-grid-borders" style="display: none;"></g><g id="SvgjsG1862" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1863" class="apexcharts-series" zIndex="0" seriesName="series-1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1870" d="M 0 29 L 0 14.5C3.0074839164893117, 13.688978137944506, 12.904761904761905, 9.280000000000001, 19.357142857142858, 9.280000000000001Q32.261904761904766, 9.280000000000001, 38.714285714285715, 9.280000000000001Q51.62483528887958, 13.533159916805527, 58.07142857142857, 13.34Q70.98197814602244, 7.926840083194469, 77.42857142857143, 8.119999999999997Q90.77074645273565, 12.877956275889012, 96.78571428571428, 14.5Q109.69626386030815, 18.753159916805526, 116.14285714285714, 18.56Q129.4850321670214, 14.962043724110988, 135.5, 13.34Q148.4047619047619, 8.119999999999997, 154.85714285714286, 8.119999999999997Q167.76190476190476, 8.119999999999997, 174.21428571428572, 8.119999999999997Q187.55646073844994, 20.99795627588901, 193.57142857142856, 22.62Q206.47619047619045, 18.56, 212.92857142857142, 18.56Q225.83333333333331, 18.56, 232.28571428571428, 18.56Q245.4623657689376, 1.6036932483631445, 251.64285714285714, 2.8999999999999986Q269.7142453667882, 25.100467038786437, 271, 26.68 L 271 29 L 0 29M 0 14.5z" fill="url(#SvgjsLinearGradient1866)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskad3bnqs3)" pathTo="M 0 29 L 0 14.5C3.0074839164893117, 13.688978137944506, 12.904761904761905, 9.280000000000001, 19.357142857142858, 9.280000000000001Q32.261904761904766, 9.280000000000001, 38.714285714285715, 9.280000000000001Q51.62483528887958, 13.533159916805527, 58.07142857142857, 13.34Q70.98197814602244, 7.926840083194469, 77.42857142857143, 8.119999999999997Q90.77074645273565, 12.877956275889012, 96.78571428571428, 14.5Q109.69626386030815, 18.753159916805526, 116.14285714285714, 18.56Q129.4850321670214, 14.962043724110988, 135.5, 13.34Q148.4047619047619, 8.119999999999997, 154.85714285714286, 8.119999999999997Q167.76190476190476, 8.119999999999997, 174.21428571428572, 8.119999999999997Q187.55646073844994, 20.99795627588901, 193.57142857142856, 22.62Q206.47619047619045, 18.56, 212.92857142857142, 18.56Q225.83333333333331, 18.56, 232.28571428571428, 18.56Q245.4623657689376, 1.6036932483631445, 251.64285714285714, 2.8999999999999986Q269.7142453667882, 25.100467038786437, 271, 26.68 L 271 29 L 0 29M 0 14.5z" pathFrom="M -1 40.6 L -1 40.6 L 19.357142857142858 40.6 L 38.714285714285715 40.6 L 58.07142857142857 40.6 L 77.42857142857143 40.6 L 96.78571428571428 40.6 L 116.14285714285714 40.6 L 135.5 40.6 L 154.85714285714286 40.6 L 174.21428571428572 40.6 L 193.57142857142856 40.6 L 212.92857142857142 40.6 L 232.28571428571428 40.6 L 251.64285714285714 40.6 L 271 40.6"></path><path id="SvgjsPath1871" d="M 0 14.5C3.0074839164893117, 13.688978137944506, 12.904761904761905, 9.280000000000001, 19.357142857142858, 9.280000000000001Q32.261904761904766, 9.280000000000001, 38.714285714285715, 9.280000000000001Q51.62483528887958, 13.533159916805527, 58.07142857142857, 13.34Q70.98197814602244, 7.926840083194469, 77.42857142857143, 8.119999999999997Q90.77074645273565, 12.877956275889012, 96.78571428571428, 14.5Q109.69626386030815, 18.753159916805526, 116.14285714285714, 18.56Q129.4850321670214, 14.962043724110988, 135.5, 13.34Q148.4047619047619, 8.119999999999997, 154.85714285714286, 8.119999999999997Q167.76190476190476, 8.119999999999997, 174.21428571428572, 8.119999999999997Q187.55646073844994, 20.99795627588901, 193.57142857142856, 22.62Q206.47619047619045, 18.56, 212.92857142857142, 18.56Q225.83333333333331, 18.56, 232.28571428571428, 18.56Q245.4623657689376, 1.6036932483631445, 251.64285714285714, 2.8999999999999986Q269.7142453667882, 25.100467038786437, 271, 26.68" fill="none" fill-opacity="1" stroke="#0077af" stroke-opacity="1" stroke-linecap="butt" stroke-width="1" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskad3bnqs3)" pathTo="M 0 14.5C3.0074839164893117, 13.688978137944506, 12.904761904761905, 9.280000000000001, 19.357142857142858, 9.280000000000001Q32.261904761904766, 9.280000000000001, 38.714285714285715, 9.280000000000001Q51.62483528887958, 13.533159916805527, 58.07142857142857, 13.34Q70.98197814602244, 7.926840083194469, 77.42857142857143, 8.119999999999997Q90.77074645273565, 12.877956275889012, 96.78571428571428, 14.5Q109.69626386030815, 18.753159916805526, 116.14285714285714, 18.56Q129.4850321670214, 14.962043724110988, 135.5, 13.34Q148.4047619047619, 8.119999999999997, 154.85714285714286, 8.119999999999997Q167.76190476190476, 8.119999999999997, 174.21428571428572, 8.119999999999997Q187.55646073844994, 20.99795627588901, 193.57142857142856, 22.62Q206.47619047619045, 18.56, 212.92857142857142, 18.56Q225.83333333333331, 18.56, 232.28571428571428, 18.56Q245.4623657689376, 1.6036932483631445, 251.64285714285714, 2.8999999999999986Q269.7142453667882, 25.100467038786437, 271, 26.68" pathFrom="M -1 40.6 L -1 40.6 L 19.357142857142858 40.6 L 38.714285714285715 40.6 L 58.07142857142857 40.6 L 77.42857142857143 40.6 L 96.78571428571428 40.6 L 116.14285714285714 40.6 L 135.5 40.6 L 154.85714285714286 40.6 L 174.21428571428572 40.6 L 193.57142857142856 40.6 L 212.92857142857142 40.6 L 232.28571428571428 40.6 L 251.64285714285714 40.6 L 271 40.6" fill-rule="evenodd"></path><g id="SvgjsG1864" class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1907" r="0" cx="0" cy="0" class="apexcharts-marker w1ex4n8efj no-pointer-events" stroke="#ffffff" fill="#0077af" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1865" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1884" x1="0" y1="0" x2="271" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1885" x1="0" y1="0" x2="271" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1886" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1887" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1904" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1905" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1906" class="apexcharts-point-annotations"></g></g></svg><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(0, 119, 175);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
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
								<h4>Your Bots</h4>
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
			</div>
		</div>
	</div>
@endsection
