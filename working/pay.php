<!DOCTYPE html>
<html lang="en">
<head>
	<title>Vehicle Rental</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>
<section class="">
		<?php
			include 'header.php';
		?>
			<section class="caption">
				<h2 class="caption" style="text-align: center">Find Vehicle For Hire</h2>
				<h3 class="properties" style="text-align: center">Scorpio - Ninza ZX 10R - Endeavours</h3>
			</section>
	</section><!--  end hero section  -->
	<section class="listings">
		<div class="wrapper">
			<ul class="properties_list">
				<h3 style="text-decoration: underline">Make Payments Here</h3>
				<form method="post">
					<table>
						<tr>
							<td>Transaction ID:</td>
							<td><input type="text" name="mpesa" required></td>
						</tr>
						<tr>
							<td>UTR Number:</td>
							<td><input type="text" name="utr" required></td>
						</tr>
						<tr>
							<td>Password:</td>
							<td><input type="text" name="id_no" required></td>
						</tr>
						<tr>
							<td colspan="2" style="text-align:right"><input type="submit" name="pay" value="Submit Details"></td>
						</tr>
						<div class="qr"><img class="qr" src="img/QR.png" style="width: 350px;height: 350px;">
						</div>
					</table>
				</form>
				<?php
						if(isset($_POST['pay'])){
							include 'includes/config.php';
							$mpesa = $_POST['mpesa'];
							$utr = $_POST['utr'];
							$id_no = $_POST['id_no'];
							$qry = "UPDATE client SET mpesa = '$mpesa' ,utr = $utr WHERE id_no = '$id_no'";
							$result = $conn->query($qry);
							if($result == TRUE){
								echo "<script type = \"text/javascript\">
											alert(\"Payment Successfully Done. Wait for Admin Approval\");
											window.location = (\"wait.php\")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\"Registration Failed. Try Again\");
											window.location = (\"pay.php\")
											</script>";
							}
						}
					  ?>
			</ul>
		</div>
	</section>	<!--  end listing section  -->
	<footer>
		<div class="wrapper footer">
			<ul>
				<li class="links">
					<ul>
						<li>OUR COMPANY</li>
						<li><a href="About.php">About Us</a></li>
						<li><a href="#">Terms</a></li>
						<li><a href="#">Policy</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</li>
				<li class="links">
					<ul>
					    <li>OUR VEHICLES TYPES</li>
						<li><a href="#">Endeavours</a></li>
						<li><a href="#">Scorpio</a></li>
						<li><a href="#">Baleno</a></li>
						<li><a href="#">Others.</a></li>
					</ul>
				</li>
				<?php include_once "includes/footer.php" ?>