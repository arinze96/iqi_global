<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no" />
<link rel="icon" href="{{ asset('assets/images/up.png') }}">

<meta name="author" content="Mannat Studio">
<meta name="description"
    content="Consultit is a HTML template exclusively built for finance, accounting, financial, brokerage, coaching, law office, bussines planning and consulting websites.">
<meta name="keywords"
    content="Consultit, responsive, html5, business, consulting business, finance business, Consulting and Finance industry, Financial Advisors, Insurance Brokers, Accountants, Lawyers, Finance Firms, Consultants, Investments Consulting Services, Advisors, Investment Experts, Trading and Investments, Technology Consulting, and Business Development Agencies, or other Finance and Consulting related businesses">

<!-- Bootstrap core CSS -->
<link href="{{ asset('assets/new/css/base.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/js/growl-notification/light-theme.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/js/growl-notification/colored-theme.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/js/growl-notification/dark-theme.min.css') }}" rel="stylesheet" type="text/css">
<!-- REVOLUTION STYLE SHEETS -->
<link rel="stylesheet" type="text/css"
    href="{{ asset('assets/new/rev-slider/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css') }}">
<link rel="stylesheet" type="text/css"
    href="{{ asset('assets/new/rev-slider/revolution/fonts/font-awesome/css/font-awesome.css') }}"">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/new/rev-slider/revolution/css/settings.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/new/rev-slider/revolution/css/layers.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/new/rev-slider/revolution/css/navigation.css') }}">


<script src="{{ asset('assets/new/js/modernizr-2.6.2.min.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<script type="text/javascript">
    (function() {
        var options = {
            whatsapp: "+16614557684",
            call_to_action: "Message us",
            position: "left",
        };
        var proto = document.location.protocol,
            host = "getbutton.io",
            url = proto + "//static." + host;
        var s = document.createElement('script');
        s.type = 'text/javascript';
        s.async = true;
        s.src = url + '/widget-send-button/js/init.js';
        s.onload = function() {
            WhWidgetSendButton.init(host, proto, options);
        };
        var x = document.getElementsByTagName('script')[0];
        x.parentNode.insertBefore(s, x);
    })();
</script>



<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/62fba4c337898912e963542f/1gajfn7j5';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>
<!--End of Tawk.to Script-->

<style>
    #slider {
        position: absolute;
        width: 250px;
        height: 70px;
        background: #78cc5d;
        transform: translateX(-70%);
        -webkit-transform: translateX(-70%);
    }

    #caret: {
        width: 400px,
            height: 80px,
            background-color: red,
            position: fixed
    }

    .xd {
        color: white;
        font-size: 10px;
        padding-left: 10px;
    }

    .slide-in {
        animation: slide-in 2s forwards;
        -webkit-animation: slide-in 2s forwards;
    }

    .slide-out {
        animation: slide-out 2s forwards;
        -webkit-animation: slide-out 2s forwards;
    }

    @keyframes slide-in {
        100% {
            transform: translateX(30%);
        }
    }

    @-webkit-keyframes slide-in {
        100% {
            -webkit-transform: translateX(20%);
        }
    }

    @keyframes slide-out {
        0% {
            transform: translateX(0%);
        }

        100% {
            transform: translateX(-100%);
        }
    }

    @-webkit-keyframes slide-out {
        0% {
            -webkit-transform: translateX(0%);
        }

        100% {
            -webkit-transform: translateX(-100%);
        }
    }
</style>

