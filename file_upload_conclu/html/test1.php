<?php
if (!empty($_FILES)) {
	var_dump($_FILES);
	if ($_FILES['upload']['error'] > 0) {
		echo "error: " . $_FILES['upload']['error'] . '<br />';
	}else{
		$upload_name = './uploaded/' . $_FILES['upload']['name'];
		if ($_FILES['upload']['type'] !== 'image/jpeg' && $_FILES['upload']['type'] !== 'image/png') {
			die('file type is wrong!');
		}elseif (exif_imagetype($_FILES['upload']['tmp_name'])) {
			var_dump(exif_imagetype($_FILES['upload']['tmp_name']));
			move_uploaded_file($_FILES['upload']['tmp_name'], $upload_name);	
		}else{
			die('exif_imagetype thought file type is wrong!');
		}
	}
}else{
?>
	<form action="#" method="POST" enctype="multipart/form-data">
	<input type="file" name="upload"> 
	<input type="submit" name="upload1">
	</form>
<?php
}
?>

<!-- ["upload"]=>
  array(5) {
    ["name"]=>
    string(10) "shell1.php"
    ["type"]=>
    string(17) "application/x-php"
    ["tmp_name"]=>
    string(14) "/tmp/php1fBxCw"
    ["error"]=>
    int(0)
    ["size"]=>
    int(29) -->