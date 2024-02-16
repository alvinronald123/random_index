<?php 
include '../../__con/conn.php';

// Check if 'id' is set in the GET request
if(isset($_GET['id'])) {
    $id = $_GET['id'];

    // Echo the SQL query for debugging
    // echo "SQL Query: $sql";

    // Execute the DELETE query
    $sql = "DELETE FROM add_class_tr WHERE id = $id";
    $res = mysqli_query($conn, $sql);

    if($res === TRUE){
        $_SESSION['delete'] = "<div style='color:green';   align-items: center; margin-left:50px; font-size:10px; font-weight:bold; class='success'>Class Treacher  Delete Successfully</div>";
       //  header('Location:' .SITEURL.'delete/delete_class_tr.php'); // Corrected path
        //header('location:'.SITEURL.'admin/manage-admin.php');
     //   echo "<script>window.location.href = '" . SITEURL . "delete/delete_class_tr.php';</script>";

    } else {
        $_SESSION['delete'] = "<div class='error'>Failed to Delete Admin</div>";
       //  header('Location:' .SITEURL.'delete/delete_class_tr.php');
      // echo "<script>window.location.href = '" . SITEURL . "delete/delete_class_tr.php';</script>";

    }
}
//  else {
//     $_SESSION['delete'] = "<div class='error'>ID not provided in the request</div>";
//     // header('Location:' .SITEURL.'delete/delete_class_tr.php');
// }

// Redirect to the page after deletion
//header('Location:' .SITEURL.'delete/delete_class_tr.php');
//header('Location: ' . SITEURL . 'delete/delete_class_tr.php'); // Replace with your actual target page
echo "<script>window.location.href = '" . SITEURL . "class_tr.php';</script>";


exit(); 
?>