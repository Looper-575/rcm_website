<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUs;

class MainController extends Controller
{
    public function index()
    {
        $data['title']= 'Atlantis Revenue Cycle Management System';
        $data['meta_description']= 'We provide insurance verification, RCM billing, patient billing, and a wide range of medical billing services to make your medical practice a gold mine';
        $data['meta_tags']= 'insurance verification, insurance verification specialist, insurance verification form, dental insurance verification , rcm , rcm billing services, rcm medical billing , rcm billing , patient billing services , rcm services';
        return view('frontend.index', $data);
    }

    public function patient_experience()
    {
        $data['title']= 'Atlantis Patient Engagement Through Revenue Cycle Management';
        $data['meta_description']= "Our patient management services and patient care management are designed to improve the quality of your patient's care at Atlantis RCM";
        $data['meta_tags']= 'patient management, patient management software, patient care management, patient management softwares, patient access management';
        return view('frontend.patient_experience', $data);
    }
    public function medical_billing()
    {
        $data['title']= 'Atlantis Medical Billing Service Provider';
        $data['meta_description']= 'You can outsource medical billing whether you are interested in dental billing outsourcing or any other; it all depends on your specialty';
        $data['meta_tags']= 'outsourcing medical billing, aps medical billing, medical billing specialist, medical billing service, medical billing lawyer, medical billing work from home, radiology medical billing, outsource medical billing, individual healthcare ';
        return view('frontend.medical_billing', $data);
    }
    public function telehealth()
    {
        $data['title']= 'Atlantis Telehealth solutions and services Provider';
        $data['meta_description']= 'There is a need for VA telehealth outsourcing in order to streamline telehealth outpatient programs in the telehealth urgent care sector.';
        $data['meta_tags']= 'telehealth service, telehealth urgent care, va telehealth, telehealth nurse practitioner , anthem telehealth, us telehealth';
        return view('frontend.telehealth', $data);
    }
    public function workforce()
    {
        $data['title']= 'Atlantis Workforce Extension Service';
        $data['meta_description']= 'As one of the leading hospital billing outsourcing companies, Atlantis RCM is at the forefront of helping doctors outsource medical billing services.';
        $data['meta_tags']= 'outsource medical billing, bill gosling outsourcing, dental billing outsourcing, medical billing outsourcing, outsource medical billing services, hospital billing outsourcing companies, outsource billing, outsourced medical billing services';
        return view('frontend.workforce', $data);
    }
    public function practice_manage()
    {
        $data['title']= 'Atlantis Medical Practice Management Service';
        $data['meta_description']= 'Atlantis RCM provides comprehensive dental practice management solutions, including best practice change management, so that you can focus on your passion.';
        $data['meta_tags']= 'practice management, practice management system, physicians practice management, physician practice management , dental practice management, best practice management , rcm practice management';
        return view('frontend.practice_manage', $data);
    }
    public function absolute_revenue()
    {
        $data['title']= 'Atlantis Complete Revenue Cycle Management';
        $data['meta_description']= 'Our rcm medical billing and patient billing services aim to improve revenue cycle management and profitability for our clients';
        $data['meta_tags']= 'rcm billing services, rcm medical billing company, rcm medical billing, rcm billing, medical billing and revenue cycle management services, patient billing services, outbound revenue cycle management solutions, rcm website, medical billing rcm, rcm medicine, rcm services, billing rcm, enter health billing revenue, medical billing services, specialized revenue cycle management, cloud billing service,rcm in medical billing, complete revenue cycle, rcm medical coding company, billing service medical, medical billing service, patient billing cycle, revenue cycle management medical billing, medical billing strategic plan, rcm health';
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
        $data['meta_description']= 'We provide insurance verification, RCM billing, patient billing, and a wide range of medical billing services to make your medical practice a gold mine';
        $data['meta_tags']= '';
        return view('frontend.about_us', $data);
    }
    public function healthC_analytics()
    {
        $data['title']= 'Atlantis Health Care Analytics Service';
        $data['meta_description']= 'Atlantis RCM improves financial outcomes in healthcare. Offers healthcare analytics solutions to measure, manage and report on the metrics that matter.';
        $data['meta_tags']= 'rcm healthcare, healthcare analytics, predictive analytics in healthcare , big data analytics in healthcare, healthcare analytics companies, business analytics in healthcare, healthcare analytics jobs, big data analytics for healthcare, data analytics healthcare, healthcare analytics certificate, healthcare data analytics companies, healthcare analytics certification, certificate in healthcare analytics';
        return view('frontend.healthC_analytics', $data);
    }
    public function e_health()
    {
        $data['title']= 'Atlantis Digital Health Solution';
        $data['meta_description']= 'The use of RCM Digital Health transforms how digital health companies and digital health startups work and support disease treatment and management.';
        $data['meta_tags']= 'digital health passport, digital health companies, health o meter digital scale, digital marketing health care, health care digital marketing, digital marketing in health care, ibm digital health pass, lancet digital health, ucm digital health, proteus digital health, boeing prognostic health monitoring digital twin maintenance, cvs health temple digital thermometer, health herald digital therapy machine, aircraft prognostic health monitoring digital twin maintenance, digital health startups, digital twin maintenance boeing prognostic health monitoring';
        return view('frontend.e_health', $data);
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
        $data['title']= 'Atlantis RCM Custom Solutions Service';
        $data['meta_description']= '';
        $data['meta_tags']= ' physician practice management , dental practice management, best practice management , rcm practice management, insurance verification, insurance verification specialist, digital health passport, digital health companies, health o meter digital scale, rcm healthcare, healthcare analytics, predictive analytics in healthcare , rcm billing services, rcm medical billing company, rcm medical billing, rcm billing, medical billing and revenue cycle management services,';
        return view('frontend.all_solutions', $data);
    }
    public function medical_credentialing()
    {
        $data['title']= 'Atlantis Medical Credentialing Service Provider';
        $data['meta_description']= "We provide credentialing with insurance, medical credentials for Medicare, and medical staff credentialing, to support our clients' success";
        $data['meta_tags']= 'credentialing with aetna, credentialing with insurance, credentialing with insurance companies, credentialing for medicare, medical credentialing, medical credentialing services, medical credentialing specialist, medicaid credentialing, medical assistant credentials, credentialing in medical billing, medical billing and credentialing services, credentialing medical, medical credentialing companies, medical credentialing software, medical credentials, credentials for medical';
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
        $data['title']= 'Specialty | Internal Medicine';
        $data['meta_description']= '';
        $data['meta_tags']= '';
        return view('frontend.taxonomies.internalMedicine', $data);
    }
    public function nephrology()
    {
        $data['title']= 'Specialty | Nephrology';
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
