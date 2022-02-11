<?php session_start(); ?>
<?php
//將session清空
unset($_SESSION['username']);
echo '<h1>登出中......</h1>';
echo '<meta http-equiv=REFRESH CONTENT=1;url=choose.php>';
?>