


<?php
$con=mysqli_connect('localhost','root','','produse')or die("Failed to connect:".mysqli_error($con));
$sql = "SELECT * FROM componente_updated"; 
$result = mysqli_query($con, $sql)or die(mysqli_error($con));
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Modificari</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../theme/css/table.css">
 
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="#">
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
    <li class="nav-item ">
        <a class="nav-link" href="admin"><strong>Back<strong></a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
   
    
    <br><br> <br><br>
   
    
    
     <table rules="rows">
         <tr>
             <thead>
             <th>Nume</th>
             <th>Status</th>
             
             <th>Data</th>
           
             
          
     </THEAD>
     <tbody>
         </tr>
<?php
while($row = mysqli_fetch_array($result)) {
?>
         <tr style="border-bottom: 1px solid black;">
             <td style="width:300px">
                 <h1> <?php echo $row["Nume"]; ?></h1>
             </td>
             <td style="width:30px">
                 <h1> <?php echo $row["status"]; ?></h1>
             </td>
              <td style="width:300px" align="center">
                 <h1> <?php echo $row["edtime"]; ?></h1>
             </td>
             
             <td style="width:300px">
<?php

?>
</td>

    </tr>
<?php }?>
</tbody>
</table>
 
</div>

</body>
</html>


