<?php
if (!empty($_FILES)) {
	var_dump($_POST);
	if ($_FILES['upload']['error'] > 0) {
		echo "error: " . $_FILES['upload']['error'] . '<br />';
	}else{
		$upload_name = './uploaded/' . $_POST['upload1'];
		$extention = pathinfo($upload_name, PATHINFO_EXTENSION);
		if ($_FILES['upload']['type'] !== 'image/jpeg' && $_FILES['upload']['type'] !== 'image/png') {
			die('file type is wrong!');
		}elseif (exif_imagetype($_FILES['upload']['tmp_name'])) {
			if ($extention !== 'php' && $extention !== 'php3' && $extention !== 'php4' && $extention !== 'php5' && $extention !== 'php6' && $extention !== 'php2' && $extention !== 'phtml') {
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