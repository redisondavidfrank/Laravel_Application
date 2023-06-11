<!DOCTYPE html>
<html>
<head>
    <title>Assignment Management System</title>
    <link rel="stylesheet" href="/css/main.css">
</head>
<body>
    <!-- Assigment Management System Homepage -->
    <h1>Assignment Management System</h1>
    <div class="logout" style="text-align: right" onclick="alert('Log out successfully.');">
         <form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Logout</button>
        </form>
    </div><br>
    <div style='text-align: right';>
        <select name="assignment_name" onchange="location = this.value;">
        <option value="">Edit Table</option>
        <option value="add">Add New Assignment</option>
        <option value="update">Update</option>
        <option value="delete">Delete</option>
        </select><br><br>
    </div>
    <a href="studentinfo"><button>Go to Student Information</button></a><br><br>
        <div style='text-align: right;'>
            <form action='{{ url('/home')}}' method='GET' >
                 <label for='status_filter'></label>
                    <select name='status_filter' id='status_filter'>
                    <option value=''>All</option>
                    <option name='status_name'value='status_name'>complete</option>
                    <option name='status_name'value='status_name'>in progress</option>
                    <option name='status_name'value='status_name'>incomplete</option>
                    </select>
                <input type='submit' value='Apply Filter'>
            </form><br><br>
        </div>

    <table class='assignment-table'>
        <tr><th>Assignment no.</th><th>Assignment</th><th>Subject</th><th>Instructor</th><th>Status</th></tr>
        @foreach($data as $item)
        <tr>
            <td>{{ $item->assignment_id }}</td>
            <td>{{ $item->assignment_name }}</td>
            <td>{{ $item->subject_name }}</td>
            <td>{{ $item->Instructor }}</td>
            <td>{{ $item->status_name }}</td>
        </tr>
        @endforeach
    </table>
</body>
