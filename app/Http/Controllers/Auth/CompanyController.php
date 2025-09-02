<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CompanyPage;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = CompanyPage::latest()->get();
        return view('home', compact('companies'));
    }
}
