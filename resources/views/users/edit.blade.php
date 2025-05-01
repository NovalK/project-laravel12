<h1>Edit User</h1>
<form method="POST" action="{{ route('users.update', $user) }}">
    @csrf @method('PUT')
    Username: <input type="text" name="username" value="{{ $user->username }}" required><br>
    Email: <input type="email" name="email" value="{{ $user->email }}" required><br>
    Password (kosongkan jika tidak ganti): <input type="password" name="password"><br>
    <button type="submit">Update</button>
</form>
<a href="{{ route('users.index') }}">Kembali</a>
