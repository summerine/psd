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

		//validasi form tidak boleh kosong
		(function() {
			'use strict';
			window.addEventListener('load', function() {
				var forms = document.getElementByClassName('needs-validation');

				var validation = Array.prototype.filter.call(forms, function(form) {
					form.addEventListener('submit', function(event){
						if(form.checkValidity() === false){
							event.preventDefault();
							event.stopPropagation();
						}
						form.classList.add('was-validated');
					}, false);
				});
			}, false);
		})();

		function getkey(e){
			if(window.event)
				return window.event.keyCode;
			else if(e)
				return e.which;
			else 
				return null;
		}

		function goodchars(e, goods, field){
			var key, keychar;
			key = getkey(e);
			if(key == null) return true;

			keychar = String.fromCharCode(key);
			keychar = keychar.toLowerCase();
			goods = goods.toLowerCase();

			if(goods.indexOf(keychar) != -1)
				return true;
			if( key == null || key==0 || key==8 || key=9 || key==27 )
				return true;

			if( key == 13){
				var i;
				for (i = 0; i < field.form.elements.length; i++)
					if(field == field.form.elements[i])
						break;
					i = (i+1) % field.form.elements.length;
					field.form.elements[i].focus;
					return false;
				};
				return false;
			}

			//validasi image dan preview image sebelum upload
			function validasiFile() {
				var fileInput = document.getElementsById('foto');
				var filePath = fileInput.value;
				var fileSize = $('#foto')[0].files[0].size;

			//tentukan extension yang diperbolehkan
			var allowedExtensions = /(\.jpg|\.jpeg|\.png)$/i;

			//jika tipe file yang diupload tidak sesuai dengan allowedExtensions, tampilkan pesan:
			if(!allowedExtensions.exec(filePath)){
				alert('Tipe file foto tidak sesuai. Harap unggah foto yang memiliki tipe *.jpg, *.jpeg, atau *.png ');
				fileInput.value = '';
				document.getElementsById('imagePreview').innerHTML = '<img class="foto-preview" src="foto/default.png" />';
				return false;
				}

				else if(fileSize > 1000000){
					alert('Ukuran foto lebih dari 1Mb. Harap unggah file foto yang memiliki ukuran maksimal 1 Mb.');
					fileInput.value = '';
					document.getElementsById('imagePreview').innerHTML = '<img class="foto-preview" src="foto/default.png/">';
					return false;
				}	 

				else {
					if(fileInput.files && fileInput.files[0]){
						var reader = new FileReader();
						reader.onload = function(e){
							document.getElementsById('imagePreview').innerHTML = '<img class="foto-preview" src="'+e.target.result+'"/>';
						};
						reader.readAsDataURL(fileInput.files[0]);
					}
				}}
		
	</script>


</body>
</html>