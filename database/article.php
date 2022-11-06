<?php
require_once 'config.php';

function get_articles($page, $limit)
{
    $connection = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE, DB_PORT);
    if($connection -> connect_errno) {
        die("Error in database connection");
    }

    $offset= ($page-1) * $limit;
    $totalQuery = "SELECT COUNT(*) AS total FROM article";
    $query = "SELECT * FROM article LIMIT " . $limit. " OFFSET " . $offset;
    $result = $connection -> query($query);
    $totalCount = $connection -> query($totalQuery)->fetch_assoc();

    $total_records = $result->num_rows;
    $total_pages = ceil($totalCount['total'] / $limit);

    $pagLink = "<ul class='pagination'>";
    for ($i=1; $i<=$total_pages; $i++) {
        $pagLink .= "<li class='page-item'><a class='page-link' href='index.php?page=".$i."'>".$i."</a></li>";
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

