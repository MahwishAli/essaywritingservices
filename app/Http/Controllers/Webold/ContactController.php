<?php

namespace App\Http\Controllers\Web;

use App\Contact;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactMailRequest;
use App\Mail\ContactAdminMail;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    // public function sendContactMail(ContactMailRequest $request)
    // {
    //     return $request->all();

    //     $contact = Contact::create($request->all());

    //     // Send mail to user
    //     Mail::to($request->email)->queue(new ContactMail($contact));
    //     // Send mail to user
    //     Mail::to(env('MAIL_FROM_ADDRESS', 'info@essaywritingservices.co.uk') )->queue(new ContactAdminMail($contact));

    //     return redirect()->route('get.in.touch')->with('success', 'Thank you for reaching out!');
    // }

    public function store(ContactMailRequest $request)
    {

        // return $request->email;

        $contact = Contact::create($request->all());

        // Send mail to user
        Mail::to($contact->email)->send(new ContactMail($contact));
        // Send mail to user
        Mail::to(env('MAIL_FROM_ADDRESS', 'info@essaywritingservices.co.uk'))->send(new ContactAdminMail($contact));

        return response()->json(['success'=>'Successfully']);
    }
}
