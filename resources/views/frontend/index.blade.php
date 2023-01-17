@extends('frontend.layout.master')
@section('content')
    <section class="header_home">
        <div class="layer_1 h-100">
            <div class="container h-100">
                <div class="d-flex flex-column justify-content-center h-100">
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
    </section>
    <section class="home-section-1">
        <div class="container">
            <div class="row py-5">
                <div class="col-md-6">
                    <h2 class="text-light"><span class=" text-seafoam-blue">Atlantis Revenue Cycle</span> Management, in
                        that case, helps in managing</h2>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-4 text-end"><img src="{{url('/public/frontend/assets/img/home/claim-icon.png')}}" alt=""></div>
                        <div class="col-md-4 text-center"><img src="{{url('/public/frontend/assets/img/home/payment-icon.png')}}" alt=""></div>
                        <div class="col-md-4"><img src="{{url('/public/frontend/assets/img/home/billing-icon.png')}}" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="home-section-2">
        <div class="container">
            <div class="row py-5">
                <div class="col-md-6">
                    <h2 class="text-blue">Who Are We?</h2>
                    <div class="py-4">
                        <p>In the business of healthcare, every day counts and
                            it’s difficult to maintain and sustain an efficient and positive
                            revenue cycle management. With speed, reliability, and innovation at the core of our company values, we ensure
                            your patients receive their healthcare in a smooth and quick
                            manner. This allows your practice to attract and retain more
                            satisfied patients who remain loyal to you.
                        </p>
                        <p> Through our highly experienced, personal, and forward-thinking
                            approach, we provide our clients with the best possible solutions
                            for improving productivity and efficiency to maximize profits.
                            The only viable way is to streamline operations so medical
                            professionals can analyze the situation and adjust accordingly
                            in order to improve patient experience, reduce operational
                            expenses and increase collections.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="{{url('/public/frontend/assets/img/home/section2img.png')}}" alt="">
                </div>
            </div>
        </div>

    </section>
    <section class="what_we_section py-5 mb-5">
        <div class="container">
            <div class="what_home_head">
                <h2 class="text-light">What We Do?</h2>
                <p class="text-light">When you are on the road to success, you need to have the right gear. With us, you're guaranteed to have the most qualified
                    workforce with the relevent skills.We have gathered an expert team to enable you to same time and money while driving growth.</p>
            </div>
            <div class="d-flex flex-wrap flex-row svg_process my-5">
                <div class="mx-md-3 what_service service_hd slide_1" onclick="active_service(1)">
                    <p class="headng mt-md-1 text-grey">Insurance Verification</p>
                </div>
                <div class="mx-2 mx-md-3 what_service service_hd slide_2" onclick="active_service(2)">
                    <p class="headng mt-md-1 text-grey">Billing</p>
                </div>
                <div class="mx-md-3 what_service service_hd slide_3" onclick="active_service(3)">
                    <p class="headng mt-md-1 text-grey">Claims & Denial Management</p>
                </div>
                <div class="mx-2 mx-md-3 what_service service_hd slide_4" onclick="active_service(4)">
                    <p class="headng mt-md-1 text-grey">Reporting and Analytics</p>
                </div>
            </div>
            <div class="detail_process">
                <div class="process-detail-contant text-light process_inactive slide_content_1">
                    <div class="row px-3">
                        <div class="col-md-6">
                            <div class="text_process_what_we">
                                <p class="text_light tag_what_we">
                                    Insurance Verification
                                </p>
                                <p class="text_light text_process_c mt-3">
                                    Inadequate and unclear insurance coverage information
                                    leads to denials which directly impacts the revenue flow
                                    for the healthcare professionals. Atlantis RCM has a
                                    team of professional industry experts to ensure eligibility
                                    and verification. Further, as part of our commitment
                                    to keeping track of any changes in your patient's insurance
                                    coverage, we verify insurance eligibility and benefits
                                    monthly and yearly to make sure the
                                    insurance plan covers the service you provide.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="what_we_img">
                                <img src="{{url('/public/frontend/assets/img/home/1-image-what-we-do.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="process-detail-contant text-light process_inactive slide_content_2">
                    <div class="row px-3">
                        <div class="col-md-6">
                            <div class="text_process_what_we">
                                <p class="text_light tag_what_we">
                                    Billing
                                </p>
                                <p class="text_light text_process_c mt-3">
                                    Complex billing solutions often overwhelm in house staff
                                    and affect the revenue cycle process. Our billing team
                                    manages the billing process so doctors can focus on patients,
                                    instead of administrative tasks like claims submission.
                                    We facilitate all aspects of the registration process,
                                    from establishing financial responsibility to checking
                                    in and out patients, billing compliance, preparing and
                                    sending claims, to generating patient statements.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="what_we_img">
                                <img src="{{url('/public/frontend/assets/img/home/1-image-what-we-do.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="process-detail-contant text-light process_inactive slide_content_3">
                    <div class="row px-3">
                        <div class="col-md-6">
                            <div class="text_process_what_we">
                                <p class="text_light tag_what_we">
                                    Claims & Denial Management
                                </p>
                                <p class="text_light text_process_c mt-3">
                                    Unpaid and delayed claims directly affect healthcare practices,
                                    whereas denials make the revenue process even slower and sometimes
                                    place an adverse effect on the overall practice. With our
                                    efficient denial management service, we reduce the claim
                                    errors and make the claim submission more easy. There
                                    is a timely disbursement of funds to ensure that there
                                    are no future denials, so that practices get paid more
                                    quickly and enjoy a good cash flow throughout the year.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="what_we_img">
                                <img src="{{url('/public/frontend/assets/img/home/1-image-what-we-do.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="process-detail-contant text-light process_inactive slide_content_4" >
                    <div class="row px-3">
                        <div class="col-md-6">
                            <div class="text_process_what_we">
                                <p class="text_light tag_what_we">
                                    Reporting and Analytics
                                </p>
                                <p class="text_light text_process_c mt-3">
                                    From patient scheduling, claim submission to denial management,
                                    our end-to-end RCM solutions address healthcare's core
                                    challenges and keep our clients informed. In addition
                                    to reporting and keeping our clients informed, Atlantis
                                    RCM provides a wide range of services, which reduces
                                    administrative pressures and medical billing errors.
                                    We track and follow up on unpaid or denied claims,
                                    and generate medical billing reports on those claims
                                    to help you determine your practice's health.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="what_we_img">
                                <img src="{{url('/public/frontend/assets/img/home/1-image-what-we-do.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="services-sec-home">
        <div class="container">
            <h3 class="h-card text-blue mt-5">Our Comprehensive Suite of Services</h3>
            <p class="five-p text-grey">Our RCM solutions relieve your staff of tasks that keep them on the phone or in front of the computer,
                which allows them to spend more time with patients. Atlantis' suite of Revenue Cycle Management
                solutions can remove barriers to growth and profitability.</p>
            <div class="container">
                <div class="grid">
                    <div class="row text-center mt-5">
                        <div class="col-md-6 col-lg-3 text-center">
                            <div class="card">
                                <img class="vector" src="{{url('/public/frontend/assets/img/home/vector-smart-object.png')}}" alt="Image 1">
                                <p class="text-grey text-center">Revenue Cycle Management</p>
                                <button class="button-card" style="margin-top: 0px;">Explore</button>
                                <div class="content">
                                    <p>From initial diagnosis to eventual payment & everything in between.</p>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-6 col-lg-3">
                            <div class="card">
                                <img class="vector" src="{{url('/public/frontend/assets/img/home/vector-smart-object1.png')}}" alt="Image 2">
                                <p class="text-grey text-center">Medical Billing</p>
                                <button class="button-card">Explore</button>
                                <div class="content">
                                    <p>Reduce denials and fix revenue leaks, a hassle free billing process.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="card">
                                <img class="vector" src="{{url('/public/frontend/assets/img/home/vector-smart-object1.png')}}" alt="Image 2">
                                <p class=" text-grey text-center">Credentialing</p>
                                <button class="button-card">Explore</button>
                                <div class="content">
                                    <p>Up-to-date credentials every time to let you focus more on patient care.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="card">
                                <img class="vector " src="{{url('/public/frontend/assets/img/home/vector-smart-object3.png')}}" alt="Image 4">
                                <p class=" text-grey text-center">Practice Management</p>
                                <button class="button-card ">Explore</button>
                                <div class="content">
                                    <p>Improve service quality and optimize administrative workflows.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-md-6 col-lg-3">
                            <div class="card text justify-content-center">
                                <img class="vector" src="{{url('/public/frontend/assets/img/home/vector-smart-object4.png')}}" alt="Image 5">
                                <p class="text-grey text-center">Telehealth</p>
                                <button class="button-card">Explore</button>
                                <div class="content">
                                    <p>Activity, & records in place for a better patient experience.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="card">
                                <img class="vector" src="{{url('/public/frontend/assets/img/home/vector-smart-object5.png')}}" alt="Image 6">
                                <p class="text-grey text-center">E-Health Records</p>
                                <button class="button-card">Explore</button>
                                <div class="content">
                                    <p>Enhanced efficiency by clean and well managed health records. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="card">
                                <img class="vector" src="{{url('/public/frontend/assets/img/home/vector-smart-object6.png')}}" alt="Image 7">
                                <p class="text-grey text-center">Healthcare Analytics</p>
                                <button class="button-card">Explore</button>
                                <div class="content">
                                    <p>Manage schedules and track patient satisfaction and outcomes. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="card">
                                <img class="vector" src="{{url('/public/frontend/assets/img/home/vector-smart-object7.png')}}" alt="Image 8">
                                <p class="text-grey text-center">Workforce Extension</p>
                                <button class="button-card">Explore</button>
                                <div class="content">
                                    <p>Connect your business with people that help you grow it.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="corresponding_section py-5 mt-5">
        <div class="container">
            <div class="what_home_head">
                <h2 class="text-light">Corresponding benefits</h2>
                <p class="text-light">Revenue cycle management allows you to cut costs and increase revenue
                    by streamlining your billing processes. It helps you to better manage patient records and
                    automate your billing process, which can save time, money, and resources.
                </p>
            </div>
            <div class="d-flex flex-wrap flex-row svg_process my-5">
                <div class="mx-md-3 what_service text-center service_hd slide_1" onclick="active_service(1)">
                    <div class="corrsponding_icons">
                        <img src="{{url('/public/frontend/assets/img/home/icon-reduce-operational-expenses.png')}}" alt="">
                    </div>
                    <p class="headng mt-md-1 text-grey"> Reduce Operational expenses</p>
                </div>
                <div class="mx-2 mx-md-3 what_service text-center service_hd slide_2" onclick="active_service(2)">
                    <div class="corrsponding_icons pt-3">
                        <img src="{{url('/public/frontend/assets/img/home/icon-ensure-transparency.png')}}" alt="">
                    </div>
                    <p class="headng mt-md-1 text-grey">Ensure Transparency</p>
                </div>
                <div class="mx-md-3 what_service text-center service_hd slide_3" onclick="active_service(3)">
                    <div class="corrsponding_icons">
                        <img src="{{url('/public/frontend/assets/img/home/vector-smart-object11.png')}}" alt="">
                    </div>
                    <p class="headng mt-md-1 text-grey">Enhance Customer Experience </p>
                </div>
                <div class="mx-2 mx-md-3 what_service text-center service_hd slide_4" onclick="active_service(4)">
                    <div class="corrsponding_icons">
                        <img src="{{url('/public/frontend/assets/img/home/vector-smart-objectq.png')}}" alt="">
                    </div>
                    <p class="headng mt-md-1 text-grey">Improved Revenue</p>
                </div>
            </div>
            <div class="detail_process">
                <div class="process-detail-contant text-light process_inactive slide_content_1">
                    <div class="row px-3">
                        <div class="col-lg-6">
                            <div class="what_we_img">
                                <img src="{{url('/public/frontend/assets/img/home/img_operational_cost.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="text_process_what_we py-5">
                                <p class="text_light tag_what_we">
                                    Reduce Operational expenses
                                </p>
                                <p class="text_light text_crrspnding_blck mt-3">
                                    Atlantis is the most sophisticated revenue cycle management solution in the industry. Our platform helps healthcare organizations reduce operational expenses, improve patient experience, and increase revenue by automating workflows.
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="process-detail-contant text-light process_inactive slide_content_2">
                    <div class="row px-3">
                        <div class="col-lg-6">
                            <div class="what_we_img">
                                <img src="{{url('/public/frontend/assets/img/home/image-ensure-transparency.png')}}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="text_process_what_we py-5">
                                <p class="text_light tag_what_we">
                                    Ensure Transparency
                                </p>
                                <p class="text_light text_crrspnding_blck mt-3">
                                    Atlantis provides a full suite of revenue cycle management services for healthcare providers, from billing and collection to data analytics and patient financial counseling. We help you ensure transparency across your entire organization, so you can focus on what matters most: delivering the highest quality care to your patients.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="process-detail-contant text-light process_inactive slide_content_3">
                    <div class="row px-3">
                        <div class="col-lg-6">
                            <div class="what_we_img">
                                <img src="{{url('/public/frontend/assets/img/home/img_enhance_customer_experience.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="text_process_what_we py-5">
                                <p class="text_light tag_what_we">
                                    Enhance Customer Experience
                                </p>
                                <p class="text_light text_crrspnding_blck mt-3">
                                    Atlantis is the most sophisticated revenue cycle management solution in the industry. Our platform helps healthcare organizations reduce operational expenses, improve patient experience, and increase revenue by automating workflows.


                                </p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="process-detail-contant text-light process_inactive slide_content_4" >
                    <div class="row px-3">
                        <div class="col-lg-6">
                            <div class="what_we_img">
                                <img src="{{url('/public/frontend/assets/img/home/img_improved_revenue.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="text_process_what_we py-5">
                                <p class="text_light tag_what_we">
                                    Improved Revenue
                                </p>
                                <p class="text_light text_crrspnding_blck mt-3">
                                    Atlantis' revenue cycle management provides a flexible and powerful solution for healthcare providers to improve their revenue. Our services are designed to increase collections on a per-claim basis, as well as maximize total receivables by reducing bad debt.

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="Connect-Us py-5">
        <div class="container">
            <div>
                <h2 class="Connect-head text-blue ">Connect with Us</h2>
                <p class="Connect-para text-grey">Our mission is to eliminate repetitive administrative tasks in healthcare organizations and individual practices so that
                    they can exceed revenue and growth. </p>
                <div class="row" style="margin-top: 75px;">
                    <div class="col-6" style="padding: 0">
                        <img class="w-100" src="{{url('/public/frontend/assets/img/home/0-6-signup-section-doctor-image.png')}}" alt="image" >
                    </div>
                    <div class="col-5" style="padding: 0">
                        <form class="seven-form" style="    margin-left:0">
                            <h3 class=" app-hea text-center">Make An Appointment</h3>
                            <p class=" foam-para text-center">Fill the form and send me</p>
                            <div class="form-group">

                                <input type="text" class="form-control text-grey" id="name" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control text-grey" id="name" placeholder="Choose Services ">
                                <img class="seven-icon" src="{{url('/public/frontend/assets/img/home/0-6-icon-choose-service.png')}}" alt="Image 1">
                            </div>
                            <div class="form-group">

                                <input type="text" class="form-control text-grey" id="contact-details" placeholder="Contact Details">
                                <img class="seven-icon" src="{{url('/public/frontend/assets/img/home/0-6-icon-contact-details.png')}}" alt="Image 1">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control text-grey" id="date" placeholder="Choose Date">
                                <img class="seven-icon" src="{{url('/public/frontend/assets/img/home/0-6-icon-choose-date.png')}}" alt="Image 1">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control text-grey" id="time"  placeholder="Choose Time">
                                <img class="seven-icon" src="{{url('/public/frontend/assets/img/home/0-6-icon-choose-time.png')}}" alt="Image 1">
                            </div>
                            <p class=" required mt-2">All the fields are required</p>
                            <button class="btn-7 text-light  text-center mt-1" type="button">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="home-testimonial-section pb-5">
        <div class="container">
            <div>
                <h2 class="text-light pt-5">Why Ours Customers Loves Us</h2>
                <p class="text-light pt-3 fs-5">With more than a decade of industry-leading experience, Atlantis has been
                    continually recognized for exceptional performance, customer service, employee training, and stringent
                    cybersecurity standards. However, the greatest recognition we receive is the satisfaction of our
                    customers.</p>
            </div>
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button id="slide_button" type="button"  data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                    <button id="slide_button" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                    <button id="slide_button" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    <button id="slide_button" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                            aria-label="Slide 4"></button>
                </div>
                <div class="carousel-inner py-5">
                    <div class="carousel-item active">
                        <div class="main_testimonial">
                            <div class="testimonial_slide">
                                <div class="testimonial_content"><a href="#"><p>“We have been working with Atlantis RCM for
                                            a year now
                                            and we couldn't be happier with the results. They have helped us improve our
                                            collection process, which resulted in a 20% increase in our cash flow”.</p></a>
                                </div>
                                <div class="testemonial_user"><img src="{{url('/public/frontend/assets/img/home/img-0-7-v-1.png')}}" alt="">
                                    <span class="text-white">Alina John</span>
                                </div>
                            </div>
                            <div class="testimonial_slide">
                                <div class="testimonial_content"><a href="#"><p>The team from Atlantis RCm did a
                                            great job generating high-quality backlinks for our blog.</p></a>
                                </div>
                                <div class="testemonial_user"><img src="{{url('/public/frontend/assets/img/home/img-0-8-v-2.png')}}" alt="">
                                    <span class="text-white">Mark Staris</span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="main_testimonial">
                            <div class="testimonial_slide">
                                <div class="testimonial_content"><a href="#"><p>“We have been working with Atlantis RCM for
                                            a year now
                                            and we couldn't be happier with the results. They have helped us improve our
                                            collection process, which resulted in a 20% increase in our cash flow”.</p></a>
                                </div>
                                <div class="testemonial_user"><img src="{{url('/public/frontend/assets/img/home/img-0-7-v-1.png')}}" alt="">
                                    <span class="text-white">Alina John</span>
                                </div>
                            </div>
                            <div class="testimonial_slide">
                                <div class="testimonial_content"><a href="#"><p>The team from Atlantis RCm did a
                                            great job generating high-quality backlinks for our blog.</p></a>
                                </div>
                                <div class="testemonial_user"><img src="{{url('/public/frontend/assets/img/home/img-0-8-v-2.png')}}" alt="">
                                    <span class="text-white">Mark Staris</span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="main_testimonial">
                            <div class="testimonial_slide">
                                <div class="testimonial_content"><a href="#"><p>“We have been working with Atlantis RCM for
                                            a year now
                                            and we couldn't be happier with the results. They have helped us improve our
                                            collection process, which resulted in a 20% increase in our cash flow”.</p></a>
                                </div>
                                <div class="testemonial_user"><img src="{{url('/public/frontend/assets/img/home/img-0-7-v-1.png')}}" alt="">
                                    <span class="text-white">Alina John</span>
                                </div>
                            </div>
                            <div class="testimonial_slide">
                                <div class="testimonial_content"><a href="#"><p>The team from Atlantis RCm did a
                                            great job generating high-quality backlinks for our blog.</p></a>
                                </div>
                                <div class="testemonial_user"><img src="{{url('/public/frontend/assets/img/home/img-0-8-v-2.png')}}" alt="">
                                    <span class="text-white">Mark Staris</span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="main_testimonial">
                            <div class="testimonial_slide">
                                <div class="testimonial_content"><a href="#"><p>“We have been working with Atlantis RCM for
                                            a year now
                                            and we couldn't be happier with the results. They have helped us improve our
                                            collection process, which resulted in a 20% increase in our cash flow”.</p></a>
                                </div>
                                <div class="testemonial_user"><img src="{{url('/public/frontend/assets/img/home/img-0-7-v-1.png')}}" alt="">
                                    <span class="text-white">Alina John</span>
                                </div>
                            </div>
                            <div class="testimonial_slide">
                                <div class="testimonial_content"><a href="#"><p>The team from Atlantis RCm did a
                                            great job generating high-quality backlinks for our blog.</p></a>
                                </div>
                                <div class="testemonial_user"><img src="{{url('/public/frontend/assets/img/home/img-0-8-v-2.png')}}" alt="">
                                    <span class="text-white">Mark Staris</span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            </div>
    </section>
    <section class="Recent-News my-5">
        <div class="container">
            <h2 class=" text-blue mb-5">Recent News</h2>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="recent_news_block">
                        <img class="recent_news_img" src="{{url('/public/frontend/assets/img/home/doctor-working-hospital-healthcare-medical-service.png')}}" alt="image1" >

                        <div class="overlay d-flex align-items-center justify-content-center">
                            <button type="button" class="btn-card btn-outline">Read More</button>
                        </div>
                    </div>
                    <p class=" eight-img-para text-grey text-center">Kaiser Health News Insurance 2022</p>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="recent_news_block">
                        <img class="recent_news_img" src="{{url('/public/frontend/assets/img/home/employees-closeup-young-nurse-service.png')}}" alt="image2">

                        <div class="overlay d-flex align-items-center justify-content-center">
                            <button type="button" class="btn-card btn-outline">Read More</button>
                        </div>
                    </div>
                    <p class=" eight-img-para text-grey text-center mt-3">Take Command Health Blog</p>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="recent_news_block">
                        <img class="recent_news_img" src="{{url('/public/frontend/assets/img/home/doctor-working-hospital-use-calculator-healthcare-medical-concept-copy.png')}}" alt="image3">

                        <div class="overlay d-flex align-items-center justify-content-center">
                            <button type="button" class="btn-card btn-outline">Read More</button>
                        </div>
                    </div>
                    <p class=" eight-img-para text-grey text-center mt-3">Healthcare Economist</p>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="recent_news_block">
                        <img class="recent_news_img" src="{{url('/public/frontend/assets/img/home/handsome-doctor-portrait-background.png')}}" alt="image4">
                        <div class="overlay d-flex align-items-center justify-content-center">
                            <button type="button" class="btn-card btn-outline">Read More</button>
                        </div>
                    </div>
                    <p class=" eight-img-para text-grey text-center mt-3">We engaged Atlantis  2022</p>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="recent_news_block">
                        <img class="recent_news_img" src="{{url('/public/frontend/assets/img/home/nurse-doctor-aid-background-cardiologist-care-exam.png')}}" alt="image5">

                        <div class="overlay d-flex align-items-center justify-content-center">
                            <button type="button" class="btn-card btn-outline">Read More</button>
                        </div>
                    </div>
                    <p class=" eight-img-para text-grey text-center mt-3">Medical software development needs</p>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="recent_news_block">
                        <img class="recent_news_img" src="{{url('/public/frontend/assets/img/home/woman-doctor-wearing-lab-coat-with-stethoscope-isolated.png')}}" alt="image6">
                        <div class="overlay d-flex align-items-center justify-content-center">
                            <button type="button" class="btn-card btn-outline">Read More</button>
                        </div>
                    </div>
                    <p class=" eight-img-para text-grey text-center mt-3">Contribution has helped us 2022</p>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('footer_script')
    <script>
        let current_process = 1;
        function next_process() {
            let unactive;
            if(current_process === 1){
                unactive = 4;
            }else {
                unactive = current_process-1;
            }
            $('.svg_process').find('.slide_'+unactive).removeClass('process_active');
            $('.detail_process').find('.slide_content_'+unactive).removeClass('process_active');
            $('.detail_process').find('.slide_content_'+unactive).addClass('process_inactive');

            $('.svg_process').find('.slide_'+current_process).toggleClass('process_active');
            $('.detail_process').find('.slide_content_'+current_process).addClass('process_active');
            $('.detail_process').find('.slide_content_'+current_process).removeClass('process_inactive');
            // time interval sequences
            if (current_process === 4) {
                current_process = 1;
            } else {
                current_process ++;
            }
        }
        $(document).ready(function () {
            next_process();
        });
        setInterval(function () {
            next_process();
        }, 10000)
        function active_service(e){
            $('.service_hd').removeClass('process_active');
            $('.process-detail-contant').removeClass('process_active');
            $('.process-detail-contant').addClass('process_inactive');
            current_process = e;
            next_process()
        }
    </script>
@endsection
