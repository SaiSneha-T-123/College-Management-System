<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
	<script src="https://kit.fontawesome.com/1825bd9b94.js" crossorigin="anonymous"></script>

	<!-- My CSS -->
	<link rel="stylesheet" href="dash2.css">

	<title>AdminHub</title>
</head>

<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">College Management</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="#">
					<i class='bx bxs-dashboard'></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="home.php">
					&nbsp;&nbsp;&nbsp;
					<i class="fa-solid fa-house"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<span class="text">Home</span>
				</a>
			</li>
			<li>
				<a href="about.php">
					<i class='bx bxs-doughnut-chart'></i>
					<span class="text">About</span>
				</a>
			</li>
			<li>
				<a href="contact.php">
					<i class='bx bxs-group'></i>
					<span class="text">Contact Us</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="studfeedback.php">
					<i class='bx bxs-message-dots'></i>
					<span class="text">Feedback</span>
				</a>
			</li>
			<li>
				<a href="home.php" class="logout">
					<i class='bx bxs-log-out-circle'></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu'></i>
			<a href="#" class="nav-link">Categories</a>
		</nav>
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right'></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
			</div>

			<ul class="box-info">
				<li>
					<i class='bx bxs-group'></i>
					<span class="text">
						<p>Rooms</p>
						<button type="submit">
							<a href="rooms.php">
								<h1>Click Here</h1>
							</a>
						</button>
					</span>
				</li>
				<li>
					<i class='bx bxs-group'></i>
					<span class="text">
						<p>Labs</p>
						<button type="submit">
							<a href="labs.php">
								<h1>Click Here</h1>
							</a>
						</button>
					</span>
				</li>
				<li>
					<i class='bx bxs-group'></i>
					<span class="text">
						<p>Others</p>
						<button type="submit">
							<a href="others.php">
								<h1>Click Here</h1>
							</a>
						</button>
					</span>
				</li>
			</ul>


			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->


	<script src="dashscript.js"></script>
</body>

</html>