<?php
if (!empty($_FILES)) {
	var_dump($_FILES);
	if ($_FILES['upload']['error'] > 0) {
		echo "error: " . $_FILES['upload']['error'] . '<br />';
	}else{
		$upload_name = './uploaded/' . $_FILES['upload']['name'];
		$extention = pathinfo($upload_name, PATHINFO_EXTENSION);
		if ($_FILES['upload']['type'] !== 'image/jpeg' && $_FILES['upload']['type'] !== 'image/png') {
			die('file type is wrong!');
		}elseif (exif_imagetype($_FILES['upload']['tmp_name'])) {
			if ($extention !== 'php' && $extention !== 'php3' && $extention !== 'php4' && $extention !== 'php5') {
			//blacklist
			move_uploaded_file($_FILES['upload']['tmp_name'], $upload_name);	
			}else{
				die('extension is no allowed!');
			}
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