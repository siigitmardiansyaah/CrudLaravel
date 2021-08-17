@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Ubah Data User</h3>
            </div>
            <div class="card-body">
                <a href="{{route('user.index')}}" class="btn btn-info">Kembali</a>
                <form action="{{route('user.update',$user->id)}}" method="post">
                @csrf
                @method('PUT')
                <ul class="list-group">
                    Nama <input type="text" name="name" value="{{$user->name}}"  id="name" required>
                    Siswa <select name="siswa_id" id="siswa_id" value="{{$user->siswa_id}}">
                        <option value="">Pilih Siswa</option>
                        @foreach ($siswa as $s)
                        <option value="{{$s->id}}">{{$s->nama}}</option>
                        @endforeach
                    </select>
                    Role <select name="role" id="role" value="{{$user->role}}" required>
                        <option value="">Pilih Role</option>
                        <option value="admin">Admin</option>
                        <option value="siswa">Siswa</option>
                    </select>
                    Email <input type="email" name="email" id="email" value="{{$user->email}}" required>
                    Password <input type="password" name="password" id="password" value="{{$user->password}}" required>
                </ul>
                <input type="submit" name="Ubah Data" class="btn btn-success">
                </form>
            </div>
        </div>
    </div>
@endsection