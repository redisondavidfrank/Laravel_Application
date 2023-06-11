<!DOCTYPE html>
<html>
<head>
    <title>Delete Assignment</title>
    <link rel="stylesheet" href="/css/delete.css">
</head>
<body>

    <!-- Delete Assignment Form -->
    <h2>Delete Assignment</h2>
    <form method="POST" action="{{ route('delete') }}">
    @csrf
        <label for="assignment_id">Assignment ID:</label>
        <input type="number" name="assignment_id" required><br><br>

        <input type="submit" name="delete_assignment" value="Delete Assignment">
    </form><br><br>
    <a href="home"><button>Go to Main Page</button></a>
    
</body>
</html>
