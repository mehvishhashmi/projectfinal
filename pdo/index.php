<?php
	$dsn = 'mysql:host=sql1.njit.edu;dbname=mh449';
	$username = 'mh449';
	$password = 'P8a5oOaq';
	 try{
	 $db = new PDO ($dsn, $username, $password);
	 echo 'we connected the database sucessfully </br>';
	}
	  catch(PDOException $e)

	{
	 echo $e;
	}

	$query = 'select * from products_guitar1;';
	$statement = $db->prepare($query);
	$statement->execute();
	$products = $statement->fetchAll();


?>

<table id='display'>
 <tr>
  <td> productCode</td>
  <td> productName</td>
  <td> listPrice</td>
 </tr>

 <?php
 	foreach($products as $product) {
	?>
	<tr>
	  <td><?php echo $product['productCode'];?></td>
	  <td><?php echo $product['productName'];?></td>
	  <td><?php echo $product['listPrice'];?></td>
	</tr>

	<?php
	}
	?>







