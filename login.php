<?php
session_start() ;
$f_name = "";
$email ="";
$pw ="";
$msg ="" ;

if (isset($_POST['signup'])) {
   $f_name = $_POST['full_name'];
   $email =$_POST['mail'];
   $pw = $_POST['password'];
   if (!empty($f_name) && !empty($email) && !empty($pw)){
    //$_SESSION['user_name'] = $f_name ;
   // $_SESSION['email'] = $email;
   //$msg ="welcome" . $SESSION['user_name']
  $expire_date = time() + (86400  * 30);
   setcookie('user_name' ,$f_name , $expire_date, '/');
   $msg = "Welcome " . $_COOKIE['user_name'];
   }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, intial-scale=1.0">
        <title>sign up forum</title>
</head>
<body>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"]?>">
  
     <label for="fname">FULL NAME:</label>
    <input type="text" id ="fname" name ="full_name"><br><br>
    <label for="email"> Email : </label>
    <input type="email" id = "email" name ="mail"><br><br>
    <label for ="pw">Password : </label>
    <input type="password" id = "pw" name ="password"><br><br>
    <input type="submit" value ="sign up" name ="signup">
</form>
<h3><?PHP echo $msg; ?></h3>

     <br>
 <a href = "./logout.php" class="btn btn-primary"> logout here</a>
     
</body>
</html>