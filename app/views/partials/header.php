<ul id="menu_list">
	<li><a href="/" id="logo_menu"></a></li>
	<li><a href="/" class="menu_list_a">Home</a></li>
	<?php if (!logged()): ?>
	
	<li><a href="/login"class="menu_list_a">Login</a></li>
	<li><a href="/user/create"class="menu_list_a">Cadastro</a></li>
<?php else: ?>
	<li><a href="/panel"class="menu_list_a">Painel</a></li>
	<li><a href="/maintenance"class="menu_list_a">Sistema</a></li>
<?php 	endif; ?>

</ul>


<div id="status_login">
	Bem vindo
<?php if (logged()): ?>
	<?php echo user()->name; ?> | <a href="/logout">Logout</a>
<?php else: ?>
	, Visitante
<?php endif; ?>
</div>