<?php
if(!isset($logpass["log"])) {
        $logpass["log"] = array();
    };

    if(!empty($_POST["email"])) {
        $logpass["log"][] = array(
            "email" => $_POST["email"],
            "password" => $_POST["password"]
        );
    };
 //       var_dump($logpass);

    $fp = fopen('liste.csv', 'a');

    foreach($logpass["log"] as $fields) {
        fputcsv($fp, $fields);
		var_dump($fields);
		};
    fclose($fp);
?><!DOCTYPE html>
<html>
<head>
<title>Register </title>
<link rel="stylesheet" href="style.css" />
</head>
<body>
<p22>Register: </p22> </br>
<form method="post">
<p>Email: <input type="text" name="email" required> </p>
<h1>Password</h1>
<input type="password" id="passeword" name="password" minlength="6"
       maxlength="40" size="8" required>
 <h2>Password 2nd </h2>
<input type="password" id="passeword" name="password2" minlength="6"
       maxlength="40" size="8" required>
<input type="Submit" value="Submit" > </br> </br>
<p23> Already a member? <a href="index.php">click to login </a> </p23>
</form>
</body>

</html>
