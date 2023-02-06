@extends('frontend.layout.master')
@section('content')
    <section class="header_home header_laboratory">
        <div class="h-100" id="layer_1">
            <div class="container h-100">
                <div class="d-flex flex-column justify-content-center h-100">
                    <div class="header_content">
                        <h1 class="text-light Sec1-MB-hea1">Atlantis RCM</h1>
                        <h1 class="text-light Sec1-MB-hea2 fw-bold">Custom solutions <br>
                            for your specialty</h1>
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
    {{--    ********************************laboratory_sevices****************************--}}
    <section class="lab_services py-lg-5">
    </section>
    <section class="lab_servc_sec_1 py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <h4 class="pt-3 text-center">Speciality Solution</h4>
                    <div class="Speciality_Solution">
                        <ul class="p-0 my-2 text-center">
                            <li class="mt-3 p-1">
                                <a href="#">laboratory Services</a>
                            </li>
                            <li class="mt-3 p-1">
                                <a href="#">General Surgery</a>
                            </li>
                            <li class="mt-3 p-1">
                                <a href="#">Gastroenterology</a>
                            </li>
                            <li class="mt-3 p-1">
                                <a href="#">Neurology</a>
                            </li>
                            <li class="mt-3 p-1">
                                <a href="#">Pain Management</a>
                            </li>
                            <li class="mt-3 p-1">
                                <a href="#">Orthopedic</a>
                            </li>
                            <li class="mt-3 p-1">
                                <a href="#">Allergy/Immunology</a>
                            </li>
                            <li class="mt-3 p-1">
                                <a href="#">Cardiology</a>
                            </li>
                            <li class="mt-3 p-1">
                                <a href="#">Chiropractic</a>
                            </li>
                            <li class="mt-3 p-1">
                                <a href="#">Endocrinology</a>
                            </li>
                            <li class="mt-3 p-1">
                                <a href="#">Ophthalmology</a>
                            </li>
                            <li class="mt-3 p-1">
                                <a href="#">Family practice</a>
                            </li>
                            <li class="mt-3 p-1">
                                <a href="#">Dermatology</a>
                            </li>
                            <li class="mt-3 p-1">
                                <a href="#">Nephrology</a>
                            </li>
                            <li class="mt-3 p-1">
                                <a href="#">Podiatry</a>
                            </li>
                            <li class="mt-3 p-1">
                                <a href="#">Urology</a>
                            </li>
                            <li class="mt-3 p-1">
                                <a href="#">Otolaryngology</a>
                            </li>
                            <li class="mt-3 p-1">
                                <a href="#">Rheumatology</a>
                            </li>
                            <li class="mt-3 p-1">
                                <a href="#">Physical Therapy</a>
                            </li>
                            <li class="mt-3 p-1 ">
                                <a href="#">Plastic and Reconstructive</a>
                            </li>
                            <li class="mt-3 p-1">
                                <a href="#">Proctology</a>
                            </li>
                            <li class="mt-3 p-1">
                                <a href="#">Pulmonoloy</a>
                            </li>
                            <li class="mt-3 p-1">
                                <a href="#">Urgent Care</a>
                            </li>
                            <li class="mt-3 p-1">
                                <a href="#">OB/GYN</a>
                            </li>
                            <li class="mt-3 p-1">
                                <a href="#">Pathology</a>
                            </li>
                            <li class="mt-3 p-1">
                                <a href="#">Radiology</a>
                            </li>
                            <li class="mt-3 p-1">
                                <a href="#">Anesthesiology</a>
                            </li>
                        </ul>
                    </div>
                    <div class="contact_lab_servc pt-5">
                        <div class="card">
                            <div class="lab_services p-4">
                                <h5 class="text-light">How can we help you?</h5>
                                <p class="text-light">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry.</p>
                                <a href="#" class="btn btn-light fw-bold">CONTACT US</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9">
                    @yield('taxonomy')
                </div>
            </div>
        </div>
    </section>
@endsection
