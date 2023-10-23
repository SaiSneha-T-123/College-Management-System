 <?php include("connection.php"); ?>

 <!DOCTYPE html>
 <html>

 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<link rel="stylesheet" type="text/css" href="commentstyle.css">
 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 	<title>Comment System in PHP - Pure Coding</title>
 	<style>
 		.checked {
 			color: orange
 		}
 	</style>
 </head>

 <body>
 	<div class="wrapper">

 		<h2>
 			<center> Comments</center>
 		</h2>

 		<form href="#" class="form">

 			<span class="input-group">
 				<a href='deletefeedback.php?'><span class="input-group"><button class='btn' name='clear' onclick='return checkdelete()'> CLEAR ALL</button></span></a>

 				</a>
 			</span>
 	</div>
 	</form>
 	<script>
 		function checkdelete() {
 			return confirm('Are you sure want to delete?');
 		}
 	</script>
 </body>

 </html>

 <div class="prev-comments">
 	<?php

		$sql = "SELECT * FROM comments";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
			while ($row = mysqli_fetch_assoc($result)) {

		?>
 			<div class="single-item">
 				<h4><?php echo $row['name']; ?></h4>
 				<a href="mailto:<?php echo $row['email']; ?>"><?php echo $row['email']; ?></a>
 				<p><?php echo $row['comment']; ?>
 				</p>
 				<?php
					if ($row['rating'] == '1') {
					?>
 					<span class="fa fa-star checked"></span>
 					<span class="fa fa-star"></span>
 					<span class="fa fa-star"></span>
 					<span class="fa fa-star"></span>
 					<span class="fa fa-star"></span>
 				<?php
					}
					?>
 				<?php
					if ($row['rating'] == '2') {
					?>
 					<span class="fa fa-star checked"></span>
 					<span class="fa fa-star checked"></span>
 					<span class="fa fa-star"></span>
 					<span class="fa fa-star"></span>
 					<span class="fa fa-star"></span>
 				<?php
					}
					?>
 				<?php
					if ($row['rating'] == '3') {
					?>
 					<span class="fa fa-star checked"></span>
 					<span class="fa fa-star checked"></span>
 					<span class="fa fa-star checked"></span>
 					<span class="fa fa-star"></span>
 					<span class="fa fa-star"></span>
 				<?php
					}
					?>
 				<?php
					if ($row['rating'] == '4') {
					?>
 					<span class="fa fa-star checked"></span>
 					<span class="fa fa-star checked"></span>
 					<span class="fa fa-star checked"></span>
 					<span class="fa fa-star checked"></span>
 					<span class="fa fa-star"></span>
 				<?php
					}
					?>
 				<?php
					if ($row['rating'] == '5') {
					?>
 					<span class="fa fa-star checked"></span>
 					<span class="fa fa-star checked"></span>
 					<span class="fa fa-star checked"></span>
 					<span class="fa fa-star checked"></span>
 					<span class="fa fa-star checked"></span>
 				<?php
					}
					?>
 			</div>
 </div>
 </div>
 <?php


			}
		}

	?>