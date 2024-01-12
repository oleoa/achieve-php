<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\Contact as ContactMail;
use Illuminate\Support\Facades\Mail;

class Contact extends Controller
{
  public function index($locale)
  {    
    $this->title('Contact Us');

    $this->current('contact');

    $this->locale($locale);

    return $this->load('contact');
  }

  public function send(Request $request)
  {
    $this->validate($request, [
      'name' => 'required',
      'email' => 'required|email',
      'phone' => 'required',
      'message' => 'required'
    ]);

    $data = $request->all();
    
    Mail::to(env('MAIL_USERNAME'))->send(new ContactMail($data));

    return redirect()->back()->with('success', 'Your message has been sent successfully.');
  }
}
