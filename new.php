<?php
$db=mysqli_connect('localhost','root','','new') or die("db not connected")
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- <link rel="stylesheet" href="home.css"> -->
</head>
<style>
  
body {
    background-color: #FF9A8B;
    background-image: linear-gradient(90deg, #FF9A8B 0%, #FF6A88 55%, #FF99AC 100%);
    margin:0;
  }
  ul
  {
    list-style-type: none;
    padding: 0; 
  }
  .flexbox .flex-card-list {
    display:flex;
    flex-wrap:wrap;
    justify-content: center;
  }
  .flexbox .flex-card-listitem {
    display:flex;
    background-color: #fff;
    padding: 1em;
    border-radius: 10px;
  }
  
  .flexbox .flex-card {
    display:flex;
    flex-direction:row;
  }
  .flex-card-list li {
    width:800px;
    margin: .55em;
    display:flex;
  }
  .flexbox .flex-card-content {
    display:flex;
    flex:1 0 auto; 
    flex-direction:column;
    padding : 10px;
  }
  .flexbox .flex-card-content p {
    flex:1 0 auto;
    font-weight: 900;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
  }
  .flex-card-button {
   background-color: #FF6A88;
    padding: 1em;
    text-align:center;
    text-decoration: none;
    color: #202124;
    border-radius:10px;
    width:150px;
    font-weight: 900;
    padding: 10px;
  }
  .flex-card-button:hover{
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
  }
  .flex-card-image img{
      width:340Px;
      height:250px;
      border-radius: 12px;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  }
  .flex-card-heading{
      border:3px solid #FF9A8B;
      padding:5px;
      width:340px;
      border-radius:5px;
      text-align: center;
      color:#202124
    
  }
  .credit{
    text-align: center;
    color: #000;
    font-weight: 900;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
}
.credit a{
    text-decoration: none;
    color:#202124;
    font-weight: bold;
}  
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
.contentonly{
  width: 340px;
  padding: 10px;

}
</style>
<body>

<html>
  <head>
 <title>Blog post card|| Learning robo</title>
 <link rel="stylesheet" href="style.css">
 
  </head>
  <body>

  <body style="background-color:grey;">
<nav >
    <div class="menu">
      <div class="logo">
        <a href="#">CodeWork</a>
      </div>
      <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="new.php">New</a></li>
        <!-- <li><a href="Other.php">Other</a></li>
        <li><a href="contact.php">Contact</a></li> -->

      </ul>
    </div>
  </nav>
  <?php
     $postQuery="SELECT * FROM post ORDER BY id DESC";
     $runPQ=mysqli_query($db,$postQuery);
     while($post=mysqli_fetch_assoc($runPQ)){
      ?>
   <!-- box section started  -->
    <div class="flexbox">
        <ul class="flex-card-list">
 <!-- box start  -->

          <li class="flex-card-listitem">
            <div class="flex-card">
              <div class="flex-card-image">
                <img src="<?=$post['img'] ?> " />
              
              </div>
              <div class="flex-card-content">
                <h3 class="flex-card-heading"><?=$post['title'] ?> </h3>
                <p class="contentonly"><?=$post['content'] ?> </p>
                <a href="<?=$post['attch'] ?> " class="flex-card-button">continiue</a>
              </div>
            </div>
          </li>
      </ul>
    </div> 

    <?php
}
?> 

 
</body>
</html>