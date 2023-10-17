<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Daftar data warga </h2>

    <a class="btn-primary mt-2" href="/warga/create">Tambah Data</a>
    <br><br>
    <table class="table trable-hover">
        <thead>
            <th>No.</th>
            <th>Nama</th>
            <th>NIK</th>
            <th>No. KK</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </thead>    
<body>
    @foreach ($warga as $w)
    <tr>
        <td>{{  $loop->iteration }}</td>
        <td>{{  $w->nama  }}</td>
        <td>{{  $w->nik }}</td>
        <td>{{  $w->no_kk }}</td>
        <td class="text-center">{{  $w->jenis_kelamin  }}</td>
        <td>{{  $w->alamat  }}</td>
        <td>
            <a class="btn btn-warning" href="/warga/{{  $w->id }}/edit">Edit</a> <br><br>

            <form action="/warga/{{  $w->id }}" method="post">
                @csrf
                @method('delete')
                <button class="btn btn-danger" type="submit" value="Delete" onclick="confirm('Yakin ingin Hapus')">
                </form>
            </td>
        </tr>
        @endforeach
</body>
</html>
