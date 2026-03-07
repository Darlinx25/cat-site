<?php
error_reporting(E_ALL);
ini_set('display_errors', 2);
require '../db/db.php';
$result = $db->query("SELECT id, img FROM cats WHERE id IN (1,2,3)");

$cats = [];

while ($row = $result->fetchArray()) {
    $cats[$row['id']] = $row;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KITTY!!!</title>
</head>

<body>

    <div class="card">
        <h1>Here is the Kitty!</h1>


        <div>
            <img src="<?php echo $cats[1]['img']; ?>" alt="A very cute kitty"
                style="max-width: 300px; border-radius: 10px;">
        </div>
        <label for="coment">
                Complain
            </label>
        <div>
            <textarea id="comment" rows="4" cols="40" spellcheck=false> </textarea>
        </div>
        <div>
            <strong>
                <button id="comment-btn">Comment</button>
                <h2 id ="respuesta" class="hide">gracias pero da igual xq no se guardar comentarios</h2>
            </strong>
        </div>

    </div>

    <div class="hide card" id="second-kitty">
        <div>
            <img src="<?php echo $cats[2]['img']; ?>" alt="Another kitty"
                style="max-width: 300px; border-radius: 10px;">

        </div>
        <div class="hide" id="third-kitty">
            <img src="<?php echo $cats[3]['img']; ?>" alt="Another kitty"
                style="max-width: 300px; border-radius: 10px;">
        </div>
        <div>
            <strong>
                <button id="less-btn">Nevermind, LESS</button>
                <button id="even_more-btn">EVEN MORE</button>
            </strong>
        </div>

    </div>


    <div class="card">
        <a href="index.php">Go Back?</a>
    </div>

    <div class="card" id="more">
        <button id="more-btn">More?</button>
    </div>

    <script>
        document.getElementById('more-btn').onclick = function () {
            document.getElementById('second-kitty').classList.toggle('hide');
            document.getElementById('more').classList.toggle('hide');

        };

        document.getElementById('less-btn').onclick = function () {
            document.getElementById('second-kitty').classList.toggle('hide');
            document.getElementById('third-kitty').classList.toggle('hide');
            document.getElementById('more').classList.toggle('hide');
            document.getElementById('even_more-btn').classList.toggle('hide');
        };

        document.getElementById('even_more-btn').onclick = function () {
            document.getElementById('third-kitty').classList.toggle('hide');
            document.getElementById('even_more-btn').classList.toggle('hide');

        };

        document.getElementById('comment-btn').onclick = function () {
            document.getElementById('respuesta').classList.toggle('hide');

        };


    </script>




</body>

</html>