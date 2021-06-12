@extends('layout')

@section('content')

    <style>
        .push-top {
            margin-top: 50px;
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
                <th>Code</th>
                <td>FullName</td>
                <td>Session</td>
                <td>Language</td>
                <th>Class</th>
                <th>Section</th>
                <th>Father</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Create</th>
                <th>Updated</th>
                <td class="text-center">Action</td>
            </tr>
            </thead>
            <tbody>
            @foreach($person as $person)
                <tr>
                    <td>{{$person->id}}</td>
                    <td>{{$person->student_id}}</td>
                    <td>{{$person->name}}</td>
                    <td>{{$person->session}}</td>
                    <td>{{$person->language}}</td>
                    <td>{{$person->class }}</td>
                    <td>{{$person->section }}</td>
                    <td>{{$person->father }}</td>
                    <td>{{$person->gender }}</td>
                    <td>{{$person->address }}</td>
                    <td>{{$person->created_at->diffForHumans()}}</td>
                    <td>{{$person->updated_at->diffForHumans()}}</td>
{{--                    <td class="text-center">--}}
{{--                        <a href="{{ route('students.edit', $student->id)}}" class="btn btn-primary btn-sm">Edit</a>--}}
{{--                        <form action="{{ route('students.destroy', $student->id)}}" method="post" style="display: inline-block">--}}
{{--                            @csrf--}}
{{--                            @method('DELETE')--}}
{{--                            <button class="btn btn-danger btn-sm" type="submit">Delete</button>--}}
{{--                        </form>--}}
{{--                    </td>--}}
                </tr>
            @endforeach
            </tbody>
        </table>
        <div>
@endsection
