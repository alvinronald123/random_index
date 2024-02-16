<?php
//session_start();
error_reporting(E_ALL);
ini_set('display_errors', true);
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

    .rotate-right {
        transform: rotate(-90deg);
        /* Apply a 90-degree rotation */
    }

    .dropdown {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        padding: 5px;
        z-index: 1;
    }

    .dropdown.show {
        display: block;
        /* Change from 'none' to 'block' when 'show' class is present */
    }

    .dropdown a {
        display: block;
        padding: 10px;
        text-decoration: none;
        color: #333;
    }

    .actions:hover {
        color: #4caf50;
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


            <?php
                    if(isset($_SESSION['delete']))
                    {
                        echo $_SESSION['delete'];
                        unset($_SESSION['delete']);
                    }           
            
                    if(isset($_SESSION['insert']))
                    {
                        echo $_SESSION['insert'];
                        unset($_SESSION['insert']);
                    }                
                    
                    if (isset($_SESSION['update']))
                    {
                        echo $_SESSION['update'];
                        unset($_SESSION['update']);
                    }
                    ?>
            <hr style="margin-left:15px; align-items:center; justify-content:center;">

            <h1 class="admin-h1">Manage Class Teachers</h1>
            <div class="manage-class">
                <div class="class-head">
                    <a href="">Class Teacher's List</a>
                    <a href="add_class_tr.php">Add Class Teacher</a>
                </div>
                <div class="arrow-down">
                    <a href="#">
                        <span id="selectedValue">0</span>
                    </a>
                    <a href="#" onclick="rotateArrow()">
                        <span>
                            <img id="arrowIcon" style="width: 25px; height: 15px; margin: top 10px;"
                                src="svg/arrow-down-short-wide.svg" alt="">
                        </span>
                    </a>
                    <div id="myDropdown" class="dropdown">
                        <?php
                          $num = 5;
                            if(isset($_POST['num'])) $num = $_POST['num'];
                          
                        ?>
                        <form action="<?=$_SERVER['REQUEST_URI']?>" method="post"
                            style="display:flex;flex-direction:column;">
                            <button value="5" name="num">5</button>
                            <button value="10" name="num">10</button>
                            <button value="20" name="num">20</button>
                            <button value="30" name="num">30</button>
                            <button value="50" name="num">50</button>
                        </form>
                    </div>
                    <a href="" style="border:none;">
                        <span>per page</span>
                    </a>
                    <form action="" method="GET">
                        <div class="search">
                            <a style="border:none;">Search:</a>
                            <input class="search-input" name="search" placeholder="Search" type="text">
                            <input class="btn" type="submit">
                        </div>
                    </form>


                    <div class="clear"></div>
                    <!-- <div class="table" style="
                    white-space: nowrap; 
                    overflow: hidden;
                  
                    text-overflow: ellipsis;">
                        <table>
                            <div class="table-th" style="padding:5px;">
                                <a
                                    style="margin-left:20px; border-left:1px solid black; border:none; margin-top:5px; margin-bottom:5px;">
                                    <span>#</span>
                                    <a href="" style=" border:none;">
                                        <img style="width:30px; height: 20px;  border-right:1px solid black; margin: top 10px; "
                                            src="svg/arrow-down-short-wide.svg" alt="">
                                    </a>
                                </a>
                                <a style=" border:none;">
                                    <a class="my-th" style=" border:none; margin-left:40px;"> Class Name</a>
                                </a>
                                <a style=" border:none;">
                                    <a class="my-th" style=" border:none; margin-left:50px;">
                                        Numeric Number
                                    </a>
                                </a>
                                <a style=" border:none;">
                                    <a class="my-th" href="" style="border:none; margin-left:50px;">
                                        Class Teacher
                                    </a>
                                </a>
                                <a style=" border:none;">
                                    <a class="my-th" style=" border:none; margin-left:50px;">
                                        Options
                                    </a>
                                </a>

                            </div>
                            <div style="width:800px;overflow-x: scroll; justify-content:space-between;">
                                <div class="table-th" style="padding:5px;  white-space: nowrap; 
                             text-overflow: ellipsis; overflow: hidden; max-width:800px;">
                                    <a style="margin-left:20px;  border:none;">
                                        <span>1</span>
                                        <a href="" style=" border:none;">
                                            <img style="width:30px; height: 20px; border-right:1px solid black; margin: top 10px; "
                                                src="svg/arrow-down-short-wide.svg" alt="">
                                        </a>
                                    </a>
                                    <a style=" border:none;">
                                        <a class="my-th" style=" border:none; margin-left:40px;">Form One</a>
                                    </a>
                                    <a style=" border:none;">
                                        <a class="my-th" style=" border:none; margin-left:40px;">
                                            F:1
                                        </a>
                                    </a>
                                    <a style=" border:none;">
                                        <a class="my-th" href="" style="border:none;  
                                         white-space: nowrap;
                                         white-space: normal;
                                            overflow: visible;
                                            overflow-wrap: break-word;margin-left:90px; ">
                                            alvinronal
                                        </a>
                                    </a>
                                    <a style=" border:none;">
                                        <a class="my-th" style=" border:none;">
                                            <button class="btn">
                                                <select
                                                    style="border: none; outline: none; width:70px; height:15px;  background-color: #21a9e1;">
                                                    <option style="border: none;" value="">Action</option>
                                                    <option style="border: none;" value="">View</option>
                                                    <option style="border: none;" value="">Edit</option>
                                                    <option style="border: none;" value="">Delete</option>
                                                </select>
                                            </button>
                                        </a>
                                    </a>

                                </div>
                            </div>
                            <div class="table-th" style="padding:5px; ">
                                <div class=".detail1" style="width: 200px;  display:flex;">
                                    <p>Showing 1 to 1 of 1 entries</p>
                                </div>

                                <div class="detail2" style="margin-right: 20px; display:flex; margin-top:5px;">
                                    <a> <img style="width:20px; height: 10px; margin: top 10px; "
                                            src="svg/less-than.svg" alt=""> </a>
                                    <a>
                                        <p>1</p>
                                    </a>
                                    <a> <img style="width:20px; height: 10px; margin: top 10px; "
                                            src="svg/greater-than.svg" alt=""> </a>
                                </div>

                            </div>
                            <div class="clear"></div>
                            <hr>
                        </table>
                    </div> -->
                    <table class="subject_heads">
                        <thead>
                            <tr>
                                <!-- <th>
                                    <span style="font-weight:bold; font-size:20px;">#</span>
                                    <img style="width:30px; height: 17px;  margin: top 10px; "
                                        src="svg/arrow-down-short-wide.svg" alt="">

                                </th> -->
                                <th>Id No_</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Number</th>
                                <th>Gender</th>
                                <th>Age</th>
                                <th>Class Tr Code</th>
                                <th>Year</th>
                                <th>Options</th>

                            </tr>
                        </thead>
                        <tbody>
                            <!-- Table rows with data -->
                            <?php
// get the data from the database
if (isset($_GET['search'])) {
    $search = mysqli_real_escape_string($conn, $_GET['search']);
    // Perform the search using a SQL query
    $sql = "SELECT * FROM add_class_tr WHERE 
            surname LIKE '%$search%' OR
            other_name LIKE '%$search%' OR
            email LIKE '%$search%' OR
            tr_number LIKE '%$search%' OR
            class_tr_code LIKE '%$search%' OR
            age LIKE '%$search%' OR
            gender LIKE '%$search%' OR
            year LIKE '%$search%'";

    $result = mysqli_query($conn, $sql);
    $sn = 1;

    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            printTableRow($sn, $row);
            $sn++;
        }
    }
} else {
  //  $sql = "SELECT * FROM add_class_tr LIMIT 5";
    $sql = "SELECT * FROM add_class_tr LIMIT $num";
    $res = mysqli_query($conn, $sql);
    $sn = 1;
    

    if ($res && mysqli_num_rows($res) > 0) {
        while ($row = mysqli_fetch_assoc($res)) {
            printTableRow($sn, $row);
            $sn++;
                        // echo $row['namne'];

        }
    }
}

