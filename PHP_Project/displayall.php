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
table{
    margin-left: 35%;
    padding: 10px;
    margin-top: 50px;
    text-align: center;
}
th{
    text-align: center;
    padding: 10px;
    background-color: black;
    color: aliceblue;
}
td{
    padding: 30px;
}
        </style>
</head>
<body>
    <div class="ss">
        <h1>THE DETAILS ARE:</h1>
        <table border="2px">
            <thead>
            <tr>
                <th>ID </th>
                <th>NAME</th>
                <th>CATEGORY</th>
                <th>PRICE</th>
                <th>QUANTITY</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $pdo="SELECT *FROM details";
            $pdoresult=$pdoConn->prepare($pdo);
            $pdoresult->execute();
            $pdoresult->setFetchMode(PDO::FETCH_OBJ);
            $res=$pdoresult->fetchAll();
            if($res){
                foreach($res as $row){
                    ?>
                    <tr>
                        <td><?=$row->id;?></td>
                        <td><?=$row->name; ?></td>
                        <td><?=$row->category;?></td>
                        <td><?=$row->price;?></td>
                        <td><?=$row->quantity;?></td>
                    </tr>
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
            ?>
        </table>
    </div>
</body>
</html>
