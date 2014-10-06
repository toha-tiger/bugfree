<h2>User profile</h2>
<form role="form" method="post">
	<input type="hidden" name="auth" value="profile">
	<div class="form-group">
		<input type="text" class="form-control" name="email" placeholder="email" value="<?php echo $data['email'] ?>">
	</div>
	<div class="form-group">
		<input type="text" class="form-control" name="login" placeholder="login" value="<?php echo $data['login'] ?>">
	</div>	
	<input type="submit" class="btn btn-default">
</form>	