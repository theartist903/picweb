
{{-- About Us Starts Here--}}
<div class="elementor-section elementor-top-section elementor-element elementor-element-d5a52fc elementor-section-full_width elementor-section-height-default elementor-section-height-default"
     data-id="d5a52fc" data-element_type="section">
    <div class="elementor-container elementor-column-gap-no">
        <div
            class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-ced6a72"
            data-id="ced6a72" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div
                    class="elementor-element elementor-element-9cb9955 elementor-widget elementor-widget-Hospa_About_Area"
                    data-id="9cb9955" data-element_type="widget"
                    data-widget_type="Hospa_About_Area.default">
                    <div class="elementor-widget-container">
                        <div class="about-area ptb-100">
                            <div class="container">
                                <div class="row justify-content-center align-items-center">
                                    <div class="col-xl-6 col-md-12">
                                        <div class="about-content wrap-two">
                                            <span class="sub">ABOUT PIC-MTI </span>
                                        @foreach($about as $ab)
                                            {!! $ab->details !!}
                                            <div class="about-btn">
                                                <a href="about-overview.html" class="default-btn">
                                                    <i class="ti ti-circle-arrow-right-filled"></i>
                                                    More About Us </a>
                                            </div>
                                        </div>
                                    </div>
                                    

                                    <div class="col-xl-6 col-md-12">
                                        <div class="about-image">
                                            <img decoding="async" src="{!! env('APP_CMS_FILES').'/'. $ab->image_1 !!}" alt="image">
                                        @endforeach
                                            
                                            <div class="counter-wrap">
                                                <div class="item">
                                                    <div class="d-flex align-items-center justify-content-center">
                                                        <h3 class="counter">{!! $bed_count !!}</h3>
                                                    </div>
                                                    <p>BEDED <span>HOSPITAL</span></p>
                                                </div>
                                            </div>

                                            <div class="counter-wrap wrap-two">
                                                <div class="item">
                                                    <div class="d-flex align-items-center justify-content-center">
                                                        <!-- <h3 class="counter">6</h3> -->
                                                        <h3 class="sub">{!! $cath_ot_count !!}</h3>
                                                    </div>
                                                    <p>CATH LABs<span>OTs</span></p>
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


{{--About Us Ends Here--}}
