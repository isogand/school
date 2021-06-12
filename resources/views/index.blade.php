@extends('layout')

@section('content')



</br>

<style>

    .container {
        max-width: 1500px;
    }
    body{
        background-color:#ffffff;
    }

</style>
<div class="shadow-none  ">
    <div class="mx-auto pull-right">
        <div class="btn btn-default">
            <form action="{{ route('students.index') }}"  novalidate enctype="multipart/form-data" method="GET" role="search">

                <div class="input-group">
                    <a href="{{route('home')}} " class="nav-link ">

                        <p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
                            </svg>
                            Go home</p>
                    </a>

                    <span class="input-group-btn ">
                            <button class="btn btn-info" type="submit" title="Search projects">
                                <span class="fas fa-search">
                                     <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/></svg>
                                </span>
                            </button>
                        </span>
                    <input type="text" class="form-control mr-2" name="term" placeholder="Search name" id="term">


                </div>
            </form>
        </div>
    </div>
</div>

{{-- <div class="input-group w-50">--}}

{{--             <span class="input-group-text" id="basic-addon1">--}}
{{--                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">--}}
{{--                  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>--}}
{{--                  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>--}}
{{--                </svg>--}}
{{--             </span>--}}

{{--               <input type="text" class="form-control" placeholder="Students" aria-label="Input group example" aria-describedby="basic-addon1">--}}
{{--    </div>--}}

    <style>

        body{
            background-color:#ffffff;
        }

    </style>

    <div class="push-top">
        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div><br />
        @endif
        <table class="table">
            <thead>
            <tr class="table-warning">
                <td>ID</td>
                <th>Photo</th>
                <td>Name</td>
                <td>Email</td>
                <td>Phone</td>
                <th>Role</th>
                <th>Active</th>
                <th>Gender</th>
                <th>Birth</th>
                <th>Last_Mark</th>
                <th>Create</th>
                <th>Updated</th>
                <td class="text-center">Action</td>
            </tr>
            </thead>
            <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{$student->id}}</td>
                    <td> <img style="height:100px" src="{{$student->photo ? $student->photo->file : 'http://placehold.it/400x400'}}" alt="" ></td>

                    <td><a href="{{route('students.show', $student->id)}}">{{$student->name}}</a></td>
                    <td>{{$student->email}}</td>
                    <td>{{$student->phone}}</td>
                    <td>{{$student->role ? $student->role->name : 'student has no role'}}</td>
                    <td>{{$student->is_active ==1?'Active':'Not Active'}}</td>
                    <td>{{$student->gender}}</a></td>
                    <td>{{$student->date_of_birth}}</a></td>
                    <td>{{$student->last_mark}}</a></td>
                    <td>{{$student->created_at->diffForHumans()}}</td>
                    <td>{{$student->updated_at->diffForHumans()}}</td>
                    <td class="text-center">
                        <a href="{{ route('students.edit', $student->id)}}" class="btn btn-primary btn-sm">Edit</a>
                        <form action="{{ route('students.destroy', $student->id)}}" method="post" style="display: inline-block">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div>




@endsection
