<?php

function saveComment($db, $cat_id, $msg){

    $stmt = $db->prepare("INSERT INTO comments (cat_id,msg) VALUES (:cat,:msg)");
    $stmt->bindValue(':cat',$cat_id);
    $stmt->bindValue(':msg',$msg);

    $stmt->execute();
}


function showComments($db,$cat_id){

    $result = $db->query("SELECT msg FROM comments WHERE cat_id = $cat_id");

    while($row = $result->fetchArray(SQLITE3_ASSOC)){

        echo "<li class='comment'>".htmlspecialchars($row['msg'])."</li>";

    }

}