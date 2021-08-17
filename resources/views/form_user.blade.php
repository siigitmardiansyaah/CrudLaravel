@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card-header">
        <h3>Tambah User</h3>
    </div>
    <div class="card-body">
        <a href="{{route('user.index')}}" class="btn btn-info">Kembali</a>
        <form action="{{route('user.store')}}" method="POST">
        @csrf
        <ul class="list-group">
            Nama <input type="text" name="name"  id="name" required>
            Siswa <select name="siswa_id" id="siswa_id">
                <option value="">Pilih Siswa</option>
                @foreach ($siswa as $s)
                <option value="{{$s->id}}">{{$s->nama}}</option>
                @endforeach
            </select>
            Role <select name="role" id="role" required>
                <option value="">Pilih Role</option>
                <option value="admin">Admin</option>
                <option value="siswa">Siswa</option>
            </select>
            Email <input type="email" name="email" id="email" required>
            Password <input type="password" name="password" id="password" required>
        </ul>
        <input type="submit" value="Simpan" class="btn btn-success">
        </form>
    </div>
</div>
    
@endsection