<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUs;

class MainController extends Controller
{
    public function index()
    {
        $data['title']= 'Atlantis RCM';
        $data['meta_description']= '';
        $data['meta_tags']= '';
        return view('frontend.index', $data);
    }

    public function patient_experience()
    {
        $data['title']= 'Solution | Patient Experience';
        $data['meta_description']= '';
        $data['meta_tags']= '';
        return view('frontend.patient_experience', $data);
    }
    public function medical_billing()
    {
        $data['title']= 'RCM | Medical Billing';
        $data['meta_description']= '';
        $data['meta_tags']= '';
        return view('frontend.medical_billing', $data);
    }
    public function telehealth()
    {
        $data['title']= 'Solution | Telehealth';
        $data['meta_description']= '';
        $data['meta_tags']= '';
        return view('frontend.telehealth', $data);
    }
    public function workforce()
    {
        $data['title']= 'Solution | Workforce Extention';
        $data['meta_description']= '';
        $data['meta_tags']= '';
        return view('frontend.workforce', $data);
    }
    public function practice_manage()
    {
        $data['title']= 'Solution | Practice Management';
        $data['meta_description']= '';
        $data['meta_tags']= '';
        return view('frontend.practice_manage', $data);
    }
    public function absolute_revenue()
    {
        $data['title']= 'Solution | Absolute RCM';
        $data['meta_description']= '';
        $data['meta_tags']= '';
        return view('frontend.absolute_revenue', $data);
    }
    public function unyeild_commitment()
    {
        $data['title']= 'sOLUTION | Unyeild Commitment';
        $data['meta_description']= '';
        $data['meta_tags']= '';
        return view('frontend.unyeild_commitment', $data);
    }
    public function about_us()
    {
        $data['title']= 'About Us';
        $data['meta_description']= '';
        $data['meta_tags']= '';
        return view('frontend.about_us', $data);
    }
    public function healthC_analytics()
    {
        $data['title']= 'Solution | Health Care Analytics';
        $data['meta_description']= '';
        $data['meta_tags']= '';
        return view('frontend.healthC_analytics', $data);
    }
    public function tailored_solution()
    {
        $data['title']= '';
        $data['meta_description']= '';
        $data['meta_tags']= '';
        return view('frontend.tailored_solution', $data);
    }
    public function all_solutions()
    {
        $data['title']= 'RCM | All Solutions';
        $data['meta_description']= '';
        $data['meta_tags']= '';
        return view('frontend.all_solutions', $data);
    }
    public function medical_credentialing()
    {
        $data['title']= 'RCM | Medical Credentialing';
        $data['meta_description']= '';
        $data['meta_tags']= '';
        return view('frontend.medical_credentialing', $data);
    }
    public function texo_about_us()
    {
        $data['title']= '';
        $data['meta_description']= '';
        $data['meta_tags']= '';
        return view('frontend.texo_about_us', $data);
    }
    public function contact_us()
    {
        $data['title']= 'Contac Us';
        $data['meta_description']= '';
        $data['meta_tags']= '';
        return view('frontend.contact_us', $data);
    }
    public function error_404()
    {
        $data['title']= 'Atlantis RCM';
        $data['meta_description']= '';
        $data['meta_tags']= '';
        return view('frontend.errors.404', $data);
    }

    public function contact_us_form(Request $request)
    {
        ContactUs::create([
            'name'=>$request->name,
            'service'=>$request->service,
            'phone_number'=>$request->phone_number,
            'date'=>$request->date,
            'time'=>$request->time,
        ]);
        $response['status'] = 'Success';
        $response['message'] = 'Form Successfully Submited!';
        return $response;
    }


/* ----------------Speciality------------- */
    public function laboratry()
    {
        $data['title']= '';
        $data['meta_description']= '';
        $data['meta_tags']= '';
        return view('frontend.laboratry', $data);
    }

}
