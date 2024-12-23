<?php

namespace App\Http\Controllers;

use App\AboutUs;
use App\BOG;
use App\Careers;
use App\CEOMessage;
use App\ContactUs;
use App\Department;
use App\Doctors;
use App\Downloads;
use App\Appointment;
use App\FrontContentSection;
use App\Http\Requests\ContactFormRequest;
use App\Management;
use App\MTI_Acts;
use App\News;
use App\SectionService;
use App\Slider;
use App\Tenders;
use App\Timeline;
use App\Mail\AppointmentRequest;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Mail;
use App\Rules\CaptchaRule;
use Illuminate\Support\Facades\Http;
use App\Models\Setting;

class FrontController extends Controller
{

    public function index()
    {
        $content = FrontContentSection::all();
        foreach ($content as $con)
        {
            if($con->content_level == 1)
            {
                $first_content = $con;
            }
            if($con->content_level == 2)
            {
                $second_content = $con;
            }
            if($con->content_level == 3)
            {
                $third_content = $con;
            }
        }
        $news = News::where('active' , 1)->orderByDesc('id')->limit(3)->get();
        $sliders = Slider::orderBy('id','desc')->get();

        $doctor = Doctors::count();
        $services = Management::where('type' , 'Services')->count();
        $doctors = Doctors::with('dept')->get();
        $setting = Setting::where('page', 'home')->get();
        $about = AboutUs::where('type','about-us')->get();

        foreach($setting as $item){

            if($item->key_name == 'main_heading_bold'){
                $main_heading_bold = $item->val;
            }
            if($item->key_name == 'main_heading'){
                $main_heading = $item->val;
            }
            if($item->key_name == 'main_heading_info'){
                $main_heading_info = $item->val;
            }
            if($item->key_name == 'main_header_banner_1'){
                $main_heading_banner_1 = env('APP_CMS_FILES').'/'.$item->val;
            }
            if($item->key_name == 'main_header_banner_2'){
                $main_heading_banner_2 = env('APP_CMS_FILES').'/'.$item->val;
            }
            if($item->key_name == 'opd_hours'){
                $opd_hours = $item->val;
            }
            if($item->key_name == 'ibp_hours'){
                $ibp_hours = $item->val;
            }
            if($item->key_name == 'emergency_services'){
                $emergency_services = $item->val;
            }
            if($item->key_name == 'bed_count'){
                $bed_count = $item->val;
            }
            if($item->key_name == 'cath_ot_count'){
                $cath_ot_count = $item->val;
            }
            if($item->key_name == 'testimonial_sub'){
                $testimonial_sub = $item->val;
            }
            if($item->key_name == 'testimonial_heading'){
                $testimonial_heading = $item->val;
            }
            if($item->key_name == 'testimonial_image1'){
                $testimonial_image1 = env('APP_CMS_FILES').'/uploads/images/'.$item->val;
            }
            if($item->key_name == 'testimonial_image2'){
                $testimonial_image2 = env('APP_CMS_FILES').'/uploads/images/'.$item->val;
            }
            if($item->key_name == 'diagnostics_sub'){
                $diagnostics_sub = $item->val;
            }
            if($item->key_name == 'diagnostics_heading'){
                $diagnostics_heading = $item->val;
            }
            if($item->key_name == 'diagnostics_heading_bold'){
                $diagnostics_heading_bold = $item->val;
            }
            if($item->key_name == 'diagnostics_service1_image'){
                $diagnostics_service1_image = env('APP_CMS_FILES').'/uploads/images/'.$item->val;
            }
            if($item->key_name == 'diagnostics_service1_heading'){
                $diagnostics_service1_heading = $item->val;
            }
            if($item->key_name == 'diagnostics_service1_details'){
                $diagnostics_service1_details = $item->val;
            }
            if($item->key_name == 'diagnostics_service2_image'){
                $diagnostics_service2_image = env('APP_CMS_FILES').'/uploads/images/'.$item->val;
            }
            if($item->key_name == 'diagnostics_service2_heading'){
                $diagnostics_service2_heading = $item->val;
            }
            if($item->key_name == 'diagnostics_service2_details'){
                $diagnostics_service2_details = $item->val;
            }
            if($item->key_name == 'diagnostics_service3_image'){
                $diagnostics_service3_image = env('APP_CMS_FILES').'/uploads/images/'.$item->val;
            }
            if($item->key_name == 'diagnostics_service3_heading'){
                $diagnostics_service3_heading = $item->val;
            }
            if($item->key_name == 'diagnostics_service3_details'){
                $diagnostics_service3_details = $item->val;
            }
            if($item->key_name == 'lab_section_image'){
                $lab_section_image = env('APP_CMS_FILES').'/uploads/images/'.$item->val;
            }
        }
        $doctorsBySpeciality = Doctors::select('speciality', DB::raw('count(*) as number_of_doctors'))
            ->groupBy('speciality')
            ->orderByDesc('number_of_doctors')
            ->get();

            $services_results = Management::where('type', 'services')
            ->join('management_section', 'management.id', '=', 'management_section.management_id')
            ->select(
                'management.management_name',
                DB::raw("CONCAT(SUBSTRING_INDEX(management_section.description, ' ', 25), ' ...') AS description")
            )
            ->orderBy('management.level', 'asc')
            ->limit(8)
            ->get();


        $department = Department::all();
        return view("main.index" ,
        compact('news','first_content','second_content','third_content','sliders','doctor','services', 'doctors', 'department', 'doctorsBySpeciality',
        'main_heading_bold', 'main_heading', 'main_heading_info' , 'main_heading_banner_1' , 'main_heading_banner_2', 'opd_hours', 'ibp_hours', 'emergency_services', 'bed_count',
        'cath_ot_count', 'about', 'services_results', 'testimonial_sub', 'testimonial_heading', 'testimonial_image1', 'testimonial_image2', 'diagnostics_sub', 'diagnostics_heading',
        'diagnostics_heading_bold', 'diagnostics_service1_image','diagnostics_service1_heading', 'diagnostics_service1_details', 'diagnostics_service2_image','diagnostics_service2_heading',
        'diagnostics_service2_details', 'diagnostics_service3_image','diagnostics_service3_heading','diagnostics_service3_details', 'lab_section_image'));
    }

