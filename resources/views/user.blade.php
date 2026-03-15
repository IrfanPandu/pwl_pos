<!DOCTYPE html>

<html>
    <head>
        <title>Data User</title>
    </head>
    <body>
        <h1>data user</h1>
        <a href="{{ url('/user/tambah') }}">+ Tambah User</a>
        <table border='1' cellpadding='2' cellspacing='0'>
            <tr>
                <th>ID</th>
                <th>username</th>
                <th>nama</th>
                <th>id level pengguna</th>
                <th>aksi</th>
            </tr>
            @foreach ($data as $d)
                <tr>
                    <td>{{$d->user_id}}</td>
                    <td>{{$d->username}}</td>
                    <td>{{$d->nama}}</td>
                    <td>{{$d->level_id}}</td>
                    <td><a href="/user/ubah/{{ $d->user_id}}">ubah</a> <a href="/user/hapus/{{$d->user_id}}">hapus</a></td>
                </tr>
            @endforeach
        </table>
    </body>
</html> 