<?php 
header('Content-type: text/html; charset=utf-8');
 ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href="css/gallery.css" media="screen, projection" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/jcarousel.responsive.css" />
	<title>Gallery base</title>
</head>
<body>
	<?php 
	$action = isset($_GET['action']) ? htmlentities($_GET['action']) : 0;
	switch($action){
		case 'list':
			require_once('gallery.php');
			require_once('list.php');

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
			require_once('gallery.php');
			require_once('list.php');
			break;
	}
	 ?>
</body>
</html>