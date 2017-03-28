<!Doctype html>
<html>
  <head>
    <title>QUIZ 2 WELCOME</title>
    <meta name="description" content="Quiz 2 Welcome">
    <meta name="author" content="Kaitlyn Shields">
    <link href="./css/quiz.css" rel="stylesheet">
  </head>
  <body>
    <h2>Welcome to my Form</h2>
    <form action="register.php" method="POST">
      <p>First Name: <input type = "text" name = "fname" size = "30"></p><br>
      <p>Last Name: <input type = "text" name = "lname" size = "30"></p><br>
      <p>Email: <input type = "text" name = "email" size = "36"></p><br>
      <center><input type = "submit" value = "Submit"><center>
    </form>
    <br>
    <br>
    <?php
      if(isset($_COOKIE["fname"]) && isset($_COOKIE["email"]))
      {
        echo "<p>Hi, " . $_COOKIE["fname"] . " you recently signed up with the email address: " .  $_COOKIE['email'] . ", thank you!</p>";
      }
    ?>

</body>
</html>
