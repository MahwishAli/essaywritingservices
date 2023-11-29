<?php

namespace App\Http\Controllers\Web;

use App\AcademicLevel;
use App\Country;
use App\Deadline;
use App\Fare;
use App\Http\Controllers\Controller;
use App\PaperType;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $paperTypes = PaperType::all();
        $academic_levels = AcademicLevel::orderBy('id','asc')->get();
        $deadlines = Deadline::all();
        $fares = Fare::all();

        return view('pages.home', compact('fares','paperTypes', 'academic_levels', 'deadlines'));
    }

    public function about()
    {
        //  "Artisan"::call('cache:clear');
        //  "Artisan"::call('config:cache');
        // Artisan::call('optimize');
        // "Artisan"::call('storage:link');
        // dd("Cache is cleared");

        return view('pages.about');
    }

    public function getFare(Request $request)
    {
        return Fare::where(['academic_level_id' => $request->academic_level_id, 'deadline_id' => $request->deadline_id])->firstOrFail();

    }

    public function services()
    {
        return view('pages.services');
    }

    public function contactUs()
    {
        $countries = Country::all();
        return view('pages.contact-us', compact('countries'));
    }

    public function refundPolicy()
    {
        return view('pages.refund-policy');
    }

    public function termsAndConditions()
    {
        return view('pages.terms-and-conditions');
    }

    public function guarantees()
    {
        return view('pages.guarantees');
    }

    public function privacyPolicy()
    {
        return view('pages.privacy-policy');
    }

    public function revisionPolicy()
    {
        return view('pages.revision-policy');
    }

    public function sitemap()
    {
        return view('pages.sitemap');
    }

    public function plans()
    {
        return view('pages.plans');
    }

    public function reviews()
    {
        return view('pages.reviews');
    }

    public function samples()
    {
        return view('pages.samples');
    }

    public function thankYou()
    {
        return view('pages.thank-you');
    }

}
