@extends('layouts.backend')

@section('content')

    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('products.index') }}">products</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit products</li>
            </ol>
        </nav>
    </div>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Product Form</h6>
                    <form class="forms-sample" method="POST" action="{{ route('products.update', $products->id) }}" enctype="multipart/form-data">
                        @method('PATCH')
                        @csrf
                       
                        <div class="form-group">
                            <label for="category_name">title</label>
                            <input type="text" class="form-control" id="name" autocomplete="off" placeholder="Name" name="title" value="{{ $products->title }}">
                        </div>
                        <div class="form-group">
                            <label for="charges">name</label>
                            <input type="number" class="form-control" id="charges" autocomplete="off" placeholder="charges" name="charges" value="{{ $products->name }}">
                        </div>
                        <div class="form-group">
                            <label for="charges">price</label>
                            <input type="number" class="form-control" id="charges" autocomplete="off" placeholder="charges" name="price" value="{{ $products->price }}">
                        </div>
                        <div class="form-group">
                            <label for="charges">quantity</label>
                            <input type="number" class="form-control" id="charges" autocomplete="off" placeholder="charges" name="quantity" value="{{ $products->quantity }}">
                        </div>
                        <div class="form-group">
                            <label for="charges">unit</label>
                            <input type="number" class="form-control" id="charges" autocomplete="off" placeholder="charges" name="unit" value="{{ $products->unit }}">
                        </div>
                        <div class="form-group">
                            <label for="charges">image Preview</label>
                            <br/>
                            <img height="60px" src=" {{asset('public\products/'. $products->image)}}"/>
                        </div>
                        <div class="form-group">
                            <label for="charges">image</label>
                            <input type="number" class="form-control" id="charges" autocomplete="off" placeholder="charges" name="image" value="{{ $products->image }}">
                        </div>
                       
                       
                       
                       <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <a href="{{ route('products.index') }}" class="btn btn-light">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
