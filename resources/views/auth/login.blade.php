<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>

    <h1>Login</h1>

    <form action="{{route('form.login')}}" method="POST">
        @csrf

        <div>
            <label for="">email</label>
            <input type="email" name="email">
        </div>

        <div>
            <label for="">password</label>
            <input type="password" name="password">
        </div>

        <div>
            <input type="submit" value="Login">
        </div>
    </form>

</body>
</html>
