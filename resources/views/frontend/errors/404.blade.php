@extends('frontend.layout.master')
@section('content')


    <section id="error_container">
        <div class="container">
            <div class="row justify-content-center my-5">
                <div class="col-12 text-center">
                    <div class="error_img my-5">
                        <img src="{{url('public/frontend/assets/img/icon-not-found.png')}}" alt="">
                    </div>
                    <h1 class="text-dark fw-bold my-3">Page Not Found</h1>
                    <div class="py-4">
                        <p class="text-grey">Sorry, the page you are trying to access cannot be found. It may have been moved, deleted, or temporarily unavailable.</p>
                        <p class="text-grey">We apologize for any inconvenience this may have caused and we will do our best to resolve the issue as soon as possible.</p>
                    </div>
                    <a class="btn_home_404 my-3 m-auto" href="{{url('/')}}">Homepage</a>
                </div>
            </div>
        </div>
    </section>


@endsection