<style>
    @import url("https://fonts.googleapis.com/css?family=Roboto");
    @import url("https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");

    body {
        font-family: "Roboto", sans-serif;
    }

    * {
        margin: 0;
        padding: 0;
    }

    i {
        margin-right: 10px;
    }

    /*----------bootstrap-navbar-css------------*/
    .navbar-logo {
        padding: 15px;
        color: #fff;
    }

    .navbar-mainbg {
        background-color: #5161ce;
        padding: 0px;
    }

    #navbarSupportedContent {
        overflow: hidden;
        position: relative;
    }

    #navbarSupportedContent ul {
        padding: 0px;
        margin: 0px;
    }

    #navbarSupportedContent ul li a i {
        margin-right: 10px;
    }

    #navbarSupportedContent li {
        list-style-type: none;
        float: left;
    }

    #navbarSupportedContent ul li a {
        color: rgba(255, 255, 255, 0.5);
        text-decoration: none;
        font-size: 15px;
        display: block;
        padding: 20px 20px;
        transition-duration: 0.6s;
        transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
        position: relative;
    }

    #navbarSupportedContent>ul>li.active>a {
        color: #5161ce;
        background-color: transparent;
        transition: all 0.7s;
    }

    #navbarSupportedContent a:not(:only-child):after {
        content: "\f105";
        position: absolute;
        right: 20px;
        top: 10px;
        font-size: 14px;
        font-family: "Font Awesome 5 Free";
        display: inline-block;
        padding-right: 3px;
        vertical-align: middle;
        font-weight: 900;
        transition: 0.5s;
    }

    #navbarSupportedContent .active>a:not(:only-child):after {
        transform: rotate(90deg);
    }

    .hori-selector {
        display: inline-block;
        position: absolute;
        height: 100%;
        top: 0px;
        left: 0px;
        transition-duration: 0.6s;
        transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
        background-color: #fff;
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
        margin-top: 10px;
    }

    .hori-selector .right,
    .hori-selector .left {
        position: absolute;
        width: 25px;
        height: 25px;
        background-color: #fff;
        bottom: 10px;
    }

    .hori-selector .right {
        right: -25px;
    }

    .hori-selector .left {
        left: -25px;
    }

    .hori-selector .right:before,
    .hori-selector .left:before {
        content: "";
        position: absolute;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background-color: #5161ce;
    }

    .hori-selector .right:before {
        bottom: 0;
        right: -25px;
    }

    .hori-selector .left:before {
        bottom: 0;
        left: -25px;
    }

    @media (min-width: 992px) {
        .navbar-expand-custom {
            -ms-flex-flow: row nowrap;
            flex-flow: row nowrap;
            -ms-flex-pack: start;
            justify-content: flex-start;
        }

        .navbar-expand-custom .navbar-nav {
            -ms-flex-direction: row;
            flex-direction: row;
        }

        .navbar-expand-custom .navbar-toggler {
            display: none;
        }

        .navbar-expand-custom .navbar-collapse {
            display: -ms-flexbox !important;
            display: flex !important;
            -ms-flex-preferred-size: auto;
            flex-basis: auto;
        }
    }

    @media (max-width: 991px) {
        #navbarSupportedContent ul li a {
            padding: 12px 30px;
        }

        .hori-selector {
            margin-top: 0px;
            margin-left: 10px;
            border-radius: 0;
            border-top-left-radius: 25px;
            border-bottom-left-radius: 25px;
        }

        .hori-selector .left,
        .hori-selector .right {
            right: 10px;
        }

        .hori-selector .left {
            top: -25px;
            left: auto;
        }

        .hori-selector .right {
            bottom: -25px;
        }

        .hori-selector .left:before {
            left: -25px;
            top: -25px;
        }

        .hori-selector .right:before {
            bottom: -25px;
            left: -25px;
        }
    }
</style>

<style>
    /* ---- reset ---- */
    /* body {
        margin: 0;
        font: normal 75% Arial, Helvetica, sans-serif;
    } */

    /* canvas {
        display: block;
        vertical-align: bottom;
    } */

    /* ---- particles.js container ---- */
    #particles-js {
        /* position: absolute; */
        width: 100%;
        /* height: 100%; */
        background-color: #b61924;
        background-image: url("/assets/img/btcimg1.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        /* background-position: 50% 50%; */
    }

    /* ---- stats.js ---- */
    .count-particles {
        background: #000022;
        position: absolute;
        top: 48px;
        left: 0;
        width: 80px;
        color: #13E8E9;
        font-size: .8em;
        text-align: left;
        text-indent: 4px;
        line-height: 14px;
        padding-bottom: 2px;
        font-family: Helvetica, Arial, sans-serif;
        font-weight: bold;
    }

    .js-count-particles {
        font-size: 1.1em;
    }

    #stats,
    .count-particles {
        -webkit-user-select: none;
        margin-top: 5px;
        margin-left: 5px;
    }

    #stats {
        border-radius: 3px 3px 0 0;
        overflow: hidden;
    }

    .count-particles {
        border-radius: 0 0 3px 3px;
    }
</style>
