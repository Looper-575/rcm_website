@extends('frontend.layout.master')
@section('content')
        <section class="header_home header_about_us">
            <div class="h-100" id="layer_1">
                <div class="container h-100">
                    <div class="d-flex flex-column justify-content-center h-100">
                        <div class="header_content">
                            <h1 class="text-light">COMPREHENSIVE REVENUE CYCLE MANAGEMENT SOLUTIONS</h1>
                            <div class="hdr_btn d-flex mt-5">
                                <a href="#connectSec">
                                    <button class="btn strtBtn1">Get Started</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
{{--**************************************About_Us_sec_the_charges**************************************************--}}

        <section class="AU_the_charges">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 py-3 py-md-4 py-xl-5">
                        <div class="the_charges_content">
                            <h2 class="text-light py-2">Achieving Family Health Care is Priceless<br>
                                What If You Could Save a Little While Doing So
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>

{{--***************************************About_Us_sec_with_our_help*******************************--}}

        <section class="thrd-sec-PE py-3">
            <div class="container">
                <div class="row py-lg-5">
                    <div class="col-lg-6 col-sm-12">
                        <div class="thrd-sec-PE-data pt-lg-5">
                            <h2 class="text-blue thrd-sec-PE-hea">With our help, healthcare practices were able to reduce overhead administrative costs by 60%</h2>
                            <p class="text-grey thrd-sec-PE-para pt-lg-3">Atlantis provides experience, expertise, and
                                technology to help you be
                                successful for years to come!</p>
                            <p class="text-grey thrd-sec-PE-para pt-lg-3">The rapid changes in healthcare should not
                                threaten the foundation of
                                RCM. It’s a professional art and science to support proper recovery
                                even amid an increasingly complex rich-client landscape.</p>
                            <p class="text-grey thrd-sec-PE-para pt-lg-3">Atlantis RCM offers services for all kinds of
                                specialties to
                                make it easier to manage your patients' medical records and their
                                health, so you can focus on the most important thing: providing them
                                with quality care.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 py-lg-5">
                        <img src="{{url('public/frontend/assets/img/About_Us/about_us_with_our_help.png')}}"
                             alt="image"
                             class="thrd-sec-PE-img">
                    </div>
                </div>
            </div>
        </section>

{{-- ***************************************About_Us_sec_our_values*******************************--}}

        <section class="AU_the_charges">
            <div class="container">
                <div class="row py-3">
                    <div class="col-lg-6 col-sm-12">
                        <div class="our_values_img">
                            <img src="{{('public/frontend/assets/img/About_Us/about_us_our_values.jpg')}}" alt="image">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="our_values_content pt-3">
                            <h3 class="text-light">Our Values</h3>
                            <p class="text-light">Our mission is to help your healthcare company with any administrative,
                                clinical, billing, or marketing service that is needed, so that
                                your staff can devote more time to patient care.</p>

                            <h6 class="text-light">Reduce Operational Expenditures</h6>
                            <p class="text-light">We provide end-to-end services and a specialized back-office team
                                to meet all your needs through flexible, consultative approaches.
                                Whether you are a medical group or hospital, you can rely on us to
                                improve profitability and eliminate administrative burdens for your
                                medical practice.</p>

                            <h6 class="text-light">Increase Collection Rates</h6>
                            <p class="text-light">By partnering with our specialized back-office team, your revenue
                                cycle will be handled by a team of professionals who will manage
                                critical parts of the revenue cycle from claims submissions to A/R
                                follow-ups, resulting in a decrease in staffing costs.</p>

                            <h6 class="text-light">Improving Patient Experience</h6>
                            <p class="text-light">Your Practice Management, and Tele Health Records will be
                                seamlessly integrated with your patient registration and intake systems.
                                Your patient interaction time will be significantly reduced if you do this in
                                order to reduce the time you spend with your patients.</p>

                            <h6 class="text-light">Reform Practices</h6>
                            <p class="text-light">By enhancing practice efficiency and driving better financial
                                results,
                                we help practices run more smoothly. With the Atlantis RCM suite of
                                technology-enabled solutions, you can enhance your practice's efficiency
                                and effectiveness, and take it to the next level with the flexibility and power
                                it provides.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

{{--***************************************About_Us_sec_our_financial*******************************--}}

        <section class="thrd-sec-PE py-3">
            <div class="container">
                <div class="row py-lg-5">
                    <div class="col-md-6 col-sm-12">
                        <div class="thrd-sec-PE-data pt-xl-5">
                            <h3 class="text-blue thrd-sec-PE-hea">Our financial services cover you against any monetary losses.
                            </h3>
                            <p class="text-grey thrd-sec-PE-para pt-md-3">Our team is made up of experienced professionals
                                who are dedicated to helping you achieve your goals in record-keeping, billing, and claims
                                processing.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <img src="{{url('public/frontend/assets/img/About_Us/about_us_our_financial.png')}}"
                             alt="image"
                             class="thrd-sec-PE-img w-75">
                    </div>
                </div>
            </div>
        </section>



{{--        ********************************About_us_sec_improve_profitability*************************************--}}

        <section class="Connect-Us py-xl-5 pt-3" id="connectSec">
            <div class="container">
                <div>
                    <h2 class="Connect-head text-blue ">Discover a Better Way Forward</h2>
                    @include('frontend.contactUs.contact_us_form')
                </div>
            </div>
        </section>


@endsection
