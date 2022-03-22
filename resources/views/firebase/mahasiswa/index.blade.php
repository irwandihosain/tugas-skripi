@extends('firebase.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if(session('status'))
            <h4 class="alert alert-warning mb-2">{{ session('status') }}</h4>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4>Daftar Mahasiswa : {{ $total_mahasiswa }}
                        <a href="{{ url('add-mahasiswa') }}" class="btn btn-sm btn-primary float-end">Add Mahasiswa</a>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Nim</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $i = 1
                            @endphp
                            @forelse ($mahasiswas as $key => $mahasiswa)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $mahasiswa['name'] }}</td>
                                <td>{{ $mahasiswa['nim'] }}</td>
                                <td>{{ $mahasiswa['email'] }}</td>
                                <td>{{ $mahasiswa['phone'] }}</td>
                                <td><a href="{{ url('edit-mahasiswa/'.$key) }}" class="btn btn-sm btn-success">Edit</a></td>
                                <td><a href="{{ url('delete-mahasiswa/'.$key) }}" class="btn btn-sm btn-danger">Delete</a></td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="?">No Record Found</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection