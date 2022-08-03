<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from mannatstudio.com/html/consultit/new_version/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Jul 2022 09:42:15 GMT -->

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
                <li>Contact Us</li>
            </ul>
            <h1>Contact Us</h1>
        </div>
    </section>
    <!-- xxx Breadcrumbs End xxx -->

    <div id="body-content" class="no-overflow">
        <section class="section-pad" style="margin-bottom: 150px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 mx-auto">
                        <div class="contact-map-bg text-center">
                            <img src="images/map-bg.png" alt="">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-10 col-xl-9 mx-auto col-md-12">
                        <div class="contact-wrap bg-white alternate">
                            <form novalidate id="contact_form" method="post" action="#">
                                <div class="row">
                                    <div class="col-sm-12 col-md-4 mb-0">
                                        <input type="text" placeholder="Your Name" class="form-control border"
                                            id="name" name="name">
                                    </div>
                                    <div class="col-sm-12 col-md-4 mb-0">
                                        <input type="text" placeholder="Your Email " class="form-control border"
                                            id="lastname" name="lastname">
                                    </div>
                                    <div class="col-sm-12 col-md-4 mb-0">
                                        <input type="text" placeholder="Subject" class="form-control border"
                                            id="email" name="email">
                                    </div>
                                    <div class="col-sm-12 mb-0">
                                        <textarea placeholder="Message" rows="8" class="form-control border" id="comment" name="comment"></textarea>
                                    </div>
                                    <div class="col-sm-12">
                                        <button class="btn-theme bg-navy-blue mt-3" type="submit">Send Now <i
                                                class="icofont icofont-verification-check"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="clearfix"></div>
    </div>
    @include('includes.home_footer')
    @include('includes.home_script')
</body>

</html>
