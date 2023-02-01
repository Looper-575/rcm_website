@extends('frontend.layout.master')
@section('content')
    <section class="header_home header_patient_exp">
        <div class="h-100" id="layer_1">
            <div class="container h-100">
                <div class="d-flex flex-column justify-content-center h-100">
                    <div class="header_content">
                        <h1 class="text-light">Atlantis RCM—Creates the Ultimate Patient Financial Experience</h1>
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


    <!-- #####################################    Second-section-patient-experience  #############################-->
    <section class="Scnd-sec-PE py-5">
        <div class="container">
            <div class="row d-flex justify-content-center ">
                <div class="col-md-4 my-2">
                    <div class="card Scnd-sec-PE-card">
                        <div class="PE-2-asset d-flex align-items-center justify-content-center">
                            <img src="{{url('public/frontend/assets/img/patient_experience/vector-smart-object-expereince1.png')}}"
                                 class="PE-2-img-active" alt="Image 1">
                            <img src="{{url('public/frontend/assets/img/patient_experience/icn_perfection@3x copy.png')}}"
                                 class="PE-2-img-inactive" alt="Image 2">
                        </div>

                        <div class="card-body">
                            <h3 class="Scnd-sec-PE-card-hea text-center text-light">Perfection</h3>
                            <p class="Scnd-sec-PE-card-para text-center text-light m-0">Provide accurate information
                                about coverage and patient responsibility</p>
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
                            <h3 class="Scnd-sec-PE-card-hea text-center text-light">Customization</h3>
                            <p class="Scnd-sec-PE-card-para text-center text-light m-0">Provide patient-centred
                                statements and payment methods</p>
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
                            <h3 class="Scnd-sec-PE-card-hea text-center text-light">Promptness</h3>
                            <p class="Scnd-sec-PE-card-para text-center text-light m-0">Collect or arrange payment
                                plans when scheduling or during service</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- #####################################    third-section-patient-experience  #############################-->

    <section class="thrd-sec-PE py-lg-5 py-3">
        <div class="container">
            <div class="row py-lg-5">
                <div class="col-12 col-md-6  thrd-sec-PE-data pt-lg-5">
                    <h2 class=" text-blue">Provide Patients with a Seamless
                        & Pain-Free Experience</h2>
                    <p class="text-grey py-lg-3">How can organisations provide a patient experience that drives
                        convenience,
                        loyalty, and revenue regardless of how reimbursements are paid?</p>
                    <p class="text-grey"> An organisation should make sure to cater to a patient's expectations and
                        needs at all times. As part of its patient-centric approach, Atlantis RCM offers
                        patients a customised, smooth, and consolidated experience. </p>
                </div>
                <div class="col-12 col-md-6 py-md-5 py-lg-0">

                    <img src="{{url('public/frontend/assets/img/patient_experience/group-5.png')}}" alt="image"
                         class=" thrd-sec-PE-img">
                </div>
            </div>
        </div>
    </section>



    {{--*********************************Patient-Experience-proactive *******************--}}

    <section class="patient_exp_proactive py-3">
        <div class="container">
            <div class="proactive_title">
                <h2 class="text-white py-md-5"> In the Long Run, Being Proactive and Empathetic Pays Off.</h2>
            </div>
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="pro_active_card py-4">
                        <ul class="nav nav-tabs pro_active" id="myTab" role="tablist">
                            <li class="nav-item pb-xl-4 pb-md-4 pb-3 position-relative" role="presentation">
                                <button class="pro_active_button nav-link active" id="home-tab" data-bs-toggle="tab"
                                        data-bs-target="#home"
                                        type="button" role="tab" aria-controls="home" aria-selected="true">Pre-Visit
                                </button>
                                <img class="pE_pro_arr_active"
                                     src="{{url('public/frontend/assets/img/patient_experience/polygon-1.png')}}">

                            </li>
                            <li class="nav-item position-relative" role="presentation">
                                <button class="nav-link pro_active_button" id="profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#profile"
                                        type="button" role="tab" aria-controls="profile" aria-selected="false">
                                    Post-Visit
                                </button>
                                <img class="pE_pro_arr_active"
                                     src="{{url('public/frontend/assets/img/patient_experience/polygon-1.png')}}">

                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                           <div class="proactive_description py-3">
                            <img src="{{url('public/frontend/assets/img/patient_experience/vector-smart-object.png')}}">
                            <p class="text-white pt-xl-4 pt-3">From appointment reminders and eligibility checks
                                to authorizations for resolutions, Atlantis experts
                                manage payment infrastructure and reconcile all patient payments throughout
                                the entire process</p>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="proactive_description py-3">
                            <img src="{{url('public/frontend/assets/img/patient_experience/vector-smart-object-exp-1.png')}}">
                            <p class="text-white pt-xl-4 pt-3">Through transparency, understanding, and control,
                                we strive to provide the best financial experience for your patients. In this way,
                                patient payment opportunities are maximised and payment yields are higher.
                            </p></div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- #####################################    five-section-connection-patient-experience  #############################-->
    <section class="sec5-conn-pat-exper py-lg-5 py-3">
        <div class="container">
            <h3 class=" sec5-conn-hea text-blue "> Maintain Stronger Connections with your patients using Atlantis
                RCM</h3>
            <p class="sec5-conn-para text-grey mt-lg-4">With Atlantis RCM, you and your patients will be experiencing a
                better user experience one which believes in open and
                transparent communication eventually helping building trust and improved connections.</p>
            <div class="row my-lg-5 pb-3">
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="sec-5-patExper-card mt-3">
                        <img src="{{url('public/frontend/assets/img/patient_experience/startup-business-team-meeting-modern-bright-office-interior-working-laptop.png')}}"
                             class="card-img-top">
                        <div class="sec-5-patExper-card-body p-1 p-lg-2 p-xl-3">
                            <h5 class="card-title  text-center text-light">Open Communication</h5>
                            <p class="card-text text-start text-light">Our team will work with you to create a plan for
                                improving collections and submitting more complete claims, and we'll monitor everything
                                to make sure the plan is working as intended.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="sec-5-patExper-card mt-3">
                        <img src="{{url('public/frontend/assets/img/patient_experience/happy-female-doctor-medical-staff-discussing-something-while-sitting-table-successful-team-health-care-medicine-concept.png')}}"
                             class="card-img-top">
                        <div class="sec-5-patExper-card-body p-1 p-lg-2 p-xl-3">
                            <h5 class="card-title  text-center text-light">Stronger Connections</h5>
                            <p class="card-text text-start text-light">With medical billing services, we can proudly
                                state that we have been able to increase our clients' revenue profit by
                                10-25 % by ensuring maximum claim follow-up.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="sec-5-patExper-card mt-3">
                        <img src="{{url('public/frontend/assets/img/patient_experience/man-holding-credit-card-payment-shopping-online-smart-phone.png')}}"
                             class="card-img-top">
                        <div class="sec-5-patExper-card-body p-1 p-lg-2 p-xl-3">
                            <h5 class="card-title  text-center text-light">Better Transperancy</h5>
                            <p class="card-text text-start text-light">An integrated patient experience management
                                system provides patients with information about their health and treatment options.
                                Providing them with information on their health insurance coverage, payment options,
                                etc.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--***************************Patient-Experience-customers-love*************************************-->

    <section class="home-testimonial-section py-5">
        <div class="container">
            <div class="cus_love-title">
                <h2 class="text-light pt-5">Why Ours Customers Loves Us</h2>
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
                <h2 class="Connect-head text-blue ">Discover a Better Way Forward</h2>
                @include('frontend.contactUs.contact_us_form')
            </div>
        </div>
    </section>

@endsection
<script>
    let current_process = 1;

    function next_process() {
        let unactive;
        if (current_process === 1) {
            unactive = 2;
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
        if (current_process === 2) {
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
