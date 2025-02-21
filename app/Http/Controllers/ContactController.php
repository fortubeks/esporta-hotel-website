<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }
    public function sendMessage()
    {
        //send email
        $data = request()->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'message' => 'required|string'
        ]);
        Mail::to(env('ADMIN_EMAIL'))->send(new ContactMail($data));
        return redirect()->back()->with('success', 'Message sent successfully');
    }
}
