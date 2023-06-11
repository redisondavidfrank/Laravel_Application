<!DOCTYPE html>
<html>
<head>
    <title>Add Assignment</title>
    <link rel="stylesheet" href="/css/update.css">
</head>
<body>
    
    <!-- Update Assignment Form -->
    <h2>Update Assignment</h2>
    <a href="home"><button>Go to Main Page</button></a><br><br>

    <form method="POST" action="{{ route('update') }}">
    @csrf
        <label for="assignment_id">Assignment No:</label>
        <input type="number" name="assignment_id" value="{{ $data->assignment_id }}" required><br><br>

        <label for="assignment_name">Assignment Name:</label>
        <input type="text" name="assignment_name" value=" {{ $data->assignment_name }}" required><br><br>

        <label for="subject_name">Subject:</label>
        <input type="text" name="subject_name" value=" {{ $data->subject_name }}" required><br><br>

        <label for="firstname">Instructor First Name:</label>
        <input type="text" name="firstname" value="{{ $data->firstname}}" required><br><br>

        <label for="lastname">Instructor Last Name:</label>
        <input type="text" name="lastname" value="{{ $data->lastname }}" required><br><br>

        <label for="status_name">Status:</label>
        <input type="text" name="" value="{{ $data->status_name }}" required><br><br>

        <input type="submit" name="update_assignment" value="Update Assignment">
    </form><br><br>
</body>
</html>
