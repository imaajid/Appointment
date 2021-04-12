@extends('layouts.backend')

@section('content')

    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Doctor</li>
            </ol>
        </nav>
        <div class="d-flex align-items-center flex-wrap text-nowrap">
            <a href="{{ route('doctor_details.create') }}" class="btn btn-primary btn-icon-text">
                <i class="btn-icon-prepend" data-feather="plus"></i>
                Create Doctor
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">

            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Doctor</h6>
                    <p class="card-description">All the Doctor are listed here.</p>
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            <thead>
                            <tr>
                                <th>
                                    #
                                </th>
                                <th>
                                    Name
                                </th>
                                <th>
                                    phone
                                </th>
                                <th>
                                    Date of Birth
                                </th>
                                <th>
                                    Experience
                                </th>
                                <th>
                                    gender
                                </th>
                                <th>
                                    status
                                </th>
                                <th>
                                    address
                                </th>
                                <th>
                                    city
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
                            @foreach($doctor_details as $key => $doctor_detail)
                                <tr>
                                    <td>
                                        {{ ++$key }}
                                    </td>
                                    <td>
                                        {{ $doctor_detail->name }}
                                    </td>
                                    <td>
                                        {{ $doctor_detail->phone }}
                                    </td>
                                    <td>
                                        {{ $doctor_detail->dob }}
                                    </td>
                                    <td>
                                        {{ $doctor_detail->experience }}
                                    </td>
                                    <td>
                                        {{ $doctor_detail->gender }}
                                    </td>
                                    <td>
                                        @if ($doctor_detail->status == 0)
                                        Active
                                        @else
                                        Inactive
                                    @endif
                                       
                                    </td>
                                    <td>
                                        {{ $doctor_detail->address }}
                                    </td>
                                    <td>
                                        {{ $doctor_detail->city }}
                                    </td>
                                     <td>
                                        {{ \Carbon\Carbon::parse($doctor_detail->created_at)->diffForhumans() }}
                                    </td>
                                    <td>
                                        {{ \Carbon\Carbon::parse($doctor_detail->updated_at)->diffForhumans() }}
                                    </td>
                                    <td>
                                        
                                        <form class="d-inline-block" action="{{ route('doctor_details.destroy',$doctor_detail->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-icon-text">
                                                <i class="btn-icon-prepend" data-feather="trash"></i> Delete
                                            </button>
                                        </form>
                                      
                                        <a   href="{{ route('doctor_details.edit',$doctor_detail->id) }}" class="btn btn-warning btn-icon-text">
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
