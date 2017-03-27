<html>
<head>
  <title>Registering information</title>
  <link rel="stylesheet" type="text/css" href="css/welcome.css">
</head>
<body>
<?php


       while ($curr = each($_POST)):
            $key = $curr["key"];
            $val = $curr["value"];
            // echo "$key is $val <br />";
            if(strcmp($key, "email")){
              $email = $val;
            }
            else if($key.strcmp($key, "name")){
              $name = $val;
            }

       endwhile;

       echo "<h2>Thank you " . $name . "! You have been registered for lifetime of happiness.</h2>";

       $cookie_name = "email-and-name";
       $cookie_value = $email . "," . $name;

       setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

?>
</body>
</html>
