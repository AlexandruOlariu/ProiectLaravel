<!DOCTYPE>
<html>
    <head><title>Add a item</title>
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
        <a class="nav-link" href="modificari"><strong>Modificari<strong></a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
   
    
    <br><br> <br><br>
        <?php
        echo Form::open(array('action'=>'MainController@store','enctype'=>'multipart/form-data'));
        echo Form::label('Nume','Nume: ');
        echo Form::text('Nume');
        echo "<br/><br/>";
        echo Form::label('Tip','Tip: ');
        echo Form::text('Tip');
        echo "<br/><br/>";
        echo Form::label('Producator','Producator: ');
        echo Form::text('Producator');
        echo "<br/><br/>";
        echo Form::label('Pret','Pret: ');
        echo Form::text('Pret');
        echo "<br/><br/>";
        echo Form::label('Descriere','Descriere: ');
        echo Form::text('Descriere');
        echo "<br/><br/>";
         echo Form::label('image','Image:');
       echo Form::file('image')."<br><br>";
        echo "<br/><br/>";
        echo Form::submit('Add comp');
        echo Form::close();
        ?>
    </body>
</html>