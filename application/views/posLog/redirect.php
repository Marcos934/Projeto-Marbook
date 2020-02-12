
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<?php foreach ($identificador as $idcli):?> <?php endforeach;?>

<?php echo "Olá, ".$idcli->Nome." Seu login foi um SUCESSO!" ; ?>
<form id="auto_enviar" action="<?php echo base_url() . 'PLogExibirLivrosCI'; ?>" method="POST">
    <input type="hidden" name="identificador" value="<?php echo $idcli->idCLIENTE ?>" />                
</form>

<script>
    window.onload = function () {
        document.getElementById('auto_enviar').submit();
    };

</script>  








