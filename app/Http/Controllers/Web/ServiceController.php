<?php

namespace App\Http\Controllers\web;

use App\AcademicLevel;
use App\Deadline;
use App\Http\Controllers\Controller;
use App\PaperType;
use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function show($slug)
    {
        // dd($slug);
        $service = Service::where(['slug' => $slug])->firstOrFail();
        $paper_types = PaperType::all();
        $academic_levels = AcademicLevel::orderBy('id','asc')->get();
        $deadlines = Deadline::all();
        $services=Service::all();
        return view('pages.services.show', compact('service','services','deadlines','academic_levels','paper_types'));
    }
    public function create(){
        $services = Service::orderBy('name', 'ASC')->get();
        return $services;

    }
}
