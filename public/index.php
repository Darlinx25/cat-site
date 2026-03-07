<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
<h1>Hola buenas tardes</h1>
    <?php
 $name = "noname";
 echo "<p>Welcome to the server, $name!</p>";
 echo "<p>Date: " .date('Y-m-d') . "</p>";

?>


<div class="card">
    <strong>
         <a href="dashboard.php">Info de mi PC</a>
    </strong>  
</div>

<div class="card">
    <strong>
        <a href="kitty.php">Cute Kitty?</a>
    </strong>    
</div>

</body>
</html>





 
