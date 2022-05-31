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
    if(!empty($_POST['first']) && !empty($_POST['last']) && !empty($_POST['email']) && !empty($_POST['number']) && !empty($_POST['password']) && !empty($_POST['cpassword']) && !empty($_POST['gender']) && !empty($_POST['address'])){
        $first=$_POST['first'];
        $last=$_POST['last'];
        $email=$_POST['email'];
        $number=$_POST['number'];
        $password=$_POST['password'];
        $cpassword=$_POST['cpassword'];
        $gender=$_POST['gender'];
        $address=$_POST['address'];
        $query="insert into registration(fname,lname,email,phone,password,cpassword,gender,address) values('$first','$last' ,'$email' ,'$number' ,'$password' ,'$cpassword' ,'$gender' ,'$address')";
        $run=mysqli_query($conn,$query) or die(mysqli_error());
        if($run){
            echo '<script>alert("your registeration is successfully go login page."); window.location.href="form1.html";</script>';
            
        }
        else{
            echo '<script>alert("your registeration is not successfully fill again"); window.location.href="RegistrationForm.html";</script>';
        }

    }
    else{
        echo "all fields required";
    }
    
}
?>
