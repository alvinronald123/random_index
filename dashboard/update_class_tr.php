<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
// Rest of your PHP code...
?>
<?php include '../__con/conn.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
    <style>
    .subject_title {
        margin: 20px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    .subject_heads {
        margin: 10px auto;
        padding: 10px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 10px;

    }

    table th {
        border-bottom: 1px solid #ddd;
    }

    th,
    td {
        padding: 5px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #f2f2f2;
    }

    .search-container {
        text-align: right;
        margin-top: 2px;
    }

    .search-container input[type="text"] {
        padding: 8px;
        border-radius: 4px;
        border: none;
        margin-right: 5px;
        outline: none;
        width: 200px;
    }

    .search-container button {
        padding: 8px 16px;
        background-color: #4caf50;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        margin-right: 20px;
    }

    .dropdown-container {
        display: flex;
        justify-content: flex-end;
        margin-bottom: 20px;
        margin-left: 10px;
    }

    .dropdown-container select {
        padding: 8px;
        border-radius: 4px;
        border: none;
        margin-right: 40px;
    }

    .tr_select {
        padding: 5px;
        border-radius: 4px;
        border: none;
        margin-right: 40px;
        margin-left: 5px;
        background-color: antiquewhite;
    }

    .btns {
        display: flex;
        justify-content: space-around;
        margin-top: 20px;
    }


    .btns a {
        text-decoration: none;
        color: #333;
        background-color: #337ab7;
        padding: 10px 20px;
        border-radius: 15px;
        color: white;
        margin-left: 10px;
    }

    .btns a:hover {
        background-color: #382f2f;
    }

    .welcome h2 {
        text-align: center;
        align-items: center;
        margin-left: 50px;
        margin-right: 50px;
        background-color: #4caf50;
        padding: 10px;
    }

    .welcome h2:hover {
        background-color: #333;
        color: #ddd;
    }

    .comment-form {
        display: flex;
        justify-content: space-between;
    }

    .form-column {
        flex: 1;
        padding: 10px;
    }

    .form-group {
        margin-bottom: 15px;
    }

    label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }

    input[type="text"],
    input[type="number"],
    input[type="email"] {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        outline: none;
    }

    input[type="submit"] {

        background-color: #337ab7;
        color: #fff;
        padding: 10px 15px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-top: 10px;
    }

    input[type="submit"]:hover {

        background-color: #0c1e2e;
    }

    .textarea-group {
        width: 100%;
        margin-bottom: 15px;
    }

    label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }

    textarea {
        width: 90%;
        height: 150px;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        margin-bottom: 10px;
    }

    .details-container h2 {
        color: #337ab7;
        text-align: center;
        align-items: center;
    }

    .btns {
        display: flex;
        justify-content: space-around;
        margin-top: 20px;
    }

    .btns a {
        text-decoration: none;
        color: #333;
        background-color: #337ab7;
        padding: 10px 20px;
        border-radius: 15px;
        color: white;
    }

    .btns a:hover {
        background-color: #382f2f;
    }

    .success {
        color: green;
    }

    .error {
        color: red;
    }
    </style>
</head>

<body>

    <?php
    // // we get the id
    // $id = $_GET['id'];

    // // get the data from the database
    // $sql = "SELECT * FROM add_class_tr WHERE id = $id ";

    // // connect to the database
    // $res = mysqli_query($conn, $sql);

    // //check if the query is working well
    // if ($res == True){
    //     //check the available data
    //     $count = mysqli_num_rows($res);

    //     if ($count == 1){

    //         //get the values in the data
    //         $rows = mysqli_fetch_assoc($res);

    //         // data values in the system
    //         $surname = $rows['surname'];
    //         $other_name = $rows['other_name'];
    //         $email = $rows['email'];
    //         $date_of_birth = $rows['dob'];
    //         $tr_number = $rows['tr_number'];
    //         $class_tr_code = $rows['class_tr_code'];
    //         $age = $rows['age'];
    //         $gender = $rows['gender'];
    //         $year = $rows['year'];
    //     }
    //     else {
    //         //redirect
    //         echo "<script>window.location.href = '" . SITEURL . "class_tr.php';</script>";
    //     }
    // }

    ?>
    <div class="main">
        <?php include 'sidebar.php';?>
        <div class="main-two">
            <div class="theh">
                <h2 style="font-weight:200; margin:0px;">School System Test 2024 </h2>
                <div class="clear-fix">
                    <ul>
                        <li class="pull-left"> <a href="">Admin</a></li>
                        <li class="pull-right"><a href=""> Logout</a> </li>
                    </ul>
                    <div class="clear">
                    </div>
                </div>
            </div>
            <br>
            <hr style="margin-left:15px; align-items:center; justify-content:center;">
            <br>
            <h1 class="admin-h1">Update Class Teacher's Details . . </h1>
            <div class="manage-class">
                <div class="class-head">
                    <a href="class_tr.php">Class Teacher's List</a>
                    <a href="">Add Class Teacher</a>
                </div>

                <div class="subject_title">
                    <hr>
                    <br>
                    <?php
                    if(isset($_SESSION['update']))
                    {
                        echo $_SESSION['update'];
                        unset($_SESSION['update']);
                    }
                    if(isset($_SESSION['ids']))
                    {
                        echo $_SESSION['ids'];
                        unset($_SESSION['ids']);
                    }
                    ?>
                    <br>
                    <hr>
                    <br>
                    <?php


