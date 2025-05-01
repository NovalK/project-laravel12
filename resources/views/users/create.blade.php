<h1>Tambah User</h1>
<form method="POST" action="{{ route('users.store') }}">
    @csrf
    Username: <input type="text" name="name" required><br>
    Email: <input type="email" name="email" required><br>
    Password: <input type="password" name="password" required><br>
    <button type="submit">Simpan</button>
</form>
<a href="{{ route('users.index') }}">Kembali</a>
