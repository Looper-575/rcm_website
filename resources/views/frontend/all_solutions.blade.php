@extends('frontend.layout.master')
@section('content')

    <section class="header_home header_all-solution">
        <div class="h-100" id="layer_1">
            <div class="container h-100">
                <div class="d-flex flex-column justify-content-center h-100">
                    <div class="header_content">
                        <h1 class="text-light Sec1-MB-hea1 ">Improve, Streamline &
                            Accelerate Cash Flow
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



    <!-- #####################################   second-section-Page-view-all-solution-on-click-  #############################-->
    <div class="scnd-sec-taxanmy py-5">
        <div class="container">
            <h3 class="text-center text-light">Atlantis RCM Custom Solutions</h3>
            <p class="text-center text-light">Flexible, services and cloud-based solutions designed to help your healthcare organization grow.</p>
        </div>
    </div>


    <!-- #####################################   third-section-Page-view-all-solution-on-click-  #############################-->
    <section class="all_sol_cards py-5">
        <h3 class="text-center text-grey py-3">Maximize Your Business Potential with the Assistance of a Skilled Team</h3>
        <div class="container">
            <div class="all-cards">
                <div class="row">
                    <div class="col-md-6">
                        <div class="solutions_card d-flex flex-column justify-content-center align-items-center my-3 h-100 mx-auto p-3">
                            <div class="card-img-onclick">
                                <img src="{{url('public/frontend/assets/img/all-solution-on-click/icon-menu-rcm.png')}}" class="card-img-top " alt="image">
                            </div>
                            <div class="card-body text-center">
                                <h4 class="card-title text-seafoam onclick-card-hea mt-3">Revenue Cycle Management</h4>
                                <p class="card-text text-grey onclick-card-para py-2">Boost profitability by streamlining cash flow,
                                    decreasing administrative burdens and
                                    better denial management</p>
                                <a href="{{url('absolute_revenue')}}" class="btn  onclick-card-button">Learn More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 py-4 py-lg-0 py-md-0">
                        <div class="solutions_card d-flex flex-column justify-content-center align-items-center my-lg-3 mt-3 h-100 mx-auto p-3">
                            <div class="card-img-onclick">
                                <img src="{{url('public/frontend/assets/img/all-solution-on-click/card-img-onclck-2.png')}}" class="card-img-top " alt="image">
                            </div>
                            <div class="card-body text-center">
                                <h4 class="card-title text-seafoam onclick-card-hea mt-3">Credentialing</h4>
                                <p class="card-text text-grey onclick-card-para py-2">Ensures highest level of healthcare
                                    satisfaction by increasing patient
                                    trust on their healthcare provider</p>
                                <a href="{{url('medical_credentialing')}}" class="btn  onclick-card-button">Learn More</a>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6 py-lg-4 py-md-4">
                        <div class="solutions_card d-flex flex-column justify-content-center align-items-center my-3 h-100 mx-auto p-3">
                            <div class="card-img-onclick">
                                <img src="{{url('public/frontend/assets/img/all-solution-on-click/onclick-card-3.png')}}" class="card-img-top " alt="image">
                            </div>
                            <div class="card-body text-center">
                                <h4 class="card-title text-seafoam onclick-card-hea mt-3">Medical Billing</h4>
                                <p class="card-text text-grey onclick-card-para py-2">Reducing errors with complete transparency to improve profitability for healthcare providers. </p>
                                <a href="{{url('medical_billing')}}" class="btn  onclick-card-button">Learn More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 py-4">
                        <div class="solutions_card d-flex flex-column justify-content-center align-items-center my-3 h-100 mx-auto p-3">
                            <div class="card-img-onclick">
                                <img src="{{url('public/frontend/assets/img/all-solution-on-click/icon-menu-pem.png')}}" class="card-img-top " alt="image">
                            </div>
                            <div class="card-body text-center">
                                <h4 class="card-title text-seafoam onclick-card-hea mt-3">Patient Experience</h4>
                                <p class="card-text text-grey onclick-card-para py-2">Making healthcare accessible, and improving interaction with healthcare eventually create a better patient experience management operation.
                                </p>
                                <a href="{{url('patient_experience')}}" class="btn  onclick-card-button">Learn More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6  py-lg-0">
                        <div class="solutions_card d-flex flex-column justify-content-center align-items-center my-3 h-100 mx-auto p-3">
                            <div class="card-img-onclick">
                                <img src="{{url('public/frontend/assets/img/all-solution-on-click/icon-menu-practice-management.png')}}" class="card-img-top " alt="image">
                            </div>
                            <div class="card-body text-center">
                                <h4 class="card-title text-seafoam onclick-card-hea mt-3">Practice Management</h4>
                                <p class="card-text text-grey onclick-card-para py-2">Understanding patient experience and
                                    patient centric care leads to productivity
                                    and streamline cash flow and effortless
                                    healthcare operations</p>
                                <a href="{{url('practice_manage')}}" class="btn  onclick-card-button">Learn More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 py-4 py-lg-0 py-md-0">
                        <div class="solutions_card d-flex flex-column justify-content-center align-items-center my-3 h-100 mx-auto p-3">
                            <div class="card-img-onclick">
                                <img src="{{url('public/frontend/assets/img/all-solution-on-click/icon-menu-ehr.png')}}" class="card-img-top " alt="image">
                            </div>
                            <div class="card-body text-center">
                                <h4 class="card-title text-seafoam onclick-card-hea mt-3">Healthcare analytics</h4>
                                <p class="card-text text-grey onclick-card-para py-2">Analytics helps in detection and early
                                    prevention healthcare models for a secure
                                    healthcare managemen</p>
                                <a href="{{url('healthC_analytics')}}" class="btn  onclick-card-button">Learn More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 py-lg-4 py-md-4">
                        <div class="solutions_card d-flex flex-column justify-content-center align-items-center my-3 h-100 mx-auto p-3">
                            <div class="card-img-onclick">
                                <img src="{{url('public/frontend/assets/img/all-solution-on-click/icon-menu-workforce-extension.png')}}" class="card-img-top " alt="image">
                            </div>
                            <div class="card-body text-center">
                                <h4 class="card-title text-seafoam onclick-card-hea mt-3">Workforce Extension</h4>
                                <p class="card-text text-grey onclick-card-para py-2">Increase healthcare turnover by extending workforce and automation to help you get more sustainable profitability</p>
                                <a href="{{url('workforce')}}" class="btn  onclick-card-button">Learn More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 py-4">
                        <div class="solutions_card d-flex flex-column justify-content-center align-items-center my-3 h-100 mx-auto p-3">
                            <div class="card-img-onclick">
                                <img src="{{url('public/frontend/assets/img/all-solution-on-click/icon-menu-telehealth.png')}}" class="card-img-top " style="width:25px; margin-left: 5px" alt="image">
                            </div>
                            <div class="card-body text-center">
                                <h4 class="card-title text-seafoam onclick-card-hea mt-3">Telehealth</h4>
                                <p class="card-text text-grey onclick-card-para py-2">Better engagement and coordinated
                                    communicationpromotes smooth
                                    interaction between you and your patient</p>
                                <a href="{{url('telehealth')}}" class="btn  onclick-card-button">Learn More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="solutions_card d-flex flex-column justify-content-center align-items-center my-3 h-100 mx-auto p-3">
                            <div class="card-img-onclick">
                                <img src="{{url('public/frontend/assets/img/all-solution-on-click/icon-digital-health.png')}}" class="card-img-top " alt="image">
                            </div>
                            <div class="card-body text-center">
                                <h4 class="card-title text-seafoam onclick-card-hea mt-3">Digital Health</h4>
                                <p class="card-text text-grey onclick-card-para py-2">Making healthcare more accessible with
                                    digital healthcare solutions such as CRMs
                                    and incorporated telehealth to
                                    streamline workflow</p>
                                <a href="#" class="btn  onclick-card-button">Learn More</a>
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
                <h2 class="Connect-head text-blue ">For Adaptable Solutions, Contact Us Today!</h2>
                @include('frontend.contactUs.contact_us_form')
            </div>
        </div>
    </section>



@endsection
