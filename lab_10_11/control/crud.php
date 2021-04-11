<?php
    // Simple functions to handle insertion, update, and deletion
    require_once "login.php";

    // Insertion function
    function insertdata($id, $fname, $lname, $email, $dept, $acad) {
        $login = new Login();
        $conn = $login->create_conn();

        if ($conn->connect_error) {
            die("Failed to connect to database!");
        }

        // Insert data into STUDENTS table
        $sql = "INSERT INTO STUDENTS (StudentID, FirstName, LastName, Email, Department, AcademicYear) VALUES ($id, '$fname', '$lname', '$email', '$dept', '$acad')";
        $result = $conn->query($sql);

        // Check if result was successful
        if (!$result) {
            return False;
        } else {
            return True;
        }
    }

    // Update function
    function updatedata($id, $fname, $lname, $email, $dept, $acad) {
        $login = new Login();
        $conn = $login->create_conn();

        if ($conn->connect_error) {
            die("Failed to connect to database!");
        }

        // Update record in STUDENTS table
        $sql = "UPDATE STUDENTS SET FirstName='$fname', LastName='$lname', Email='$email', Department='$dept', AcademicYear='$acad' WHERE StudentID=$id";
        $result = $conn->query($sql);

        // Check if result was successful
        if (!$result) {
            return False;
        } else {
            return True;
        }
    }

    // Delete function
    function deletedata($id, $fname, $lname, $email, $dept, $acad) {
        $login = new Login();
        $conn = $login->create_conn();

        if ($conn->connect_error) {
            die("Failed to connect to database!");
        }

        // Delete record from STUDENTS table
        $sql = "DELETE FROM STUDENTS WHERE StudentID=$id AND FirstName='$fname' AND LastName='$lname' AND Email='$email' AND Department='$dept' AND AcademicYear='$acad'";
        $result = $conn->query($sql);

        // Check if result was successful
        if (!$result) {
            return False;
        } else {
            return True;
        }
    }

?>
