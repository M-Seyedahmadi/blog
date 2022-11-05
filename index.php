<?php
require_once 'database/article.php';
?>

<html>
<head>
    <title>Document</title>
</head>
</html>
<body>
    <?php
        $articles = get_articles();
        foreach ($articles as $article) {
            echo "
            <article>
                 <h1>
                     {$article['title']}
                 </h1>
                 <span>{$article['created-by']}</span> / <span>{$article['created-at']}</span>
            </article> <hr>";
        }
    ?>
</body>
</html>
