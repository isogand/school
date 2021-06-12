@extends('layout')

@section('content')

    <style>
        .container {
            max-width: 700px;
        }
        .push-top {
            margin-top: 100px;
        }
        body{
            background-color:#fcfcfc;
        }
    </style>

        <h1>Edit & Update

        </h1>



    <div class="row">
        <div class="col-md">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
            @endif
            <div class="row g-3">

                <form class="col-md-12" method="post"  novalidate enctype="multipart/form-data" action="{{ route('teachers.update', $teachers->id)}}">
                    <br/>
                    @method('PATCH')
                    <div class="form-group">
                        @csrf
                        <label for="name">FullName</label>
                        <input type="text" class="form-control" name="name"  value="{{ $teachers->name }}"/>
                    </div>

                    <div class="input-group mb-3">
                        <input type="file" name="photo_id" class="form-control" id="inputGroupFile02"  value="{{ $teachers->photo_id }}">
                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" value="{{ $teachers->email }}"/>
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="tel" class="form-control" name="phone" value="{{ $teachers->phone }}"/>
                    </div>
                    <div class="form-group">
                        <label for="phone">Session</label>
                        <input type="tel" class="form-control" name="session" value="{{ $teachers->session }}"/>
                    </div>
                    @csrf
                    <div class="form-group">
                        <label for="inputAddress" class="form-label">Address</label>
                        <input type="text" class="form-control" name="address" id="inputAddress" placeholder="1234 Main St" value="{{ $teachers->address }}"/>
                    </div>

                    <div class="form-group">
                        <label for="phone">Class</label>
                        <input type="tel" class="form-control" name="class" value="{{ $teachers->class }}"/>
                    </div>

                    <br/>
                    <div class="form-group">
                        <label for="email">Gender</label>
                        <input type="email" class="form-control" name="gender" value="{{ $teachers->gender}}"/>
                    </div>
                    @csrf
                    <div class="form_group">
                        <button type="submit" class="btn btn-primary">Create Book </button>
                    </div>
                </form>
            </div>
        </div>
    </div>




@endsection
