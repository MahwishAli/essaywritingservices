<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function articleWriting()
    {
        return view('services.article-writing');
    }

    public function researchPaperWriting()
    {
        return view('services.research-paper-writing');
    }

    public function proposalWriting()
    {
        return view('services.proposal-writing');
    }

    public function newsletterWriting()
    {
        return view('services.newsletter-writing');
    }

    public function cvWriting()
    {
        return view('services.cv-writing');
    }

    public function pptDesignService()
    {
        return view('services.ppt-design-service');
    }

    public function proofreadingAndEditing()
    {
        return view('services.proofreading-and-editing');
    }

    public function ghostWriting()
    {
        return view('services.ghost-writing');
    }

    public function urduWriting()
    {
        return view('services.urdu-writing');
    }

    public function dissertationWriting()
    {
        return view('services.dissertation-writing');
    }

    public function termPaperWriting()
    {
        return view('services.term-paper-writing');
    }

    public function ebookWriting()
    {
        return view('services.ebook-writing');
    }

    public function assignmentWriting()
    {
        return view('services.assignment-writing');
    }

    public function contentWriting()
    {
        return view('services.content-writing');
    }

    public function productDescriptionWriting()
    {
        return view('services.product-description-writing');
    }

    public function courseworkWriting()
    {
        return view('services.coursework-writing');
    }

    public function thesisWriting()
    {
        return view('services.thesis-writing');
    }

    public function academicWriting()
    {
        return view('services.academic-writing');
    }

    public function personalStatementWriting()
    {
        return view('services.personal-statement-writing');
    }

    public function caseStudy()
    {
        return view('services.case-study');
    }

    public function pressReleaseWriting()
    {
        return view('services.press-release-writing');
    }

    public function sopWriting()
    {
        return view('services.sop-writing');
    }
}
