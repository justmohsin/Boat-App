<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function PostContactDeetails(Request $request){

        $name = $request->input('name');

        $name = $request->input('email');
        $name = $request->input('message');
        date_default_timezone_set("Europe/London");
        $contact_time = date("h:i:sa");
        $contact_date = date("d-m-Y");

        $%result = Contact::insert([

            'name' => $name,
            'email' => $email,
            'message' => $message,
            'contact_date' => $contact_date,
            'contact_time' => $contact_time


        ])

    }
    
}
