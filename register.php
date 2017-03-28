<?php
  setcookie("fname", $_POST["fname"], time()+1000000);
  setcookie("lname", $_POST["lname"], time()+1000000);
  setcookie("email", $_POST["email"], time()+1000000);

?>
<!Doctype html>
<html>
  <head>
    <title>QUIZ 2 REGISTER</title>
    <meta name="description" content="Quiz 2 Register">
    <meta name="author" content="Kaitlyn Shields">
    <link href="./css/quiz.css" rel="stylesheet">
  </head>
  <?php
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    echo "<p>Thank you $fname, your data has been submitted</p>";
  ?>
</html>
