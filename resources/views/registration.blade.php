<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
       <h1>Reg form</h1>
       <form action="registration" method="post">
        @csrf
       Name : <input type="text" name="username"><br>
       Email : <input type="email" name="email"><br>
       Password : <input type="password" name="password"><br>
       Comform Password : <input type="password" name="password_confirmation"><br>
       <button input="submit">Reg</button>
       </form>

</body>
</html>
