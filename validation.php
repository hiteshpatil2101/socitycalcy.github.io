<?php
$uname=$_POST['uname'];
$pass=$_POST['pass'];





if($pass==123){
    
    header('location:cala.php');

}
else{
    header('location:Login.php');    
}
?>