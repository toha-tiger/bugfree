<?php if(isset($data['result'])): ?>
	<h2><?php echo $data['result']; ?></h2>
<?php endif; ?>
<form role="form" method="post">
	<input type="hidden" name="auth" value="registration">
	<div class="form-group">
		<input type="text" class="form-control" name="email" placeholder="Enter email">
	</div>
	<div class="form-group">
		<input type="text" class="form-control" name="login" placeholder="Enter login">
	</div>	
	<div class="form-group">
		<input type="password" class="form-control" name="pass" placeholder="Enter password">
	</div>
	<input type="submit" class="btn btn-default">
</form>	