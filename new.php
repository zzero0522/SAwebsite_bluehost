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
					<h2>新增提案</h2>
					<a href="vote.php" class="button">放棄提案</a>
				</header>
				
					<form action='new_vote_action.php' method ='post'>
						<h3>提案標題</h3><input type = "text" style="width:350px" placeholder="以20字為限" name = "topic"/><br>
						<h3>提案主文</h3><textarea style="width:350px;height:200px" placeholder="請盡量詳述提案內容" name = "content"></textarea><br>
						<button type = 'submit' class="button">新增提案</button>
					</form>
						
			</div>
		</div>
	<!-- Copyright -->
    <?php include($_SERVER['DOCUMENT_ROOT']."/SAwebsite/template/footer.php"); ?>

	</body>
</html>