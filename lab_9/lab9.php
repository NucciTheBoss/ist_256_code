<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group 1 Lab 09</title>
</head>
<body>
    <!-- Tables: Student, Courses, College -->
    <!-- Student Columns: StudentID, Name, Email, College -->
    <!-- Courses: CourseID, CourseName, Instructor, College -->
    <!-- College: CollegeName, Building -->
    <?php
        $conn = new mysqli($hostname, $username, $password, $database);
        if ($conn->connect_error) die("Fatal Error");

        $studentID = $_POST['stuID'];
        $studentName = $_POST['stuName'];
        $studentEmail = $_POST['stuEmail'];
        $studentCollege = $_POST['stuCollege'];
        if(!empty($_POST['name'])) { //if they filled out all the fields
            //add it into the table
            $addQuery = "INSERT INTO players(stuID, stuName, stuEmail, stuCollege) VALUES" .
                "('$studentID', '$studentName', '$studentEmail', '$studentCollege')";
            $addResult = $conn->query($addQuery);
            if(!$addResult) die("Fatal Error on INSERT");
        }
        
        $dataFromStudentTable = 'SELECT * FROM student';
        $result = $conn->query($dataFromStudentTable);

        $rows = $result->num_rows;

        echo "<table>";
        echo "<tr> <th> Student ID </th> <th> Name </th> <th> Email </th> <th> College </th> </tr>";
        for($i = 0; $i < $rows; $i++) {
            // using associative array
            $fullRow = $result->fetch_array(MYSQLI_ASSOC);
            echo "<tr>";
            echo '<td>' . $fullRow['stuID'] . '</td>';
            echo '<td>' . $fullRow['stuName'] . '</td>';
            echo '<td>' . $fullRow['stuEmail'] . '</td>';
            echo '<td>' . $fullRow['stuCollege'] . '</td>';
            echo "</tr>";
        }
        echo "</table>";
        
        echo <<<_END
        // creates a button that allows user to input values & sends the data to the server
        <form action='lab9.php' method ='post'><pre>
        Student ID <input type="text" name="stuID">
        Student Name <input type="text" name="stuName">
        Student Email <input type="text" name="email">
        Student College <input type="text" name="college">
        <input type="submit" value="ADD RECORD"
        </pre></form>
        _END;

        $courseID = $_POST['courseID'];
        $courseName = $_POST['courseName'];
        $instructor = $_POST['instructor'];
        $college = $_POST['college'];
        if(!empty($_POST['courseID'])) { //if they filled out all the fields
            //add it into the table
            $addQuery = "INSERT INTO players(courseID, courseName, instructor, college) VALUES" .
                "('$courseID', '$courseName', '$instructor', '$college')";
            $addResult = $conn->query($addQuery);
            if(!$addResult) die("Fatal Error on INSERT");
        }
        
        $dataFromCourseTable = 'SELECT * FROM course';
        $result = $conn->query($dataFromCourseTable);

        $rows = $result->num_rows;

        echo "<table>";
        echo "<tr> <th> Course ID </th> <th> Course Name </th> <th> Instructor </th> <th> College </th> </tr>";
        for($i = 0; $i < $rows; $i++) {
            // using associative array
            $fullRow = $result->fetch_array(MYSQLI_ASSOC);
            echo "<tr>";
            echo '<td>' . $fullRow['courseID'] . '</td>';
            echo '<td>' . $fullRow['courseName'] . '</td>';
            echo '<td>' . $fullRow['instructor'] . '</td>';
            echo '<td>' . $fullRow['college'] . '</td>';
            echo "</tr>";
        }
        echo "</table>";

        echo <<<_END
        // creates a button that allows user to input values & sends the data to the server
        <form action='lab9.php' method ='post'><pre>
        Course ID <input type="text" name="courseID">
        Course Name <input type="text" name="courseName">
        Instructor <input type="text" name="instructor">
        College <input type="text" name="college">
        <input type="submit" value="ADD RECORD"
        </pre></form>
        _END;


        $collegeName = $_POST['collegeName'];
        $building = $_POST['building'];

        if(!empty($_POST['name'])) { //if they filled out all the fields
            //add it into the table
            $addQuery = "INSERT INTO players(collegeName, building) VALUES" .
                "('$collegeName', '$building')";
            $addResult = $conn->query($addQuery);
            if(!$addResult) die("Fatal Error on INSERT");
        }
        
        $dataFromCollegeTable = 'SELECT * FROM college';
        $result = $conn->query($dataFromCollegeTable);

        $rows = $result->num_rows;

        echo "<table>";
        echo "<tr> <th> College Name </th> <th> Building </th> </tr>";
        for($i = 0; $i < $rows; $i++) {
            // using associative array
            $fullRow = $result->fetch_array(MYSQLI_ASSOC);
            echo "<tr>";
            echo '<td>' . $fullRow['collegeName'] . '</td>';
            echo '<td>' . $fullRow['building'] . '</td>';
            echo "</tr>";
        }
        echo "</table>";

        echo <<<_END
        // creates a button that allows user to input values & sends the data to the server
        <form action='lab9.php' method ='post'><pre>
        College <input type="text" name="college">
        Building <input type="text" name="building">
        <input type="submit" value="ADD RECORD"
        </pre></form>
        _END;

    ?>
</body>
</html>