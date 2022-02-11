<?php session_start(); 
include "mysqli_connect.inc.php";
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php


$id = $_POST['id'];
$pw = $_POST['pw'];
$pw2 = $_POST['pw2'];

//判斷帳號密碼是否為空值
//確認密碼輸入的正確性
if($id != null && $pw != null && $pw2 != null && $pw == $pw2)
{
        //新增資料進資料庫語法
        $sql = "insert into member (id, pw) values ('$id', '$pw')";
        if(mysqli_query($db,$sql))
        {
                echo '<script>alert("註冊成功!");location.href="/SAwebsite/login.php"</script>';
        }
        else
        {
                echo '<script>alert("註冊失敗!");location.href="/SAwebsite/register.php"</script>';
        }
}
else if($pw != $pw2)
{
	echo '<script>alert("請確認密碼輸入相同!");location.href="/SAwebsite/register.php"</script>';
}
else
{
        echo '<script>alert("請確認填寫所有表格!");location.href="/SAwebsite/register.php"</script>';
}
?>