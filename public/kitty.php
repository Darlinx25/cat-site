<?php
error_reporting(E_ALL);
ini_set('display_errors', 2);
require '../db/db.php';
require '../includes/comments.php';
$result = $db->query("SELECT id, img FROM cats WHERE id IN (1,2,3)");

$cats = [];

while ($row = $result->fetchArray()) {
    $cats[$row['id']] = $row;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['msg'])) {
    $msg = trim($_POST['msg']);
    $cat_id = intval($_POST['cat_id'] ?? 0);
    if ($cat_id > 0 && !empty($msg)) {
        saveComment($db, $cat_id, $msg);
    }

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

        <div class="derecha">
            <div>
                <img src="<?php echo $cats[1]['img']; ?>" alt="A very cute kitty"
                    style="max-width: 300px; border-radius: 10px;">
            </div>
            <ul class="comments" id="comments-1">
                <?php showComments($db, 1); ?>
        </div>




        </ul>

        <label for="comment">
            Complain
        </label>
        <form method="POST" id="comment-form">
            <input type="hidden" name="cat_id" value="1">
            <div>
                <textarea name="msg" id="comment" rows="4" cols="40" spellcheck="false"></textarea>
            </div>

            <div>
                <strong>
                    <button type="submit" id="comment-btn">Comment</button>
                </strong>
            </div>
        </form>
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

    <script src="/js/functions.js"></script>

</body>

</html>