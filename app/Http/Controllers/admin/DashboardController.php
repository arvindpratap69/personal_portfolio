<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function admin_Dashboard()
    {
        // echo "Hello Dashboard ";
        // die;
        return   view('admin.dashboard');
    }


    function admin_portfolio()
    {
        return view('admin.portfolio.list');
    }
    function admin_contact()
    {
        $contacts = Contact::all();
        $data['contacts'] = $contacts;
        return view('admin.contact.list', $data);
    }
    public function deleteContact(Request $request, $id)
    {
        $contact = Contact::find($id);

        if (!$contact) {
            session()->flash('error', 'Home record Not Found In Your Database');
        } else {
            $contact->delete();
            session()->flash('success', 'Contact record Deleted Successfully');
        }

        return redirect()->route('admin.contact');
    }
    function admin_blog()
    {
        return view('admin.blog.list');
    }
}
