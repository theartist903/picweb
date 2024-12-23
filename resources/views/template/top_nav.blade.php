@php
    $latest_news = App\News::where('active' , 1)->where("featured_news" , 0)->where('covid_news' , 0)->orderByDesc('updated_at')->limit(3)->get();
    $featured_news = App\News::where('active' , 1)->where("featured_news" , 1)->orderByDesc('updated_at')->limit(1)->get();
    $covid = App\News::where('active' , 1)->where("covid_news" , 1)->orderByDesc('updated_at')->limit(1)->get();
    $management = \App\Management::where("type" , "Management")->has('section')->orderBy('level' , 'ASC')->get();
    $services = \App\Management::where("type" , "Services")->has('section')->orderBy('level' , 'ASC')->get();
@endphp

<div class="top-header-area">
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-8 col-md-12">
                <!-- <div class="top-header-info">
	<p>Learn what to expect when visiting the Emergency Department.
	<a href="our-services.html">
	Learn More <i class="ti ti-arrow-right"></i>
	</a>
	</p>
	</div> -->
            </div>
            <!-- <div class="col-lg-4 col-md-12">
		<div class="top-header-btn">
		<a href="book-an-appointment.html">
		<i class="ti ti-calendar-plus"></i>
		Request An Appointment </a>
		</div>
		</div> -->
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-xl " id="navbar">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.html">
            <img class="black-logo" src="{!! url('resources/images/logo.png')!!}" alt="PIC" width="15%">
        </a>
        <button class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#navbarOffcanvas">
