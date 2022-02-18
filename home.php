<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
     <link rel="stylesheet" href="home.css">
   
   </head>
<body>
  <nav>
    <div class="menu">
      <div class="logo">
        <a href="#">CodeWork</a>
      </div>
      <ul>
        <li><a href="#center">Home</a></li>
        <li><a href="new.php">New</a></li>
       <li><a href="musicband.php">Song</a></li>

      </ul>
    </div>
  </nav>



  <div class="img"></div>
  <div class="center" id="center">

      <br>
      
    <div class="title">"Take The Risk</div>
    <div class="sub_title"></div>
    <div class="sub_title"> OR Lose The Chance"</div>
    <div class="btns">
      <button class="btns1"><a href="">YouTube</a> </button>
      <button class="btns1"> <a href="">Join</a></button>
    </div>
  </div>
     <!-- services section start -->
 <!-- end section -->
   <section class="secforcontact">

<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        
      
      // Connecting to the Database
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "new";

      // Create a connection
      $conn = mysqli_connect($servername, $username, $password, $database);
      // Die if connection was not successful
      if (!$conn){
          die("Sorry we failed to connect: ". mysqli_connect_error());
      }
      else{ 
        // Submit these to a database
        // Sql query to be executed 
        $sql = "INSERT INTO `contact` (`sno.`, `name`, `email`, `message`, `date`) VALUES (NULL, '$name ', '$email', '$message', current_timestamp());";
        $result = mysqli_query($conn, $sql);
 
        if($result){
       
        }
        else{
    
        }

      }

    }

    
?>
<div class="divforcontact" style="margin-left:100px;">
<div class="container mt-3  ">
<h1>Contact Us </h1>
    <form action="home.php" method="post">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp">
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp"> 
        <small id="emailHelp" class="form-text text-muted"></small>
    </div>

    <div class="form-group">
        <label for="desc">Message</label>
        <textarea class="form-control" name="message" id="desc" cols="30" rows="10"></textarea> 
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</div>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis suscipit nemo minima, est beatae eligendi autem perspiciatis facilis labore dolores illum repellat placeat omnis voluptates commodi aperiam quaerat sed quibusdam alias aspernatur illo consectetur dicta? Placeat explicabo ab fugiat architecto itaque, exercitationem molestias accusamus voluptas quia culpa. Minus, ut consequatur?</p>
</section> 
<br>  


  
<!-- footer section start -->
<footer>
        <span>Created By <a href="">CodeWork</a> | <span class="far fa-copyright"></span> 2022 All rights reserved.</span>
    </footer>


  <script>
    
    document.querySelector('#contact-form').addEventListener('submit', (e) => {
    e.preventDefault();
    e.target.elements.name.value = '';
    e.target.elements.email.value = '';
    e.target.elements.message.value = '';
  });

  function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
    </script>
</body>
</html>
