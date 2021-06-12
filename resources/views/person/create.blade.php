@extends('layout')

@section('content')

    <style>
        .container {
            max-width: 700px;
        }
        .push-top {
            margin-top: 15px;
        }
    </style>

    <div class="card push-top">
        <div class="card-header">
            Add Student
        </div>

        <div class="card-body">

            <form method="post" action="{{ route('person.store') }}" novalidate enctype="multipart/form-data">

                <div class="form-group">
                    <label for="phone">Code</label>
                    <input type="tel" class="form-control" name="student_id"/>
                </div>

                <div class="form-group">
                    @csrf
                    <label for="name">FullName</label>
                    <input type="text" class="form-control" name="name"/>
                </div>

                <div class="form-group">
                    <label for="phone">Session</label>
                    <input type="tel" class="form-control" name="session"/>
                </div>

                <div class="form_group">
                    <label for="is_active">Language:</label>
                    <select class="form-control" id="is_active" name="language">
                        <option value>Chose options</option>
                        <option value="1">English</option>
                        <option value="2">French</option>
                        <option value="3">German</option>
                    </select>
                </div>
                <br/>
                <div class="form-group">
                    <label for="phone">Class</label>
                    <input type="tel" class="form-control" name="class"/>
                </div>
                <div class="form-group">
                    <label for="phone">Section</label>
                    <input type="tel" class="form-control" name="section"/>
                </div>

                <div class="form-group">
                    <label for="phone">Father</label>
                    <input type="tel" class="form-control" name="father"/>
                </div>

                <div class="form_group">
                    <label for="is_active">Gender:</label>
                    <select class="form-control" id="is_active" name="gender">
                        <option value>Chose options</option>
                        <option value="1">Male</option>
                        <option value="2">Female</option>
                    </select>
                </div>
                <br/>
                <div class="form-group">
                    <label for="inputAddress" class="form-label">Address</label>
                    <input type="text" class="form-control" name="address" id="inputAddress" placeholder="1234 Main St">
                </div>

                <button type="password" class="btn btn-block btn-danger">Create Student</button>
            </form>
        </div>
    </div>

@endsection


