
@extends('layout')

@section('content')

    <style>
        .container {
            max-width: 4300px;
        }
        .push-top {
            margin-top: 50px;
        }
        body{
            background-color:#f6e4ea;
        }
    </style>
<br/>
    <div class="row">
        <!-- left column -->
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary" >
                <div class="card-body text-primary">
                    <div class="card-header">
                        <h1>Exam
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-card-text" viewBox="0 0 16 16">
                                <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                                <path d="M3 5.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 8zm0 2.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z"/>
                            </svg>
                        </h1>
                        <a href="{{route('home')}} " class="nav-link ">

                            <p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
                                </svg>
                                Go home</p>
                        </a>
                    </div>
                <form class="col-md-12" method="post"  novalidate enctype="multipart/form-data">
                    <br/>




                    <div class="form-group">
                        @csrf
                        <label for="name">Exam_Id</label>
                        <input type="text" class="form-control" name="code"/>
                    </div>

                    <div class="form-group">
                        @csrf
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name"/>
                    </div>
                    <div class="form-group">
                        <label for="name">Class</label>
                        <input type="text" class="form-control" name="class"/>
                    </div>

                    <div class="form-group">
                        <label for="name">Name_Teacher</label>
                        <input type="text" class="form-control" name="name_teacher"/>
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
    </div>


    <style>

        body{
            background-color:#ffffff;
        }

    </style>

    <div class="card card-primary">
        <br/>


    @if($exams)

            <table class="table">
                <thead>
                <tr >
                    <th>id</th>
                    <th>Exam_Id</th>
                    <th>Name</th>
                    <th>Class</th>
                    <th>Name_Teacher</th>
                    <th>Created date</th>
                    <th>Updated</th>


                </tr>
                </thead>
                <tbody>

                @foreach($exams as $Exam)

                    <tr>
                        <td>{{$Exam->id}}</td>
                        <td><a href="{{ route('exams.show', $Exam->id)}}">{{$Exam->code}}</a></td>
                        <td>{{$Exam->name}}</a></td>
                        <td>{{$Exam->class}}</td>
                        <td>{{$Exam->name_teacher}}</a></td>
                        <td>{{$Exam->created_at ? $Exam->created_at->diffForHumans() : 'no date'}}</td>
                        <td>{{$Exam->updated_at->diffForHumans()}}</td>
                        <td class="text-center">
                            <a href="{{ route('exams.edit', $Exam->id)}}" class="btn btn-primary btn-sm">Edit</a>
                            <form action="{{ route('exams.destroy', $Exam->id)}}" method="post" style="display: inline-block">
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
@endsection
