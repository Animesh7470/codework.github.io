<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
  footer{
    background: rgba(160, 157, 157, 0);
    padding: 15px 23px;
    color: rgba(248, 243, 243, 0.808);
    text-align: center;
}
footer span a{
    color: crimson;
    text-decoration: none;
}
footer span a:hover{
    text-decoration: underline;
}
  .h1forreco{
  justify-content: center;
  text-align: center;
  padding: 60px;
  font-size: 700px;
  
}

.services, .teams{
    color:#fff;
    background: url('c-d-x-PDX_a_82obo-unsplash.jpg');
    /* width: 100%; */
    
}
.services {
    padding-left: 100px;
    padding-right: 100px;
}
.services .title::before,
.teams .title::before{
    background: #fff;
   
}
.services .title::after,
.teams .title::after{
    background: #111;
    
}
.title{
    text-align: center;
    font-size: 80px;
    color:black;
}
.serv-content {
    display: flex;
    padding-left: 10px;
    padding-right: 10px;
    
}

.services .serv-content .card{
    width: calc(33% - 20px);
    background: url('jason-leung-F2WX4BTIkpQ-unsplash.jpg');
    text-align: center;
    border-radius: 6px;
    padding: 50px 20px;
    cursor: pointer;
    transition: all 0.3s ease; 
    margin: 5px;
    width: 100%;
}
.services .serv-content .card:hover{
    /* background: crimson; */
}
.services .serv-content .card .box{
    transition: all 0.3s ease;
    padding-left: 25px;
    padding-right: 25px;
}
.services .serv-content .card:hover .box{
    transform: scale(1.15);
}
.services .serv-content .card i{
    font-size: 50px;
    color: crimson;
    transition: color 0.3s ease;
}
.services .serv-content .card:hover i{
    color: #fff;
}
.services .serv-content .card .text{
    font-size: 25px;
    font-weight: 500;
    margin: 10px 0 7px 0;
}
    body {
  text-align: center;
  background-color: #283149;
  
}

#title {
  font-size: 80px;
  color: #DBEDF3;
  font-family: "Arvo", cursive;
  text-shadow: 3px 0 #DA0463;

}

footer {
  color: #DBEDF3;
  font-family: sans-serif;
}



</style>
<body>
<h1 id="title"> MUSIC </h1>
</div>

<div class="imginmusic" >
  <a onclick="playsong()" ondblclick="pausesong()">
 <img src="c-d-x-PDX_a_82obo-unsplash.jpg" alt="" srcset=""  style="width: 300px;" > </a>
  <h1 class="h1aimg">1 click = play </h1>
  <h1 class="h1aimg"> Double click = pause</h1>
 
<br>
<br>
<br><br>

        <hr>
        <footer>
        <span>Created By <a href="">CodeWork</a> | <span class="far fa-copyright"></span> 2022 All rights reserved.</span>
    </footer>

<!-- js is started from here  -->
<script>
  var song=new Audio()
  song.src='yt1s.com - SHOORVEER  A tribute to महरण परतप ज   Rapperiya Baalam Rajneesh Jaipuri  Lyric Video.mp3';

  const playsong =() =>{
    song.play();
  }

  const pausesong =() =>{
    song.pause();
  }
  
</script>
</body>
</html>