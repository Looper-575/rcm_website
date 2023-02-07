@extends('frontend.layout.taxonomies')
@section('taxonomy')
    <div class="gasterology ps-lg-4">
        <div class="gast-img mt-5">
            <img  src="{{url('public/frontend/assets/img/RCM-Specialtity/cardiology.jpg')}}"  alt="Image 1">
        </div>
        <h2 class="text-blue fw-bold pt-4">Atlantis RCM for Cardiology</h2>
        <hr class="gasterology-line">
        <p class="text-grey">Cardiology is a complex field that requires a significant amount of documentation and billing,
            taking up 20+ hours each week for a substantial portion of cardiologists. Rather than relying on
            inflexible and one-size-fits-all systems for practice management, EHR and medical billing, our solution is
            tailored to support your unique workflows and minimize administrative tasks, whether you're seeing patients in an office setting or at a hospital.
        </p>

        <h3 class=" fw-bold pt-3">How Does Atlantis Help Cardiologists?</h3>

        <h5 class=" fw-bold pt-4">Faster data visualization</h5>
        <p class="text-grey">Cardiology-specific templates and proper data visualization serve to improve the patient interaction,
            making it simpler to meet patients, reduce prescription mistakes, and expedite clinical documentation.</p>

        <h5 class=" fw-bold">Patient Access</h5>
        <p class="text-grey">There are no boundaries to where you can work, whether you are providing care in a hospital or in an outpatient clinic.
            You can access the most recent information in the patient's file, communicate with the patient, and document on the go.
        </p>

        <h5 class=" fw-bold">Improve Cash Flow</h5>
        <p class="text-grey">Automating billing rules is a great way to avoid costly billing errors and gets paid faster by incorporating them into claim procedures.
            Measurement of cardiology-specific KPIs is important for providing insight into the performance of the practice.
        </p>

    </div>

@endsection
