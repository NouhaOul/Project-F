<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Plat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\CategoryController;
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

    public function updateSelectedPlats(Request $request)
    {
        $selectedPlats = $request->input('selected_plats', []);

        // Handle the logic to update the selected plats
        foreach ($selectedPlats as $platId) {
            // Retrieve the plat from the database and perform the necessary update
            $plat = Plat::find($platId);

            // Perform the update operation on the plat
            // $plat->update(['name' => $request->input('name')]);

            // Save the changes to the plat
            $plat->save();
        }

        return redirect()->route('products')->with('success', 'Selected plats updated successfully.');
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
    public function edit($id)
    {
        //
        $plat = Plat::find($id);
        $categories = Category::all();
        return view('editPlat', compact('plat', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $plat = Plat::find($id);
        // Perform the necessary update on the plat using the values from the request
        // Example: $plat->name = $request->input('name');
        // Update other fields as needed
        $plat->name = $request->input('name');
        $plat->description = $request->input('description');
        $plat->image_plats = $request->input('image_plats');
        $plat->price = $request->input('price');
        $plat->category_id = $request->input('category_id');

        // Save the changes to the plat
        $plat->save();

        return redirect()->route('products')->with('success', 'Plat updated successfully.');
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
