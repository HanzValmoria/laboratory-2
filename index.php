<!Doctype  html>
<html>
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="='X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="main.css">
    <title>PHP FILE UPLOAD</title>
</head>
<body>
<div class="container">
		<div class="card">
			<div class=""> 
		</div>
    <h2>File Uploading.......</h2>
    <label for="File Uploading"></label>
<form action="upload.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="file">
    <button type="submit" name="submit">Upload File</button>
</form>

</body>
</html>