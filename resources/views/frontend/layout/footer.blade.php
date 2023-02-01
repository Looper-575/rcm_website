
<footer>
    <section class="footer_contact py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 py-3 order-1 order-md-0">
                    <div class="footer_solutions_side">
                        <h3 class="text-light fw-bold my-3">
                            Solutions
                        </h3>
                        <div class="row">
                            <div class="col-md-6">
                                <a href="{{url('absolute_revenue')}}" class="p-1 text-light d-block">Revenue Cycle Management</a>
                                <a href="{{url('practice_manage')}}" class="p-1 text-light d-block">Practice Managemet</a>
                                <a href="{{url('patient_experience')}}" class="p-1 text-light d-block">Patient Experience</a>
                                <a href="{{url('telehealth')}}" class="p-1 text-light d-block">Telehealth</a>
                                {{--<a href="" class="p-1 text-light d-block"></a>
                                <a href="" class="p-1 text-light d-block"></a>--}}
                            </div>
                            <div class="col-md-6">
                                <a href="{{url('workforce')}}" class="p-1 text-light d-block">Workforce Extention</a>
                                <a href="{{url('healthC_analytics')}}" class="p-1 text-light d-block">Health Care Analytics</a>
                                {{--<a href=""></a>
                                <a href=""></a>
                                <a href=""></a>
                                <a href=""></a>--}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 order-0 order-md-1 border_left py-3">
                    <div class="footer_quick_side">
                        <div class="row mx-lg-4">
                            <div class="col-sm-6 mt-4 mt-md-0">
                                <h3 class="text-light fw-bold my-3">
                                    Quick Links
                                </h3>
                                <a href="{{url('/')}}" class="p-1 text-light d-block">Atlantis RCM</a>
                                <a href="{{url('medical_credentialing')}}" class="p-1 text-light d-block">Medical Credentialing</a>
                                <a href="{{url('medical_billing')}}" class="p-1 text-light d-block">Medical Billing</a>
                                <a href="{{url('about_us')}}" class="p-1 text-light d-block">About us</a>
                                <a href="{{url('contact_us')}}" class="p-1 text-light d-block">Contact us</a>
                            </div>
                            <div class="col-sm-6 mt-4 mt-md-0 ">
                                <h3 class="text-light fw-bold my-3">
                                    Get in Touch
                                </h3>
                                <a href="tel:+1 518 730 1875" class="p-1 text-light d-flex align-items-center getintouch"><i class="fas fa-phone socil m-2"></i>+1 518 730 1875</a>
                                <a href="mailto:info@atlantisrcm.com" class="p-1 text-light d-flex align-items-center getintouch"><i class="fas fa-message socil m-2"></i>info@atlantisrcm.com</a>
                                <a href="https://www.facebook.com/atlantisrcm" class="p-1 text-light d-flex align-items-center getintouch"><i class="fab fa-facebook-f socil m-2"></i>Facebook</a>
                                <a href="https://www.linkedin.com/company/atlantis-rcm/" class="p-1 text-light d-flex align-items-center getintouch"><i class="fab fa-linkedin-in socil m-2"></i>LinkedIn</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{--<div class="menu_footer pt-3">
                <div class="row">
                    <div class="col-md-9 d-none d-lg-block">
                        <div class="d-flex flex-wrap justify-content-around w-75  menu_li_footer">
                            <a href="" class="p-1 mx-1 text-light d-block">Home</a>
                            <a href="" class="p-1 mx-1 text-light d-block">Credentialing</a>
                            <a href="" class="p-1 mx-1 text-light d-block">Medical Billing</a>
                            <a href="" class="p-1 mx-1 text-light d-block">About us</a>
                            <a href="" class="p-1 mx-1 text-light d-block">Contact us</a>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="icons_social">
                            <a href="" class="text-light"><i class="fab fa-facebook-f mx-2"></i></a>
                        </div>
                        <div class="icons_social mx-3">
                            <a href="" class="text-light"><i class="fab fa-linkedin-in mx-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>--}}
        </div>
    </section>
    <div class="copyright_line py-1">
        <div class="container">
            <div class="d-flex justify-content-center align-items-center">
                <div>
                    <p class="text-light">
                        Copyright © 2022 Atlantis RCM
                    </p>
                </div>
            </div>
        </div>

    </div>
</footer>
<script>
    $("#contact_form_id").submit(function (event) {
    event.preventDefault();
    let formData = new FormData($('#contact_form_id')[0]);
    $.ajax({
    type: "POST",
    url: "{{ route('contact_us_form') }}",
    processData: false,
    data: formData,
    contentType: false,
    beforeSend: function (msg) {
    },
    success: function (msg) {
        Swal.fire({
            icon: 'success',
            text: "Thank you for your consideration. We will get back to you as soon as we can.",
            confirmButtonColor: '##4ac8ca',
        })
    $('#contact_form_id')[0].reset();
    }});
    });
</script>
</body>
</html>

