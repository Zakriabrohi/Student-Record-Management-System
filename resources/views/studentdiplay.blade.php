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
    <h1>Student Data </h1>
  <!-- 🔎 Search & Filter Form -->
       <form action="search" method="post">
        @csrf
        <input type="text" name="name" placeholder="Search by name" value="{{ request('name') }}">

        <select name="department">
            <option value="">-- Select Department --</option>
            <option value="BBA" {{ request('department') == 'BBA' ? 'selected' : '' }}>BBA</option>
            <option value="Math" {{ request('department') == 'Math' ? 'selected' : '' }}>Mathematics</option>
            <option value="Physics" {{ request('department') == 'Physics' ? 'selected' : '' }}>Physics</option>
        </select>

        <input type="number" name="enrollment_year" placeholder="Year" value="{{ request('enrollment_year') }}">

        <button type="submit">Filter</button>
    </form>
     <table border="2px solid black">
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Department</th>
            <th>Enrollment_Year</th>
          </tr>

              @foreach ($data as $values )
              <tr>
                  <td>{{$values->id}}</td>
                  <td>{{$values->name}}</td>
                  <td>{{$values->email}}</td>
                  <td>{{$values->department}}</td>
                  <td>{{$values->enrollment_year}}</td>
                </tr>
            @endforeach

     </table>
     </center>
</body>
</html>
