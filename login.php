<?php
include('server/login.php');
include('head.php');
?>

<div class="container">


	<form method="post" class="form" action="login.php" style="width:500px;margin-top:50px">

		<?php
		if (count($errors) > 0) : ?>
			<div class="error">
				<?php foreach ($errors as $error) : ?>
					<p><?php echo $error ?></p>
				<?php endforeach ?>
			</div>
		<?php
		endif
		?>
		<div class="row">
			<div class="col-25">
				<label>Log in info</label>
			</div>
		</div>
		<div class="row">
			<div class="col-25">
				<label for="username">Username</label>
			</div>
			<div class="col-75">
				<input type="text" name="username" value="<?php echo $username; ?>" id="username">
			</div>
		</div>

		<div class="row">
			<div class="col-25">
				<label for="Password" class="form-label">Password</label>
			</div>
			<div class="col-75">
				<input type="password" name="password" id="Password">
			</div>
		</div>

		<div class="row">
			<div class="col-75">
				<input type="submit" name="login_user" value="Login">
			</div>
		</div>



		<p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p>
	</form>
</div>
<?php include('footer.php') ?>