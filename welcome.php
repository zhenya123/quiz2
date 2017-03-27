<?php
$cookie_name = "email-and-name";
?>
<html>
<head>
  <title>Quiz 2</title>
  <link rel="stylesheet" type="text/css" href="css/welcome.css">
</head>
<body>


    <?php if(isset($_COOKIE[$cookie_name])) : ?>
      <?php

        $pieces = explode(",", $_COOKIE[$cookie_name]);
        $name = $pieces[0];
        $email = $pieces[1];
        echo "<h2>Hi, " . $name . "! You recently signed up with the email address: " . $email .  ". Thank you!</h2> ";


      ?>
    <?php else : ?>
      <h1>Questions to help you to understand who you are.</h1>
      <form action = "register.php"
            method = "POST">

      <p>How do people see me differently than I see myself?</p>
      <input type = "text" name = "one" size = "30" maxlength = "30">
      <br>
      <p>What/whom did I make better today?</p>
      <input type = "text" name = "two" size = "30" maxlength = "30">
      <br>
      <p>Am I being true to my values?</p>
      <input type = "text" name = "three" size = "30" maxlength = "30">
      <br>
      <p>If I achieved all of my goals, how would I feel?</p>
      <input type = "text" name = "four" size = "30" maxlength = "30">
      <br>
      <p>What is your email address?</p>
      <input type = "text" name = "email" size = "30" maxlength = "30">
      <br>
      <p>What is your first name?</p>
      <input type = "text" name = "name" size = "30" maxlength = "30">
      <br>

      <input type = "submit" id = "button" value = "Submit">
      </form>
    <?php endif; ?>


</body>
</html>
