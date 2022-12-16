<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Project;
use App\Models\Review;
use Illuminate\Support\Facades\Mail;
use App\Mail\Sendmail;
use App\Models\User;
use Hash;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        $reviews = Review::all();
        return view('index2', compact('reviews','projects'));
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
    // send contact email
    public function send_contact(Request $request)
    {
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->comments= $request->comments;
        $contact->subject = "New Consultation Enquiry";
        // $contact->save();
        // send email to admin
        $data['view'] = 'sendemail';
        $data['subject'] = $contact->subject;
        $data['email'] = $contact->email;
        $data['name'] = $contact->name;
        $data['message'] = $contact->comments;
        
        try {
            Mail::to(get_setting('email'))->queue(new Sendmail($data));
        } catch (\Exception $e) {
            // dd($e);
            return back()->withError('Email not sent. Please try again');
        }  
        try {
            Mail::to(get_setting('email_2'))->queue(new Sendmail($data));
        } catch (\Exception $e) {
            // dd($e);
            return back()->withError('Email not sent. Please try again');
        } 
        $contact->save();
        return back()->withSuccess('Email sent. We would contact you as soon as we can.');
    }

    public function services()
    {
        return view('services');
    }

    // admin login
    public function admin_login()
    {
        return view('admin.login');
    }
    public function admin_logout()
    {
        auth()->logout();
        return redirect('/');
    }

    public function login_jayflash(Request $request)
    {
        $user = User::where('user_role', 'admin')->where('email', $request->email)->first();
        if($user != null){
            if(Hash::check($request->password, $user->password)){
                if($request->has('remember')){
                    auth()->login($user, true);
                }
                else{
                    auth()->login($user, false);
                }
            }
        }
        return back()->withError('Something went wrong');
    }
}
