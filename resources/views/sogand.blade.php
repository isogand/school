@extends('layouts.master')

@section('content')



    <div class="content">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">Edit Profile</h5>
                </div>
                <form method="post" action="https://black-dashboard-laravel.creative-tim.com/profile" autocomplete="off">
                    <div class="card-body">
                        <input type="hidden" name="_token" value="OflodbYDUoW7Qgr6GEMhyTT2GrdJS4prJNLMjrv2">                            <input type="hidden" name="_method" value="put">

                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Name" value="Admin Admin">
                        </div>

                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" name="email" class="form-control" placeholder="Email address" value="admin@black.com">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-fill btn-primary">Save</button>
                    </div>
                </form>
            </div>

            <div class="card">
                <div class="card-header">
                    <h5 class="title">Password</h5>
                </div>
                <form method="post" action="https://black-dashboard-laravel.creative-tim.com/profile/password" autocomplete="off">
                    <div class="card-body">
                        <input type="hidden" name="_token" value="OflodbYDUoW7Qgr6GEMhyTT2GrdJS4prJNLMjrv2">                        <input type="hidden" name="_method" value="put">

                        <div class="form-group">
                            <label>Current Password</label>
                            <input type="password" name="old_password" class="form-control" placeholder="Current Password" value="" required>
                        </div>

                        <div class="form-group">
                            <label>New Password</label>
                            <input type="password" name="password" class="form-control" placeholder="New Password" value="" required>
                        </div>
                        <div class="form-group">
                            <label>Confirm New Password</label>
                            <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm New Password" value="" required>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-fill btn-primary">Change password</button>
                    </div>
                </form>
            </div>
        </div>

@endsection
