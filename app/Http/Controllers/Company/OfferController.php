<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Offer;
use App\Models\Company;

class OfferController extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $offers = Offer::where('company_id', Auth::id())->get();
        $companies = Company::where('id', Auth::id())->get();

        foreach($companies as $company){
            $name = $company->name;
        }

        return view('company.offer.index', compact('offers','name'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('company.offer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Offer::create([
            'title' => $request->title,
            'content'=>$request->content,
            'company_id'=>auth()->user()->id,
        ]);

        return to_route('company.offer');
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
