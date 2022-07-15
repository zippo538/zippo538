
<?php
include ('config/koneksi.php'); 
?>

<h1 class="h3 mb-4 text-gray-800">Nilai</h1>
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">
			<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambahProduct">
			Tambah
			</button>
			<button class="btn btn-info btn-sm"> <i class="fa fa-edit"></i> Edit </button>
			<button class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i> Hapus </button>
		</h6>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>NPM</th>
						<th>Kode Mata Kuliah </th>
						<th>Nilai Latihan</th>
						<th>Nilai Tugas</th>
						<th>Nilai Kuis</th>
						<th>Nilai UTS</th>
						<th>Nilai UAS</th>
					
					</tr>
				</thead>
				<tbody>
				<?php
						//  Menjankan Query 
						$result = $koneksi->query('SELECT * FROM `nilai`'); 
						//tampilkan data
						while ($row = $result->fetch(PDO::FETCH_OBJ)) {
					echo "<tr>";
						echo "<td>$row->NPM</td>";
						echo "<td>$row->kd_mataKuliah</td>";
						echo "<td>$row->nilai_latihan</td>";
						echo "<td>$row->nilai_tugas</td>";
						echo "<td>$row->nilai_kuis</td>";
						echo "<td>$row->nilai_uts</td>";
						echo "<td>$row->nilai_uas</td>";
							
						}
						
						$koneksi = null ;
						?>
						
						<!-- <td>BP01</td>
						<td>Beras</td>
						<td>4500</td>
						<td>30</td> -->
						
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<!-- Modal -->
	<div class="modal fade" id="tambahProduct" tabindex="-1" role="dialog" aria-labelledby="tambahProductLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="tambahProductLabel">Tambah Barang</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form method="post" action="" enctype="multipart/form-data">
					<div class="modal-body">
						<div class="form-group">
							<label for="inputID">Kode Barang</label>
							<input type="text" class="form-control" id="inputID" placeholder="Masukkan ID" name="kode_input" required>
						</div>
						<div class="form-group">
							<label for="inputNama">Nama Barang</label>
							<input type="text" class="form-control" id="inputNama" placeholder="Masukkan Nama" name="nama_input" required>
						</div>
						<div class="form-group">
							<label for="inputStok">Stok Barang</label>
							<input type="number" class="form-control" id="inputStok" placeholder="Masukkan STOK" name="stok_input" required>
						</div>
						<div class="form-group">
							<label for="inputHarga">Harga Barang</label>
							<input type="number" class="form-control" id="inputHarga" placeholder="Masukkan Harga" name="harga_input" required>
						</div>
						<div class="form-group">
							<label for="inputGambar">Gambar Barang</label>
							<input type="file" class="form-control" id="inputGambar" placeholder="Masukkan Harga" name="gambar_input" required>
						</div>
					</div>
					<div class="modal-footer">
						<button type="reset" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
						<input type="submit" name="submit" value="Simpan" class="btn btn-primary btn-sm">
					</div>
				</form>
			</div>
		</div>
	</div>

</div>