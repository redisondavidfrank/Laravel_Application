<!DOCTYPE html>
<html>
<head>
    <title>Add Assignment</title>
    <link rel="stylesheet" href="/css/add.css">
</head>
<body>
    <!-- Add Assignment Form -->
    <h2>Add Assignment</h2>
    
    <form action="{{ route('add') }}" method="POST">
    @csrf
        <label for="assignment_name">Assignment Name:</label>
        <input type="text" name="assignment_name" required><br><br>

        <label for="subject_name">Subject:</label>
        <input type="text" name="subject_name" required><br><br>

        <label for="instructor_first_name">Instructor:</label>
        <div class="name-field">
            <input type="text" name="instructor_first_name" placeholder="First name" required>
            <input type="text" name="instructor_last_name" placeholder="Last name" required>
        </div><br><br>

        <label for="status_name">Status:</label>
        <input type="text" name="status_name" required><br><br>

        <input type="submit" name="add_assignment" value="Add Assignment">
    </form><br><br>
    <a href="home"><button>Go to Main Page</button></a>
</body>
</html>