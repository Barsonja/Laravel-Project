<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
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

    public function test()
    {
				/* $tests = DB::table('inquiries')
					->select('name', 'subject', 'message')
					->limit(10)->get(); */

				/* $user_email = Auth::user()->email;
				$tests = DB::table('inquiries')->where(function ($query) use ($user_email) {
					$query->where('email', '=', $user_email);
				})->get(); */

				$tests = DB::table('inquiries')
					->select('email', 'name', DB::raw("COUNT(*) as count"))
					->groupBy('email', 'name')
					->get();


	    return view('test', ['tests' => $tests]);
    }


}
