<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
</head>
<body>

    <h1>Create User</h1>

    <form action="{{ route('users.store') }}" method="post">
        @csrf

        <label for="name">Name:</label>
        <input type="text" name="name" id="name">

        <label for="name">Username:</label>
        <input type="text" name="username" id="username" required>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" >

        <button type="submit">Create User</button>
    </form>

</body>
</html>
