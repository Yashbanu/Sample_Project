<?php 
include('database.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Details</title>
    <link rel="stylesheet" href="style.css">

    <style>
form{
    text-align: center;
    margin-left: 0px;
    margin-bottom: 50px;
    margin-top: 60px;
}
#detailbtn{
    margin-top: 50px;
}
table{
   margin-left: 900px;
}
        </style>
</head>
<body>
    <form action="delete.php" method="POST" class="frm">
    <label> <b>ENTER THE ID :</b></label>
    <input type="number" name="id" placeholder="enter id"><br>
   <input type="submit" id ="detailbtn" value="DELETE" onclick=display()>
    </form>
    <div class="ss">
        
    
            <?php
            if (isset($_POST['id'])) {
            $id = $_POST['id'];
            
            $pdo="DELETE FROM details WHERE id=:id";
            $pdoresult=$pdoConn->prepare($pdo);
            $pdoresult->bindParam(':id', $id, PDO::PARAM_INT);
            $qt=$pdoresult->execute(); 
            if($qt){
               ?>
               <h1>Deleted ID is : <?=$id;?></h1>
               <?php
            }else{
                ?>
                <h1>ERROR.....!!!!! NOT DELETED</h1>
          <?php  }
           
            
    
            }
        
        
            ?>

    </div>
</body>
</html>
