@extends('frontend.layout.master')
@section('content')
    <section class="header_home header_Health-Care">
        <div class="h-100" id="layer_1">
            <div class="container h-100">
                <div class="d-flex flex-column justify-content-center h-100">
                    <div class="header_content">
                        <h1 class="text-light Sec1-MB-hea1 fw-bold fs-2">Healthcare Analytics: </h1>
                            <h2 class="text-light">Analyze Trends<br>
                                & Improve Outreach</h2>

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


    <!-- #####################################    Second-section-service-Page-health-care  #############################-->

    <section class="Scnd-sec-PE py-5">
        <div class="container">
            <div class="row d-flex justify-content-center ">
                <div class="col-md-4 my-2 my-md-0">
                    <div class="card Scnd-sec-PE-card">
                        <div class="PE-2-asset d-flex align-items-center justify-content-center">
                            <img src="{{url('public/frontend/assets/img/patient_experience/vector-smart-object-expereince1.png')}}" class="PE-2-img-active" alt="Image 1">
                            <img src="{{url('public/frontend/assets/img/patient_experience/icn_perfection@3x copy.png')}}" class="PE-2-img-inactive" alt="Image 2" >
                        </div>

                        <div class="card-body">
                            <h3 class="Scnd-sec-PE-card-hea text-center text-light fs-4">Understand Performance</h3>
                            <p class="Scnd-sec-PE-card-para text-center text-light m-0">Visibility into your data helps
                                you improve quality and service.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-2 my-md-0">
                    <div class="card  Scnd-sec-PE-card">
                        <div class="PE-2-asset  d-flex align-items-center justify-content-center">
                            <img src="{{url('public/frontend/assets/img/patient_experience/icon_customization_inactive.png')}}" class="PE-2-img-active" alt="Image 1">
                            <img src="{{url('public/frontend/assets/img/patient_experience/vector-smart-object-exp.png')}}" class="PE-2-img-inactive" alt="Image 2" >
                        </div>

                        <div class="card-body">
                            <h3 class="Scnd-sec-PE-card-hea text-center text-light fs-4">Improve Quality & Service</h3>
                            <p class="Scnd-sec-PE-card-para text-center text-light m-0">Tracks progress toward goals and
                                identifies areas for improvement.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-2 my-md-0">
                    <div class="card  Scnd-sec-PE-card">
                        <div class="PE-2-asset  d-flex align-items-center justify-content-center ">
                            <img src="{{url('public/frontend/assets/img/patient_experience/vector-smart-object-exp-1.png')}}" class="PE-2-img-active  " alt="Image 3">
                            <img src="{{url('public/frontend/assets/img/patient_experience/icn_promptness@2x copy.png')}}" class="PE-2-img-inactive" alt="Image 2" >
                        </div>

                        <div class="card-body">
                            <h3 class="Scnd-sec-PE-card-hea text-center text-light fs-4">Manage Risk & Reporting</h3>
                            <p class="Scnd-sec-PE-card-para text-center text-light m-0">Maintain compliance with all
                                applicable laws and regulations.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- #####################################    third-section-service-Page-health-care  #############################-->

    <section class="thrd-sec-PE py-5">
        <div class="container">
            <div class=" row py-md-4">
                <div class="col-12 col-md-6 col-sm-12 pt-0 thrd-sec-PE-data">
                    <h3 class="thrd-sec-PE-hea text-blue fs-4">Real-Time Information To Deliver
                        Actionable Insights!</h3>
                    <p class="thrd-sec-PE-para text-grey pt-3">Atlantis RCM is the only solution that provides you with both a complete
                        picture of your clinical outcomes and actionable insights into how to
                        improve them.
                    </p>
                    <p class="thrd-sec-PE-para text-grey">
                        Between insurance companies, hospitals, and the government, sometimes it
                        feels like there's no way to keep up with all of the information you need to
                        provide your patients.
                    </p>
                    <p class="thrd-sec-PE-para text-grey">
                        Our solutions take care of all of this by providing easy-to-understand
                        visualizations of any data source you might need, including patient
                        demographics and health outcomes. </p>
                    <p class="thrd-sec-PE-para text-grey">
                        No more lost paperwork or confusing reports, just simple, actionable
                        information that lets you do what matters most: help your patients. </p>
                </div>
                <div class="col-12 col-md-6 col-sm-12">
                    <img src="{{url('public/frontend/assets/img/healthCare/businessman-holding-medical.png')}}" alt=image class=" thrd-sec-PE-img">
                </div>
            </div>
        </div>
    </section>



    <!-- #####################################    Four-section-service-Page-health-care   #############################-->
    <div class="four-sec-MB-standrd SP-four">
        <div class="container">
            <div class="standrd_title pt-5">
                <h2 class="text-light "> Atlantis RCM - Designed to Streamline Operations</h2>
                <p class="text-light">A credentialing process is a laborious and highly repetitive activity that requires constant attention. Atlantis RCM can help you keep
                    your credentialing documents up to date, recredential and customize your contract on your terms.</p>
                <div class="row py-5">
                    <div class="col-12 col-md-6">
                        <div class="pro_active_card py-4">
                            <ul class="nav nav-tabs pro_active" id="myTab" role="tablist">
                                <li class="nav-item pb-xl-4 pb-md-4 pb-3 position-relative" role="presentation">
                                    <button class="pro_active_button nav-link active" id="home-tab" data-bs-toggle="tab"
                                            data-bs-target="#home"
                                            type="button" role="tab" aria-controls="home" aria-selected="true">Electronic Health Records
                                    </button>
                                    <img class="pE_pro_arr_active"
                                         src="{{url('public/frontend/assets/img/patient_experience/polygon-1.png')}}">

                                </li>
                                <li class="nav-item  pb-xl-4 pb-md-4 pb-3 position-relative" role="presentation">
                                    <button class="nav-link pro_active_button" id="Primary-tab" data-bs-toggle="tab"
                                            data-bs-target="#Primary"
                                            type="button" role="tab" aria-controls="Primary" aria-selected="false">Electronic Prescription Services
                                    </button>
                                    <img class="pE_pro_arr_active"
                                         src="{{url('public/frontend/assets/img/patient_experience/polygon-1.png')}}">

                                </li>
                                <li class="nav-item  pb-xl-4 pb-md-4 pb-3 position-relative" role="presentation">
                                    <button class="nav-link pro_active_button" id="CAQH-tab" data-bs-toggle="tab"
                                            data-bs-target="#CAQH"
                                            type="button" role="tab" aria-controls="CAQH" aria-selected="false">Personal Health Records
                                    </button>
                                    <img class="pE_pro_arr_active"
                                         src="{{url('public/frontend/assets/img/patient_experience/polygon-1.png')}}">

                                </li>
                                <li class="nav-item  pb-xl-4 pb-md-4 pb-3 position-relative" role="presentation">
                                    <button class="nav-link pro_active_button" id="Recredentialing-tab" data-bs-toggle="tab"
                                            data-bs-target="#Recredentialing"
                                            type="button" role="tab" aria-controls="Recredentialing" aria-selected="false">Master Patient Indexes
                                    </button>
                                    <img class="pE_pro_arr_active"
                                         src="{{url('public/frontend/assets/img/patient_experience/polygon-1.png')}}">

                                </li>
                                <li class="nav-item  pb-xl-4 pb-md-4 pb-3 position-relative" role="presentation">
                                    <button class="nav-link pro_active_button" id="Appeals-tab" data-bs-toggle="tab"
                                            data-bs-target="#Appeals"
                                            type="button" role="tab" aria-controls="Appeals" aria-selected="false">Patient & Support Staff Web Portals
                                    </button>
                                    <img class="pE_pro_arr_active"
                                         src="{{url('public/frontend/assets/img/patient_experience/polygon-1.png')}}">

                                </li>
                                <li class="nav-item  pb-xl-4 pb-md-4 pb-3 position-relative" role="presentation">
                                    <button class="nav-link pro_active_button" id="Smartphone-tab" data-bs-toggle="tab"
                                            data-bs-target="#Smartphone"
                                            type="button" role="tab" aria-controls="Smartphone" aria-selected="false">Healthcare Related Smartphone Apps
                                    </button>
                                    <img class="pE_pro_arr_active"
                                         src="{{url('public/frontend/assets/img/patient_experience/polygon-1.png')}}">

                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="tab-content mt-4" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="">
                                    <img class="img-fluid" src="{{url('public/frontend/assets/img/healthCare/section 3/slider_electronic_health_records.jpg')}}">
                                    <p class="text-white pt-md-4">EHR increases patient engagement and compliance among your patient base. Provide information such as age, gender, ethnicity, health history, medicines, lab test results, discharge instructions, and billing information.
                                    </p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Primary" role="tabpanel" aria-labelledby="Primary-tab">
                                <div class="">
                                    <img class="img-fluid" src="{{url('public/frontend/assets/img/healthCare/section 3/slider_electronic_prescription_service.jpg')}}">
                                    <p class="text-white pt-xl-4">We provide electronic prescription management solutions that help pharmacies manage their workflow, improve patient safety and satisfaction, and reduce operational costs.
                                    </p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="CAQH" role="tabpanel" aria-labelledby="CAQH-tab">
                                <div class="">
                                    <img class="img-fluid" src="{{url('public/frontend/assets/img/healthCare/section 3/slider_personal_health_records.jpg')}}">
                                    <p class="text-white pt-xl-4">PHRs allow patients to securely store their own personal health information online and access it from any location with an Internet connection. EPS provides electronic prescription capabilities for patients and healthcare providers.
                                    </p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Recredentialing" role="tabpanel" aria-labelledby="Recredentialing-tab">
                                <div class="">
                                    <img class="img-fluid" src="{{url('public/frontend/assets/img/healthCare/section 3/Slider_patient_indexes.jpg')}}">
                                    <p class="text-white pt-xl-4">Atlantis RCM is a comprehensive healthcare analytics platform that helps you manage, organize and secure your data. With Atlantis RCM, you can create a master patient index to cross-reference your entire patient population and identify potential risks.</p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Appeals" role="tabpanel" aria-labelledby="Appeals-tab">
                                <div class="">
                                    <img class="img-fluid" src="{{url('public/frontend/assets/img/healthCare/section 3/slider_pateint_and_support_staff.jpg')}}">
                                    <p class="text-white pt-xl-4">Atlantis RCM also offers an easy-to-use web portal for patients and support staff, so they can access their health records whenever they need them, without having to wait in line at the doctor's office or hospital lobby.
                                    </p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Smartphone" role="tabpanel" aria-labelledby="Smartphone-tab">
                                <div class="">
                                    <img class="img-fluid" src="{{url('public/frontend/assets/img/healthCare/section 3/Slider_Healthcare Related Smartphone Apps.jpg')}}">
                                    <p class="text-white pt-xl-4">Healthcare-related smartphone apps collect various types of health data from users, including weight, blood pressure, heart rate, sleep patterns, exercise activity levels and more. These apps use this data to give users insight into their overall health status.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- #####################################    five-section-Customer-love-Medical-Billing-Page  #############################-->
    <section class="med_bil_sec5  py-5">
        <div class="container">
            <div class="what_home_head">
                <h2 class="text-blue">Provide patient Safety by Reducing Medical Errors</h2>
                <p class="text-grey">We have a team of experts who have years of experience navigating Medicare and Medicaid enrollment, commercial
                    insurance enrollment, and other credentialing processes for healthcare providers.
                </p>
            </div>
            <div class="d-flex flex-wrap flex-row svg_process my-5">
                <div class="mx-md-3 what_service text-center service_hd slide_1" onclick="active_service(1)">
                    <div class="corrsponding_icons">
                        <img src="{{url('public/frontend/assets/img/healthCare/vector-HC1.png')}}" alt="">
                    </div>
                    <p class="headng mt-md-1 text-grey"> Improved
                        Diagnostics
                    </p>
                </div>
                <div class="mx-2 mx-md-3 what_service text-center service_hd slide_2" onclick="active_service(2)">
                    <div class="corrsponding_icons pt-3">
                        <img src="{{url('public/frontend/assets/img/healthCare/icon-patient-care-HC-2.png')}}" alt="">
                    </div>
                    <p class="headng mt-md-1 text-grey">Better
                        Patient Care</p>
                </div>
                <div class="mx-md-3 what_service text-center service_hd slide_3" onclick="active_service(3)">
                    <div class="corrsponding_icons">
                        <img src="{{url('public/frontend/assets/img/healthCare/vector-smart--HC-3.png')}}" alt="">
                    </div>
                    <p class="headng mt-md-1 text-grey">Preventive
                        Care</p>
                </div>
                <div class="mx-md-3 what_service text-center service_hd slide_4" onclick="active_service(4)">
                    <div class="corrsponding_icons">
                        <img src="{{url('public/frontend/assets/img/healthCare/vector-smart-HC-4.png')}}" alt="">
                    </div>
                    <p class="headng mt-md-1 text-grey">Increased Health
                        Indicators</p>
                </div>
            </div>

                <div class="detail_process mt-5">
                    <div class="process-detail-contant process_inactive text-light slide_content_1">
                        <div class="row px-3">
                            <div class="col-lg-6">
                                <div class="what_we_img">
                                    <img class="WF-5-benefit-img" src="{{url('public/frontend/assets/img/healthCare/section 4/slider_improved_diagnostic.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="text_process_what_we py-md-5">
                                    <p class="text-grey tag_what_we">
                                        Improved Diagnostics
                                    </p>
                                    <p class="text-grey text_crrspnding_blck mt-3">
                                        We provide detailed information on patient outcomes and health status so that you can improve your diagnostic process.
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="process-detail-contant process_inactive text-light slide_content_2">
                        <div class="row px-3">
                            <div class="col-lg-6">
                                <div class="what_we_img">
                                    <img class="WF-5-benefit-img" src="{{url('public/frontend/assets/img/healthCare/long-shot-nurse-helping-old-man-getting-up.png')}}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="text_process_what_we py-md-5">
                                    <p class="text-grey tag_what_we">
                                        Better Patient Care
                                    </p>
                                    <p class="text-grey text_crrspnding_blck mt-3">
                                        Our advanced analytics help you identify patients at risk for complications so that you can provide them with more timely care or preventative measures.
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="process-detail-contant process_inactive text-light slide_content_3">
                        <div class="row px-3">
                            <div class="col-lg-6">
                                <div class="what_we_img">
                                    <img class="WF-5-benefit-img" src="{{url('public/frontend/assets/img/healthCare/section 4/slider_preventive_care.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="text_process_what_we py-md-5">
                                    <p class="text-grey tag_what_we">
                                        Preventive Care
                                    </p>
                                    <p class="text-grey text_crrspnding_blck mt-3">
                                        Atlantis identifies potential issues at your facility before they become problems. This allows you to take proactive measures and avoid costly mistakes.
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="process-detail-contant process_inactive text-light slide_content_4">
                        <div class="row px-3">
                            <div class="col-lg-6">
                                <div class="what_we_img">
                                    <img class="WF-5-benefit-img" src="{{url('public/frontend/assets/img/healthCare/section 4/slider_increase_health_indicators.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="text_process_what_we py-md-5">
                                    <p class="text-grey tag_what_we">
                                        Increased Health Indicators
                                    </p>
                                    <p class="text-grey text_crrspnding_blck mt-3">
                                        Atlantis also helps to increase health indicators like patient satisfaction, employee engagement, and overall well-being.
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
                <h2 class="text-light pt-5">Why Our Customers Loves Us</h2>
                <p class="text-light pt-3 fs-5">   With more than a decade of industry-leading experience, Atlantis has been continually recognized for exceptional performance, customer service, employee training, and stringent cybersecurity standards. However, the greatest recognition we receive is the satisfaction of our customers.</p>
            </div>
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner py-5">
                    <div class="carousel-item active py-5">
                        <div class="cus_love_main_testimonial">
                            <div class="Cus_love_testimonial_slide">
                                <div class="Cus_love_testimonial_content">
                                    <a href="#"><p>"Atlantis is a great platform that allows us to get real-time insights into our patient population.
                                            This enables us to make more informed decisions about where we want to focus our
                                            efforts and how we want to deliver the most efficient and effective care possible."</p></a>
                                    <div class="Cus_love_testimonial_user">
                                        <img src="{{url('public/frontend/assets/img/patient_experience/img-0-7-v-1.png')}}" alt="">
                                        <span class="text-white">Dr. Shaun Daniel</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <section class="Connect-Us py-xl-5 pt-3" id="connectUs">
        <div class="container">
            <div>
                <h2 class="Connect-head text-blue ">For Adaptable Solutions, Contact Us Today!</h2>
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
                unactive = 5;
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
            if (current_process === 5) {
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
        }, 10000)
        function active_service(e){
            $('.service_hd').removeClass('process_active');
            $('.process-detail-contant').removeClass('process_active');
            $('.process-detail-contant').addClass('process_inactive');
            current_process = e;
            next_process()
        }
    </script>
@endsection
