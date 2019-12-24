<h1> Create Role </h1>
@if($errors->any())
    <div class="alert is-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li> {{ $error  }} </li>
            @endforeach
        </ul>
    </div>
@endif


<form method="POST" action="{{ route('roles.update', $data->id)  }}">

    @csrf
    @method('PATCH')

    <label for="role">Role</label>
    <input type="text" id="role" name="role" value="{{ $data->role  }}">

    <br>
    <br>

    <input type="submit" value="Update" />

</form>