<span class="burger-menu">
<span class="top-bar"></span>
<span class="middle-bar"></span>
<span class="bottom-bar"></span>
</span>
        </button>
        <div class="collapse navbar-collapse">
            <div class="menu-top-menu-container">
                <ul id="menu-top-menu" class="top-navbar-list">
                    <li id="menu-item-762" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-762"><a href="online-services.html">MTI Acts</a></li>
                    <li id="menu-item-765" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-765"><a href="pay-your-bills.html">Downloads</a></li>
                    <li id="menu-item-763" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-763"><a href="contact-us.html">Online Lab Reports</a></li>
                    <li id="menu-item-763" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-763"><a href="contact-us.html">Health Professionals</a></li>
                    <li id="menu-item-764" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-764"><a href="blog.html">Contact Us</a></li>
                    <li id="menu-item-760" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-760"><a href="donate.html">Email</a></li>
                </ul>
            </div>

            <div class="navbar-inner d-flex align-items-center justify-content-between">
                <ul id="menu-primary-menu menuzord-menu menuzord-right menuzord-indented scrollable" style="max-height: 400px;margin-top: 0.5em" class="navbar-nav ms-auto">
                    
                    <li id="menu-item-697" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown menu-item-697 nav-item level-1 mega-menu">
                        <a title="Home" href="#" data-hover="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle nav-link" id="menu-item-dropdown-697">Home</a>
                        <ul class="dropdown-menu" aria-labelledby="menu-item-dropdown-697" role="menu" style="width: 50%;">
                            <li id="menu-item-1400" class="menu-item menu-item-type-post_type menu-item-object-header menu-item-1400 nav-item">
                                <div class="mega-menu-content">
                                    <div data-elementor-type="wp-post" data-elementor-id="1399" class="elementor elementor-1399">
                                        <div class="elementor-section elementor-top-section elementor-element elementor-element-fbdbecb elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                                            data-id="fbdbecb" data-element_type="section">
                                            <div class="elementor-container elementor-column-gap-no">
                                                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-83e2487" data-id="83e2487" data-element_type="column">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-44a95b9 elementor-widget elementor-widget-HospaHeaderServicesArea" data-id="44a95b9" data-element_type="widget" data-widget_type="HospaHeaderServicesArea.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="container-fluid">
                                                                    <div class="row">

                                                                        <div class="col-3 pe-0">
                                                                            <ul class="mega-menu-submenu">
                                                                                <h6 class="megamenu-col-title mb-3 text-secondary"><strong>Latest News:</strong></h6>
                                                                                    @foreach($latest_news as $lnew)
                                                                                        <li class="nav-item">
                                                                                            <div class="row mb-2">
                                                                                                <div class="col-md-4">
                                                                                                    <a href="{{ url('news-details/' .$lnew->id) }}">
                                                                                                        <img  alt="" src="{{ env('APP_CMS') }}/resources/news/{{ $lnew->news_image }}" style="width: 100px; height: 60px;">
                                                                                                    </a>
                                                                                                </div>
                                                                                                <div class="col-md-8" style="padding-right: 20px;">
                                                                                                    <a href="{{ url('news-details/' .$lnew->id) }}" style="font-size: 14px;">{!! substr($lnew->news_image_description , 0 ,60) !!}</a>
                                                                                                </div>
                                                                        </div>
                                                                                         </li>
                                                                                @endforeach
                                                                            </ul>
                                                                        </div>

                                                                        <div class="col-3 pe-0">
                                                                            <ul class="mega-menu-submenu">
                                                                                <li class="nav-item">
                                                                                    <div class="col3">
                                                                                        <h5 class="megamenu-col-title mb-3" style="color: #243A76;"><strong>Featured News:</strong></h5>
                                                                                        @foreach($featured_news as $fNew)
                                                                                            <article class="post clearfix">
                                                                                                <div class="entry-header">
                                                                                                    <div class="post-thumb"> <img class="img-responsive" style="width: 100%; height: 65%;" src="{{ env('APP_CMS') }}/resources/news/{{ $fNew->news_image }}" alt=""> </div>
                                                                                                </div>

                                                                                                <div class="entry-content">
                                                                                                    <p class="" style="font-size: 14px;">{!! substr($fNew->news_image_description , 0 , 40) !!} <a class="" href="{{ url('news-details/' .$fNew->id) }}" style="font-weight: 700"><br>read more...</a></p>
                                                                                                </div>
                                                                                            </article>
                                                                                        @endforeach
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>

                                                                        <div class="col-3 pe-0">
                                                                            <ul class="mega-menu-submenu">
                                                                                <li class="nav-item">
                                                                                    <div class="col3">
                                                                                        <h4 class="megamenu-col-title"><strong style="color: transparent">.</strong></h4>
                                                                                        @foreach($covid as $cNew)
                                                                                            <article class="post clearfix">
                                                                                                <div class="entry-header">
                                                                                                    <div class="post-thumb"> <img class="img-responsive" style="width: 100%; height: 65%;" src="{{ env('APP_CMS') }}/resources/news/{{ $cNew->news_image }}" alt=""> </div>
                                                                                                </div>

                                                                                                <div class="entry-content">
                                                                                                    <p class="" style="font-size: 14px;">{!! substr($cNew->news_image_description , 0 , 40) !!} <a class="" href="{{ url('news-details/' .$cNew->id) }}" style="font-weight: 700">  read more...</a></p>
                                                                                                </div>
                                                                                            </article>
                                                                                        @endforeach
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </div>

                                                                        <div class="col-3">
                                                                            <h6 class="megamenu-col-title mb-3 text-secondary"><strong>Quick Links:</strong></h6>
                                                                            <ul class="mega-menu-submenu" style="font-size: 14px;">
{{--                                                                                <li class="nav-item"><a class="nav-link" href="{{ url('/find-doctor') }}">Find a doctor</a></li>--}}
{{--                                                                                <li class="nav-item"><a class="nav-link" href="#">Diagnostic Services</a></li>--}}
                                                                                <li class="nav-item"><a class="nav-link" href="{{ url('/timeline') }}">Achievements Timeline</a></li>
{{--                                                                                <li class="nav-item"><a class="nav-link" href="#">Food & Nutrition</a></li>--}}
                                                                                <li class="nav-item"><a class="nav-link" href="{!! url('/pictures-gallery') !!}">Pictures Gallery</a></li>
                                                                                <li class="nav-item"><a class="nav-link" href="{!! url('/video-gallery') !!}">Video Gallery</a></li>
                                                                            </ul>
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
                            </li>
                        </ul>
                    </li>




