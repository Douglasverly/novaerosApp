<div class="data_user">
    <h3><?php echo $data['data']['subTitle'];?></h3>
    <?php 
    $usuario=$_SESSION[LOGGED];
?>
    <div ><label>Nome</label> <?php echo $usuario->name;?></div>
    <div ><label>E-mail</label> <?php echo $usuario->email;?></div>
    <div ><label>Status</label> <?php echo $usuario->status;?>,&emsp;  restam
    <?php
    $dias_restantes=vip_validate($usuario);
    echo $dias_restantes;
    ?>
    dias
    </div>
    <?php $data_login=new DateTime($usuario->data_logged)?>
    <div ><label>Ultimo Login</label> <?php echo   $data_login->format('d/m/Y H:i:s');?></div>
    <a href="#">Alterar Senha</a>
    <a href="#"style="color:red;">Deletar Conta</a>
<?php ?>
</div>
