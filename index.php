<!DOCTYPE html>
<html>
<head>
	<title>Sign Up User</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="post">
    	<h1>Subscribe!</h1>
        
        <input type="number" name="dni" placeholder="DNI/ID">
        
        <input type="text" name="name" placeholder="Full Name">
        
        <input type="email" name="email" placeholder="Email">
        
        <input type="text" name="btc" placeholder="Wallet BTC">
        
        <input type="text" name="usdt" placeholder="Wallet USDT(TRC20)">
        
        <input type="number" name="referencia" placeholder="Rerefence">
        
        <input type="text" name="cuenta" placeholder="Type Account">
        <nav><ol class="account">        
        <input type="radio" id="Ranch" name="fav_language" value="HTML">
        <label for="ranch">Ranch</label>
        <input type="radio" id="Chacra" name="fav_language" value="CSS">
        <label for="css">Chacra</label>
        <input type="radio" id="Standard" name="fav_language" value="JavaScript">
        <label for="javascript">Standard</label>
        <input type="radio" id="Classic" name="fav_language" value="CSS">
        <label for="css">Classic</label>
        <input type="radio" id="Poultry" name="fav_language" value="CSS">
        <label for="css">Poultry</label>
        <input type="radio" id="Premium" name="fav_language" value="CSS">
        <label for="css">Premium</label>
    	<input type="submit" name="register">
        </ol></nav>
        <section>
  
  
    </form>
        <?php 
        include("registrar.php");
        ?>
</body>
</html>