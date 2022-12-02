

<?php echo getFlash('createAccount');?>
<form action="/user/create" method="post">
	<h2>Criar Conta</h2>
<input type="text" name="name" placeholder="Seu nome">
<?php echo getFlash('name'); ?>
<input type="text" name="email" placeholder="Seu e-mail">
<?php echo getFlash('email'); ?>
<input type="text" name="login" placeholder="Seu login">
<?php echo getFlash('login'); ?>
<input type="password" name="password" placeholder="Sua senha">
<?php echo getFlash('password'); ?>
<button class="button" type="submit">Criar</button>
</form>
