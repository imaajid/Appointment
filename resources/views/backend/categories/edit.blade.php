@extends('layouts.backend')

@section('content')

    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('permissions.index') }}">Permissions</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Permission</li>
            </ol>
        </nav>
    </div>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Permission Form</h6>
                    <form class="forms-sample" method="POST" action="{{ route('categories.update', $serviceCategory->id) }}">
                        @method('PATCH')
                        @csrf
                        <div class="form-group">
                            <label for="category_name">Permission Name</label>
                      
                            <input type="text" class="form-control" id="name" autocomplete="off" placeholder="Category Name" name="name" value="{{ $serviceCategory->name }}">
                        </div>

                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <a href="{{ route('categories.index') }}" class="btn btn-light">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
