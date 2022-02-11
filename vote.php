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
					<h2>現有提案</h2>
					<a href="new.php" class="button">我要新增提案</a>
					<?php
						if($username == null)
						{
							echo"<a href='login.php' class='button'>登入</a>";
						}
						else
						{
							echo"<a href='logout.php' class='button'>登出</a>";
						}
					?>
				</header>
				<div class="row">
					<?php
						$query = "SELECT * FROM proposal ORDER BY 'id'";
						$i = 0;
						if($stmt = $db->query($query))
						{
							while($result=mysqli_fetch_object($stmt))
							{
								$arr[$i]=$result->id;
								echo "<div class='3u'>";
								echo "	<section>";
								echo "		<img src='/SAwebsite/images/ntousa_demo.png' class='image full'/>";
								echo "		<p>".$result->topic."</p>";
								echo "		<p>目前連署人數： ".$result->count." 人</p>";
								echo "		<a href='ntousa_vote.php?topic_ID=".$arr[$i]."' class='button'>提案 ".$arr[$i]." 詳情</a>";
								echo "	</section>";
								echo "</div>";
								$i++;
							}
						}
					?>
				</div>			
			</div>
		</div>
	<!-- Copyright -->
    <?php include($_SERVER['DOCUMENT_ROOT']."/SAwebsite/template/footer.php"); ?>
	</body>
</html>