{{--    <div class="col3">--}}
{{--        <h4 class="megamenu-col-title">Quick Links:</h4>--}}
{{--        <ul class="list-dashed list-icon">--}}
{{--            <li><a href="{{ url('/find-doctor') }}">Find a doctor</a></li>--}}
{{--            <li><a href="#">Diagnostic Services</a></li>--}}
{{--            <li><a href="{{ url('/timeline') }}">Achievements Timeline</a></li>--}}
{{--            <li><a href="#">Food & Nutrition</a></li>--}}
{{--            <li><a href="{!! url('/pictures-gallery') !!}">Pictures Gallery</a></li>--}}
{{--            <li><a href="{!! url('/video-gallery') !!}">Video Gallery</a></li>--}}
{{--        </ul>--}}
{{--    </div>--}}
{{--    </div>--}}
{{--    </div>--}}
{{--    </li>--}}


                    <li id="menu-item-300"
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown menu-item-300 nav-item level-1">
                        <a title="Patients &amp; Visitors" href="#" data-hover="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle nav-link" id="menu-item-dropdown-300">About Us</a>
                        <ul class="dropdown-menu" aria-labelledby="menu-item-dropdown-300" role="menu">
                            <li id="menu-item-301"                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-301 nav-item">
                                <a title="Visitor Information" href="visitor-information.html"
                                   class="dropdown-item nav-link">About PIC</a></li>
                            <li id="menu-item-447"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-447 nav-item">
                                <a title="Hospital Stay" href="hospital-stay.html" class="dropdown-item nav-link">Vision
                                    & Mission</a></li>
                            <li id="menu-item-454"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-454 nav-item">
                                <a title="Health Information" href="health-information.html"
                                   class="dropdown-item nav-link">Board of Governors</a></li>
                            <li id="menu-item-784"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-784 nav-item">
                                <a title="Find a Location" href="find-a-location.html" class="dropdown-item nav-link">Director's
                                    Message</a></li>

                        </ul>
                    </li>
                    <li id="menu-item-697"
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown menu-item-697 nav-item level-1 mega-menu">
                        <a title="Areas of Care" href="#" data-hover="dropdown" aria-haspopup="true"
                           aria-expanded="false" class="dropdown-toggle nav-link" id="menu-item-dropdown-697">Areas of
                            Care</a>
                        <ul class="dropdown-menu" aria-labelledby="menu-item-dropdown-697" role="menu">
                            <li id="menu-item-1400"
                                class="menu-item menu-item-type-post_type menu-item-object-header menu-item-1400 nav-item">
                                <div class="mega-menu-content">
                                    <div data-elementor-type="wp-post" data-elementor-id="1399"
                                         class="elementor elementor-1399">
                                        <div
                                            class="elementor-section elementor-top-section elementor-element elementor-element-fbdbecb elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                                            data-id="fbdbecb" data-element_type="section">
                                            <div class="elementor-container elementor-column-gap-no">
                                                <div
                                                    class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-83e2487"
                                                    data-id="83e2487" data-element_type="column">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div
                                                            class="elementor-element elementor-element-44a95b9 elementor-widget elementor-widget-HospaHeaderServicesArea"
                                                            data-id="44a95b9" data-element_type="widget"
                                                            data-widget_type="HospaHeaderServicesArea.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="container-fluid">
                                                                    <div class="row">
                                                                        <div class="col pe-0">
                                                                            <ul class="mega-menu-submenu">
                                                                                <li class="nav-item">
                                                                                    <a href="services-post/orthopedic.html"
                                                                                       class="nav-link">
                                                                                        Cardiac Emergency
                                                                                        <span>24/7</span>
                                                                                    </a>

                                                                                </li>
                                                                                <li class="nav-item">
                                                                                    <a href="services-post/food-nutrition.html"
                                                                                       class="nav-link">
                                                                                        Pulmonology <span>(Consultation/PFT)</span>
                                                                                    </a>

                                                                                </li>
                                                                                <li class="nav-item">
                                                                                <a href="services-post/dental-care.html"
                                                                                   class="nav-link">
                                                                                    Laboratory Services
                                                                                    <span>24/7</span>
                                                                                </a>
                                                                                </li>
                                                                            </ul>

                                                                        </div>
                                                                        <div class="col pe-0">
                                                                            <ul class="mega-menu-submenu">
                                                                                <li class="nav-item">
                                                                                    <a href="our-services.html"
                                                                                       class="nav-link">
                                                                                        Cardiology <span>(Adult & Paediatrics)</span>
                                                                                    </a>

                                                                                </li>
                                                                                <li class="nav-item">
                                                                                    <a href="services-post/surgery.html"
                                                                                       class="nav-link">
                                                                                        Nephrology<span>(Consultation/Dialysis)</span>
                                                                                    </a>

                                                                                </li>
                                                                                <li class="nav-item">
                                                                                <li class="nav-item">
                                                                                    <a href="services-post/ophthalmology.html"
                                                                                       class="nav-link">
                                                                                        Radiology <span>(CT/MRI/US/X-Ray)</span>
                                                                                    </a>

                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col">
                                                                            <ul class="mega-menu-submenu">
                                                                                <li class="nav-item">
                                                                                    <a href="services-post/cardiology.html"
                                                                                       class="nav-link">
                                                                                        Cardiac Surgery
                                                                                        <span>(Adult & Paediatrics)</span>
                                                                                    </a>
                                                                                </li>

                                                                                <li class="nav-item">
                                                                                    <a href="services-post/ophthalmology.html"
                                                                                       class="nav-link">
                                                                                        Physiotherapy <span></span>
                                                                                    </a>
                                                                                </li>
                                                                                <li class="nav-item">
                                                                                    <a href="services-post/ophthalmology.html"
                                                                                       class="nav-link">
                                                                                        Cardiology Diagnostics <span>(ECHO/ECG/ETT)</span>
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
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
                            </li>
                        </ul>
                    </li>
                    <li id="menu-item-334"
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown menu-item-334 nav-item level-1">
                        <a title="About Us" href="#" data-hover="dropdown" aria-haspopup="true" aria-expanded="false"
                           class="dropdown-toggle nav-link" id="menu-item-dropdown-334">About Us</a>
                        <ul class="dropdown-menu" aria-labelledby="menu-item-dropdown-334" role="menu">
                            <li id="menu-item-482"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-482 nav-item">
                                <a title="About Overview" href="about-overview.html" class="dropdown-item nav-link">About
                                    Overview</a></li>
                            <li id="menu-item-3501"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3501 nav-item">
                                <a title="About Us Two" href="about-two.html" class="dropdown-item nav-link">About Us
                                    Two</a></li>
                            <li id="menu-item-530"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-530 nav-item">
                                <a title="Our Strategy" href="our-strategy.html" class="dropdown-item nav-link">Our
                                    Strategy</a></li>
                            <li id="menu-item-315"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-315 nav-item">
                                <a title="Leadership Team" href="leadership-team.html" class="dropdown-item nav-link">Leadership
                                    Team</a></li>
                            <li id="menu-item-662"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-662 nav-item">
                                <a title="Health Professionals" href="health-professionals.html"
                                   class="dropdown-item nav-link">Health Professionals</a></li>
                            <li id="menu-item-563"
                                class="menu-item menu-item-type-post_type menu-item-object-doctors menu-item-563 nav-item">
                                <a title="Professional Details" href="doctors-post/dr-victor-james.html"
                                   class="dropdown-item nav-link">Professional Details</a></li>
                            <li id="menu-item-685"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-685 nav-item">
                                <a title="Donate" href="donate.html" class="dropdown-item nav-link">Donate</a></li>
                            <li id="menu-item-566"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-566 nav-item">
                                <a title="Online Services" href="online-services.html" class="dropdown-item nav-link">Online
                                    Services</a></li>
                            <li id="menu-item-337"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-337 nav-item">
                                <a title="Pay Your Bills" href="pay-your-bills.html" class="dropdown-item nav-link">Pay
                                    Your Bills</a></li>
                            <li id="menu-item-590"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-590 nav-item">
                                <a title="Book An Appointment" href="book-an-appointment.html"
                                   class="dropdown-item nav-link">Book An Appointment</a></li>
                        </ul>
                    </li>
                  
                    <li id="menu-item-782"
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown menu-item-782 nav-item level-1">
                        <a title="Education &amp; Research" href="#" data-hover="dropdown" aria-haspopup="true"
                           aria-expanded="false" class="dropdown-toggle nav-link" id="menu-item-dropdown-782">Procurement</a>
                        <ul class="dropdown-menu" aria-labelledby="menu-item-dropdown-782" role="menu">
                            <li id="menu-item-783"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-783 nav-item">
                                <a title="Education" href="education.html" class="dropdown-item nav-link">Tenders</a>
                            </li>
                            <li id="menu-item-945"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-945 nav-item">
                                <a title="Research" href="research.html" class="dropdown-item nav-link">Annual
                                    Procurement Plan</a></li>
                        </ul>
                    </li>

                    <li id="menu-item-782"
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown menu-item-782 nav-item level-1">
                        <a title="Education &amp; Research" href="#" data-hover="dropdown" aria-haspopup="true"
                           aria-expanded="false" class="dropdown-toggle nav-link" id="menu-item-dropdown-782">Education & Research</a>
                        <ul class="dropdown-menu" aria-labelledby="menu-item-dropdown-782" role="menu">
                            <li id="menu-item-783"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-783 nav-item">
                                <a title="Education" href="education.html" class="dropdown-item nav-link">Medical Education</a>
                            </li>
                            <li id="menu-item-945"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-945 nav-item">
                                <a title="Research" href="research.html" class="dropdown-item nav-link">Research</a></li>
                            <li id="menu-item-948" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-948 nav-item"><a title="Annual Wellness Exam" href="annual-wellness-exam.html" class="dropdown-item nav-link">Annual Wellness Exam</a></li>
                        </ul>
                    </li>

                    <li id="menu-item-601"
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown menu-item-601 nav-item level-1">
                        <a title="Careers &amp; Volunteers" href="#" data-hover="dropdown" aria-haspopup="true"
                           aria-expanded="false" class="dropdown-toggle nav-link"
                           id="menu-item-dropdown-601">Careers</a>
                        <ul class="dropdown-menu" aria-labelledby="menu-item-dropdown-601" role="menu">
                            <li id="menu-item-630"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-630 nav-item">
                                <a title="Our Careers" href="our-careers.html" class="dropdown-item nav-link">Advertisements</a>
                            </li>
                            <li id="menu-item-656"
                                class="menu-item menu-item-type-post_type menu-item-object-career menu-item-656 nav-item">
                                <a title="Career Details" href="career-post/acute-care-jobs.html"
                                   class="dropdown-item nav-link">Job Portal</a></li>
                            <!-- <li id="menu-item-604" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-604 nav-item"><a title="Volunteers" href="volunteers.html" class="dropdown-item nav-link">Volunteers</a></li> -->
                        </ul>
                    </li>
                    <!-- <li id="menu-item-1703" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown menu-item-1703 nav-item level-1"><a title="Shop" href="#" data-hover="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle nav-link" id="menu-item-dropdown-1703">Shop</a>
