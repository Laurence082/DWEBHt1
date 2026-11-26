<?php
$username = 'Carl';
$pagbati = 'hello. '. $username;
$offers = ['GPU', 10, 200, 300];
$reg_price = 300 * 2;
$offers_price = 100 * 2;
$saving = $reg_price - $offers_price;
?>

<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content=
         <title>TECHSH</title>
         <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <h1>TECHH</h1>
        <nav>
      <a href="index.php">Home</a> | 
      <a href="candy.php">Candy</a> | 
      <a href="about.php">About</a> | 
      <a href="contact.php">Contact</a>
    </nav>

    <p> <?php echo $pagbati, $username?> </p>

    <h2>BUY GPU With 20% dicount</h2>
<div>
    <p>20%</p>
</div>
















    <footer>&copy; <?php echo date('Y')?></footer>
    </body>
   
</html>


