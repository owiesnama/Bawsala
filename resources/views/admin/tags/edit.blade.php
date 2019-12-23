@extends('layouts.admin')

@section('content')
    <h1> Create Tag </h1>

    @if($errors->any())

        <hr>
        <ul>
            @foreach($errors->all() as $error)
                <li> {{ $error  }} </li>
            @endforeach
        </ul>
        <hr>

    @endif

    <form method="POST" action="{{ route('tags.update', $tag->id)  }}">

        @csrf
        @method('PATCH')

        <label for="tag">Tag</label>
        <input type="text" id="tag" name="name" value="{{ $tag->name  }}">

        <br>
        <br>

        <input type="submit" value="Update"/>

    </form>
@endsection