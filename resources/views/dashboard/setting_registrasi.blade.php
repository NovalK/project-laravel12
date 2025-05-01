@extends('dashboard.layout')

@section('content')
    <h2>Setting Registrasi</h2>
    <form action="{{ route('setting.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="perbolehkan">Perbolehkan</label>
            <select id="perbolehkan" name="perbolehkan">
                <option value="ya">Ya</option>
                <option value="tidak">Tidak</option>
            </select>
            <p>Perbolehkan user register akun baru?</p>
        </div>

        <div class="form-group">
            <label for="aktivasi">Aktivasi</label>
            <select id="aktivasi" name="aktivasi">
                <option value="email_konfirmasi">Via Email Konfirmasi</option>
                <option value="langsung">Langsung</option>
            </select>
            <p>Manual: setelah register, admin mengaktifkan akun melalui menu edit user.</p>
        </div>

        <div class="form-group">
            <label for="role">Role</label>
            <select id="role" name="role">
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select>
            <p>Role untuk user baru yang melakukan registrasi.</p>
        </div>

        <button type="submit">Submit</button>
    </form>
@endsection