// Check if id is set or not
if (isset($_GET['id'])) {
    // Get id and all other details
    $id = $_GET['id'];
    // Query to get other details
    $sql = "SELECT * FROM add_class_tr WHERE id = '{$id}' ";

    // Run query
    $res = mysqli_query($conn, $sql);
    // Count the rows to check id validation
    $count = mysqli_num_rows($res);
    if ($count == 1) {
        // Get all the data
        $row = mysqli_fetch_assoc($res);
        $id = $row['id'];
        $surname = $row['surname'];
        $other_name = $row['other_name'];
        $email = $row['email'];
        $date_of_birth = $row['dob'];
        $tr_number = $row['tr_number'];
        $class_tr_code = $row['class_tr_code'];
        $age = $row['age'];
        $gender = $row['gender'];
        $year = $row['year'];
    } else {
        // Redirect with an error message
        $_SESSION['ids'] = " <div class='error'> Something is Wrong With The ID </div> ";
        echo "<script> window.location.href = '" . SITEURL . "update_class_tr.php'; </script>";
        exit();
    }
} else {
    // Redirect with an error message
    $_SESSION['ids'] = " <div class='error'> ID is not set in the URL </div> ";
    //echo "<script> window.location.href = '" . SITEURL . "update_class_tr.php'; </script>";
    exit();
}
?>

                    <form action="" method="POST" class="comment-form">

                        <div class="form-column">

                            <div class="form-group">

                                <label>Surname:</label>
                                <input type="text" value="<?php echo $surname; ?>" name="surname" required>
                            </div>
                            <div class="form-group">
                                <label>Email:</label>
                                <input type="email" value="<?php echo $email; ?>" name="email" required>
                            </div>
                            <div class="form-group">
                                <label>Teacher's Number:</label>
                                <input type="text" value="<?php echo $tr_number; ?>" name="tr_number" required>
                            </div>
                            <div class="form-group">
                                <label>Class Tr Code:</label>
                                <input type="text" value="<?php echo $class_tr_code; ?>" name="class_tr_code" required>
                            </div>
                            <div class="form-group">
                                <label>Age:</label>
                                <input type="number" value="<?php echo $age; ?>" name="age" required>
                            </div>


                        </div>
                        <div class="form-column">
                            <div class="form-group">
                                <label>Other Names:</label>
                                <input type="text" value="<?php echo $other_name; ?>" name="other_name" required>
                            </div>


                            <div class="form-group">
                                <label>Date of Birth:</label>
                                <input type="text" value="<?php echo $date_of_birth; ?>" name="date_of_birth" required>
                            </div>
                            <div class="form-group">
                                <label>Year:</label>
                                <input type="number" value="<?php echo $year; ?>" name="year" required>
                            </div>

                            <div class="form-group">
                                <label>Gender:</label>
                                <input type="text" value="<?php echo $gender; ?>" name="gender" required>
                                <input type="hidden" name="id" value="<?php echo $id?>">
                            </div>
                            <div class="form-group">
                                <input style="margin-left:20px; margin-top:20px;width:300px;" type="submit"
                                    name="submit" value="Update" class="btn">

                                <!-- <button style="margin-left:20px; margin-top:20px;width:300px; " type="submit"
                                    name="submit" class="btn">
                                    <span class="btnText" style="font-size:25px;">
                                        SUBMIT
                                    </span>

                                </button> -->
                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
<?php
// now we are working on the updates

if(isset($_POST['submit']))
{
    // now get all the values
     // data values in the system
     $id = $_POST['id'];
     $surname = $_POST['surname'];
     $other_name = $_POST['other_name'];
     $email = $_POST['email'];
     $date_of_birth = $_POST['date_of_birth'];
     $tr_number = $_POST['tr_number'];
     $class_tr_code = $_POST['class_tr_code'];
     $age = $_POST['age'];
     $gender = $_POST['gender'];
     $year = $_POST['year'];

     // now make the sql query to update the details
     $sql = "UPDATE add_class_tr SET
     surname = '$surname',
     other_name = '$other_name',
     email = '$email',
     date_of_birth = '$date_of_birth',
     tr_number = '$tr_number',
     class_tr_code = '$class_tr_code',
     age = '$age',
     gender = '$gender',
     year = '$year'
     WHERE id = '$id'
      ";

      // run the connection
      $res = mysqli_query($conn, $sql);

      // check if $res is true
      if($res == TRUE){
        $_SESSION['update'] = " <div class='success'> The Class Teacher's Details Have Been Updated </div> ";
        // now redirect the user
        //header('Location :' .SITEURL. 'class_tr.php');
        echo "<script>window.location.href = '" . SITEURL . "class_tr.php';</script>";
      }
      else{
        $_SESSION['update'] = " <div class='error'> The Class Teacher's Details Have Not Been Updated </div> ";
        // now redirect the user
        //header('Location :' .SITEURL. 'update_class_tr.php');
        echo "<script>window.location.href = '" . SITEURL . "update_class_tr.php';</script>";
      }
}

?>

</html>