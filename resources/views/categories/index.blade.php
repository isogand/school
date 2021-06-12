@extends('layout')

@section('content')

@include('includes.tinyeditor')

<style>


    body{
        background-color:#fcfcfc;
    }
</style>

<a href="{{route('home')}} " class="nav-link ">

    <p>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
        </svg>
        Go home</p>
</a>



<h1>
    Event</h1>

<div class="col-sm6">
    <div class="col-md">
        <div class="row g-3">

            <form class="col-md-12" method="post" novalidate>
                <br/>







                <textarea name="name" id="full-featured"><p style="text-align: center; font-size: 15px;"><img title="TinyMCE Logo" src="//www.tiny.cloud/images/glyph-tinymce@2x.png" alt="TinyMCE Logo" width="110" height="97" />
  </p>
  <h2 style="text-align: center;">Welcome to the TinyMCE Cloud demo!</h2>
  <h5 style="text-align: center;">Note, this includes some "enterprise/premium" features.<br>Visit the <a href="https://www.tiny.cloud/pricing">pricing page</a> to learn more about our premium plugins.</h5>
  <p>Please try out the features provided in this full featured example.</p>

  <h2>Got questions or need help?</h2>
  <ul>
    <li>Our <a class="mceNonEditable" href="//www.tiny.cloud/docs/">documentation</a> is a great resource for learning how to configure TinyMCE.</li>
    <li>Have a specific question? Try the <a href="https://stackoverflow.com/questions/tagged/tinymce" target="_blank" rel="noopener"><code>tinymce</code> tag at Stack Overflow</a>.</li>
    <li>We also offer enterprise grade support as part of <a href="https://www.tiny.cloud/pricing">TinyMCE premium subscriptions</a>.</li>
  </ul>

  <h2>A simple table to play with</h2>
  <table style="border-collapse: collapse; width: 100%;" border="1">
    <thead>
      <tr>
        <th>Product</th>
        <th>Cost</th>
        <th>Really?</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>TinyMCE Cloud</td>
        <td>Get started for free</td>
        <td>YES!</td>
      </tr>
      <tr>
        <td>Plupload</td>
        <td>Free</td>
        <td>YES!</td>
      </tr>
    </tbody>
  </table>

  <h2>Found a bug?</h2>
  <p>If you think you have found a bug please create an issue on the <a href="https://github.com/tinymce/tinymce/issues">GitHub repo</a> to report it to the developers.</p>

  <h2>Finally ...</h2>
  <p>Don't forget to check out our other product <a href="http://www.plupload.com" target="_blank">Plupload</a>, your ultimate upload solution featuring HTML5 upload support.</p>
  <p>Thanks for supporting TinyMCE! We hope it helps you and your users create great content.<br>All the best from the TinyMCE team.</p>
</textarea>

                @csrf
                <br/>

                <div class="form_group">
                    <button type="submit" class="btn btn-primary">Create Event </button>
                </div>



            </form>
        </div>
    </div>
</div>




<div class="text-end">
    <br/>

    @if($categories)

        <table class="table">
            <thead>
            <tr>
                <th>id</th>
                <th>Text</th>
                <th>Create By</th>
                <th>Created date</th>
                <th>Updated</th>


            </tr>
            </thead>
            <tbody>
`
            @foreach($categories as $category)

                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->name}}</a></td>
{{--                   {{dd($category)}}--}}
                    <td>{{$category->user->name}}</a></td>
{{--                    <td><a href="{{ Auth::user()->name }}"></a></td>--}}
                    <td>{{$category->created_at ? $category->created_at->diffForHumans() : 'no date'}}</td>
                    <td>{{$category->updated_at->diffForHumans()}}</td>
                    <br/>
                    <td class="text-center">
                        <a href="{{ route('categories.edit', $category->id)}}" class="btn btn-primary btn-sm">Edit</a>
                        <form action="{{ route('categories.destroy', $category->id)}}" method="post" style="display: inline-block">
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
