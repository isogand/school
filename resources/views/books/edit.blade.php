@extends('layout')

@section('content')




    <style>
        .container {
            max-width: 1500px;
        }
        .push-top {
            margin-top: 50px;
        }
        body{
            background-color:#fcfcfc;
        }
    </style>






    <h1> Edit & Update</h1>

    <div class="col-sm6">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br />
        @endif
        <div class="col-md">
            <div class="row g-3">

                <form class="col-md-12" method="post" novalidate enctype="multipart/form-data" action="{{ route('books.update', $books->id)}}">
                    <br/>
                    @csrf
                    @method('PATCH')
                    <div class="input-group mb-3">
                        <input type="file" name="photo_id" class="form-control" id="inputGroupFile02"  value="{{ $books->photo_id }}">
                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                    </div>


                    <div class="form-group">
                        @csrf
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" value="{{ $books->name }}"/>
                    </div>

                    <div class="form-floating">
                        <label for="floatingTextarea2">About</label>
                        <textarea class="form-control" name="about"  value="{{ $books->about }}" placeholder="Leave a comment here" id="floatingTextarea2"  style="height: 100px"></textarea>

                    </div>



                    @csrf
                    <br/>

                    <div class="form_group">
                        <button type="submit" class="btn btn-primary">Create Book </button>
                    </div>



                </form>
            </div>
        </div>
    </div>


@endsection
