@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Data Siswa</h3>
            </div>
            <div class="card-body">
                <a href="{{route('siswa.create')}}"> Tambah Data Siswa</a>
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>nama</th>
                        <th>nis</th>
                        <th>tanggal lahir</th>
                        <th>aksi</th>
                    </tr>
                    <tr>
                        @foreach ($siswa as $s)
                            <tr>
                                <td>{{$s->nama}}</td>
                                <td>{{$s->nis}}</td>
                                <td>{{$s->tanggal_lahir}}</td>
                                <td>
                                    <ul class="nav">
                                        <a href="{{route('siswa.show',$s->id)}}" class="btn btn-success mr-2">Show</a>
                                        <a href="{{route('siswa.edit',$s->id)}}" class="btn btn-primary mr-2">Edit</a>
                                        <form action="{{route('siswa.destroy',$s->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="submit" class="btn btn-info mr-2">Delete</button>
                                        </form>
                                    </ul>
                                </td>
                            </tr>
                        @endforeach
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection