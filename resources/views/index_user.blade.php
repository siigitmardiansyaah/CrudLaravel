@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Data User</h3>
            </div>
            <div class="card-body">
                <a href="{{route('user.create')}}"> Tambah Data User</a>
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>Nama</th>
                        <th>Role</th>
                        <th>Email</th>
                        <th>aksi</th>
                    </tr>
                    <tr>
                        @foreach ($user as $s)
                            <tr>
                                <td>{{$s->name}}</td>
                                <td>{{$s->role}}</td>
                                <td>{{$s->email}}</td>
                                <td>
                                    <ul class="nav">
                                        <a href="{{route('user.edit',$s->id)}}" class="btn btn-primary mr-2">Edit</a>
                                        <form action="{{route('user.destroy',$s->id)}}" method="POST">
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