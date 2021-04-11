<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group 1 - Lab 10 and 11 Execution</title>
    <link href="favicon.ico" rel="icon" type="image/x-icon">

    <!-- Import Bootstrap framework for CSS styling -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- PHP imports -->
    <?php require "control\\crud.php"?>
    <?php require "control\\tablegen.php"?>
    <?php require "control\\dropdowngen.php"?>
    <?php require "control\\sanitize.php"?>

</head>
<body>
    <div class="container-fluid">
        <!-- Alert row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="d-flex justify-content-center">
                    <div class="container">
                        <?php
                            if (!empty($_POST['student-id']) &&
                                !empty($_POST['first-name']) &&
                                !empty($_POST['last-name']) &&
                                !empty($_POST['email']) &&
                                !empty($_POST['student-college']) &&
                                !empty($_POST['student-year']) &&
                                !empty($_POST['action-to-perform'])) {
                                    // Log into database
                                    $login = new Login();
                                    $conn = $login->create_conn();

                                    if ($conn->connect_error) {
                                        die("Failed to connect to database!");
                                    }

                                    // Check values to prevent injection attack
                                    $id = sanitizemysql($conn, $_POST['student-id']);
                                    $fname = sanitizemysql($conn, $_POST['first-name']);
                                    $lname = sanitizemysql($conn, $_POST['last-name']);
                                    $email = sanitizemysql($conn, $_POST['email']);
                                    $dept = sanitizemysql($conn, $_POST['student-college']);
                                    $acad = sanitizemysql($conn, $_POST['student-year']);
                                    $action = sanitizemysql($conn, $_POST['action-to-perform']);

                                    // Do data checking
                                    $executequery = True;
                                    if (!strpos($email, "@psu.edu")) {
                                        echo "<div class='alert alert-danger alert-dismissible'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>Error encountered!</strong> Email needs to be a PSU email (address ends with @psu.edu).</div>";
                                        $executequery = False;
                                    }
                                    
                                    if ($dept == "-") {
                                        echo "<div class='alert alert-danger alert-dismissible'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>Error encountered!</strong> Need to pick a college from the dropdown.</div>";
                                        $executequery = False;
                                    }
                                    
                                    if ($acad == "-") {
                                        echo "<div class='alert alert-danger alert-dismissible'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>Error encountered!</strong> Need to pick a year standing from the dropdown.</div>";
                                        $executequery = False;
                                    }
                                    
                                    if ($executequery) {
                                        switch ($action) {
                                            case "insert":
                                                $result = insertdata(intval($id), $fname, $lname, $email, $dept, $acad);
                                                if ($result) {
                                                    echo "<div class='alert alert-success alert-dismissible'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>Success!</strong> Insert operation suceeded!</div>";
                                                } else {
                                                    echo "<div class='alert alert-danger alert-dismissible'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>Insert operation failed!</strong> Please check that your inputs for valid.</div>";
                                                }
                                                break;

                                            case "update":
                                                $result = updatedata(intval($id), $fname, $lname, $email, $dept, $acad);
                                                if ($result) {
                                                    echo "<div class='alert alert-success alert-dismissible'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>Success!</strong> Update operation suceeded!</div>";
                                                } else {
                                                    echo "<div class='alert alert-danger alert-dismissible'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>Update operation failed!</strong> Please check that your inputs for valid.</div>";
                                                }
                                                break;

                                            case "delete":
                                                $result = deletedata(intval($id), $fname, $lname, $email, $dept, $acad);
                                                if ($result) {
                                                    echo "<div class='alert alert-success alert-dismissible'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>Success!</strong> Delete operation suceeded!</div>";
                                                } else {
                                                    echo "<div class='alert alert-danger alert-dismissible'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>Delete operation failed!</strong> Please check that your inputs are valid.</div>";
                                                }
                                                break;

                                            default:
                                                echo "<div class='alert alert-info alert-dismissible'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>Congratulations!</strong> You've reached an unreachable case. We don't know how you did that but please don't do it again lol.</div>";
                                                break;
                                        }
                                    }
                                }
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Table row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="d-flex justify-content-center">
                    <div class="container p-3 my-3 border shadow-sm">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Student ID #</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Department</th>
                                    <th>Academic Year</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php tablegen(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- CRUD Operations row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="d-flex justify-content-center">
                    <div class="container p-3 my-3 border shadow-sm">
                        <form action="index.php" method="post">
                            <div class="form-group">
                                <label for="student-id">Student ID #:</label>
                                <input type="text" class="form-control" placeholder="Enter student's ID" id="student-id" name="student-id" required="true">
                            </div>
                            <div class="form-group">
                                <label for="student-firstname">Student First Name:</label>
                                <input type="text" class="form-control" placeholder="Enter student's first name" id="first-name" name="first-name" required="true">
                            </div>
                            <div class="form-group">
                                <label for="student-lastname">Student Last Name:</label>
                                <input type="text" class="form-control" placeholder="Enter student's last name" id="last-name" name="last-name" required="true">
                            </div>
                            <div class="form-group">
                                <label for="student-email">Student Email:</label>
                                <input type="text" class="form-control" placeholder="Enter student's PSU email" id="student-email" name="email" required="true">
                            </div>
                            
                            <!-- Dropdowns -->
                            <div class="form-group">
                                <label for="student-college">Student's College (please select one):</label>
                                <select name="student-college" id="student-college" class="custom-select" required="true">
                                    <option selected>-</option>
                                    <?php departmentdropgen(); ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="student-year">Student's Year (please select one):</label>
                                <select name="student-year" id="student-year" class="custom-select" required="true">
                                    <option selected>-</option>
                                    <?php yeardropgen(); ?>
                                </select>
                            </div>
                            
                            <!-- Action to perform: Insert, Update, and Delete -->
                            <div class="form-group">
                                <label for="action-to-perform">Action to perform on table:</label>
                                <select name="action-to-perform" id="action-to-perform" class="custom-select" required="true">
                                    <option value="insert" selected>INSERT</option>
                                    <option value="update">UPDATE</option>
                                    <option value="delete">DELETE</option>
                                </select>
                            </div>

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>    
    </div>
</body>
</html>
