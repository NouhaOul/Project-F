<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Plat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class PlatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        $Plats = Plat::all();
        return view('products', compact("Plats", "categories"));

    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        $categories = Category::all();
        return view('addPlat', compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            // 'image_plat' => 'required',
            'price' => 'required|numeric',
            'category' => 'required|exists:categories,id',
        ]);
    
        Plat::create([
            'name' => $request->name,
            'description' => $request->description,
            'image_plats' => $request->image_plats,
            'price' => $request->price,
            'category_id' => $request->category,
        ]);
    
        return redirect()->route('products')->with('success', 'La plat a été ajoutée.');

    }

    /**
     * Display the specified resource.
     */
    public function show(Plat $plat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Plat $plat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Plat $plat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Plat $plat)
    {
        //
    }
}