<ul class="dropdown-menu" aria-labelledby="menu-item-dropdown-1703" role="menu">
<li id="menu-item-1702" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1702 nav-item"><a title="Shop" href="shop.html" class="dropdown-item nav-link">Shop</a></li>
<li id="menu-item-1704" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-1704 nav-item"><a title="Product Details" href="product/glass-ampule.html" class="dropdown-item nav-link">Product Details</a></li>
<li id="menu-item-1700" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1700 nav-item"><a title="Checkout" href="checkout.html" class="dropdown-item nav-link">Checkout</a></li>
<li id="menu-item-1701" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1701 nav-item"><a title="Cart" href="cart.html" class="dropdown-item nav-link">Cart</a></li>
<li id="menu-item-1699" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1699 nav-item"><a title="My account" href="my-account.html" class="dropdown-item nav-link">My account</a></li>
</ul>
</li> -->
                    <!-- <li id="menu-item-333" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown menu-item-333 nav-item level-1"><a title="Pages" href="#" data-hover="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle nav-link" id="menu-item-dropdown-333">Pages</a>
<ul class="dropdown-menu" aria-labelledby="menu-item-dropdown-333" role="menu">
<li id="menu-item-318" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-318 nav-item"><a title="Pricing Plan" href="pricing-plan.html" class="dropdown-item nav-link">Pricing Plan</a></li>
<li id="menu-item-915" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown menu-item-915 nav-item"><a title="Lab Test" href="#" class="dropdown-item nav-link">Lab Test</a>
<ul class="dropdown-menu" aria-labelledby="menu-item-dropdown-333" role="menu">
<li id="menu-item-352" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-352 nav-item"><a title="Lab Test" href="lab-test.html" class="dropdown-item nav-link">Lab Test</a></li>
<li id="menu-item-914" class="menu-item menu-item-type-post_type menu-item-object-labtest menu-item-914 nav-item"><a title="Lab Test Details" href="labtest-post/x-rays.html" class="dropdown-item nav-link">Lab Test Details</a></li>
</ul>
</li>
<li id="menu-item-962" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown menu-item-962 nav-item"><a title="Blog" href="#" class="dropdown-item nav-link">Blog</a>
<ul class="dropdown-menu" aria-labelledby="menu-item-dropdown-333" role="menu">
<li id="menu-item-1626" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1626 nav-item"><a title="Blog" href="blog.html" class="dropdown-item nav-link">Blog</a></li>
<li id="menu-item-1260" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1260 nav-item"><a title="Blog Details" href="patient-stories-empowering-transformations-at-hospa.html" class="dropdown-item nav-link">Blog Details</a></li>
</ul>
</li>
<li id="menu-item-355" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-355 nav-item"><a title="Our Process" href="our-process.html" class="dropdown-item nav-link">Our Process</a></li>
<li id="menu-item-439" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-439 nav-item"><a title="Working Hours" href="working-hours.html" class="dropdown-item nav-link">Working Hours</a></li>
<li id="menu-item-373" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-373 nav-item"><a title="Our Gallery" href="our-gallery.html" class="dropdown-item nav-link">Our Gallery</a></li>
<li id="menu-item-393" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-393 nav-item"><a title="FAQ’s" href="faqs.html" class="dropdown-item nav-link">FAQ’s</a></li>
<li id="menu-item-407" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-407 nav-item"><a title="Testimonials" href="testimonials.html" class="dropdown-item nav-link">Testimonials</a></li>
<li id="menu-item-790" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown menu-item-790 nav-item"><a title="Additional Pages" href="#" class="dropdown-item nav-link">Additional Pages</a>
<ul class="dropdown-menu" aria-labelledby="menu-item-dropdown-333" role="menu">
<li id="menu-item-791" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-791 nav-item"><a title="Terms and Conditions" href="terms-and-conditions.html" class="dropdown-item nav-link">Terms and Conditions</a></li>
<li id="menu-item-792" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-792 nav-item"><a title="Privacy Policy" href="privacy-policy.html" class="dropdown-item nav-link">Privacy Policy</a></li>
<li id="menu-item-1264" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1264 nav-item"><a title="Coming Soon" href="coming-soon.html" class="dropdown-item nav-link">Coming Soon</a></li>
</ul>
</li>
<li id="menu-item-423" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-423 nav-item"><a title="Contact Us" href="contact-us.html" class="dropdown-item nav-link">Contact Us</a></li>
</ul>
</li> -->
                </ul>
                <div class="others-option d-flex align-items-center">
                    <div class="option-item">
                        <div class="search-bar main-menu__search search-toggler">
                            <i class="ti ti-search"></i>
                        </div>
                    </div>
                    <div class="option-item">
                        <a href="contact-us.html" class="default-btn">
                            <i class="ti ti-alarm-plus-filled"></i>
                            Emergency </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
