<?php
$sname="localhost";
$uname="root";
$password="";
$dbname="project";
$conn=mysqli_connect($sname,$uname,$password,$dbname,3307) or die("not 
connected");
// if($conn->connect_error){
//     die("unable connect".$conn->connect_error);
// }
// echo "database connection is successfully";

if(isset($_POST['Proceed'])){
    if(!empty($_POST['name']) && !empty($_POST['number']) && !empty($_POST['title']) && !empty($_POST['qty']) && !empty($_POST['pdate']) && !empty($_POST['product']) && !empty($_POST['address'])){
        $name=$_POST['name'];
        $number=$_POST['number'];
        $title=$_POST['title'];
        $quantity=$_POST['qty'];
        $pdate=date('Y-m-d',strtotime($_POST['pdate']));
        $product=$_POST['product'];
        $address=$_POST['address'];
        $query="insert into productbuy(name,phone,ptitle,quantity,date,itemname,address) values('$name','$number' ,'$title' ,'$quantity' ,' $pdate' ,'$product','$address')";
        $run=mysqli_query($conn,$query) or die(mysqli_error());
        if($run){
          echo'<script>alert("product buy successfully go home page."); window.location.href="index.html";</script>';
            
        }
        else{
            echo "form is not submitted";
        }

    }
    else{
        echo "all fields required";
    }
}
?>
