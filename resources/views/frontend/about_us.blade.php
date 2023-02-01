@extends('frontend.layout.master')
@section('content')
        <section class="header_home header_about_us">
            <div class="h-100" id="layer_1">
                <div class="container h-100">
                    <div class="d-flex flex-column justify-content-center h-100">
                        <div class="header_content">
                            <h1 class="text-light fw-bold">Accessible
                                & comprehensive
                               RCM Solutions</h1>
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
                            <h3 class="text-light py-2">Family Health Care Cost are Never-Ending!</h3>
                            <p class="text-light">What if you could save a little but still get the care you expect?</p>
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
                            <h3 class="text-blue thrd-sec-PE-hea">Health Care practices are able to reduce administrative over head cost by 60% or more with our help.</h3>
                            <p class="text-grey thrd-sec-PE-para pt-lg-3">Atlantis provides experience, expertise, and
                                technology to help you be
                                successful for years to come!</p>
                            <p class="text-grey thrd-sec-PE-para pt-lg-3">The rapid changes in Healthcare should not
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
                            <img src="{{('public/frontend/assets/img/About_Us/about_us_our_values.png')}}" alt="image">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="our_values_content pt-3">
                            <h3 class="text-light">Our values</h3>
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
                            <h6 class="text-light">Improving patient experience</h6>
                            <p class="text-light">Your Practice Management, and Tele Health Records will be
                                seamlessly integrated with your patient registration and intake systems.
                                Your patient interaction time will be significantly reduced if you do this in
                                order to reduce the time you spend with your patients.</p>
                            <h6 class="text-light">Reform their practices</h6>
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
                            <h3 class="text-blue thrd-sec-PE-hea">Our financial Services Cover<br>
                                you against any monetary Losses</h3>
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

{{--        <!--***************************About_Us_sec_customers_love*************************************-->--}}

        <section class="home-testimonial-section py-3">
            <div class="container">
                <div class="cus_love-title">
                    <h2 class="text-light pt-lg-5">Why Our Customers Loves Us</h2>
                    <p class="text-light pt-3 fs-5">During the course of the handling of my case by Atlantis RCM, I was extremely satisfied with their approach. Throughout the entire process, they were professional and efficient, and most importantly, they helped me go through it in a painless and quick manner.</p>
                </div>
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner py-lg-5">
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

{{--        ********************************About_us_sec_improve_profitability*************************************--}}

        <section class="Connect-Us py-xl-5 pt-3" id="connectSec">
            <div class="container">
                <div>
                    <h2 class="Connect-head text-blue ">Improve profitability of your practice through analysis and innovation</h2>
                    @include('frontend.contactUs.contact_us_form')
                </div>
            </div>
        </section>


@endsection
