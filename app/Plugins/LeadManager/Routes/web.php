<?php

use App\Plugins\LeadManager\Models\Lead;
use Illuminate\Support\Facades\Route;

Route::get('/contact', function () {
    return view('lead-manager::lead-form');
});

Route::post('/contact', function (\Illuminate\Http\Request $request) {
    Lead::create($request->all());
    return redirect('/contact')->with('success', 'Lead submitted successfully!');
})->name('leads.store');
