<HTML>
<HEAD><TITLE>SAVE</TITLE></HEAD>
<link rel="stylesheet" type="text/css" href="identitasdiri.css">
<BODY>
<div class="wrap">
	<div class="string">
		<h1>Identitas Diri</h1>
		<?PHP
			$name = ($_POST["nama_lengkap"]);
			$alamat = ($_POST["alamat"]);
			$date = ($_POST["tanggal_lahir"]);
			$jk = ($_POST["jk"]);
			$no_whatsapp = ($_POST["no_whatsapp"]);

			echo "Nama lengkap =",$name,"<br>";
			echo "alamat =",$alamat,"<br>";
			echo "tanggal lahir =",$date,"<br>";
			echo "jenis kelamin =",$jk,"<br>";
			echo "no whatsapp =",$no_whatsapp,"<br>";
		?>
	</div>
</div>
</BODY>
</HTML>