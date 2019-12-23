@extends('layouts.admin')

@section('content')
    <div class="p-4">
        <h1> Create User </h1>

        @if($errors->any())

            <hr>
            <ul>
                @foreach($errors->all() as $error)
                    <li> {{ $error  }} </li>
                @endforeach
            </ul>
            <hr>

        @endif

        <form class="w-3/4" method="POST" action="{{ route('users.store')  }}">

            @csrf

            <label class="input-label" for="name">Enter User Name</label>
            <div class="input">
                <input type="text" id="name" name="name">
            </div>


            <label class="input-label" for="email">Enter User Email</label>
            <div class="input">
                <input type="email" id="email" name="email">
            </div>

            <label class="input-label" for="role">Select user role</label>
            <div class="input">
                <select id="role" name="role_id">
                    @foreach($roles as $role)
                        <option value="{{ $role->id  }}">{{ $role->role }}</option>
                    @endforeach
                </select>
            </div>


            <label class="input-label" for="password">Enter Password</label>
            <div class="input">
                <input type="password" id="password" name="password">
            </div>

            <button class="button is-green" type="submit">Create</button>

        </form>
    </div>
@endsection