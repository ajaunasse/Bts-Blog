	<div class="auth">
		<div class="page-header">
			<h2>Zone admin</h2>
		</div>
		<form action="<?php echo Router::url('users/login'); ?>" method="POST">
			<?php echo $this->Form->input('login', 'Login') ; ?>
			<?php echo $this->Form->input('password', 'password', array('type'=>'password')) ; ?>
	<br />
			<div class="actions">
				<input type="submit" class="btn btn-primary" value="Se connecter !">
			</div>
		</form>
		<br />
		<br />
</div>