    public function MTIActRulesRegulations()
    {
        $mti_act = MTI_Acts::where('active' , 1)->get();
        return view("main.mti-act" , compact('mti_act'));
    }

    public function careers()
    {

        $careers = Careers::where("advertisement_date" , "<=" , date('Y-m-d'))->where('closing_date' , '>=' , date('Y-m-d'))->where('active' , 1)->orderByDesc("advertisement_date")->get();
        return view("main.careers" , compact('careers'));
    }
    public function tenders()
    {
        $tenders = Tenders::where('active' , 1)->orderByDesc("advertisement_date")->get();
        return view("main.tenders" , compact('tenders'));

    }

    public function getTenderDetails($id)
    {
        echo strip_tags(htmlspecialchars_decode(Tenders::where('id',$id)->first()->tender_description));
    }

    public function showNewsDetails($id)
    {
        $news = News::where('id' , $id)->first();
        return view("main.news-details" , compact('news'));
    }

    public function services()
    {
        return redirect()->to('/');
        return view("main.services");
    }
    public function showManagementPage($id)
    {
        $management = Management::has('section')->where("id" , $id)->get();
        return view("main.management-page" , compact('management'));
    }
    public function donwloads()
    {
        $downloads = Downloads::where('category','!=' , 'Procurement')->get();
        return view("main.downloads" , compact('downloads'));
    }
    public function app()
    {
        $downloads = Downloads::whereCategory('Procurement')->get();
        return view("main.annual-purchase-plan" , compact('downloads'));
    }
    public function contactUs()
    {
        return view("main.contact-us");
    }
    public function comingSoon()
    {
        return view("coming-soon");
    }

    public function showDoctorDetails($doctorId)
    {
        $doctor = Doctors::where("id" , $doctorId)->first();
        return view("main.doctor-details" , compact('doctor'));
    }

    public function showAboutUs()
    {
        $about = AboutUs::where('type','about-us')->get();
        return view("main.about-pic" , compact('about'));
    }

    public function showTermsofUse()
    {
        return view("main.terms-of-use");
    }

    public function showVisionMission()
    {
        $about = AboutUs::where('type','vision-mission')->get();
        return view("main.vision-mission" , compact('about'));
    }

    public function showBoardofGovernors()
    {
        $bog = BOG::all();
        return view("main.board-governors" , compact('bog'));
    }

    public function showTimeline()
    {
        $timeline = Timeline::orderBy('created_at' , 'asc')->get();
        return view("main.timeline" , compact('timeline'));
    }

    public function showFindDoctor()
    {
        $doctors = Doctors::with('dept')->paginate(6);
        $department = Department::all();
        return view("main.doctors" , compact('doctors' , 'department'));
    }

