                <div class="elementor-section elementor-top-section elementor-element elementor-element-3be94e9 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="3be94e9" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-no">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-e65bedf" data-id="e65bedf" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-0385aa5 elementor-widget elementor-widget-Hospa_DoctorsTab" data-id="0385aa5" data-element_type="widget" data-widget_type="Hospa_DoctorsTab.default">
                                    <div class="elementor-widget-container">
                                        <div class="doctor-area pt-100 pb-75">
                                            <div class="container">

                                                <div class="section-title">
                                                    <span class="sub">DOCTORS</span>
                                                    <h2>Our Experts Doctors <b>For The Patients</b></h2>
                                                </div>

                                                <div class="doctor-information-tabs">
                                                    <ul class="nav nav-tabs" id="doctor_tab" role="tablist">
                                                        @foreach($doctorsBySpeciality as $id => $speciality)
                                                        <li class="nav-item" role="presentation" style="margin-top: 1%;">
                                                            <a class="nav-link " data-bs-toggle="tab" role="tab" aria-selected="true"> {!! $speciality->speciality !!}</a>
                                                        </li>
                                                        @endforeach
                                                    </ul>
                                                    <div class="tab-content" id="doctor_tab_content">
                                                            <div class="tab-pane fade show active" role="tabpanel">
                                                                <div class="doctor-slider-inner">
                                                                    <div class="swiper doctor-slider swiper-initialized swiper-horizontal swiper-backface-hidden">
                                                                        <div class="swiper-wrapper" id="swiper-wrapper-dd10b04193333bfcc" aria-live="off" style="transition-duration: 300ms; transform: translate3d(-330.25px, 0px, 0px);">

                                                                            @foreach($doctors as $doc)
                                                                                <div class="swiper-slide swiper-slide-prev" role="group" aria-label="1 / 5" data-swiper-slide-index="0" style="width: 305.25px; margin-right: 25px;">
                                                                                    <div class="doctor-card">
                                                                                        <div class="doctor-image">
                                                                                            <a href="{!! url("/doctor-details/" . $doc->id) !!}">
                                                                                                <img decoding="async" src="{{ env('APP_CMS') . '/resources/doctors/' . $doc->doctor_image }}" alt="">
                                                                                            </a>
                                                                                            <div class="doctor-btn">
                                                                                                <a href="https://themes.hibootstrap.com/hospa/book-an-appointment/" class="default-btn">
                                                                                                    <i class="ti ti-circle-arrow-right-filled"></i>
                                                                                                    Book An Appointment </a>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="doctor-content">
                                                                                            <h3>
                                                                                                <a href="https://themes.hibootstrap.com/hospa/doctors-post/dr-jane-ronan/">{!! $doc->name !!}</a>
                                                                                            </h3>
                                                                                            <span>{!! $doc->title !!} <br> {!! $doc->dept->name !!}</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            @endforeach
                                                                        </div>

                                                                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span><span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span><span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span><span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span><span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span><span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span><span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span><span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span><span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span><span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span><span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span><span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                                                                    {{-- <div class="doctor-button-prev" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-38ccca4536410b013">
                                                                        <i class="ti ti-arrow-left"></i>
                                                                    </div>
                                                                    <div class="doctor-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-38ccca4536410b013">
                                                                        <i class="ti ti-arrow-right"></i>
                                                                    </div> --}}
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

