<?php
$username = "root";
$password = "";
	try{
		$conn = new PDO('mysql:host=localhost;dbname=epic_gallery', $username, $password);
		$conn -> setAttribute(
			PDO::ATTR_ERRMODE,
			PDO::ERRMODE_EXCEPTION
			);
			$data = $conn->query("SELECT * FROM photos");
			echo "<table>";
			echo "<tr>";
			echo "<th>id</th><th>name</th><th>alt</th><th>title</th><th>created_at</th><th>edit</th><th>delete</th>";
			echo "</tr>";
			$count = 0;	
		 	while($row = $data->fetch(PDO::FETCH_ASSOC)) {
		 		$count++;
			 	echo "<tr>";
			 	echo "<td>".$row['id']."</td>";
				echo "<td>".$row['name']."</td>";
				echo "<td>".$row['alt']."</td>";
				echo "<td>".$row['title']."</td>";
				echo "<td>".$row['created_at']."</td>";
				echo "<td><a href='index.php?action=edit&id=".$row['id']."'>Редактировать</a></td>";
				echo "<td><a href='index.php?action=delete&id=".$row['id']."'>Удалить</a></td>";
			 	echo "</tr>";
			}
			echo "<tr>";
			echo "<td><a href='index.php?action=add'>Добавить</a></td>";
			echo "</tr>";
			echo "</table>";
	} catch(PDOException $e){
		echo 'ERROR:' .$e->getMessage(); 
	}
