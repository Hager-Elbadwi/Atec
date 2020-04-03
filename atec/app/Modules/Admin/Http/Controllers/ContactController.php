<?php

namespace App\Modules\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        
        $contacts = Contact::orderBy('created_at', 'DESC')->paginate(10);
        return view('admin::pages.Contact.index', compact('contacts'));

    }

    public function show(Contact $contact)
    {
        return view('admin::pages.Contact.show', compact('contact'));
    }
    
    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('admin.contact.index')->with('msg', 'Deleted Message');
    }
}
