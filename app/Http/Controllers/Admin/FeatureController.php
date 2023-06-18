<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Feature;
use App\Models\Offer;

class FeatureController extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $features = Feature::with('offer')->get();

        return view('admin.feature.index', compact('features'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $offers = Offer::all();
        return view('admin.feature.create', compact('offers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Feature::create([
            'name' => $request->name,
            'offer_id' => $request->offer_id,
        ]);

        return to_route('admin.feature');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
