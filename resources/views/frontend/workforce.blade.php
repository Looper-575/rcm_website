@extends('frontend.layout.master')
@section('content')

    <section class="header_home header_Work-Force">
        <div class="h-100" id="layer_1">
            <div class="container h-100">
                <div class="d-flex flex-column justify-content-center h-100">
                    <div class="header_content">
                        <h1 class="text-light Sec1-MB-hea1">Specialized Support</h1>
                        <h2 class="text-light Sec1-MB-hea2 my-3 fw-bold">
                            Dedicated For Growth</h2>
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

    <!-- #####################################    Second-section-Medical-Biling-Page  #############################-->
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
                            <h3 class="Scnd-sec-PE-card-hea text-center text-light">Client Management</h3>
                            <p class="Scnd-sec-PE-card-para text-center text-light m-0">No learning curve, no starting from
                                scratch. Just import your clients' data.</p>
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
                            <h3 class="Scnd-sec-PE-card-hea text-center text-light">Organised Practice</h3>
                            <p class="Scnd-sec-PE-card-para text-center text-light m-0">You'll be able to better serve your clients
                                according to their needs.</p>
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
                            <h3 class="Scnd-sec-PE-card-hea text-center text-light">Business Growth</h3>
                            <p class="Scnd-sec-PE-card-para text-center text-light m-0">Scaling your workforce efficiently
                                supports your business growth.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- #####################################    third-section-Medical-Billing-Page  #############################-->

    <section class="thrd-sec-PE py-5">
        <div class="container">
            <div class="row py-md-4">
                <div class="col-12 col-md-6 col-sm-12  thrd-sec-PE-data">
                    <h3 class="thrd-sec-PE-hea text-blue fs-4">Let Us Extend Your In-House Capabilities</h3>
                    <p class="thrd-sec-PE-para text-grey pt-3">As patient finances become more critical, more healthcare organisations are
                        outsourcing revenue cycle management operations, however keeping a closer
                        watch is still difficult due to limited resource deployment by the outsourcing
                        agency.</p>
                    <p class="thrd-sec-PE-para text-grey">
                        At Atlantis RCM, Medical billing and credentialing experts are at the forefront.
                        Our focus is not limited to revenue reimbursement, rather we  make sure that
                        outsourcing benefits the practice and organisation as a whole.

                    </p>
                    <p class="thrd-sec-PE-para text-grey">
                        Our goal is to ensure your in-house staff is able to take advantage of
                        our extended workforce. </p>
                </div>
                <div class="col-12 col-md-6 col-sm-12">
                    <img src="{{url('public/frontend/assets/img/medical_billing/young-female-doctor-posing-corridor-hospital.png')}}" alt=image class=" thrd-sec-PE-img">
                </div>
            </div>
        </div>
    </section>

    <!-- #####################################    Four-section-Medical-Billing-Page  #############################-->
    <div class="four-sec-MB-standrd py-5">
        <div class="container">
            <div class="standrd_title pt-lg-5">
                <h2 class="text-light "> Atlantis RCM - Designed to Streamline Operations</h2>
                <p class="text-light">A credentialing process is a laborious and highly repetitive activity that requires constant attention. Atlantis RCM can help you keep
                    your credentialing documents up to date, recredential and customize your contract on your terms.</p>
                <div class="row mt-md-2 mt-lg-3 py-xl-5">
                    <div class="col-md-6">
                        <div class="pro_active_card py-4">
                            <ul class="nav nav-tabs pro_active" id="myTab" role="tablist">
                                <li class="nav-item pb-xl-4 pb-md-4 pb-3 position-relative" role="presentation">
                                    <button class="pro_active_button nav-link active" id="home-tab" data-bs-toggle="tab"
                                            data-bs-target="#home"
                                            type="button" role="tab" aria-controls="home" aria-selected="true">Provider Enrollment Services
                                    </button>
                                    <img class="pE_pro_arr_active"
                                         src="{{url('public/frontend/assets/img/patient_experience/polygon-1.png')}}">

                                </li>
                                <li class="nav-item  pb-xl-4 pb-md-4 pb-3 position-relative" role="presentation">
                                    <button class="nav-link pro_active_button" id="Primary-tab" data-bs-toggle="tab"
                                            data-bs-target="#Primary"
                                            type="button" role="tab" aria-controls="Primary" aria-selected="false">Primary Source Verification
                                    </button>
                                    <img class="pE_pro_arr_active"
                                         src="{{url('public/frontend/assets/img/patient_experience/polygon-1.png')}}">

                                </li>
                                <li class="nav-item  pb-xl-4 pb-md-4 pb-3 position-relative" role="presentation">
                                    <button class="nav-link pro_active_button" id="CAQH-tab" data-bs-toggle="tab"
                                            data-bs-target="#CAQH"
                                            type="button" role="tab" aria-controls="CAQH" aria-selected="false">CAQH Management
                                    </button>
                                    <img class="pE_pro_arr_active"
                                         src="{{url('public/frontend/assets/img/patient_experience/polygon-1.png')}}">

                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mt-4 mt-md-0">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="">
                                    <img class="img-fluid" src="{{url('public/frontend/assets/img/medical_billing/slider_enrollment_service.jpg')}}">
                                    <p class="text-white pt-md-4">Recredentialing is typically required every three years,
                                        so we will notify and manage the process when the time comes
                                        to renew a provider's credentials. Our team will review and verify
                                        your professional credentials in conjunction with relevant criteria
                                        and keep them on file.
                                    </p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Primary" role="tabpanel" aria-labelledby="Primary-tab">
                                <div class="">
                                    <img class="img-fluid" src="{{url('public/frontend/assets/img/medical_billing/slider_source_verification.jpg')}}">
                                    <p class="text-white pt-xl-4">At Atlantis, we believe that you deserve a seamless
                                        credentialing experience. We guide your practice administrators and providers in gathering the required
                                        demographics and background information. Our process is streamlined, so we can help you meet your timelines
                                        and provide a seamless experience for all involved.
                                    </p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="CAQH" role="tabpanel" aria-labelledby="CAQH-tab">
                                <div class="">
                                    <img class="img-fluid" src="{{url('public/frontend/assets/img/medical_billing/slider_caqh_management.jpg')}}">
                                    <p class="text-white pt-xl-4">We know that it can be a pain in the neck to get credentialed with all of your payers,
                                        and we want to make it easier for you. However, a minor mistake could possibly delay the credentialing process.
                                        We submit the CAQH application for providers who must use this service to credential with individual payers.
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
                <h2 class="text-blue">Benefits</h2>
                <p class="text-grey">We have a team of experts who have years of experience navigating Medicare and Medicaid enrollment, commercial
                    insurance enrollment, and other credentialing processes for healthcare providers.
                </p>
            </div>
            <div class="d-flex flex-wrap flex-row svg_process my-2 my-lg-5">
                <div class="mx-md-3 what_service text-center service_hd slide_1" onclick="active_service(1)">
                    <div class="corrsponding_icons">
                        <img src="{{url('public/frontend/assets/img/medical_billing/icn_credientialing_management.png')}}" alt="">
                    </div>
                    <p class="headng mt-md-1 text-grey"> Credentialing
                    </p>
                </div>
                <div class="mx-2 mx-md-3 what_service text-center service_hd slide_2" onclick="active_service(2)">
                    <div class="corrsponding_icons pt-3">
                        <img src="{{url('public/frontend/assets/img/medical_billing/icn_uptodate_credientials.png')}}" alt="">
                    </div>
                    <p class="headng mt-md-1 text-grey">Authorization</p>
                </div>
                <div class="mx-md-3 what_service text-center service_hd slide_3" onclick="active_service(3)">
                    <div class="corrsponding_icons">
                        <img src="{{url('public/frontend/assets/img/medical_billing/icn_verify_credientials.png')}}" alt="">
                    </div>
                    <p class="headng mt-md-1 text-grey">Collection</p>
                </div>
            </div>

                <div class="detail_process mt-5">
                    <div class="process-detail-contant text-light process_inactive slide_content_1">
                        <div class="row px-3">
                            <div class="col-lg-6">
                                <div class="what_we_img">
                                    <img class="WF-5-benefit-img" src="{{url('public/frontend/assets/img/workforce/section04/slider Credientialing.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="text_process_what_we py-md-4">
                                    <p class="text-grey tag_what_we">
                                        Credentialing
                                    </p>
                                    <p class="text-grey text_crrspnding_blck mt-3">
                                        We ensure that healthcare providers have their credentials in a timely manner so that they do not have revenue leakage problems.
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="process-detail-contant text-light process_inactive slide_content_2">
                        <div class="row px-3">
                            <div class="col-lg-6">
                                <div class="what_we_img">
                                    <img class="WF-5-benefit-img" src="{{url('public/frontend/assets/img/workforce/authentic.png')}}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="text_process_what_we py-md-4">
                                    <p class="text-grey tag_what_we">
                                        Authorization
                                    </p>
                                    <p class="text-grey text_crrspnding_blck mt-3">
                                        No matter whether it is a payer or a provider, our experts handle all kinds of authorizations and verifications efficiently.
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="process-detail-contant text-light process_inactive slide_content_3">
                        <div class="row px-3">
                            <div class="col-lg-6">
                                <div class="what_we_img">
                                    <img class="WF-5-benefit-img" src="{{url('public/frontend/assets/img/workforce/section04/slider_collection.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="text_process_what_we py-md-4">
                                    <p class="text-grey tag_what_we">
                                        Collection
                                    </p>
                                    <p class="text-grey text_crrspnding_blck mt-3">
                                        Communicating effectively between payers and providers to prevent unpaid and delayed payments that would disrupt administrative processes
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
                <h2 class="text-light pt-5">Why Ours Customers Loves Us</h2>
                <p class="text-light pt-3 fs-5">During the course of the handling of my case by Atlantis RCM, I was extremely satisfied with their approach. Throughout the entire process, they were professional and efficient, and most importantly, they helped me go through it in a painless and quick manner.</p>
            </div>
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner py-lg-5">
                    <div class="carousel-item active py-5">
                        <div class="cus_love_main_testimonial">
                            <div class="Cus_love_testimonial_slide">
                                <div class="Cus_love_testimonial_content">
                                    <a href="#"><p>“I was very pleased with the services I received from Atlantis RCM. They were always quick to respond and made sure that my needs were met. My questions were answered in a timely manner, and they answered all of my concerns. The staff was very friendly, knowledgeable, and professional. I would highly recommend them to anyone</p></a>
                                    <div class="Cus_love_testimonial_user">
                                        <img src="{{url('public/frontend/assets/img/patient_experience/img-0-7-v-1.png')}}" alt="">
                                        <span class="text-white">Theresa M., Patient</span>
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

    <section class="Connect-Us py-5" id="connectUs">
        <div class="container">
            <div>
                <h2 class="Connect-head text-blue ">Connect with Us</h2>
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
                unactive = 3;
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
            if (current_process === 3) {
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
