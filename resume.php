<?php 
require_once(./index.php);
require_once(/styles.css);


<html>
	<header style="background-color:#303030; text-align:left;">
		<h1><?php echo "{$_POST["firstname"]} . {$_POST["lastname"]}"; ?></h1>
		<p><?php echo "{$_POST["phonenumber"]}"; echo ". {$_POST["email"]} \n"; echo "{$_POST["address"]}"; ?></p>
		<hr noshade size="4">
	</header>
	<section>
	</section>
</html>

?>
