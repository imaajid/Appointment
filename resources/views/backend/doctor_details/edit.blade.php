@extends('layouts.backend')

@section('content')

    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('services.index') }}">Permissions</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Permission</li>
            </ol>
        </nav>
    </div>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Doctor Details Form</h6>
                    <form class="forms-sample" method="POST" action="{{ route('doctor_details.update', $doctor_details->id) }}">
                        @method('PATCH')
                        @csrf
                    
                        <div class="form-group row">
                            <div class="col">
                                <label>Name:</label>
                                <input class="form-control mb-4 mb-md-0"  name="name" value="{{ $doctor_details->name }}"/>
                            </div>
                            <div class="col-md-6">
                                <label>Phone</label>
                                <input class="form-control" name="phone" value="{{ $doctor_details->phone }}"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label>Date of birth</label>
                                <div class="input-group date datepicker" id="datePickerExample">
                                    <input type="text" class="form-control" name="dob" value="{{ $doctor_details->dob }}"><span class="input-group-addon"><i data-feather="calendar"></i></span>
                                </div>
                                
                            </div>
                            <div class="col-md-6">
                                <label>Experience</label>
                                <input class="form-control" name="experience" value="{{ $doctor_details->experience }}"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label>gender</label>
                                <select class="js-example-basic-single w-100" name="gender" id="gender" value="{{ $doctor_details->gender }}">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="others">Others</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label>status</label>
                                <select class="js-example-basic-single w-100" name="status" value="{{ $doctor_details->status }}">
                                    <option value="0">Active</option>
                                    <option value="1">Inactive</option>
                                  
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label>address</label>
                                <input class="form-control mb-4 mb-md-0" name="address" value="{{ $doctor_details->address }}"/>
                            </div>
                            <div class="col-md-6">
                                <label>City:</label>
                                <input class="form-control" name="city" value="{{ $doctor_details->city }}"/>
                            </div>
                        </div>
                       
                       
                       <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <a href="{{ route('doctor_details.index') }}" class="btn btn-light">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
