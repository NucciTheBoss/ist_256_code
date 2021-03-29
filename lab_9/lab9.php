<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group 1 - Lab 09 Execution</title>
    <link href="favicon.ico" rel="icon" type="image/x-icon">
    <?php require_once "control\\login.php";?>

    <!-- Import Bootstrap framework for CSS styling -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <?php
        // Embeded PHP for working with the database
        // Connect to MySQL instance
        $conn = new mysqli($hostname, $username, $password, $database);
        
        // Verify that connection to instance was successful
        if ($conn->connect_error) {
            die("A Fatal Error Occurred");
        }

        // Inserting a college into the database
        if (!empty($_POST['CollegeName']) && 
            !empty($_POST['Building'])) {
                // Set variables
                $CollegeName = get_post($conn, 'CollegeName');
                $Building = get_post($conn, 'Building');

                // Write and execute query
                $sql = "INSERT INTO COLLEGE (CollegeName, Building) VALUES ('$CollegeName', '$Building')";
                $result = $conn->query($sql);
                
                // Check if insert was successful
                if (!$result) {
                    echo "Uh oh. INSERT transaction failed!";
                } else {
                    echo "<div class='alert alert-success alert-dismissible'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>Success!</strong> Insertion succeeded.</div>";
                }
            }

        // Insert a student into the database
        if (!empty($_POST['Name']) &&
            !empty($_POST['Email']) &&
            !empty($_POST['College'])) {
                // Set student variables
                $Name = get_post($conn, 'Name');
                $Email = get_post($conn, 'Email');
                $College = get_post($conn, 'College');

                // Write and execute query
                $sql = "INSERT INTO STUDENT (Name, Email, College) VALUES ('$Name', '$Email', '$College')";
                $result = $conn->query($sql);

                // Check if insert was successful
                if (!$result) {
                    echo "Uh oh. INSERT transaction failed!";
                } else {
                    echo "<div class='alert alert-success alert-dismissible'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>Success!</strong> Insertion succeeded.</div>";
                }
            }

        // Insert a course into the database
        if (!empty($_POST['CourseName']) &&
            !empty($_POST['Instructor']) &&
            !empty($_POST['College'])) {
                // Set course variables
                $CourseName = get_post($conn, 'CourseName');
                $Instructor = get_post($conn, 'Instructor');
                $College = get_post($conn, 'College');

                // Write and execute query
                $sql = "INSERT INTO COURSES (CourseName, Instructor, College) VALUES ('$CourseName', '$Instructor', '$College')";
                $result = $conn->query($sql);
                
                // Check if insert was successful
                if (!$result) {
                    echo "Uh oh. INSERT transaction failed!";
                } else {
                    echo "<div class='alert alert-success alert-dismissible'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>Success!</strong> Insertion succeeded.</div>";
                }
            }

        // Update a college in the database
        if (isset($_POST['update']) &&
            !empty($_POST['OldCollegeName']) &&
            !empty($_POST['NewCollegeName']) &&
            !empty($_POST['OldBuildingName']) &&
            !empty($_POST['NewBuildingName'])) {
                // Set variables
                $OldCollegeName = get_post($conn, 'OldCollegeName');
                $NewCollegeName = get_post($conn, 'NewCollegeName');
                $OldBuildingName = get_post($conn, 'OldBuildingName');
                $NewBuildingName = get_post($conn, 'NewBuildingName');

                // Write and execute query
                $sql = "UPDATE COLLEGE SET CollegeName='$NewCollegeName', Building='$NewBuildingName' WHERE CollegeName='$OldCollegeName' AND Building='$OldBuildingName'";
                $result = $conn->query($sql);

                // Verify that update was successful
                if (!$result) {
                    echo "Uh oh. Update transaction failed!";
                } else {
                    echo "<div class='alert alert-success alert-dismissible'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>Success!</strong> Update succeeded.</div>";
                }
            }

        // Update a student in the database
        if (isset($_POST['update']) &&
            !empty($_POST['StudentID']) &&
            !empty($_POST['NewName']) &&
            !empty($_POST['NewEmail']) &&
            !empty($_POST['NewCollege'])) {
                // Set variables
                $StudentID = get_post($conn, 'StudentID');
                $StudentIDInt = intval($StudentID);
                $NewName = get_post($conn, 'NewName');
                $NewEmail = get_post($conn, 'NewEmail');
                $NewCollege = get_post($conn, 'NewCollege');

                // Write and execute query
                $sql = "UPDATE STUDENT SET Name='$NewName', Email='$NewEmail', College='$NewCollege' WHERE StudentID=$StudentIDInt";
                $result = $conn->query($sql);

                // Verify that update was successful
                if (!$result) {
                    echo "Uh oh. Update transaction failed!";
                } else {
                    echo "<div class='alert alert-success alert-dismissible'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>Success!</strong> Update succeeded.</div>";
                }
            }

        // Update a course in the database
        if (isset($_POST['update']) &&
            !empty($_POST['CourseID']) &&
            !empty($_POST['NewCourseName']) &&
            !empty($_POST['NewInstructor']) &&
            !empty($_POST['NewCollege'])) {
                // Set variables
                $CourseID = get_post($conn, 'CourseID');
                $CourseIDInt = intval($CourseID);
                $NewCourseName = get_post($conn, 'NewCourseName');
                $NewInstructor = get_post($conn, 'NewInstructor');
                $NewCollege = get_post($conn, 'NewCollege');

                // Write and execute query
                $sql = "UPDATE COURSES SET CourseName='$NewCourseName', Instructor='$NewInstructor', College='$NewCollege' WHERE CourseID=$CourseIDInt";
                $result = $conn->query($sql);

                // Verify that update was successful
                if (!$result) {
                    echo "Uh oh. Update transaction failed!";
                } else {
                    echo "<div class='alert alert-success alert-dismissible'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>Success!</strong> Update succeeded.</div>";
                }
            }

        // Delete a college from the database
        if (isset($_POST['delete']) && isset($_POST['CollegeName'])) {
            // Set variable
            $CollegeName = get_post($conn, 'CollegeName');

            // Write and execute query
            $sql = "DELETE FROM COLLEGE WHERE CollegeName='$CollegeName'";
            $result = $conn->query($sql);

            // Check if deletion was successful
            if (!$result) {
                echo "Uh oh. DELETE transaction failed!";
            } else {
                echo "<div class='alert alert-success alert-dismissible'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>Success!</strong> Deletion succeeded.</div>";
            }
        }

        // Delete a student from the database
        if (isset($_POST['delete']) && isset($_POST['StudentID'])) {
            // Set variable
            $StudentID = get_post($conn, 'StudentID');
            $StudentIDInt = intval($StudentID);

            // Write and execute query
            $sql = "DELETE FROM STUDENT WHERE StudentID=$StudentIDInt";
            $result = $conn->query($sql);

            // Check if deletion was successful
            if (!$result) {
                echo "Uh oh. DELETE transaction failed!";
            } else {
                echo "<div class='alert alert-success alert-dismissible'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>Success!</strong> Deletion succeeded.</div>";
            }
        }

        if (isset($_POST['delete']) && isset($_POST['CourseID'])) {
            $CourseID = get_post($conn, 'CourseID');
            $CourseIDInt = intval($CourseID);

            $sql = "DELETE FROM COURSES WHERE CourseID=$CourseIDInt";
            $result = $conn->query($sql);

            // Check if deletion was successful
            if (!$result) {
                echo "Uh oh. DELETE transaction failed!";
            } else {
                echo "<div class='alert alert-success alert-dismissible'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>Success!</strong> Deletion succeeded.</div>";
            }
        }

        // Close the connection to the database
        $conn->close();

        // Define function to help format MySQL query inputs
        function get_post($conn, $var) {
            return $conn->real_escape_string($_POST[$var]);
        }
    ?>

    <!-- Define layout -->
    <div class="container-fluid">
        <!-- Row to display the tables in database -->
        <div class="row">
            <div class="col-sm-4">
                <div class="container p-3 my-3 border shadow-sm">
                    <!-- College table -->
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>College Name</th>
                                <th>Building</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                // Connect to the database
                                $conn = new mysqli($hostname, $username, $password, $database);

                                // Verify that connection to instance was successful
                                if ($conn->connect_error) {
                                    die("A Fatal Error Occurred");
                                }

                                // Write and execute SELECT query
                                $sql = "SELECT CollegeName, Building FROM COLLEGE";
                                $result = $conn->query($sql);

                                // Run through the results in the table
                                if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {
                                        echo "<tr>";
                                        echo "<td>" . $row["CollegeName"] . "</td>";
                                        echo "<td>" . $row["Building"] . "</td>";
                                        echo "</tr>";
                                    }
                                }

                                // Close connection once done pulling data
                                $conn->close()
                            ?>
                        </tbody>
                    </table>
                </div>                
            </div>

            <div class="col-sm-4">
                <div class="container p-3 my-3 border shadow-sm">
                    <!-- Student table -->
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Student ID #</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>College</th>
                            </tr>
                        </thead>
                        <tbody>
                                <?php 
                                    // Connect to the database
                                    $conn = new mysqli($hostname, $username, $password, $database);

                                    // Verify that connection to instance was successful
                                    if ($conn->connect_error) {
                                        die("A Fatal Error Occurred");
                                    }

                                    // Write and execute SELECT query
                                    $sql = "SELECT StudentID, Name, Email, College FROM STUDENT";
                                    $result = $conn->query($sql);

                                    // Run through the results in the table
                                    if ($result->num_rows > 0) {
                                        while($row = $result->fetch_assoc()) {
                                            echo "<tr>";
                                            echo "<td>" . $row["StudentID"] . "</td>";
                                            echo "<td>" . $row["Name"] . "</td>";
                                            echo "<td>" . $row["Email"] . "</td>";
                                            echo "<td>" . $row["College"] . "</td>";
                                            echo "</tr>";
                                        }
                                    }

                                    // Close connection once done pulling data
                                    $conn->close()
                                ?>
                            </tbody>
                    </table>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="container p-3 my-3 border shadow-sm">
                    <!-- Course table -->
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Course ID #</th>
                                <th>Course Name</th>
                                <th>Instructor</th>
                                <th>College</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                // Connect to the database
                                $conn = new mysqli($hostname, $username, $password, $database);

                                // Verify that connection to instance was successful
                                if ($conn->connect_error) {
                                    die("A Fatal Error Occurred");
                                }

                                // Write and execute SELECT query
                                $sql = "SELECT CourseID, CourseName, Instructor, College FROM COURSES";
                                $result = $conn->query($sql);

                                // Run through the results in the table
                                if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {
                                        echo "<tr>";
                                        echo "<td>" . $row["CourseID"] . "</td>";
                                        echo "<td>" . $row["CourseName"] . "</td>";
                                        echo "<td>" . $row["Instructor"] . "</td>";
                                        echo "<td>" . $row["College"] . "</td>";
                                        echo "</tr>";
                                    }
                                }

                                // Close connection once done pulling data
                                $conn->close()
                            ?>
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- College table column -->
            <div class="col-sm-4">
                <div class="container p-3 my-3 border shadow-sm">
                    <!-- Add new college -->
                    <form action="lab9.php" method="post">
                        <div class="form-group">
                            <label for="new-college">New College's Name:</label>
                            <input type="text" class="form-control" placeholder="Enter new college's name" id="new-college" name="CollegeName">
                        </div>
                        <div class="form-group">
                            <label for="new-building">Building:</label>
                            <input type="text" class="form-control" placeholder="Enter building name" id="new-building" name="Building">
                        </div>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </form>
                </div>

                <div class="container p-3 my-3 border shadow-sm">
                    <!-- Update college currently stored in the database -->
                    <form action="lab9.php" method="post">
                        <div class="form-group">
                            <label for="old-college-name">College's Old Name:</label>
                            <input type="text" class="form-control" placeholder="Enter college's old name" id="old-college-name" name="OldCollegeName">
                        </div>
                        <div class="form-group">
                            <label for="old-building-name">College's Old Building:</label>
                            <input type="text" class="form-control" placeholder="Enter college's old building name" id="old-building-name" name="OldBuildingName">
                        </div>
                        <div class="form-group">
                            <label for="new-college-name">College's New Name:</label>
                            <input type="text" class="form-control" placeholder="Enter college's new name" id="new-college-name" name="NewCollegeName">
                        </div>
                        <div class="form-group">
                            <label for="new-building-name">College's New Building:</label>
                            <input type="text" class="form-control" placeholder="Enter college's new building name" id="new-building-name" name="NewBuildingName">
                        </div>
                        <input type="hidden" name="update" value="yes">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>

                <div class="container p-3 my-3 border shadow-sm">
                    <!-- Delete a college stored in the database -->
                    <form action="lab9.php" method="post">
                        <div class="form-group">
                            <label for="delete-college-name">College's Name:</label>
                            <input type="text" class="form-control" placeholder="Enter college's name" id="delete-college-name" name="CollegeName">
                        </div>
                        <input type="hidden" name="delete" value="yes">
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
    
            <!-- Student table column -->
            <div class="col-sm-4">
                <div class="container p-3 my-3 border shadow-sm">
                    <form action="lab9.php" method="post">
                        <div class="form-group">
                            <label for="student-name">Student's Name:</label>
                            <input type="text" class="form-control" placeholder="Enter student's name (First & Last)" id="student-name" name="Name">
                        </div>
                        <div class="form-group">
                            <label for="student-email">Student's Email:</label>
                            <input type="text" class="form-control" placeholder="Enter student's email" id="student-email" name="Email">
                        </div>
                        <div class="form-group">
                            <label for="student-college">Student's College (select one):</label>
                            <select name="College" id="student-college" class="custom-select">
                                <option selected>-</option>
                                <?php 
                                    // Pull colleges from COLLEGE table
                                    $conn = new mysqli($hostname, $username, $password, $database);

                                    // Verify that connection to instance was successful
                                    if ($conn->connect_error) {
                                        die("A Fatal Error Occurred");
                                    }

                                    // Write and execute SELECT query
                                    $sql = "SELECT CollegeName FROM COLLEGE";
                                    $result = $conn->query($sql);

                                    // Run through the results in the table
                                    if ($result->num_rows > 0) {
                                        while($row = $result->fetch_assoc()) {
                                            $College = $row["CollegeName"];
                                            echo "<option value='$College'>" . $College . "</option>";
                                        }
                                    }

                                    // Close connection once done pulling data
                                    $conn->close()
                                ?>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </form>
                </div>

                <div class="container p-3 my-3 border shadow-sm">
                    <form action="lab9.php" method="post">
                        <div class="form-group">
                            <label for="update-student-id">Student's ID #:</label>
                            <input type="text" class="form-control" placeholder="Enter student's ID #" id="update-student-id" name="StudentID">
                        </div>
                        <div class="form-group">
                            <label for="update-student-name">Student's New Name:</label>
                            <input type="text" class="form-control" placeholder="Enter student's new name" id="update-student-name" name="NewName">
                        </div>
                        <div class="form-group">
                            <label for="update-student-email">Student's New Email:</label>
                            <input type="text" class="form-control" placeholder="Enter student's new email" id="update-student-email" name="NewEmail">
                        </div>
                        <div class="form-group">
                            <label for="update-student-college">Student's New College (select one):</label>
                            <select name="NewCollege" id="update-student-college" class="custom-select">
                                <option selected>-</option>
                                <?php 
                                    // Pull colleges from COLLEGE table
                                    $conn = new mysqli($hostname, $username, $password, $database);

                                    // Verify that connection to instance was successful
                                    if ($conn->connect_error) {
                                        die("A Fatal Error Occurred");
                                    }

                                    // Write and execute SELECT query
                                    $sql = "SELECT CollegeName FROM COLLEGE";
                                    $result = $conn->query($sql);

                                    // Run through the results in the table
                                    if ($result->num_rows > 0) {
                                        while($row = $result->fetch_assoc()) {
                                            $College = $row["CollegeName"];
                                            echo "<option value='$College'>" . $College . "</option>";
                                        }
                                    }

                                    // Close connection once done pulling data
                                    $conn->close()
                                ?>
                            </select>
                        </div>
                        <input type="hidden" name="update" value="yes">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div> 

                <div class="container p-3 my-3 border shadow-sm">
                    <form action="lab9.php" method="post">
                        <div class="form-group">
                            <label for="delete-student-id">Student's ID #:</label>
                            <input type="text" class="form-control" placeholder="Enter student's ID #" id="delete-student-id" name="StudentID">
                        </div>
                        <input type="hidden" name="delete" value="yes">
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
            
            <!-- Course table column -->
            <div class="col-sm-4">
                <div class="container p-3 my-3 border shadow-sm">
                    <!-- Add new course to table -->
                    <form action="lab9.php" method="post">
                        <div class="form-group">
                            <label for="course-name">Course Name:</label>
                            <input type="text" class="form-control" placeholder="Enter Course Name" id="course-name" name="CourseName">
                        </div>
                        <div class="form-group">
                            <label for="instructor-name">Instructor:</label>
                            <input type="text" class="form-control" placeholder="Enter instructor's name" id="instructor-name" name="Instructor">
                        </div>
                        <div class="form-group">
                            <label for="course-college">College Offering course (select one):</label>
                            <select name="College" id="course-college" class="custom-select">
                                <option selected>-</option>
                                <?php 
                                    // Pull colleges from COLLEGE table
                                    $conn = new mysqli($hostname, $username, $password, $database);

                                    // Verify that connection to instance was successful
                                    if ($conn->connect_error) {
                                        die("A Fatal Error Occurred");
                                    }

                                    // Write and execute SELECT query
                                    $sql = "SELECT CollegeName FROM COLLEGE";
                                    $result = $conn->query($sql);

                                    // Run through the results in the table
                                    if ($result->num_rows > 0) {
                                        while($row = $result->fetch_assoc()) {
                                            $College = $row["CollegeName"];
                                            echo "<option value='$College'>" . $College . "</option>";
                                        }
                                    }

                                    // Close connection once done pulling data
                                    $conn->close()
                                ?>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </form>
                </div>
                <div class="container p-3 my-3 border shadow-sm">
                    <form action="lab9.php" method="post">
                        <div class="form-group">
                            <label for="update-course-id">Course's ID #:</label>
                            <input type="text" class="form-control" placeholder="Enter Course's ID #" id="update-course-id" name="CourseID">
                        </div>
                        <div class="form-group">
                            <label for="update-course-name">Course's New Name:</label>
                            <input type="text" class="form-control" placeholder="Enter course's new name" id="update-student-name" name="NewCourseName">
                        </div>
                        <div class="form-group">
                            <label for="update-instructor">Course's New Instructor:</label>
                            <input type="text" class="form-control" placeholder="Enter course's new instructor" id="update-instructor" name="NewInstructor">
                        </div>
                        <div class="form-group">
                            <label for="update-course-college">Course's New College (select one):</label>
                            <select name="NewCollege" id="update-course-college" class="custom-select">
                                <option selected>-</option>
                                <?php 
                                    // Pull colleges from COLLEGE table
                                    $conn = new mysqli($hostname, $username, $password, $database);

                                    // Verify that connection to instance was successful
                                    if ($conn->connect_error) {
                                        die("A Fatal Error Occurred");
                                    }

                                    // Write and execute SELECT query
                                    $sql = "SELECT CollegeName FROM COLLEGE";
                                    $result = $conn->query($sql);

                                    // Run through the results in the table
                                    if ($result->num_rows > 0) {
                                        while($row = $result->fetch_assoc()) {
                                            $College = $row["CollegeName"];
                                            echo "<option value='$College'>" . $College . "</option>";
                                        }
                                    }

                                    // Close connection once done pulling data
                                    $conn->close()
                                ?>
                            </select>
                        </div>
                        <input type="hidden" name="update" value="yes">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
                    
                <div class="container p-3 my-3 border shadow-sm">
                    <form action="lab9.php" method="post">
                        <div class="form-group">
                            <label for="delete-course-id">Course's ID #:</label>
                            <input type="text" class="form-control" placeholder="Enter course's ID #" id="delete-course-id" name="CourseID">
                        </div>
                        <input type="hidden" name="delete" value="yes">
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>