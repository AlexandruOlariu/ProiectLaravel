<!DOCTYPE html>
<html lang="en">
<head>
  <title>View a item</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="index.php">
      <img src="img_avatar2.png" alt="logo" style="width:40px;">
  </a>
  
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="cautare">Cauta un produs</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="upload">Upload another ITEM</a>
    </li>
    <li class="nav-item ">
        <a class="nav-link" href="logout"><strong>LOG OUT<strong></a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
   
    
<?php
       //include connection file



        $dbms="mysql";
$host="localhost";
$db="produse";
$user="root";
$pass="";
$dsn="$dbms:host=$host;dbname=$db";
$con=new PDO($dsn,$user,$pass);

$ids=$ID;
        $sql1="CALL getprod('{$ids}',@nume,@tip,@descr,@pret,@prod,@imag);";
       $sql2="SELECT @nume,@tip,@descr,@pret,@prod,@imag;";
$q=$con->query($sql1);
$q=$con->query($sql2);
$q->setFetchMode(PDO::FETCH_ASSOC);
      while ($row=$q->fetch()){
             echo "Nume:       ".$row["@nume"]."<br/>";
             echo "Tip:        ".$row['@tip']."<br/>";
             echo "Producator: ".$row['@prod']."<br/>";
             echo "Pret:       ".$row['@pret']." lei"."<br/>";
             echo "Imagine: <br><br><br> <img src='../".$row['@imag']."' height='200' width='200' ><br/>";
             echo "Descriere: <br> <p>".$row['@descr']."</p><br/>";
      }
      
            ?>
<a href="admin">Back</a>
</div>

</body>
</html>