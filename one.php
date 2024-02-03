<table class="subject_heads" id="yourTableId">
                        <thead>
                            <tr>
                                <th>
                                    <span style="font-weight:bold; font-size:20px;">#</span>
                                    <img style="width:30px; height: 17px;  margin: top 10px; "
                                        src="svg/arrow-down-short-wide.svg" alt="">

                                </th>
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
    $sql = "SELECT * FROM add_class_tr";
    $res = mysqli_query($conn, $sql);
    $sn = 1;

    if ($res && mysqli_num_rows($res) > 0) {
        while ($row = mysqli_fetch_assoc($res)) {
            printTableRow($sn, $row);
            $sn++;
        }
    }
}

function printTableRow($sn, $row)
{
    ?>
                            <tr>
                                <td>
                                    <img style="width:30px; height: 17px;  margin: top 10px; "
                                        src="svg/arrow-down-short-wide.svg" alt="">
                                </td>
                                <td><?php echo $sn; ?></td>
                                <td><?php echo $row['surname'] . " " . $row['other_name']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['tr_number']; ?></td>
                                <td><?php echo $row['gender']; ?></td>
                                <td><?php echo $row['age']; ?></td>
                                <td><?php echo $row['class_tr_code']; ?></td>
                                <td><?php echo $row['year']; ?></td>
                                <td>
                                    <button class="btn">
                                        <select
                                            style="border: none; outline: none; width:70px; height:15px;  background-color: #21a9e1;">
                                            <option style="border: none;" value="">Action</option>
                                            <option style="border: none;" value="">View</option>
                                            <option style="border: none;" value="">Edit</option>
                                            <option style="border: none;" value="">Delete</option>
                                        </select>
                                    </button>
                                </td>
                            </tr>
                            <?php
}
?>


                            <!-- Add more rows as needed -->
                        </tbody>

                    </table>
                   