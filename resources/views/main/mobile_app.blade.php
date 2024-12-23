
{{-- Mobile App Section Starts Here--}}
<div class="elementor-section elementor-top-section elementor-element elementor-element-c3bec84 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
     data-id="c3bec84" data-element_type="section">
    <div class="elementor-container elementor-column-gap-no">
        <div
            class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-755dae5"
            data-id="755dae5" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div
                    class="elementor-element elementor-element-e9b3692 elementor-widget elementor-widget-Hospa_AppArea"
                    data-id="e9b3692" data-element_type="widget"
                    data-widget_type="Hospa_AppArea.default">
                    <div class="elementor-widget-container">
                        <div class="mobile-app-area pb-100">
                            <div class="container">
                                <div class="row justify-content-center align-items-center">

                                    <div class="col-lg-7 col-md-12">

                                            <div class="swiper testimonial-slider">
                                                <div class="swiper-wrapper">

                                                    @foreach ($sliders as $slider => $slide)
                                                    <div class="swiper-slide">
                                                        <div class="testimonial-card mobile-app-image">
                                                            <img decoding="async" src="{!! env('APP_CMS_FILES').'/sliders/'. $slide->slider_image !!}" alt="Banner" style="object-fit:fill;" height="524px">
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                </div>

                                            </div>

                                        </div>


                                    <div class="col-xl-5 col-md-12">
                                        <div class="mobile-app-content">
                                            <span class="sub">APPOINTMENT </span>
                                            <h2>Online <br><b>Doctor's Appointment</b>
                                            </h2>
                                            <div class="info">
                                                <img decoding="async"
                                                     src="{!! url('resources/images/user.png') !!}"
                                                     alt="user">
                                                <div class="title">
                                                    <h5>500+ DOCTORS</h5>
                                                    <span>are available in the app</span>
                                                </div>
                                            </div>
                                            <ul class="app-btn">
                                                <li>
                                                    <a href="#" target="_blank">
                                                        <div class="icon">
                                                            <i class="ti ti-calendar-plus"></i>
                                                        </div>
                                                    </a>
                                                    <div class="title">
                                                        <span>REQUEST AN</span>
                                                        <h5>APPOINTMENT</h5>
                                                    </div>
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
{{-- Mobile App Section Ends Here--}}
