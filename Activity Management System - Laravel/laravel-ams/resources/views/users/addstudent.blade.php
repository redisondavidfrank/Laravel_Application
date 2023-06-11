<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="/css/addstudent.css">
</head>
<body>
    <div class="container">

        <!-- Update Student Information Form -->
        <h2>Add Student Information</h2>
        <a href="home"><button>Go to Main Page</button></a>
        <a href="studentinfo"><button>Go to Student Information</button></a>
        <form method="POST" action="{{ route('addstudent') }}">
        @csrf
            <label for="student_id">Student ID:</label>
            <input type="text" name="student_id" placeholder="0" required>
            
            <label for="id_number">ID number:</label>
            <input type="text" name="id_number" placeholder="20200000"required>

            <label for="firstname">First Name:</label>
            <input type="text" name="firstname" required>

            <label for="lastname">Last Name:</label>
            <input type="text" name="lastname" required>

            <label for="gender">Gender:</label>
            <input type="text" name="gender" required>

            <label for="address">Address:</label>
            <input type="text" name="address" required>

            <label for="contact">Contact:</label>
            <input type="text" name="contact" required>

            <label for="course">Program:</label>
            <input type="text" name="course" required>

            <input type="submit" name="update" value="Add">
        </form>
        
    </div>
</body>
</html>
