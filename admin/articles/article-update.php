<?php
require_once '../../database/article.php';

if (isset($_POST['submit'])) {
    $update = $_POST ['id'];
    $update = $_POST ['title'];
    $update =  $_POST['text'];
//    update_articles($id, $text);
}
else if (isset($_GET ['id'])) {
    $id = $_GET ['id'];
    $article = get_article_by_id($id);
    echo "<form class='form' method='post'>";
    echo "<br />";
    echo "<input class='submit' type='submit' name='submit' value='update' />";
    echo "<input class='input' type='hidden' name='id' value= 'id' />";
    echo "<input class='text' type='text' name='text' value={$article['text']}/>";
    echo "<input class='title' type ='title' name ='title' value = {$article['title']}/>";
    echo "</form>";

} else {
    header ("Location:/admin/articles/articles-list.php");
}
?>