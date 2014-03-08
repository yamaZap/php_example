<?php session_start(); ?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.inc.php");

$id = $_POST['id'];
$pw = $_POST['pw'];


$sql = "SELECT * FROM member where id = '$id'";
$result = mysql_query($sql);
$row = @mysql_fetch_row($result);


if($id != null && $pw != null && $row[0] == $id && $row[1] == $pw)
{
        $_SESSION['username'] = $id;
        echo '登入成功!';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=member.php>';
}
else
{
        echo '登入失敗!';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
}
?>