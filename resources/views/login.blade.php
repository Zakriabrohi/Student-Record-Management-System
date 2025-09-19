<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Login page</h1>
    <form action="/login" method="post">
    @csrf
    email:<input type="email" name="email"><br>
    Password:<input type="password" name="password"><br>
    <button type="submit">Login</button>
    </form>
</body>
</html>
