

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
            background-color:#f0fff3;
        }
    </style>


    <h1>  Curriculum<span class="badge bg-secondary"></span></h1>

    <h5> section-F class-2</h5>

    <div class="container">
        <table class="table table-striped">
            <table class="table table-success table-striped">




                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Course Name</th>
                    <th scope="col">Course Time</th>
                    <th scope="col">Room Number</th>
                    <th scope="col">Class Number</th>
                    <th scope="col">Section Number</th>
                    <th scope="col">Teacher</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>English A</td>
                    <td> 9:30AM-10:20AM </td>
                    <td>5</td>
                    <td>2</td>
                    <td>F</td>
                    <td>Ali Azimi</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>English B</td>
                    <td> 12:50AM-01:40AM </td>
                    <td>5</td>
                    <td>2</td>
                    <td>F</td>
                    <td>Ali Azimi</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>English C</td>
                    <td> 12:30AM-01:40AM </td>
                    <td>5</td>
                    <td>2</td>
                    <td>F</td>
                    <td>Ali Azimi</td>
                </tr>
                </tbody>
            </table>
        </table>
    </div>



@endsection












