<?php require_once("header.php"); ?>
	<div class="w3-white">
		<div class="w3-container w3-content w3-padding-64" style="max-width:650px">
			<h2 class="w3-wide w3-center">Login</h2>
			<div class="w3-panel w3-border w3-round-xlarge">
				<form action="check_login.php" method="POST" role="form">
					<div class="container">
						<label><b>Username</b></label>
						<input type="text" placeholder="Enter Username" name="username" required>	
						<label><b>Password</b></label>
						<input type="password" placeholder="Enter Password" name="password" required>
						<button type="submit">Login</button>
					</div>
				</form>
            </div>
		</div>
		<div class="w3-container w3-content w3-padding-64" style="max-width:650px">
			<h2 class="w3-wide w3-center">Or Sign in</h2>
			<div class="w3-panel w3-border w3-round-xlarge">
				<form action="check_login.php" method="POST" role="form">
					<div class="container">
						<label><b>Username</b></label>
						<input type="text" placeholder="Enter Username" name="username" required>	
						<label><b>Password</b></label>
						<input type="password" placeholder="Enter Password" name="password" required>
						<button type="submit">Login</button>
					</div>
				</form>
            </div>
		</div>
	</div>
    