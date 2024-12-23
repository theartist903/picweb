@extends('template.base')

@section("main-section")
{{-- Services --}}
    <div class="page-banner-area">
        <div class="container-fluid">
            <div class="page-banner-image">
                <img src={{env('APP_CMS_FILES').'/bg23.jpg'}} alt="banner img">
            </div>
            <div class="page-banner-inner">
                <div class="row ">
                    <div class="col-lg-8 col-md-12">
                        <div class="content">
                            <h1>
                                <b> Cardiology</b>
                            </h1>
                            <ul class="list">
                                <li><a href="https://themes.hibootstrap.com/hospa/">Home</a></li>
                                <li>Cardiology</li>
                            </ul>
                        </div>
                    </div>
                    {{-- <div class="col-lg-4 col-md-12">
                        <ul class="information">
                            <li>
                                <div class="phone-btn">
                                    <div class="icon">
                                        <i class="ti ti-phone-call"></i>
                                    </div>
                                    <span>
                                        CALL:
                                        <a href="tel:01132534567">+011 3253 4567</a>
                                    </span>
                                </div>
                            </li>
                            <li>
                                <ul class="info-list">
                                    <li>
                                        <button onclick="window.print()">
                                            <i class="ti ti-printer"></i>
                                        </button>
                                    </li>
                                    <li>
                                        <a href="/cdn-cgi/l/email-protection#86efe8e0e9c6eee9f5f6e7a8e5e9eb"><i
                                                class="ti ti-mail-opened"></i></a>
                                    </li>
                                    <li>
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ti ti-share"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a href="https://www.facebook.com/sharer/sharer.php?u=https://themes.hibootstrap.com/hospa/services-post/cardiology/"
                                                        onclick="window.open(this.href, 'facebook-share','width=580,height=296'); return false;"
                                                        target="_blank"><i class="ti ti-brand-facebook"></i></a></li>
                                                <li><a href="https://twitter.com/share?text=Cardiology&url=https://themes.hibootstrap.com/hospa/services-post/cardiology/"
                                                        target="_blank"><i class="ti ti-brand-x"></i></a></li>
                                                <li><a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https://themes.hibootstrap.com/hospa/services-post/cardiology/&amp;title=Cardiology&amp;summary=&amp;source=Hospa"
                                                        onclick="window.open(this.href, 'linkedin','width=580,height=296'); return false;"
                                                        target="_blank"><i class="ti ti-brand-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <div data-elementor-type="wp-post" data-elementor-id="42" class="elementor elementor-42">
        <div class="elementor-section elementor-top-section elementor-element elementor-element-3976423 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
            data-id="3976423" data-element_type="section">
            <div class="elementor-container elementor-column-gap-no">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-9120dda"
                    data-id="9120dda" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-b8b04a0 elementor-widget elementor-widget-Hospa_Service_Details"
                            data-id="b8b04a0" data-element_type="widget"
                            data-widget_type="Hospa_Service_Details.default">
                            <div class="elementor-widget-container">
                                <div class="services-details-area ptb-100">
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-4 col-md-12">
                                                <div class="services-details-sidebar">
                                                    <ul class="services-list">
                                                        <li>
                                                            <a class href="https://themes.hibootstrap.com/hospa/services-post/medicine-nephrology/"> Medicine &#038; Nephrology
                                                                <i class="ti ti-arrow-right"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="active"
                                                                href="https://themes.hibootstrap.com/hospa/services-post/cardiology/">
                                                                Cardiology <i class="ti ti-arrow-right"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class
                                                                href="https://themes.hibootstrap.com/hospa/services-post/neurology/">
                                                                Neurology <i class="ti ti-arrow-right"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class
                                                                href="https://themes.hibootstrap.com/hospa/services-post/orthopedic/">
                                                                Orthopedic <i class="ti ti-arrow-right"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class
                                                                href="https://themes.hibootstrap.com/hospa/services-post/surgery/">
                                                                Surgery <i class="ti ti-arrow-right"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class
                                                                href="https://themes.hibootstrap.com/hospa/services-post/dental-care/">
                                                                Dental Care <i class="ti ti-arrow-right"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class
                                                                href="https://themes.hibootstrap.com/hospa/services-post/ophthalmology/">
                                                                Ophthalmology <i class="ti ti-arrow-right"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    {{-- <div class="directions">
                                                        <div class="title">
                                                            <h3>Get Directions</h3>
                                                            <i class="ti ti-current-location"></i>
                                                        </div>
                                                        <form id="directionForm" class="find-map"
                                                            style="background-image: url(https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/map.jpg)">
                                                            <div class="form-group">
                                                                <textarea class="form-control" id="endAddress" placeholder="Please Enter Destination Address" required></textarea>
                                                            </div>
                                                            <button type="submit" class="default-btn">
                                                                <i class="ti ti-circle-arrow-right-filled"></i>
                                                                Get Directions </button>
                                                        </form>
                                                        <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                                                        <script>
                                                            document.getElementById("directionForm").addEventListener("submit", function(event) {
                                                                event.preventDefault(); // Prevent form submission

                                                                var endAddress = document.getElementById("endAddress").value;

                                                                // Construct the Google Maps URL with the destination address
                                                                var googleMapsUrl = "https://www.google.com/maps/dir/?api=1&destination=" + encodeURIComponent(
                                                                    endAddress);

                                                                // Open Google Maps URL in a new tab
                                                                window.open(googleMapsUrl, "_blank");
                                                            });
                                                        </script>
                                                    </div> --}}
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-12">
                                                <div class="services-details-desc">
                                                    <img decoding="async" src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/03/services-details.jpg" alt="image">
                                                    <h2>Cardiology</h2>
                                                    <p>Hospa has one of the largest Cardio care programs in a community
                                                        academic hospital in the GTA (Greater Toronto Area), and
                                                        provides treatment for many types of CVD, including heart
                                                        transplant, open heart surgery, engiogram prostate,
                                                        gynecological and urinary.</p>
                                                    <p>Hospa General is constantly thinking and going beyond for our
                                                        patients, our community and our people. As people and
                                                        communities change, Hospa General will continuously evolve to
                                                        meet their needs. We are driven to achieve the promise of
                                                        people-centred care - to create a welcome and inclusive
                                                        environment that contributes to health equity.</p>
                                                    <h3> Enhancing the patient and family experience</h3>
                                                    <p>We work to ensure our patients receive the highest standard of
                                                        cancer care. All patients receive care guided by best practice
                                                        standards of Cardio Care. These practices have been shown to
                                                        provide the best patient outcomes. Patients and their families
                                                        can quickly access a diverse range of cancer care services,
                                                        including these facilities:</p>
                                                    <ul class="list">
                                                        <li>
                                                            <i class="ti ti-checks"></i>
                                                            The BMO Breast Diagnostic Clinic, part of the Karen, Heather
                                                            &amp; Lynn Steinberg Breast Centre
                                                        </li>
                                                        <li>
                                                            <i class="ti ti-checks"></i>
                                                            The Baruch/Weisz Cardio Centre
                                                        </li>
                                                        <li>
                                                            <i class="ti ti-checks"></i>
                                                            Freeman Centre for the Advancement of Palliative Care
                                                        </li>
                                                        <li>
                                                            <i class="ti ti-checks"></i>
                                                            Gale and Graham Wright Prostate Centre
                                                        </li>
                                                    </ul>
                                                    <h3>Patients supported by dedicated team of experts</h3>
                                                    <p>Our interdisciplinary team of highly skilled and compassionate
                                                        health-care professionals includes physicians, surgeons,
                                                        radiologists, pathologists, oncologists, nurses, medical imaging
                                                        professionals, case managers, and volunteers.</p>
                                                    <p>We partner with the two regional cancer centres: the Odette
                                                        Cancer Centre at Sunnybrook Health Sciences Centre, and Princess
                                                        Margaret Hospital at the University Health Network, to
                                                        facilitate radiation treatments for our patients. A partnership
                                                        between North York General and Sunnybrook Health Sciences Centre
                                                        offers patients easy and timely access to quality colorectal
                                                        cancer care.</p>
                                                    <h3>Information for new patient</h3>
                                                    <p>This following series of videos are designed for patients who are
                                                        receiving treatment at the Anne Tanenbaum Chemotherapy Clinic.
                                                        The first video “A Day in Chemo Clinic”, is helpful to watch
                                                        prior to starting treatment and want to know what to expect
                                                        before your appointment.</p>
                                                    <p>Most patients will receive conventional chemotherapy and may find
                                                        the videos that explain what chemotherapy is and how it is
                                                        given, helpful. For a general introduction, start with “Chemo
                                                        101”. This video covers important day-to-day considerations such
                                                        as “Can I take supplements while on chemo?”, “Can I drink
                                                        alcohol while on chemo?” and “Do I have to avoid crowds while on
                                                        chemo?” Additional videos include common side effects of
                                                        chemotherapy, important prevention and management tips.</p>

                                                    {{-- <div class="doctor-slider-inner">
                                                        <h2>Available Doctors Under Cardiology</h2>
                                                        <div class="swiper doctor-slider">
                                                            <div class="swiper-wrapper">
                                                                <div class="swiper-slide">
                                                                    <div class="doctor-card">
                                                                        <div class="doctor-image">
                                                                            <a
                                                                                href="https://themes.hibootstrap.com/hospa/doctors-post/dr-jane-ronan/">
                                                                                <img decoding="async"
                                                                                    src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor9.jpg"
                                                                                    alt="Dr. Jane Ronan">
                                                                            </a>
                                                                            <div class="doctor-btn">
                                                                                <a href="https://themes.hibootstrap.com/hospa/book-an-appointment/"
                                                                                    class="default-btn">
                                                                                    <i
                                                                                        class="ti ti-circle-arrow-right-filled"></i>
                                                                                    Book an Appointmnet </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="doctor-content">
                                                                            <h3><a
                                                                                    href="https://themes.hibootstrap.com/hospa/doctors-post/dr-jane-ronan/">Dr.
                                                                                    Jane Ronan</a></h3>
                                                                            <span>Pediatric Nutritionist</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <div class="doctor-card">
                                                                        <div class="doctor-image">
                                                                            <a
                                                                                href="https://themes.hibootstrap.com/hospa/doctors-post/dr-pinkman-jany/">
                                                                                <img decoding="async"
                                                                                    src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor7.jpg"
                                                                                    alt="Dr.  Pinkman Jany">
                                                                            </a>
                                                                            <div class="doctor-btn">
                                                                                <a href="https://themes.hibootstrap.com/hospa/book-an-appointment/"
                                                                                    class="default-btn">
                                                                                    <i
                                                                                        class="ti ti-circle-arrow-right-filled"></i>
                                                                                    Book an Appointmnet </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="doctor-content">
                                                                            <h3><a
                                                                                    href="https://themes.hibootstrap.com/hospa/doctors-post/dr-pinkman-jany/">Dr.
                                                                                    Pinkman Jany</a></h3>
                                                                            <span>Cardio Surgent</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <div class="doctor-card">
                                                                        <div class="doctor-image">
                                                                            <a
                                                                                href="https://themes.hibootstrap.com/hospa/doctors-post/dr-peter-watson/">
                                                                                <img decoding="async"
                                                                                    src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor8.jpg"
                                                                                    alt="Dr. Peter Watson">
                                                                            </a>
                                                                            <div class="doctor-btn">
                                                                                <a href="https://themes.hibootstrap.com/hospa/book-an-appointment/"
                                                                                    class="default-btn">
                                                                                    <i
                                                                                        class="ti ti-circle-arrow-right-filled"></i>
                                                                                    Book an Appointmnet </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="doctor-content">
                                                                            <h3><a
                                                                                    href="https://themes.hibootstrap.com/hospa/doctors-post/dr-peter-watson/">Dr.
                                                                                    Peter Watson</a></h3>
                                                                            <span>Nephrologist</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <div class="doctor-card">
                                                                        <div class="doctor-image">
                                                                            <a
                                                                                href="https://themes.hibootstrap.com/hospa/doctors-post/dr-philips-rownd/">
                                                                                <img decoding="async"
                                                                                    src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor5.jpg"
                                                                                    alt="Dr. Philips Rownd">
                                                                            </a>
                                                                            <div class="doctor-btn">
                                                                                <a href="https://themes.hibootstrap.com/hospa/book-an-appointment/"
                                                                                    class="default-btn">
                                                                                    <i
                                                                                        class="ti ti-circle-arrow-right-filled"></i>
                                                                                    Book an Appointmnet </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="doctor-content">
                                                                            <h3><a
                                                                                    href="https://themes.hibootstrap.com/hospa/doctors-post/dr-philips-rownd/">Dr.
                                                                                    Philips Rownd</a></h3>
                                                                            <span>Gynocologist</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <div class="doctor-card">
                                                                        <div class="doctor-image">
                                                                            <a
                                                                                href="https://themes.hibootstrap.com/hospa/doctors-post/dr-jessy-watt/">
                                                                                <img decoding="async"
                                                                                    src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor4.jpg"
                                                                                    alt="Dr. Jessy Watt">
                                                                            </a>
                                                                            <div class="doctor-btn">
                                                                                <a href="https://themes.hibootstrap.com/hospa/book-an-appointment/"
                                                                                    class="default-btn">
                                                                                    <i
                                                                                        class="ti ti-circle-arrow-right-filled"></i>
                                                                                    Book an Appointmnet </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="doctor-content">
                                                                            <h3><a
                                                                                    href="https://themes.hibootstrap.com/hospa/doctors-post/dr-jessy-watt/">Dr.
                                                                                    Jessy Watt</a></h3>
                                                                            <span>Head of Nephrologist Department</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <div class="doctor-card">
                                                                        <div class="doctor-image">
                                                                            <a
                                                                                href="https://themes.hibootstrap.com/hospa/doctors-post/dr-victor-james/">
                                                                                <img decoding="async"
                                                                                    src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor3.jpg"
                                                                                    alt="Dr. Victor James">
                                                                            </a>
                                                                            <div class="doctor-btn">
                                                                                <a href="https://themes.hibootstrap.com/hospa/book-an-appointment/"
                                                                                    class="default-btn">
                                                                                    <i
                                                                                        class="ti ti-circle-arrow-right-filled"></i>
                                                                                    Book an Appointmnet </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="doctor-content">
                                                                            <h3><a
                                                                                    href="https://themes.hibootstrap.com/hospa/doctors-post/dr-victor-james/">Dr.
                                                                                    Victor James</a></h3>
                                                                            <span>Head of Orthopedist Department</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <div class="doctor-card">
                                                                        <div class="doctor-image">
                                                                            <a
                                                                                href="https://themes.hibootstrap.com/hospa/doctors-post/dr-walter-white/">
                                                                                <img decoding="async"
                                                                                    src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor2.jpg"
                                                                                    alt="Dr. Walter White">
                                                                            </a>
                                                                            <div class="doctor-btn">
                                                                                <a href="https://themes.hibootstrap.com/hospa/book-an-appointment/"
                                                                                    class="default-btn">
                                                                                    <i
                                                                                        class="ti ti-circle-arrow-right-filled"></i>
                                                                                    Book an Appointmnet </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="doctor-content">
                                                                            <h3><a
                                                                                    href="https://themes.hibootstrap.com/hospa/doctors-post/dr-walter-white/">Dr.
                                                                                    Walter White</a></h3>
                                                                            <span>Head of Cardiology Department</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="question-wrap">
                                                        <h3>Ask Any Question If You Have</h3>
                                                        <p>Your email address will not be published. Required fields are
                                                            marked *</p>
                                                        <div class="wpcf7 no-js" id="wpcf7-f714-p42-o1"
                                                            lang="en-US" dir="ltr">
                                                            <div class="screen-reader-response">
                                                                <p role="status" aria-live="polite"
                                                                    aria-atomic="true"></p>
                                                                <ul></ul>
                                                            </div>
                                                            <form
                                                                action="/hospa/services-post/cardiology/#wpcf7-f714-p42-o1"
                                                                method="post" class="wpcf7-form init"
                                                                aria-label="Contact form" novalidate="novalidate"
                                                                data-status="init">
                                                                <div style="display: none;">
                                                                    <input type="hidden" name="_wpcf7"
                                                                        value="714" />
                                                                    <input type="hidden" name="_wpcf7_version"
                                                                        value="5.9.6" />
                                                                    <input type="hidden" name="_wpcf7_locale"
                                                                        value="en_US" />
                                                                    <input type="hidden" name="_wpcf7_unit_tag"
                                                                        value="wpcf7-f714-p42-o1" />
                                                                    <input type="hidden" name="_wpcf7_container_post"
                                                                        value="42" />
                                                                    <input type="hidden"
                                                                        name="_wpcf7_posted_data_hash" value />
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Your Message*</label>
                                                                    <span class="wpcf7-form-control-wrap"
                                                                        data-name="your-message">
                                                                        <textarea cols="40" rows="10" maxlength="400" class="wpcf7-form-control wpcf7-textarea form-control"
                                                                            aria-invalid="false" placeholder="Please write your message here" name="your-message"></textarea>
                                                                    </span>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Name*</label>
                                                                    <span class="wpcf7-form-control-wrap"
                                                                        data-name="your-name"><input size="40"
                                                                            maxlength="80"
                                                                            class="wpcf7-form-control wpcf7-text form-control"
                                                                            aria-invalid="false"
                                                                            placeholder="Please enter name" value
                                                                            type="text" name="your-name" /></span>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Email*</label>
                                                                    <span class="wpcf7-form-control-wrap"
                                                                        data-name="your-email"><input size="40"
                                                                            maxlength="80"
                                                                            class="wpcf7-form-control wpcf7-email wpcf7-text wpcf7-validates-as-email form-control"
                                                                            aria-invalid="false"
                                                                            placeholder="Please enter your email address"
                                                                            value type="email"
                                                                            name="your-email" /></span>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Website*</label>
                                                                    <span class="wpcf7-form-control-wrap"
                                                                        data-name="your-website"><input size="40"
                                                                            maxlength="80"
                                                                            class="wpcf7-form-control wpcf7-text form-control"
                                                                            aria-invalid="false"
                                                                            placeholder="Please enter your website"
                                                                            value type="text"
                                                                            name="your-website" /></span>
                                                                </div>
                                                                <div class="form-group">
                                                                    <span class="wpcf7-form-control-wrap"
                                                                        data-name="gdpr"><span
                                                                            class="wpcf7-form-control wpcf7-acceptance"><span
                                                                                class="wpcf7-list-item"><label><input
                                                                                        type="checkbox" name="gdpr"
                                                                                        value="1"
                                                                                        class="gdpr-term"
                                                                                        aria-invalid="false" /><span
                                                                                        class="wpcf7-list-item-label">I
                                                                                        agree with the
                                                                                        terms.</span></label></span></span></span>
                                                                </div>
                                                                <button type="submit" class="default-btn">
                                                                    <i class="ti ti-circle-arrow-right-filled"></i>
                                                                    Send Message Now
                                                                </button>
                                                                <div class="wpcf7-response-output" aria-hidden="true">
                                                                </div>
                                                            </form>
                                                        </div>
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

@endsection
