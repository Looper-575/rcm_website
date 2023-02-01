<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="{{ $meta_description }}">
    <meta name="keywords" content="{{ $meta_tags }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
          integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{url('/public/frontend/assets/bootstrap-5.2.3-dist/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{url('/public/frontend/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{url('/public/frontend/assets/css/umar.css')}}">
    <link rel="stylesheet" href="{{url('/public/frontend/assets/css/nimra.css')}}">
    <link rel="stylesheet" href="{{url('/public/frontend/assets/css/queries.css')}}">

    <script src="{{url('public/frontend/assets/bootstrap-5.2.3-dist/js/bootstrap.bundle.js')}}"></script>
    <link rel="shortcut icon" type="image/x-icon" href="{{url('/public/frontend/assets/img/fav_icon_1x_16x16_.png')}}"/>
    <title>{{ $title }}</title>
</head>
<body>
<nav class="navbar atlantis_rcm_nav navbar-light navbar-expand-lg">
    <div class="container-fluid container">
        <a class="navbar-brand" href="{{'/'}}"><img src="{{url('public/frontend/assets/img/home/head_logo.png')}}" alt=""></a>
        <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul id="nav" class="navbar-nav justify-content-end w-100">
                <li class="nav-item">
                    <a class="nav-link text-center {{ (request()->is('/')) ? 'active' : '' }}" aria-current="page" href="{{url('/')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-center {{ (request()->is('about_us')) ? 'active' : '' }}" href="{{url('about_us')}}">About Atlantis</a>
                </li>
           {{--<div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown button
                    </button>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                        <li><a class="dropdown-item active" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                    </ul>
                </div>--}}
                <div class="nav-item dropdown d-block d-lg-none">
                  <button class="btn mt-2 btn_mbl_drpdown w-100 dropdown-toggle {{ (request()->is('absolute_revenue')) ? 'btn_mbl_drpdown_active' : '' }} " type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                        Solutions
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                        <li><a class="dropdown-item text-center {{ (request()->is('absolute_revenue')) ? 'active' : '' }}" href="{{url('absolute_revenue')}}">Revenue Cycle Management</a></li>
                        <li><a class="dropdown-item text-center {{ (request()->is('healthC_analytics')) ? 'active' : '' }} " href="{{url('healthC_analytics')}}">Health Care Analytics</a></li>
                        <li><a class="dropdown-item text-center {{ (request()->is('practice_manage')) ? 'active' : '' }} " href="{{url('practice_manage')}}">Practice Management</a></li>
                        <li><a class="dropdown-item text-center {{ (request()->is('telehealth')) ? 'active' : '' }} " href="{{url('telehealth')}}">Telehealth</a></li>
                        <li><a class="dropdown-item text-center {{ (request()->is('patient_experience')) ? 'active' : '' }} " href="{{url('patient_experience')}}">Patient Experience Management</a></li>
                        <li><a class="dropdown-item text-center {{ (request()->is('workforce')) ? 'active' : '' }} " href="{{url('workforce')}}">Work Force Extension</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item text-center {{ (request()->is('all_solutions')) ? 'active' : '' }} " href="{{url('all_solutions')}}">View All Solutions</a></li>
                    </ul>
                </div>
                <li class="nav-item d-none d-lg-block" id="solution_menu">
                    <a class="nav-link text-center {{ (request()->is('workforce')) ? 'active' : '' }}"  href="javascript:">Solutions <i class="fas fa-angle-down"></i></a>
                    <div class="sub_menu_solution">
                        <div class="row">
                            <div class="col-12">
                                <div class="bg-sol-sb-menu">
                                    <img class="polygon_arrow"  src="{{url('public/frontend/assets/img/menu/polygon-1.png')}}" alt="">
                                    <div class="row py-5 my-2 px-3">
                                        <div class="col-6">
                                            <a href="{{url('absolute_revenue')}}">
                                                <div class="d-flex align-items-center m-3 my-4">
                                                    <img src="{{url('public/frontend/assets/img/menu/1-icon_rcm.png')}}" alt="">
                                                    <div class="mx-4">
                                                        <p class="text-light m-0 sub_menu_title">Revenue Cycle Management</p>
                                                        <p class="text-light m-0 sub_menu_descrip">Emphasis on accurate data</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="{{url('practice_manage')}}">
                                                <div class="d-flex align-items-center m-3 my-4">
                                                    <img src="{{url('public/frontend/assets/img/menu/2-icon_practise_management.png')}}" alt="">
                                                    <div class="mx-4">
                                                        <p class="text-light m-0 sub_menu_title">Practice Management</p>
                                                        <p class="text-light m-0 sub_menu_descrip">Coordinated and improved workflow</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="{{url('healthC_analytics')}}">
                                                <div class="d-flex align-items-center m-3 my-4">
                                                    <img src="{{url('public/frontend/assets/img/menu/3-icon_telehealth.png')}}" alt="">
                                                    <div class="mx-4">
                                                        <p class="text-light m-0 sub_menu_title">Health Care Analytics</p>
                                                        <p class="text-light m-0 sub_menu_descrip">Reducing errors with accurate data</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-6">
                                            <a href="{{url('telehealth')}}">
                                                <div class="d-flex align-items-center m-3 my-4">
                                                    <img src="{{url('public/frontend/assets/img/menu/4-icon_health_care_analytics.png')}}" alt="">
                                                    <div class="mx-4">
                                                        <p class="text-light m-0 sub_menu_title">Telehealth</p>
                                                        <p class="text-light m-0 sub_menu_descrip">Better coordinated healthcare</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="{{url('patient_experience')}}">
                                                <div class="d-flex align-items-center m-3 my-4">
                                                    <img src="{{url('public/frontend/assets/img/menu/5-Icon_patient_experience_management.png')}}" alt="">
                                                    <div class="mx-4">
                                                        <p class="text-light m-0 sub_menu_title">Patient Experience Management</p>
                                                        <p class="text-light m-0 sub_menu_descrip">Scores higher on patient satisfaction</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="{{url('workforce')}}">
                                                <div class="d-flex align-items-center m-3 my-4">
                                                    <img src="{{url('public/frontend/assets/img/menu/6-icon_workforce_extension.png')}}" alt="">
                                                    <div class="mx-4">
                                                        <p class="text-light m-0 sub_menu_title">Work Force Extension</p>
                                                        <p class="text-light m-0 sub_menu_descrip">Ensures smooth operations</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <a href="{{url('all_solutions')}}"><button class="sb_menu_view_all_sol">View All Solutions</button></a>
                                    </div>
                                    </div>
                                </div>
                            <div class="d-none">
                                <div class="py-5 mt-4 grey_article_sb_menu">
                                    <a href="{{url('tailored_solution')}}">
                                        <p  class="text-grey sub_menu_descrip my-4">
                                            Specialities
                                        </p>
                                    </a>
                                    <a href="{{url('texo_about_us')}}">
                                        <p  class="text-grey sub_menu_descrip my-4">
                                    Small Medical Practices
                                    </p>
                                    </a>
                                    <a href="">
                                        <p  class="text-grey sub_menu_descrip my-4">
                                            RCM For Customers
                                        </p>
                                    </a>
                                    <a href="">
                                        <p  class="text-grey sub_menu_descrip my-4">
                                    Large Medical Groups
                                    </p>
                                    </a>
                                    <a href="">
                                        <p  class="text-grey sub_menu_descrip my-4">
                                        Medical Billing Companies
                                        </p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-center {{ (request()->is('medical_billing')) ? 'active' : '' }}" href="{{url('medical_billing')}}">Medical Billing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-center {{ (request()->is('medical_credentialing')) ? 'active' : '' }}" href="{{url('medical_credentialing')}}">Credentialing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-center {{ (request()->is('contact_us')) ? 'active' : '' }}" href="{{url('contact_us')}}">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-center {{ (request()->is('login')) ? 'active' : '' }}" href="https://portal.atlantisrcm.com/" target="_blank">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>

    $(document).ready(function(){
        $('#layer_1').addClass('layer_1_active');
        setInterval(function(){$('.header_content').fadeIn('3000')}, 1600);
    });


    $(document).ready(function() {
        if(window.location.href.match('/404')){
            $(".atlantis_rcm_nav").addClass("atlantis_rcm_nav_bg");
        }
    });


    $(document).ready(function(){
        $('#solution_menu a').click(function(){
            $('#nav li a').removeClass("active");
            $(this).addClass("active");
        });
    });

    $(document).ready(function(){
        $('#solution_menu > a').click(function(){
        $('.sub_menu_solution').toggleClass("sub_menu_solution_active");
        $('#solution_menu > a > i').toggleClass("angle-up");
        });
    });

    $(document).ready(function() {

        if ((screen.width < 1024)) {
            console.log('frist')
            // if screen size is 1025px wide or larger
            $(".atlantis_rcm_nav").addClass('fixed-top'); // you can also use $(".yourClass").hide();
            $(".atlantis_rcm_nav").css('background-color', '#1166e1'); // here you can a  lso use show();
            $(".atlantis_rcm_nav").css("box-shadow", "rgba(50, 50, 93, 0.25) 0px 50px 100px -20px"); // here you can a  lso use show();

        }
        else if((screen.width > 1024)){
            console.log('second')
            // if screen size width is less than 1024px
            $(".atlantis_rcm_nav").removeClass('fixed-top');// here you can also use show();
            $(".atlantis_rcm_nav").css('background-color', 'transparent'); // here you can a  lso use show();
        }
    });

</script>
