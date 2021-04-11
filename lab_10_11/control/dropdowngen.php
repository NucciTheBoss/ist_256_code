<?php
    // PHP functions to retrieve foriegn keys in MySQL database
    // to build dropdown menus in the HTML form
    require_once "login.php";

    // Function to pull foreign keys from DEPARTMENT table
    function departmentdropgen() {
        $login = new Login();
        $conn = $login->create_conn();

        if ($conn->connect_error) {
            die("Failed to connect to database!");
        }

        // Pull primary keys from DEPARTMENT
        $sql = "SELECT DepartmentName FROM DEPARTMENT";
        $result = $conn->query($sql);

        // Run through primary keys, echo them out as option HTML tags
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $dept = $row["DepartmentName"];
                echo "<option value='$dept'>" . $dept . "</option>";
            }
        }
    }

    // Function to pull foreign keys from ACADEMICYEAR table
    function yeardropgen() {
        $login = new Login();
        $conn = $login->create_conn();

        if ($conn->connect_error) {
            die("Failed to connect to database!");
        }

        // Pull primary keys from ACADEMICYEAR
        $sql = "SELECT AcademicYear FROM ACADEMICYEAR";
        $result = $conn->query($sql);

        // Run through primary keys, echo them out as option HTML tags
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $acad = $row["AcademicYear"];
                echo "<option value='$acad'>" . $acad . "</option>";
            }
        }
    }
?>
