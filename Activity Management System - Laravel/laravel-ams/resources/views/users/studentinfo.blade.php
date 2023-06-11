<!DOCTYPE html>
<html>
<head>
    <title>Student Information</title>
    <link rel="stylesheet" href="/css/studinfo.css">
</head>
<body>
    <!-- Student info table -->
    <h2 style="text-align: center">Student Information</h2>
    <br><br>
    <a href="studentupdate"><button>Update Student Information</button></a>
    <a href="addstudent"><button>Add Student Information</button></a>
    <br>
    <div class="container">
        <table>
            <tr>
                <th>Student ID</th>
                <th>ID Number</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Contact</th>
                <th>Course</th>
            </tr>
        @foreach($records as $item)
        <tr>
            <td>{{ $item->student_id }}</td>
            <td>{{ $item->id_number }}</td>
            <td>{{ $item->firstname }}</td>
            <td>{{ $item->lastname }}</td>
            <td>{{ $item->gender }}</td>
            <td>{{ $item->address }}</td>
            <td>{{ $item->contact }}</td>
            <td>{{ $item->course }}</td>
        </tr>
        @endforeach
        </table>
    </div>

</body>
</html>