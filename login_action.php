<?php session_start(); 
include "mysqli_connect.inc.php";//只要此頁面上有用到連接MySQL就要include它
?>
<!--上方語法為啟用session，此語法要放在網頁最前方-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//連接資料庫


$id = $_POST['id'];
$pw = $_POST['pw'];

//搜尋資料庫資料
$query = "SELECT * FROM member where id = '$id'";
$stmt = $db->query($query);
$result = mysqli_fetch_row($stmt);

//判斷帳號與密碼是否為空白
//以及MySQL資料庫裡是否有這個會員
if($id != null && $pw != null && $result[0] == $id && $result[1] == $pw)
{
        //將帳號寫入session，方便驗證使用者身份
        $_SESSION['username'] = $id;
        echo '<script>alert("登入成功!");location.href="choose.php"</script>';
}
else
{
        echo '<script>alert("登入失敗!");location.href="login.php"</script>';
}
?>