<!DOCTYPE html>

<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>P_baza</title>

    <!-- Bootstrap core CSS -->
    <link href="../theme/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../theme/css/shop-item.css" rel="stylesheet">
    <link href="../theme/css/login_button.css" rel="stylesheet">
    <!--pt Facebook-->
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/ro_RO/sdk.js#xfbml=1&version=v3.0';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!--Canvas-->



  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
          <a class="navbar-brand" href="index.php">Alex's Garage</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index">Acasa
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="despre">Despre</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="tutorial">Tutorial</a>
            </li>
            <li class="nav-item">
       



<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Admin</button>

<div id="id01" class="modal">
  
    <form class="modal-content animate" action="admin" method="head">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
     
      <input type="text" placeholder="Enter Username" name="username" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
     
       <?php
        $number1=rand(1,9);
        $number2=rand(1,9);
        $sum=$number1+$number2;
        
        ?>
       
            
            <input type="hidden" name="correctsum" value="<?php echo $sum; ?>"/>
            <?php echo $number1.'+'.$number2.'='; ?>
            <input type="text" name="captcha"/><br>
          
       
      
      
      
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
     
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-3">
          <h1 class="my-4">Alex Garage</h1>
          <div class="list-group">
            <a href="p_video" class="list-group-item ">Placi Video</a>
            <a href="p_baza" class="list-group-item active">Placi de baza</a>
            <a href="p_sunet" class="list-group-item">Placi de sunet</a>
            <a href="ram.php" class="list-group-item">Memorii</a>
            <a href="procesoare.php" class="list-group-item">Procesoare</a>
            <a href="ssd.php" class="list-group-item">Solid-State Drive(SSD)</a>
            <a href="hdd.php" class="list-group-item">Hard Disk-uri</a>
            <a href="carcase.php" class="list-group-item">Carcase</a>
            <a href="surse.php" class="list-group-item">Surse</a>
            <a href="coolere.php" class="list-group-item">Coolere</a>
          </div>
        </div>
        <!-- /.col-lg-3 -->
<?php
              $con=mysqli_connect('localhost','root','','produse')or die("Failed to connect:".mysqli_error($con));
       $sql='SELECT * FROM componente;';
       $query= mysqli_query($con, $sql)or die(mysqli_error($con));
       ?>
         <?php while($row=mysqli_fetch_array($query)){
             if($row['tip']=="p_baza"){?>
        <div class="col-lg-9">

          <div class="card mt-4">
              
             
              
              <img class="card-img-top img-fluid" src="<?php echo $row['Img'];?>" alt="" >
            
            <div class="card-body">
              <h3 class="card-title"><?php echo $row['Nume'];?></h3>
              <h4><?php echo $row['Pret'];?> lei</h4>
              <p class="card-text"><?php echo $row['Descriere'];?></p>
              <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
              4.0 stars
            </div>
        
          </div>
             
          <!-- /.card -->

          
          <!-- /.card -->

        </div>
         <?php } }?>
        <!-- /.col-lg-9 -->

      </div>

    </div>
    <!-- /.container -->

 

<br><br><br>
    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
       <div class="fb-like"  data-href="https://developers.facebook.com/docs/plugins/" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
      </div>
        
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="../theme/vendor/jquery/jquery.min.js"></script>
    <script src="../theme/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>