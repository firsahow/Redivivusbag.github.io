<?php
date_default_timezone_set('Asia/Jakarta');
$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];
$tanggal=date('l, d-F-Y H:i:s');
$buka=fopen("hasil_form.html",'a');
        fwrite($buka,"nama : ${nama} <br> ");
		fwrite($buka,"email : ${email} <br> ");
		fwrite($buka,"pesan : ${pesan} <br> ");
        fwrite($buka,"dibuat : ${tanggal} <br> ");
        fwrite($buka,"<hr>");
        fclose($buka);
		?>