@extends('layout')

@section('content')


    <style>
        .push-top {
            margin-top: 25px;
        }
        .container {
            max-width:700px;
        }

    </style>


    <div class="card push-top">
        <div class="card-header">
            Add User
        </div>

        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
            @endif
            <form method="post" action="{{ route('students.store') }}"  novalidate enctype="multipart/form-data">
                <div class="form-group">
                    @csrf
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name"/>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email"/>
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="tel" class="form-control" name="phone"/>
                </div>

                <div class="form_group">
                    <label for="role_id">Role:</label>
                    <select class="form-control" id="role_id" name="role_id">
                        <option value>Chose options</option>
                        <option value="1">student</option>
                        <option value="2">admin</option>
                        <option value="3">manager</option>
                        <option value="4">teacher</option>
                    </select>
                </div>

                <br/>
                <div class="form_group">
                    <label for="is_active">Active:</label>
                    <select class="form-control" id="is_active" name="is_active">
                        <option value>Chose options</option>
                        <option value="1">Active</option>
                        <option value="2">Not Active</option>
                    </select>
                </div>
                <br/>

                <div class="form-group">
                    <label for="email">Gender</label>
                    <input type="email" class="form-control" name="gender"/>
                </div>
                <div class="input-group mb-3">
                    <input type="file" name="photo_id" class="form-control" id="inputGroupFile02">
                    <label class="input-group-text" for="inputGroupFile02">Upload</label>
                </div>

                <br/>
                <div class="form-group">
                    <label for="password" >Password</label>
                    <input type="password" class="form-control"  name="password" id="inputPassword3">
                </div>
                <div class="form-group">
                    <label for="password" >Birth</label>
                    <input type="password" class="form-control"  name="date_of_birth" id="inputPassword3">
                </div>
                <div class="form-group">
                    @csrf
                    <label for="name">Last_Mark</label>
                    <input type="text" class="form-control" name="last_mark"/>
                </div>
                <div class="d-grid gap-2 col-6 me-auto">
                <button type="password" class="btn btn-primary active" >Create User</button>
                </div>
            </form>
        </div>
    </div>
@endsection


