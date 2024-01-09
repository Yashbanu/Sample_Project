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
    <form action="displayone.php" method="POST" class="frm">
    <label> <b>ENTER THE ID :</b></label>
    <input type="number" name="id" placeholder="enter id"><br>
   <input type="submit" id ="detailbtn" value="DETAIL" onclick=display()>
    </form>
    <div class="ss">
        <h1>THE DETAILS ARE:</h1>
        <table>
            <thead>

        </thead>
        <tbody>
            <?php
            if (isset($_POST['id'])) {
            $id = $_POST['id'];
            
            $pdo="SELECT *FROM details WHERE id=:id";
            $pdoresult=$pdoConn->prepare($pdo);
            $pdoresult->bindParam(':id', $id, PDO::PARAM_INT);
            $pdoresult->execute(); 
             $res = $pdoresult->fetchAll();
           
            if($res){
                foreach($res as $row){
                    ?>
                    <tr>
                    <td> <h3>ID : <?=$row['id'];?></h3></td>
                    </tr>
                    <tr>
                    <td><h3>NAME :<?=$row['name']; ?></h3></td>
                    </tr>
                    <tr>
                    <td><h3>CATEGORY : <?=$row['category'];?></h3></td>
                    </tr>
                    <tr>
                    <td><h3>PRICE : <?=$row['price'];?></h3></td>
                    </tr>
                        <tr>
                        <td> <h3>QUANTITY :<?=$row['quantity'];?> </h3></td></tr> 
                    <?php
                }
            }
            else{
            ?>
            <tr>
                <td><h1>NO RECORD FOUND</h1></td>
            </tr>
        </tbody>
        <?php
            }
        }
        
            ?>
        </table>
    </div>
</body>
</html>
