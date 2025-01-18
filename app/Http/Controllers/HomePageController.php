<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\About;
use App\Models\Skill;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use App\Mail\ContactThankYou;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class HomePageController extends Controller
{
    public function index()
    {
        $latestHome = Home::latest()->first();
        $data['latestHome'] = $latestHome;
        return view('index', $data);
    }

    function about()
    {
        $latestAbout = About::latest()->first();
        $data['latestAbout'] = $latestAbout;
        return view('about', $data);
    }
    function portfolio()
    {
        $allPortfolio = Portfolio::all();
        $data['allPortfolio'] = $allPortfolio;
        return view('portfolio', $data);
    }
    public function contact()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required',
        ]);

        if ($validator->passes()) {
            $contact = new Contact();
            $contact->name = trim($request->name);
            $contact->email = trim($request->email);
            $contact->message = trim($request->message);
            $contact->save();
            // Send thank you email to user
            Mail::to($contact->email)->send(new ContactThankYou($contact));
            // Send contact details email to admin
            // Mail::to('your_email@example.com')->send(new AdminNotification($data));
            return redirect()->back()->with('success', 'Thank you for contacting us!');
        } else {
            return redirect()->back()->withInput()->withErrors($validator);
        }
    }
    function blog()
    {
        return view('blog');
    }
    function skills()
    {
        $skills = Skill::all();
        $data['skills'] = $skills;

        return view('skills', $data);
    }
    public function downloadCV()
    {
        $filePath = public_path('files/arvind-cv.pdf');
        $headers = ['content-Type : application/pdf'];
        $fileName = 'Arvind-Cv.pdf';
        return response()->download($filePath, $fileName, $headers);
    }
}
