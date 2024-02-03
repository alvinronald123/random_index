<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="main">
      <?php include 'sidebar.php';?>
<div class="main-two">
<div class="theh">
<h2 style="font-weight:200; margin:0px;">School  System Test 2024 </h2>

</div>
<div class="clear-fix">
    <ul>
        <li class="pull-left"> <a href="">Admin</a></li>
        <li class="pull-right"><a href=""> Logout</a> </li>
    </ul>
    <div class="clear">
     </div>
</div>
<br>
<hr style="margin-left:15px; align-items:center; justify-content:center;">
<h3 style="color: #373e4a; margin-buttom:10px; 
margin-top:10px;margin-left:10px;"> Manage Admin Profile </h3>
<div class="row"> 
    <div class="col2">
        <ul class="lables">
            <a href="">Manage Admin Profile</a>
            <hr>
        </ul>
        <ul class="form-ds">
            <li>
                <label for=""> Admin Name</label>
                <input class="inputs" type="text" > 
            </li>
        </ul>
        <ul class="form-ds">
            <li>
                <label for=""> Admin Email</label>
                <input class="inputs" type="text" >
            </li>
        </ul>
        <ul class="form-ds">
            <li>
                <label for="">Admin Photo</label>
                <div class="admin-img" >  </div>
                 <input style="margin: top 5px; margin: left 10px; margin: buttom 5px;"  type="file" >
            </li>
        </ul>
        <ul class="form-ds">
            <li>
             <button class="btn">Upload Profile</button>                
            </li>
        </ul>

        
        
 </div>
     </div>
     <br>
     <div class="row"> 
    <div class="col2">
        <ul class="lables">
            <a href="">Manage Admin Security</a>
            <hr>
        </ul>
        <ul class="form-ds">
            <li>
                <label for="">Current Password</label>
                <input class="inputs" type="text" > 
            </li>
        </ul>
        <ul class="form-ds">
            <li>
                <label for=""> New Password....</label>
                <input class="inputs" type="text" >
            </li>
        </ul>
        <ul class="form-ds">
            <li>
                <label for=""> Confirm Password</label>
                <input class="inputs" type="text" >
            </li>
        </ul>
        <ul class="form-ds">
            <li>
             <button class="btn">Submit</button>                
            </li>
        </ul>

        
        
 </div>
     </div>
       

</div>
</div>
</body>
</html>