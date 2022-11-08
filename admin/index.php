<?php
require_once '../database/article.php';
$connection = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE, DB_PORT);
if($connection -> connect_errno) {
    die("Error in database connection");
}
session_start();
if (isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    if(isset($username) && isset($password)) {
//        $query = "SELECT id FROM users WHERE username='$username' and password='$password'";
//        $result = $connection->query($query);
//        return $result->fetch_assoc();
//        $count= $result->num_rows;

        if ($username == 'mobina' && $password='123') {?>
            <a href="admin/articles-list.php">لیست مطالب</a>
            <a href="admin/article-update.php">ویرایش مطلب</a>
            <a href="admin/article-create.php">ایجاد مطلب</a>
<?php
        } else {
            echo 'please enter username and password';
        }
    }
}
?>

<html>
<head>
    <title>Document</title>
</head>
</html>
<body>
<form name="login" action="" method="post">
    <div style="text-align:center;">Username :&nbsp;<input type="text" name="username"></div></br>
    <div style="text-align:center;">Password :&nbsp;<input type="password" name="password"></div></br>
    <div style="text-align:center;"><input type="submit" name="submit" value="login" style="margin: 0 -64px 2px 115px;"></div>
</form>
</body>
</html>
