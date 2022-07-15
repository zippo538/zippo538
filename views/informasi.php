
<?php
include ('config/koneksi.php'); 
?>

<h1 class="h3 mb-4 text-gray-800">Informasi Mahasiswa</h1>
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
						<th>Nama </th>
						<th>Kelas</th>
						<th>Semester</th>
						<th>Kd Prodi</th>
					
					</tr>
				</thead>
				<tbody>
				<?php
						//  Menjankan Query 
						$result = $koneksi->query('SELECT * FROM `mahasiswa`'); 
						//tampilkan data
						while ($row = $result->fetch(PDO::FETCH_OBJ)) {
					echo "<tr>";
						echo "<td>$row->NPM</td>";
						echo "<td>$row->nama</td>";
						echo "<td>$row->kelas</td>";
						echo "<td>$row->semester</td>";
						echo "<td>$row->kd_prodi</td>";
							
							
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
					<h5 class="modal-title" id="tambahProductLabel">Tambah Mahasiswa</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form method="post" action="?page=informasi" >
					<div class="modal-body">
						<div class="form-group">
							<label for="inputID">NPM</label>
							<input type="text" class="form-control" id="npm" placeholder="NPM" name="npm" required>
						</div>
						<div class="form-group">
							<label for="inputNama">Nama Mahasiswa</label>
							<input type="text" class="form-control" id="nama" placeholder="Nama" name="nama" required>
						</div>
						<div class="form-group">
							<label for="inputKelas">Kelas</label>
							<input type="text" class="form-control" id="kelas" placeholder="Kelas" name="kelas" required>
						</div>
						<div class="form-group">
							<label for="inputSemester">Semester</label>
							<input type="number" class="form-control" id="semester" placeholder="Semester" name="semester" required>
						</div>
						<div class="form-group">
							<label for="inputProdi">Kode Prodi</label>
							<input type="text" class="form-control" id="kd_prodi" placeholder="Kode Prodi" name="kd_prodi" required>
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

<?php
if (isset($_POST['submit'])){
	$npm =$_POST['npm'];
	$nama =$_POST['nama'];
	$kelas =$_POST['kelas'];
	$semester =$_POST['semester'];
	$prodi =$_POST['kd_prodi'];
	
	$save= $koneksi->prepare("INSERT INTO mahasiswa VALUES (?, ?, ?, ?, ?)"); 

	$save->bindParam(1, $npm);
	$save->bindParam(2, $nama);
	$save->bindParam(3, $kelas);
	$save->bindParam(4, $semester);
	$save->bindParam(5, $prodi);

	$save->execute();
	if($save) {
		echo "data berhasil disimpan";
	} else{
		echo "Input gagal";
	}
	
}
$koneksi = null ;



?> 