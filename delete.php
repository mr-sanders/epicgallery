<?php 
	try {
	  $db = new PDO(
	      'mysql:host=localhost;dbname=epic_gallery','root',''
	    );
	} catch (PDOException $e) {
	    echo 'Error:'.$e->getMessage();
	}
	$id = $_GET['id'];
	$stmt = $db->prepare('SELECT * FROM photos WHERE id = :id');
	$stmt->execute(array('id' => $id));
	if($stmt){
		$stmt = $db->prepare('DELETE FROM photos WHERE id = :id');
		$stmt->execute(array('id' => $id));
	} 
 ?>