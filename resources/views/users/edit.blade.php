<!-- resources/views/users/edit.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>

<h1>Edit User</h1>

@if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="post" action="{{ route('users.update', $user->id) }}">
    @csrf
    @method('put')
    
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="{{ $user->name }}" required><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="{{ $user->email }}" required><br>

    <button type="submit">Update User</button>
</form>

<a href="{{ route('users.index') }}">Back to All Users</a>

</body>
</html>
