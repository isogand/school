@extends('layout')

@section('content')

    <style>
        .container {
            max-width: 5400px;
        }
        .push-top {
            margin-top: 100px;
        }
        body{
            background-color:#fcfcfc;
        }
    </style>


    <br />
    <div class="row">
        <!-- left column -->
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary" >
                <div class="card-body text-primary">
                    <div class="card-header">
                        <h3 >
                            <br />
                            Course
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-layout-text-sidebar-reverse" viewBox="0 0 16 16">
                                <path d="M12.5 3a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1h5zm0 3a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1h5zm.5 3.5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 .5-.5zm-.5 2.5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1h5z"/>
                                <path d="M16 2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2zM4 1v14H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h2zm1 0h9a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5V1z"/>
                            </svg>
                        </h3>
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
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name"/>
                        </div>

                        <div class="form-group">
                            @csrf
                            <label for="name">Term</label>
                            <input type="text" class="form-control" name="term"/>
                        </div>

                        <div class="form-group">
                            @csrf
                            <label for="name">Language_id</label>
                            <input type="text" class="form-control" name="language_id"/>
                        </div>

                        <div class="form-group">
                            @csrf
                            <label for="name">Level_id</label>
                            <input type="text" class="form-control" name="level_id"/>
                        </div>
                        <div class="form-group">
                            <label for="name">Description</label>
                            <input type="text" class="form-control" name="description"/>
                        </div>

                        <div class="form-group">
                            <label for="name">Name_Teacher</label>
                            <input type="text" class="form-control" name="name_teacher"/>
                        </div>


                        @csrf
                        <br/>

                        <div class="form_group">
                            <button type="submit" class="btn btn-primary">Create Course </button>
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


        @if($courses)

            <table class="table">
                <thead>
                <tr >
                    <th>id</th>
                    <th>Name</th>
                    <th>Term</th>
                    <th>Language_id</th>
                    <th>Level_id</th>
                    <th>description</th>
                    <th>Name_Teacher</th>
                    <th>Created date</th>
                    <th>Updated</th>


                </tr>
                </thead>
                <tbody>

                @foreach($courses as $Course)

                    <tr>
                        <td>{{$Course->id}}</td>
                        <td>{{$Course->name}}</a></td>
                        <td>{{$Course->term}}</a></td>
                        <td>{{$Course->language_id}}</a></td>
                        <td>{{$Course->level_id}}</a></td>
                        <td>{{$Course->description}}</a></td>
                        <td>{{$Course->name_teacher}}</a></td>
                        <td>{{$Course->created_at ? $Course->created_at->diffForHumans() : 'no date'}}</td>
                        <td>{{$Course->updated_at->diffForHumans()}}</td>
                        <td class="text-center">
                            <a href="{{ route('courses.edit',$Course->id)}}" class="btn btn-primary btn-sm">Edit</a>
                            <form action="{{ route('courses.destroy',$Course->id)}}" method="post" style="display: inline-block">
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
