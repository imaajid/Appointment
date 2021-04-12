@extends('layouts.backend')
@section('styles')
    <style>
        .input-group-text {
            background-color: #727cf5;
            color: white !important;
        }

    </style>
@endsection
@section('content')

    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('users.index') }}">Users</a></li>
                <li class="breadcrumb-item active" aria-current="page">Create User</li>
            </ol>
        </nav>
    </div>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Users Form</h6>
                    <form class="forms-sample" method="POST" action="{{ route('users.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="name"> Name</label>
                            <input type="text" class="form-control" id="name" autocomplete="off"
                                   placeholder="Name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" autocomplete="off"
                                   placeholder="Email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" autocomplete="off"
                                   placeholder="Password" name="password">
                        </div>
                        <div class="form-group">
                            <label for="confirm-password">Confirm Password</label>
                            <input type="password" class="form-control" id="confirm-password" autocomplete="off"
                                   placeholder="Password" name="confirm-password">
                        </div>
                        <div class="form-group">
                            <label for="phone_no">Phone No</label>
                            <div class="input-group-prepend">
                                <span class="input-group-text">+92</span>
                                <input type="text" class="form-control" placeholder="3352968699" id="phone_no"
                                       name="phone_no">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="business_email">Business Email</label>
                            <input type="email" class="form-control" id="business_email" autocomplete="off"
                                   placeholder="Business Email" name="business_email">
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <textarea class="form-control" id="address" name="address" placeholder="Address"
                                      rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="profile_image">Profile Image</label>
                            <input type="file" name="profile_image" class="file-upload-default">
                            <div class="input-group col-xs-12">
                                <input type="text" id="profile_image" class="form-control file-upload-info" disabled=""
                                       placeholder="Profile Image" name="profile_image">
                                <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="shop_image">Shop Image</label>
                            <input type="file" name="shop_image" class="file-upload-default">
                            <div class="input-group col-xs-12">
                                <input type="text" id="shop_image" class="form-control file-upload-info" disabled=""
                                       placeholder="Shop Image" name="shop_image">
                                <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="gender">Select Gender</label>
                            <select class="js-example-basic-single w-100" name="gender" id="gender">
                                <option value="men">Men</option>
                                <option value="women">Women</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="form-group">
                            @foreach($roles as $value)

                                <div class="form-check form-check-inline">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="roles[]"
                                               value="{{ $value }}">
                                        {{ $value }}
                                        <i class="input-frame"></i></label>
                                </div>
                            @endforeach
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <a href="{{ route('users.index') }}" class="btn btn-light">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
