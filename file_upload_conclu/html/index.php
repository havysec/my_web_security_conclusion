<?php
if (!empty($_FILES)) {
	var_dump($_FILES);
	if ($_FILES['upload']['error'] > 0) {
		echo "error: " . $_FILES['upload']['error'] . '<br />';
	}else{
		$upload_name = './uploaded/' . $_FILES['upload']['name'];
		move_uploaded_file($_FILES['upload']['tmp_name'], $upload_name);
	}
	
}else{
?>
	<script type="text/javascript">
		function check()
		{
			var file = document.getElementsByTagName('input')[0].value;
			// console.log(file[0]);
			// document.write(file);
			var strTemp = file.split('.');
			var strCheck = strTemp[strTemp.length - 1];

			if (strCheck.toUpperCase() == 'JPG') 
			{
				return true;
			}else{
				alert('file type is not right!');
				return false;
			}
		}
	</script>
	<form action="#" method="POST" enctype="multipart/form-data">
	<input type="file" name="upload" onchange="return check()"> 
	<input type="submit" name="upload1" onclick="return check()">
	</form>
<?php
}
?>

