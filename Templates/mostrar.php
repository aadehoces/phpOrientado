<?php
//comprueba cntidad de productos en el carrito
if ($Cliente->contarPizzas()==0) {?>
	<div class="container">
		<div class="row">
			<div class="col-12 border mt-2 mb-2 p-2 ">
				<h2>Pizzas</h2>
				<p>No hay nada en el carrito</p>
				<a href="index.php" class="btn  my-2 my-sm-0 bg-primary mr-2">Ir a comprar</a>
			</div>
		</div>
		
	</div>
	<footer class="page-footer font-small bg-dark pt-4  fixed-bottom">
<?php
//muestra carrito
}else {?>
	<div class="container">
		<div class="row">
			<div class="col-12 border mt-2 mb-2 p-2 ">
				<table class="table table-striped">
				  <thead>
				    <tr>
				      <th scope="col">Id</th>
				      <th scope="col">Nombre</th>
				      <th scope="col">Masa</th>
				      <th scope="col">Bordes</th>
				      <th scope="col">Ingredientes</th>
				      <th scope="col">Precio</th>
				      <th scope="col"></th>
				    </tr>
				  </thead>
				  <tbody>
				    
				   				  
				<h2>Pizzas</h2><?php
				$pizzas=$Cliente ->getpizzas();
				$total=0;
				settype($total, "float");
				foreach ($pizzas as $key => $value) {?>
					
					<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
					<input type="hidden" name="id" value="<?php echo $value->getId(); ?>">
						<?php
					echo "<tr><th scope='row'>".$value->getId()."</th>
				      <td>".$value->getNombre()."</td>
				      <td>".$value->getMasa()."</td>
				      <td>".$value->getBorde()."</td>
				      <td>";
				      $Ingredientes=$value->getIngredientes();
				      foreach ($Ingredientes as $key2 => $Ingrediente) {
						echo $Ingrediente." ";
					};
					echo "</td>
				      <td>".$value->getPrecio()."€";
					echo "</td>
				      <td><button class='btn  my-2 my-sm-0 bg-danger mr-2' name='eliminar'>Eliminar</button>";
				    echo "</td>
				    </tr>";
				    $Precio=$value->getPrecio();
				    settype($Precio, "double");
					$total=$total+$Precio;
					
					?>
				</form>
				<?php
				}
				?>
				<td colspan="4"></td>
				<td class="text-right">Total:</td>
				<td colspan="2"><?php echo $total."€"?></td>
				</tbody>
				</table>
				<br>
				<form action="pago.php" method="POST">
					<button class="btn  my-2 my-sm-0 bg-primary mr-2" name="pago">Pagar</button>
				</form>
				
			</div>
		</div>
		
	</div>
	<footer class="page-footer font-small bg-dark pt-4">
<?php
}
?>