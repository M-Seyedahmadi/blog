<?php
require_once '../../database/article.php';

if (isset($_POST['submit'])) {
    $title = $_POST ['title'];
    $text = $_POST ['text'];

    header ("Location:admin/articles-list.php");
}
else {
    echo "<form class='form' method='post'>";
    echo "<br />";
    echo "<input class='submit' type='submit' name='submit' value='update' />";
    echo "<input class='input' type='hidden' name='id' value= 'id' />";
    echo "<input class='text' type='text' name='text' value=''/>";
    echo "<input class='title' type ='title' name ='title' value = ''/>";
    echo "</form>";

}
?>