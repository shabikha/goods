<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactProcessMail; // Ensure this is correctly imported

class ContactController extends Controller
{
    public function contactprocess(Request $request)
{
      $validated = $request->validate([
          'name' => 'required|string|max:255',
          'email' => 'required|email|max:255',
          'subject' => 'nullable|string|max:255',
          'message' => 'nullable|string|max:5000',
          'Company_name' => 'nullable|string|max:255',
          'phone' => 'nullable|string|max:25',
          'country_code' => 'nullable|string|max:25',
          'country' => 'nullable|string|max:255',
          'Select_quote' => 'nullable|string|max:255',
          'You_Departure' => 'nullable|string|max:255',
          'You_Arrival' => 'nullable|string|max:255',
          'your_recipient' => 'nullable|string|max:255',
          'category' => 'nullable|string|max:255',
          'location' => 'nullable|string|max:255',
          'from' => 'nullable|string|max:255',
          'to' => 'nullable|string|max:255',
          'vehicle' => 'nullable|string|max:255',
      ]);

     //Prepare the data for the email
    $data = [
        'name' => $request->name,
        'email' => $request->email,
        'subject' => $request?->subject,
        'message' => $request?->message, // Corrected here
        'Company_name' => $request?->Company_name,
        'phone' => $request?->phone,
        'country_code' => $request?->country_code,
        'country' => $request?->country,
        'Select_quote' => $request?->Select_quote,
        'You_Departure' => $request?->You_Departure,
        'You_Arrival' => $request?->You_Arrival,
        'your_recipient' => $request?->your_recipient,
        'category' => $request?->category,
        'location' => $request?->location,
        'from' => $request?->from,
        'to' => $request?->to,
        'vehicle' => $request?->vehicle,
    ];


    // Send the email
    Mail::to('shoaibrem7@gmail.com')->send(new ContactProcessMail($data));

    return back()->with('success', 'Your message has been sent successfully!');
}
}
