<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>
        <h1> GEt student data </h1>
        <table border="2px solid black">
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Department</th>
            <th>Enrollment_Year</th>
            <th>Delete</th>
          </tr>

              @foreach ($student as $values )
              <tr>
                  <td>{{$values->id}}</td>
                  <td>{{$values->name}}</td>
                  <td>{{$values->email}}</td>
                  <td>{{$values->department}}</td>
                  <td>{{$values->enrollment_year}}</td>
                  <td> <a href="/delete/{{ $values->id }}">Delete</a> </td>
                </tr>
            @endforeach

     </table>
     </center>
</body>
</html>
