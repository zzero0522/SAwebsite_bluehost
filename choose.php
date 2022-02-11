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
					<h2>選擇項目</h2>
				</header>	
				<a href="vote.php" class="button">提案</a><br>
				<a href="president.php" class="button">會長選舉</a>
			</div>
		</div>
	<!-- Copyright -->
    	<?php include($_SERVER['DOCUMENT_ROOT']."/SAwebsite/template/footer.php"); ?>
	</body>
</html>