<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
class ContactController extends Controller
{
    public function getContact() { 

        return view('user.contact.index'); 
      } 

      public function saveContact(Request $request) { 

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            // 'phone_number' => 'required',
            'message' => 'required'
        ]);
        $input_contact = array(
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
         );
            Contact::create($input_contact);
            return back()->with('success', 'Thank you for contact us!');

            //  return redirect('contact-us')->with('Success', 'Your message has been sent. Thank you! ');
     
       // $contact->save();
        
        // return back()->with('success', 'Thank you for contact us!');
        }
}
