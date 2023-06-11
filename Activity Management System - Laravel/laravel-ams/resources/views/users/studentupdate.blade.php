<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="/css/studupdate.css">
</head>
<body>
    <div class="container">

        <!-- Update Student Information Form -->
        <h2>Update Student Information</h2>
        <a href="home"><button>Go to Main Page</button></a>
        <a href="studentinfo"><button>Go to Student Information</button></a>
        <form method="POST" action="{{ route('studentupdate') }}">
        @csrf
            <label for="student_id">Student ID:</label>
            <input type="text" name="student_id" value="{{ $records->student_id }}" required>

            <label for="id_number">ID number:</label>
            <input type="text" name="id_number" value="{{ $records->id_number }}" placeholder="20200000"required>

            <label for="firstname">First Name:</label>
            <input type="text" name="firstname" value="{{ $records->firstname }}"  required>

            <label for="lastname">Last Name:</label>
            <input type="text" name="lastname" value="{{ $records->lastname }}"  required>

            <label for="gender">Gender:</label>
            <input type="text" name="gender" value="{{ $records->gender }}"  required>

            <label for="address">Address:</label>
            <input type="text" name="address" value="{{ $records->address }}"  required>

            <label for="contact">Contact:</label>
            <input type="text" name="contact" value="{{ $records->contact }}" required>

            <label for="course">Program:</label>
            <input type="text" name="course" value="{{ $records->course }}"  required>

            <input type="submit" name="update" value="Update">
        </form>
        
    </div>
</body>
</html>
