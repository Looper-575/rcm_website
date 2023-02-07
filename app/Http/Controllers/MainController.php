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
        $data['title']= 'Large Medical Groups';
        $data['meta_description']= '';
        $data['meta_tags']= '';
        return view('frontend.unyeild_commitment', $data);
    }
    public function about_us()
    {
        $data['title']= 'Atlantis | About Us';
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
        $data['title']= 'Atlantis RCM | All Solutions';
        $data['meta_description']= '';
        $data['meta_tags']= '';
        return view('frontend.all_solutions', $data);
    }
    public function medical_credentialing()
    {
        $data['title']= 'Atlantis RCM | Medical Credentialing';
        $data['meta_description']= '';
        $data['meta_tags']= '';
        return view('frontend.medical_credentialing', $data);
    }
    public function texo_about_us()
    {
        $data['title']= 'Small Medical Practices';
        $data['meta_description']= '';
        $data['meta_tags']= '';
        return view('frontend.texo_about_us', $data);
    }
    public function contact_us()
    {
        $data['title']= 'Atlantis RCM | Contact Us';
        $data['meta_description']= '';
        $data['meta_tags']= '';
        return view('frontend.contact_us', $data);
    }
    public function comming_soon()
    {
        $data['title']= 'Atlantis RCM';
        $data['meta_description']= '';
        $data['meta_tags']= '';
        return view('frontend.comming_soon', $data);
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
        $data['title']= 'Specialty | Laboratry';
        $data['meta_description']= '';
        $data['meta_tags']= '';
        return view('frontend.taxonomies.laboratory', $data);
    }
    public function gastroentrology()
    {
        $data['title']= 'Specialty | Gastroentrology';
        $data['meta_description']= '';
        $data['meta_tags']= '';
        return view('frontend.taxonomies.gastroentrology', $data);
    }
    public function g_surgery()
    {
        $data['title']= 'Specialty | General Surgery';
        $data['meta_description']= '';
        $data['meta_tags']= '';
        return view('frontend.taxonomies.g_surgery', $data);
    }
    public function neurology()
    {
        $data['title']= 'Specialty | Neurology';
        $data['meta_description']= '';
        $data['meta_tags']= '';
        return view('frontend.taxonomies.neurology', $data);
    }
    public function internalMedicine()
    {
        $data['title']= 'Specialty | Otolaryngology';
        $data['meta_description']= '';
        $data['meta_tags']= '';
        return view('frontend.taxonomies.internalMedicine', $data);
    }
    public function nephrology()
    {
        $data['title']= 'Specialty | Internal Medicine';
        $data['meta_description']= '';
        $data['meta_tags']= '';
        return view('frontend.taxonomies.nephrology', $data);
    }
    public function dermatology()
    {
        $data['title']= '';
        $data['meta_description']= 'Specialty | Dermatology';
        $data['meta_tags']= '';
        return view('frontend.taxonomies.dermatology', $data);
    }
    public function familyPractice()
        {
            $data['title']= 'Specialty | Family Practice';
            $data['meta_description']= '';
            $data['meta_tags']= '';
            return view('frontend.taxonomies.familyPractice', $data);
        }
    public function ophthalmology()
        {
            $data['title']= 'Specialty | Ophthalmology';
            $data['meta_description']= '';
            $data['meta_tags']= '';
            return view('frontend.taxonomies.ophthalmology', $data);
        }
    public function endocrinology()
        {
            $data['title']= 'Specialty | Endocrinology';
            $data['meta_description']= '';
            $data['meta_tags']= '';
            return view('frontend.taxonomies.endocrinology', $data);
        }
    public function chiropractic()
        {
            $data['title']= 'Specialty | Chiropractic';
            $data['meta_description']= '';
            $data['meta_tags']= '';
            return view('frontend.taxonomies.chiropractic', $data);
        }
    public function cardiology()
        {
            $data['title']= 'Specialty | Cardiology';
            $data['meta_description']= '';
            $data['meta_tags']= '';
            return view('frontend.taxonomies.cardiology', $data);
        }
    public function allergy()
        {
            $data['title']= 'Specialty | Allergy';
            $data['meta_description']= '';
            $data['meta_tags']= '';
            return view('frontend.taxonomies.allergy', $data);
        }
    public function orthopedics()
        {
            $data['title']= 'Specialty | Orthopedics';
            $data['meta_description']= '';
            $data['meta_tags']= '';
            return view('frontend.taxonomies.orthopedics', $data);
        }
    public function painManagement()
        {
            $data['title']= 'Specialty | Pain Management';
            $data['meta_description']= '';
            $data['meta_tags']= '';
            return view('frontend.taxonomies.painManagement', $data);
        }
    public function dmeProviders()
        {
            $data['title']= 'Specialty | DME Providers';
            $data['meta_description']= '';
            $data['meta_tags']= '';
            return view('frontend.taxonomies.dmeProviders', $data);
        }
    public function podiatry()
        {
            $data['title']= 'Specialty | Podiatry';
            $data['meta_description']= '';
            $data['meta_tags']= '';
            return view('frontend.taxonomies.podiatry', $data);
        }
    public function urology()
        {
            $data['title']= 'Specialty | Urology';
            $data['meta_description']= '';
            $data['meta_tags']= '';
            return view('frontend.taxonomies.urology', $data);
        }
    public function gyn()
        {
            $data['title']= 'Specialty | Obstetrics & Gynecology';
            $data['meta_description']= '';
            $data['meta_tags']= '';
            return view('frontend.taxonomies.gyn', $data);
        }
    public function physicaltherapy()
        {
            $data['title']= 'Specialty | Physical Therapy';
            $data['meta_description']= '';
            $data['meta_tags']= '';
            return view('frontend.taxonomies.physicaltherapy', $data);
        }
    public function radiology()
        {
            $data['title']= 'Specialty | Radiology';
            $data['meta_description']= '';
            $data['meta_tags']= '';
            return view('frontend.taxonomies.radiology', $data);
        }
    public function urgentCare()
        {
            $data['title']= 'Specialty | Urgent Care';
            $data['meta_description']= '';
            $data['meta_tags']= '';
            return view('frontend.taxonomies.urgentCare', $data);
        }
    public function homehealth()
        {
            $data['title']= 'Specialty | Home Health';
            $data['meta_description']= '';
            $data['meta_tags']= '';
            return view('frontend.taxonomies.homehealth', $data);
        }
    public function rheumatology()
        {
            $data['title']= 'Specialty | Rheumatology';
            $data['meta_description']= '';
            $data['meta_tags']= '';
            return view('frontend.taxonomies.rheumatology', $data);
        }
    public function otolaryngology()
        {
            $data['title']= 'Specialty | Otolaryngology';
            $data['meta_description']= '';
            $data['meta_tags']= '';
            return view('frontend.taxonomies.otolaryngology', $data);
        }

}
