@extends('layout')

@section('content')


    <br />
    <br />

    {{--<div class="input-group w-25">--}}
{{--              <span class="input-group-text" id="basic-addon1">--}}
{{--                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">--}}
{{--                <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>--}}
{{--                </svg>--}}
{{--              </span>--}}
{{--    <input type="text" class="form-control" placeholder="Input group example" aria-label="Input group example" aria-describedby="basic-addon1">--}}
{{--</div>--}}



    <div class="row">
        <!-- left column -->
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary" >
                <div class="card-body text-primary">
                <div class="card-header">
                    <h1>Books

                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
                            <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
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

                <div class="input-group mb-3">
                    <input type="file" name="photo_id" class="form-control" id="inputGroupFile02">
                    <label class="input-group-text" for="inputGroupFile02">Upload</label>
                </div>


                <div class="form-group">
                    @csrf
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name"/>
                </div>

                <div class="form-floating">
                    <label for="floatingTextarea2">About</label>
                    <textarea class="form-control" name="about" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>

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

    </div>




    <style>
        .container {
            max-width: 5400px;
        }
        .push-top {
            margin-top: 100px;
        }
        body{
            background-color:#fff;
        }
    </style>
{{--    <style>--}}
{{--        .container {--}}
{{--            max-width: 5400px;--}}
{{--        }--}}
{{--        .push-top {--}}
{{--            margin-top: 100px;--}}
{{--        }--}}
{{--        body{--}}
{{--            background-image:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)), url(images/hero.jpg);--}}
{{--            background-size:cover;--}}
{{--            background-position:center;--}}
{{--            height:100vh;--}}
{{--        }--}}
{{--    </style>--}}


    <div class="card card-primary">
    <br/>

    @if($books)

        <table class="table">
            <thead>
            <tr>
                <th>id</th>
                <th>Photo</th>
                <th>name</th>
                <th>About</th>
                <th>Create By</th>
                <th>Created date</th>
                <th>Updated</th>


            </tr>
            </thead>
            <tbody>

            @foreach($books as $Book)

               <tr>
                   <td>{{$Book->id}}</td>
                   <td> <img style="height:100px" src="{{$Book->photo ? $Book->photo->file : 'http://placehold.it/400x400'}}" alt="" ></td>
                   <td>{{$Book->name}}</a></td>
                   <td>{{$Book->about}}</a></td>
                   <td>{{$Book->user->name}}</a></td>
                    <td>{{$Book->created_at ? $Book->created_at->diffForHumans() : 'no date'}}</td>
                    <td>{{$Book->updated_at->diffForHumans()}}</td>
                   <td class="text-center">
                       <a href="{{ route('books.edit', $Book->id)}}" class="btn btn-primary btn-sm">Edit</a>
                        <form action="{{ route('books.destroy', $Book->id)}}" method="post" style="display: inline-block">
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
