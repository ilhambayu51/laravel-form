<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Membuat Form Validasi Pada Laravel</title>
</head>
    <body>
        <h3>Form Peminjaman Buku : </h3>
        <a href="/input"> +input data baru </a>
        <h3></h3>
            <table border="1">
                <tr>
                <th>id</th>

                <th>Judul</th>
                
                <th>Penerbit</th>
                
                <th>Tahun Terbit</th>

                <th>Pengarang</th>
                <th></th>
                </tr>
                <tr>
                <td>{{ $data->id }}</td>
         
                <td>{{ $data->judul }}</td>
               
                <td>{{ $data->penerbit }}</td>
            
                <td>{{ $data->tahun_terbit }}</td>

                <td>{{ $data->pengarang }}</td>

                <td>
                <a href="/edit{{ $data->id }}">Edit</a>
				
				<a href="/hapus{{ $data->id }}">Hapus</a>
                </td>
           </tr>
        </table><br/>
        <a href="/input" class="btn btn-primary">Kembali</a>
    </body>
</html>