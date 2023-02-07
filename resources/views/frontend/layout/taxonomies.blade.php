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
    {{--    ********************************laboratory_sevices****************************--}}
    <section class="lab_services py-lg-5">

    </section>
    <section class="lab_servc_sec_1 py-5" id="tex_content">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <h4 class="pt-3 text-center d-none d-md-block">Speciality Solution</h4>
                    <div class="dropdown d-block d-md-none">
                        <button class="btn btn-primary dropdown-toggle w-100" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                            Speciality Solutions List
                        </button>
                        <ul class="dropdown-menu dropdown-menu-light w-100 text-center" aria-labelledby="dropdownMenuButton2">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li class="dropdown-item {{ (request()->is('laboratry')) ? 'tex_li_active' : '' }}">
                                <a href="{{url('laboratry')}}">laboratory Services</a>
                            </li>
                            <li class="dropdown-item {{ (request()->is('homehealth')) ? 'tex_li_active' : '' }}">
                                <a href="{{url('homehealth')}}">Home Health</a>
                            </li>
                            <li class="dropdown-item {{ (request()->is('dmeProviders')) ? 'tex_li_active' : '' }}">
                                <a href="{{url('dmeProviders')}}">DME Providers</a>
                            </li>
                            <li class="dropdown-item {{ (request()->is('g_surgery')) ? 'tex_li_active' : '' }}">
                                <a href="{{url('g_surgery')}}">General Surgery</a>
                            </li>
                            <li class="dropdown-item {{ (request()->is('gastroentrology')) ? 'tex_li_active' : '' }}">
                                <a href="{{url('gastroentrology')}}">Gastroenterology</a>
                            </li>
                            <li class="dropdown-item {{ (request()->is('neurology')) ? 'tex_li_active' : '' }}">
                                <a href="{{url('neurology')}}">Neurology</a>
                            </li>
                            <li class="dropdown-item {{ (request()->is('painManagement')) ? 'tex_li_active' : '' }}">
                                <a href="{{url('painManagement')}}">Pain Management</a>
                            </li>
                            <li class="dropdown-item {{ (request()->is('orthopedics')) ? 'tex_li_active' : '' }}">
                                <a href="{{url('orthopedics')}}">Orthopedic</a>
                            </li>
                            <li class="dropdown-item {{ (request()->is('allergy')) ? 'tex_li_active' : '' }}">
                                <a href="{{url('allergy')}}">Allergy/Immunology</a>
                            </li>
                            <li class="dropdown-item {{ (request()->is('cardiology')) ? 'tex_li_active' : '' }}">
                                <a href="{{url('cardiology')}}">Cardiology</a>
                            </li>
                            <li class="dropdown-item {{ (request()->is('chiropractic')) ? 'tex_li_active' : '' }}">
                                <a href="{{url('chiropractic')}}">Chiropractic</a>
                            </li>
                            <li class="dropdown-item {{ (request()->is('endocrinology')) ? 'tex_li_active' : '' }}">
                                <a href="{{url('endocrinology')}}">Endocrinology</a>
                            </li>
                            <li class="dropdown-item {{ (request()->is('ophthalmology')) ? 'tex_li_active' : '' }}">
                                <a href="{{url('ophthalmology')}}">Ophthalmology</a>
                            </li>
                            <li class="dropdown-item {{ (request()->is('familyPractice')) ? 'tex_li_active' : '' }}">
                                <a href="{{url('familyPractice')}}">Family practice</a>
                            </li>
                            <li class="dropdown-item {{ (request()->is('dermatology')) ? 'tex_li_active' : '' }}">
                                <a href="{{url('dermatology')}}">Dermatology</a>
                            </li>
                            <li class="dropdown-item {{ (request()->is('nephrology')) ? 'tex_li_active' : '' }}">
                                <a href="{{url('nephrology')}}">Nephrology</a>
                            </li>
                            <li class="dropdown-item {{ (request()->is('podiatry')) ? 'tex_li_active' : '' }}">
                                <a href="{{url('podiatry')}}">Podiatry</a>
                            </li>
                            <li class="dropdown-item {{ (request()->is('urology')) ? 'tex_li_active' : '' }}">
                                <a href="{{url('urology')}}">Urology</a>
                            </li>
                            <li class="dropdown-item {{ (request()->is('physicaltherapy')) ? 'tex_li_active' : '' }}">
                                <a href="{{url('physicaltherapy')}}">Physical Therapy</a>
                            </li>
                            <li class="dropdown-item {{ (request()->is('urgentCare')) ? 'tex_li_active' : '' }}">
                                <a href="{{url('urgentCare')}}">Urgent Care</a>
                            </li>
                            <li class="dropdown-item {{ (request()->is('gyn')) ? 'tex_li_active' : '' }}">
                                <a href="{{url('gyn')}}">OB/Gyn</a>
                            </li>
                            <li class="dropdown-item {{ (request()->is('otolaryngology')) ? 'tex_li_active' : '' }}">
                                <a href="{{url('otolaryngology')}}">Otolaryngology</a>
                            </li>
                            <li class="dropdown-item {{ (request()->is('rheumatology')) ? 'tex_li_active' : '' }}">
                                <a href="{{url('rheumatology')}}">Rheumato</a>
                            </li>
                        </ul>
                    </div>
                    <div class="Speciality_Solution d-none d-md-block">
                        <ul class="p-0 my-2 text-center">
                            <li class="mt-3 p-1 {{ (request()->is('laboratry')) ? 'tex_li_active' : '' }}">
                                <a href="{{url('laboratry')}}">Laboratory Services</a>
                            </li>
                            <li class="mt-3 p-1 {{ (request()->is('homehealth')) ? 'tex_li_active' : '' }}">
                                <a href="{{url('homehealth')}}">Home Health</a>
                            </li>
                            <li class="mt-3 p-1 {{ (request()->is('dmeProviders')) ? 'tex_li_active' : '' }}">
                                <a href="{{url('dmeProviders')}}">DME Providers</a>
                            </li>
                            <li class="mt-3 p-1 {{ (request()->is('g_surgery')) ? 'tex_li_active' : '' }}">
                                <a href="{{url('g_surgery')}}">General Surgery</a>
                            </li>
                            <li class="mt-3 p-1 {{ (request()->is('gastroentrology')) ? 'tex_li_active' : '' }}">
                                <a href="{{url('gastroentrology')}}">Gastroenterology</a>
                            </li>
                            <li class="mt-3 p-1 {{ (request()->is('neurology')) ? 'tex_li_active' : '' }}">
                                <a href="{{url('neurology')}}">Neurology</a>
                            </li>
                            <li class="mt-3 p-1 {{ (request()->is('painManagement')) ? 'tex_li_active' : '' }}">
                                <a href="{{url('painManagement')}}">Pain Management</a>
                            </li>
                            <li class="mt-3 p-1 {{ (request()->is('orthopedics')) ? 'tex_li_active' : '' }}">
                                <a href="{{url('orthopedics')}}">Orthopedic</a>
                            </li>
                            <li class="mt-3 p-1 {{ (request()->is('allergy')) ? 'tex_li_active' : '' }}">
                                <a href="{{url('allergy')}}">Allergy/Immunology</a>
                            </li>
                            <li class="mt-3 p-1 {{ (request()->is('cardiology')) ? 'tex_li_active' : '' }}">
                                <a href="{{url('cardiology')}}">Cardiology</a>
                            </li>
                            <li class="mt-3 p-1 {{ (request()->is('chiropractic')) ? 'tex_li_active' : '' }}">
                                <a href="{{url('chiropractic')}}">Chiropractic</a>
                            </li>
                            <li class="mt-3 p-1 {{ (request()->is('endocrinology')) ? 'tex_li_active' : '' }}">
                                <a href="{{url('endocrinology')}}">Endocrinology</a>
                            </li>
                            <li class="mt-3 p-1 {{ (request()->is('ophthalmology')) ? 'tex_li_active' : '' }}">
                                <a href="{{url('ophthalmology')}}">Ophthalmology</a>
                            </li>
                            <li class="mt-3 p-1 {{ (request()->is('familyPractice')) ? 'tex_li_active' : '' }}">
                                <a href="{{url('familyPractice')}}">Family practice</a>
                            </li>
                            <li class="mt-3 p-1 {{ (request()->is('dermatology')) ? 'tex_li_active' : '' }}">
                                <a href="{{url('dermatology')}}">Dermatology</a>
                            </li>
                            <li class="mt-3 p-1 {{ (request()->is('nephrology')) ? 'tex_li_active' : '' }}">
                                <a href="{{url('nephrology')}}">Nephrology</a>
                            </li>
                            <li class="mt-3 p-1 {{ (request()->is('podiatry')) ? 'tex_li_active' : '' }}">
                                <a href="{{url('podiatry')}}">Podiatry</a>
                            </li>
                            <li class="mt-3 p-1 {{ (request()->is('urology')) ? 'tex_li_active' : '' }}">
                                <a href="{{url('urology')}}">Urology</a>
                            </li>
                            <li class="mt-3 p-1 {{ (request()->is('physicaltherapy')) ? 'tex_li_active' : '' }}">
                                <a href="{{url('physicaltherapy')}}">Physical Therapy</a>
                            </li>
                            <li class="mt-3 p-1 {{ (request()->is('urgentCare')) ? 'tex_li_active' : '' }}">
                                <a href="{{url('urgentCare')}}">Urgent Care</a>
                            </li>
                            <li class="mt-3 p-1 {{ (request()->is('gyn')) ? 'tex_li_active' : '' }}">
                                <a href="{{url('gyn')}}">OB/Gyn</a>
                            </li>
                            <li class="mt-3 p-1 {{ (request()->is('otolaryngology')) ? 'tex_li_active' : '' }}">
                                <a href="{{url('otolaryngology')}}">Otolaryngology</a>
                            </li>
                            <li class="mt-3 p-1 {{ (request()->is('rheumatology')) ? 'tex_li_active' : '' }}">
                                <a href="{{url('rheumatology')}}">Rheumatology</a>
                            </li>

                        </ul>
                    </div>
                    <div class="contact_lab_servc pt-5">
                        <div class="card">
                            <div class="lab_services p-4">
                                <h5 class="text-light">DON’T SEE YOUR SPECIALTY?</h5>
                                <p class="text-light">Contact an Atlantis RCM expert today & learn how we serve nearly every specialty with medical billing, Practice Management, RCM, and more.</p>
                                <a href="{{url('contact_us')}}" class="btn btn-light fw-bold">CONTACT US</a>
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

