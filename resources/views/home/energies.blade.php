<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from mannatstudio.com/html/consultit/new_version/team-detials.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Jul 2022 09:41:30 GMT -->

<head>
    <title>ConsultIt - Consulting &nbsp; Finance HTML Template</title>
    @include('includes.home_css')
</head>

<body>
    @include('includes.home_header')

    <section class="breadcrumbs-wrap">
        <div class="container">
            <ul>
                <li><a href="#"><i class="icofont icofont-home"></i></a></li>
                <li><a href="#">Energies</a></li>
            </ul>
            <h1>ENERGIES</h1>
        </div>
    </section>
    <!-- xxx Breadcrumbs End xxx -->

    <div id="body-content" style="margin-bottom: 100px">
        <div class="container">
            <div class="row pad-top">

                <div class="col-md-12 col-lg-8">
                    <div class="sidebar-padding">
                        <div class="team-slider team-list">
                            <ul>
                                <li class="d-sm-flex">

                                    <div class="team-text">
                                        <h4 class="h4-md mb-3 fw-6 txt-blue">Why Trade CFDs on Energies such as Oil and Gas?</h4>
                                        <p>Trading CFDs on energies like oil and gas is a great way to diversify your portfolio. LSC offers you access to those markets without having to purchase the product outright..</p>
                                    </div>
                                </li>
                            </ul>

                        </div>


                        <h4 class="h4-md mb-3 fw-6 txt-blue mt-5">Project Worked On</h4>
                        <div class="owl-carousel" id="cases-related">
                            <div class="item">
                                <!-- Practice Area -->
                                <div class="practice-area-wrap">
                                    <a href="{{ asset('assets/new/images/practice/practice-area-1.jpg') }}"
                                        class="fancybox" data-fancybox="gallery" title="Lorem ipsum dolor sit amet">
                                        <div class="outer">
                                            <div class="stretch-effect"><i class="icofont icofont-search"></i></div>
                                            <img src="{{ asset('assets/new/images/practice/practice-area-1.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="header">
                                            FINANCIAL SERVICES
                                        </div>
                                    </a>
                                </div><!-- Practice Area End -->
                            </div>
                            <div class="item">
                                <!-- Practice Area -->
                                <div class="practice-area-wrap">
                                    <a href="{{ asset('assets/new/images/practice/practice-area-2.jpg') }}"
                                        class="fancybox" data-fancybox="gallery" title="Lorem ipsum dolor sit amet">
                                        <div class="outer">
                                            <div class="stretch-effect"><i class="icofont icofont-search"></i></div>
                                            <img src="{{ asset('assets/new/images/practice/practice-area-2.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="header">
                                            retirement consultation
                                        </div>
                                    </a>
                                </div><!-- Practice Area End -->
                            </div>
                            <div class="item">
                                <!-- Practice Area -->
                                <div class="practice-area-wrap">
                                    <a href="{{ asset('assets/new/images/practice/practice-area-3.jpg') }}"
                                        class="fancybox" data-fancybox="gallery" title="Lorem ipsum dolor sit amet">
                                        <div class="outer">
                                            <div class="stretch-effect"><i class="icofont icofont-search"></i></div>
                                            <img src="{{ asset('assets/new/images/practice/practice-area-3.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="header">
                                            investment consultation
                                        </div>
                                    </a>
                                </div><!-- Practice Area End -->
                            </div>
                            <div class="item">
                                <!-- Practice Area -->
                                <div class="practice-area-wrap">
                                    <a href="{{ asset('assets/new/images/practice/practice-area-4.jpg') }}"
                                        class="fancybox" data-fancybox="gallery" title="Lorem ipsum dolor sit amet">
                                        <div class="outer">
                                            <div class="stretch-effect"><i class="icofont icofont-search"></i></div>
                                            <img src="{{ asset('assets/new/images/practice/practice-area-4.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="header">
                                            Consumer Products
                                        </div>
                                    </a>
                                </div><!-- Practice Area End -->
                            </div>
                            <div class="item">
                                <!-- Practice Area -->
                                <div class="practice-area-wrap">
                                    <a href="{{ asset('assets/new/images/practice/practice-area-5.jpg') }}"
                                        class="fancybox" data-fancybox="gallery" title="Lorem ipsum dolor sit amet">
                                        <div class="outer">
                                            <div class="stretch-effect"><i class="icofont icofont-search"></i></div>
                                            <img src="{{ asset('assets/new/images/practice/practice-area-5.jpg') }}" alt="">
                                        </div>
                                        <div class="header">
                                            Tax consultation
                                        </div>
                                    </a>
                                </div><!-- Practice Area End -->
                            </div>
                            <div class="item">
                                <!-- Practice Area -->
                                <div class="practice-area-wrap">
                                    <a href="{{ asset('assets/new/images/practice/practice-area-6.jpg') }}"
                                        class="fancybox" data-fancybox="gallery" title="Lorem ipsum dolor sit amet">
                                        <div class="outer">
                                            <div class="stretch-effect"><i class="icofont icofont-search"></i></div>
                                            <img src="{{ asset('assets/new/images/practice/practice-area-6.jpg') }}"
                                                alt="">
                                        </div>
                                        <div class="header">
                                            Business consultation
                                        </div>
                                    </a>
                                </div><!-- Practice Area End -->
                            </div>
                        </div>
                        <div>&nbsp;</div>
                    </div>
                </div>

                <!-- Sidebar Left Start -->
                <div class="col-md-12 col-lg-4 sidebar-left order-lg-first"  style="overflow-x: scroll; ">
                    <div class="tradingview-widget-container">
                        <div class="tradingview-widget-container__widget"></div>
                        <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/"
                                rel="noopener" target="_blank"><span class="blue-text">Financial Markets</span></a>
                            by TradingView</div>
                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js"
                            async>
                            {
                                "colorTheme": "light",
                                "dateRange": "12M",
                                "showChart": true,
                                "locale": "en",
                                "largeChartUrl": "",
                                "isTransparent": false,
                                "showSymbolLogo": true,
                                "showFloatingTooltip": false,
                                "width": "400",
                                "height": "660",
                                "plotLineColorGrowing": "rgba(41, 98, 255, 1)",
                                "plotLineColorFalling": "rgba(41, 98, 255, 1)",
                                "gridLineColor": "rgba(240, 243, 250, 0)",
                                "scaleFontColor": "rgba(120, 123, 134, 1)",
                                "belowLineFillColorGrowing": "rgba(41, 98, 255, 0.12)",
                                "belowLineFillColorFalling": "rgba(41, 98, 255, 0.12)",
                                "belowLineFillColorGrowingBottom": "rgba(41, 98, 255, 0)",
                                "belowLineFillColorFallingBottom": "rgba(41, 98, 255, 0)",
                                "symbolActiveColor": "rgba(41, 98, 255, 0.12)",
                                "tabs": [{
                                        "title": "Indices",
                                        "symbols": [{
                                                "s": "FOREXCOM:SPXUSD",
                                                "d": "S&P 500"
                                            },
                                            {
                                                "s": "FOREXCOM:NSXUSD",
                                                "d": "US 100"
                                            },
                                            {
                                                "s": "FOREXCOM:DJI",
                                                "d": "Dow 30"
                                            },
                                            {
                                                "s": "INDEX:NKY",
                                                "d": "Nikkei 225"
                                            },
                                            {
                                                "s": "INDEX:DEU40",
                                                "d": "DAX Index"
                                            },
                                            {
                                                "s": "FOREXCOM:UKXGBP",
                                                "d": "UK 100"
                                            }
                                        ],
                                        "originalTitle": "Indices"
                                    },
                                    {
                                        "title": "Futures",
                                        "symbols": [{
                                                "s": "CME_MINI:ES1!",
                                                "d": "S&P 500"
                                            },
                                            {
                                                "s": "CME:6E1!",
                                                "d": "Euro"
                                            },
                                            {
                                                "s": "COMEX:GC1!",
                                                "d": "Gold"
                                            },
                                            {
                                                "s": "NYMEX:CL1!",
                                                "d": "Crude Oil"
                                            },
                                            {
                                                "s": "NYMEX:NG1!",
                                                "d": "Natural Gas"
                                            },
                                            {
                                                "s": "CBOT:ZC1!",
                                                "d": "Corn"
                                            }
                                        ],
                                        "originalTitle": "Futures"
                                    },
                                    {
                                        "title": "Bonds",
                                        "symbols": [{
                                                "s": "CME:GE1!",
                                                "d": "Eurodollar"
                                            },
                                            {
                                                "s": "CBOT:ZB1!",
                                                "d": "T-Bond"
                                            },
                                            {
                                                "s": "CBOT:UB1!",
                                                "d": "Ultra T-Bond"
                                            },
                                            {
                                                "s": "EUREX:FGBL1!",
                                                "d": "Euro Bund"
                                            },
                                            {
                                                "s": "EUREX:FBTP1!",
                                                "d": "Euro BTP"
                                            },
                                            {
                                                "s": "EUREX:FGBM1!",
                                                "d": "Euro BOBL"
                                            }
                                        ],
                                        "originalTitle": "Bonds"
                                    },
                                    {
                                        "title": "Forex",
                                        "symbols": [{
                                                "s": "FX:EURUSD",
                                                "d": "EUR/USD"
                                            },
                                            {
                                                "s": "FX:GBPUSD",
                                                "d": "GBP/USD"
                                            },
                                            {
                                                "s": "FX:USDJPY",
                                                "d": "USD/JPY"
                                            },
                                            {
                                                "s": "FX:USDCHF",
                                                "d": "USD/CHF"
                                            },
                                            {
                                                "s": "FX:AUDUSD",
                                                "d": "AUD/USD"
                                            },
                                            {
                                                "s": "FX:USDCAD",
                                                "d": "USD/CAD"
                                            }
                                        ],
                                        "originalTitle": "Forex"
                                    }
                                ]
                            }
                        </script>
                    </div>
                    <!-- TradingView Widget END -->
                </div><!-- Sidebar Left End -->

            </div>
        </div>

    </div>


    @include('includes.home_footer')
    @include('includes.home_script')
</body>

</html>
