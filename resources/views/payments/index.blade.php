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
                            Payments
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-credit-card-2-back" viewBox="0 0 16 16">
                                <path d="M11 5.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1z"/>
                                <path d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2zm13 2v5H1V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1zm-1 9H2a1 1 0 0 1-1-1v-1h14v1a1 1 0 0 1-1 1z"/>
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
                        <label for="name">Student_Id</label>
                        <input type="text" class="form-control" name="code"/>
                    </div>

                    <div class="form-group">
                        @csrf
                        <label for="name">FullName</label>
                        <input type="text" class="form-control" name="name"/>
                    </div>
                    <div class="form-group">
                        <label for="name">Class</label>
                        <input type="text" class="form-control" name="class"/>
                    </div>

                    <div class="form-group">
                        <label for="name">Amount</label>
                        <input type="text" class="form-control" name="amount"/>
                    </div>


                    @csrf
                    <br/>

                    <div class="form_group">
                        <button type="submit" class="btn btn-primary">Payment </button>
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


    @if($payments)

            <table class="table">
                <thead>
                <tr >
                    <th>id</th>
                    <th>Student_Id</th>
                    <th>FullName</th>
                    <th>Class</th>
                    <th>Amount/$</th>
                    <th>Created date</th>
                    <th>Updated</th>


                </tr>
                </thead>
                <tbody>

                @foreach($payments as $Payment)

                    <tr>
                        <td>{{$Payment->id}}</td>
                        <td>{{$Payment->code}}</a></td>
                        <td>{{$Payment->name}}</a></td>
                        <td>{{$Payment->class}}</a></td>
                        <td>{{$Payment->amount}}</a></td>
                        <td>{{$Payment->created_at ? $Payment->created_at->diffForHumans() : 'no date'}}</td>
                        <td>{{$Payment->updated_at->diffForHumans()}}</td>
                        <td class="text-center">
                            <a href="{{ route('payments.edit', $Payment->id)}}" class="btn btn-primary btn-sm">Edit</a>
                            <form action="{{ route('payments.destroy', $Payment->id)}}" method="post" style="display: inline-block">
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
