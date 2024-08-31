<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    // to return all listings
    public function index(){
        return view('listings.index', [

            'listings' => Listing::latest()->filter(request(['tag', 'search']))->paginate(4),
        ]);
    }
    // to return a single listing
    public function show(Listing $listing){
        return view('listings.show', [
            'listing' => $listing
        ]);
    }
    public function create(){
       return view('listings.create');
    }
    // store Listing data
    public function store(Request $request){
        $formFileds = $request->validate([
            'title' => 'required', 
            'company' => ['required', Rule::unique('listings', 'company')],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required' , 'email'],
            'tags' => 'required',
            'description' => 'required',
        ]);
        
        if($request->hasFile('logo')){
            $formFileds['logo'] = $request->file('logo')->store('logos', 'public');
        }
        Listing::create($formFileds);
        return redirect('/')->with('message', 'Listing created successfully');
    }
}
