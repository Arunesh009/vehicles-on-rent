<!--Dsahboard page-->
<!DOCTYPE html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Admin Home</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<script type="text/javascript">
		function sureToApprove(id) {
			if (confirm("Are you sure you want to delete this message?")) {
				window.location.href = 'delete_msg.php?id=' + id;
			}
		}
	</script>
</head>
<body>
	<div id="header">
		<div class="shell">
			<?php
			include 'menu.php';
			?>
		</div>
	</div>
	</div>
	<div id="container">
		<div class="shell">
			<div class="small-nav">
				<a href="index.php">Dashboard</a>
				<span>&gt;</span>
				Client Messages
			</div>
			<br />
			<div id="main">
				<div class="cl">&nbsp;</div>
				<div id="content">
					<div class="box">
						<div class="box-head">
							<h2 class="left">Client Messages</h2>
						</div>
						<div class="table">
							<table width="100%" border="0" cellspacing="0" cellpadding="0">
								<tr>
									<th width="13"><input type="checkbox" class="checkbox" /></th>
									<th>Message Content</th>
									<th>Time Send</th>
									<th>Status</th>
								</tr>
								<?php
								include '../includes/config.php';
								$select = "SELECT * FROM message";
								$result = $conn->query($select);
								while ($row = $result->fetch_assoc()) {
									?>
									<tr>
										<td><input type="checkbox" class="checkbox" /></td>
										<td>
											<h3><a href="#">
													<?php echo $row['message'] ?>
												</a></h3>
										</td>
										<td>
											<?php echo $row['time'] ?>
										</td>
										<td><a href="#">
												<?php echo $row['status'] ?>
											</a></td>
									</tr>
									<?php
								}
								?>
							</table>
						</div>
						<h2><input type="submit" onclick="window.print()" value="Print Here" /></h2>
					</div>
				</div>
				<div class="cl">&nbsp;</div>
			</div>
		</div>
	</div>
	<div id="footer">
		<div class="shell">
			<span class="left">&copy;
				<?php echo date("Y"); ?> - ARUNESH
			</span>
			<span class="right">
				Design by <a href="#">Arunesh Soni</a>
			</span>
		</div>
	</div>
</body>
</html>