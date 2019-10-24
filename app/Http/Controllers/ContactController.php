<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Contact;

class ContactController extends Controller
{

    

    public function sendmessage(Request $request)
    {
        $this->validate($request, [
            'sendername' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $contact = new Contact;
        $contact->name = $request->sendername;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;

        $contact->save();

        return back()->with('success', 'Your message has been sent successfully!');
    }

    public function showcontact()
    {
        $data = array('title', 'All Messages');
        $contacts = Contact::all();
        return view('admin.contacts')->with('title');
    }
}
