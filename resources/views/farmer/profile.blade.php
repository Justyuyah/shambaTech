@extends('layouts.app')
@section('title','farmer Edit Profile')
@section('style')
    body {
    margin: 0;
{{--    padding-top: 60px;--}}
    color: #2e323c;
    background: #f5f6fa;
    position: relative;
    height: 100%;
    }
    .account-settings .user-profile {
    margin: 0 0 1rem 0;
    padding-bottom: 1rem;
    text-align: center;
    }
    .account-settings .user-profile .user-avatar {
    margin: 0 0 1rem 0;
    }
    .account-settings .user-profile .user-avatar img {
    width: 90px;
    height: 90px;
    -webkit-border-radius: 100px;
    -moz-border-radius: 100px;
    border-radius: 100px;
    }
    .account-settings .user-profile h5.user-name {
    margin: 0 0 0.5rem 0;
    }
    .account-settings .user-profile h6.user-email {
    margin: 0;
    font-size: 0.8rem;
    font-weight: 400;
    color: #9fa8b9;
    }
    .account-settings .about {
    margin: 2rem 0 0 0;
    text-align: center;
    }
    .account-settings .about h5 {
    margin: 0 0 15px 0;
    color: #007ae1;
    }
    .account-settings .about p {
    font-size: 0.825rem;
    }
    .form-control {
    border: 1px solid #cfd1d8;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    font-size: .825rem;
    background: #ffffff;
    color: #2e323c;
    }

    .card {
    background: #ffffff;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    border: 0;
    margin-bottom: 1rem;
    }
@endsection
@section('content')
    <div class="pt-5">
<div class=" container">
    <div class="row gutters">
        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
            <div class="card h-100">
                <div class="card-body">
                    <div class="pt-5 account-settings">
                        <div class="user-profile">
                            <div class="user-avatar">
                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Maxwell Admin">
                            </div>
                            <div class="">
                            <h5 class="user-name"> {{Auth::user()->firstName}}
                                {{Auth::user()->lastName}}</h5>
                            <h6 class="user-email"> {{Auth::user()->email}}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
            @include('includes.messages')
            <form action="/farmer/profile/{{Auth::user()->id}}" method="POST">
                @csrf
            <div class="card h-100">
                <div class="card-body">
                    <div class=" row gutters">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <h4 class="mb-4 text-primary">Personal Details</h4>
                        </div>

                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="fullName">First Name</label>
                                <input type="text" name="firstName" class="form-control" id="fullName" value="{{Auth::user()->firstName}}" >
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="fullName">Last Name</label>
                                <input type="text" name="lastName" class="form-control" id="fullName" value="{{Auth::user()->lastName}}" placeholder="Enter last name">
                            </div>
                        </div>
                        <div class="pt-3 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="fullName">Username</label>
                                <input type="text"  class="form-control" id="fullName" value="{{Auth::user()->userName}}" placeholder="Enter Username" readonly>
                            </div>
                        </div>
                        <div class="pt-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="eMail">Email</label>
                                <input type="email"   class="form-control" id="eMail" value="{{Auth::user()->email}}" placeholder="Enter email ID" readonly>
                            </div>
                        </div>
                        <div class="pt-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text"  class="form-control" id="phone" value="{{Auth::user()->mobileNumber}}" placeholder="Enter phone number" readonly>
                            </div>
                        </div>
                        <div class="pt-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="website">Crop Type</label>
                                <input type="url" name="cropType" class="form-control" id="website" placeholder="Crop Type">
                            </div>
                        </div>
                    </div>
                    <div class="row gutters">
                        <div class=" col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <h5 class="mt-4 mb-1 text-primary">Address</h5>
                        </div>
                        <div class="pt-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="Street">Region</label>
                                <input type="name"  name="region" class="form-control" id="Street" placeholder="Enter Region">
                            </div>
                        </div>
                        <div class="pt-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="ciTy">District</label>
                                <input type="name" name="district" class="form-control" id="ciTy" placeholder="Enter District">
                            </div>
                        </div>
                        <div class="pt-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="sTate">Ward</label>
                                <input type="text" name="ward" class="form-control" id="sTate" placeholder="Enter Ward">
                            </div>
                        </div>
                        <div class="pt-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="zIp">Village</label>
                                <input type="text" name="village" class="form-control" id="zIp" placeholder="Enter Village">
                            </div>
                        </div>
                    </div>
                    <div class="row gutters pt-4">
                        <div class=" col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="text-right">
                                <button type="submit" id="submit" name="submit" class="btn btn-primary">Update</button>
                                <button type="button" id="submit" name="submit" class="btn btn-secondary">Cancel</button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
@endsection
