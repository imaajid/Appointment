<?php

namespace App\Http\Controllers\Admin;
use services;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\ServiceCategory;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceRequest;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
           
             $services = Service::all();
             return view('backend.services.index', compact('services'));
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
            $service_categories = ServiceCategory::all();
            return view('backend.services.create', compact('service_categories'));
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
    public function store(ServiceRequest $request)
    {
        request()->validate([
            
             'name' => 'required',
             'charges' => 'required',
             'status' => 'required',
             'service_category_id' => 'required',
             'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
       ]);
       $input = $request->all();    
     
       if ($files = $request->file('image')) {
        $destinationPath = 'services/'; // upload path
        $extension = date('YmdHis') . "." . $files->getClientOriginalExtension();
        $files->move($destinationPath, $extension);
        $input['image'] = "$extension";
    }
         Service::create($input);
            return redirect()->route('services.index')->with('success', 'services is successfully saved');
       
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
            $services = Service::findOrFail($id);
            $serviceCategories = ServiceCategory::all();
            return view('backend.services.edit', compact('services', 'serviceCategories'));
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
    public function update(ServiceRequest $request, Service $service)
    {
        $input = $request->all();    
     
        if ($files = $request->file('image')) {
         $destinationPath = 'services/'; // upload path
         $extension = date('YmdHis') . "." . $files->getClientOriginalExtension();
         $files->move($destinationPath, $extension);
         $input['image'] = "$extension";
     }
            $service->update($input);
            return redirect()->route('services.index')->with('success', 'services updated successfully');
       
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
         
            Service::find($id)->delete();
            return redirect()->route('services.index')->with('success', 'services deleted successfully');
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
