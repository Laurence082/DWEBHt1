<?php
$user = 'carl';
$greet = 'Welcome';

if (empty ($greet)) {
    $greet . $user;
}

$product = 'GPU';
$cost = '20000';
$total =array()

for ($counter = 1; $counter - 1; $counter++) { 
    $subtotal = $cost * $counter;
    $discount = [$cost / 200 ] * [$counter * 10];
    $total = $subtotal - $discount;
}    



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


    
        <footer>&copy; <?php echo date('Y')?></footer>
    </body>
   
</html>




