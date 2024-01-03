<?php
  require 'koneksi.php';
  session_start();
?>
<html>
<head>
	<title>DUNIA CEWEK</title>
	<link rel="icon" href="image/logoo.png" sizes="16x16">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div id="content">
		<div class="Header">
			<div class="header-logo">
				<img src="image/logoo.png">
			</div>
			<div class="header-text">
				<h1>DUNIA CEWEK</h1>
				<p>Segala Hal Yang Kamu Cari Ada Disini!</p>
			</div>
		</div>
		<div class="menu">
			<div class="menu-kiri">
				<a href="index.php">Home</a>
        <?php
        if (isset($_SESSION['first_name'])) {
          echo "<a href='dashboard.php'>Dashboard</a>";
        }
        ?>
			</div>
			<div class='menu-kanan'>
				<?php
				$tmp_logout = "logout.php";
				if (isset($_SESSION['first_name'])) {
					$user = $_SESSION['first_name'];
					echo "Admin: ".$user."<a href=".$tmp_logout."> logout</a>";
				}
				else {
						echo "<a href='form_signin.html'>Sign in!</a>";
				}
				?>
			</div>
		</div>
