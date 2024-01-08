<?php

if(isset($_POST["submit"])){
    $id=$_POST['id'];
    $name=$_POST['p_name'];
    $category=$_POST['p_cat'];
    $price=$_POST['price'];
    $quantity=$_POST['p_qt'];
}
$errors=array();
if(empty($id) OR empty($name) OR empty($category) OR empty($price) OR empty(($quantity))){
    array_push($errors,"All fields are required");
}
if(count($errors)>0){
    foreach($errors as $error){
        echo "$error";
    }
}else{
    require_once "database.php";
    $pdo="INSERT INTO details(id,name,category,price,quantity) VALUES(:id,:name,:category,:price,:quantity)";
    $pdoresult=$pdoConn->prepare($pdo);
    $pdoexe=$pdoresult->execute(array(":id"=>$id,":name"=>$name,":category"=>$category,":price"=>$price,":quantity"=>$quantity));
    if($pdoexe){
        echo "<h1>You are registered.....!!!!</h1>";
    }else{
        echo "<h1>Something went wrong.......!!!!1</h1>";
    }
    
    
    
    
    /*$stmt=mysqli_stmt_init($conn);  //initialize a statement and return object for mysqli_stmt_prepare()
    $preparestmt=mysqli_stmt_prepare($stmt,$sql); 
    if($preparestmt){
        mysqli_stmt_bind_param($stmt,"issii",$id,$name,$category,$price,$quantity);
        mysqli_stmt_execute($stmt);
        echo "<h1>You are registeredd....!!!</h1>";
    }else{
        die("something went wrong");
    }*/
   
}
?>   
