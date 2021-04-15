@extends('layouts.backend')

@section('content')

    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">post</li>
            </ol>
        </nav>
        <div class="d-flex align-items-center flex-wrap text-nowrap">
            <a href="{{ route('posts.create') }}" class="btn btn-primary btn-icon-text">
                <i class="btn-icon-prepend" data-feather="plus"></i>
                Create post
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">

            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">posts</h6>
                    <p class="card-description">All the posts are listed here.</p>
                    <div class="table-responsive">
                      
                        <table id="dataTableExample" class="table">
                            <thead>
                            <tr>
                               
                                <th>
                                    #
                                </th>
                                <th>
                                    title
                                </th>
                                <th>
                                    description
                                </th>
                               
                                <th>
                                    image
                                </th>
                                <th>
                                    Created At
                                </th>
                                <th>
                                    Updated At
                                </th>
                                <th>
                                    Actions
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($posts as $key => $post)
                                <tr>
                                
                                    <td>
                                        {{ ++$key }}
                                    </td>
                                    <td>
                                        {{ $post->title }}
                                    </td>
                                    <td>
                                        {{ $post->description }}
                                    </td>
                                   
                                    <td>
                                       <img height="50px" src="{{asset('posts/'. $post->image)}}"/>
                                    </td>

                                    <td>
                                        {{ \Carbon\Carbon::parse($post->created_at)->diffForhumans() }}
                                    </td>
                                    <td>
                                        {{ \Carbon\Carbon::parse($post->updated_at)->diffForhumans() }}
                                    </td>
                                    <td>
                                       
                                        <form class="d-inline-block" action=" {{ route('posts.destroy',$post->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-icon-text">
                                                <i class="btn-icon-prepend" data-feather="trash"></i> Delete
                                            </button>
                                        </form>
                                        
                                        <a href="{{ route('posts.edit',$post->id) }}" class="btn btn-warning btn-icon-text">
                                            <i class="btn-icon-prepend" data-feather="edit"></i> Edit
                                        </a>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

