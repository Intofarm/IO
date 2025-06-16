<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1) {
	    
            $dni = trim($_POST['dni']);
            $name = trim($_POST['name']);
	    $email = trim($_POST['email']);
	    $fechareg = date("dd/mm/yyyy");
            $btc = trim($_POST['btc']);
            $usdt = trim($_POST['usdt']);
            $referencia = trim($_POST['referencia']);
            $cuenta = trim($_POST['cuenta']);
	    $consulta = "INSERT INTO datos(dni, nombre, email, fecha_reg, btc, usdt, referencia, cuenta) VALUES ('$dni', '$name', '$email', '$fechareg', '$btc', '$usdt', '$referencia', '$cuenta')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">You have successfully subscribed!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">Oops, an error has occurred!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">Please complete the fields!</h3>
           <?php
    }
}

?>