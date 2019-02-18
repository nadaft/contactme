<?php

namespace Nadaft\ContactMe\Http\Controllers;

use App\Http\Controllers\Controller;
use Nadaft\ContactMe\Models\ContactMe;
use Nadaft\ContactMe\Requests\ContactMeRequest;
use Illuminate\Support\Facades\Mail;
use Nadaft\ContactMe\Mail\ContactMeMailable;

class ContactMeController extends Controller
{
    public function showForm()
    {
        return view('contactme::contact_form');
    }

    public function send(ContactMeRequest $request)
    {
        $message['name'] = $request->name;
        $message['email'] = $request->email;
        $message['message'] = $request->message;

        ContactMe::create($message);

        Mail::to(config('contactme.mail_contactme_to'))->send(new ContactMeMailable(
            [
                "name" => $request->name,
                "email" => $request->email,
                "message" => $request->message
            ]
        ));

        return back()->withSuccess('Message Sent!');
    }
}
