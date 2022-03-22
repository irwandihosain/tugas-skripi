@extends('firebase.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Edit Mahasiswa
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('update-mahasiswa/'.$key) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                            <label>Name</label>
                            <input type="text" value="{{$editdata['name']}}" name="name" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label>Nim</label>
                            <input type="text" value="{{$editdata['nim']}}" name="nim" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label>Phone Number</label>
                            <input type="text" value="{{$editdata['phone']}}" name="phone" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label>Email Adress</label>
                            <input type="text" value="{{$editdata['email']}}" name="email" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection