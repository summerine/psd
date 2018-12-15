<?php 

//pengecekan pencarian data
//jika dilakukan pencarian data, maka tampilkan kunci pencarian
if(isset($_POST['cari'])){
	$cari = $_POST['cari'];
} 
//jika tidak maka kosong
else {
	$cari = "";
}

 ?>

 <div class="row">
 	<div class="col-md-12">
 		<?php 
 		//fungsi untuk menampilkan pesan
 		// jika alert = "" (kosong)
 		//tampilkan pesan "" (kosong)
 		if(empty($_GET['alert'])){
 			echo "";

 		}	
 		 
 		 //jika alert = 1
 		// tampilkan pesan sukses "Data Siswa berhasil disimpan"

 			elseif ($_GET['alert'] == 1) { ?>
 				<div class="alert alert-success alert-dismissable fade show" role="alert">
 					<strong><i class="fas fa-check-circle"></i>Sukses!</strong>Data Ssiwa berhasil disimpan.
 					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
 						<span aria-hidden="true">&times;</span>
 					</button>
 				</div>
 				
 		<?php 
 		?>
 		}
 		
 	</div>
 </div>