    public function searchDoctor(Request $request)
    {
        $doctors = "";
        $department = "";
        if($request->get('q') != "")
        {
            $doctors = Doctors::where("name" , "like", "%".$request->get('q')."%")->orWhere("title" , "like", "%".$request->get('q')."%")->orWhere("speciality" , "like", "%".$request->get('q')."%");
        }
        if($request->get('department') != "")
        {
            $department = "1";
            if($doctors != "")
            {
                $doctors = $doctors->where("dept_id" , $request->get('department'))->paginate(6);
            }
            else
            {
                $doctors = Doctors::where("dept_id" , $request->get('department'))->paginate(6);
            }
        }
        if($doctors == "" && $department == "")
        {
            $doctors = Doctors::paginate(6);
        }
        if($doctors != "" && $department == "")
        {
            $doctors = $doctors->paginate(6);
        }
        $department = Department::all();
        return view("main.doctors" , compact('doctors' , 'department'));
    }

    public function showCEOMessage()
    {
        $message = CEOMessage::all();
        return view("main.ceo-message" , compact('message'));
    }

    public function showFAQ(){
        return view("main.faq");
    }

    public function showServicePage($id)
    {
        $management = Management::has('section')->where("id" , $id)->get();
        return view("main.service-page" , compact('management'));
    }

    public function showPicturesGallery()
    {
        return view("main.show-picture");
    }

    public function saveContactMessage(ContactFormRequest $request)
    {
        $contactForm = new ContactUs();
        $contactForm->name = $request->get('name');
        $contactForm->email = $request->get('email');
        $contactForm->subject = $request->get('subject');
        $contactForm->contact = $request->get('contact');
        $contactForm->message = $request->get('message');
        $contactForm->save();
        return redirect()->back()->with('success' , 'Message send successfully !');
    }

    public function getVideoGallery()
    {
        $videos = DB::table('youtube_videos')->where('active' , 1)->orderByDesc('id')->paginate(12);
        return view("main.video-gallery" , compact('videos'));
    }

    public function getClinicalDepartment(){
        $services = Management::has('section')->where('type' , 'Services')->orderBy('level' , 'ASC')->get();
        return view('main.clinical-services', compact('services'));
    }
    public function getAdministrativeServices(){
        $services = Management::has('section')->where('type' , 'Management')->orderBy('level' , 'ASC')->get();
        return view("main.administrative-services" , compact('services'));
    }
    public function showOnlineReports() {
        return view("main.online-reports");
    }

    public function showAppointmentForm() {
        $doctors = Doctors::orderBy('level' , 'ASC')->get();
        return view("main.appointment-form" , compact('doctors'));
    }

    public function saveAppointment(Request $request) {

        //  try{
        //     $res = Http::post('http://pic.gkp.pk/careers/send-sms', [
        //         'To' => $request->get("mobile"),
        //         'Name' => $request->get("firstName"),
        //     ]);
        //     return $res->body();
        //     dd($res->body());

        // }catch(\Exception $e) {
        //     return $e->getMessage();
        //     dd($e->getMessage());
        //     app('log')->error('Exception : ' . $e->getMessage());
        // }

        // Validate the captcha
        if (! captcha_check($request->captcha)) {
            return response()->json([
                'status' => "false",
                'message' => 'Invalid Captch, Please try again'
            ]);
        }

        $appointment = new Appointment();
        $appointment->firstName = (string) $request->get("firstName");
        $appointment->middleName = (string) $request->get("middleName");
        $appointment->lastName = (string) $request->get("lastName");
        $appointment->dob = (string) $request->get("dob");
        $appointment->gender = (string) $request->get("gender");
        $appointment->mobile = (string) $request->get("mobile");
        $appointment->mrn = (string) $request->get("mrn");
        $appointment->country = (string) $request->get("residenceCountry");
        $appointment->email = (string) $request->get("email");
        $appointment->doctor = (string) $request->get("doctor");
        $appointment->reason = (string) strip_tags(htmlspecialchars_decode($request->get("reason")));
        $appointment->disclaimer = (string) $request->get("disclaimer");
        $appointment->cnic = (string) $request->get("cnic");
        $appointment->created_at = date('Y-m-d h:i:s a');
        $appointment->appointment_date = (string) $request->get('appointmentDate');
        $appointment->save();

        Mail::to(['sunnan.fazal@pic.edu.pk','doctor.appointment@pic.edu.pk'])->send(new AppointmentRequest($appointment));


        return response()->json([
            'status' => "true",
            'message' => 'Appointment request sent succesfully, our representative will contact you shortly'
        ]);

    }

    public function showOPDDays() {
        return view("main.opd-days");
    }

}


?>
