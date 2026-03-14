<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // Show all contact records
    public function index()
    {
        $contacts = Contact::latest()->get();
        return view('admin.contacts.index', compact('contacts'));
    }





    // Show single contact detail
    public function show($id)
    {
        $contact = Contact::where('id', $id)->first();
        if (!$contact) {
            return redirect()->route('admin.contacts.index')->with('error', 'Contact not found.');
        }
        return view('admin.contacts.show', compact('contact'));
    }






    // Delete a contact
    public function destroy($id)
    {
        Contact::where('id', $id)->delete();
        return redirect()->route('admin.contacts.index')->with('success', 'Contact deleted successfully.');
    }
}
