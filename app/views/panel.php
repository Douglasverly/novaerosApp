<div id="panel_conteiner">

<div class="conteudo_panel">
    <?php
    if (isset($data['data']['subTitle'])) :?>
        
<h2><?php $data['data']['subTitle'] ?></h2>
    <?php endif; ?>

<?php
if (isset($data['data']['subView'])) {
    require VIEWS.$data['data']['subView'];
}

?>

</div>


<?php
require VIEWS.'panelPartials/menuPanel.php';
?>
</div>
<?php
?>