<div class="top">
	<img src="../image/icon.png" class="img-responsive" id="icon">
	<div class="container" id="profile">
		<div class="row">
			<div class="col-lg-12 col-md-3 col-sm-3 col-xs-3">
				<?php if(!empty($_SESSION["authenticated"]) && $_SESSION["authenticated"] === TRUE): ?>
				<p class="name">
					<?php echo $user ?>
				</p>
				<a href='logout.php' id='logout'>Logout</a>
				<a href="#"><img src="../image/profile.png" class="img-thumbnail" id="profile-picture" /></a>
				<?php else: ?>
				<a href='signin.php'><input type='button' value='sign-in' class='button' id='sign-in'></a>
				<a href='signup.php'><input type='button' value='sign-up' class='button'></a>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>