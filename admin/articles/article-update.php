<?php
require_once '../../database/article.php';

if (isset($_POST['submit'])) {
    $update = $_POST ['id'];
    $update = $_POST ['text'];
//    update_articles($id, $text);
}
else {
    $id = $_GET ['id'];
    get_article_by_id($id);
    echo "<form class='form' method='post'>";
    echo "<br />";
    echo "<input class='submit' type='submit' name='submit' value='update' />";
    echo "<input class='input' type='hidden' name='id' value= 'id' />";
    echo "<input class='text' type='text' name='text' value='text'/>";
    echo "</form>";

}
?>