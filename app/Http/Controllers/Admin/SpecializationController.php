<?php

namespace App\Http\Controllers\Admin;
use App\Http\Requests\SpecializationRequest;
use Illuminate\Http\Request;
use App\Models\Specialization;
use App\Http\Controllers\Controller;

class SpecializationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $specializations = Specialization::all();
             return view('backend.specializations.index',compact('specializations'));
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
            return view('backend.specializations.create');
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
            Specialization::create(['name' => $request->name]);
            return redirect()->route('specializations.index')->with('success', 'specializations is successfully saved');
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
            $specializations = Specialization::findOrFail($id);
         
            return view('backend.specializations.edit', compact('specializations'));
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
    public function update(SpecializationRequest $request, Specialization $specialization)
    {
        try {
            $specialization->name = $request->input('name');
            $specialization->save();
            return redirect()->route('specializations.index')->with('success', 'specialization updated successfully');
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
            Specialization::find($id)->delete();
            return redirect()->route('specializations.index')->with('success', 'Specialization deleted successfully');
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
