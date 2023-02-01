
@extends('frontend.layout.master')
@section('content')

    <section class="header_home header_page-sol-tailored">
        <div class="h-100" id="layer_1">
            <div class="container h-100">
                <div class="d-flex flex-column justify-content-center h-100">
                    <div class="header_content">

                        <h1 class="text-light Sec1-MB-hea1  fs-2 lh-base">Contact a Atlantis RCM Expert<br>
                            to learn how we serve<br>
                            Nearly Every Specialty <br>
                        </h1>
                        <div class="hdr_btn d-flex">
                            <button class="btn strtBtn1 mt-2">
                                Get Started
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- #####################################    Page-Solution-Tailored-to-your-specialty  #############################-->
    <!-- #####################################    second-section-Page-Solution-Tailored-to-your-specialty  #############################-->

    <div class="scnd-sec-taxanmy py-5">
        <div class="container">
            <h3 class="text-center text-light">CUSTOM SOLUTIONS FOR YOUR SPECIALTY</h3>
            <p class="text-center text-light pt-4 pt-lg-2">Your specialty has unique needs for medical billing, practice management, and EHR solutions. We exceed those needs by helping you optimize
                your practice performance — financial, clinical and patient — through our integrated cloud-based solutions.</p>
        </div>
    </div>

    <!-- #####################################    third-sectionPage-Solution-Tailored-to-your-specialty  #############################-->

    <section class="thrd-sec-PE py-xl-5 py-3">
        <div class="container">
            <div class=" dflex row ">
                <div class="col-12 col-md-6 col-sm-12  thrd-sec-PE-data pt-xl-3 pt-lg-5">
                    <h3 class="thrd-sec-PE-hea text-blue fs-4 pt-xl-5">Real-Time Information To Deliver
                        Actionable Insights!</h3>
                    <p class="thrd-sec-PE-para text-grey pt-3">Atlantis RCM is a specialized, tailored, and flexible service that caters specifically
                        to your needs.
                    </p>
                    <p class="thrd-sec-PE-para text-grey">
                        We understand that the needs of each specialty are unique,
                        and we want to make sure that you get the best possible service
                        for your specialty. We've worked hard to create a system that will
                        help us streamline your revenue cycle process, so that you can get
                        the best possible results in the shortest amount of time.
                    </p>
                </div>
                <div class="col-12 col-md-6 col-sm-12">
                    <img src="{{url('public/frontend/assets/img/pagesolutions-tailored/businessman-hand-touch-dna-graph-biochemical-.png')}}" alt=image class=" thrd-sec-PE-img">
                </div>
            </div>
        </div>
    </section>
    <!-- #####################################   fourth-section-cards-Page-Solution-Tailored-to-your-specialty  #############################-->
    <section class="services">
        <div class="container">
            <div class="grid ">
                <div class="row text-center mt-lg-5 pt-md-5 py-4 py-lg-0 ">
                    <div class="col-lg-3 col-sm-12 col-md-6 text-center py-4 py-lg-0">
                        <div class=" card  d-flex flex-column justify-content-center align-items-center mx-auto  card-tailored">
                            <img class="vector-tailored" src="{{url('public/frontend/assets/img/taxanomy-about-us/general-surgery-icon.png')}}"  alt="Image 1">
                            <p class="text-grey text-center pt-4">Internet Medicine</p>
                            <div class="content">
                                <p class="text-center">We built our solution to provide effective care with minimal administrative burden.</p>
                                <button class="button-cards" ><a href="">Explore</a></button>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-3 col-sm-6 col-md-6 pt-md-4 pt-lg-0 ">
                        <div class="card justify-content-center d-flex flex-column  align-items-center mx-auto card-tailored">
                            <img class="vector-tailored"  src="{{url('public/frontend/assets/img/taxanomy-about-us/general-surgery-icon.png')}}" alt="Image 2">
                            <p class="text-grey text-center pt-4">General Surgery</p>
                            <div class="content">
                                <p class="text-center">General surgeons need access to integrated patient information, labs, and imaging.</p>
                                <button class="button-cards" >Explore</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-6  pt-md-4 pt-lg-0 py-4 py-lg-0">
                        <div class="card justify-content-center d-flex flex-column  align-items-center mx-auto card-tailored">
                            <img class="vector-tailored"  src="{{url('public/frontend/assets/img/pagesolutions-tailored/gastro-icon.png')}}" alt="Image 2">
                            <p class=" text-grey text-center pt-4">Gastroenterology</p>
                            <div class="content">
                                <p class="text-center">We developed a comprehensive solution to make your practice more efficient.</p>
                                <button class="button-cards" >Explore</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-6 pt-md-4 pt-lg-0 ">
                        <div class="card justify-content-center d-flex flex-column  align-items-center mx-auto card-tailored">
                            <img class="vector-tailored "  src="{{url('public/frontend/assets/img/pagesolutions-tailored/neurology-icon.png')}}"  alt="Image 4">
                            <p class=" text-grey text-center pt-4">Neurology</p>
                            <div class="content">
                                <p class="text-center">Our services assist neurologists both in their consulting and primary care roles.</p>
                                <button class="button-cards" >Explore</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-lg-5  ">
                    <div class="col-lg-3 col-sm-6 col-md-6 pt-md-4 pt-lg-0">
                        <div class="card text justify-content-center d-flex flex-column  align-items-center mx-auto card-tailored">
                            <img class="vector-tailored"  src="{{url('public/frontend/assets/img/pagesolutions-tailored/pain-management-icon.png')}}" alt="Image 5">
                            <p class="text-grey text-center pt-4">Pain Management </p>
                            <div class="content">
                                <p class="text-center">We enable practices to provide greater service and flexibility through PXM.</p>
                                <button class="button-cards" >Explore</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-6 py-4 py-lg-0 pt-md-4">
                        <div class="card  justify-content-center d-flex flex-column  align-items-center mx-auto card-tailored">
                            <img class="vector-tailored"  src="{{url('public/frontend/assets/img/pagesolutions-tailored/orthopedics-icon.png')}}" alt="Image 6">
                            <p class="text-grey text-center pt-4">Orthopedics</p>
                            <div class="content">
                                <p class="text-center">US's orthopedic practices rely on Atlantis RCM's long term and profitable solutions. </p>
                                <button class="button-cards" >Explore</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6  col-md-6 pt-md-4 pt-lg-0">
                        <div class="card justify-content-center d-flex flex-column  align-items-center mx-auto card-tailored ">
                            <img class="vector-tailored"  src="{{url('public/frontend/assets/img/pagesolutions-tailored/allergy-icon.png')}}" alt="Image 7">
                            <p class="text-grey text-center pt-4">Allergy/Immunology</p>
                            <div class="content">
                                <p class="text-center">We make patch test results easy to reference, unlike traditional solutions. </p>
                                <button class="button-cards" >Explore</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-6 pt-md-4 pt-lg-0 py-4 py-lg-0 ">
                        <div class="card justify-content-center d-flex flex-column  align-items-center mx-auto card-tailored">
                            <img class="vector-tailored"  src="{{url('public/frontend/assets/img/pagesolutions-tailored/cardiology-icon.png')}}" alt="Image 8">
                            <p class="text-grey text-center pt-4">Cardiology</p>
                            <div class="content">
                                <p class="text-center">Customized EHR, practice management, and medical billing solutions for cardiology.</p>
                                <button class="button-cards" >Explore</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-lg-5  ">
                <div class="col-lg-3 col-sm-6 col-md-6 pt-md-4 pt-lg-0">
                    <div class="card text justify-content-center d-flex flex-column  align-items-center mx-auto card-tailored">
                        <img class="vector-tailored"  src="{{url('public/frontend/assets/img/pagesolutions-tailored/chiropractic-icon.png')}}" alt="Image 5">
                        <p class="text-grey text-center pt-4">Chiropractic</p>
                        <div class="content">
                            <p class="text-center">With a high copay ratio, we designed our solution to be flexible and profitable.</p>
                            <button class="button-cards" >Explore</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-6 py-4 py-lg-0 pt-md-4">
                    <div class="card  justify-content-center d-flex flex-column  align-items-center mx-auto card-tailored">
                        <img class="vector-tailored"  src="{{url('public/frontend/assets/img/pagesolutions-tailored/endocrinology-icon.png')}}" alt="Image 6">
                        <p class="text-grey text-center pt-4">Endocrinology </p>
                        <div class="content">
                            <p class="text-center">Scalable endocrinology practice management, EHR and billing solutions. </p>
                            <button class="button-cards" >Explore</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-6 pt-md-4 pt-lg-0">
                    <div class="card justify-content-center d-flex flex-column  align-items-center mx-auto card-tailored ">
                        <img class="vector-tailored"  src="{{url('public/frontend/assets/img/pagesolutions-tailored/ophthalmology-icon.png')}}" alt="Image 7">
                        <p class="text-grey text-center pt-4">Ophthalmology</p>
                        <div class="content">
                            <p class="text-center">Ophthalmologists can automate visits and increase profitability with our solutions. </p>
                            <button class="button-cards" >Explore</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-6 pt-md-4 pt-lg-0 py-4 py-lg-0 ">
                    <div class="card justify-content-center d-flex flex-column  align-items-center mx-auto card-tailored">
                        <img class="vector-tailored"  src="{{url('public/frontend/assets/img/pagesolutions-tailored/family-icon-1.png')}}" alt="Image 8">
                        <p class="text-grey text-center pt-4">Family Practice </p>
                        <div class="content">
                            <p class="text-center">Patients get faster service, documentation, and payment with the platform.</p>
                            <button class="button-cards" >Explore</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row text-center mt-lg-5 ">
                <div class="col-lg-3 col-sm-6 col-md-6 text-center pt-md-4 pt-lg-0">
                    <div class=" card justify-content-center d-flex flex-column  align-items-center mx-auto card-tailored">
                        <img class="vector-tailored" src="{{url('public/frontend/assets/img/pagesolutions-tailored/dermatology-icon-1.png')}}"  alt="Image 1">
                        <p class="text-grey text-center pt-4">Dermatology</p>
                        <div class="content">
                            <p class="text-center">Modern, easy-to-use, and efficient to meet your patients' and staff's needs.</p>
                            <button class="button-cards" >Explore</button>
                        </div>
                    </div>

                </div>

                <div class="col-lg-3 col-sm-6 col-md-6 py-4 py-lg-0 pt-md-4">
                    <div class="card justify-content-center d-flex flex-column  align-items-center mx-auto card-tailored">
                        <img class="vector-tailored"  src="{{url('public/frontend/assets/img/pagesolutions-tailored/nephrology-icon-1.png')}}" alt="Image 2">
                        <p class="text-grey text-center pt-4">Nephrology </p>
                        <div class="content">
                            <p class="text-center">With our flexible and scalable solution, you can treat patients at home.</p>
                            <button class="button-cards" >Explore</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-6 pt-md-4 pt-lg-0">
                    <div class="card justify-content-center d-flex flex-column  align-items-center mx-auto card-tailored">
                        <img class="vector-tailored"  src="{{url('public/frontend/assets/img/pagesolutions-tailored/podiatry-icon-1.png')}}" alt="Image 2">
                        <p class=" text-grey text-center pt-4">Podiatry</p>
                        <div class="content">
                            <p class="text-center">We help podiatrists document faster, get paid more, and navigate regulations.</p>
                            <button class="button-cards" >Explore</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-6 pt-md-4 pt-lg-0 py-4 py-lg-0" >
                    <div class="card justify-content-center d-flex flex-column  align-items-center mx-auto card-tailored">
                        <img class="vector-tailored "  src="{{url('public/frontend/assets/img/pagesolutions-tailored/nephrology-icon-1.png')}}"  alt="Image 4">
                        <p class=" text-grey text-center pt-4">Urology </p>
                        <div class="content">
                            <p class="text-center">Improve patient care with a solution built with your urology practice in mind.</p>
                            <button class="button-cards" >Explore</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center mt-lg-5 pb-5">
                <div class="col-lg-3 col-sm-6 col-md-6 text-center pt-md-4 pt-lg-0">
                    <div class=" card justify-content-center d-flex flex-column  align-items-center mx-auto card-tailored">
                        <img class="vector-tailored" src="{{url('public/frontend/assets/img/pagesolutions-tailored/otolaryngology-icon-1.png')}}"  alt="Image 1">
                        <p class="text-grey text-center pt-4">Otolaryngology </p>
                        <div class="content">
                            <p class="text-center">We can help chart sinusitis or a deviated septum following surgery.</p>
                            <button class="button-cards" >Explore</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-6 pt-md-4 pt-lg-0 py-4 py-lg-0">
                    <div class="card justify-content-center d-flex flex-column  align-items-center mx-auto card-tailored">
                        <img class="vector-tailored"  src="{{url('public/frontend/assets/img/pagesolutions-tailored/rheumatology-icon-1.png')}}" alt="Image 2">
                        <p class="text-grey text-center pt-4">Rheumatology </p>
                        <div class="content">
                            <p class="text-center">Our goal is to help rheumatologists focus entirely on their patients.</p>
                            <button class="button-cards " >Explore</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="title-blue py-lg-5">

    </section>

