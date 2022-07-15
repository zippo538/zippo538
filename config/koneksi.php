<?php 
	try {
	// buat koneksi
	$koneksi = new PDO('mysql:host=localhost;dbname=Kelompok_6','root',"");
	//set Error mode
	$koneksi ->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	//HAPUS Koneksi

	}
	catch(PDOException $e){
	print "Koneksi atau Querry bermasalah" . $e->getMessage() . "<br/>" ;
	die();
	}
						
 ?>