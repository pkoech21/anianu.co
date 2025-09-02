<?php

namespace App\Http\Controllers;

use App\Models\CompanyPage;
use Illuminate\Http\Request;

class CompanyPageController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'required|string',
            'whatsapp'    => 'required|string|max:20',
            'social'      => 'nullable|url',
            'profile'     => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'images.*'    => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Save profile image
        $profilePath = null;
        if ($request->hasFile('profile')) {
            $profilePath = $request->file('profile')->store('profiles', 'public');
        }

        // Save multiple images
        $imagePaths = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imagePaths[] = $image->store('company_images', 'public');
            }
        }

        // Save record
        $companyPage = CompanyPage::create([
            'title'       => $request->title,
            'description' => $request->description,
            'whatsapp'    => $request->whatsapp,
            'social'      => $request->social,
            'profile'     => $profilePath,
            'images'      => $imagePaths,
        ]);

        return response()->json([
            'message' => 'Company Page saved successfully',
            'data'    => $companyPage,
        ]);
    }
}
