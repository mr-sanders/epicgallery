<form enctype="multipart/form-data" method="POST">
<p><input type="file" name="photo" value="file"></p>
<p><input type="text" name="alt" value="alt"></p>
<p><input type="text" name="title" value="title"></p>
<input type="submit" name="submit" value="Submit">
</form>
<?php
$uploads_dir = __DIR__ . '/data/' . $_FILES['photo']['name'];
move_uploaded_file ($_FILES['photo']['tmp_name'], $uploads_dir);
$conn = new PDO (
'mysql:host=localhost;dbname=epic_gallery;charset=utf8','root', '');
$conn->setAttribute(
PDO::ATTR_ERRMODE,
PDO::ERRMODE_EXCEPTION
);
if (!empty($_POST)) {
$stmt = $conn->prepare('INSERT INTO photos(name, alt, title) VALUES (:name, :alt, :title)');
$stmt->execute(array(
':alt' => $_POST['alt'],
':title' => $_POST['title'],
':name' => $_FILES['photo']['name'],
));
}

?>