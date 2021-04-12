<?php

namespace App\Http\Controllers\Admin;

use App\Models\DoctorDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\DoctorDetailRequest;

class DoctorDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            
             $doctor_details = DoctorDetail::all(); 
             return view('backend.doctor_details.index', compact('doctor_details'));
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
            return view('backend.doctor_details.create');
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
            DoctorDetail::create([
                'name' => $request->name,
                'phone'=>  $request->phone,
                'dob'=>  $request->dob,
                'experience'=>  $request->experience,
                'gender'=>  $request->gender,
                'status'=>  $request->status,
                'address'=>  $request->address,
                'city'=>  $request->city,

                ]);
            return redirect()->route('doctor_details.index')->with('success', 'doctor_details is successfully saved');
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
            $doctor_details = DoctorDetail::findOrFail($id);
           
            return view('backend.doctor_details.edit', compact('doctor_details'));
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
    public function update(DoctorDetailRequest $request, DoctorDetail $doctorDetail)
    {
        
        
        try {
            $input = $request->all();
            
            $doctorDetail->update($input);  
            
            return redirect()->route('doctor_details.index')->with('success', 'doctor successfully');
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
         
            DoctorDetail::find($id)->delete();
            return redirect()->route('doctor_details.index')->with('success', 'doctor deleted successfully');
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
