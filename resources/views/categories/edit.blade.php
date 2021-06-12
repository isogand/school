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
            <form method="post"  novalidate enctype="multipart/form-data"  action="{{ route('categories.update', $categories->id)}}">
                @csrf
                @method('PATCH')

                <br/>
                <div class="form_group">
                    <label for="inputAddress" class="form-label">Name</label>
                    <input name="name" type="text" class="form-control" value="{{ $categories->name }}" >
                </div>


                @csrf
                <br/>

                <div class="form_group">
                    <button type="submit" class="btn btn-primary">Create Categories </button>
                </div>


            </form>
        </div>
    </div>
@endsection
