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
                    <h6 class="card-title">Permission Form</h6>
                    <form class="forms-sample" method="POST" action="{{ route('services.update', $services->id) }}" enctype="multipart/form-data">
                        @method('PATCH')
                        @csrf
                       
                        <div class="form-group">
                            <label for="category_name">Service Name</label>
                            <input type="text" class="form-control" id="name" autocomplete="off" placeholder="Service Name" name="name" value="{{ $services->name }}">
                        </div>
                        <div class="form-group">
                            <label for="charges">Charges</label>
                            <input type="number" class="form-control" id="charges" autocomplete="off" placeholder="charges" name="charges" value="{{ $services->charges }}">
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select name="status" class="form-control" value="{{ $services->status }}">
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                                
                              </select>
                        </div>
                        <div class="form-group">
                            <label for="category_name">Service Category</label>
                            <select name="service_category_id" class="form-control" value="{{ $services->service_category_id }}">
                                @foreach($serviceCategories as $serviceCategory)
                               
                                <option value="{{$serviceCategory->id}}">{{$serviceCategory->name}}</option>
                                @endforeach
                              </select>
                        </div>
                       
                       <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <a href="{{ route('services.index') }}" class="btn btn-light">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
