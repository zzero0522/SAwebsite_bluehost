<?php 
session_start(); 
include "mysqli_connect.inc.php";
$username = @$_SESSION['username'];
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
	<body>
	<!-- Header -->
		<?php include($_SERVER['DOCUMENT_ROOT']."/SAwebsite/template/header.php"); ?>
	<!-- Header -->
			
	<!-- Main -->
		<div id="main">
			<div class="container">
				<header>
					<h2>第99屆學生會正副會長選舉</h2>
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
				
					<?php
						$query = "SELECT * FROM president ORDER BY 'id'";
						if($stmt = $db->query($query))
						{
							echo "	<form action='president_action.php' method ='post'>";
							while($result=mysqli_fetch_object($stmt))
							{
								echo "<table border='5' class='bow' id='bowzzz'>";
								echo "	<tr><th colspan = '3'>第 ".$result->id." 號候選人</th></tr>";
								echo "	<tr><th>會長</th><th>行政副會長</td><th>活動副會長</th></tr>";
								echo "	<tr><td><img src='/SAwebsite/images/president_demo.jpg' class='image full'/></td><td><img src='/SAwebsite/images/president_demo.jpg' class='image full'/></td><td><img src='/SAwebsite/images/president_demo.jpg' class='image full'/></td></tr>";
								echo "	<tr><td>".$result->name_1."</td><td>".$result->name_2."</td><td>".$result->name_3."</td></tr>";
								echo "	<tr><td>".$result->department_1."</td><td>".$result->department_2."</td><td>".$result->department_3."</td></tr>";		
								echo "	<tr><td><input type = 'radio' name='president_vote' value='".$result->id."'>支持 ".$result->id." 號候選人</td></tr>";	
								echo "</table>";
							}
							echo "<button type = 'submit' class='button'>確認投票</button>";
							echo "</form>";
						}
					?>			
			</div>
		</div>
	<!-- Copyright -->
    <?php include($_SERVER['DOCUMENT_ROOT']."/SAwebsite/template/footer.php"); ?>

	</body>
</html>