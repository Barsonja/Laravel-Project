<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Contact;

class ContactController extends Controller
{
    public function create()
    {
    	return view('contact_form');
    }

    public function postContact(Request $request)
    {
    	$this->validate($request, [
    		'email' => 'required|email',
		    'name' => 'required',
		    'subject' => 'required',
		    'message' => 'required|min:24',
	    ]);

	    $data = array(
	    	'email' => $request->email,
		    'name' => $request->name,
		    'subject' => $request->subject,
		    'user_msg' => $request->message
	    );
	    Mail::send('emails.contact_message', $data, function($message) use ($data) {
	    	$message->from($data['email']);
		    $message->to('test@example.io');
		    $message->subject($data['subject']);
	    });

	    return redirect('/');
    }

    public function store(Request $request)
    {
	    $this->validate($request, array(
		    'email' => 'required|email',
		    'name' => 'required',
		    'subject' => 'required',
		    'message' => 'required',
	    ));

	    $contact = new Contact;

	    $contact->email = $request->email;
	    $contact->name = $request->name;
	    $contact->subject = $request->subject;
	    $contact->message = $request->message;

	    $contact->save();
	    return $this->postContact($request);
    }


}
