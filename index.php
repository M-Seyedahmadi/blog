<?php
require_once 'database/article.php';
?>

<html>
<head>
    <title>Document</title>
</head>
</html>
<body>
<div>
    <a href="admin/index.php">ورود ادمین</a>
</div>
    <?php
    $limit = 2;
    if (isset($_GET["page"])) {
        $page  = $_GET["page"];
    }
    else{
        $page=1;
    };
        $articles = get_articles($page, $limit);
        foreach ($articles as $article) {
            echo "
            <article>
            <a href='details.php?id={$article['id']}' >
                 <h1>
                     {$article['title']}
                 </h1>
                 <span>{$article['created-by']}</span> / <span>{$article['created-at']}</span>
           </a> </article> <hr>";
        }
    ?>
</body>
</html>
