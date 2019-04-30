<!DOCTYPE html>
<html>
<head>
	<title>Perpustakaan</title>
</head>
<body>
 
	<h3>Input data</h3>
 
	<a href="/input"> Kembali</a>

	<br/>
	<br/>
 
	<form action="/input/store" method="post">
		{{ csrf_field() }}
		id <input type="text" name="id" required="required"> <br/>
		Judul <input type="text" name="judul" required="required"> <br/>
		Penerbit <input type="text" name="penerbit" required="required"> <br/>
		Tahun Terbit <input name="tahun_terbit" required="required"> <br/>
        Pengarang <input name="pengarang" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
 
</body>
</html>