<html>

<head>
	<title>Upload File dengan PHP & AJAX jQuery Qaei</title>
	<link href="style.css" rel="stylesheet" type="text/css" />
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(e) {
			$("#uploadForm").on('submit', (function(e) {
				e.preventDefault();
				$.ajax({
					url: "upload.php",
					type: "POST",
					data: new FormData(this),
					contentType: false,
					cache: false,
					processData: false,
					success: function(data) {
						$("#targetPhoto").html(data);
					},
					error: function() {}
				});
			}));
		});
	</script>
</head>

<body>


	<div class="container">
		<form id="uploadForm" action="upload.php" method="post">
			<div id="targetPhoto">No Image</div>
			<div id="uploadFormContent">
				<label>Upload Foto Anda:</label><br />
				<input name="userImage" type="file" class="inputFile" />
				<input type="submit" value="Submit" class="btnSubmit" />
			</div>
		</form>
	</div>
</body>

</html>