<head>
<style>
	#segundabooks-icon{
		width:200px;
		height:75px;
		margin-right:800px;
	}
	#profile-icon{
		width:60px;
		height:50px;
		border-radius:50px;
		margin-top:15px;
	}
	#logout{
		margin-top:0px;
	}
	#full-name{
		line-height:30px;
	}
	#sign-button{
		margin-top:20px;
		margin-bottom:20px;
		margin-left:25px;
	}
</style>
</head>
<div class="container-fluid">
<div class="row">
<img src="../image/icon.png" alt="..." id="segundabooks-icon">
		
		
		<?php if(!empty($_SESSION["authenticated"]) && $_SESSION["authenticated"] === TRUE): ?>
		<img src="../image/profile.png" alt="..." id="profile-icon">
		<div class="col-md" id="full-name">
				<p style="line-height:40px;">
					<?php echo $user["full_name"] ?>
				</p>
				<a href="logout.php" style="color:red;"><p style=margin-top:-10px;>Logout</p></a>
				</div>
				<?php else: ?>
				<div id="sign-button">
					<a href='signin.php'><input type='button' value='sign-in' class='btn btn-info' style="background-color:#6697A7;border:none;"></a>
					<a href='signup.php'><input type='button' value='sign-up' class='btn btn-info' style="background-color:#6697A7;border:none;"></a>
				</div>
				<?php endif; ?>
	</div>
	
</div>

