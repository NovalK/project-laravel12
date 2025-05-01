<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h1>Selamat datang, {{ Auth::user()->name ?? Auth::user()->username }}!</h1>
    <p>Ini halaman dashboard setelah login.</p>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Logout</button>
    </form>
</body>
</html>
