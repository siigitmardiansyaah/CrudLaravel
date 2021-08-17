@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Ubah Data Siswa</h3>
            </div>
            <div class="card-body">
                <a href="{{route('siswa.index')}}" class="btn btn-info">Kembali</a>
                <form action="{{route('siswa.update',$siswa->id)}}" method="post">
                @csrf
                @method('PUT')
                <ul class="list-group">
                    
                    Nama <input type="text" name="nama" name="nama" id="nama" required value="{{$siswa->nama}}">
                    NIS <input type="text" name="nis" name="nis" id="nis" required value="{{$siswa->nis}}">
                    Tanggal Lahir <input type="date" name="tanggal_lahir" name="tanggal_lahir" id="tanggal_lahir" required value="{{$siswa->tanggal_lahir}}">
                </ul>
                <input type="submit" name="Ubah Data" class="btn btn-success">
                </form>
            </div>
        </div>
    </div>
@endsection