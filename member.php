<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.inc.php");

echo '<a href="logout.php">登出</a>  <br><br>';

if($_SESSION['username'] != null)
{
        echo '<a href="update.php">修改</a>    ';
        echo '<a href="delete.php">刪除</a>  <br><br>';
    
        $sql = "SELECT * FROM member";
        $result = mysql_query($sql);
        while($row = mysql_fetch_row($result))
        {
                 echo "<b>帳號：</b>".$row[0]." <b>姓名：</b>".$row[2]." <b>介紹：</b>".$row[3]."<br>";
        }


        
}
else
{
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}
?>