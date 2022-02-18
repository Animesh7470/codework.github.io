<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}
body{
    background:gray;
}
.form{
    background:url('nainoa-shizuru-NcdG9mK3PBY-unsplash.jpg') ;
    width: 100%;
  height: 100vh;
  background-size: cover;
  background-position: center;
  position: relative;
  
}
input[type=text], select, textarea {
  width: 70%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  width:60%;
  margin-left:auto;
  margin-right:auto;
}


.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
h1{
    text-align: center;
justify-content: center;
color:white;
}
p{
    color:white;
    text-align: center;
justify-content: center;
}
/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>
<section class="form">
<a href="table.php"><h1>Form</h1></a>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, hic.</p>

<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['firstname'];
        $email = $_POST['email'];
        
        $commu=$_POST['commu'];
        $about=$_POST['subject'];
        
      
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
        $sql = "INSERT INTO `formfortable` (`sno.`, `name`, `email`, `community`, `about`, `date`) VALUES (NULL, '  $name', '$email',  '$commu', '$about', current_timestamp());";
        $result = mysqli_query($conn, $sql);
        
        
        if($result){
       
        }
        else{
    
        }

      }

    }
    ?>

<div class="container">
  <form action="form.php" method="post">
    <div class="row">
      <div class="col-25">
        <label for="fname"> Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Email</label>
      </div>
      <div class="col-75">
        <input type="email" id="lname" name="email" placeholder="Your Email..">
      </div>
    </div>

    

    <div class="row">
      <div class="col-25">
        <label for="country">Community</label>
      </div>
      <div class="col-75">
        <select id="country" name="commu">
        <option value="---">-enter-</option>
          <option value="Dance">Dance</option>
          <option value="Coding">Coding</option>
          <option value="Music">Music</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">About You</label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="subject" placeholder="Write something About You.." style="height:200px"></textarea>
      </div>
    </div>
    <div class="row">
      <button><input type="submit" value="Submit"></button>
    </div>
  </form>
 
</div>
</section>
<!-- table started  -->

<?php
     $postQuery="SELECT * FROM formfortable ORDER BY id DESC";
     $runPQ=mysqli_query($db,$postQuery);
     while($post=mysqli_fetch_assoc($runPQ)){
      ?>
<section class="table">
<h1>A Fancy Table</h1>

<table id="customers">
  <tr>
    <th>Company</th>
    <th>Contact</th>
    <th>Country</th>
  </tr>
  <tr>
    <td><?=$post['sno.'] ?> </td>
    <td><?=$post['firstname'] ?> </td>
    <td><?=$post['community'] ?> </td>
    
  </tr>
  
</table>
</section>

<?php
}
?> 

</body>
</html>
