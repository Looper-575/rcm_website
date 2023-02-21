@extends('frontend.layout.master')
@section('content')
    <section class="header_home header_Practice-managment">
        <div class="h-100" id="layer_1">
            <div class="container h-100">
                <div class="d-flex flex-column justify-content-center h-100">
                    <div class="header_content">
                        <h1 class="text-light Sec1-MB-hea1">Fix Revenue Leaks <br>
                            By Ensuring Smooth Operations</h1>
                        <div class="hdr_btn my-3 strtBtn_home">
                            <a href="#connectUs">
                                <button class="btn">
                                    Get Started
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- #####################################    Second-section-Medical-Biling-Page  #############################-->
    <section class="Scnd-sec-PE py-5">
        <div class="container">
            <div class="row d-flex justify-content-center ">
                <div class="col-md-4 my-2">
                    <div class="card  Scnd-sec-PE-card">
                        <div class="PE-2-asset d-flex align-items-center justify-content-center">
                            <img src="{{url('public/frontend/assets/img/patient_experience/vector-smart-object-expereince1.png')}}"
                                 class="PE-2-img-active" alt="Image 1">
                            <img src="{{url('public/frontend/assets/img/patient_experience/icn_perfection@3x copy.png')}}"
                                 class="PE-2-img-inactive" alt="Image 2">
                        </div>

                        <div class="card-body">
                            <h3 class=" text-center text-light">Accurate Assessment</h3>
                            <p class=" text-center text-light m-0">Let us take accurate insurance
                                information and collect unpaid balances.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-2">
                    <div class="card  Scnd-sec-PE-card">
                        <div class="PE-2-asset  d-flex align-items-center justify-content-center">
                            <img src="{{url('public/frontend/assets/img/patient_experience/icon_customization_inactive.png')}}"
                                 class="PE-2-img-active" alt="Image 1">
                            <img src="{{url('public/frontend/assets/img/patient_experience/vector-smart-object-exp.png')}}"
                                 class="PE-2-img-inactive" alt="Image 2">
                        </div>

                        <div class="card-body">
                            <h3 class="Scnd-sec-PE-card-hea text-center text-light">Financial Planning</h3>
                            <p class="Scnd-sec-PE-card-para text-center text-light m-0">Understanding your business
                                costs
                                and revenue cycle helps us create a plan.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-2">
                    <div class="card  Scnd-sec-PE-card">
                        <div class="PE-2-asset  d-flex align-items-center justify-content-center">
                            <img src="{{url('public/frontend/assets/img/patient_experience/vector-smart-object-exp-1.png')}}"
                                 class="PE-2-img-active  " alt="Image 3">
                            <img src="{{url('public/frontend/assets/img/patient_experience/icn_promptness@2x copy.png')}}"
                                 class="PE-2-img-inactive" alt="Image 2">
                        </div>

                        <div class="card-body">
                            <h3 class="Scnd-sec-PE-card-hea text-center text-light">Maintaining Relationship</h3>
                            <p class="Scnd-sec-PE-card-para text-center text-light m-0">Having a good relationship with
                                your
                                patients will increase profitability.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- #####################################    third-section-Medical-Billing-Page  #############################-->

    <section class="thrd-sec-PE py-5">
        <div class="container">
            <div class="row py-lg-4">
                <div class="col-12 col-md-6 col-sm-12  thrd-sec-PE-data">
                    <h3 class="thrd-sec-PE-hea text-blue fs-4">Making Planning Easier for Medical Practitioners.</h3>
                    <p class="thrd-sec-PE-para text-grey pt-3">With all of the things you have to manage—patients, staff, documentation,
                        and insurance payments, you need the right support system in place. That's why Atlantis RCM offers
                        practice management services to make it easier for you.
                    </p>
                    <p class="thrd-sec-PE-para text-grey">
                        We take a holistic approach to revenue cycle management. We don't just look
                        at one area of your business, we look at every step of the process, from how
                        you collect payments to how you communicate with patients, and everything
                        in between.

                    </p>
                </div>
                <div class="col-12 col-md-6 col-sm-12">
                    <img src="{{url('public/frontend/assets/img/practice_manage/mask.png')}}" alt=image
                         class=" thrd-sec-PE-img">
                </div>
            </div>
        </div>
    </section>

    <!-- #####################################    Four-section-Medical-Billing-Page  #############################-->

    <section class="patient_exp_proactive py-5">
        <div class="container">
            <div class="proactive_title">
                <h2 class="text-white pt-md-4">Patient Engagement Through Revenue Cycle Management</h2>
                <p class="text-white">Simpler scheduling through a patient portal and appointment reminders can increase
                    patient engagement.</p>
            </div>
            <div class="row  pt-xl-3">
                <div class="col-12 col-md-6">
                    <div class="pro_active_card py-4">
                        <ul class="nav nav-tabs pro_active" id="myTab" role="tablist">
                            <li class="nav-item pb-xl-4 pb-md-4 pb-3 position-relative" role="presentation">
                                <button class="pro_active_button nav-link active" id="home-tab" data-bs-toggle="tab"
                                        data-bs-target="#home"
                                        type="button" role="tab" aria-controls="home" aria-selected="true">Appointment
                                    Scheduling
                                </button>
                                <img class="pE_pro_arr_active"
                                     src="{{url('public/frontend/assets/img/patient_experience/polygon-1.png')}}">

                            </li>
                            <li class="nav-item  pb-xl-4 pb-md-4 pb-3 position-relative" role="presentation">
                                <button class="nav-link pro_active_button" id="Primary-tab" data-bs-toggle="tab"
                                        data-bs-target="#Primary"
                                        type="button" role="tab" aria-controls="Primary" aria-selected="false">
                                    Organizing Patient Data
                                </button>
                                <img class="pE_pro_arr_active"
                                     src="{{url('public/frontend/assets/img/patient_experience/polygon-1.png')}}">

                            </li>
                            <li class="nav-item  pb-xl-4 pb-md-4 pb-3 position-relative" role="presentation">
                                <button class="nav-link pro_active_button" id="CAQH-tab" data-bs-toggle="tab"
                                        data-bs-target="#CAQH"
                                        type="button" role="tab" aria-controls="CAQH" aria-selected="false">Billing and
                                    Claims Processing
                                </button>
                                <img class="pE_pro_arr_active"
                                     src="{{url('public/frontend/assets/img/patient_experience/polygon-1.png')}}">

                            </li>
                            <li class="nav-item  pb-xl-4 pb-md-4 pb-3 position-relative" role="presentation">
                                <button class="nav-link pro_active_button" id="Recredentialing-tab" data-bs-toggle="tab"
                                        data-bs-target="#Recredentialing"
                                        type="button" role="tab" aria-controls="Recredentialing" aria-selected="false">
                                    Structured Reporting
                                </button>
                                <img class="pE_pro_arr_active"
                                     src="{{url('public/frontend/assets/img/patient_experience/polygon-1.png')}}">

                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-6 my-4 my-md-0">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="">
                                <img class="img-fluid"
                                     src="{{url('public/frontend/assets/img/practice_manage/sec3/slider_appoint_scheduling.jpg')}}">
                                <p class="text-white pt-md-4">Atlantis offers appointment scheduling services that help
                                    practices manage their schedules
                                    and patient flow. We help you book and confirm appointments across locations, verify
                                    insurance eligibility in advance, and check patients in and out swiftly so you can
                                    get back to
                                    business.</p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Primary" role="tabpanel" aria-labelledby="Primary-tab">
                            <div class="">
                                <img class="img-fluid"
                                     src="{{url('public/frontend/assets/img/practice_manage/sec3/slider_organizing_patient_data.jpg')}}">
                                <p class="text-white pt-xl-4">Atlantis RCM experts can help you organize patient data so
                                    that you can see the entire picture at a glance by viewing the entire patient chart. This makes it easy to find
                                    information about your patients, including their insurance status, payment history,
                                    and more.
                                </p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="CAQH" role="tabpanel" aria-labelledby="CAQH-tab">
                            <div class="">
                                <img class="img-fluid"
                                     src="{{url('public/frontend/assets/img/practice_manage/sec3/slider_patient_data.jpg')}}">
                                <p class="text-white pt-xl-4">Billing and claims are the most important step in managing the practice management
                                    process. To help you manage your practice effectively, our billing team adjusts invoice
                                    errors, contacts insurance companies about unpaid bills, and reminds patients about
                                    unpaid bills.
                                </p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Recredentialing" role="tabpanel"
                             aria-labelledby="Recredentialing-tab">
                            <div class="">
                                <img class="img-fluid"
                                     src="{{url('public/frontend/assets/img/practice_manage/sec3/slider_reporting_doctor.jpg')}}">
                                <p class="text-white pt-xl-4">Our team will review your current billing methods and suggest improvements based on
                                    what they see as being most effective in your practice. In this way, you can focus on other
                                    aspects of running your practice while they handle all aspects of your billing.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- #####################################    five-section-Customer-love-Medical-Billing-Page  #############################-->

    <section class="med_bil_sec5  py-5">
        <div class="container">
            <div class="what_home_head">
                <h2 class="text-blue">Benefits</h2>
                <p class="text-grey">A telehealth solution allows patients to receive care remotely, improving
                    convenience, reducing transportation costs, and improving
                    patient satisfaction.
                </p>
            </div>
            <div class="d-flex flex-wrap flex-row svg_process my-5">
                <div class="mx-md-3 what_service text-center service_hd slide_1" onclick="active_service(1)">
                    <div class="corrsponding_icons">
                        <img src="{{url('public/frontend/assets/img/medical_billing/icn_credientialing_management.png')}}"
                             alt="">
                    </div>
                    <p class="headng mt-md-1 text-grey"> Control over
                        financial resources
                    </p>
                </div>
                <div class="mx-2 mx-md-3 what_service text-center service_hd slide_2" onclick="active_service(2)">
                    <div class="corrsponding_icons pt-3">
                        <img src="{{url('public/frontend/assets/img/medical_billing/icn_uptodate_credientials.png')}}"
                             alt="">
                    </div>
                    <p class="headng mt-md-1 text-grey">Locate
                        unaccounted
                        revenue</p>
                </div>
                <div class="mx-md-3 what_service text-center service_hd slide_3" onclick="active_service(3)">
                    <div class="corrsponding_icons">
                        <img src="{{url('public/frontend/assets/img/medical_billing/icn_verify_credientials.png')}}"
                             alt="">
                    </div>
                    <p class="headng mt-md-1 text-grey">Find and
                        fix revenue leaks</p>
                </div>

                <div class="mx-md-3 what_service text-center service_hd slide_4" onclick="active_service(4)">
                    <div class="corrsponding_icons">
                        <img src="{{url('public/frontend/assets/img/medical_billing/icn_verify_credientials.png')}}"
                             alt="">
                    </div>
                    <p class="headng mt-md-1 text-grey">Reconciliation
                        Reports</p>
                </div>
            </div>
                <div class="detail_process mt-5">
                    <div class="process-detail-contant process_inactive text-light slide_content_1">
                        <div class="row px-3">
                            <div class="col-lg-6">
                                <div class="what_we_img">
                                    <img class="WF-5-benefit-img"
                                         src="{{url('public/frontend/assets/img/practice_manage/sec4/slider_control_over_finance.jpg')}}"
                                         alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="text_process_what_we py-md-5">
                                    <p class="text-grey tag_what_we">
                                        Control over financial resources
                                    </p>
                                    <p class="text-grey text_crrspnding_blck mt-3">
                                        With the goal of determining your financial control and ensuring you have adequate resources, we analyze the impact of your current financial situation on your business and identify your practice's growth opportunities.
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="process-detail-contant process_inactive text-light slide_content_2">
                        <div class="row px-3">
                            <div class="col-lg-6">
                                <div class="what_we_img">
                                    <img class="WF-5-benefit-img"
                                         src="{{url('public/frontend/assets/img/practice_manage/sec4/slider_unaccounted_revenue.jpg')}}"
                                         alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="text_process_what_we py-md-5">
                                    <p class="text-grey tag_what_we">
                                        Locate unaccounted revenue
                                    </p>
                                    <p class="text-grey text_crrspnding_blck mt-3">
                                        You can identify the revenue that's been lost to bad data and processes in your
                                        practice.
                                        We will help you locate insurance claims that have been neglected, filed late,
                                        or billed even
                                        though the patient didn't show up.
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="process-detail-contant process_inactive text-light slide_content_3">
                        <div class="row px-3">
                            <div class="col-lg-6">
                                <div class="what_we_img">
                                    <img class="WF-5-benefit-img"
                                         src="{{url('public/frontend/assets/img/practice_manage/sec4/slider_find_and_fix_revenue_leak.jpg')}}"
                                         alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="text_process_what_we py-md-5">
                                    <p class="text-grey tag_what_we">
                                        Find and fix revenue leaks
                                    </p>
                                    <p class="text-grey text_crrspnding_blck mt-3">
                                        With Atlantis practice management solutions, you can plug the holes in your revenue cycle so that no more money goes missing. We ensure that claims are filed on time, patients are booked appropriately, and billed correctly.
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="process-detail-contant process_inactive text-light slide_content_4">
                        <div class="row px-3">
                            <div class="col-lg-6">
                                <div class="what_we_img">
                                    <img class="WF-5-benefit-img"
                                         src="{{url('public/frontend/assets/img/practice_manage/sec4/slider_reconcilation_record.jpg')}}"
                                         alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="text_process_what_we py-md-5">
                                    <p class="text-grey tag_what_we">
                                        Reconciliation Reports
                                    </p>
                                    <p class="text-grey text_crrspnding_blck mt-3">
                                        We provide insight into your practice's financial performance, including how much money you are making from each patient visit. These reports will help determine which areas need improvement to make it more profitable.
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- #####################################    six-section-Customer-love-Medical-Billing-Page  #############################-->

    <section class="home-testimonial-section py-5">
        <div class="container">
            <div class="cus_love-title">
                <h2 class="text-light pt-5">Why Our Customers Trust Us</h2>
            </div>
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner py-5">
                    <div class="carousel-item active py-5">
                        <div class="cus_love_main_testimonial">
                            <div class="Cus_love_testimonial_slide">
                                <div class="Cus_love_testimonial_content">
                                    <p>
                                        "We have been using Atlantis for over a year now, and it's a no-brainer. They have saved us so much time and money in the past few years. It has helped us to get our
                                        revenue cycle back on track after being bogged down by paper-based forms and intense processes. We are now able to focus on what's most important: our patients."
                                    </p>
                                        <div class="Cus_love_testimonial_user">
                                            <img src="{{url('/public/frontend/assets/img/home/img-0-8-v-2.png')}}" alt="dr-img">
                                            <span class="text-white">Dr.Mark Staris</span>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="Connect-Us py-xl-5 pt-3" id="connectUs">
        <div class="container">
            <div>
                <h2 class="Connect-head text-blue ">Discover a Better Way Forward</h2>
                @include('frontend.contactUs.contact_us_form')
            </div>
        </div>
    </section>

@endsection
@section('footer_script')
    <script>
        let current_process = 1;
        function next_process() {
            let unactive;
            if(current_process === 1){
                unactive = 4;
            }else {
                unactive = current_process-1;
            }
            $('.svg_process').find('.slide_'+unactive).removeClass('process_active');
            $('.detail_process').find('.slide_content_'+unactive).removeClass('process_active');
            $('.detail_process').find('.slide_content_'+unactive).addClass('process_inactive');

            $('.svg_process').find('.slide_'+current_process).toggleClass('process_active');
            $('.detail_process').find('.slide_content_'+current_process).addClass('process_active');
            $('.detail_process').find('.slide_content_'+current_process).removeClass('process_inactive');
            // time interval sequences
            if (current_process === 4) {
                current_process = 1;
            } else {
                current_process ++;
            }
        }
        $(document).ready(function () {
            next_process();
        });
        setInterval(function () {
            next_process();
        }, 60000)
        function active_service(e){
            $('.service_hd').removeClass('process_active');
            $('.process-detail-contant').removeClass('process_active');
            $('.process-detail-contant').addClass('process_inactive');
            current_process = e;
            next_process()
        }

    </script>
@endsection
