<?php

namespace App\Http\Controllers\UserControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\SendContactMail;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contactUs(Request $request)
    {
        if($request->isMethod('post'))
        {
            $contact = new Contact;
            $contact->name = $request->name;
            $contact->email = $request->email;
            $contact->message = $request->message;
            $contact->save();
        }
        $maildata = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ];
        Mail::to('hj252214@gmail.com')->send(new SendContactMail($maildata));
        return redirect()->back()->with(['success' => 'Message Sent Successfully..']);
    }
}
