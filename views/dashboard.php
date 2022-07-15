
<?php
include ('config/koneksi.php'); 
?>

<h1 class="h3 mb-4 text-gray-800">Dashboard</h1>
<div class="row">

	<!-- Earnings (Monthly) Card Example -->
	<div class="col-xl-3 col-md-6 mb-4">
		<div class="card border-left-primary shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Mahasiswa</div>
						<div class="h5 mb-0 font-weight-bold text-gray-800">
							<?php 
							$count = $koneksi->query('SELECT COUNT(*) FROM mahasiswa')->fetchColumn();
							
							?>	
							<p><b><?php echo $count ?></b></p>
						</div>
					</div>
					<div class="col-auto">
						<i class="fas fa-calendar fa-2x text-gray-300"></i>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-xl-3 col-md-6 mb-4">
		<div class="card border-left-primary shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Rata-rata Nilai UTS</div>
						<div class="h5 mb-0 font-weight-bold text-gray-800">
							<?php 
							$countUts = $koneksi->query('SELECT  AVG(nilai_tugas) AS rata_rata  FROM nilai, mahasiswa WHERE nilai.npm')->fetchColumn();
							
							?>	
							<p><b><?php echo $countUts ?></b></p>
						</div>
					</div>
					<div class="col-auto">
						<i class="fas fa-calendar fa-2x text-gray-300"></i>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-xl-3 col-md-6 mb-4">
		<div class="card border-left-primary shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Rata-rata Nilai UAS</div>
						<div class="h5 mb-0 font-weight-bold text-gray-800">
							<?php 
							$countUas = $koneksi->query('SELECT  AVG(nilai_uts) AS rata_rata  FROM nilai, mahasiswa WHERE nilai.npm')->fetchColumn();
							
							?>	
							<p><b><?php echo $countUas ?></b></p>
						</div>
					</div>
					<div class="col-auto">
						<i class="fas fa-calendar fa-2x text-gray-300"></i>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>	