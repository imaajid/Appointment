@extends('layouts.backend')

@section('content')

<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('products.index') }}">products</a></li>
            <li class="breadcrumb-item active" aria-current="page">Create products</li>
        </ol>
    </nav>
</div>

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">products Form</h6>
                <form class="forms-sample" method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title">title</label>
                        <input type="text" class="form-control" id="title" autocomplete="off" name="title">
                    </div>
                    <div class="form-group">
                        <label for="charges">name</label>
                        <input type="text" class="form-control" id="name" autocomplete="off"  name="name">
                    </div>
                    <div class="form-group">
                        <label for="price">price</label>
                        <input type="number" class="form-control" id="price" autocomplete="off" name="price">
                    </div>
                    <div class="form-group">
                        <label for="quantity">quantity</label>
                        <input type="number" class="form-control" id="quantity" autocomplete="off"  name="quantity">
                    </div>
                    <div class="form-group">
                        <label for="unit">unit</label>
                        <input type="text" class="form-control" id="unit" autocomplete="off"  name="unit">
                    </div>
                    <div class="form-group">
                        <label for="image">image</label>
                        <input type="file" class="form-control" id="image" autocomplete="off"  name="image">
                    </div>
                    
                
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a href="{{ route('products.index') }}" class="btn btn-light">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
