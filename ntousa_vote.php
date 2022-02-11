<?php 
session_start(); 
include "mysqli_connect.inc.php";
$username = $_SESSION['username'];
?>
<html>
<head>
	<title>NTOUSA Voting System</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href='https://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="/SAwebsite/js/skel.min.js"></script>
		<script src="/SAwebsite/js/skel-panels.min.js"></script>
		<script src="/SAwebsite/js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="/SAwebsite/css/skel-noscript.css" />
			<link rel="stylesheet" href="/SAwebsite/css/style.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
</head>
	<body class="homepage">

	<!-- Header -->
		<?php include($_SERVER['DOCUMENT_ROOT']."/SAwebsite/template/header.php"); ?>
	<!-- Header -->
			
	<!-- Main -->
		<div id="main">
			<div class="container">
				<header>
					<?php
						$id = $_GET['topic_ID'];
						$query = "SELECT * FROM proposal WHERE id ='$id'";
						if($stmt = $db->query($query))
						{
							while($result=mysqli_fetch_object($stmt))
							{
								echo "<h2>這是投票系統第 $id 號提案</h2>";
								echo "</header>";
								echo "<h2>提案主題：".$result->topic."</h2>";
								echo "<h3>提案主文：".$result->content."</h3>";
								echo "<label>現有連署人數：".$result->count." 人</label>";
								echo "<form action='vote_action.php' method ='post'>";
								echo "<input type = 'hidden' name='id' value = '$id'>";
								echo "<button type = 'submit' class='button'>連署</button></form>";
							}	
						}
					?>
				<input type = "button" value = "取消" class='button' onclick = "location.href='vote.php'"/>
			</div>
		</div>
	<!-- Copyright -->
    <?php include($_SERVER['DOCUMENT_ROOT']."/SAwebsite/template/footer.php"); ?>
	</body>
</html>