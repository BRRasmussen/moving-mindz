<?php
	$servername ="mysql.movingmindz.org";
	$username = "movingmindz";
	$password = "Mov1ngm1ndz";
	$dbname = "mmzOrgSignup";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // insert some test data into table using phpmyadmin
    // change mmzOrgSignup to mmzorgsignup after first test
    // additional note camelCase is no bueno for database
    // Using_underlines is muy bueno
    $result = $conn->query("SELECT * FROM mmzOrgSignup")

    foreach($result as $row){
        echo("<p>");
        foreach($row as $field){
            echo($field . " ");
        }
        echo("</p>");
    }
?>