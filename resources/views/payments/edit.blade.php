@extends('layout')

@section('content')

    <style>
        .container {
            max-width: 500px;
        }
        .push-top {
            margin-top: 50px;
        }

    </style>
    <div class="text-primary" >

        <h1>
            Edit & Update
        </h1>
    </div>


    <div class="row">
        <div class="col-md">
            <div class="row g-3">

                <form class="col-md-12" method="post"  novalidate enctype="multipart/form-data" action="{{ route('payments.update', $payments->id)}}">
                    <br/>

                    @csrf
                    @method('PATCH')

                    <div class="form-group">
                        @csrf
                        <label for="name">Student_Id</label>
                        <input type="text" class="form-control" name="code"  value="{{ $payments->code }}"/>
                    </div>

                    <div class="form-group">
                        @csrf
                        <label for="name">FullName</label>
                        <input type="text" class="form-control" name="name"  value="{{ $payments->name }}"/>
                    </div>
                    <div class="form-group">
                        <label for="name">Class</label>
                        <input type="text" class="form-control" name="class"  value="{{ $payments->class }}"/>
                    </div>

                    <div class="form-group">
                        <label for="name">Amount</label>
                        <input type="text" class="form-control" name="amount"  value="{{ $payments->amount }}"/>
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





@endsection
