<?php
    // Simple PHP function to generate table for our interface
    // Echo's out <tr> and <td> so be sure to create <tbody>
    require_once "login.php";

    // function to generate table rows and table data
    function tablegen() {
        $login = new Login();
        $conn = $login->create_conn();

        if ($conn->connect_error) {
            die("Failed to connect to database!");
        }

        // Selection query
        $sql = "SELECT StudentID, FirstName, LastName, Email, Department, AcademicYear FROM STUDENTS";
        $result = $conn->query($sql);

        // Run through query results, echoing them out
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["StudentID"] . "</td>";
                echo "<td>" . $row["FirstName"] . "</td>";
                echo "<td>" . $row["LastName"] . "</td>";
                echo "<td>" . $row["Email"] . "</td>";
                echo "<td>" . $row["Department"] . "</td>";
                echo "<td>" . $row["AcademicYear"] . "</td>";
                echo "</tr>";
            }
        }
    }
?>