<div class="search-popup">
    <div class="search-popup-overlay search-toggler"></div>
    <div class="search-popup-content">
        <form class="search-popup-form" method="get" action="index.html">
            <input type="text" value name="s" class="form-control" placeholder="Search">
            <button type="submit" aria-label="search submit">
                <i class="ti ti-search"></i>
            </button>
        </form>
    </div>
</div>
<div class="mobile-navbar offcanvas offcanvas-end border-0 " data-bs-backdrop="static" tabindex="-1"
     id="navbarOffcanvas">
    <div class="offcanvas-header">
        <a class="logo d-inline-block" href="index.html">
            <img class="logo-light" src="{!! url('/resources/images/logo.png') !!}" alt="PICMTI">
        </a>
        <button type="button" class="close-btn bg-transparent position-relative lh-1 p-0 border-0"
                data-bs-dismiss="offcanvas" aria-label="Close">
            <i class="ti ti-x"></i>
        </button>
    </div>
    <div class="offcanvas-body">
        <div class="additional-pages">
            <button class="top-navbar-btn" type="button" data-bs-toggle="collapse" data-bs-target="#topNavbar"
                    aria-expanded="false" aria-controls="topNavbar">
                <span>Top Pages</span>
                <i class="ti ti-chevron-down"></i>
            </button>
            <div class="collapse" id="topNavbar">
                <div class="card card-body">
                    <div class="menu-top-menu-container">
                        <ul id="menu-top-menu-1" class="top-navbar-list">
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-762"><a
                                    href="online-services.html">Online Services</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-765"><a
                                    href="pay-your-bills.html">Pay Your Bills</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-761"><a
                                    href="health-professionals.html">Health Professionals</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-763"><a
                                    href="contact-us.html">Contact Us</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-764"><a
                                    href="blog.html">News</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-760"><a
                                    href="donate.html">Donate</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <ul id="menu-mobile-menu" class="responsive-menu mobile-menu">
            <li id="menu-item-1559"
                class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-1559">
                <a href="#">Home</a>
                <ul class="sub-menu">
                    <li id="menu-item-1525"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-1628 current_page_item menu-item-1525">
                        <a href="index.html" aria-current="page">Medical Center</a></li>
                    <li id="menu-item-1541"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1541"><a
                            href="home-two.html">General Hospital</a></li>
                    <li id="menu-item-1540"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1540"><a
                            href="home-three.html">Healthcare Center</a></li>
                    <li id="menu-item-3622"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3622"><a
                            href="home-four.html">Eye Care Hospital</a></li>
                    <li id="menu-item-3602"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3602"><a
                            href="home-five.html">Child Care Hospital</a></li>
                </ul>
            </li>
            <li id="menu-item-1560"
                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1560"><a
                    href="#">Patients &#038; Visitors</a>
                <ul class="sub-menu">
                    <li id="menu-item-1556"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1556"><a
                            href="visitor-information.html">Visitor Information</a></li>
                    <li id="menu-item-1542"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1542"><a
                            href="hospital-stay.html">Hospital Stay</a></li>
                    <li id="menu-item-1538"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1538"><a
                            href="health-information.html">Health Information</a></li>
                    <li id="menu-item-1537"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1537"><a
                            href="find-a-location.html">Find a Location</a></li>
                    <li id="menu-item-1535"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1535"><a
                            href="emergency-care-2.html">Emergency Care</a></li>
                </ul>
            </li>
            <li id="menu-item-1561"
                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1561"><a
                    href="#">Areas of Care</a>
                <ul class="sub-menu">
                    <li id="menu-item-1549"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1549"><a
                            href="our-services.html">Our Services</a></li>
                    <li id="menu-item-1562"
                        class="menu-item menu-item-type-post_type menu-item-object-services menu-item-1562"><a
                            href="services-post/cardiology.html">Service Details</a></li>
                </ul>
            </li>
            <li id="menu-item-1563"
                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1563"><a
                    href="#">About Us</a>
                <ul class="sub-menu">
                    <li id="menu-item-1528"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1528"><a
                            href="about-overview.html">About Overview</a></li>
                    <li id="menu-item-3500"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3500"><a
                            href="about-two.html">About Us Two</a></li>
                    <li id="menu-item-1550"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1550"><a
                            href="our-strategy.html">Our Strategy</a></li>
                    <li id="menu-item-1544"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1544"><a
                            href="leadership-team.html">Leadership Team</a></li>
                    <li id="menu-item-1539"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1539"><a
                            href="health-professionals.html">Health Professionals</a></li>
                    <li id="menu-item-1564"
                        class="menu-item menu-item-type-post_type menu-item-object-doctors menu-item-1564"><a
                            href="doctors-post/dr-victor-james.html">Professional Details</a></li>
                    <li id="menu-item-1533"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1533"><a
                            href="donate.html">Donate</a></li>
                    <li id="menu-item-1545"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1545"><a
                            href="online-services.html">Online Services</a></li>
                    <li id="menu-item-1551"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1551"><a
                            href="pay-your-bills.html">Pay Your Bills</a></li>
                    <li id="menu-item-1530"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1530"><a
                            href="book-an-appointment.html">Book An Appointment</a></li>
                </ul>
            </li>
            <li id="menu-item-1565"
                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1565"><a
                    href="#">Education &#038; Research</a>
                <ul class="sub-menu">
                    <li id="menu-item-1534"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1534"><a
                            href="education.html">Education</a></li>
                    <li id="menu-item-1553"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1553"><a
                            href="research.html">Research</a></li>
                    <li id="menu-item-1529"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1529"><a
                            href="annual-wellness-exam.html">Annual Wellness Exam</a></li>
                </ul>
            </li>
            <li id="menu-item-1566"
                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1566"><a
                    href="#">Careers &#038; Volunteers</a>
                <ul class="sub-menu">
                    <li id="menu-item-1546"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1546"><a
                            href="our-careers.html">Our Careers</a></li>
                    <li id="menu-item-1567"
                        class="menu-item menu-item-type-post_type menu-item-object-career menu-item-1567"><a
                            href="career-post/clinical-jobs.html">Career Details</a></li>
                    <li id="menu-item-1557"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1557"><a
                            href="volunteers.html">Volunteers</a></li>
                </ul>
            </li>
            <li id="menu-item-1568"
                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1568"><a
                    href="#">Pages</a>
                <ul class="sub-menu">
                    <li id="menu-item-1552"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1552"><a
                            href="pricing-plan.html">Pricing Plan</a></li>
                    <li id="menu-item-1569"
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1569">
                        <a href="#">Lab Test</a>
                        <ul class="sub-menu">
                            <li id="menu-item-1543"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1543"><a
                                    href="lab-test.html">Lab Test</a></li>
                            <li id="menu-item-1570"
                                class="menu-item menu-item-type-post_type menu-item-object-labtest menu-item-1570"><a
                                    href="labtest-post/mri-ct-scan.html">Lab Test Details</a></li>
                        </ul>
                    </li>
                    <li id="menu-item-1694"
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1694">
                        <a href="#">Shop</a>
                        <ul class="sub-menu">
                            <li id="menu-item-1693"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1693"><a
                                    href="shop.html">Shop</a></li>
                            <li id="menu-item-1698"
                                class="menu-item menu-item-type-post_type menu-item-object-product menu-item-1698"><a
                                    href="product/glass-ampule.html">Product Details</a></li>
                            <li id="menu-item-1697"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1697"><a
                                    href="cart.html">Cart</a></li>
                            <li id="menu-item-1696"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1696"><a
                                    href="checkout.html">Checkout</a></li>
                            <li id="menu-item-1695"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1695"><a
                                    href="my-account.html">My Account</a></li>
                        </ul>
                    </li>
                    <li id="menu-item-1571"
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1571">
                        <a href="#">Blog</a>
                        <ul class="sub-menu">
                            <li id="menu-item-1526"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1526"><a
                                    href="blog.html">Blog</a></li>
                            <li id="menu-item-1572"
                                class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1572"><a
                                    href="tech-talk-exploring-cutting-edge-medical-technologies-at-hospa.html">Blog
                                    Details</a></li>
                        </ul>
                    </li>
                    <li id="menu-item-1548"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1548"><a
                            href="our-process.html">Our Process</a></li>
                    <li id="menu-item-1558"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1558"><a
                            href="working-hours.html">Working Hours</a></li>
                    <li id="menu-item-1547"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1547"><a
                            href="our-gallery.html">Our Gallery</a></li>
                    <li id="menu-item-1536"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1536"><a
                            href="faqs.html">FAQ’s</a></li>
                    <li id="menu-item-1555"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1555"><a
                            href="testimonials.html">Testimonials</a></li>
                    <li id="menu-item-1573"
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1573">
                        <a href="#">Additional Pages</a>
                        <ul class="sub-menu">
                            <li id="menu-item-1554"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1554"><a
                                    href="terms-and-conditions.html">Terms and Conditions</a></li>
                            <li id="menu-item-1527"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1527"><a
                                    href="privacy-policy.html">Privacy Policy</a></li>
                            <li id="menu-item-1531"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1531"><a
                                    href="coming-soon.html">Coming Soon</a></li>
                        </ul>
                    </li>
                    <li id="menu-item-1532"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1532"><a
                            href="ontact-us.html">Contact Us</a></li>
                </ul>
            </li>
        </ul>
        <div class="others-option d-flex align-items-center">
            <div class="option-item">
                <div class="search-bar main-menu__search search-toggler">
                    <i class="ti ti-search"></i>
                </div>
            </div>
            <div class="option-item">
                <a href="contact-us.html" class="default-btn">
                    <i class="ti ti-alarm-plus-filled"></i>
                    Emergency </a>
            </div>
        </div>
    </div>
</div>
