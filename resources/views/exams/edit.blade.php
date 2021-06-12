
@extends('layout')

@section('content')

    <style>
        .container {
            max-width: 1300px;
        }
        .push-top {
            margin-top: 50px;
        }
        body{
            background-color:#f6e4ea;
        }
    </style>
    <div class="text-info" >

        <h1>Exam
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-card-text" viewBox="0 0 16 16">
                <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                <path d="M3 5.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 8zm0 2.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z"/>
            </svg>
        </h1>
    </div>


    <div class="row">
        <div class="col-md">
            <div class="row g-3">

                <form class="col-md-12" method="post"  novalidate enctype="multipart/form-data" action="{{ route('exams.update', $exams->id)}}">
                    <br/>

                    @csrf
                    @method('PATCH')


                    <div class="form-group">
                        @csrf
                        <label for="name">Exam_Id</label>
                        <input type="text" class="form-control" name="code" value="{{ $exams->code }}"/>
                    </div>

                    <div class="form-group">
                        @csrf
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" value="{{ $exams->name }}"/>
                    </div>
                    <div class="form-group">
                        <label for="name">Class</label>
                        <input type="text" class="form-control" name="class" value="{{ $exams->class }}"/>
                    </div>
                    <div class="form-group">
                        <label for="name">Name_Teacher</label>
                        <input type="text" class="form-control" name="name_teacher" value="{{ $exams->name_teacher }}"/>
                    </div>

                    @csrf
                    <br/>

                    <div class="form_group">
                        <button type="submit" class="btn btn-primary">Create Exam </button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <style>

        body{
            background-color:#ffffff;
        }

    </style>


@endsection
