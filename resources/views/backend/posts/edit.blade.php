@extends('layouts.backend')

@section('content')

    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('posts.index') }}">Posts</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit posts</li>
            </ol>
        </nav>
    </div>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">posts Form</h6>
                   
                    <form class="forms-sample" method="POST" action="{{ route('posts.update', $posts->id) }}" enctype="multipart/form-data">
                        @method('PATCH')
                        @csrf
                       
                        <div class="form-group">
                            <label for="title">title</label>
                            <input type="text" class="form-control" id="title" autocomplete="off" placeholder="title"  value="{{ $posts->title }}" name="title" />
                        </div>
                        <div class="form-group">
                            <label for="title">description</label>
                            <input type="text" class="form-control" id="title" autocomplete="off" placeholder="title"  value="{{ $posts->description }}" name="description" />
                        </div>
                        
                        <div class="form-group">
                            <label for="">image Preview</label>
                            <br/>
                            <img height="60px" src=" {{asset('posts/'. $posts->image)}}"/>
                        </div>
                        <div class="form-group">
                            <label for="image">image</label>
                            <input type="file" class="form-control" id="image" autocomplete="off" placeholder="charges"  value="{{ $posts->image }}" name="image">
                        </div>
                       
                       
                       
                       <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <a href="{{ route('products.index') }}" class="btn btn-light">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
