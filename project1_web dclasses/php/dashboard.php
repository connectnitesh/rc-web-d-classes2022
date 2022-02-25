<?php

session_start();
require_once "./config.php";
$name=0;
$email=$_SESSION["email"];
if (!isset($_SESSION["email"]) & empty($_SESSION["email"])) {
  header("location: login.php");
}

$sql = "SELECT * FROM users WHERE `email` = '$email'";
$result1 = mysqli_query($connection, $sql);
while ($r1 = mysqli_fetch_assoc($result1)) {
 $name= $r1["name"];
}

?>
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css" />
   
    
    <title>winsome-buy the perfect outfit</title>
</head>
<body>

    <header class="first1">
        <div class="first2">
          <img src="../w logo.jpg" alt="" />
          <a href="./php/register.php" class="text1">home</a> 
          <a href="./php/register.php" class="text2">about us</a>
          <h1 class="first3">Winsome</h1>
          <form class="first4">
            <table>
              <tr>
                <td><input type="text" name="search" placeholder="search for products & brands">
                </td>
              </tr>
            </table>
          </form>
         
         <a href="./logut.php" class="text3">logout</a>
         
        <h2 class="center1"><strong> This is<?php echo $name;?></strong></h2>
        <div class="center2">winsome design and 800 + brands</div>
    </header>
</body>
</html>