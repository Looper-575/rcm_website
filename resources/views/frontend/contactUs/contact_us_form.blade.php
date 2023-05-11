<div class="row my-4">
    <div class="col-6 d-none d-xl-block" style="padding: 0">
        <img class="w-100" style="height: 588px;" src="{{url('/public/frontend/assets/img/home/0-6-signup-section-doctor-image.png')}}" alt="image" >
    </div>
    <div class="col-12 col-xl-5" style="padding: 0">
        <form class="seven-form" id="contact_form_id">
            @csrf
            <h3 class=" app-hea text-center mb-2">Make An Appointment</h3>
            <div class="form-group">
                <input type="text" class="form-control text-grey" name="name" id="name_id" placeholder="Your Name" required>
            </div>
            <div class="form-group">
                <input type="email" class="form-control text-grey" name="email" id="email_id" placeholder="Your Email" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control text-grey" name="service" id="service_id" placeholder="Your Specialty" required>
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
            <div class="form-group">
                <select class="form-control text-grey" name="time_zone" required>
                    <option selected disabled value="">Select Time Zone</option>
                    <option value="Eastern Standard Time">Eastern Standard Time</option>
                    <option value="Central Standard Time">Central Standard Time</option>
                    <option value="Mountain Standard Time">Mountain Standard Time</option>
                    <option value="Pecific Standard Time">Pecific Standard Time</option>
                </select>
            </div>
            <p class=" required mt-2">All the fields are required</p>
            <div class="d-flex justify-content-center">
                <button class="btn-7 text-light  text-center mt-1" id="frm_smt_alrt" type="submit">Submit</button>
            </div>
        </form>
    </div>
</div>
