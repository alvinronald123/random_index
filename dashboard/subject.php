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
            <h1 class="admin-h1">Manage Subjects</h1>
            <div class="manage-class">
                <div class="class-head">
                    <a href="">Subject List</a>
                    <a href="">Add Subject </a>
                </div>
                <div class="arrow-down">
                    <a href="">
                        <span>10</span>
                    </a>
                    <a href="">
                        <span>
                            <img style="width:30px; height: 20px; margin: top 10px;" src="svg/arrow-down-short-wide.svg"
                                alt="">
                        </span>
                    </a>
                    <a href="" style="border:none;">
                        <span>per page</span>
                    </a>
                    <div class="search">
                        <a style="border:none;">Search:</a>
                        <input class="search-input" type="text">
                    </div>
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
                                <th>
                                    <span style="font-weight:bold; font-size:20px;">#</span>
                                    <img style="width:30px; height: 17px;  margin: top 10px; "
                                        src="svg/arrow-down-short-wide.svg" alt="">

                                </th>
                                <th>Class</th>
                                <th>Subject Name</th>
                                <th>Teacher</th>
                                <th>Date</th>
                                <th>Options</th>




                            </tr>
                        </thead>
                        <tbody>
                            <!-- Table rows with data -->


                            <tr>
                                <td>

                                    <img style="width:30px; height: 17px;  margin: top 10px; "
                                        src="svg/arrow-down-short-wide.svg" alt="">
                                </td>
                                <td>Form One</td>
                                <td>Math</td>
                                <td> Lukwago Alvin Ronald</td>
                                <td>09/09/2024 </td>

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

</body>

</html>