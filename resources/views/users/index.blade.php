<!-- resources/views/users/index.blade.php -->
<h1>Daftar User</h1>
<a href="{{ route('users.create') }}">+ Tambah User</a>
@if(session('success')) <p style="color:green">{{ session('success') }}</p> @endif
<table border="1" cellpadding="10">
    <tr>
        <th>name</th><th>Email</th><th>Aksi</th>
    </tr>
    @foreach($users as $user)
    <tr>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>
            <a href="{{ route('users.edit', $user) }}">Edit</a>
            <form action="{{ route('users.destroy', $user) }}" method="POST" style="display:inline">
                @csrf @method('DELETE')
                <button type="submit" onclick="return confirm('Yakin hapus?')">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
