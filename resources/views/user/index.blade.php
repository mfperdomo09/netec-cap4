<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <h1>Home</h1>
    <a href="{{route('logout')}}">Log Out</a>


    @if (session('success') || session('error'))
        <div>
            <h2>
                {{ session('success') }}
                {{ session('error') }}
            </h2>
        </div>
    @endif

    <br>
    <br>

    <form action="{{route('user.store')}}" method="POST">
        @csrf
        <div>
            <label for="">name</label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="">email</label>
            <input type="email" name="email">
        </div>
        <div>
            <label for="">identification</label>
            <input type="number" name="identification">
        </div>
        <div>
            <label for="">phone</label>
            <input type="phone" name="phone">
        </div>

        <div>
            <label for="">password</label>
            <input type="password" name="password">
        </div>

        <div>
            <input type="submit" value="Store">
        </div>
    </form>


    <br>
    <br>

    <table>

        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Identification</th>
                <th>Phone</th>
                <th>Updated at</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->identification }}</td>
                    <td>{{ $user->phone }}</td>
                    <td>{{ $user->updated_at }}</td>
                </tr>
            @endforeach

        </tbody>

    </table>

</body>

</html>
