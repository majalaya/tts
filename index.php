<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   <script src="main.js"></script>
   <link rel="stylesheet" href="style.css">
   <title>Text to Speech</title>
</head>
<body>
   <div class="logo">
      <img src="logo.png">
   </div>
   <form method="post" action="synethize.php" class="formContainer">
      <h2 class="title">Text to speech</h2>
      <div class="tip">
         Online text to speech web application that converts any written text into spoken words
      </div>
      <label for="language">Language</label>
      <select id="language"></select><br>
      <label for="voice">Voice</label>
      <select id="voice" name="voice"></select><br>
      <label for="text">Text</label>
      <textarea id="text">What is your name?</textarea><br>
      <input id="submit" type="button" value="SYNTHESIZE">
      <div id="result"></div>
      <div class="copy">&copy; 2022 - Devisty</div>
   </form>
</body>
</html>