@extends('template.base')
@section('main-section')

{{--Page Banner Area--}}
<div class="page-banner-area">
    <div class="container-fluid">
        <div class="page-banner-image">
            <img src="{!! url('resources/images/bg1.jpg') !!}" alt="banner img">
        </div>

        <div class="page-banner-inner">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-8 col-md-12">
                    <div class="content">
                        <h1>Working <b>Hours</b></h1>
                        <ul class="list">
                            <li><a href="/">Home</a></li>
                            <li>Working Hours</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <ul class="information">
                        <li>
                            <div class="phone-btn">
                                <div class="icon">
                                    <i class="ti ti-phone-call"></i>
                                </div>
                                <span>
                                    CALL:<a href="tel:+9291111742684">+92 (91) 111-742-684</a>
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
                                    <a href="/cdn-cgi/l/email-protection#6f060109002f020a0c0e410c0002">
                                        <i class="ti ti-mail-opened"></i>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="page-area ">
    <div id="post-437" class="post-437 page type-page status-publish hentry">
        <div class="entry-content">
            <div data-elementor-type="wp-page" data-elementor-id="437" class="elementor elementor-437">
                <div class="elementor-section elementor-top-section elementor-element elementor-element-3ceb7cf elementor-section-full_width pt-100 elementor-section-height-default elementor-section-height-default" data-id="3ceb7cf" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-no">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4d34bd1" data-id="4d34bd1" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-b3fb498 elementor-widget elementor-widget-Hospa_WorkingHours" data-id="b3fb498" data-element_type="widget" data-widget_type="Hospa_WorkingHours.default">
                                    <div class="elementor-widget-container">
                                        <div class="time-schedule-area">
                                            <div class="container">
                                                <div class="section-title">
                                                    <span class="sub">WORKING HOURS </span>
                                                    <h2>Have A Look On Our <b>Doctor's Time Schedule</b></h2>
                                                </div>

                                                <div class="time-schedule-tabs">
                                                    <ul class="nav nav-tabs" id="time_schedule_tab" role="tablist">
                                                        <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#tablink1" role="tab">ALL</a></li>
                                                        <li class="nav-item"><a class="nav-link " data-bs-toggle="tab" href="#tablink2" role="tab">CARDIOLOGIST</a></li>
                                                        <li class="nav-item"><a class="nav-link " data-bs-toggle="tab" href="#tablink3" role="tab">ORTHOPEDIST</a></li>
                                                        <li class="nav-item"><a class="nav-link " data-bs-toggle="tab" href="#tablink4" role="tab">NEUROLOGIST</a></li>
                                                        <li class="nav-item"><a class="nav-link " data-bs-toggle="tab" href="#tablink5" role="tab">NEPHROLOGIST</a></li>
                                                        <li class="nav-item"><a class="nav-link " data-bs-toggle="tab" href="#tablink6" role="tab">GYNECOLOGIST</a></li>
                                                        <li class="nav-item"><a class="nav-link " data-bs-toggle="tab" href="#tablink7" role="tab">NUTRITIONIST</a></li>
                                                        <li class="nav-item"><a class="nav-link " data-bs-toggle="tab" href="#tablink8" role="tab">SURGENT</a>
                                                        </li>
                                                    </ul>

                                                    <div class="tab-content" id="time_schedule_tab_content">
                                                        <div class="tab-pane fade  show active" id="tablink1" role="tabpanel">
                                                            <div class="time-schedule-table table-responsive">
                                                                <table class="table table-bordered">
                                                                    <thead>
                                                                        <tr>
                                                                            <th></th>
                                                                            <th>MONDAY</th>
                                                                            <th>TUESDAY</th>
                                                                            <th>WEDNESDAY</th>
                                                                            <th>THURSDAY</th>
                                                                            <th>FRIDAY</th>
                                                                            <th>SATURDAY</th>
                                                                            <th>SUNDAY</th>
                                                                        </tr>
                                                                    </thead>

                                                                    <tbody>
                                                                    <tr>
                                                                        <td>08:30 - 14:00</td>
                                                                        <td>
                                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title=" OPD Building, Ground Floor, Room-24">
                                                                                Cardiology (Adult)
                                                                            </a>

                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async" src="{!! url('resources/images/doctor1.jpg') !!}" alt="image">
                                                                                </div>

                                                                                <div class="title">
                                                                                    <a href="#">Dr. Abid Ullah</a>
                                                                                </div>

                                                                            </div>
                                                                        </td>

                                                                        <td>
                                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="OPD Building, Ground Floor, Room-124"> Cardiology (Adult) </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async" src="{!! url('resources/images/doctor2.jpg') !!}"alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="#">Dr. William</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>

                                                                        <td>
                                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="OPD Building, Ground Floor,, Room-124"> Pediatric Nutrition </a>

                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async" src="{!! url('resources/images/doctor3.jpg') !!}" alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="#">Dr. James</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>

                                                                        <td></td>
                                                                        <td>
                                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="OPD Building, Ground Floor, Room-124"> Neurological Specialist </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async" src="{!! url('resources/images/doctor4.jpg') !!}" alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="#">Dr. Victor J.</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>

                                                                        <td>
                                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="OPD Building, Ground Floor, Room-124"> Cardiology Specialist
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async" src="{!! ('resources/images/doctor5.jpg') !!}" alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="#">Dr. David</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="OPD Building, Ground Floor, Room-124">
                                                                                Nephology Specialist
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"  src="{!! url('resources/images/doctor6.jpg') !!}" alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="#">Dr. Simpson</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>08:30 - 14:00</td>
                                                                        <td>
                                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="OPD Building, Ground Floor, Room-124">Cardiac Surgery (Adult) </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async" src="{!! url('resources/images/doctor7.jpg') !!}" alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="#">Dr. James</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="OPD Building, Ground Floor, Room-124">Neurological Specialist </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="{!! url('resources/images/doctor8.jpg') !!}" alt="image">
                                                                                </div>

                                                                                <div class="title">
                                                                                    <a href="#">Dr. Victor J.</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td></td>
                                                                        <td>
                                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="OPD Building, Ground Floor, Room-124">
                                                                                Cardiology Specialist
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async" src="{!! url('resources/images/doctor9.jpg') !!}" alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="#">Dr. David</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="OPD Building, Ground Floor, Room-124">Pediatric Nutrition</a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="{!! url('resources/images/doctor1.jpg') !!}" alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="#">Dr. James</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td></td>
                                                                        <td>
                                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="OPD Building, Ground Floor, Room-124"> Cardiology Specialist </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async" src="{!! url('resources/images/doctor2.jpg') !!}" alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="#">Dr. David</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>14:00 - 16:00</td>
                                                                        <td>
                                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="OPD Building, Ground Floor, Room-124"> Laryngological Clinic</a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="{!! url('resources/images/doctor5.jpg') !!}" alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr. Anderson</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td></td>
                                                                        <td>
                                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="OPD Building, Ground Floor, Room-124">Dental Clinic</a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="{!! url('resources/images/doctor2.jpg') !!}" alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="#">Dr. Angela</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td></td>
                                                                        <td>
                                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="OPD Building, Ground Floor, Room-124">Outpatient Surgery</a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="{!! url('resources/images/doctor4.jpg') !!}" alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="#">Dr. Victor J.</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="OPD Building, Ground Floor, Room-124"> Neurological Specialist
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="{!! url('resources/images/doctor5.jpg') !!}" alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="#">Dr. David</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="OPD Building, Ground Floor, Room-124"> Pediatric Nutrition </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async" src="{!! url('resources/images/doctor6.jpg') !!}" alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="#">Dr. Simpson</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>16:00 - 19:00</td>
                                                                        <td>
                                                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="OPD Building, Ground Floor, Room-124"> Orthopedic Surgeon</a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="{!! url('resources/images/doctor7.jpg') !!}" alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="#">Dr. James</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Neurological Specialist
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor8.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        Victor J.</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td></td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Pediatric Nutrition
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor9.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        David</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td></td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Outpatient Surgery
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor1.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        James</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>20:00 - 22:00</td>
                                                                        <td></td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Pediatric Nutrition
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor2.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        William</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Orthopedic Surgeon
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor3.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        James</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td></td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Outpatient Surgery
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor4.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        Victor J.</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td></td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Cardiology Specialist
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor6.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        Simpson</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade " id="tablink2" role="tabpanel">
                                                            <div class="time-schedule-table table-responsive">
                                                                <table class="table table-bordered">
                                                                    <thead>
                                                                    <tr>
                                                                        <th></th>
                                                                        <th>MONDAY</th>
                                                                        <th>TUESDAY</th>
                                                                        <th>WEDNESDAY</th>
                                                                        <th>THURSDAY</th>
                                                                        <th>FRIDAY</th>
                                                                        <th>SATURDAY</th>
                                                                        <th>SUNDAY</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>
                                                                        <td>09:00 - 11:00</td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title=" Medical Building 32A, Room-124">
                                                                                Gynecological Clinical Care
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor1.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/doctors-post/dr-jonathon-ronan/">Dr.
                                                                                        Jane Ronan</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Orthopedic Surgeon
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor2.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        William</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Pediatric Nutrition
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor3.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        James</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td></td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Neurological Specialist
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor4.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        Victor J.</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Cardiology Specialist
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor5.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        David</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Nephology Specialist
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor6.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        Simpson</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>12:00 - 13:00</td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Primary Health Care
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor7.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        James</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Neurological Specialist
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor8.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        Victor J.</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td></td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Cardiology Specialist
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor9.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        David</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Pediatric Nutrition
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor1.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        James</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td></td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Cardiology Specialist
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor2.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        David</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade " id="tablink3" role="tabpanel">
                                                            <div class="time-schedule-table table-responsive">
                                                                <table class="table table-bordered">
                                                                    <thead>
                                                                    <tr>
                                                                        <th></th>
                                                                        <th>MONDAY</th>
                                                                        <th>TUESDAY</th>
                                                                        <th>WEDNESDAY</th>
                                                                        <th>THURSDAY</th>
                                                                        <th>FRIDAY</th>
                                                                        <th>SATURDAY</th>
                                                                        <th>SUNDAY</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>
                                                                        <td>09:00 - 11:00</td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title=" Medical Building 32A, Room-124">
                                                                                Gynecological Clinical Care
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor1.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/doctors-post/dr-jonathon-ronan/">Dr.
                                                                                        Jane Ronan</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Orthopedic Surgeon
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor2.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        William</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Pediatric Nutrition
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor3.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        James</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td></td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Neurological Specialist
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor4.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        Victor J.</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Cardiology Specialist
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor5.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        David</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Nephology Specialist
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor6.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        Simpson</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>16:00 - 19:00</td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Orthopedic Surgeon
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor7.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        James</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Neurological Specialist
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor8.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        Victor J.</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td></td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Pediatric Nutrition
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor9.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        David</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td></td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Outpatient Surgery
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor1.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        James</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>20:00 - 22:00</td>
                                                                        <td></td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Pediatric Nutrition
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor2.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        William</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Orthopedic Surgeon
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor3.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        James</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td></td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Outpatient Surgery
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor4.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        Victor J.</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td></td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Cardiology Specialist
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor6.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        Simpson</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade " id="tablink4" role="tabpanel">
                                                            <div class="time-schedule-table table-responsive">
                                                                <table class="table table-bordered">
                                                                    <thead>
                                                                    <tr>
                                                                        <th></th>
                                                                        <th>MONDAY</th>
                                                                        <th>TUESDAY</th>
                                                                        <th>WEDNESDAY</th>
                                                                        <th>THURSDAY</th>
                                                                        <th>FRIDAY</th>
                                                                        <th>SATURDAY</th>
                                                                        <th>SUNDAY</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>
                                                                        <td>09:00 - 11:00</td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title=" Medical Building 32A, Room-124">
                                                                                Gynecological Clinical Care
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor1.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/doctors-post/dr-jonathon-ronan/">Dr.
                                                                                        Jane Ronan</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Orthopedic Surgeon
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor2.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        William</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Pediatric Nutrition
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor3.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        James</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td></td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Neurological Specialist
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor4.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        Victor J.</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Cardiology Specialist
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor5.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        David</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Nephology Specialist
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor6.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        Simpson</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>12:00 - 13:00</td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Primary Health Care
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor7.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        James</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Neurological Specialist
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor8.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        Victor J.</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td></td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Cardiology Specialist
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor9.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        David</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Pediatric Nutrition
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor1.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        James</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td></td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Cardiology Specialist
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor2.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        David</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>14:00 - 16:00</td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Laryngological Clinic
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor5.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        Anderson</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td></td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Dental Clinic
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor2.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        Angela</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td></td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Outpatient Surgery
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor4.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        Victor J.</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Neurological Specialist
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor5.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        David</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Pediatric Nutrition
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor6.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        Simpson</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>16:00 - 19:00</td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Orthopedic Surgeon
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor7.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        James</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Neurological Specialist
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor8.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        Victor J.</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td></td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Pediatric Nutrition
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor9.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        David</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td></td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Outpatient Surgery
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor1.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        James</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td></td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade " id="tablink5" role="tabpanel">
                                                            <div class="time-schedule-table table-responsive">
                                                                <table class="table table-bordered">
                                                                    <thead>
                                                                    <tr>
                                                                        <th></th>
                                                                        <th>MONDAY</th>
                                                                        <th>TUESDAY</th>
                                                                        <th>WEDNESDAY</th>
                                                                        <th>THURSDAY</th>
                                                                        <th>FRIDAY</th>
                                                                        <th>SATURDAY</th>
                                                                        <th>SUNDAY</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>
                                                                        <td>09:00 - 11:00</td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title=" Medical Building 32A, Room-124">
                                                                                Gynecological Clinical Care
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor1.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/doctors-post/dr-jonathon-ronan/">Dr.
                                                                                        Jane Ronan</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Orthopedic Surgeon
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor2.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        William</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Pediatric Nutrition
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor3.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        James</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td></td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Neurological Specialist
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor4.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        Victor J.</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Cardiology Specialist
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor5.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        David</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Nephology Specialist
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor6.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        Simpson</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade " id="tablink6" role="tabpanel">
                                                            <div class="time-schedule-table table-responsive">
                                                                <table class="table table-bordered">
                                                                    <thead>
                                                                    <tr>
                                                                        <th></th>
                                                                        <th>MONDAY</th>
                                                                        <th>TUESDAY</th>
                                                                        <th>WEDNESDAY</th>
                                                                        <th>THURSDAY</th>
                                                                        <th>FRIDAY</th>
                                                                        <th>SATURDAY</th>
                                                                        <th>SUNDAY</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>
                                                                        <td>09:00 - 11:00</td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title=" Medical Building 32A, Room-124">
                                                                                Gynecological Clinical Care
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor1.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/doctors-post/dr-jonathon-ronan/">Dr.
                                                                                        Jane Ronan</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Orthopedic Surgeon
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor2.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        William</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Pediatric Nutrition
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor3.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        James</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td></td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Neurological Specialist
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor4.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        Victor J.</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Cardiology Specialist
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor5.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        David</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Nephology Specialist
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor6.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        Simpson</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade " id="tablink7" role="tabpanel">
                                                            <div class="time-schedule-table table-responsive">
                                                                <table class="table table-bordered">
                                                                    <thead>
                                                                    <tr>
                                                                        <th></th>
                                                                        <th>MONDAY</th>
                                                                        <th>TUESDAY</th>
                                                                        <th>WEDNESDAY</th>
                                                                        <th>THURSDAY</th>
                                                                        <th>FRIDAY</th>
                                                                        <th>SATURDAY</th>
                                                                        <th>SUNDAY</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>
                                                                        <td>09:00 - 11:00</td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title=" Medical Building 32A, Room-124">
                                                                                Gynecological Clinical Care
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor1.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/doctors-post/dr-jonathon-ronan/">Dr.
                                                                                        Jane Ronan</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Orthopedic Surgeon
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor2.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        William</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Pediatric Nutrition
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor3.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        James</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td></td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Neurological Specialist
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor4.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        Victor J.</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Cardiology Specialist
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor5.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        David</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Nephology Specialist
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor6.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        Simpson</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>12:00 - 13:00</td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Primary Health Care
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor7.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        James</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Neurological Specialist
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor8.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        Victor J.</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td></td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Cardiology Specialist
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor9.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        David</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Pediatric Nutrition
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor1.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        James</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td></td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Cardiology Specialist
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor2.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        David</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>14:00 - 16:00</td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Laryngological Clinic
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor5.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        Anderson</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td></td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Dental Clinic
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor2.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        Angela</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td></td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Outpatient Surgery
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor4.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        Victor J.</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Neurological Specialist
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor5.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        David</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Pediatric Nutrition
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor6.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        Simpson</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>16:00 - 19:00</td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Orthopedic Surgeon
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor7.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        James</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Neurological Specialist
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor8.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        Victor J.</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td></td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Pediatric Nutrition
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor9.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        David</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td></td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Outpatient Surgery
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor1.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        James</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>20:00 - 22:00</td>
                                                                        <td></td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Pediatric Nutrition
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor2.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        William</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Orthopedic Surgeon
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor3.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        James</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td></td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Outpatient Surgery
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor4.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        Victor J.</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td></td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Cardiology Specialist
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor6.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        Simpson</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade " id="tablink8" role="tabpanel">
                                                            <div class="time-schedule-table table-responsive">
                                                                <table class="table table-bordered">
                                                                    <thead>
                                                                    <tr>
                                                                        <th></th>
                                                                        <th>MONDAY</th>
                                                                        <th>TUESDAY</th>
                                                                        <th>WEDNESDAY</th>
                                                                        <th>THURSDAY</th>
                                                                        <th>FRIDAY</th>
                                                                        <th>SATURDAY</th>
                                                                        <th>SUNDAY</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>
                                                                        <td>09:00 - 11:00</td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title=" Medical Building 32A, Room-124">
                                                                                Gynecological Clinical Care
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor1.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/doctors-post/dr-jonathon-ronan/">Dr.
                                                                                        Jane Ronan</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Orthopedic Surgeon
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor2.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        William</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Pediatric Nutrition
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor3.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        James</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td></td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Neurological Specialist
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor4.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        Victor J.</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Cardiology Specialist
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor5.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        David</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Nephology Specialist
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor6.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        Simpson</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>12:00 - 13:00</td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Primary Health Care
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor7.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        James</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Neurological Specialist
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor8.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        Victor J.</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td></td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Cardiology Specialist
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor9.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        David</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Pediatric Nutrition
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor1.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        James</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td></td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Cardiology Specialist
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor2.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        David</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>16:00 - 19:00</td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Orthopedic Surgeon
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor7.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        James</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Neurological Specialist
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor8.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        Victor J.</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td></td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Pediatric Nutrition
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor9.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        David</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td></td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Outpatient Surgery
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor1.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        James</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>20:00 - 22:00</td>
                                                                        <td></td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Pediatric Nutrition
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor2.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        William</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Orthopedic Surgeon
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor3.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        James</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td></td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Outpatient Surgery
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor4.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        Victor J.</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td></td>
                                                                        <td>
                                                                            <a href="https://themes.hibootstrap.com/hospa/our-services/"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               title="Meca Medical Building 32A, Room-124">
                                                                                Cardiology Specialist
                                                                            </a>
                                                                            <div class="user">
                                                                                <div class="image">
                                                                                    <img decoding="async"
                                                                                         src="https://themes.hibootstrap.com/hospa/wp-content/uploads/2024/04/doctor6.jpg"
                                                                                         alt="image">
                                                                                </div>
                                                                                <div class="title">
                                                                                    <a href="https://themes.hibootstrap.com/hospa/leadership-team/">Dr.
                                                                                        Simpson</a>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
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

                <div class="elementor-section elementor-top-section elementor-element elementor-element-d793a20 pb-100 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="d793a20" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-no">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7a54ba3 time-schedule-information " data-id="7a54ba3" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-48646c7 elementor-widget elementor-widget-heading" data-id="48646c7" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <style>
                                            .elementor-heading-title {
                                                padding: 0;
                                                margin: 0;
                                                line-height: 1
                                            }

                                            .elementor-widget-heading .elementor-heading-title[class*=elementor-size-] > a {
                                                color: inherit;
                                                font-size: inherit;
                                                line-height: inherit
                                            }

                                            .elementor-widget-heading .elementor-heading-title.elementor-size-small {
                                                font-size: 15px
                                            }

                                            .elementor-widget-heading .elementor-heading-title.elementor-size-medium {
                                                font-size: 19px
                                            }

                                            .elementor-widget-heading .elementor-heading-title.elementor-size-large {
                                                font-size: 29px
                                            }

                                            .elementor-widget-heading .elementor-heading-title.elementor-size-xl {
                                                font-size: 39px
                                            }

                                            .elementor-widget-heading .elementor-heading-title.elementor-size-xxl {
                                                font-size: 59px
                                            }</style>
                                        <h3 class="elementor-heading-title elementor-size-default">Hospital Opening
                                            Hours
                                        </h3>
                                    </div>
                                </div>
                                <section
                                    class="elementor-section elementor-inner-section elementor-element elementor-element-37dc3c3 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="37dc3c3" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div
                                            class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-a819adc"
                                            data-id="a819adc" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div
                                                    class="elementor-element elementor-element-b556889 elementor-widget elementor-widget-Hospa_OpeningLists"
                                                    data-id="b556889" data-element_type="widget"
                                                    data-widget_type="Hospa_OpeningLists.default">
                                                    <div class="elementor-widget-container">
                                                        <ul class="list opening-lists">
                                                            <li>
                                                                <span> Monday </span>
                                                                <strong> 08.00 - 16.00 </strong>
                                                            </li>
                                                            <li>
                                                                <span> Tuesday </span>
                                                                <strong> 08.00 - 20.00 </strong>
                                                            </li>
                                                            <li>
                                                                <span> Wednesday </span>
                                                                <strong> 08.00 - 16.00 </strong>
                                                            </li>
                                                            <li>
                                                                <span> Thursday </span>
                                                                <strong> 08.00 - 20.00 </strong>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-f771d2a ms-auto"
                                            data-id="f771d2a" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div
                                                    class="elementor-element elementor-element-d32250b ms-auto elementor-widget elementor-widget-Hospa_OpeningLists"
                                                    data-id="d32250b" data-element_type="widget"
                                                    data-widget_type="Hospa_OpeningLists.default">
                                                    <div class="elementor-widget-container">
                                                        <ul class="list opening-lists">
                                                            <li>
                                                                <span> Friday </span>
                                                                <strong> 08.00 - 16.00 </strong>
                                                            </li>
                                                            <li>
                                                                <span> Saturday </span>
                                                                <strong> 08.00 - 20.00 </strong>
                                                            </li>
                                                            <li>
                                                                <span> Sunday </span>
                                                                <strong> 08.00 - 16.00 </strong>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <div
                                    class="elementor-element elementor-element-acb56d8 time-schedule-btn elementor-widget elementor-widget-HospaButton"
                                    data-id="acb56d8" data-element_type="widget" data-widget_type="HospaButton.default">
                                    <div class="elementor-widget-container">
                                        <div class="hospa-button text-center">
                                            <a href="#" class="default-btn">
                                                <i class="ti ti-circle-arrow-right-filled"></i>
                                                Book An Appointment </a>
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
