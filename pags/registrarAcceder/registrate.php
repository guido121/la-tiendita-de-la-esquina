<div class="cForm-Acceder">
<div id="registroB">
	<h1 class="title-form" >Bienvenido al registro de usuario</h1>
	<p>Por favor ingrese los datos indicados a continuación.</p>
	<form action="procesos/registrarEmpresa.php" method="post">
		<fieldset>
			<legend>Datos de acceso</legend>
			<p>La clave debe ser mayor a 6 caracteres y no ser su RUC</p>
			<label>Ingrese una clave de acceso:</label>
			<input type="password" name="contrasenia1"/><br/>
			<label>Ingrese nuevamente la clave:</label>
			<input type="password" name="contrasenia2"/>
		</fieldset>

		
		<fieldset>
			<legend>Datos de Jurídicos</legend>
			<label>Razón Social:</label>
			<input type="text" name="razonSoc"/><br/>
			<label>Ruc :</label>
			<input type="text" maxlength="11" name="ruc"/><br/>
			<label>Dirección Fiscal:</label>
			<input type="text" name="dirFiscal"/>
		</fieldset>

		<div class="clear"></div>
		
		<fieldset>
			<legend>Datos de Contacto</legend>
			<label>Correo electrónico:</label>
			<input type="email" name="correo"/><br/>
			<label>Numero de teléfono</label>
			<input type="text" name="telefono"/>
		</fieldset>

		<div class="clear"></div>
		
		<div>
			<input  id="checkbox-registro" type="checkbox" name="contactoViaEmail" value="" />
			<label id="cForm-labelConfirmMedia">Deseo que se contacten conmigo vía correo electrónico.</label>
		</div>
		
		<div class="clear"></div>
		
		<p id="aceptarCondiciones">	Al hacer clic en continuar usted está aceptando los </p>
		<a href=""><p>Terminos y Condiciones</a> y está mostrando estar de acuerdo con la 
		<a href="">Política de Privacidad</a> de La Tiendita de la Esquina.</p>
		
		<div id="btns-registroB">
			<input type="submit" value="Listo"/>
		</div>
		<div>
		<?php if(isset($_SESSION["feedBackRegistro"])){		?>
		<p><?php echo $_SESSION["feedBackRegistro"]?></p>
		<?php 
		unset($_SESSION["feedBackRegistro"]);
		}?>
		</div>
	</form>
</div>
</div>