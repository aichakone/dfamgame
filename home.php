<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Memory Game</title>
    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap"
      rel="stylesheet"
    />
    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css" />
    <style>
      #score{
        color: #ffffff;
        font-size: 22px;
        padding: 15px;
        display:flex;
        margin-left:-100px;
      }
      h1{
  text-align: center;
  color: #ffffff;
  padding: 10px;
  margin-left:50px;


}
      </style>
  </head>
  <body>
    <h1>Memory Game</h1>
    <div class="wrapper">
      <div class="stats-container">
        <div id="moves-count"></div>
        <div id="time"></div>
      </div> 
      <div id="score"></div>
      <div class="game-container"></div>
      <button id="stop" class="hide">Stop Game</button>
    </div>
    <div class="controls-container">
      <p id="result"></p>
      <button id="start">Start Game</button>
    </div>
    <!-- Script -->
    <script src="script.js"></script>
  </body>
</html>
<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>