@extends('frontend.layout.master')
@section('content')

    <section class="header_home header_absolute_Rev">
        <div class="h-100" id="layer_1">
            <div class="container h-100">
                <div class="d-flex flex-column justify-content-center h-100">
                    <div class="header_content">
                        <h1 class="text-light fw-bold">ABSOLUTE REVENUE <br>
                            <span class="fw-bold">CYCLE MANAGEMENT</span></h1>
                        <p class="text-light pt-md-4">From on-Boarding to the collection, we manage everything.</p>
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

    {{--***************************************Absolute_Revenue_Sec_services home*******************************--}}

    <section class="Scnd-sec-PE py-5">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-4">
                    <div class="card Scnd-sec-PE-card my-3 my-md-0">
                        <div class="PE-2-asset d-flex align-items-center justify-content-center">
                            <img src="{{url('public/frontend/assets/img/patient_experience/vector-smart-object-expereince1.png')}}"
                                 class="PE-2-img-active" alt="Image 1">
                            <img src="{{url('public/frontend/assets/img/patient_experience/icn_perfection@3x copy.png')}}"
                                 class="PE-2-img-inactive" alt="Image 2">
                        </div>
                        <div class="card-body">
                            <h3 class="Scnd-sec-PE-card-hea text-center text-light">Improved Cash Flow</h3>
                            <p class="Scnd-sec-PE-card-para text-center text-light m-0">Streamlining payables processes
                                reduces
                                costs and improves patient collection,
                                leading to increased profitability.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card  Scnd-sec-PE-card my-3 my-md-0">
                        <div class="PE-2-asset  d-flex align-items-center justify-content-center">
                            <img src="{{url('public/frontend/assets/img/patient_experience/icon_customization_inactive.png')}}"
                                 class="PE-2-img-active" alt="Image 1">
                            <img src="{{url('public/frontend/assets/img/patient_experience/vector-smart-object-exp.png')}}"
                                 class="PE-2-img-inactive" alt="Image 2">
                        </div>

                        <div class="card-body">
                            <h3 class="Scnd-sec-PE-card-hea text-center text-light">Less Time on Admin Tasks</h3>
                            <p class="Scnd-sec-PE-card-para text-center text-light m-0">Your time is better spent doing
                                what
                                makes your business grow than dealing
                                with administrative tasks.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card  Scnd-sec-PE-card my-3 my-md-0">
                        <div class="PE-2-asset  d-flex align-items-center justify-content-center">
                            <img src="{{url('public/frontend/assets/img/patient_experience/vector-smart-object-exp-1.png')}}"
                                 class="PE-2-img-active  " alt="Image 3">
                            <img src="{{url('public/frontend/assets/img/patient_experience/icn_promptness@2x copy.png')}}"
                                 class="PE-2-img-inactive" alt="Image 2">
                        </div>

                        <div class="card-body">
                            <h3 class="Scnd-sec-PE-card-hea text-center text-light">Better Customer Services</h3>
                            <p class="Scnd-sec-PE-card-para text-center text-light m-0">We create more efficient
                                processes that
                                ensure faster reimbursements, resulting
                                in better customer service</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--***************************************Absolute_Revenue_Sec_complete_Revenue*******************************--}}

    <section class="thrd-sec-PE py-5">
        <div class="container">
            <div class="row py-lg-4">
                <div class="col-md-6 col-sm-12">
                    <div class="thrd-sec-PE-data pt-lg-5">
                        <h3 class="text-blue thrd-sec-PE-hea">Complete Revenue Cycle Management, Managed by Experts</h3>
                        <p class="text-grey thrd-sec-PE-para pt-md-3">With our team of professionals and sophisticated
                            workflow,
                            we anchor the transformation of your revenue cycle into a profitable one.
                            As we perform both front-end and back-end operational tasks,
                            we limit the possibility of rejected claims.</p>
                        <p class="text-grey thrd-sec-PE-para pt-md-3">We keep your practice in optimal financial
                            condition so that you can
                            concentrate on what really matters: the care of your patients.</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 py-md-5">
                    <img src="{{url('public/frontend/assets/img/absolute_revenue/Absolute_Rev_sec_complt_rev.png')}}"
                         alt="image"
                         class="thrd-sec-PE-img">
                </div>
            </div>
        </div>
    </section>

    {{--    ***************************************Absolute_Revenue_Sec_Accelerating_Patients**********************--}}

    <section class="patient_exp_proactive py-3">
        <div class="container">
            <div class="proactive_title">
                <h2 class="text-white pt-md-4">Accelerating Patient care with Actionable Insights</h2>
                <p class="text-white">Through Revenue Cycle Management, not only is the workflow simplified, but the
                    likelihood of denials is decreased as well.
                    This will ultimately improve your collection rate and enable you to stay in a better financial
                    position in the long run.</p>
            </div>
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="pro_active_card py-4">
                        <ul class="nav nav-tabs pro_active" id="myTab" role="tablist">
                            <li class="nav-item pb-xl-4 pb-md-4 pb-3 position-relative" role="presentation">
                                <button class="pro_active_button nav-link active" id="home-tab" data-bs-toggle="tab"
                                        data-bs-target="#home"
                                        type="button" role="tab" aria-controls="home" aria-selected="true">Strategic
                                    Approach
                                </button>
                                <img class="pE_pro_arr_active"
                                     src="{{url('public/frontend/assets/img/patient_experience/polygon-1.png')}}">

                            </li>
                            <li class="nav-item  pb-xl-4 pb-md-4 pb-3 position-relative" role="presentation">
                                <button class="nav-link pro_active_button" id="Primary-tab" data-bs-toggle="tab"
                                        data-bs-target="#Primary"
                                        type="button" role="tab" aria-controls="Primary" aria-selected="false">100%
                                    Transparency
                                </button>
                                <img class="pE_pro_arr_active"
                                     src="{{url('public/frontend/assets/img/patient_experience/polygon-1.png')}}">

                            </li>
                            <li class="nav-item  pb-xl-4 pb-md-4 pb-3 position-relative" role="presentation">
                                <button class="nav-link pro_active_button" id="CAQH-tab" data-bs-toggle="tab"
                                        data-bs-target="#CAQH"
                                        type="button" role="tab" aria-controls="CAQH" aria-selected="false">Expert
                                    Advice
                                </button>
                                <img class="pE_pro_arr_active"
                                     src="{{url('public/frontend/assets/img/patient_experience/polygon-1.png')}}">

                            </li>
                            <li class="nav-item  pb-xl-4 pb-md-4 pb-3 position-relative" role="presentation">
                                <button class="nav-link pro_active_button" id="Recredentialing-tab" data-bs-toggle="tab"
                                        data-bs-target="#Recredentialing"
                                        type="button" role="tab" aria-controls="Recredentialing" aria-selected="false">
                                    End-to-End Service
                                </button>
                                <img class="pE_pro_arr_active"
                                     src="{{url('public/frontend/assets/img/patient_experience/polygon-1.png')}}">

                            </li>
                            <li class="nav-item  pb-xl-4 pb-md-4 pb-3 position-relative" role="presentation">
                                <button class="nav-link pro_active_button" id="Appeals-tab" data-bs-toggle="tab"
                                        data-bs-target="#Appeals"
                                        type="button" role="tab" aria-controls="Appeals" aria-selected="false">Detailed
                                    Reporting
                                </button>
                                <img class="pE_pro_arr_active"
                                     src="{{url('public/frontend/assets/img/patient_experience/polygon-1.png')}}">

                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-6 mt-3 mt-md-0">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="">
                                <img class="img-fluid"
                                     src="{{url('public/frontend/assets/img/absolute_revenue/slider_strategic_approach.jpg')}}">
                                <p class="text-white pt-md-4">We analyze the situation, develop a customized plan that
                                    fulfills your customer
                                    needs and improves your profitability.</p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Primary" role="tabpanel" aria-labelledby="Primary-tab">
                            <div class="">
                                <img class="img-fluid"
                                     src="{{url('public/frontend/assets/img/absolute_revenue/slider_transparency.jpg')}}">
                                <p class="text-white pt-xl-4">We offer 100% transparency on all data pertaining to the
                                    process from intake to payment. Every patient's status will always be clear to you,
                                    so you can make informed decisions.
                                </p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="CAQH" role="tabpanel" aria-labelledby="CAQH-tab">
                            <div class="">
                                <img class="img-fluid"
                                     src="{{url('public/frontend/assets/img/absolute_revenue/slider_expert_advice.png')}}">
                                <p class="text-white pt-xl-4">RCM is a hectic and cumbersome job involving a lot of
                                    paperwork. We make sure it’s done by experienced professionals to avoid failures.
                                </p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Recredentialing" role="tabpanel"
                             aria-labelledby="Recredentialing-tab">
                            <div class="">
                                <img class="img-fluid"
                                     src="{{url('public/frontend/assets/img/absolute_revenue/slider_end_to_end_service.jpg')}}">
                                <p class="text-white pt-xl-4">We provide an end-to-end solution for your practice
                                    ensuring that your billing, collections and accounts receivable are all handled with
                                    care.
                                </p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Appeals" role="tabpanel" aria-labelledby="Appeals-tab">
                            <div class="">
                                <img class="img-fluid"
                                     src="{{url('public/frontend/assets/img/absolute_revenue/slider_reporting_doctor.jpg')}}">
                                <p class="text-white pt-xl-4">Revenue cycle management is not just limited to billing
                                    and collection. Our detailed reporting lets you monitor everything so you can make
                                    sure everything is on track.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{--    ***************************************Absolute_Revenue_Sec_CR_cycle_support**********************--}}

    <section class="py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="py-md-5">
                        <h2 class="text-blue pt-md-3">A COMPLETE REVENUE CYCLE SUPPORT</h2>
                        <p class="text-grey py-md-3">Our goal is to accelerate reimbursements, reduce denials, and get
                            your revenue cycle back on track, by reducing costs and driving revenue for
                            healthcare organizations.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--********************************Absolute_Rev_Sec_start_claim*************************************--}}

    <section class="what_we_section py-lg-5 py-3">
        <div class="container w-lg-75">
            <div class="d-flex flex-row flex-wrap svg_process mb-md-5">
                <div class=" what_service service_hd slide_1 start_claim_btn" onclick="active_service(1)">
                    <p class="headng mt-md-1 text-grey">Start of a Claim</p>
                </div>
                <div class=" what_service service_hd slide_2 start_claim_btn" onclick="active_service(2)">
                    <p class="headng mt-md-1 text-grey">Claim Management</p>
                </div>
                <div class=" what_service service_hd slide_3 start_claim_btn" onclick="active_service(3)">
                    <p class="headng mt-md-1 text-grey">Acc. Receivable A/R Management </p>
                </div>
            </div>

            <div class="detail_process">
                <div class="process-detail-contant text-light process_inactive slide_content_1">
                    <p class="text-light">For a practice to remain profitable, policies and procedures for registering patients, verifying insurance coverage, capturing charges, and processing claims we make sure everything is in place.
                    </p>
                    <h5 class="text-light fw-bold pt-md-3">Credentialing</h5>
                    <p class="text-light">Atlantis RCM manages individual and group provider enrollment, credentialing appeals,  verification, hospital privileges, and CAQH compliance management to avoid any kind of errors and mistakes.</p>
                    <h5 class="text-light fw-bold pt-md-3">Contract/Payer Negotiations</h5>
                    <p class="text-light">Upon successful credentialing, we do out of network billing by negotiating terms between the insurance company and healthcare provider so that we can receive the maximum reimbursement from the insurance company.</p>
                    <h5 class="text-light fw-bold pt-md-3">Eligibility/Benefit Verification</h5>
                    <p class="text-light">When a patient registers or schedules an appointment, our team of experts verifies their insurance and benefits match the services they require. It prevents insurance claim denials ensuring the patient's data is correct.</p>
                    <h5 class="text-light fw-bold pt-md-3">Scheduling Appointments</h5>
                    <p class="text-light">As part of scheduling appointments, we must identify the demographics of our patients, check whether there are any overlapping appointments, and ensure no more patient delays and waiting time that is unnecessary.</p>
                </div>
                <div class="process-detail-contant text-light process_inactive slide_content_2">
                    <p class="text-light">Atlantis RCM provides complete claim management services from submission,
                        processing the claims,
                        correcting, and resubmission.</p>
                    <h5 class="text-light fw-bold pt-md-3">Payment Posting</h5>
                    <p class="text-light">Upon successful submission and review, the payment is posted and ready for your
                        patient to pay.
                        Atlantis RCM can provide assistance both in generating billing statements and in the collection
                        process.</p>
                    <h5 class="text-light fw-bold pt-md-3">Denial Management</h5>
                    <p class="text-light">We have recovered revenues that would otherwise go unrecovered by using our denial
                        management
                        approach. In cases where revenue has been low due to problematic claims, managing denials will boost
                        profits.</p>
                    <h5 class="text-light fw-bold pt-md-3">Claim Submission</h5>
                    <p class="text-light">The back office process begins after the patient visit. By submitting claims, you
                        can weed out any
                        error that could delay the revenue process and result in denied claims. It includes charge capture
                        and claim submission.</p>
                    <h5 class="text-light fw-bold pt-md-3">Reporting</h5>
                    <p class="text-light">A medical practice without detailed reports can develop underlying problems. With
                        the help of our
                        real-time reports, you will be able to view financial data and performance indicators in real
                        time.</p>
                </div>
                <div class="process-detail-contant text-light process_inactive slide_content_3">
                    <h5 class="text-light fw-bold pt-md-3">Charge Capture & Validation</h5>
                    <p class="text-light">We ensure to improve overall patient experience with proven practices for healthcare data management by gathering valid medical billing information of your patients.</p>
                    <h5 class="text-light fw-bold pt-md-3">Account Receivables</h5>
                    <p class="text-light">We've helped healthcare organizations like yours boost their AR collections by 10-20% on average. If a claim is denied, we reopen it to receive the rightful reimbursement.</p>
                    <h5 class="text-light fw-bold pt-md-3">Payer Follow-up</h5>
                    <p class="text-light">To get maximum reimbursement we make sure all your pending and no response claims are sorted timely.</p>
                    <h5 class="text-light fw-bold pt-md-3">Patient Statement</h5>
                    <p class="text-light">We make sure every statement is prompt, concise and accurate so that you can collect medical fees more effectively.</p>
                </div>
                </div>
            </div>
            <div>

            </div>
        </div>
    </section>


    {{--********************************Absolute_Rev_Sec_For_Adaptable*************************************--}}

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
            if (current_process === 1) {
                unactive = 3;
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
            if (current_process === 3) {
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
        }, 60000)

        function active_service(e) {
            $('.service_hd').removeClass('process_active');
            $('.process-detail-contant').removeClass('process_active');
            $('.process-detail-contant').addClass('process_inactive');
            current_process = e;
            next_process()
        }

    </script>
@endsection
