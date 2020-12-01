<?php
include 'Templates/cabecera.php';
?>
	<div class="container mt-2 mb-2">
		<div class="row">
			<div class="col-md-6 col-12 col-sm-12 col-lg-4 text-center">
				<form method="POST">
					<input type="hidden" name="carbonara">
					<img src="img/carbonara.png">
					<h3>Carbonara</h3>
					<h5>Precio: 13.95€</h5>
					<p>
						<button class="btn  my-2 my-sm-0 btn-outline-success">Encargar</button>
					</p>
				</form>
			</div>
			<div class="col-md-6 col-12 col-sm-12 col-lg-4 text-center">
				<form method="POST">
					<input type="hidden" name="extravaganza">
					<img src="img/extravaganza.png">
					<h3>Extravaganza</h3>
					<h5>Precio: 14.50€</h5>
					<p>
						<button class="btn  my-2 my-sm-0 btn-outline-success">Encargar</button>
					</p>
				</form>
			</div>
			<div class="col-md-6 col-12 col-sm-12 col-lg-4 text-center">
				<form method="POST">
					<input type="hidden" name="bbq">
					<img src="img/bbq.png">
					<h3>BBQ</h3>
					<h5>Precio: 13.45€</h5>
					<p>
						<button class="btn  my-2 my-sm-0 btn-outline-success">Encargar</button>
					</p>
				</form>
			</div>
		</div>
		<hr style="color: red; background-color: red;"/>

		<h3>Pizza al gusto</h3>
		<form method="POST">
			<div class="row">
			
				<div class="col-md-6 col-12 col-sm-12 col-lg-4"> 
					<h5>Bordes:</h5>
					<input type="radio" id="rellenos" name="bordes" value="Rellenos" checked>
					<label for="rellenos">Rellenos de queso</label><br>
					<input type="radio" id="no-rellenos" name="bordes" value="noRellenos">
					<label for="norellenos">Sin relleno</label><br>
				</div>
				<div class="col-md-6 col-12 col-sm-12 col-lg-4"> 
					<h5>Masa:</h5>
					<input type="radio" id="fina" name="masa" value="fina" checked>
					<label for="fin">Masa Fina</label><br>
					<input type="radio" id="no-rellenos" name="masa" value="gorda">
					<label for="gorda">Masa Gorda</label><br>
				</div>
				<div class="col-md-6 col-12 col-sm-12 col-lg-4"> 
				<h5>Ingredientes:</h5>
					<input type="checkbox" name="Ingredientes" value="queso"> Queso<br>
					<input type="checkbox" name="Ingredientes" value="champiñon"> Champiñones<br>
					<input type="checkbox" name="Ingredientes" value="bacon"> Bacon<br>
					<input type="checkbox" name="Ingredientes" value="jamon"> Jamon<br>
					<input type="checkbox" name="Ingredientes" value="aceitunas"> Aceitunas<br>
					<input type="checkbox" name="Ingredientes" value="pimiento"> Pimientos<br>
					<input type="checkbox" name="Ingredientes" value="cebolla"> Cebolla<br>
					<input type="checkbox" name="Ingredientes" value="tomate"> Tomate<br>
					<input type="checkbox" name="Ingredientes" value="kebab"> Cane de kebab<br>
					
				</div>
				
			
			</div>
			<div class="row text-center ">
					<div class="col-12 text-center align-items-center">
						<button class="btn  my-2 my-sm-0 btn-outline-success">Encargar</button>
					</div>

				</div>
		</form>
	</div>
	<!-- Footer -->
<?php
include 'Templates/footer.php';
?>