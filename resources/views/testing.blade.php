<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test Controller</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <td>No</td>
                <td>ID</td>
                <td>Full Name</td>
                <td>Email</td>
                <td>Password</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>1</td>
                    <td>{{ $user["id"] }}</td>
                    <td>{{ $user["fullname"] }}</td>
                    <td>{{ $user["email"] }}</td>
                    <td>{{ $user["passsword"] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>