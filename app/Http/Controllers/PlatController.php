<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Plat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
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
            'image_plats' => 'required|string',
            'price' => 'required|string',
            'category_id' => 'required|exists:categories,id',

        ]);
    
        $Plats = new Plat();
        $Plats->name = $request->name;
        $Plats->description = $request->description;
        $Plats->image_plats = $request->image_plats;
        $Plats->price =  $request->price;
        $Plats->category_id = $request->category_id;
        $Plats->save();
    
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
    public function destroy(Request $request)
    {
        //
        $id = $request->id;
        Plat::destroy($id);
        return Redirect::route('products')->with('flash_message', 'plat deleted!');
    }
}
