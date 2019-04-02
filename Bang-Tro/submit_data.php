<?php
require 'assets/konek.php';
	if (isset($_POST['submit'])) {
		$keluhan = $_POST['keluhan'];
		$layanan = $_POST['layanan'];
		$berapaunit = $_POST['berapaunit'];
		$membawatangga = $_POST['membawatangga'];
		$kapananda = $_POST['kapananda'];
		$jamberapa = $_POST['jamberapa'];
		$informasitambahan = $_POST['informasitambahan'];
		$namagambar = $_FILES['gambar']['name'];
		$insert = mysqli_query($koneksi, "INSERT INTO pesan VALUES ('','$keluhan','$layanan','$berapaunit','$membawatangga','$kapananda','$jamberapa','$informasitambahan','$namagambar')");
		if ($insert) {
			header("Location: index.php?kirim=yes");
		} else {
			header("Location: index.php?kirim=no");
		}
	}
?>