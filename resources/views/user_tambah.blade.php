<!DOCTYPE html>

<html>
    <head>
        <title>tambah user</title>
    </head>
    <body>
        <h1>form tambah data user</h1>
       <form action="{{ url('/user/tambah_simpan') }}" method="post">
        
        {{ csrf_field() }}
        
        <label>username</label>
        <input type="text" name="username" placeholder="masukkan username">
        <br>
        <label>nama</label>
        <input type="text" name="nama" placeholder="masukkan nama">
        <br>
        <label>password</label>
        <input type="password" name="password" placeholder="masukkan password">
        <br>
        <label>level_id</label>
        <input type="number" name="level_id" placeholder="masukkan level_id">
        <br><br>
        <input type="submit" class="btn btn-success" value="simpan">
        </form>
    </body>
</html>