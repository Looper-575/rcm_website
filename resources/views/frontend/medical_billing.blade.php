@extends('frontend.layout.master')
@section('content')


    <section class="header_home header_medical_credentialing">
        <div class="h-100" id="layer_1">
            <div class="container h-100">
                <div class="d-flex flex-column justify-content-center h-100">
                    <div class="header_content">
                        <h1 class="text-light">Providing Reliable Medical Billing Service
                            with Transparency
                        </h1>
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

    <section class="Scnd-sec-PE py-5">
        <div class="container">
            <div class="row d-flex justify-content-center py-lg-5">
                <div class="col-md-4 my-2 my-md-0">
                    <div class="card Scnd-sec-PE-card">
                        <div class="PE-2-asset d-flex align-items-center justify-content-center">
                            <img src="{{url('public/frontend/assets/img/patient_experience/vector-smart-object-expereince1.png')}}"
                                 class="PE-2-img-active" alt="Image 1">
                            <img src="{{url('public/frontend/assets/img/patient_experience/icn_perfection@3x copy.png')}}"
                                 class="PE-2-img-inactive" alt="Image 2">
                        </div>

                        <div class="card-body">
                            <h3 class="Scnd-sec-PE-card-hea text-center text-light">Analyze</h3>
                            <p class="Scnd-sec-PE-card-para text-center text-light m-0">Our analysis is based on long-term goals, not just day-to-day payments.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-2 my-md-0">
                    <div class="card  Scnd-sec-PE-card">
                        <div class="PE-2-asset  d-flex align-items-center justify-content-center">
                            <img src="{{url('public/frontend/assets/img/patient_experience/icon_customization_inactive.png')}}"
                                 class="PE-2-img-active" alt="Image 1">
                            <img src="{{url('public/frontend/assets/img/patient_experience/vector-smart-object-exp.png')}}"
                                 class="PE-2-img-inactive" alt="Image 2">
                        </div>

                        <div class="card-body">
                            <h3 class="Scnd-sec-PE-card-hea text-center text-light">Streamline</h3>
                            <p class="Scnd-sec-PE-card-para text-center text-light m-0">As your practice grows, we streamline the collection process.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-2 my-md-0">
                    <div class="card  Scnd-sec-PE-card">
                        <div class="PE-2-asset  d-flex align-items-center justify-content-center">
                            <img src="{{url('public/frontend/assets/img/patient_experience/vector-smart-object-exp-1.png')}}"
                                 class="PE-2-img-active  " alt="Image 3">
                            <img src="{{url('public/frontend/assets/img/patient_experience/icn_promptness@2x copy.png')}}"
                                 class="PE-2-img-inactive" alt="Image 2">
                        </div>

                        <div class="card-body">
                            <h3 class="Scnd-sec-PE-card-hea text-center text-light">Report</h3>
                            <p class="Scnd-sec-PE-card-para text-center text-light m-0">Reporting is our top priority to keep you informed about your revenue cycle.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="thrd-sec-PE py-5">
        <div class="container">
            <div class="row py-lg-4">
                <div class="col-12 col-md-6 pt-lg-5">
                    <h2 class=" text-blue">Safe & Prompt Service
                        Ensuring Accurate Billing
                    </h2>
                    <p class="text-grey py-lg-3">At Atlantis, we know that your specialty is medicine, not paperwork.
                        That's why we make it our mission to help you focus on what you do best:
                        providing quality care.We create a smooth and efficient process for collecting payments from patients and payers. With ever increasing burden on health care, the need to manage the revenue cycle effectively is more important than ever.

                        At Atlantis RCM, we maintain a high success rate on out-of-the-box clearinghouse claims, which is an excellent indication for reduced billing errors.
                    </p>
                </div>
                <div class="col-12 col-md-6 pt-md-5 pt-lg-0">

                    <img src="{{url('public/frontend/assets/img/medical_credentialing/medical_cred_sec2.png')}}"
                         alt="image"
                         class=" thrd-sec-PE-img">
                </div>
            </div>
        </div>
    </section>

    <section class="patient_exp_proactive py-5">
        <div class="container">
            <div class="proactive_title">
                <h2 class="text-white pt-md-4">Our Foolproof Billing Process Eliminates Guesswork</h2>
                <p class="text-white">With the help of our team of experts you will be able to maximize reimbursement
                    from your insurance company and your patients.
                    Our services are designed to let you save money and maximize the efficiency of your practice while
                    reducing costs and increasing revenue.</p>
            </div>
            <div class="row  pt-xl-3">
                <div class="col-12 col-md-6">
                    <div class="pro_active_card py-4 my-3">
                        <ul class="nav nav-tabs pro_active" id="myTab" role="tablist">
                            <li class="nav-item pb-xl-4 pb-md-4 pb-3 position-relative" role="presentation">
                                <button class="pro_active_button nav-link active" id="home-tab" data-bs-toggle="tab"
                                        data-bs-target="#home"
                                        type="button" role="tab" aria-controls="home" aria-selected="true">Insurance
                                    Verification
                                </button>
                                <img class="pE_pro_arr_active"
                                     src="{{url('public/frontend/assets/img/patient_experience/polygon-1.png')}}">

                            </li>
                            <li class="nav-item  pb-xl-4 pb-md-4 pb-3 position-relative" role="presentation">
                                <button class="nav-link pro_active_button" id="Primary-tab" data-bs-toggle="tab"
                                        data-bs-target="#Primary"
                                        type="button" role="tab" aria-controls="Primary" aria-selected="false">
                                    Patient Demographic
                                </button>
                                <img class="pE_pro_arr_active"
                                     src="{{url('public/frontend/assets/img/patient_experience/polygon-1.png')}}">

                            </li>
                            <li class="nav-item  pb-xl-4 pb-md-4 pb-3 position-relative" role="presentation">
                                <button class="nav-link pro_active_button" id="CAQH-tab" data-bs-toggle="tab"
                                        data-bs-target="#CAQH"
                                        type="button" role="tab" aria-controls="CAQH" aria-selected="false">Charge Entry
                                </button>
                                <img class="pE_pro_arr_active"
                                     src="{{url('public/frontend/assets/img/patient_experience/polygon-1.png')}}">

                            </li>
                            <li class="nav-item  pb-xl-4 pb-md-4 pb-3 position-relative" role="presentation">
                                <button class="nav-link pro_active_button" id="Recredentialing-tab" data-bs-toggle="tab"
                                        data-bs-target="#Recredentialing"
                                        type="button" role="tab" aria-controls="Recredentialing" aria-selected="false">
                                    Claim Submission
                                </button>
                                <img class="pE_pro_arr_active"
                                     src="{{url('public/frontend/assets/img/patient_experience/polygon-1.png')}}">

                            </li>
                            <li class="nav-item  pb-xl-4 pb-md-4 pb-3 position-relative" role="presentation">
                                <button class="nav-link pro_active_button" id="payment-tab" data-bs-toggle="tab"
                                        data-bs-target="#payment"
                                        type="button" role="tab" aria-controls="payment" aria-selected="false">
                                    Payment Entry/Posting
                                </button>
                                <img class="pE_pro_arr_active"
                                     src="{{url('public/frontend/assets/img/patient_experience/polygon-1.png')}}">

                            </li>
                            <li class="nav-item  pb-xl-4 pb-md-4 pb-3 position-relative" role="presentation">
                                <button class="nav-link pro_active_button" id="Denial-tab" data-bs-toggle="tab"
                                        data-bs-target="#Denial"
                                        type="button" role="tab" aria-controls="Denial" aria-selected="false">
                                    Denial Management
                                </button>
                                <img class="pE_pro_arr_active"
                                     src="{{url('public/frontend/assets/img/patient_experience/polygon-1.png')}}">

                            </li>
                            <li class="nav-item  pb-xl-4 pb-md-4 pb-3 position-relative" role="presentation">
                                <button class="nav-link pro_active_button" id="AR-followup-tab" data-bs-toggle="tab"
                                        data-bs-target="#AR-followup"
                                        type="button" role="tab" aria-controls="AR-followup" aria-selected="false">
                                    A/R Followup
                                </button>
                                <img class="pE_pro_arr_active"
                                     src="{{url('public/frontend/assets/img/patient_experience/polygon-1.png')}}">

                            </li>
                            <li class="nav-item  pb-xl-4 pb-md-4 pb-3 position-relative" role="presentation">
                                <button class="nav-link pro_active_button" id="Reporting-tab" data-bs-toggle="tab"
                                        data-bs-target="#Reporting"
                                        type="button" role="tab" aria-controls="Reporting" aria-selected="false">
                                    Reporting
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
                            <div class="">
                                <img class="img-fluid"
                                     src="{{url('public/frontend/assets/img/service-medical billing page/slider_insurance_verification.png')}}">
                                <p class="text-white pt-md-4">We act as a bridge between scheduling and admission. Upon
                                    appointment confirmation, we verify patient insurance information, get copay,
                                    deductible, and out-of-pocket information.</p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Primary" role="tabpanel" aria-labelledby="Primary-tab">
                            <div class="">
                                <img class="img-fluid"
                                     src="{{url('public/frontend/assets/img/service-medical billing page/slider_patient_demographic.png')}}">
                                <p class="text-white pt-xl-4">Our goal is to provide all the information you need as a physician in one place to determine which treatment is best for your patients, such as their age and ethnicity.
                                </p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="CAQH" role="tabpanel" aria-labelledby="CAQH-tab">
                            <div class="">
                                <img class="img-fluid"
                                     src="{{url('public/frontend/assets/img/service-medical billing page/slider_patient_charge_entry.png')}}">
                                <p class="text-white pt-xl-4">RCM begins with charge entry. It's where we take all of the information we've gathered, and create a bill to send to patients. With our help, you can focus on running your practice smoothly.
                                </p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Recredentialing" role="tabpanel"
                             aria-labelledby="Recredentialing-tab">
                            <div class="">
                                <img class="img-fluid"
                                     src="{{url('public/frontend/assets/img/service-medical billing page/slider_claim_submission.png')}}">
                                <p class="text-white pt-xl-4">The back office process begins after the patient visit. By
                                    submitting claims, you can weed out any error that could delay the revenue process
                                    and result in denied claims. It includes charge capture and claim submission.
                                </p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="payment" role="tabpanel"
                             aria-labelledby="payment-tab">
                            <div class="">
                                <img class="img-fluid"
                                     src="{{url('public/frontend/assets/img/service-medical billing page/slider_payment.png')}}">
                                <p class="text-white pt-xl-4">Upon successful submission and review, the payment is
                                    posted and ready for your patient to pay. Atlantis RCM can provide assistance both
                                    in generating billing statements and in the collection process.
                                </p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Denial" role="tabpanel"
                             aria-labelledby="Denial-tab">
                            <div class="">
                                <img class="img-fluid"
                                     src="{{url('public/frontend/assets/img/service-medical billing page/slider_denial_management.png')}}">
                                <p class="text-white pt-xl-4">We have recovered revenues that would otherwise go
                                    unrecovered by using our denial management approach. In cases where revenue has been
                                    low due to problematic claims, we helped our clients to boost profit.
                                </p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="AR-followup" role="tabpanel"
                             aria-labelledby="AR-followup-tab">
                            <div class="">
                                <img class="img-fluid"
                                     src="{{url('public/frontend/assets/img/service-medical billing page/slider_AR_Follow_up.png')}}">
                                <p class="text-white pt-xl-4">We've helped healthcare organizations like yours boost
                                    their AR collections by 10-20% on average. If a claim is denied, we reopen it to
                                    receive the rightful reimbursement.

                                </p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Reporting" role="tabpanel"
                             aria-labelledby="Reporting-tab">
                            <div class="">
                                <img class="img-fluid"
                                     src="{{url('public/frontend/assets/img/service-medical billing page/slider_reporting.png')}}">
                                <p class="text-white pt-xl-4">Whether we're tracking claims or confirming payments, our team ensures that everything we do results in maximizing your office's revenue.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec5-conn-pat-exper py-5">
        <div class="container">
            <h3 class=" sec5-conn-hea text-blue ">We Focus On Your Collections While Reducing Costs</h3>
            <p class="sec5-conn-para text-grey mt-4">With our revenue cycle management service, you do not just make MORE REVENUE, we also give you insightful reports
                showing metrics, because “If you can't measure it, you can't improve it.”</p>
            <div class="row my-5 pb-3">
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="sec-5-patExper-card mt-3">
                        <img src="{{url('public/frontend/assets/img/medical_credentialing/healthcare-business-doctor-stethoscope-coins-with-stack-cash-graph-data-business-growth.png')}}"
                             class="card-img-top">
                        <div class="sec-5-patExper-card-body text-center p-1 p-lg-2 p-xl-3">
                            <h5 class="card-title  text-light my-2">Minimizing Claims</h5>
                            <p class="card-text text-light">Our team will work with you to create a plan for
                                improving collections and submitting more complete claims, and we'll monitor everything
                                to make sure the plan is working as intended.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="sec-5-patExper-card mt-3">
                        <img src="{{url('public/frontend/assets/img/medical_credentialing/doctor-physician-with-stethoscope-calculate-medical-fee-costs-revenue-practitioner-use-calculator-clinic.png')}}"
                             class="card-img-top">
                        <div class="sec-5-patExper-card-body text-center p-1 p-lg-2 p-xl-3">
                            <h5 class="card-title  text-light my-2">Maximizing Collections</h5>
                            <p class="card-text text-light">With medical billing services, we can proudly
                                state that we have been able to increase our clients' revenue profit by 10-25 % by
                                ensuring maximum claim follow-up.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="sec-5-patExper-card mt-3">
                        <img src="{{url('public/frontend/assets/img/medical_credentialing/doctor-accounting-department-writes-note-uses-calculator-calculate-expenses-income-hospital-staff.png')}}"
                             class="card-img-top">
                        <div class="sec-5-patExper-card-body text-center p-1 p-lg-2 p-xl-3">
                            <h5 class="card-title text-light my-2">Reducing Expenses</h5>
                            <p class="card-text text-light">Using our services will reduce all your office
                                operational costs in your healthcare facility as well as the headaches associated with
                                managing all the paperwork.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="home-testimonial-section py-5">
        <div class="container">
            <div class="cus_love-title">
                <h2 class="text-light pt-5">Why Our Customers Trust Us</h2>
            </div>
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active py-5">
                        <div class="cus_love_main_testimonial">
                            <div class="Cus_love_testimonial_slide">
                                <div class="Cus_love_testimonial_content">
                                     <p>Atlantis RCM did a great job in managing my billing tasks daily. I believe it has greatly assisted us in improving the cash flow by significantly reducing the number of errors. I strongly recommend them if you are looking to outsource your medical billing service. </p>
                                    <div class="Cus_love_testimonial_user">
                                        <img src="{{url('public/frontend/assets/img/patient_experience/img-0-7-v-1.png')}}"
                                             alt="">
                                        <span class="text-white">Dr. Shaun Daniel</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item py-5">
                        <div class="cus_love_main_testimonial">
                            <div class="Cus_love_testimonial_slide">
                                <div class="Cus_love_testimonial_content">
                                    <p>Atlantis RCM did a great job in managing my billing tasks daily. I believe it has greatly assisted us in improving the cash flow by significantly reducing the number of errors. I strongly recommend them if you are looking to outsource your medical billing service. </p>
                                    <div class="Cus_love_testimonial_user">
                                        <img src="{{url('public/frontend/assets/img/patient_experience/img-0-7-v-1.png')}}"
                                             alt="">
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
                <h2 class="Connect-head text-blue ">Atlantis RCM simplifies charge entry and eliminates costly mistakes</h2>
                @include('frontend.contactUs.contact_us_form')
            </div>
        </div>
    </section>


@endsection
