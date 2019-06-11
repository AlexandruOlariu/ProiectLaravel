<?php
function died($error){
echo "Am motive sa cred ca esti un robot . ";
echo $error;
die();
}

if(!isset($_POST['captcha'])){
    died('Probleme fraiere');
}

$captcha=$_POST['captcha'];
$correctsum=$_POST['correctsum'];

$error_message="";
$string_exp="/^[A-ZA-z.'-]+$/";



if(!isset($_POST['captcha'])){
    $error_message.='Da-mi raspunsul!.<br>';
}


elseif($_POST['captcha']!=$_POST['correctsum']){
    $error_message.='Ai gresit suma, fraiere.<br>';
}
else{
    header('Location:admin.php');
}

if(strlen($error_message)>0){
    died($error_message);
}
?>


<?php
session_start();
$user = '111';
$pass = '222';
$message="";
if((!(empty($_POST["username"])))||(!(empty($_POST["password"])))){
    if(($_POST["username"]==$user)&&($_POST["password"]==$pass)){
        $_SESSION["user_name"] = $_POST["username"];
         if(isset($_POST['remember'])){
            setcookie('username',$_POST['username'],time()+60*60*24*365);
            setcookie('password',md5['password'],time()+60*60*24*365);
           // echo "Remember me coockie set!";
        }
        else{
            setcookie('username',$_POST['username'],false);
            setcookie('password',$_POST['password'],false);
             
            //echo "Remember me cookie not set!";
        }
        
        Redirect("admin");
        
    } else {
        $message = "Invalid Username or Password!";
    }
}else{
    Redirect("index");
}
echo $message;
?>