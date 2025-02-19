<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>users</title>
</head>
<body>

    @foreach ($users as $user)
        <p>User Id: {{ $user->id }}</p>
        <p>User Name: {{ $user->name }}</p>
        <p>User Email: {{ $user->email }}</p>
    @endforeach

</body>
</html>
