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

if(isset($_POST['submit'])){
    if(!empty($_POST['username']) && !empty($_POST['password'])){
        $uname=$_POST['username'];
        $password=$_POST['password'];
        $query="insert into signup(username,password) values('$uname','$password')";
        $run=mysqli_query($conn,$query) or die(mysqli_error());
        if($run){
            echo '<script>alert("your sign is successfully go home page."); window.location.href="index.html";</script>';
            // echo "form data is inserted into database..";
        }
        else{
            echo '<script>alert("your sign is not successfully try again.."); window.location.href="form1.html";</script>';
        }

    }
    else{
        echo "all fields required";
    }
}
?>
