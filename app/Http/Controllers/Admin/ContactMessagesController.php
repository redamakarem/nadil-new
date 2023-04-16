<?php

namespace App\Http\Controllers\Admin;

use App\Models\SiteContact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactMessagesController extends Controller
{
    public function index()
    {
        return view('admin.contact-message.index');
    }

    public function show($id)
    {
        $contact = SiteContact::findOrFail($id);
        return view('admin.contact-message.show',compact('contact'));
    }
}
