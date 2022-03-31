<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Preview</h1>

    <?php

    echo "Name:";
    if(empty($_POST["name"]) == false)
    {
        echo  $_POST["name"];
        echo "<br>";
    }
    else {
        echo  nl2br ("Not Provided \n ");
    }

    echo "Username:";
    if(empty($_POST["username"]) == false)
    {
        echo  $_POST["username"];
        echo "<br>";
    }
    else {
        echo  nl2br ("Not Provided \n");
    }

    echo "Password:";
    if(empty($_POST["password"]) == false)
    {
        echo $_POST["password"];
        echo "<br>";
    }
    else {
        echo  nl2br ("Not Provided \n");
    }
    echo "Adress:";
    if(empty($_POST["adress"]) == false)
    {
        echo  $_POST["adress"];
        echo "<br>";
    }
    else {
        echo  nl2br ("Not Provided \n");
    }

    echo "Country:";
    if(empty($_POST["country"]) == false)
    {
        $selected = $_POST['country'];
        {
          echo $selected.'<br>';
        }
        echo "<br>";
    }
    else {
        echo  nl2br ("Not Provided \n");
    }

    echo "ZIP Code:";
    if(empty($_POST["zip_code"]) == false)
    {
        echo $_POST["zip_code"];
        echo "<br>";
    }
    else {
        echo  nl2br ("Not Provided \n");
    }

    echo "E-Mail:";
    if(empty($_POST["email"]) == false)
    {
        echo  $_POST["email"];
        echo "<br>";
    }
    else {
        echo  nl2br ("Not Provided \n");
    }

    echo "Sex:";
    if(empty($_POST["sex"]) == false)
    {
        foreach($_POST['sex'] as $value)
        {
          echo $value.'<br>';
        }
        echo "<br>";
    }
    else {
        echo  nl2br ("Not Provided \n");
    }

    echo "Language:";
    if(empty($_POST["language"]) == false)
    {
        foreach($_POST['language'] as $value)
        {
          echo $value.'<br>';
        }
        echo "<br>";
    }
    else {
        echo  nl2br ("Not Provided \n");
    }

    echo "About:";
    if(empty($_POST["description"]) == false)
    {
        echo  $_POST["description"];
       echo "<br>";
    }
    else {
        echo  nl2br ("Not Provided \n");
    }
   /* echo  $_GET['name'];
    echo  $_GET['username'];
      echo  $_GET['adress'];
    echo  $_GET['country'];
    echo  $_GET['zip_code'];
    echo  $_GET['email'];
    echo  $_GET['sex'];
    echo  $_GET['language'];
    echo  $_GET['description'];*/
    ?>

<?php
phpinfo();
</body>
</html>