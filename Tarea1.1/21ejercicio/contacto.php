<!-- NOTA: require_once hace que solo podamos incluir ese fichero
una sola vez.
-->

<?php require 'includes/header.php' ?>

<?php echo $texto?>
<p>Contacta con nosotros:</p>

<form method="post" action="">

    <input type="text" name="nombre" />
    <input type="email" name="email" />
    <input type="submit" name="Enviar" />

</form>

<?php require 'includes/footer.php' ?>
