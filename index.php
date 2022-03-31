<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Registration Form</h1>
<form action="index-preview.php" method ='post'>
    Name:     <input type="text" name="name"> <br> <br>
    Username:  <input type="text" name="username"> <br> <br>
    Password: <input type="password" name="password" > <br> <br>
    Adress:   <input type="text" name="adress"> <br> <br>
    Country:  <select name="country" >
        <option value="ABD" selected> ABD</option>
        <option value="Turkey"> Turkey</option>
        <option value="England"> England</option>
        <option value="Italy"> Italy</option>
    </select>
    <br> <br>
    ZIP Code: <input type="text" name="zip_code"> <br> <br>
    Email: <input type="text" name="email"> <br> <br>
    Sex: 
    Female <input type="radio" name="sex[]" value="Female"> 
    Male <input type="radio" name="sex[]" value="Male"> <br> <br>
    Language: 
    English <input type="checkbox" name="language[]" value="English">
    French  <input type="checkbox" name="language[]" value="French">
    German <input type="checkbox" name="language[]" value="German">
    <br> <br>
    About: <textarea name="description"  cols="30" rows="5"> </textarea>
    <br> <br>
    <input type="submit" value="Submit">



    <?php
    if(empty($_GET['username']) == false)
    {
        echo "Welcome" .$_GET['username'];
    }
    else {
        echo "1";
    }
    ?>

</body>
</html>