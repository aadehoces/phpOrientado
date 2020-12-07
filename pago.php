<?php
if ($_POST) {
	if (isset($_POST['pago'])) {
		include 'Templates/cabecera.php';
?>
<div class="container">
	<div class="row">
		<div class="col-12 border mt-2 mb-2 p-2 ">
			<h2>Pedido Realizado</h2>
			<p>Su pedido será enviado a: <?php echo $Cliente->getDireccion()?></p>
			<p>El pedido llegará a las <?php echo date("H:i:s", strtotime("+30 minutes"));?></p>
			<form method="POST" action="index.php">
				<button class="btn  my-2 my-sm-0 bg-success mr-2" name="confirmar">Confirmar</button>	
			</form>
			
		</div>
	</div>
</div>
<footer class="page-footer font-small bg-dark pt-4 fixed-bottom">
	<?php
include 'Templates/footer2.php';
	
	}else{
		header('Location: index.php');
	}
}
?>