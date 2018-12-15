<?php 

require_once 'config/database.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Aplikasi Pengelolaan Data Siswa">
	<meta name="keywords" content="Aplikasi Pengelolaan Data Siswa">

	<link rel="shortcut icon" href="assets/img/favicon.png">
	<link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap4/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/plugins/datepicker/css/datepicker.min.css">
	<link rel="stylesheet" type="text/css" href="assets/plugins/fontawesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<title>Data Siswa</title>
</head>
<body>
	<div class="container-fluid">
		<div class="d-flex flex-column flex-md-row aligns-item-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
			<h5 class="my-0 mr-md-auto font-weight-normal"><i class="fas fa-user title-icon"></i>Data Siswa</h5>
		</div>
	</div>

	<div class="container-fluid">
		<?php 

		if (empty($_GET["page"])) {
			include "tampil_data.php";
		} 

		else if($_GET["page"] == "tambah"){
			include "form_tambah.php";
		}

		else if($_GET["page"] == "ubah"){
			include "form_ubah.php";
		}

		 ?>
	</div>

	<div class="container-fluid">
		<footer class="pt-4 my-md-4 pt-md-3 border-top">
			<div class="row">
				<div class="col-12 col-md center">
					&copy; 2018 - <a class="text-info">Indri</a>
				</div>
			</div>
		</footer>
	</div>

	<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="assets/bootstrap4/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/plugins/fontawesome/js/all.min.js"></script>
	<script type="text/javascript" src="assets/plugins/datepicker/js/bootstrap-datepicker.min.js"></script>

	<script type="text/javascript">
		$(document).ready(function(){

			$('.date-picker').datepicker({
				autoclose:true,
				todayHighlight:true
			});
		} );
	</script>


</body>
</html>