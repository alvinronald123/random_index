<?php
 include ('../__con/conn.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
 </head>
 <body> 
   <div class="header">
        <img src="../images/logo_queen.png" alt="Queen" class="logo" style="margin-right: 25px; margin-left: 30px;">
        <h1 style="margin-right: 20px; margin-left: 20px;
        display: inline-block;
    font-family: Arial, sans-serif;
    font-size: 35px;
    color: #3010be;
    vertical-align: middle;
    background-color: rgb(209, 209, 240);
    align-items: center;
    text-align: center;
    margin-bottom: 0;
    padding:10px;">QUEEN OF MARTYRS HIGH SCHOOL KIRA - KIWOLOGOMA</h1>
       
    </div>
   
    
    <div class="main" style="margin-bouttom:0;" >
    
    <div class="container">
        <header>REGISTRATION FORM  FOR QUEEN OF MARTYRS HIGH SCHOOL KIRA KIWOLOGOMA 
        <span class="title">
                    Details 
                    <?php
                    if(isset($_SESSION['insert']))
                    {
                        echo $_SESSION['insert'];
                        unset($_SESSION['insert']);
                    }
                    if(isset($_SESSION['uploads']))
                    {
                        echo $_SESSION['uploads'];
                        unset($_SESSION['uploads']);
                    }
                    
                    ?>
                    
                </span>

        </header>
      
        <form action="" method="POST" enctype="multipart/form-data">
        <div class="form first">
            <div class="details persoal">
                             
                <div class="fields">
                    <div class="input-fields">
                        <lable> Student First Name </lable>
                        <input required type="text" placeholder="Enter Your First Name" name="sfn" >
                        <input type="hidden" placeholder="Enter Your First Name" >
                    </div>
                    <div class="input-fields">
                        <lable> Student Second Name </lable>
                        <input required type="text" placeholder="Enter Your Second Name" name="ssn" >
                    </div>
                    <div class="input-fields">
                        <lable> Student Last Name </lable>
                        <input required type="text" placeholder="Enter Your Last Name" name="sln" >
                    </div>
                    <div class="input-fields">
                        <lable> Gender </lable>
                        <input required type="text" placeholder="Enter Your Gender"  name="gender">
                    </div>
                    <div class="input-fields">
                        <lable> Status </lable>
                        <input required type="text" placeholder="Enter Your Status" name="status" >
                    </div>
                    <div class="input-fields">
                        <lable> Class </lable>
                        <input required type="text" placeholder="Enter Your Class" name="class" >
                    </div>
                    <div class="input-fields">
                        <lable>  ClassTeacher First Name </lable>
                        <input type="text" placeholder="Enter Your First Name" name="ctfn" >
                    </div>
                    <div class="input-fields">
                        <lable> ClassTeacher Second Name </lable>
                        <input type="text" placeholder="Enter Your  Second Name" name="ctsn" >
                    </div>
                    <div class="input-fields">
                        <lable> ClassTeacher Last Name </lable>
                        <input type="text" placeholder="Enter Your Last Name" name="ctln" >
                    </div>
                    <div class="input-fields">
                        <lable>  </lable>
                        <input type="hidden"   name="srn" >
                    </div>
                    
                    

                </div>
            </div>

            <div class="details persoal">
               
                
                <div class="fields">
                    <div class="input-fields">
                        <lable> Student Religion </lable>
                        <input type="text" placeholder="Enter Your Religion" name="sr" >
                    </div>
                    <div class="input-fields">
                        <lable> ClassTeacher Religion </lable>
                        <input type="text" placeholder="Enter Your Religion" name="ctr" >
                    </div>
                    <div class="input-fields">
                        <lable> ClassTeacher Gender </lable>
                        <input type="text" placeholder="Enter Your Gender" name="ctg" >
                    </div>
                     <div class="input-fields">
                        <lable> Student's Image </lable>
                        <input type="file" name="simage" accept="image/*" >
                    </div>
                    <div class="input-fields">
                        <lable> Teacher's Image </lable>
                        <input type="file" name="timage" accept="image/*" >
                    </div> 
                  
                    
                    

                </div>
               
            </div>


            <br>
            <div class="details persoal">
              
                
             
                <div class="buttons">
                <button class="backBtn">
                <img src="svg/backward.svg" style="height: 20px; width:25px; color:#fff;">
                    <span class="btnText" style="font-size:25px;">
                        CLEAR
                    </span>
                   
                </button>
                <button class="backBtn">
                <img src="svg/backward.svg" style="height: 20px; width:25px; color:#fff;">
                    <span class="btnText" style="font-size:25px;">
                        CANCLE
                    </span>
                   
                </button>

                <button type="submit" name="submit" class="submitBtn">
                    <span class="btnText" style="font-size:25px;">
                        SUBMIT
                    </span>
                  
                </button>

                </div>
               
            </div>


        </div>
       
        </form>

    </div>

    </div>
    <footer class="footer">
     <hr>
     <br>
      <h3> COPYRIGHT : QUEEN OF MARTYRS HIGH SCHOOL.</h3>
      <br><br>
    </footer>
    
    <script src="script.js"> </script>
    <?php
        
        
            if(isset($_POST['submit']))
    {
         function generateIndexNumber(){
            $prefix = "QOMHS-";
            $randomNumber = str_pad(rand(0,9999),4,"0", STR_PAD_LEFT);
            return $prefix . $randomNumber;
    
            }
            $srn = generateIndexNumber();
    
          
                $sfn = $_POST['sfn'];
                $ssn = $_POST['ssn'];
                $sln = $_POST['sln'];
                $gender = $_POST['gender'];
                $status = $_POST['status'];
                $class = $_POST['class'];
                $ctfn = $_POST['ctfn'];
                $ctsn = $_POST['ctsn'];
                $ctln = $_POST['ctln'];
                // $srn = $_POST['srn'];
                $sr = $_POST['sr'];
                $ctr = $_POST['ctr'];
                $ctg = $_POST['ctg'];
                
    
    
             if(isset($_FILES['simage']['name']))
             {
                 $simage = $_FILES['simage']['name'];
    
                 if($simage !="")
                 {
                     $ext = pathinfo($simage,PATHINFO_EXTENSION);
    
                     $simage = "QOMHS_S_".rand(000, 999).'.'.$ext;
    
                     $path = $_FILES['simage']['tmp_name'];
    
                     $destination = "../images/uploads/".$simage;
    
                     $uploads = move_uploaded_file($path, $destination);
    
                     if($uploads == FALSE)
                     {
                         $_SESSION['uploads'] = " <div class='error'> Failed To Upload The Image </div> ";
                       //  header('location:'.SITEURL.'students.php');
                         die();
                     }
                
             }
             else{
                 $simage = "";
             }
             if(isset($_FILES['timage']['name']))
             {
                 $timage = $_FILES['timage']['name'];
    
                 if($timage !="")
                 {
                     $ext = pathinfo($timage,PATHINFO_EXTENSION);
    
                     $timage = "QOMHS_T_".rand(000, 999).'.'.$ext;
    
                     $path = $_FILES['timage']['tmp_name'];
    
                     $destination = "../images/uploads/".$timage;
    
                     $uploads = move_uploaded_file($path, $destination);
    
                     if($uploads == FALSE)
                 {
                         $_SESSION['uploads'] = " <div class='error'> Failed To Upload The Image </div> ";
                       //  header('location:'.SITEURL.'students.php');
                         die();
                     }
                 }
             }
             else{
                 $timage = "";
             }
            
        
    
            //  $sql = "INSERT INTO random SET
           
            // sfn = '$sfn',
            // ssn = '$ssn',
            // sln = '$sln',
            // gender = '$gender',
            // status = '$status',
            // class = '$class', 
            // ctfn = '$ctfn',
            // ctsn = '$ctsn',
            // ctln = '$ctln',
            // srn = '$srn',
            // sr = '$sr',
            // ctr = '$ctr',
            // ctg = '$ctg',
            // timage = '$timage',
            // simage = '$simage'
        
          
              
            
           //  ";
    
             $sql = "INSERT INTO random (sfn, ssn, sln,	gender,	status,	class,	ctfn,	ctsn,	ctln,
             	srn, sr, ctr, ctg, simage , timage ) VALUES ('$sfn', '$ssn', '$sln',	
                 '$gender', '$status', '$class', '$ctfn', '$ctsn', '$ctln',
            	'$srn', '$sr', '$ctr', '$ctg','$simage','$timage')";
    
           $res = mysqli_query($conn, $sql);
               
    
            if ($res==TRUE){
                $_SESSION['insert'] = " <div class='title success'> Data is Inserted Into The Database </div> ";
               // header('location:'.SITEURL.'students.php');
            }
            else{
                $_SESSION['insert'] = " <div class='title error'> Data Failed To Be inserted </div> ";
             //   header('location:'.SITEURL.'students.php');
            }
               
       

    }
}
       
    ?>
   
 </body>
</html>