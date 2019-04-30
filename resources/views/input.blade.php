<!DOCTYPE html>
<html>
<head>
	<title>Perpustakaan</title>
</head>
<body>
 
	<h3>Daftar Buku Perpustakaan</h3>
 
	<a href="/tambah"> + Tambah Buku Baru</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>id</th>
			<th>Judul</th>
			<th>Penerbit</th>
			<th>Tahun Terbit</th>
			<th>Pengarang</th>
		</tr>
		@foreach($tabelbuku as $tb)
		<tr>
			<td>{{ $tb->id }}</td>
			<td>{{ $tb->judul }}</td>
			<td>{{ $tb->penerbit }}</td>
			<td>{{ $tb->tahun_terbit }}</td>
            <td>{{ $tb->pengarang }}</td>
			<td>
				<a href="/input/edit/{{ $tb->id }}">Edit</a>
				
				<a href="/input/hapus/{{ $tb->id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
 
</body>
</html>