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
    <?php
    
    
        $money['USDEUROFactor'] = 0.9;
        $money['USDCADFactor'] = 1.25;
        $money['EUROUSDFactor'] = 1.11;
        $money['EUROCADFactor'] = 1.38;
        $money['CADUSDFactor'] = 0.8;
        $money['CADEUROFactor'] = 0.72;

        $from = $_POST['from'];
        $too = $_POST['to'];

        $cur1= $_POST['currency1'];
        $cur2 = $_POST ['currency2'];

        
        if($cur1 == "USD" AND $cur2 =="Euro")
        {
           $too= $from * $money['USDEUROFactor'];
          
        }
        if($cur1 == "USD" AND $cur2 =="CAD")
        {
           $too= $from * $money['USDCADFactor'];
          
        }
        if($cur1 == "Euro" AND $cur2 =="USD")
        {
           $too= $from * $money['EUROUSDFactor'];
          
        }
        if($cur1 == "Euro" AND $cur2 =="CAD")
        {
           $too= $from * $money['EUROCADFactor'];
          
        }
        if($cur1 == "CAD" AND $cur2 =="Euro")
        {
           $too= $from * $money['CADEUROFactor'];
          
        }
        if($cur1 == "CAD" AND $cur2 =="USD")
        {
           $too= $from * $money['CADUSDFactor'];
          
        }
        if($cur1 == "USD" AND $cur2 =="USD")
        {
           $too= $from;
          
        }
        if($cur1 == "CAD" AND $cur2 =="CAD")
        {
           $too= $from ;
          
        }
        if($cur1 == "Euro" AND $cur2 =="Euro")
        {
           $too= $from * $money['CADUSDFactor'];
          
        }
        

    ?>
    
    <form action="activity6.php" method="post">
    From: <input type="text" name="from"  value = <?php echo $from ?> >
    Currency <select name="currency1" >
        <option value="USD" <?php if ($cur1 == "USD") echo 'selected="selected"' ?>>US Dollar</option>
        <option value="CAD" <?php if ($cur1 == "CAD") echo 'selected="selected"' ?>>Canadian Dollar</option>
        <option value="Euro" <?php if ($cur1 == "Euro") echo 'selected="selected"' ?>>Euro</option>
    </select>
    <br> <br>

    To: <input type="text" name="to" value= <?php echo $too ?>  >
    Currency <select name="currency2" >
        <option value="USD" <?php if ($cur2 == "USD") echo 'selected="selected"' ?>>US Dollar</option>
        <option value="CAD"<?php if ($cur2 == "CAD") echo 'selected="selected"' ?>>Canadian Dollar</option>
        <option value="Euro"<?php if ($cur2 == "Euro") echo 'selected="selected"' ?>>Euro</option>
    </select>
    <br>
    <br>
    <input type="submit" value="convert">
    
    </form>
</body>
</html>