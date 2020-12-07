<div class="container mt-2 mb-2">
		<div class="row">
			<div class="col-md-6 col-12 col-sm-12 col-lg-4 text-center">
				<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
					<input type="hidden" name="carbonara">
					<img src="img/carbonara.png">
					<h3>Carbonara</h3>
					<h5>Precio: 13.95€</h5>
					<p>
						<button class="btn  my-2 my-sm-0 btn-outline-success" name="encargar" value="Carbonara">Encargar</button>
					</p>
				</form>
			</div>
			<div class="col-md-6 col-12 col-sm-12 col-lg-4 text-center">
				<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
					<input type="hidden" name="extravaganza">
					<img src="img/extravaganza.png">
					<h3>Extravaganza</h3>
					<h5>Precio: 14.50€</h5>
					<p>
						<button class="btn  my-2 my-sm-0 btn-outline-success" name="encargar" value="Extravaganza">Encargar</button>
					</p>
				</form>
			</div>
			<div class="col-md-6 col-12 col-sm-12 col-lg-4 text-center">
				<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
					<input type="hidden" name="bbq">
					<img src="img/bbq.png">
					<h3>BBQ</h3>
					<h5>Precio: 13.45€</h5>
					<p>
						<button class="btn  my-2 my-sm-0 btn-outline-success" name="encargar" value="BBQ">Encargar</button>
					</p>
				</form>
			</div>
		</div>
		<hr style="color: red; background-color: red;"/>

		<h3>Pizza al gusto</h3>
		<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
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
					<input type="checkbox" name="queso" value="queso"> Queso<br>
					<input type="checkbox" name="champiñon" value="champiñon"> Champiñones<br>
					<input type="checkbox" name="bacon" value="bacon"> Bacon<br>
					<input type="checkbox" name="jamon" value="jamon"> Jamon<br>
					<input type="checkbox" name="aceitunas" value="aceitunas"> Aceitunas<br>
					<input type="checkbox" name="pimiento" value="pimiento"> Pimientos<br>
					<input type="checkbox" name="cebolla" value="cebolla"> Cebolla<br>
					<input type="checkbox" name="tomate" value="tomate"> Tomate<br>
					<input type="checkbox" name="kebab" value="kebab"> Cane de kebab<br>
					
				</div>
				
			
			</div>
			<div class="row text-center ">
					<div class="col-12 text-center align-items-center">
						<button class="btn  my-2 my-sm-0 btn-outline-success" name="encargar" value="AlGusto">Encargar</button>
					</div>

				</div>
		</form>
	</div>