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
 					<strong><i class="fas fa-check-circle"></i>Sukses!</strong>Data Siswa berhasil disimpan.
 					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
 						<span aria-hidden="true">&times;</span>
 					</button>
 				</div>
 				
 		<?php 
 		}
 		//jika alert = 2
 		//tampilkan pesan sukses "Data siswa berhasil diubah."
 		elseif ($_GET['alert'] == 2) { ?>
 		<div class="alert alert-success alert-dismissable fade show" role="alert">
 			<strong><i class="fas fa-check-circle"></i>Sukses!</strong>Data Siswa berhasil diubah.
 			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
 				<span aria-hidden="true">&times;</span>
 			</button>
 		</div>

 		<?php
 		}
 		//jika alert = 3
 		//tampilkan pesan sukses "Data siswa berhasil dihapus"
 		elseif ($_GET['alert'] == 3) { ?>
 			<div class="alert alert-success alert-dismissable fade show" role="alert"> 
 				<strong><i class="fas fa-check-circle"></i>Sukses!</strong>Data Siswa berhasil dihapus.
 				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
 					<span aria-hidden="true">&times;</span>
 				</button>
 			</div>

 		<?php
 		}
 		//jika alert = 4
 		//tampilkan pesan gagal "NIS sudah ada"
 		elseif ($_GET['alert'] == 4) { ?>

 		<div class="alert alert-success alert-dismissable fade show" role="alert">
 		<strong><i class="fas fa-check-circle"></i>Gagal!</strong> NIS <b><?php echo $_GET['nis']; ?></b> sudah ada.
 		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
 			<span aria-hidden="true">&times;</span>
 		</button>
 		</div>
 		<?php  
 	 	  }
 	 	?>

 	 	<form class="mr-3" action="index.php"  method="POST">
 	 		<div class="form-row">
 	 			<!-- form cari -->
 	 			<div class="col-3">
 	 				<input type="text" name="form-control" name="cari" placeholder="Cari NIS atau Nama Siswa" value="<?php echo $cari; ?>">
 	 			</div>
 	 			<!-- tombol cari -->
 	 			<div class="col-8">
 	 				<button type="submit" class="btn btn-info">Cari</button>
 	 			</div>
 	 		<!-- tombol tambah data -->
 	 			<div class="col">
 	 				<a class="btn btn-info" href="?page=tambah" role="button"><i class="fas fa-plus"></i>Tambah</a>
 	 			</div>
 	 		</div>
 	 	</form>

 	 	<!-- tabel untuk menampilkan data siswa -->
 	 	
 	</div>
 </div>