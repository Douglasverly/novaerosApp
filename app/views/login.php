


<form action="/login" method="POST">
	<h2>Login</h2>
	<?php echo getFlash('createAccount','color:yellowgreen;fonte-size:15px;font-weight: 700;');?>
	<input type="text" name="login"placeholder="Seu login">
	<input type="password" name="password"placeholder="Sua senha">
	<?php echo getFlash('message'); ?>
	<button class="button" type="submit">Entrar</button>
	<p>Clique <a href="/user/create">aqui</a> para criar a conta.</p>
</form>
