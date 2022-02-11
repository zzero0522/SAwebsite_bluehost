<?php 
session_start(); 
include "mysqli_connect.inc.php";
$username = @$_SESSION['username'];
?>

<?php
$id = @$_POST['president_vote'];//避免沒選擇候選人出現錯誤訊息
if($username == null)
{
	echo '<script>alert("投票失敗!請先登入喔!");location.href="/SAwebsite/login.php"</script>';
}
else if($id != null)
{
	$sql = "select * from president_voted where id = '$username'";
	$stmt = $db->query($sql);
	$result = mysqli_fetch_object($stmt);
	if($result != null)
	{
		echo '<script>alert("你已參與過此次投票囉，系統將自動跳轉回前頁!");location.href="/SAwebsite/president.php"</script>';
	}
	$sql2 = "insert into president_voted (id) values ('$username')";
	$sql3 = "update president set count = count+1 where id = '$id'";
	if(mysqli_query($db,$sql2) && mysqli_query($db,$sql3))
	{
		echo '<script>alert("投票成功，系統將自動跳轉回前頁!");location.href="/SAwebsite/president.php"</script>';
	}
	else
	{
		echo '<script>alert("投票失敗!");location.href="/SAwebsite/president.php"</script>';
	}				  
}
else
{
	echo '<script>alert("投票失敗，請先選擇候選人!");location.href="/SAwebsite/president.php"</script>';
}
/*else
{
        echo '您無權限觀看此頁面!';
}*/
?>