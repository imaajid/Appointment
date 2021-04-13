<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

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


       if ($file = $request->file('image')) {

        $name = time() . $file->getClientOriginalName();
        $file->move('public\products', $name);
        $input['image'] = $name;
    }
    //    if ($file = $request->file('image')) {
            
    //     $name = time() . $file->getClientOriginalName();

    //     $image_resize = Image::make($file->getRealPath());              
    //     $image_resize->resize(500, 500);
    //     $image_resize->save(public_path('images/' .$name));
    //     // $file->move('public\business_product', $name);
    //     $input['image'] = $name;
    // }

     
    //    if ($files = $request->file('image')) {
    //        $destinationPath = 'public/image/'; // upload path
    //         $extension = date('YmdHis') . "." . $files->getClientOriginalExtension();
    //        $files->move($destinationPath, $extension);
    //        $input['image'] = $extension;
    //     }

        $input = $request->all();
    
        Product::create($input);

        return redirect()->route('products.index')->with('success', 'products is successfully saved');







        // $image = $request->file('image');
        // dd($image);
        //       dd(($files = $request->file('image')));
        //       if ($files = $request->file('image')) {
        //         $destinationPath = 'public/image/'; // upload path
        //         $image = date('YmdHis') . "." . $files->getClientOriginalExtension();
        //         $files->move($destinationPath, $image);
        //         $input['image'] = "$image";
        //      }
              
      
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
    public function update(Product $products ,Request $request)
    {
        try {

          if ($file = $request->file('image')) {
           
            $name = time() . $file->getClientOriginalName();
    
            $image_resize = Image::make($file->getRealPath());              
            $image_resize->resize(500, 500);
            $image_resize->save(public_path('images/' .$name));
            // $file->move('public\business_product', $name);
            $input['image'] = $name;
        }
     
            dd($products);
            $input = $request->all();
            
            $products->update($input);  
            
            return redirect()->route('products.index')->with('success', 'products successfully');
        } catch (\Exception $e) {
            return $e->getMessage();
        }
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
