<?php 
header('Content-type: text/html; charset=utf-8');
 ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
	$action = isset($_GET['action']) ? htmlentities($_GET['action']) : 0;
	switch($action){
		case 'list.php':

			break;
		case 'add':
			require 'form.php';
			break;
		case 'edit.php':

			break;
		case 'delete':
			require 'delete.php';
			break;
		default:
			echo "Error 404";
			break;
	}
	 ?>
</body>
</html>