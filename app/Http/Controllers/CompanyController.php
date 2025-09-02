<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CompanyPage; // Make sure you have a Company model

class CompanyController extends Controller
{
    public function index()
    {
        // Load companies from the database
        $companies = CompanyPage::all();

        // Pass them to your view
        return view('home', compact('companies'));
    }
}
