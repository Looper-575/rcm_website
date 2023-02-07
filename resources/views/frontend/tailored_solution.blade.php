
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
                        {{--<div class="hdr_btn d-flex">
                            <button class="btn strtBtn1 mt-2">
                                Get Started
                            </button>
                        </div>--}}
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
                                <a href="{{url('internalMedicine')}}"><button class="button-cards" >Explore</button></a>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-3 col-sm-6 col-md-6 pt-md-4 pt-lg-0 ">
                        <div class="card justify-content-center d-flex flex-column  align-items-center mx-auto card-tailored">
                            <img class="vector-tailored"  src="{{url('public/frontend/assets/img/taxanomy-about-us/general-surgery-icon.png')}}" alt="Image 2">
                            <p class="text-grey text-center pt-4">General Surgery</p>
                            <div class="content">
                                <p class="text-center">General surgeons need access to integrated patient information, labs, and imaging.</p>
                                <a href="{{url('g_surgery')}}"><button class="button-cards" >Explore</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-6  pt-md-4 pt-lg-0 py-4 py-lg-0">
                        <div class="card justify-content-center d-flex flex-column  align-items-center mx-auto card-tailored">
                            <img class="vector-tailored"  src="{{url('public/frontend/assets/img/pagesolutions-tailored/gastro-icon.png')}}" alt="Image 2">
                            <p class=" text-grey text-center pt-4">Gastroenterology</p>
                            <div class="content">
                                <p class="text-center">We developed a comprehensive solution to make your practice more efficient.</p>
                                <a href="{{url('gastroentrology')}}"><button class="button-cards" >Explore</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-6 pt-md-4 pt-lg-0 ">
                        <div class="card justify-content-center d-flex flex-column  align-items-center mx-auto card-tailored">
                            <img class="vector-tailored "  src="{{url('public/frontend/assets/img/pagesolutions-tailored/neurology-icon.png')}}"  alt="Image 4">
                            <p class=" text-grey text-center pt-4">Neurology</p>
                            <div class="content">
                                <p class="text-center">Our services assist neurologists both in their consulting and primary care roles.</p>
                                <a href="{{url('neurology')}}"><button class="button-cards" >Explore</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-lg-5  ">
                    <div class="col-lg-3 col-sm-6 col-md-6 pt-md-4 pt-lg-0">
                        <div class="card text justify-content-center d-flex flex-column  align-items-center mx-auto card-tailored">
                            <img class="vector-tailored"  src="{{url('public/frontend/assets/img/pagesolutions-tailored/pain-management-icon.png')}}" alt="Image 5">
                            <p class="text-grey text-center pt-4">Pain Management</p>
                            <div class="content">
                                <p class="text-center">We enable practices to provide greater service and flexibility through PXM.</p>
                                <a href="{{url('painManagement')}}"><button class="button-cards" >Explore</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-6 py-4 py-lg-0 pt-md-4">
                        <div class="card  justify-content-center d-flex flex-column  align-items-center mx-auto card-tailored">
                            <img class="vector-tailored"  src="{{url('public/frontend/assets/img/pagesolutions-tailored/orthopedics-icon.png')}}" alt="Image 6">
                            <p class="text-grey text-center pt-4">Orthopedics</p>
                            <div class="content">
                                <p class="text-center">US's orthopedic practices rely on Atlantis RCM's long term and profitable solutions. </p>
                                <a href="{{url('orthopedics')}}"><button class="button-cards" >Explore</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6  col-md-6 pt-md-4 pt-lg-0">
                        <div class="card justify-content-center d-flex flex-column  align-items-center mx-auto card-tailored ">
                            <img class="vector-tailored"  src="{{url('public/frontend/assets/img/pagesolutions-tailored/allergy-icon.png')}}" alt="Image 7">
                            <p class="text-grey text-center pt-4">Allergy/Immunology</p>
                            <div class="content">
                                <p class="text-center">We make patch test results easy to reference, unlike traditional solutions. </p>
                                <a href="{{url('allergy')}}"><button class="button-cards" >Explore</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-6 pt-md-4 pt-lg-0 py-4 py-lg-0 ">
                        <div class="card justify-content-center d-flex flex-column  align-items-center mx-auto card-tailored">
                            <img class="vector-tailored"  src="{{url('public/frontend/assets/img/pagesolutions-tailored/cardiology-icon.png')}}" alt="Image 8">
                            <p class="text-grey text-center pt-4">Cardiology</p>
                            <div class="content">
                                <p class="text-center">Customized EHR, practice management, and medical billing solutions for cardiology.</p>
                                <a href="{{url('cardiology')}}"><button class="button-cards" >Explore</button></a>
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
                            <a href="{{url('chiropractic')}}"><button class="button-cards" >Explore</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-6 py-4 py-lg-0 pt-md-4">
                    <div class="card  justify-content-center d-flex flex-column  align-items-center mx-auto card-tailored">
                        <img class="vector-tailored"  src="{{url('public/frontend/assets/img/pagesolutions-tailored/endocrinology-icon.png')}}" alt="Image 6">
                        <p class="text-grey text-center pt-4">Endocrinology</p>
                        <div class="content">
                            <p class="text-center">Scalable endocrinology practice management, EHR and billing solutions. </p>
                            <a href="{{url('endocrinology')}}"><button class="button-cards" >Explore</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-6 pt-md-4 pt-lg-0">
                    <div class="card justify-content-center d-flex flex-column  align-items-center mx-auto card-tailored ">
                        <img class="vector-tailored"  src="{{url('public/frontend/assets/img/pagesolutions-tailored/ophthalmology-icon.png')}}" alt="Image 7">
                        <p class="text-grey text-center pt-4">Ophthalmology</p>
                        <div class="content">
                            <p class="text-center">Ophthalmologists can automate visits and increase profitability with our solutions. </p>
                            <a href="{{url('ophthalmology')}}"><button class="button-cards" >Explore</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-6 pt-md-4 pt-lg-0 py-4 py-lg-0 ">
                    <div class="card justify-content-center d-flex flex-column  align-items-center mx-auto card-tailored">
                        <img class="vector-tailored"  src="{{url('public/frontend/assets/img/pagesolutions-tailored/family-icon-1.png')}}" alt="Image 8">
                        <p class="text-grey text-center pt-4">Family Practice </p>
                        <div class="content">
                            <p class="text-center">Patients get faster service, documentation, and payment with the platform.</p>
                            <a href="{{url('familyPractice')}}"><button class="button-cards" >Explore</button></a>
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
                            <a href="{{url('dermatology')}}"><button class="button-cards" >Explore</button></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 col-md-6 py-4 py-lg-0 pt-md-4">
                    <div class="card justify-content-center d-flex flex-column  align-items-center mx-auto card-tailored">
                        <img class="vector-tailored"  src="{{url('public/frontend/assets/img/pagesolutions-tailored/nephrology-icon-1.png')}}" alt="Image 2">
                        <p class="text-grey text-center pt-4">Nephrology</p>
                        <div class="content">
                            <p class="text-center">With our flexible and scalable solution, you can treat patients at home.</p>
                            <a href="{{url('nephrology')}}"><button class="button-cards" >Explore</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-6 pt-md-4 pt-lg-0">
                    <div class="card justify-content-center d-flex flex-column  align-items-center mx-auto card-tailored">
                        <img class="vector-tailored"  src="{{url('public/frontend/assets/img/pagesolutions-tailored/podiatry-icon-1.png')}}" alt="Image 2">
                        <p class=" text-grey text-center pt-4">Podiatry</p>
                        <div class="content">
                            <p class="text-center">We help podiatrists document faster, get paid more, and navigate regulations.</p>
                            <a href="{{url('podiatry')}}"><button class="button-cards" >Explore</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-6 pt-md-4 pt-lg-0 py-4 py-lg-0" >
                    <div class="card justify-content-center d-flex flex-column  align-items-center mx-auto card-tailored">
                        <img class="vector-tailored "  src="{{url('public/frontend/assets/img/pagesolutions-tailored/nephrology-icon-1.png')}}"  alt="Image 4">
                        <p class=" text-grey text-center pt-4">Urology </p>
                        <div class="content">
                            <p class="text-center">Improve patient care with a solution built with your urology practice in mind.</p>
                            <a href="{{url('urology')}}"><button class="button-cards" >Explore</button></a>
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
                            <a href="{{url('otolaryngology')}}"><button class="button-cards" >Explore</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-md-6 pt-md-4 pt-lg-0 py-4 py-lg-0">
                    <div class="card justify-content-center d-flex flex-column  align-items-center mx-auto card-tailored">
                        <img class="vector-tailored"  src="{{url('public/frontend/assets/img/pagesolutions-tailored/rheumatology-icon-1.png')}}" alt="Image 2">
                        <p class="text-grey text-center pt-4">Rheumatology </p>
                        <div class="content">
                            <p class="text-center">Our goal is to help rheumatologists focus entirely on their patients.</p>
                            <a href="{{url('rheumatology')}}"><button class="button-cards" >Explore</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
