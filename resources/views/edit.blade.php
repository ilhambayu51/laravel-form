<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
</head>
<body>
 
	
	<h3>Edit id</h3>
 
	<a href="/input"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($tabelbuku as $tb)
	<form action="/input/update" method="post">
		{{ csrf_field() }}
		id <input type="text" name="id" value="{{ $tb->id }}"> <br/>
		judul <input type="text" required="required" name="judul" value="{{ $tb->judul }}"> <br/>
		penerbit <input type="text" required="required" name="penerbit" value="{{ $tb->penerbit }}"> <br/>
		Tahun Terbit <input type="integer" required="required" name="tahun_terbit" value="{{ $tb->tahun_terbit }}"> <br/>
		Pengarang <input type="text" required="required" name="pengarang" value="{{ $tb->pengarang }}"><br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		
 
</body>
</html>