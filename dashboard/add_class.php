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
            <h1 class="admin-h1">Manage Classes</h1>
            <div class="manage-class">
                <div class="class-head">
                    <a href="class.php">Class List</a>
                    <a href="add_class.php">Add Class</a>
                </div>

                <div class="subject_title">
                    <hr>
                    <br>

                    <?php
                    if(isset($_SESSION['insert']))
                    {
                        echo $_SESSION['insert'];
                        unset($_SESSION['insert']);
                    }                
                    
                    ?>
                    <br>
                    <hr>
                    <br>
                    <form action="" method="POST" class="comment-form">

                        <div class="form-column">

                            <div class="form-group">

                                <label>Class Name</label>
                                <input type="text" name="className" required>
                            </div>
                            <div class="form-group">
                                <label>Numeric Name:</label>
                                <input type="text" name="numericName" required>
                            </div>

                        </div>
                        <div class="form-column">
                            <div class="form-group">
                                <label>Class Teacher:</label>
                                <select class="form-group"
                                    style="width: 400px; outline:none; height:33px; margin-bottom:0; border-color:#ccc;"
                                    name="class_tr">
                                    <!-- Assign a name for the dropdown -->
                                    <option style="outline: none;" value="" selected disabled>Select a Class Teacher
                                    </option>
                                    <?php
    // Your PHP code for fetching data and generating options goes here
    $sql = "SELECT * FROM add_class_tr";
    $res = mysqli_query($conn, $sql);

    // Check if the query was successful
    if ($res == TRUE) {
        $count = mysqli_num_rows($res);

        // Check if there are rows in the result set
        if ($count > 0) {
            // Loop through the result set to fetch data
            while ($row = mysqli_fetch_assoc($res)) {
                $id = $row['id'];
                $classTr1 = $row['surname'];
                $classTr2 = $row['other_name'];
                $class_tr_id = $classTr1 . ' ' . $classTr2;
                ?>
                                    <option value="<?php echo $id; ?>">
                                        <?php echo $classTr1 . ' ' . $classTr2; ?>
                                    </option>
                                    <?php
            }
        } else {
            echo "No records found";
        }

        // Free result set
        mysqli_free_result($res);
    } else {
        echo "Error in the query: " . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
    ?>
                                </select>
                            </div>



                            <div class="form-group">
                                <label>Year:</label>
                                <input type="text" name="year" required>


                            </div>


                            <div class="form-group">
                                <input type="hidden" name="class_tr_id" value="<?php echo $class_tr_id; ?>">
                                <input type="hidden" name="id" value="<?php echo $id?>">
                            </div>
                            <div class="form-group">
                                <input style="margin-left:20px; margin-top:20px;width:300px;" type="submit"
                                    name="Submit" value="Submit" class="btn">

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
if (isset($_POST['Submit'])) {
    $className = $_POST['className'];
    $numericName = $_POST['numericName'];
    $class_tr_id = $_POST['class_tr']; // Assuming 'class_tr' is the name attribute of the select element
    $year = $_POST['year'];

    $sql = "INSERT INTO class (className, numericName, class_tr, year) 
            VALUES ('$className', '$numericName', '$class_tr_id', '$year')";

    $res = mysqli_query($conn, $sql);

    if ($res === false) {
        die("Query execution failed: " . mysqli_error($conn));
    }

    if ($res == true) {
        $_SESSION['insert'] = " <div class='title success'> Class is Inserted Into The Database </div> ";
        echo "<script>window.location.href = '" . SITEURL . "class.php';</script>";
    } else {
        $_SESSION['insert'] = " <div class='title error'> Data Failed To Be inserted </div> ";
        echo "<script>window.location.href = '" . SITEURL . "add_class.php';</script>";
    }
}
?>



</html>