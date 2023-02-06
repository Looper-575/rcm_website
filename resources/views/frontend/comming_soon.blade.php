@extends('frontend.layout.master')
@section('content')


    <section id="error_container" style="height: 70vh">
        <div class="container h-100">
            <div class="row justify-content-center h-100 my-5">
                <div class="col-12 text-center">
                    <h1 class="text-dark fw-bold my-3">Comming Soon</h1>
                    <div class="py-4">
                        <p class="text-grey">Sorry, the page you are trying to access cannot be found. It may have been temporarily unavailable.</p>
                    </div>
                    <a class="btn_home_404 my-3 m-auto" href="{{url('/')}}">Homepage</a>
                </div>
            </div>
        </div>
    </section>


@endsection

