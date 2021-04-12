<?php

namespace App\Http\Controllers\Admin;
use App\Http\Requests\ServiceCategoryRequest;
use Illuminate\Http\Request;
use App\Models\ServiceCategory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ServiceCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
           $categories = ServiceCategory::all();
            
            return view('backend.categories.index', compact('categories'));
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
            return view('backend.categories.create');
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
        try {
            ServiceCategory::create(['name' => $request->name]);
            return redirect()->route('categories.index')->with('success', 'Category is successfully saved');
        } catch (\Exception $e) {
            return $e->getMessage();
        }
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
            $serviceCategory = ServiceCategory::findOrFail($id);
         
            return view('backend.categories.edit', compact('serviceCategory'));
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
    public function update(ServiceCategoryRequest $request, ServiceCategory $category)
    {
        try {
            $category->name = $request->input('name');
            $category->save();
            return redirect()->route('categories.index')->with('success', 'Categories updated successfully');
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
            ServiceCategory::find($id)->delete();
            return redirect()->route('categories.index')->with('success', 'categories deleted successfully');
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
