@extends('frontend.layout.master')
@section('content')
    <section class="header_home header_patient_exp">
        <div class="h-100" id="layer_1">
            <div class="container h-100">
                <div class="d-flex flex-column justify-content-center h-100">
                    <div class="header_content">
                        <h1 class="text-light">Helping<br> Healthcare Providers</h1>
                        <h3 class="text-light my-3">Improvement Patient Experience</h3>
                        <p class="text-light my-2">At Atlantis RCM, we organize your revenue cycle<br>
                            so you, and your patients can enjoy a better experience.
                        </p>
                        <div class="hdr_btn d-flex">
                            <button class="btn strtBtn">
                            </button>
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
                <div class="col-sm-4">
                    <div class="card Scnd-sec-PE-card">
                        <div class="PE-2-asset d-flex align-items-center justify-content-center">
                            <img src="{{url('public/frontend/assets/img/patient_experience/vector-smart-object-expereince1.png')}}" class="PE-2-img-active" alt="Image 1">
                            <img src="{{url('public/frontend/assets/img/patient_experience/icn_perfection@3x copy.png')}}" class="PE-2-img-inactive" alt="Image 2" >
                        </div>

                        <div class="card-body">
                            <h3 class="Scnd-sec-PE-card-hea text-center text-light">Perfection</h3>
                            <p class="Scnd-sec-PE-card-para text-center text-light m-0">Provide accurate information
                                about coverage and patient responsibility</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card  Scnd-sec-PE-card">
                        <div class="PE-2-asset  d-flex align-items-center justify-content-center">
                            <img src="{{url('public/frontend/assets/img/patient_experience/icon_customization_inactive.png')}}" class="PE-2-img-active" alt="Image 1">
                            <img src="{{url('public/frontend/assets/img/patient_experience/vector-smart-object-exp.png')}}" class="PE-2-img-inactive" alt="Image 2" >
                        </div>

                        <div class="card-body">
                            <h3 class="Scnd-sec-PE-card-hea text-center text-light">Customization</h3>
                            <p class="Scnd-sec-PE-card-para text-center text-light m-0">Provide patient-centred
                                statements and payment methods</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card  Scnd-sec-PE-card">
                        <div class="PE-2-asset  d-flex align-items-center justify-content-center">
                            <img src="{{url('public/frontend/assets/img/patient_experience/vector-smart-object-exp-1.png')}}" class="PE-2-img-active  " alt="Image 3">
                            <img src="{{url('public/frontend/assets/img/patient_experience/icn_promptness@2x copy.png')}}" class="PE-2-img-inactive" alt="Image 2" >
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

    <section class="thrd-sec-PE ">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6  thrd-sec-PE-data">
                    <h2 class=" text-blue">Provide Patients with a Seamless
                        & Pain-Free Experience</h2>
                    <p class="text-grey py-3">How can organisations provide a patient experience that drives convenience,
                        loyalty, and revenue regardless of how reimbursements are paid?</p>
                    <p class="text-grey"> An organisation should make sure to cater to a patient's expectations and
                        needs at all times. As part of its patient-centric approach, Atlantis RCM offers
                        patients a customised, smooth, and consolidated experience. </p>
                </div>
                <div class="col-12 col-md-6">

                    <img src="{{url('public/frontend/assets/img/patient_experience/group-5.png')}}" alt="image" class=" thrd-sec-PE-img">
                </div>
            </div>
        </div>
    </section>



    {{--*********************************Patient-Experience-proactive *******************--}}
    <section class="patient_exp_proactive">
        <div class="container">
            <div class="proactive_title">
                <h2 class="text-white py-md-5"> In the Long Run, Being Proactive and Empathetic Pays Off.</h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="proactive_visit">
                        <ul class="nav nav-tabs pt-md-4">
                            <li class="nav-item">
                                <p class="nav-link active">Pre-Visit</p>
                                <img class="pE_pro_arr_active" src="{{url('public/frontend/assets/img/patient_experience/polygon-1.png')}}">
                            </li>
                            <li class="nav-item">
                                <p class="nav-link">Post-Visit</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="proactive_description">
                        <img src="{{url('public/frontend/assets/img/patient_experience/vector-smart-object.png')}}">
                        <p class="text-white pt-md-4">From appointment reminders and eligibility checks to authorizations for resolutions, Atlantis experts
                            manage payment infrastructure and reconcile all patient payments throughout the entire process</p></div>
                </div>
            </div>
        </div>
    </section>


    <!-- #####################################    five-section-connection-patient-experience  #############################-->
    <section class="sec5-conn-pat-exper py-5">
        <div class="container">
            <h3 class=" sec5-conn-hea text-blue "> Maintain Stronger Connections with your patients using Atlantis RCM</h3>
            <p class="sec5-conn-para text-grey mt-4">With Atlantis RCM, you and your patients will be experiencing a better user experience one which believes in open and
                transparent communication eventually helping building trust and improved connections.</p>
            <div class="row my-5 pb-3" >
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="sec-5-patExper-card mt-3">
                        <img src="{{url('public/frontend/assets/img/patient_experience/startup-business-team-meeting-modern-bright-office-interior-working-laptop.png')}}" class="card-img-top">
                        <div class="sec-5-patExper-card-body p-1 p-lg-2 p-xl-3">
                            <h5 class="card-title  text-center text-light">Open Communication</h5>
                            <p class="card-text text-start text-light">Our team will work with you to create a plan for improving collections and submitting more complete claims, and we'll monitor everything to make sure the plan is working as intended.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="sec-5-patExper-card mt-3">
                        <img src="{{url('public/frontend/assets/img/patient_experience/happy-female-doctor-medical-staff-discussing-something-while-sitting-table-successful-team-health-care-medicine-concept.png')}}" class="card-img-top">
                        <div class="sec-5-patExper-card-body p-1 p-lg-2 p-xl-3">
                            <h5 class="card-title  text-center text-light">Stronger Connections</h5>
                            <p class="card-text text-start text-light">With medical billing services, we can proudly state that we have been able to increase our clients' revenue profit by
                                10-25 % by ensuring maximum claim follow-up.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="sec-5-patExper-card mt-3">
                        <img src="{{url('public/frontend/assets/img/patient_experience/man-holding-credit-card-payment-shopping-online-smart-phone.png')}}" class="card-img-top">
                        <div class="sec-5-patExper-card-body p-1 p-lg-2 p-xl-3">
                            <h5 class="card-title  text-center text-light">Better Transperancy</h5>
                            <p class="card-text text-start text-light">An integrated patient experience management system provides patients with information about their health and treatment options. Providing them with information on their health insurance coverage, payment options, etc.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--***************************Patient-Experience-customers-love*************************************-->

    <section class="patient_exp_cus_love">
        <div class="container">
            <div class="cus_love-title">
                <h2 class="text-light pt-5">Why Ours Customers Loves Us</h2>
                <p class="text-light pt-3 fs-5">With more than a decade of industry-leading experience, Atlantis has been
                    continually recognized for exceptional performance, customer service, employee training, and stringent
                    cybersecurity standards. However, the greatest recognition we receive is the satisfaction of our
                    customers.</p>
            </div>
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="cus_love_main_testimonial">
                            <div class="Cus_love_testimonial_slide">
                                <div class="Cus_love_testimonial_content">
                                    <a href="#"><p>In my opinion, Atlantis RCM does a great job in managing my billing tasks
                                            on a daily basis. I believe that it has greatly assisted us to improve the cash
                                            flow as a result of a significant reduction in the amount of errors that happen.
                                            Hence, I strongly recommend them if you are looking to outsource your medical
                                            billing service.</p></a>
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

    @include('frontend.umar.patient_sec4')




@endsection
