<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Dashboard</title>
</head>
<body>
    <div class="container">
        <header>
        <h1>Selamat datang, {{ Auth::user()->name ?? Auth::user()->username }}!</h1>
         <p>Ini halaman dashboard setelah login.</p>

            <!-- Navbar here -->
        </header>
        <div class="sidebar">
            <!-- Sidebar menu -->
            @include('dashboard.sidebar')
        </div>
        <main>
            @yield('content')
        </main>

        <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Logout</button>
         </form>
    </div>
</body>
</html>