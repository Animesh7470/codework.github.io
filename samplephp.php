<?php
$db=mysqli_connect('localhost','root','','new') or die("db not connected")
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
  <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;

}

::selection{
  color: #000;
  background: #fff;


}
nav{
 
  background-color: black;
  opacity: .7;
  width: 100%;
  padding: 10px 0;
  z-index: 12;
  
}
nav .menu{
  max-width: 1250px;
  margin: auto;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 0 20px;
}
.menu .logo a{
  text-decoration: none;
  color: #fff;
  font-size: 35px;
  font-weight: 600;
}
.menu ul{
  display: inline-flex;
}
.menu ul li{
  list-style: none;
  margin-left: 7px;
}
.menu ul li:first-child{
  margin-left: 0px;
}
.menu ul li a{
  text-decoration: none;
  color: #fff;
  font-size: 18px;
  font-weight: 500;
  padding: 8px 15px;
  border-radius: 5px;
  transition: all 0.3s ease;
}
.menu ul li a:hover{
  background: #fff;
  color: black;
}

/* for card */

</style>
<body style="background-color:grey;">
<nav>
    <div class="menu">
      <div class="logo">
        <a href="#">CodeWork</a>
      </div>
      <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="new.php">New</a></li>
        <li><a href="Other.php">Other</a></li>
        <li><a href="contact.php">Contact</a></li>

      </ul>
    </div>
  </nav>
  <?php
     $postQuery="SELECT * FROM post ORDER BY id DESC";
     $runPQ=mysqli_query($db,$postQuery);
     while($post=mysqli_fetch_assoc($runPQ)){
      ?>
      
    <?=$post['img'] ?> 
    <!-- ^ is use for reffernce from table -->
      
  <?php
}
?> 

</body>
</html>