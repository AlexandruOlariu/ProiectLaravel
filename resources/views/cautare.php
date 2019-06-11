<!DOCTYPE html>
<html lang="en">
<head>
  <title>Search a item</title>
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
  <a class="navbar-brand" href="index">
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
    <li class="nav-item">
        <a class="nav-link" href="admin">Back</a>
    </li>
    <li class="nav-item ">
        <a class="nav-link" href="logout"><strong>LOG OUT<strong></a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
    <br>
    

<?php
$con=mysqli_connect('localhost','root','','produse')or die("Failed to connect:".mysqli_error($con));

$sql="SELECT * FROM componente ";
if(isset($_POST["search"])){
$search_term= mysqli_real_escape_string($con,$_POST["search_box"]);
$sql.="WHERE Nume='{$search_term}'";
$sql.="OR Producator='{$search_term}'";
}
 $query= mysqli_query($con, $sql)or die(mysqli_error($con));
?>

<form name="search_form" method="post" action="cautare.php">
     Search:<input type="text" name="search_box" value="" />
     <input type="submit" name="search" value="Search the table">
     <input type="reset" value="Reset">
     
     
     
 </form>
  <table width="70" cellpadding="4" cellspace="4" align="center">
            <tr>
                <th>Nume</th>
                <th>Producator</th>
                <th>Descriere</th>
                <th>Pret</th>
               
                
            </tr>
            <?php while($row= mysqli_fetch_array($query)){?>
            <tr>
                <td><?php echo $row["Nume"]; ?></td>
                <td><?php echo $row["Producator"]; ?></td>
                <td><img src="<?php echo $row["Img"]; ?>" height="100" width="100"></td>
                <td><?php echo $row["Pret"]; ?></td>
                 </tr>
            <?php }?>
        </table>
</div>

</body>
</html>