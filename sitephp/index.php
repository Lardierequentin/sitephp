<?php

require_once 'libs/functions.php';

session_start();
//session_destroy;
// Création d'un tableau
$log = array();

"if(!isset($logpass["log"])) {
       $logpass["log"] = array();
 };

    if(!empty($_POST["email"])) {
        $logpass["log"][] = array(
            "email" => $_POST["email"],
            "password" => $_POST["password"]
      );
    };
       var_dump($logpass);
		  $fp = fopen('liste.csv', 'r');

    foreach($logpass["log"] as $fields) {
	fputcsv($fp, $fields);
		var_dump($fields);
    };
	fclose($fp);"
	
	
?><!DOCTYPE html>
<body>
<form method="post">
              <h1>Email</h1>
              <input type="text" name="email" placeholder="qwert@exemple.com" required>
              <br>
              <h1>Password</h1>
              <input type="password" id="passeword" name="password" minlength="6"
       maxlength="40" size="8" required>
              <a href="dashboard.php"><button>Go To Login</button></a>
</body>
</form>
</html>
