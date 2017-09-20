<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Inquiry;

class InquiryController extends Controller
{
    public function create()
    {
    	return view('contact_form');
    }

    public function postInquiry(Request $request)
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

	    $inquiry = new Inquiry;

	    $inquiry->email = $request->email;
	    $inquiry->name = $request->name;
	    $inquiry->subject = $request->subject;
	    $inquiry->message = $request->message;

	    $inquiry->save();
	    return $this->postInquiry($request);
    }


}
