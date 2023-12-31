<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Plat;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('addPlat', compact('categories'));
               
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        // $categories = Category::all();
        
        return view('addCat');
 

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
    
        $categories = new Category();
        $categories->name = $request->name;
        $categories->save();
    
        return redirect()->route('products')->with('success', 'La plat a été ajoutée.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}
