@extends('frontend.layout.master')
@section('content')

    <section class="header_home header_Medical_Biling">
        <div class="h-100" id="layer_1">
            <div class="container h-100">
                <div class="d-flex flex-column justify-content-center h-100">
                    <div class="header_content">
                        <h1 class="text-light Sec1-MB-hea1">Credentialing Builds Trust</h1>
                        <h2 class="text-light Sec1-MB-hea2 my-3 fw-bold">
                            Leading to More Business</h2>
                        <div class="hdr_btn d-flex">
                            <a href="#connectUs">
                                <button class="btn strtBtn1 mt-2">
                                    Get Started
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{--    <!-- #####################################    Second-section-Medical-Biling-Page  #############################-->--}}
        <section class="Scnd-sec-PE py-5">
            <div class="container">
                <div class="row d-flex justify-content-center ">
                    <div class="col-md-4">
                        <div class="card Scnd-sec-PE-card my-2 my-md-0">
                            <div class="PE-2-asset d-flex align-items-center justify-content-center">
                                <img src="{{url('public/frontend/assets/img/patient_experience/vector-smart-object-expereince1.png')}}" class="PE-2-img-active" alt="Image 1">
                                <img src="{{url('public/frontend/assets/img/patient_experience/icn_perfection@3x copy.png')}}" class="PE-2-img-inactive" alt="Image 2" >
                            </div>

                            <div class="card-body">
                                <h3 class="Scnd-sec-PE-card-hea text-center text-light">Adequate Planning</h3>
                                <p class="Scnd-sec-PE-card-para text-center text-light m-0">We plan ahead and gather all the required
                                    information to build a comprehensive
                                    case for successful credentialing.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card  Scnd-sec-PE-card my-2 my-md-0">
                            <div class="PE-2-asset  d-flex align-items-center justify-content-center">
                                <img src="{{url('public/frontend/assets/img/patient_experience/icon_customization_inactive.png')}}" class="PE-2-img-active" alt="Image 1">
                                <img src="{{url('public/frontend/assets/img/patient_experience/vector-smart-object-exp.png')}}" class="PE-2-img-inactive" alt="Image 2" >
                            </div>

                            <div class="card-body">
                                <h3 class="Scnd-sec-PE-card-hea text-center text-light">Ensuring Transparency</h3>
                                <p class="Scnd-sec-PE-card-para text-center text-light m-0">You can view each step of the process,
                                    including enrollment, follow-up,
                                    credentialing, and approval.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card  Scnd-sec-PE-card my-2 my-md-0">
                            <div class="PE-2-asset  d-flex align-items-center justify-content-center">
                                <img src="{{url('public/frontend/assets/img/patient_experience/vector-smart-object-exp-1.png')}}" class="PE-2-img-active  " alt="Image 3">
                                <img src="{{url('public/frontend/assets/img/patient_experience/icn_promptness@2x copy.png')}}" class="PE-2-img-inactive" alt="Image 2" >
                            </div>

                            <div class="card-body">
                                <h3 class="Scnd-sec-PE-card-hea text-center text-light">Robust Follow-up</h3>
                                <p class="Scnd-sec-PE-card-para text-center text-light m-0">The credentialing process usually takes
                                    90-150 days, therefore,a robust follow-up
                                    method is deployed to ensure success.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


{{--        <!-- #####################################    third-section-Medical-Billing-Page  #############################-->--}}

        <section class="thrd-sec-PE py-5">
            <div class="container">
                <div class="row py-lg-4">
                    <div class="col-12 col-md-6 col-sm-12  thrd-sec-PE-data">
                        <h3 class="thrd-sec-PE-hea text-blue">Build Trust While Saving Time & Money
                            Outsource Credentialing</h3>
                        <p class="thrd-sec-PE-para text-grey pt-3">In a recent survey done with the medical professionals, 90% of participants
                            reflected that they shall undergo credentialing so patients could trust them
                            as insurance companies will want to see the proof of medical credentialing
                            before allowing anyone to engage with patients.</p>
                        <p class="thrd-sec-PE-para text-grey">
                            Atlantis RCM is committed to providing accurate and exceptional credentialing
                            services to the healthcare industry, improving patient experience, and reducing
                            revenue loss. </p>
                    </div>
                    <div class="col-12 col-md-6 col-sm-12 pt-md-5">
                        <img src="{{url('public/frontend/assets/img/medical_billing/img_section_2_build_trust.jpg')}}" alt=image class=" thrd-sec-PE-img">
                    </div>
                </div>
            </div>
        </section>


{{--        <!-- #####################################    Four-section-Medical-Billing-Page  #############################-->--}}
        <div class="four-sec-MB-standrd py-5">
            <div class="container">
                <div class="standrd_title py-2">
                    <h2 class="text-light "> Maintaining Higher Safety Standards for a Forward-Looking Medical Practice.</h2>
                    <p class="text-light pb-4 ">A credentialing process is a laborious and highly repetitive activity that requires constant attention. Atlantis RCM can help you keep
                        your credentialing documents up to date, recredential and customize your contract on your terms.</p>
                    <div class="row mt-5">
                        <div class="col-12 col-md-6">
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
                                    <li class="nav-item  pb-xl-4 pb-md-4 pb-3 position-relative" role="presentation">
                                        <button class="nav-link pro_active_button" id="Recredentialing-tab" data-bs-toggle="tab"
                                                data-bs-target="#Recredentialing"
                                                type="button" role="tab" aria-controls="Recredentialing" aria-selected="false">Recredentialing
                                        </button>
                                        <img class="pE_pro_arr_active"
                                             src="{{url('public/frontend/assets/img/patient_experience/polygon-1.png')}}">

                                    </li>
                                    <li class="nav-item  pb-xl-4 pb-md-4 pb-3 position-relative" role="presentation">
                                        <button class="nav-link pro_active_button" id="Appeals-tab" data-bs-toggle="tab"
                                                data-bs-target="#Appeals"
                                                type="button" role="tab" aria-controls="Appeals" aria-selected="false">Credentialing Appeals
                                        </button>
                                        <img class="pE_pro_arr_active"
                                             src="{{url('public/frontend/assets/img/patient_experience/polygon-1.png')}}">

                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 mt-4">
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
                                <div class="tab-pane fade" id="Recredentialing" role="tabpanel" aria-labelledby="Recredentialing-tab">
                                    <div class="">
                                        <img class="img-fluid" src="{{url('public/frontend/assets/img/medical_billing/img_recredientialing.jpg')}}">
                                        <p class="text-white pt-xl-4">Recredentialing is typically required every three years,
                                            so we will notify and manage the process when the time comes to renew a provider's credentials.
                                            Our team will review and verify your professional credentials in conjunction
                                            with relevant criteria and keep them on file.


                                        </p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="Appeals" role="tabpanel" aria-labelledby="Appeals-tab">
                                    <div class="">
                                        <img class="img-fluid" src="{{url('public/frontend/assets/img/medical_billing/slider_credientialing_apperals.jpg')}}">
                                        <p class="text-white pt-xl-4"> As soon as we have all the required documentation,
                                            we prepare and submit the required Submit credentialing appeals for providers or
                                            organizations (hospitals, clinics) when insurances are almost in-network
                                            with the provider or organization.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

{{--        <!-- #####################################    five-section-Customer-love-Medical-Billing-Page  #############################-->--}}
        <section class="med_bil_sec5  py-5">
            <div class="container">
                <div class="what_home_head">
                    <h2 class="text-blue">Are credentialing issues stressing out your legal department?</h2>
                    <p class="text-grey">We have a team of experts who have years of experience navigating Medicare and Medicaid enrollment, commercial
                        insurance enrollment, and other credentialing processes for healthcare providers.
                    </p>
                </div>
                <div class="d-flex flex-wrap flex-row svg_process my-5">
                    <div class="mx-md-3 what_service text-center service_hd slide_1" onclick="active_service(1)">
                        <div class="corrsponding_icons">
                            <img src="{{url('public/frontend/assets/img/medical_billing/icn_credientialing_management.png')}}" alt="">
                        </div>
                        <p class="headng mt-md-1 text-grey"> Credentialing
                            management</p>
                    </div>
                    <div class="mx-2 mx-md-3 what_service text-center service_hd slide_2" onclick="active_service(2)">
                        <div class="corrsponding_icons pt-3">
                            <img src="{{url('public/frontend/assets/img/medical_billing/icn_uptodate_credientials.png')}}" alt="">
                        </div>
                        <p class="headng mt-md-1 text-grey">Update To date
                            Credentials</p>
                    </div>
                    <div class="mx-md-3 what_service text-center service_hd slide_3" onclick="active_service(3)">
                        <div class="corrsponding_icons">
                            <img src="{{url('public/frontend/assets/img/medical_billing/icn_verify_credientials.png')}}" alt="">
                        </div>
                        <p class="headng mt-md-1 text-grey">Verifying
                            Credentials
                        </p>
                    </div>
                    <div class="mx-2 mx-md-3 what_service text-center service_hd slide_4" onclick="active_service(4)">
                        <div class="corrsponding_icons">
                            <img src="{{url('public/frontend/assets/img/medical_billing/icn_completing_applications.png')}}" alt="">
                        </div>
                        <p class="headng mt-md-1 text-grey">
                            Completing Applications
                        </p>
                    </div>
                    <div class="mx-2 mx-md-3 what_service text-center service_hd slide_5 mt-md-3 mt-lg-0" onclick="active_service(5)">
                        <div class="corrsponding_icons">
                            <img src="{{url('public/frontend/assets/img/medical_billing/icn_info_gathering_and_handling.png')}}" alt="">
                        </div>
                        <p class="headng mt-md-1 text-grey">Info Gathering
                            & Handling
                        </p>
                    </div>
                </div>
                <div class="detail_process">
                    <div class="process-detail-contant process_inactive text-light slide_content_1">
                        <div class="row px-3">
                            <div class="col-lg-6">
                                <div class="what_we_img">
                                    <img src="{{url('public/frontend/assets/img/medical_billing/slider_2/slider_credientialing_managament.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="text_process_what_we py-5">
                                    <p class="text-grey tag_what_we">
                                        Credentialing management
                                    </p>
                                    <p class="text-grey text_crrspnding_blck mt-3">
                                        We understand how important it is to distinguish insurers and the companies they are enrolled with. For health plans and application collections, we manage all payer communication, complete verification, and network enrollment management.
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="process-detail-contant process_inactive text-light slide_content_2">
                        <div class="row px-3">
                            <div class="col-lg-6">
                                <div class="what_we_img">
                                    <img src="{{url('public/frontend/assets/img/medical_billing/slider_2/slider_uptodate_credientials.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="text_process_what_we py-5">
                                    <p class="text-grey tag_what_we">
                                        Update to Date Credentials
                                    </p>
                                    <p class="text-grey text_crrspnding_blck mt-3">
                                        Our experts are familiar with and closely follow all state credentialing
                                        requirements so that you don't have to worry about possible liability
                                        issues with your practice. Besides updating your credentials year-round,
                                        we provide automated alerts and renewal notifications.
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="process-detail-contant process_inactive text-light slide_content_3">
                        <div class="row px-3">
                            <div class="col-lg-6">
                                <div class="what_we_img">
                                    <img src="{{url('public/frontend/assets/img/medical_billing/slider_2/slider_verify_credientials.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="text_process_what_we py-5">
                                    <p class="text-grey tag_what_we">
                                        Verifying Credentials
                                    </p>
                                    <p class="text-grey text_crrspnding_blck mt-3">
                                        Atlantis, as your RCM partner, is committed to quality and accuracy when assembling and submitting credentials. Credentials are verified with educational institutions, previous employers, and licensing authorities to ensure that they are accurate.
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="process-detail-contant process_inactive text-light slide_content_4">
                        <div class="row px-3">
                            <div class="col-lg-6">
                                <div class="what_we_img">
                                    <img src="{{url('public/frontend/assets/img/medical_billing/slider_2/slider_completing_applications.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="text_process_what_we py-5">
                                    <p class="text-grey tag_what_we">
                                        Completing Applications
                                    </p>
                                    <p class="text-grey text_crrspnding_blck mt-3">
                                        CAQH approval can be delayed significantly if inaccurate information is provided when completing applications. Every year, our team synchronizes with insurance companies and relevant attestation authorities to keep all the information updated.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="process-detail-contant process_inactive text-light slide_content_5">
                        <div class="row px-3">
                            <div class="col-lg-6">
                                <div class="what_we_img">
                                    <img src="{{url('public/frontend/assets/img/medical_billing/slider_2/slider_information_gatheiring.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="text_process_what_we py-5">
                                    <p class="text-grey tag_what_we">
                                        Information Gathering and Handling
                                    </p>
                                    <p class="text-grey text_crrspnding_blck mt-3">
                                        A full range of healthcare administration consulting services is provided by us, including electronic data entry, ongoing monitoring and background checks, and application mailing service. Moreover, during this process, we handle all the calls, follow-ups, e-mails, faxes, etc.
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


{{--        <!-- #####################################    six-section-Customer-love-Medical-Billing-Page  #############################-->--}}


        <section class="home-testimonial-section py-5">
            <div class="container">
                <div class="cus_love-title">
                    <h2 class="text-light pt-5">Why Our Customers Loves Us</h2>
                    <p class="text-light pt-3 fs-5">During the course of the handling of my case by Atlantis RCM, I was extremely satisfied with their approach. Throughout the entire process, they were professional and efficient, and most importantly, they helped me go through it in a painless and quick manner.</p>
                </div>
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner py-5">
                        <div class="carousel-item active py-5">
                            <div class="cus_love_main_testimonial">
                                <div class="Cus_love_testimonial_slide">
                                    <div class="Cus_love_testimonial_content">
                                        <a href="#"><p>During the course of the handling of my case by Atlantis RCM, I was extremely
                                                satisfied with their approach. Throughout the entire process, they were professional,
                                                efficient, and most importantly, they helped me go through it in a painless and quick
                                                manner.</p></a>
                                        <div class="Cus_love_testimonial_user">
                                            <img src="{{url('public/frontend/assets/img/patient_experience/img-0-7-v-1.png')}}" alt="">
                                            <span class="text-white">Dr. Shaun Daniel</span>
                                            <span class="text-white">Institute of Cardiology</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item py-5">
                            <div class="cus_love_main_testimonial">
                                <div class="Cus_love_testimonial_slide">
                                    <div class="Cus_love_testimonial_content">
                                        <a href="#"><p>During the course of the handling of my case by Atlantis RCM, I was extremely
                                                satisfied with their approach. Throughout the entire process, they were professional,
                                                efficient, and most importantly, they helped me go through it in a painless and quick
                                                manner.</p></a>
                                        <div class="Cus_love_testimonial_user">
                                            <img src="{{url('public/frontend/assets/img/patient_experience/img-0-7-v-1.png')}}" alt="">
                                            <span class="text-white">Dr. Shaun Daniel</span>
                                            <span class="text-white">Institute of Cardiology</span>
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
                    <h2 class="Connect-head text-blue ">We ensure uninterrupted patient care with our prompt response.
                        Contact Us Today!</h2>
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
            if (current_process === 1) {
                unactive = 5;
            } else {
                unactive = current_process - 1;
            }
            $('.svg_process').find('.slide_' + unactive).removeClass('process_active');
            $('.detail_process').find('.slide_content_' + unactive).removeClass('process_active');
            $('.detail_process').find('.slide_content_' + unactive).addClass('process_inactive');

            $('.svg_process').find('.slide_' + current_process).toggleClass('process_active');
            $('.detail_process').find('.slide_content_' + current_process).addClass('process_active');
            $('.detail_process').find('.slide_content_' + current_process).removeClass('process_inactive');
            // time interval sequences
            if (current_process === 5) {
                current_process = 1;
            } else {
                current_process++;
            }
        }

        $(document).ready(function () {
            next_process();
        });
        setInterval(function () {
            next_process();
        }, 10000)

        function active_service(e) {
            $('.service_hd').removeClass('process_active');
            $('.process-detail-contant').removeClass('process_active');
            $('.process-detail-contant').addClass('process_inactive');
            current_process = e;
            next_process()
        }
    </script>

@endsection
