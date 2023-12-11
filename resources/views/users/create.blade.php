<!-- resources/views/users/create.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Create User</title>
</head>
<body>

<h1>Create User</h1>

@if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="post" action="{{ route('users.store') }}">
    @csrf
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br>

    <button type="submit">Create User</button>
</form>

<a href="{{ route('users.index') }}">Back to All Users</a>

</body>
</html>
