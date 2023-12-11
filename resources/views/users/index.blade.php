<!-- resources/views/users/index.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>All Users</title>
</head>
<body>

<h1>All Users</h1>

@if(session('success'))
    <div style="color: green;">{{ session('success') }}</div>
@endif

<ul>
    @foreach($users as $user)
        <li>{{ $user->name }} - <a href="{{ route('users.edit', $user->id) }}">Edit</a> | 
        <form method="post" action="{{ route('users.destroy', $user->id) }}" style="display:inline;">
            @csrf
            @method('delete')
            <button type="submit" style="color: red; cursor: pointer; border: none; background-color: transparent;">Delete</button>
        </form>
        </li>
    @endforeach
</ul>

<a href="{{ route('users.create') }}">Create User</a>

</body>
</html>
