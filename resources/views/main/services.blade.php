{{--Our Services Start Here--}}
<div class="elementor-section elementor-top-section elementor-element elementor-element-39f1b92 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
     data-id="39f1b92" data-element_type="section">
    <div class="elementor-container elementor-column-gap-no">
        <div
            class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6f51733"
            data-id="6f51733" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div
                    class="elementor-element elementor-element-54041df elementor-widget elementor-widget-Hospa_ServicesPostQuery"
                    data-id="54041df" data-element_type="widget"
                    data-widget_type="Hospa_ServicesPostQuery.default">
                    <div class="elementor-widget-container">
                        <div class="services-area ptb-100">
                            <div class="container">
                                <div class="section-title">
                                    <span class="sub">OUR SERVICES </span>
                                    <h2>We Serve In Different <b>Areas For Our Patients</b></h2>
                                </div>
                                <div class="row justify-content-center">
                                    @foreach ($services_results as $value)
                                        
                                    
                                    <div class="col-xl-3 col-md-6 ">
                                        <div class="services-card">
                                            <div class="icon">

                                            @if ($value->management_name == 'Cardiology (Adult)')
                                                <img decoding="async" src="{!! url('resources/images/heartbeat.svg') !!}" alt="Cardiology" width="55px">

                                            @elseif ($value->management_name == 'Anesthesia')
                                                <img decoding="async" src="{!! url('resources/images/vaccine.svg') !!}" alt="Anesthesia" width="55px">

                                            @elseif ($value->management_name == 'Cardiac Surgery (Adult)')
                                            <img decoding="async" src="{!! url('resources/images/surgery.svg') !!}" alt="Cardiac Surgery" width="55px">

                                            @elseif ($value->management_name == 'Emergency Services')
                                            <img decoding="async" src="{!! url('resources/images/emergency-bed.svg') !!}" alt="Emergency Services" width="55px">

                                            @elseif ($value->management_name == 'Executive Health Clinic')
                                            <img decoding="async" src="{!! url('resources/images/stethoscope.svg') !!}" alt="Executive Health Clinic" width="55px">                                            

                                            @elseif ($value->management_name == 'Laboratory')
                                            <img decoding="async" src="{!! url('resources/images/test-pipe.svg') !!}" alt="Laboratory" width="55px">      

                                            @elseif ($value->management_name == 'Outpatient Department')
                                            <img decoding="async" src="{!! url('resources/images/prescription.svg') !!}" alt="OPD" width="55px">                                            
                                            
                                            @elseif ($value->management_name == 'Paeds Cardiology')
                                            <img decoding="async" src="{!! url('resources/images/clipboard-heart.svg') !!}" alt="Paediatrics Cardiology" width="55px">                                         

                                            @elseif ($value->management_name == 'Physiotherapy')
                                            <img decoding="async" src="{!! url('resources/images/physotherapist.svg') !!}" alt="Physiotherapy" width="55px">      
                                            
                                            @elseif ($value->management_name == 'Radiology')
                                            <img decoding="async" src="{!! url('resources/images/ribs.svg') !!}" alt="Radiology" width="70px">
                                            @else
                                            <img decoding="async" src="{!! url('resources/images/heartbeat.svg') !!}" alt="Heart Beat" width="55px">
                                            @endif
                                                
                                            </div>
                                            <h3>
                                                <a href="#">{{strip_tags($value->management_name)}}</a>
                                            </h3>
                                            <p style="text-align: justify;">{{strip_tags($value->description)}}</p>
                                            <a class="services-btn" href="#">
                                                <i class="ti ti-arrow-right"></i>
                                                Read More </a>
                                        </div>
                                    </div>
                                    @endforeach
                                    <!-- <div class="col-xl-3 col-md-6 ">
                                        <div class="services-card">
                                            <div class="icon">
                                                <img decoding="async" src="{!! url('resources/images/vaccine.svg') !!}" alt="Cardiac Surgery" width="55px">
                                            </div>
                                            <h3>
                                                <a href="services-post/ophthalmology.html">Cardiac Surgery</a>
                                            </h3>
                                            <p style="text-align: justify;">The Cardiovascular Surgery Department at PIC offers advanced adult and pediatric cardiac care, training, and research, led by top-qualified cardiac surgeons.</p>
                                            <a class="services-btn"
                                               href="services-post/ophthalmology.html">
                                                <i class="ti ti-arrow-right"></i>
                                                Read More </a>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-6 ">
                                        <div class="services-card">
                                            <div class="icon">
                                                
                                            </div>
                                            <h3>
                                                <a href="services-post/dental-care.html">Cardiology Paediatrics</a>
                                            </h3>
                                            <p style="text-align: justify;">This department provides advanced, comprehensive cardiac care for children, with 24/7 services, surgery, and training, serving KP and Afghan patients.</p>
                                            <a class="services-btn"
                                               href="services-post/dental-care.html">
                                                <i class="ti ti-arrow-right"></i>
                                                Read More </a>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-6 ">
                                        <div class="services-card">
                                            <div class="icon">
                                                <img decoding="async" src="{!! url('resources/images/body-scan.svg') !!}" alt="Paediatrics Cardiac Surgery" width="55px">
                                            </div>
                                            <h3>
                                                <a href="services-post/surgery.html">Paediatrics Cardiac Surgery</a>
                                            </h3>
                                            <p style="text-align: justify;">This department offers specialized, compassionate care for congenital heart defects, using advanced techniques and facilities to ensure safe and effective treatment for children.</p>
                                            <a class="services-btn" href="services-post/surgery.html">
                                                <i class="ti ti-arrow-right"></i>
                                                Read More </a>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-6 ">
                                        <div class="services-card">
                                            <div class="icon">
                                                <img decoding="async" src="{!! url('resources/images/lungs.svg') !!}" alt="Pulmonology" width="55px">
                                            </div>
                                            <h3>
                                                <a href="services-post/orthopedic.html">Pulmonology</a>
                                            </h3>
                                            <p style="text-align: justify;"> Pulmonology Department provides expert diagnosis and treatment for lung conditions, offering advanced care, 24/7 support, and state-of-the-art facilities.
                                            </p>
                                            <a class="services-btn" href="services-post/orthopedic.html">
                                                <i class="ti ti-arrow-right"></i>
                                                Read More </a>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-6 ">
                                        <div class="services-card">
                                            <div class="icon">
                                                <img decoding="async" src="{!! url('resources/images/kidney.svg') !!}" alt="Nephrology" width="65px">
                                            </div>
                                            <h3>
                                                <a href="services-post/neurology.html">Nephrology</a>
                                            </h3>
                                            <p style="text-align: justify;">The Nephrology Department offers comprehensive kidney care, including advanced diagnostics, dialysis services, and 24/7 support, led by expert nephrologists.</p>
                                            <a class="services-btn" href="services-post/neurology.html">
                                                <i class="ti ti-arrow-right"></i>
                                                Read More </a>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-6 ">
                                        <div class="services-card">
                                            <div class="icon">
                                                <img decoding="async"
                                                     src="{!! url('resources/images/report-medical.svg') !!}"
                                                     alt="Cardiology Diagnostics" width="55px">
                                            </div>
                                            <h3>
                                                <a href="services-post/cardiology.html">Cardiology Diagnostics</a>
                                            </h3>
                                            <p style="text-align: justify;">Our Cardiology Diagnostics offers advanced heart assessments, including ECG, echocardiograms, stress tests, and 24/7 monitoring, ensuring precise, timely cardiac care.</p>
                                            <a class="services-btn" href="services-post/cardiology.html">
                                                <i class="ti ti-arrow-right"></i>
                                                Read More </a>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-6 ">
                                        <div class="services-card">
                                            <div class="icon">
                                                <img decoding="async" src="{!! url('resources/images/ribs.svg') !!}" alt="Radiology" width="70px">
                                            </div>
                                            <h3>
                                                <a href="services-post/medicine-nephrology.html">Radiology</a>
                                            </h3>
                                            <p style="text-align: justify;">The Radiology Department provides 24/7 advanced imaging services, including MRI, CT, US, X-rays, and interventional procedures, ensuring timely, accurate diagnostics.</p>
                                            <a class="services-btn"
                                               href="services-post/medicine-nephrology.html">
                                                <i class="ti ti-arrow-right"></i>
                                                Read More </a>
                                        </div>
                                    </div> -->
                                    <div class="col-lg-12">
                                        <div class="services-bottom-text">
                                            <p >We have 8+ more Care Service including Emergency
                                                Department. <a href="our-services.html">View All <i class="ti ti-arrow-right"></i></a></p>
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
{{-- Our Services Section Ends Here--}}
