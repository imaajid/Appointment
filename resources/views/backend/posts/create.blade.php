@extends('layouts.backend')

@section('content')

<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('products.index') }}">Post</a></li>
            <li class="breadcrumb-item active" aria-current="page">Create Post</li>
        </ol>
    </nav>
</div>

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Post Form</h6>
                <form class="forms-sample" method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
                    @csrf
                   
                    <div class="form-group">
                        <label for="title">title</label>
                        <input type="text" class="form-control" id="title" autocomplete="off" name="title">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" class="form-control" id="name" autocomplete="off"  name="description">
                    </div>
                   
                    <div class="form-group">
                        <label for="image">image</label>
                        <input type="file" class="form-control" id="image" autocomplete="off"  name="image">
                    </div>
                    
                
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a href="{{ route('posts.index') }}" class="btn btn-light">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
