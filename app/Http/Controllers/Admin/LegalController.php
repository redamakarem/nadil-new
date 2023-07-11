<?php

namespace App\Http\Controllers\Admin;

use App\Models\Legal;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LegalController extends Controller
{
    public function index()
    {
        return view('admin.legal.index');
    }

    public function create()
    {
        return view('admin.legal.create');
    }

    public function privacy()
    {
        $privacy = Legal::where('slug', 'privacy')->first();
        return view('admin.legal.privacy', compact('privacy'));
    }

}