<section class="tab py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <h5 class="text-center py-lg-2 fw-bold">Speciality Solution</h5>
                <div class="all-services">
                    <ul class="tab-list ps-0 mt-3">
                        <li class="text-grey my-2 p-1
                         fw-bold"><a href="#" class="d-block text-center">Laboratory Services</a></li>
                        <li class="text-grey my-2 p-1
                         fw-bold "><a href="#" class="d-block text-center">General Surgery</a></li>
                        <li class="text-grey my-2 p-1
                         fw-bold"><a href="#" class="d-block text-center">Gastroenterology</a></li>
                        <li class="text-grey my-2 p-1
                         fw-bold"><a href="#" class="d-block text-center">Neurology</a></li>
                        <li class="text-grey my-2 p-1
                         fw-bold"><a href="#" class="d-block text-center">Pain Managment</a></li>
                        <li class="text-grey my-2 p-1
                         fw-bold "><a href="#" class="d-block text-center">Orthopedics</a></li>
                        <li class="text-grey my-2 p-1
                         fw-bold"><a href="#" class="d-block text-center">Allergy/Immunology</a></li>
                        <li class="text-grey my-2 p-1
                         fw-bold"><a href="#" class="d-block text-center">Cardiology</a></li>
                        <li class="text-grey my-2 p-1
                         fw-bold"><a href="#" class="d-block text-center">Chiropractic</a></li>
                        <li class="text-grey my-2 p-1
                         fw-bold"><a href="#" class="d-block text-center">Endocrinology</a></li>
                        <li class="text-grey my-2 p-1
                         fw-bold"><a href="#" class="d-block text-center">Ophthalmology</a></li>
                        <li class="text-grey my-2 p-1
                         fw-bold"><a href="#" class="d-block text-center">Family Practice</a></li>
                        <li class="text-grey my-2 p-1
                         fw-bold"><a href="#" class="d-block text-center">Dermatology</a></li>
                        <li class="text-grey my-2 p-1
                         fw-bold"><a href="#"class="d-block text-center">Nephrology</a></li>
                        <li class="text-grey my-2 p-1
                         fw-bold"><a href="#" class="d-block text-center">Podiatry</a></li>
                        <li class="text-grey my-2 p-1
                         fw-bold "><a href="#" class="d-block text-center">Urology</a></li>
                        <li class="text-grey my-2 p-1
                         fw-bold"><a href="#" class="d-block text-center">Otolaryngology</a></li>
                        <li class="text-grey my-2 p-1
                         fw-bold "><a href="#" class="d-block text-center">Rheumatology</a></li>
                        <li class="text-grey my-2 p-1
                         fw-bold"><a href="#" class="d-block text-center">Physical therapy</a></li>
                        <li class="text-grey my-2 p-1
                         fw-bold "><a href="#" class="d-block text-center">Plastic and reconstructive</a></li>
                        <li class="text-grey my-2 p-1
                         fw-bold"><a href="#" class="d-block text-center">Proctology</a></li>
                        <li class="text-grey my-2 p-1
                         fw-bold "><a href="#" class="d-block text-center">Pulmonology</a></li>
                        <li class="text-grey my-2 p-1
                         fw-bold"><a href="#" class="d-block text-center">Urgent Care</a></li>
                        <li class="text-grey my-2 p-1
                         fw-bold "><a href="#" class="d-block text-center">OB/GYN</a></li>
                        <li class="text-grey  my23 p-1
                         fw-bold "><a href="#" class="d-block text-center">Pathology</a></li>
                        <li class="text-grey my-2 p-1
                         fw-bold "><a href="#" class="d-block text-center">Radiology</a></li>
                        <li class="text-grey my-2 p-1
                         fw-bold"><a href="#" class="d-block text-center">Anesthesiology</a></li>
                    </ul>
                </div>
                <div class=" contact-us-gasterology p-3 my-5">
                    <h5 class="text-light pt-3">How can we help you?</h5>
                    <p class="text-light pt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <button class="gast-contact-button my-lg-3 fw-bold">
                        <a href="">CONTACT US</a>
                    </button>
                </div>
            </div>
            <div class="col-lg-9 col-md-9 gasterology ps-lg-4">
                <div class="gast-img mt-5">
                    <img  src="{{url('public/frontend/assets/img/RCM-Specialtity/img-gastronentrology.png')}}"  alt="Image 1">
                </div>
                <h2 class="text-blue fw-bold pt-4">Gastroentrology</h2>
                <hr class="gasterology-line  ">
                <p class="text-grey">The Gastroenterology industry is one of the most competitive medical fields out there, and it's essential for practices to have
                    a system that meets their needs. Gastroenterologists are often challenged by time constraints, high patient volume, and lack of
                    access to the latest medical advancements.</p>
                <p class="text-grey">Atlantis RCM is a cloud-based practice management system that helps gastroenterologists run their practice more efficiently and
                    effectively. We make it easy for you to manage your patient flow, billing, and other day-to-day operations from anywhere in the world.</p>
                <h3 class=" fw-bold pt-3">How Atlantis RCM Helps Gastroenterologists</h3>
                <h5 class=" fw-bold pt-4">Configurable templates and mobile access</h5>
                <p class="text-grey">In our experience, we&apos;ve found that the best way to do this is by creating an efficient, scalable system that allows you to quickly
                    access critical patient information from anywhere at anytime</p>
                <h5 class=" fw-bold">Efficient Administration</h5>
                <p class="text-grey">We understand that every practice is different and has unique needs when it comes to administration, which is why we
                    created Atlantis with an intuitive interface that makes it easy for anyone on your team or in your organization to use.
                </p>
                <h5 class=" fw-bold">Quick access to critical patient information</h5>
                <p class="text-grey">Atlantis RCM solutions provides quick access to critical patient information such as billing details and insurance details
                    which helps improve collections by reducing administrative costs and increasing efficiency.</p>
                <h5 class=" fw-bold">Improve Collections</h5>
                <p class="text-grey">Atlantis RCM helps you improve collections by identifying patients that have a high probability of insurance
                    coverage from multiple carriers, allowing you to focus on those patients and improve collections.</p>
            </div>

        </div>
    </div>
    </div>
</section>
@endsection
