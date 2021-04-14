<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as Image;



class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $products = Product::all();
            return view('backend.products.index',compact('products'));
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        try {
            return view('backend.products.create');
        } catch (\Exception $e) {
            return $e->getMessage();
        } 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'title'=> 'required|max:30',
             'price'=> 'required|regex:/^\d+(\.\d{1,2})?$/',
             'name' => 'required',
             'quantity' => 'required',
             'unit' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
       ]);

       $input = $request->all();    
     
       if ($files = $request->file('image')) {
        $destinationPath = 'products/'; // upload path
        $extension = date('YmdHis') . "." . $files->getClientOriginalExtension();
        $files->move($destinationPath, $extension);
        $input['image'] = "$extension";
    }
         Product::create($input);

        return redirect()->route('products.index')->with('success', 'products is successfully saved');
  }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $products = Product::findOrFail($id);
            
            return view('backend.products.edit', compact('products'));
        } catch (\Exception $e) {
            return $e->getMessage();
        } 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, Product $product)
    {

       
     
        $input = $request->all();    
     
        if ($files = $request->file('image')) {
         $destinationPath = 'products/'; // upload path
         $extension = date('YmdHis') . "." . $files->getClientOriginalExtension();
         $files->move($destinationPath, $extension);
         $input['image'] = "$extension";
     }
        $product->update($input);  
            
            return redirect()->route('products.index')->with('success', 'products successfully');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
         
            Product::find($id)->delete();
            return redirect()->route('products.index')->with('success', 'products deleted successfully');
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
