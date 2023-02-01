@extends('frontend.layout.master')
@section('content')

    {{--********************************Contact_us_page*************************************--}}
    <section class="header_home header_contact_us">
        <div class="h-100" id="layer_1">
            <div class="container h-100">
                <div class="d-flex flex-column justify-content-center h-100">
                    <div class="header_content">
                        <h1 class="text-light">Contact Our
                            Experts Today For Better Results</h1>
                        <div class="hdr_btn my-3 d-flex strtBtn_home">
                            <a href="tel:+1 518 730 1875">
                                <button class="btn">
                                    Call Now
                                </button>
                            </a>
                            <a href="#connectSec">
                                <button class="btn mx-3">
                                    Get Started
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--********************************Contact_us_sec_we_help_you*************************************--}}

    <section class="AU_the_charges">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 py-3 py-md-4 py-xl-5">
                    <div class="the_charges_content">
                        <p class="text-light mt-xl-4">We help you generate revenue for your healthcare practice and reduce time
                            and effort managing administrative tasks. We'll collaborate
                            with your team so that everyone is working towards the same goals, from medical billing and
                            practice management services to quality patient healthcare!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--********************************Contact_us_sec_we_help_you*************************************--}}
    <section class="Connect-Us py-5" id="connectSec">
        <div class="container">
            <div>
                <div class="row  mt-xl-5">
                    <div class="col-lg-6">
                        <div class="thrd-sec-PE-data p-0">
                            <h3 class="text-blue thrd-sec-PE-hea">Ready To Get Started?</h3>
                            <p class="text-grey thrd-sec-PE-para pt-md-3">Our professional team works closely with your office staff to ensure
                                that medical billing needs are met quickly and efficiently.</p>
                            <p class="text-grey thrd-sec-PE-para pt-md-3">With our experience and knowledge, we provide quality medical
                                practice billing service to clients and help them achieve their goals.</p>
                            <p class="text-grey thrd-sec-PE-para pt-md-3">Take advantage of Atlantis consultation services to experience how
                                we can help your practice run more efficiently to increase revenue.
                                We offer various medical practice management services to help manage
                                administrative tasks for better patient healthcare. Let us become an
                                extension of your practice success.</p>
                        </div>
                    </div>
                    <div class="col-12 col-xl-5" style="padding: 0">
                        <form class="seven-form" id="contact_form_id">
                            @csrf
                            <h3 class=" app-hea text-center mb-2">Make An Appointment</h3>
                            <div class="form-group">
                                <input type="text" class="form-control text-grey" name="name" id="name_id" placeholder="Name" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control text-grey" name="service" id="service_id" placeholder="Enter Service" required>
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control text-grey" name="phone_number" id="phone_number_id" placeholder="Phone Number" required>
                                <img class="seven-icon" src="{{url('/public/frontend/assets/img/home/0-6-icon-contact-details.png')}}" alt="Image 1">
                            </div>
                            <div class="form-group">
                                <input type="date" class="form-control text-grey" id="date_id" name="date" placeholder="Choose Date" required>
                            </div>
                            <div class="form-group">
                                <input type="time" class="form-control text-grey" id="time_id" name="time" placeholder="Choose Time" required>
                            </div>
                            <p class=" required mt-2">All the fields are required</p>
                            <div class="d-flex justify-content-center">
                                <button class="btn-7 text-light  text-center mt-1" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
