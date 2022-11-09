<?php
require_once 'database/article.php';


if (isset($_GET["id"])) {
    $id  = $_GET["id"];
}

$article = get_article_by_id($id);
echo "
            <article>
                 <h1>
                     {$article['title']}
                 </h1>
                 <p>
                 {$article['text']}
</p>
                 <span>{$article['created-by']}</span> / <span>{$article['created-at']}</span>
           </article> <hr>";
?>
