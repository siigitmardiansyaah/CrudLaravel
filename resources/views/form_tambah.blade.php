@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card-header">
        <h3>Tambah Siswa</h3>
    </div>
    <div class="card-body">
        <a href="{{route('siswa.index')}}" class="btn btn-info">Kembali</a>
        <form action="{{route('siswa.store')}}" method="POST">
        @csrf
        <ul class="list-group">
            
            Nama <input type="text" name="nama" name="nama" id="nama" required>
            NIS <input type="text" name="nis" name="nis" id="nis" required>
            Tanggal Lahir <input type="date" name="tanggal_lahir" name="tanggal_lahir" id="tanggal_lahir" required>
        </ul>
        <input type="submit" value="Simpan" class="btn btn-success">
        </form>
    </div>
</div>
    
@endsection