@extends('layout')

@section('content')

    <style>
        .container {
            max-width: 450px;
        }
        .push-top {
            margin-top: 50px;
        }
    </style>

    <div class="card push-top">
        <div class="card-header">
            Edit & Update
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
            <form method="post"  novalidate enctype="multipart/form-data" action="{{ route('students.update', $student->id) }}">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" value="{{ $student->name }}"/>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" value="{{ $student->email }}"/>
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="tel" class="form-control" name="phone" value="{{ $student->phone }}"/>
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
                    <select class="form-control" id="is_active" name="is_active" value="{{ $student->is_active }}">
                        <option value>Chose options</option>
                        <option value="1">Active</option>
                        <option value="2">Not Active</option>
                    </select>
                </div>
                <br/>
                <div class="form-group">
                    <label for="email">Gender</label>
                    <input type="email" class="form-control" name="gender" value="{{ $student->gender }}"/>
                </div>
                <br/>
                <div class="input-group mb-3">
                    <input type="file" name="photo_id" class="form-control" id="inputGroupFile02" value="{{ $student->photo_id }}">
                    <label class="input-group-text" for="inputGroupFile02">Upload</label>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control"  name="password" id="inputPassword3" value="{{ $student->password }}"/>
                </div>
                <div class="form-group">
                    <label for="password" >Birth</label>
                    <input type="password" class="form-control"  name="date_of_birth" id="inputPassword3" value="{{ $student-> date_of_birth}}">
                </div>
                <div class="form-group">

                    <label for="name">Last_Mark</label>
                    <input type="text" class="form-control" name="last_mark" value="{{ $student-> last_mark}}"/>
                </div>
                <button type="submit" class="btn btn-block btn-danger">Update User</button>
            </form>
        </div>
    </div>
@endsection
