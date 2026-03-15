<!DOCTYPE html>

<html>
    <head>
        <title>ubah user</title>
    </head>
    <body>
        <h1>form ubah data user</h1>
<form action="{{ url('/user/ubah_simpan/'.$data->user_id) }}" method="POST">

{{ csrf_field() }}
{{ method_field('PUT') }}

<label>username</label>
<input type="text" name="username" value="{{ $data->username }}" placeholder="masukkan username">
<br>

<label>nama</label>
<input type="text" name="nama" value="{{ $data->nama }}" placeholder="masukkan nama">
<br>

<label>password</label>
<input type="password" name="password" placeholder="masukkan password">
<br>

<label>level_id</label>
<input type="number" name="level_id" value="{{ $data->level_id }}" placeholder="masukkan level_id">
<br><br>

<input type="submit" value="simpan">

</form>
    </body>
</html>