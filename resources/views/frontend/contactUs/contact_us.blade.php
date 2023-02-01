<section class="Connect-Us py-5">
    <div class="container">
        <div>
            <h2 class="Connect-head text-blue ">Connect with Us</h2>
            <p class="Connect-para text-grey">Our mission is to eliminate repetitive administrative tasks in healthcare organizations and individual practices so that
                they can exceed revenue and growth. </p>
            <div class="row" style="margin-top: 75px;">
                <div class="col-6 d-none d-xl-block" style="padding: 0">
                    <img class="w-100" src="{{url('/public/frontend/assets/img/home/0-6-signup-section-doctor-image.png')}}" alt="image" >
                </div>
                <div class="col-12 col-xl-5" style="padding: 0">
                    <form class="seven-form" id="contact_form_id" reset>
                        @csrf
                        <h3 class=" app-hea text-center">Make An Appointment</h3>
                        <p class=" foam-para text-center">Fill the form and send me</p>
                        <div class="form-group">
                            <input type="text" class="form-control text-grey" name="name" id="name_id" placeholder="Name" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control text-grey" name="service" id="service_id" placeholder="Enter Service" required>
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control text-grey" name="phone_number" id="phone_number_id" placeholder="Phone Number" required>
                            <img class="seven-icon" src="{{url('/public/frontend/assets/img/home/0-6-icon-contact-details.png')}}" alt="Image 1">
                        </div>
                        <div class="form-group">
                            <input type="date" class="form-control text-grey" id="date_id" name="date" placeholder="Choose Date" required>
                        </div>
                        <div class="form-group">
                            <input type="time" class="form-control text-grey" id="time_id" name="time" placeholder="Choose Time" required>
                        </div>
                        <p class=" required mt-2">All the fields are required</p>
                        <button class="btn-7 text-light  text-center mt-1" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