function printTableRow($sn, $row)
{
    ?>
                            <tr>
                                <!-- <td>
                                    <img style="width:30px; height: 17px;  margin: top 10px; "
                                        src="svg/arrow-down-short-wide.svg" alt="">
                                </td> -->

                                <td><?php echo $sn; ?></td>
                                <td><?php echo $row['surname'] . " " . $row['other_name']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['tr_number']; ?></td>
                                <td><?php echo $row['gender']; ?></td>
                                <td><?php echo $row['age']; ?></td>
                                <td><?php echo $row['class_tr_code']; ?></td>
                                <td><?php echo $row['year']; ?></td>
                                <td>
                                    <!-- <form action="./delete/action.php" method="POST">
                                        <input type="hidden" name="id" value=""> -->

                                    <div class="btn">
                                        <!-- <select name="action"
                                                style="border: none; outline: none; width:70px; height:15px;  background-color: #21a9e1;">
                                                <option style="border: none;" value="">Action</option>
                                                <option style="border: none;" value="view">View</option>
                                                <option style="border: none;" value="edit">Edit</option>
                                                <option style="border: none;" value="delete">Delete</option>
                                            </select> -->
                                        <a class="actions"
                                            style="text-decoration: none; border-radius:10px; border:none;"
                                            href="">View</a>
                                        <a class="actions"
                                            style="text-decoration: none; border-radius:10px; border:none;"
                                            href="<?php echo SITEURL; ?>update_class_tr.php?id=<?php echo $row['id']; ?>">Edit</a>
                                        <a class="actions"
                                            style="text-decoration: none; border-radius:10px; border:none;"
                                            href="<?php echo SITEURL; ?>delete/delete_class_tr.php?id=<?php echo $row['id']; ?>">Delete</a>
                                    </div>
                                    <!-- </form> -->

                                </td>
                            </tr>
                            <?php
}
?>


                            <!-- Add more rows as needed -->
                        </tbody>

                    </table>
                    <div class="table-th" style="padding:5px; ">
                        <div class=".detail1" style="width: 200px;  display:flex;">
                            <p>Showing 1 to 1 of 1 entries</p>
                        </div>

                        <div class="detail2" style="margin-right: 20px; display:flex; margin-top:5px;">
                            <a> <img style="width:20px; height: 10px; margin: top 10px; " src="svg/less-than.svg"
                                    alt=""> </a>
                            <a>
                                <p>1</p>
                            </a>
                            <a> <img style="width:20px; height: 10px; margin: top 10px; " src="svg/greater-than.svg"
                                    alt=""> </a>
                        </div>

                    </div>
                    <div class="clear"></div>
                    <hr>


                </div>
            </div>


        </div>
    </div>

    <script>
    function toggleDropdown() {
        var dropdown = document.getElementById("myDropdown");
        dropdown.classList.toggle("show");
    }


    function rotateArrow() {
        var arrow = document.getElementById("arrowIcon");
        var dropdown = document.getElementById("myDropdown");

        arrow.classList.toggle("rotate-right");

        if (arrow.classList.contains("rotate-right")) {
            // Show dropdown only when the arrow is rotated right
            toggleDropdown();
        } else {
            // Hide dropdown when the arrow is rotated back
            dropdown.classList.remove("show");
        }
    }

    function updateValue(value) {
        var selectedValue = document.getElementById("selectedValue");
        selectedValue.innerHTML = value;

        var arrow = document.getElementById("arrowIcon");
        arrow.classList.remove("rotate-right");

        toggleDropdown(); // hide the dropdown after selecting a value
    }

    function updateDropdownOptions() {
        var dropdown = document.getElementById("myDropdown");
        var optionsHTML = "";

        // Get the table and count the number of rows
        var table = document.getElementById("yourTableId"); // Change "yourTableId" to your actual table ID
        var rowCount = table.rows.length;

        // Generate options based on the number of rows
        for (var i = 1; i <= rowCount; i++) {
            optionsHTML += '<a href="#" onclick="updateValue(' + i + ')">' + i + '</a>';
        }

        // Update the dropdown options
        dropdown.innerHTML = optionsHTML;
    }
    </script>

</body>

</html>