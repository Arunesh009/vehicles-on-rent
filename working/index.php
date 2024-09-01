
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Vehicles On Rent</title>
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
				<h2 class="caption" style="text-align: center">Find Vehicles For Hire</h2>
				<h3 class="properties" style="text-align: center">Scorpio - Ninza ZX 10R - Endeavours</h3>
			</section>
	</section><!--  end hero section  -->
	<section class="listings">
		<div class="wrapper">
			<ul class="properties_list">
			<?php
				include 'includes/config.php';
				$sel = "SELECT * FROM cars WHERE status = 'Available'";
				$rs = $conn->query($sel);
				while($rws = $rs->fetch_assoc()){
			?>
				<li>
					<a href="book_car.php?id=<?php echo $rws['car_id'] ?>">
						<img class="thumb" src="cars/<?php echo $rws['image'];?>" width="300" height="200">
					</a>
					<span class="price"><?php echo 'Rs.'.$rws['hire_cost'];?></span>
					<div class="property_details">
						<h1>
							<a href="book_car.php?id=<?php echo $rws['car_id'] ?>"><?php echo 'Car Make>'.$rws['car_type'];?></a>
						</h1>
						<h2>Car Name/Model: <span class="property_size"><?php echo $rws['car_name'];?></span></h2>
						<h2>Owner Mobile: <span class="property_size"><?php echo $rws['mobile'];?></span></h2>
					</div>
				</li>
			<?php
				}
			?>
			</ul>
		</div>
	</section>	<!--  end listing section  -->
	<footer>
		<center><h1>Have a Safe Journey</h1></center>
		<div class="wrapper footer">
			<ul>
				<li class="links">
					<ul>
						<li>OUR COMPANY</li>
						<li><a href="About.php">About</a></li>
						<li><a href="#">Terms</a></li>
						<li><a href="#">Policy</a></li>
						<li><a href="contactus.php">Contact</a></li>
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
				<?php include_once "includes/footer.php"; ?>