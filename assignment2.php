<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Currency Calculator</h1>
    <form action="activity6.php" method="post">
    From: <input type="text" name="from" >
    Currency <select name="currency1">
        <option value="USD">US Dollar</option>
        <option value="CAD">Canadian Dollar</option>
        <option value="Euro">Euro</option>
    </select>
    <br> <br>

    To: <input type="text" name="to" >
    Currency <select name="currency2">
        <option value="USD">US Dollar</option>
        <option value="CAD">Canadian Dollar</option>
        <option value="Euro">Euro</option>
    </select>
    <br>
    <br>
    <input type="submit" value="convert">
    </form>
</body>
</html>