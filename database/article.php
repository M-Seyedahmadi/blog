<?php
require_once 'config.php';

function get_articles()
{
    $connection = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE, DB_PORT);
    if($connection -> connect_errno) {
        die("Error in database connection");
    }
    $limit = 2;
    $offset = 12;
    if (isset($_GET["page"])) {
        $page  = $_GET["page"];
    }
    else{
        $page=1;
    };
    $offset= ($page-1) * $limit;

    $query = "SELECT * FROM article LIMIT " . $limit. " OFFSET " . $offset;
    $result = $connection -> query($query);
    $total_records = $result->num_rows;
    $total_pages = ceil($total_records / $limit);

    $pagLink = "<ul class='pagination'>";
    for ($i=1; $i<=$total_pages; $i++) {
        $pagLink .= "<li class='page-item'><a class='page-link' href='pagination.php?page=".$i."'>".$i."</a></li>";
    }
    echo $pagLink . "</ul>";

    $articles = [];

    if ($result-> num_rows>0) {
        while($row = $result->fetch_assoc()) {
            $articles[] = $row;
        }
    }

    $connection -> close();

    return $articles;

}

