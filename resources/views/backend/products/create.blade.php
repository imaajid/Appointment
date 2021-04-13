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
                <form class="forms-sample" method="POST" action="{{ route('products.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="category_name">title</label>
                        <input type="text" class="form-control" id="name" autocomplete="off" placeholder="Service Name" name="title">
                    </div>
                    <div class="form-group">
                        <label for="charges">name</label>
                        <input type="number" class="form-control" id="charges" autocomplete="off" placeholder="charges" name="name">
                    </div>
                    <div class="form-group">
                        <label for="charges">price</label>
                        <input type="number" class="form-control" id="charges" autocomplete="off" placeholder="charges" name="price">
                    </div>
                    <div class="form-group">
                        <label for="charges">quantity</label>
                        <input type="number" class="form-control" id="charges" autocomplete="off" placeholder="charges" name="quantity">
                    </div>
                    <div class="form-group">
                        <label for="charges">unit</label>
                        <input type="number" class="form-control" id="charges" autocomplete="off" placeholder="charges" name="unit">
                    </div>
                    <div class="form-group">
                        <label for="charges">image</label>
                        <input type="number" class="form-control" id="charges" autocomplete="off" placeholder="charges" name="image">
                    </div>
                    
                
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a href="{{ route('products.index') }}" class="btn btn-light">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
