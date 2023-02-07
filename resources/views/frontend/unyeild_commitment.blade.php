@extends('frontend.layout.master')
@section('content')
    <section class="header_home header_unyeild">
        <div class="h-100" id="layer_1">
            <div class="container h-100">
                <div class="d-flex flex-column justify-content-center h-100">
                    <div class="header_content">
                        <h1 class="text-light my-3">Atlantis RCM For Large Medical Groups</h1>

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
                            <h3 class="Scnd-sec-PE-card-hea text-center text-light">Accurate Assessment</h3>
                            <p class="Scnd-sec-PE-card-para text-center text-light m-0">Let us take accurate insurance
                                information and collect unpaid balances.</p>
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
                            <h3 class="Scnd-sec-PE-card-hea text-center text-light">Financial Planning</h3>
                            <p class="Scnd-sec-PE-card-para text-center text-light m-0">Understanding your business costs
                                and revenue cycle helps us create a plan.</p>
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
                            <h3 class="Scnd-sec-PE-card-hea text-center text-light">Maintaining  Relationship</h3>
                            <p class="Scnd-sec-PE-card-para text-center text-light m-0">Having a good relationship with your
                                patients will increase profitability.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="thrd-sec-PE py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-sm-12  thrd-sec-PE-data">
                    <h2 class="thrd-sec-PE-hea text-blue">Our Unyielding Commitment To Deliver Results!</h2>
                    <p class="thrd-sec-PE-para text-grey pt-3">When medical practices do not collect up front as they should they rely on post
                        payment methods such as chargebacks payment plans and negotiated
                        discounts which end up costing to collect properly prior to services rendered.
                    </p>
                    <p class="thrd-sec-PE-para text-grey">
                        This leads to frustration and leaves you exposed to financial risk.
                    </p>
                    <p class="thrd-sec-PE-para text-grey">
                        You can recover your outstanding balances with Atlantis RCM that will assist
                        you in minimizing the risk of not getting paid or having bad debts written off
                        due to non-collection.
                    </p>
                </div>
                <div class="col-12 col-md-6 col-sm-12">
                    <img src="{{url('public/frontend/assets/img/Unyeild_commit/sec3_unyeild.png')}}" alt=image class=" thrd-sec-PE-img">
                </div>
            </div>
        </div>
    </section>

    <section class="unyeild-4th-sec py-5">
        <div class="container">
            <div class="row py-4">
                <div class="col-12 col-md-6 col-sm-12">
                    <img src="{{url('public/frontend/assets/img/Unyeild_commit/Profit_sec4.png')}}" alt=image class=" thrd-sec-PE-img">
                </div>
                <div class="col-12 col-md-6 col-sm-12  thrd-sec-PE-data">
                    <h2 class="thrd-sec-PE-hea text-light">Operate at a Higher Profit Margin</h2>
                    <p class="thrd-sec-PE-para text-light pt-3">There has been a rise in denied claims appeals and denials for your
                        provider network, no matter whether it is Medicare, Medicaid, managed care
                        or commercial claims you manage.

                    </p>
                    <p class="thrd-sec-PE-para text-light">

                        This is largely due to the ever-changing regulations and the ongoing oversight
                        provided by government agencies.

                    </p>
                    <p class="thrd-sec-PE-para text-light">
                        We specialize in revenue cycle management for large medical groups, both
                        multi-speciality and single-speciality, from exemplary practices to medical institutes.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="thrd-sec-PE py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-sm-12  thrd-sec-PE-data">
                    <h2 class="thrd-sec-PE-hea text-blue">Get a Better understanding of
                        your Cash Flow</h2>
                    <p class="thrd-sec-PE-para text-grey pt-3">Almost nothing will be exactly the same in every practice.
                        To make them fit together, most CRM outsourcing companies
                        use a cookie cutter approach.
                    </p>
                    <p class="thrd-sec-PE-para text-grey">
                        Due to the costs involved with managing revenue cycles,
                        large medical groups are often unable to manage them
                        effectively.
                    </p>
                    <p class="thrd-sec-PE-para text-grey">
                        You'll be able to manage your practice more effectively
                        and make better decisions for your patients, staff, and
                        overall business health with Atlantis.
                    </p>
                </div>
                <div class="col-12 col-md-6 col-sm-12">
                    <img src="{{url('public/frontend/assets/img/Unyeild_commit/sec4_cash.png')}}" alt=image class=" thrd-sec-PE-img">
                </div>
            </div>
        </div>
    </section>

    <section class="unyeild-4th-sec py-5">
        <div class="container">
            <div class="row py-4">
                <div class="col-12 col-md-6 col-sm-12">
                    <img src="{{url('public/frontend/assets/img/Unyeild_commit/sec5.png')}}" alt=image class=" thrd-sec-PE-img">
                </div>
                <div class="col-12 col-md-6 col-sm-12  thrd-sec-PE-data">
                    <h2 class="thrd-sec-PE-hea text-light">See your administrative headaches go away</h2>
                    <p class="thrd-sec-PE-para text-light pt-3">The impact from negative payers is devastating to speciality practices.
                        The majority of this impact comes from poor processes which results
                        in increased administrative costs and decreased collections.
                    </p>
                    <p class="thrd-sec-PE-para text-light">
                        As part of its comprehensive care management solution, Altantis
                        services continue to support the entire revenue cycle.
                    </p>
                    <p class="thrd-sec-PE-para text-light">
                        You need support to manage medical bills, collect what is
                        due and make sure that you keep your costs affordable for all the patients.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <section class="thrd-sec-PE py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-sm-12  thrd-sec-PE-data">
                    <h2 class="thrd-sec-PE-hea text-blue">Manage revenue-critical tasks
                        in real-time</h2>
                    <p class="thrd-sec-PE-para text-grey pt-3">Health care providers and payers, including hospitals,
                        outpatient physicians, medical groups, and integrated
                        delivery systems, are currently facing three major issues:
                        credentialing, medical billing, and claim denials.
                    </p>
                    <p class="thrd-sec-PE-para text-grey">
                        In order to avoid these core problems, Atlantis RCM provides
                        loss prevention, enforcement, and collection services.
                    </p>
                    <p class="thrd-sec-PE-para text-grey">
                        Through a standardized operational model, large medical
                        groups have benefited from Revenue Cycle Management
                        by making smarter use of their data and improving operations.
                    </p>
                </div>
                <div class="col-12 col-md-6 col-sm-12">
                    <img src="{{url('public/frontend/assets/img/Unyeild_commit/sec6.png')}}" alt=image class=" thrd-sec-PE-img">
                </div>
            </div>
        </div>
    </section>


    <section class="unyeild-4th-sec py-5">
        <div class="container">
            <div class="row py-4">
                <div class="col-12 col-md-6 col-sm-12">
                    <img src="{{url('public/frontend/assets/img/Unyeild_commit/sec7.png')}}" alt=image class=" thrd-sec-PE-img">
                </div>
                <div class="col-12 col-md-6 col-sm-12  thrd-sec-PE-data">
                    <h2 class="thrd-sec-PE-hea text-light">One step ahead of Payment Patient</h2>
                    <p class="thrd-sec-PE-para text-light pt-3">Find out how Atlantis RCM's precision revenue cycle management
                        services can enhance your patient care.
                    </p>
                </div>
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
