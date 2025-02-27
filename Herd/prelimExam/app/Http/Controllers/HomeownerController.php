<?php

namespace App\Http\Controllers;

use App\Models\Homeowner;
use Illuminate\Http\Request;

class HomeownerController extends Controller
{
    /**
     * Store a newly created homeowner in the database.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:homeowners,email',
            'phone' => 'required|string|max:255',
            'address' => 'required|string|max:255',
        ]);

        Homeowner::create($request->all());

        return redirect()->back()->with('success', 'Homeowner created successfully.');
    }
}

