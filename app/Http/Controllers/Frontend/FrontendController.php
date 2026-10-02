<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Counsellor;
use App\Models\Course;
use Illuminate\Support\Facades\File;

class FrontendController extends Controller
{


    public function homePage()
    {
          $courses = json_decode(
            File::get(resource_path('data/courses.json')),
            true
        );

        // return $categories;

        return view('frontend.pages.home.home', compact('courses'));
    }

    public function aboutPage()
    {
        
        return view('frontend.pages.about.about');
    }

    public function contactPage()
    {
        return view('frontend.pages.contact');
    }
   
    public function registration()
    {
        return view('frontend.pages.register');
    }

      public function login()
    {
        return view('frontend.pages.login');
    }
   
    public function privacyPolicy(){
        return view('frontend.pages.privacy-policy');
    }
    public function termsConditions(){
        return view('frontend.pages.terms-conditions');
    }

    public function owner(){
        return view('frontend.pages.teams.owner');
    }
    
      public function faqs(){
        return view('frontend.pages.faq.index');
    }

    public function onlinePrograms(){
        return view('frontend.pages.courses.online-programs');
    }
     public function ieltsPrograms(){
        return view('frontend.pages.courses.ielts');
    }
     public function ptePrograms(){
        return view('frontend.pages.courses.pte');
    }
    
}
