@extends('layout')

@section('content')

    <style>
        .container {
            max-width: 4400px;
        }
        .push-top {
            margin-top: 100px;
        }
        body{
            background-color:#fcfcfc;
        }
    </style>



    <a href="{{route('home')}} " class="nav-link ">

        <p>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
            </svg>
            Go home</p>
    </a>
    <div class="container-fluid">

        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-body text-primary">
                    <div class="card-header">

                        <h1 class="card-title">
                            Teacher
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                                <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                            </svg>
                        </h1>
                    </div>

                <form class="col-md-12" method="post"  novalidate enctype="multipart/form-data">
                    <br/>

                    <div class="form-group">
                        @csrf
                        <label for="name">FullName</label>
                        <input type="text" class="form-control" name="name"/>
                    </div>

                    <div class="input-group mb-3">
                        <input type="file" name="photo_id" class="form-control" id="inputGroupFile02">
                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email"/>
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="tel" class="form-control" name="phone"/>
                    </div>
                    <div class="form-group">
                        <label for="phone">Session</label>
                        <input type="tel" class="form-control" name="session"/>
                    </div>
                    @csrf
                    <div class="form-group">
                        <label for="inputAddress" class="form-label">Address</label>
                        <input type="text" class="form-control" name="address" id="inputAddress" placeholder="1234 Main St">
                    </div>

                    <div class="form-group">
                        <label for="phone">Class</label>
                        <input type="tel" class="form-control" name="class"/>
                    </div>

                    <br/>
                    <div class="form-group">
                        <label for="email">Gender</label>
                        <input type="email" class="form-control" name="gender"/>
                    </div>

                    <div class="form_group">
                        <button type="submit" class="btn btn-primary">Create Book </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>

    <div class="card card-primary">
    @if($teachers)
    <table class="table">
        <thead>
        <tr>
            <th>id</th>
            <th>Photo</th>
            <th>FullName</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Gender</th>
            <th>Class</th>
            <th>Session</th>
            <th>Create</th>
            <th>Updated</th>
        </tr>
        </thead>
        <tbody>

        @foreach($teachers as $Teacher)

            <tr>
                <td>{{$Teacher->id}}</td>
                <td> <img style="height:100px" src="{{$Teacher->photo ? $Teacher->photo->file : 'http://placehold.it/400x400'}}" alt="" ></td>
                <td><a href="{{ route('teachers.show', $Teacher->id)}}">{{$Teacher->name}}</a></td>
                <td>{{$Teacher->email}}</a></td>
                <td>{{$Teacher->phone}}</a></td>
                <td>{{$Teacher->address}}</a></td>
                <td>{{$Teacher->gender}}</a></td>
                <td>{{$Teacher->class}}</a></td>
                <td>{{$Teacher->session}}</a></td>
                <td>{{$Teacher->created_at->diffForHumans()}}</td>
                <td>{{$Teacher->updated_at->diffForHumans()}}</td>
                <td class="text-center">
                    <a href="{{ route('teachers.edit', $Teacher->id)}}" class="btn btn-primary btn-sm">Edit</a>
                    <form action="{{ route('teachers.destroy', $Teacher->id)}}" method="post" style="display: inline-block">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>

    @endif

    </div>

    </div>

@endsection
