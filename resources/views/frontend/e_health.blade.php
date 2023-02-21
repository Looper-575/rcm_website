@extends('frontend.layout.master')
@section('content')

    <section class="header_home e_health_header">
        <div class="h-100" id="layer_1">
            <div class="container h-100">
                <div class="d-flex flex-column justify-content-center h-100">
                    <div class="header_content">
                        <h1 class="text-light Sec1-MB-hea1">Digital Health<br>
                            Now Optimize Workflow Effortlessly.
                        </h1>
                        <div class="hdr_btn my-5 strtBtn_home">
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

    <!-- #####################################    Second-section-E_health-Page  #############################-->
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
                            <h3 class="Scnd-sec-PE-card-hea text-center text-light">Healthcare Awareness</h3>
                            <p class="Scnd-sec-PE-card-para text-center text-light m-0">Our services provide you with a detailed analysis of your current state and recommendations
                                on how to improve it. Furthermore, we automate patient awareness campaigns.
                            </p>
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
                            <h3 class="Scnd-sec-PE-card-hea text-center text-light">Accessible Reporting</h3>
                            <p class="Scnd-sec-PE-card-para text-center text-light m-0">
                                We offer an easy way for your patients and their family members to access their medical reports online.
                                These solutions allow them to view their medical records without having to visit the office.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-2 my-md-0">
                    <div class="card  Scnd-sec-PE-card">
                        <div class="PE-2-asset  d-flex align-items-center justify-content-center">
                            <img src="{{url('public/frontend/assets/img/patient_experience/vector-smart-object-exp-1.png')}}" class="PE-2-img-active  " alt="Image 3">
                            <img src="{{url('public/frontend/assets/img/patient_experience/icn_promptness@2x copy.png')}}" class="PE-2-img-inactive" alt="Image 2" >
                        </div>

                        <div class="card-body">
                            <h3 class="Scnd-sec-PE-card-hea text-center text-light">Easy Payments</h3>
                            <p class="Scnd-sec-PE-card-para text-center text-light m-0">Our digital health solutions make billing easier by eliminating the need for paper and manual processing.
                                We also allow your patients to pay online, so you don't have to worry about late fees or missed payment deadlines.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- #####################################    third-section-E_health-Page  #############################-->

    <section class="thrd-sec-PE py-5">
        <div class="container">
            <div class="row py-md-4">
                <div class="col-12 col-md-6 col-sm-12  thrd-sec-PE-data">
                    <h3 class="thrd-sec-PE-hea text-blue fs-4">Change The Way You Deliver Care
                        By Adopting An Innovative Approach</h3>
                    <p class="thrd-sec-PE-para text-grey pt-3">Digital health is a fast-growing field in healthcare, and Atlantis RCM is one of the first companies to provide
                        digital health services to the healthcare industry. We make it easy for healthcare providers
                        to manage the administrative aspects of their business more efficiently, allowing them to focus on what they do best: providing great care.
                    </p>
                    <p class="thrd-sec-PE-para text-grey">
                        We offer tools that allow our clients to keep track of patient data and documents, schedule appointments,
                        make payments, and collaborate with other providers. Our platform also allows them to monitor their
                        finances, see how much money they have available for new patients or services, and predict expenses.
                    </p>
                    <p class="thrd-sec-PE-para text-grey">
                        With our help, you can improve your business processes by using technology instead of paper.
                    </p>
                </div>
                <div class="col-12 col-md-6 col-sm-12">
                    <img src="{{url('public/frontend/assets/img/e_health/img_section_2.jpg')}}" alt=image class=" thrd-sec-PE-img">
                </div>
            </div>
        </div>
    </section>

    <!-- #####################################    Four-section-E_health-Page  #############################-->
    <div class="four-sec-MB-standrd py-5">
        <div class="container">
            <div class="standrd_title pt-lg-5">
                <h2 class="text-light">Easily Accessible Platforms More Satisfied Patients</h2>
                <p class="text-light">Doctors can interact with their patients via Atlantis RCM's integrated digital healthcare platforms so they can provide optimal healthcare advice.</p>
                <div class="row mt-md-2 mt-lg-3 py-xl-5">
                    <div class="col-md-6">
                        <div class="pro_active_card py-4">
                            <ul class="nav nav-tabs pro_active" id="myTab" role="tablist">
                                <li class="nav-item pb-xl-4 pb-md-4 pb-3 position-relative" role="presentation">
                                    <button class="pro_active_button nav-link active" id="home-tab" data-bs-toggle="tab"
                                            data-bs-target="#home"
                                            type="button" role="tab" aria-controls="home" aria-selected="true">Chronic Care Management
                                    </button>
                                    <img class="pE_pro_arr_active" src="{{url('public/frontend/assets/img/patient_experience/polygon-1.png')}}">
                                </li>
                                <li class="nav-item  pb-xl-4 pb-md-4 pb-3 position-relative" role="presentation">
                                    <button class="nav-link pro_active_button" id="Primary-tab" data-bs-toggle="tab"
                                            data-bs-target="#Primary"
                                            type="button" role="tab" aria-controls="Primary" aria-selected="false">Remote Patient Monitoring
                                    </button>
                                    <img class="pE_pro_arr_active" src="{{url('public/frontend/assets/img/patient_experience/polygon-1.png')}}">
                                </li>
                                <li class="nav-item  pb-xl-4 pb-md-4 pb-3 position-relative" role="presentation">
                                    <button class="nav-link pro_active_button" id="CAQH-tab" data-bs-toggle="tab"
                                            data-bs-target="#CAQH"
                                            type="button" role="tab" aria-controls="CAQH" aria-selected="false">Patient Portal
                                    </button>
                                    <img class="pE_pro_arr_active" src="{{url('public/frontend/assets/img/patient_experience/polygon-1.png')}}">

                                </li>
                                <li class="nav-item  pb-xl-4 pb-md-4 pb-3 position-relative" role="presentation">
                                    <button class="nav-link pro_active_button" id="Virtual-tab" data-bs-toggle="tab"
                                            data-bs-target="#Virtual"
                                            type="button" role="tab" aria-controls="Virtual" aria-selected="false">Virtual Visit
                                    </button>
                                    <img class="pE_pro_arr_active" src="{{url('public/frontend/assets/img/patient_experience/polygon-1.png')}}">
                                </li>
                                <li class="nav-item  pb-xl-4 pb-md-4 pb-3 position-relative" role="presentation">
                                    <button class="nav-link pro_active_button" id="Portal-tab" data-bs-toggle="tab"
                                            data-bs-target="#Portal"
                                            type="button" role="tab" aria-controls="Portal" aria-selected="false">Personal Health Apps
                                    </button>
                                    <img class="pE_pro_arr_active" src="{{url('public/frontend/assets/img/patient_experience/polygon-1.png')}}">
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mt-4 mt-md-0">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="">
                                    <img class="img-fluid" src="{{url('public/frontend/assets/img/e_health/sec_3_care_management.jpg')}}">
                                    <p class="text-white pt-md-4">
                                        Through digitalization, doctors and healthcare organizations can provide chronic care management to their patients.
                                        Provides a comprehensive digital health care plan that explains the patient's problems, medications, and the care the patient needs.
                                    </p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Primary" role="tabpanel" aria-labelledby="Primary-tab">
                                <div class="">
                                    <img class="img-fluid" src="{{url('public/frontend/assets/img/e_health/sec3_remote_patient.jpg')}}">
                                    <p class="text-white pt-md-4">
                                        From anywhere in the world, you can monitor your patients in real time with a digital health solution.
                                        It's easy to keep an eye on their vitals without leaving your office. This can also reduce travel costs and infection risks for chronically ill patients.
                                    </p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="CAQH" role="tabpanel" aria-labelledby="CAQH-tab">
                                <div class="">
                                    <img class="img-fluid" src="{{url('public/frontend/assets/img/e_health/sec3_patient Portal.jpg')}}">
                                    <p class="text-white pt-md-4">
                                        We offer our clients solutions to provide healthcare related virtual help both for doctors and patients.
                                        Our user-friendly portals provide real-time data and analytics to keep track of everything related to patient and payment history.
                                    </p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Virtual" role="tabpanel" aria-labelledby="Virtual-tab">
                                <div class="">
                                    <img class="img-fluid" src="{{url('public/frontend/assets/img/e_health/sec3_virtualVisit.png')}}">
                                    <p class="text-white pt-md-4">
                                        Patients can see and talk to doctors through their smartphones, tablets, and laptops in the comfort of their homes
                                        means they don't have to sit in the waiting room and easily pay a virtual visit.
                                    </p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Portal" role="tabpanel" aria-labelledby="Portal-tab">
                                <div class="">
                                    <img class="img-fluid" src="{{url('public/frontend/assets/img/e_health/sec3_personal Health apps.jpg')}}">
                                    <p class="text-white pt-md-4">
                                        Although health apps are becoming more prevalent, the healthcare industry needs to incorporate them. With our team of full-stack developers,
                                        we provide development solutions that doctors can utilize to manage and stack health insurance information.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- #####################################    five-section-Customer-love-E_health-Page  #############################-->
    <section class="med_bil_sec5  py-5">
        <div class="container">
            <div class="what_home_head">
                <h2 class="text-blue">A Better Prevention Model Leading To Healthier Behavior</h2>
            </div>
            <div class="d-flex flex-wrap flex-row svg_process my-2 my-lg-5">
                <div class="mx-md-3 what_service text-center service_hd slide_1" onclick="active_service(1)">
                    <div class="corrsponding_icons">
                        <img src="{{url('public/frontend/assets/img/medical_billing/icn_credientialing_management.png')}}" alt="">
                    </div>
                    <p class="headng mt-md-1 text-grey">
                        Responsive Healthcare
                    </p>
                </div>
                <div class="mx-2 mx-md-3 what_service text-center service_hd slide_2" onclick="active_service(2)">
                    <div class="corrsponding_icons pt-3">
                        <img src="{{url('public/frontend/assets/img/medical_billing/icn_uptodate_credientials.png')}}" alt="">
                    </div>
                    <p class="headng mt-md-1 text-grey">Prevention before Treatment</p>
                </div>
                <div class="mx-md-3 what_service text-center service_hd slide_3" onclick="active_service(3)">
                    <div class="corrsponding_icons">
                        <img src="{{url('public/frontend/assets/img/medical_billing/icn_verify_credientials.png')}}" alt="">
                    </div>
                    <p class="headng mt-md-1 text-grey">
                        Improved Patient-Doctor Relationship
                    </p>
                </div>
                <div class="mx-md-3 what_service text-center service_hd slide_4" onclick="active_service(4)">
                    <div class="corrsponding_icons">
                        <img src="{{url('public/frontend/assets/img/medical_billing/icn_verify_credientials.png')}}" alt="">
                    </div>
                    <p class="headng mt-md-1 text-grey">                                    Expanded Reach
                    </p>
                </div>
            </div>

            <div class="detail_process mt-5">
                <div class="process-detail-contant text-light process_inactive slide_content_1">
                    <div class="row px-3">
                        <div class="col-lg-6">
                            <div class="what_we_img">
                                <img class="WF-5-benefit-img" src="{{url('public/frontend/assets/img/e_health/sec4_responsive_healthcare.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="text_process_what_we py-md-4">
                                <p class="text-grey tag_what_we">
                                    Responsive Healthcare
                                </p>
                                <p class="text-grey text_crrspnding_blck mt-3">
                                    We've made it our mission to create a sustainable model for medical care that is both responsive and proactive. With our innovative solutions, you will get solutions that fit seamlessly into your existing operations. We strive to help them provide better patient care.
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="process-detail-contant text-light process_inactive slide_content_2">
                    <div class="row px-3">
                        <div class="col-lg-6">
                            <div class="what_we_img">
                                <img class="WF-5-benefit-img" src="{{url('public/frontend/assets/img/e_health/thumbs-up-old-man-who-sits-wheelchair.png')}}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="text_process_what_we py-md-4">
                                <p class="text-grey tag_what_we">
                                    Prevention before Treatment
                                </p>
                                <p class="text-grey text_crrspnding_blck mt-3">
                                    The main aim of our digital healthcare program is to provide people with access to quality healthcare. It also aims at preventing disease before it occurs and providing treatment for those who already have diseases or conditions.
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="process-detail-contant text-light process_inactive slide_content_3">
                    <div class="row px-3">
                        <div class="col-lg-6">
                            <div class="what_we_img">
                                <img class="WF-5-benefit-img" src="{{url('public/frontend/assets/img/e_health/sec4_remodelling.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="text_process_what_we py-md-4">
                                <p class="text-grey tag_what_we">
                                    Improved Patient-Doctor Relationship
                                </p>
                                <p class="text-grey text_crrspnding_blck mt-3">
                                    In the past, patients have been passive recipients of the care they receive from doctors. Using digital health technologies, patients can take control of their treatment. This improves the patient-doctor relationship by giving patients more control over their treatment.
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="process-detail-contant text-light process_inactive slide_content_4">
                    <div class="row px-3">
                        <div class="col-lg-6">
                            <div class="what_we_img">
                                <img class="WF-5-benefit-img" src="{{url('public/frontend/assets/img/e_health/sec4_expanding_reach.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="text_process_what_we py-md-4">
                                <p class="text-grey tag_what_we">
                                    Expanded Reach
                                </p>
                                <p class="text-grey text_crrspnding_blck mt-3">
                                    By using digital health technologies, doctors can connect with patients at home, even if they are not physically present. People living far from traditional medical centers or unable to travel for health reasons are now being treated by medical professionals more than ever before!
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- #####################################    six-section-Customer-love-E_health-Page  #############################-->
    <section class="home-testimonial-section py-5">
        <div class="container">
            <div class="cus_love-title">
                <h2 class="text-light pt-5">Why Our Customers Trust Us</h2>
            </div>
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner py-lg-5">
                    <div class="carousel-item active py-5">
                        <div class="cus_love_main_testimonial">
                            <div class="Cus_love_testimonial_slide">
                                <div class="Cus_love_testimonial_content">
                                    <p>The Digital Health program by Atlantis RCM has been a game-changer for our organization. We have been able to streamline our processes and save money while ensuring that our patients receive the best care possible. The team at Atlantis was extremely helpful in guiding us through this process and we are very grateful for their support.</p>
                                    <div class="Cus_love_testimonial_user">
                                        <img src="{{url('public/frontend/assets/img/e_health/Artboard 2.jpg')}}" alt="">
                                        <span class="text-white">Dr. Issac Harvey</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="Connect-Us py-5" id="connectUs">
        <div class="container">
            <div>
                <h2 class="Connect-head text-blue ">Discover a Better Way Forward</h2>
                <p class="Connect-para text-grey">Our mission is to eliminate repetitive administrative tasks in healthcare organizations and individual practices so that
                    they can exceed revenue and growth. </p>
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
