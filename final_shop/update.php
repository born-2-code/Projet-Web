<?php

include 'singleton.php';

if(isset($_GET['thumbnail']) && isset($_GET['Goodie_Name']) && isset($_GET['Goodie_Description']) && isset($_GET['Price']) && isset($_GET['Stock']) && isset($_GET['Sales'])){

	$update = $conn->prepare("UPDATE goodie SET Goodie_Thumbnail = :thumbnail, Goodie_Name = :Goodie_Name, Goodie_Description = :Goodie_Description, Price = :Price, Stock = :Stock, Sales = :Sales WHERE goodie.Id_Goodie = :Id_Goodie;");
	$update->execute(array(
		':thumbnail' => htmlspecialchars($_GET['thumbnail']),
		':Goodie_Name' => htmlspecialchars($_GET['Goodie_Name']),
		':Goodie_Description' => htmlspecialchars($_GET['Goodie_Description']),
		':Price' => htmlspecialchars($_GET['Price']),
		':Stock' => htmlspecialchars($_GET['Stock']),
		':Sales' => htmlspecialchars($_GET['Sales']),
		':Id_Goodie' => htmlspecialchars($_GET['Id_Goodie'])
	));
	
	header('Location: shop_CESI.php');
}


?>