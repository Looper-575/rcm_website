@extends('frontend.layout.master')
@section('content')

    <section class="header_home header_telehealth">
        <div class="h-100" id="layer_1">
            <div class="container h-100">
                <div class="d-flex flex-column justify-content-center h-100">
                    <div class="header_content">
                        <h1 class="text-light">We Use Technology
                            <h2 class="fw-bold text-light">To Improve Healthcare Services</h2></h1>
                        <div class="hdr_btn my-5 strtBtn_home">
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

    {{--***************************************Telehealth_Sec_services home*******************************--}}
    <section class="Scnd-sec-PE py-5">
        <div class="container">
            <div class="row d-flex justify-content-center ">
                <div class="col-md-4 my-2 my-md-0">
                    <div class="card Scnd-sec-PE-card">
                        <div class="PE-2-asset d-flex align-items-center justify-content-center">
                            <img src="{{url('public/frontend/assets/img/patient_experience/vector-smart-object-expereince1.png')}}"
                                 class="PE-2-img-active" alt="Image 1">
                            <img src="{{url('public/frontend/assets/img/patient_experience/icn_perfection@3x copy.png')}}"
                                 class="PE-2-img-inactive" alt="Image 2">
                        </div>

                        <div class="card-body">
                            <h3 class="Scnd-sec-PE-card-hea text-center text-light">Prompt Payment</h3>
                            <p class="Scnd-sec-PE-card-para text-center text-light m-0">Implement a patient engagement
                                strategy that will encourage patients
                                to pay on time.
                            </p>
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
                            <h3 class="Scnd-sec-PE-card-hea text-center text-light">Regular Audits</h3>
                            <p class="Scnd-sec-PE-card-para text-center text-light m-0">Keeping your past-due accounts
                                up to
                                date will make them easier to
                                collect in the future.
                            </p>
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
                            <h3 class="Scnd-sec-PE-card-hea text-center text-light">Patient Interaction</h3>
                            <p class="Scnd-sec-PE-card-para text-center text-light m-0">Manages patient interactions,
                                from scheduling to billing, to ensure
                                successful revenue cycles.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{--***************************************Telehealth_Sec_overview*******************************--}}

    <section class="thrd-sec-PE py-5">
        <div class="container">
            <div class="row py-md-4">
                <div class="col-md-6 col-sm-12">
                    <div class="thrd-sec-PE-data">
                        <h3 class="text-blue thrd-sec-PE-hea">Overview about Telehealth</h3>
                        <p class="text-grey thrd-sec-PE-para pt-md-3">Atlantis RCM is a leading provider of Telehealth
                            solutions and services to
                            healthcare organisations and providers.</p>
                        <p class="text-grey thrd-sec-PE-para">We are committed to helping you achieve your objectives,
                            whether that’s
                            increasing patient satisfaction and loyalty, improving clinical outcomes or reducing
                            costs.</p>
                        <p class="text-grey thrd-sec-PE-para">We provide a range of telehealth solutions including
                            medical advice phone
                            services, virtual clinics, video consultations and integrated care management solutions.</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <img src="{{url('public/frontend/assets/img/telehealth/telehealth_overview.png')}}" alt="image"
                         class="thrd-sec-PE-img">
                </div>
            </div>
        </div>
    </section>

    {{--    ***************************************Telehealth_Sec_How_Technology_improves**********************--}}

    <section class="patient_exp_proactive py-5">
        <div class="container">
            <div class="proactive_title">
                <h2 class="text-white pt-md-4">How Technology Improves Healthcare Services?</h2>
                <p class="text-white">Our bespoke TeleHealth solutions are tailored to meet your needs and offer
                    exceptional value for money compared to traditional
                    face-to-face consultations.</p>
            </div>
            <div class="row  pt-xl-3">
                <div class="col-12 col-md-6">
                    <div class="pro_active_card py-4">
                        <ul class="nav nav-tabs pro_active" id="myTab" role="tablist">
                            <li class="nav-item pb-xl-4 pb-md-4 pb-3 position-relative" role="presentation">
                                <button class="pro_active_button nav-link active" id="home-tab" data-bs-toggle="tab"
                                        data-bs-target="#home"
                                        type="button" role="tab" aria-controls="home" aria-selected="true">Email Alerts
                                </button>
                                <img class="pE_pro_arr_active"
                                     src="{{url('public/frontend/assets/img/patient_experience/polygon-1.png')}}">

                            </li>
                            <li class="nav-item  pb-xl-4 pb-md-4 pb-3 position-relative" role="presentation">
                                <button class="nav-link pro_active_button" id="Primary-tab" data-bs-toggle="tab"
                                        data-bs-target="#Primary"
                                        type="button" role="tab" aria-controls="Primary" aria-selected="false">Text
                                    Messaging
                                </button>
                                <img class="pE_pro_arr_active"
                                     src="{{url('public/frontend/assets/img/patient_experience/polygon-1.png')}}">

                            </li>
                            <li class="nav-item  pb-xl-4 pb-md-4 pb-3 position-relative" role="presentation">
                                <button class="nav-link pro_active_button" id="CAQH-tab" data-bs-toggle="tab"
                                        data-bs-target="#CAQH"
                                        type="button" role="tab" aria-controls="CAQH" aria-selected="false">Social Media
                                    Channels
                                </button>
                                <img class="pE_pro_arr_active"
                                     src="{{url('public/frontend/assets/img/patient_experience/polygon-1.png')}}">

                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-6 pt-5 pt-md-0">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="">
                                <img class="img-fluid"
                                     src="{{url('public/frontend/assets/img/telehealth/slider_email_alert.jpg')}}">
                                <p class="text-white pt-md-4">Patients eligible for our email alerts receive information
                                    about upcoming appointments and other important updates every week. This method is
                                    also used to remind patients about upcoming appointments when they have not
                                    responded within 24-36 hours of being contacted via phone or text message.</p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Primary" role="tabpanel" aria-labelledby="Primary-tab">
                            <div class="">
                                <img class="img-fluid"
                                     src="{{url('public/frontend/assets/img/telehealth/slider_texting.jpg')}}">
                                <p class="text-white pt-xl-4">Our platform allows you to manage your text messages from
                                    a single location, allowing you to send automated messages and reminders about
                                    upcoming appointments, and more. We can also help you create surveys or other
                                    questions that are sent out to patients through the text messaging platform.

                                </p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="CAQH" role="tabpanel" aria-labelledby="CAQH-tab">
                            <div class="">
                                <img class="img-fluid"
                                     src="{{url('public/frontend/assets/img/telehealth/slider_social_media.jpg')}}">
                                <p class="text-white pt-xl-4">Our team of experts will help you set up a Facebook
                                    page,Twitter,
                                    instagram, or any other social media channel that works best for your
                                    needs, and make sure it’s up-to-date with relevant content on a
                                    regular basis.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--    ***********************************Telehealth_Sec_Benefits**********************************--}}

    <section class="med_bil_sec5  py-5">
        <div class="container">
            <div class="what_home_head">
                <h2 class="text-blue">Benefits</h2>
                <p class="text-grey">A telehealth solution allows patients to receive care remotely, improving
                    convenience, reducing transportation costs, and improving
                    patient satisfaction.</p>
            </div>
            <div class="d-flex flex-wrap flex-row svg_process my-5">
                <div class="mx-md-3 what_service text-center service_hd slide_1" onclick="active_service(1)">
                    <div class="corrsponding_icons">
                        <img src="{{url('public/frontend/assets/img/medical_billing/icn_credientialing_management.png')}}"
                             alt="">
                    </div>
                    <p class="headng mt-md-1 text-grey">Appointment Management</p>
                </div>
                <div class="mx-2 mx-md-3 what_service text-center service_hd slide_2" onclick="active_service(2)">
                    <div class="corrsponding_icons pt-3">
                        <img src="{{url('public/frontend/assets/img/medical_billing/icn_uptodate_credientials.png')}}"
                             alt="">
                    </div>
                    <p class="headng mt-md-1 text-grey">Patient Reminders</p>
                </div>
                <div class="mx-md-3 what_service text-center service_hd slide_3" onclick="active_service(3)">
                    <div class="corrsponding_icons">
                        <img src="{{url('public/frontend/assets/img/medical_billing/icn_verify_credientials.png')}}"
                             alt="">
                    </div>
                    <p class="headng mt-md-1 text-grey">Safe in Pandemic Situations </p>
                </div>
                <div class="mx-2 mx-md-3 what_service text-center service_hd slide_4" onclick="active_service(4)">
                    <div class="corrsponding_icons">
                        <img src="{{url('public/frontend/assets/img/medical_billing/icn_completing_applications.png')}}"
                             alt="">
                    </div>
                    <p class="headng mt-md-1 text-grey">Easily Accessible</p>
                </div>
            </div>
            <div class="detail_process">
                <div class="process-detail-contant process_inactive text-light slide_content_1">
                    <div class="row px-3">
                        <div class="col-lg-6">
                            <div class="what_we_img">
                                <img src="{{url('public/frontend/assets/img/telehealth/section4/slider_appointment_management.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="text_process_what_we py-5">
                                <p class="text-grey tag_what_we">Appointment Management</p>
                                <p class="text-grey text_crrspnding_blck mt-3">
                                    When you sign up with us, you will be given a dashboard that allows you to manage your appointments easily and efficiently. Our calendar system automatically adds future appointments to your calendar as soon as they are scheduled.
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="process-detail-contant process_inactive text-light slide_content_2">
                    <div class="row px-3">
                        <div class="col-lg-6">
                            <div class="what_we_img">
                                <img src="{{url('public/frontend/assets/img/telehealth/section4/slider_patient_remainder.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="text_process_what_we py-5">
                                <p class="text-grey tag_what_we">Patient Remainders</p>
                                <p class="text-grey text_crrspnding_blck mt-3">
                                    You can set up appointment types, add patients, and even set up reminders for them.
                                    You will receive notification immediately as soon as an appointment is cancelled or
                                    rescheduled by one of your patients.</p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="process-detail-contant process_inactive text-light slide_content_3">
                    <div class="row px-3">
                        <div class="col-lg-6">
                            <div class="what_we_img">
                                <img src="{{url('public/frontend/assets/img/telehealth/section4/slider_safe_in_pandemic_solution.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="text_process_what_we py-5">
                                <p class="text-grey tag_what_we">Safe in Pandemic Situations</p>
                                <p class="text-grey text_crrspnding_blck mt-3">
                                    In pandemic situations, healthcare organisations and providers can use Atlantis CRM's Telehealth. When there is a high risk of infection, we've developed a platform that makes it easy to deliver health services remotely.
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="process-detail-contant process_inactive text-light slide_content_4">
                    <div class="row px-3">
                        <div class="col-lg-6">
                            <div class="what_we_img">
                                <img src="{{url('public/frontend/assets/img/telehealth/section4/slider_easily_accessible.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="text_process_what_we py-5">
                                <p class="text-grey tag_what_we">Easily accessible to all</p>
                                <p class="text-grey text_crrspnding_blck mt-3">
                                    Our platform is available to everyone, not just those who have access to healthcare facilities. It helps people stay safe and healthy during an outbreak, as well as during normal operations.
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--***************************Telehealth_Sec_customers_love*************************************-->
    <section class="home-testimonial-section py-5">
        <div class="container">
            <div class="cus_love-title">
                <h2 class="text-light pt-5">Why Ours Customers Loves Us</h2>
                <p class="text-light pt-3 fs-5">   With more than a decade of industry-leading experience, Atlantis has been continually recognized for exceptional performance, customer service, employee training, and stringent cybersecurity standards. However, the greatest recognition we receive is the satisfaction of our customers.</p>
            </div>
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner py-5">
                    <div class="carousel-item active py-5">
                        <div class="cus_love_main_testimonial">
                            <div class="Cus_love_testimonial_slide">
                                <div class="Cus_love_testimonial_content">
                                    <a href="#"><p>"TeleHealth by Atlantis is the best thing that has ever happened to
                                            my practice. I was able to manage my practice more promptly and respond
                                            every time my patient needed my help. The team is so responsive and helpful,
                                            and they really know their stuff. I could not recommend them more
                                            highly."</p></a>
                                    <div class="Cus_love_testimonial_user">
                                        <img src="{{url('public/frontend/assets/img/patient_experience/img-0-7-v-1.png')}}" alt="">
                                        <span class="text-white">Dr. JonesDermatologist</span>
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

    {{--********************************Telehealth_Sec_Take_Advantage*************************************--}}

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



@section('footer_script')
    <script>
        let current_process = 1;
        function next_process() {
            let unactive;
            if(current_process === 1){
                unactive = 5;
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
            if (current_process === 5) {
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
